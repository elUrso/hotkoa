//DB Setting up
const drop_users =
"DROP TABLE users;"

const drop_sessions =
"DROP TABLE sessions;"

const user_table =
"CREATE TABLE users (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) NOT NULL,hash VARCHAR(255) NOT NULL, info TEXT);"
const dummy_user =
"INSERT INTO users (email, hash, info) VALUES ('test@name.com', 'password', '{}');"
const foo_user =
"INSERT INTO users (email, hash, info) VALUES ('foo', '5E884898DA28047151D0E56F8DC6292773603D0D6AABBDD62A11EF721D1542D8', '{}');"

const select_users =
"SELECT * FROM users;"

const session_table =
"CREATE TABLE sessions(id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, user_id INT(6) UNSIGNED NOT NULL, valid DATE NOT NULL, status TINYINT(1) UNSIGNED NOT NULL, hash VARCHAR(255) NOT NULL, FOREIGN KEY (user_id) REFERENCES users(id));"
// Date is in format YYYY-MM-DD

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

db_con.query(drop_sessions, function (error, result) {
                console.log(error)
                console.log(result)
             })

db_con.query(user_table, function (error, result) {
                    console.log(error)
                    console.log(result)
             })

db_con.query(session_table, function (error, result) {
             console.log(error)
             console.log(result)
             })

db_con.query(dummy_user, function (error, result) {
                console.log(error)
                console.log(result)
             })

db_con.query(foo_user, function (error, result) {
                console.log(error)
                console.log(result)
             })

db_con.query(select_users, function (error, results, fields) {
                console.log(error)
                console.log(results)
                console.log(fields)
             })

db_con.end();

concurso2018
rC7Rb8zJtMqUnKH5