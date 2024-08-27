import axios from 'axios';

const API_URL = 'http://localhost:8000/api/v1';

export const api = {
    async ping() {
        const response = await axios.get(`${API_URL}/ping`);
        return response.data;
    },
}