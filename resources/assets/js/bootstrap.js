import axios from 'axios';

window.axios = axios.create({
    headers: {
        'X-Requested-With': 'XMLHttpRequest'
    }
});
