const dev = true
const path = dev ? 'http://0.0.0.0:8080' : 'https://hotkoa.herokuapp.com'

const login = () => {
    const query = {}
    query.selector = 'login'
    query.email = document.querySelector('#username').value
    query.hash = document.querySelector('#password').value
    axios.post(path, query).then(res => console.log(res))
}
