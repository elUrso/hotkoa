const dev = true
const path = dev ? 'http://0.0.0.0:8080' : 'https://hotkoa.herokuapp.com'

axios.post(path, {user:"name", pass:"secret"})

const login = () => {
    const query = {}
    query.selector = 'login'
    query.user = document.querySelector('#username').value
    query.secret = document.querySelector('#password').value
    axios.post(path, query).then(res => console.log(res))
}
