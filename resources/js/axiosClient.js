import axios from 'axios';
import store from './store';
import { usePage } from '@inertiajs/vue3'

const axiosClient = axios.create();
const page = usePage()
const token = page.props.token;

axiosClient.defaults.baseURL = import.meta.env.VITE_API_BASE_URL + "/api";
console.log('token', token);

// FIXME: This is not working
axiosClient.interceptors.request.use(config => {
  config.headers.Authorization = `Bearer ${token}`;
  return config;
});

axiosClient.interceptors.response.use(
  (response) => {
    return response;
  },
  (error) => {
    return error;
  }
);

export default axiosClient;
