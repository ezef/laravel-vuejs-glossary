import axios from 'axios';

export default {
    all() {
        return axios.get('/api/glossary');
    },
    find(id) {
        return axios.get(`/api/glossary/${id}/edit`);
    },
};