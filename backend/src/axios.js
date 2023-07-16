import axios from 'axios';
import store from './store';
import Template from './modules/template';

const axiosClient = axios.create();

axiosClient.defaults.baseURL = import.meta.env.VITE_API_BASE_URL + "/api";

axiosClient.interceptors.request.use(config => {
  config.headers.Authorization = `Bearer ${store.state.user.token}`;
  return config;
});

axiosClient.interceptors.response.use(response => {
  return response;
}, error => {
  if (error.response.status === 401) {
    store.commit('setUser', null);
    store.commit('setToken', null);
  }
  return error.response;
}
);

export default axiosClient;
