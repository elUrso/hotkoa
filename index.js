const port = process.env.PORT || 8080

const Koa = require('koa')
const app = new Koa()

app.use(
        async ctx => {
            ctx.body = 'Hello World'
        })

app.listen(port)
