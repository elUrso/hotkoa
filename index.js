const port = process.env.PORT || 8080

//DB Setting up
const mysql = require('mysql')

class Database {
    constructor( config ) {
        this.connection = mysql.createConnection(config);
    }
    query(sql) {
        return new Promise((resolve, reject) => {
            this.connection.query(sql, (err, rows) => {
                if (err)
                    return reject(err);
                resolve(rows);
            });
        });
    }
    close() {
        return new Promise((resolve, reject) => {
            this.connection.end(err => {
                if (err)
                    return reject(err);
                resolve();
            });
        });
    }
}

const config = {
             host: '108.179.193.13',
             user: 'instit93_con2018',
             password: '2EE-zog-B9B-qA4',
             database: 'instit93_concurso2018'
}

//DB Helper Functions
const auth_user = async (email, hash, ctx) => {
    const con = new Database(config)
    let result = await con.query(`SELECT id, email, hash FROM users WHERE email LIKE "${email}"`)
    con.close()
    try {
        if(result[0].hash === hash)
            return "! Login Ok"
    } catch(e) {
            console.log("Invalid Query")
    }
    return "! Login Error"
}

//Koa Setting up
const Koa = require('koa')
const cors = require('@koa/cors')
const bodyParser = require('koa-bodyparser')

const app = new Koa()

// Enable Cross-Origin Resource Sharing
app.use(cors())
// Enable POST parse
app.use(bodyParser())

app.use(
        async (ctx, next) => {
            let query = {}
            try {
                query = ctx.request.body
                console.log(query)
                if (typeof(query.selector) !== 'string') {
                    throw new Error("Invalid request")
                }
            }
            catch (e) {
                ctx.body = '! Invalid request'
                return ;
            }
            switch(query.selector) {
                case 'login':
                    ctx.body = await auth_user(query.email, query.hash, ctx)
                    break;
            }
})

app.listen(port)
