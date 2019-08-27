import axios from 'axios';

export default {
    all() {
        return axios.get('/api/glossary');
    },
    find(id) {
        return axios.get(`/api/glossary/${id}/edit`);
    },
    update(id,data){
    	return axios.put(`/api/glossary/${id}`, data);
    }
};