const dev = true
const path = dev ? 'http://0.0.0.0:8080' : 'https://hotkoa.herokuapp.com'

axios.post(path, {user:"name", pass:"secret"})
