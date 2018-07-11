//DB Setting up
const drop_users =
"DROP TABLE users;"
const user_table =
"CREATE TABLE users (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) NOT NULL,hash VARCHAR(255) NOT NULL);"
const dummy_user =
"INSERT INTO users (email, hash) VALUES ('test@name.com', 'password');"
const select_users =
"SELECT * FROM users;"

const mysql = require('mysql')
const db_con = mysql.createConnection({
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

db_con.query(drop_users, function (error, result) {
                console.log(error)
                console.log(result)
             })

db_con.query(user_table, function (error, result) {
                    console.log(error)
                    console.log(result)
             })

db_con.query(dummy_user, function (error, result) {
                    console.log(error)
                    console.log(result)
             })

db_con.query(select_users, function (error, results, fields) {
             console.log(error)
             console.log(results)
             console.log(fields)
             })

db_con.end();
