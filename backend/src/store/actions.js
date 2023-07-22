import axiosClient from "../axios";

export function getUser({ commit }, data) {
  return axiosClient.get("/user" + data)
    .then(({ data }) => {
      commit("setUser", data);
      return data;
    });
}

export function register({commit}, data) {
  return axiosClient.post("/register", data)
    .then(({ data }) => {
      commit('setUser', data.user);
      commit('setToken', data.token);
      return data;
    });
}

export function login({commit}, data) {
  return axiosClient.post("/login", data)
    .then(({ data }) => {
      commit('setUser', data.user);
      commit('setToken', data.token);
      return data;
    }).catch(({error}) => {
      return error;
    })
}

export function logout({commit}) {
  return axiosClient.post("/logout")
  .then((response) => {
    commit('setUser', null);
    commit('setToken', null);
    return response;
  });
}
