import axios from 'axios';

const api = axios.create({
    baseURL: '/api',
});

export default {
    all(params) {
        return api.get('papers', params);
    },
    find(id){
        return api.get(`papers/${id}`);
    },
    update(id,data){
        return api.put(`papers/${id}`,data);
    },
    delete(id){
        return api.delete(`papers/${id}`);
    },
    create(data){
        return api.post('papers', data);
    }
}

//users의 경로 자체를 변경한 내용을 axios형태 변수로 지정하고 이 내용으로 
//해당 메소드와 파라미터를 전달한다.