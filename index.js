const port = process.env.PORT || 8080

//DB Setting up
const mysql = require('mysql')
const db_con =
    mysql.createConnection({
        host: '108.179.193.13',
        user: 'instit93_con2018',
        password: '2EE-zog-B9B-qA4',
        database: 'instit93_concurso2018'
    })

console.log("Testing DB connection")
db_con.connect(function(err) {
            if (err) throw err;
            console.log("Connected!");
            });
db_con.end();

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
        async ctx => {
            let query = {}
            try {
                query = ctx.request.body
                if (typeof(query.selector) !== 'string') {
                    throw new Error("Invalid request")
                }
            }
            catch (e) {
                ctx.body = '! Invalid request'
                return ;
            }
            switch(query) {
                
            }
})

app.listen(port)
