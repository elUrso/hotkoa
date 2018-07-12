//Helper library
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

const con = new Database({
                         host: '108.179.193.13',
                         user: 'instit93_con2018',
                         password: '2EE-zog-B9B-qA4',
                         database: 'instit93_concurso2018'
                         })
