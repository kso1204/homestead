import axios from 'axios';

/*
export default {
    all()
    {
         return axios.get('/api/users');
    },
    find(id){
        return axios.get(`/api/users/${id}`);
    },
    update(id, data){
        return axios.put(`/api/users/${id}`, data);
    }, 
    delete(id, data){
        return axios.delete(`/api/users/${id}`, data);
    },
};*/

const client = axios.create({
    baseURL: '/api',
});

export default {
    all(params) {
        return client.get('users', params);
    },
    find(id){
        return client.get(`users/${id}`);
    },
    update(id,data){
        return client.put(`users/${id}`,data);
    },
    delete(id){
        return client.delete(`users/${id}`);
    },
    create(data){
        return client.post('users', data);
    }
}

//users의 경로 자체를 변경한 내용을 axios형태 변수로 지정하고 이 내용으로 
//해당 메소드와 파라미터를 전달한다.