import axios from "axios";

export default axios.create({
    baseURL: 'http://adriaticante.local/api/',
    timeout: 1000,
    headers: {'X-Custom-Header': 'foobar'}
});