import axiosClient from "../axios";

// ############################## USER ##############################
export function getUser({ commit }, data) {
  return axiosClient.get("/user" + data)
    .then(({ data }) => {
      commit("setUser", data);
      return data;
    });
}

// ############################## AUTH ##############################
export function register({ commit }, data) {
  return axiosClient.post("/register", data)
    .then(({ data }) => {
      commit('setUser', data.user);
      commit('setToken', data.token);
      return data;
    });
}

export function login({ commit }, data) {
  return axiosClient.post("/login", data)
    .then(({ data }) => {
      commit('setUser', data.user);
      commit('setToken', data.token);
      return data;
    }).catch(({ error }) => {
      return error;
    });
}

export function logout({ commit }) {
  return axiosClient.post("/logout")
    .then((response) => {
      commit('setUser', null);
      commit('setToken', null);
      return response;
    });
}

// ############################ PRODUCTS ###########################
export function getProducts({ commit }, data) {
  return axiosClient.get("/products", data)
    .then(({ data }) => {
      commit('setProducts', data);
      return data;
    })
    .catch((error) => {
      return error;
    });
}

export function createProduct({ commit }, data) {
  return axiosClient.post("/products", data)
    .then(({ data }) => {
      commit('setProduct', data);
      return data;
    })
    .catch((error) => {
      return error;
    });
}

export function getProduct({ commit }, data) {
  return axiosClient.get("/products/" + data)
    .then(({ data }) => {
      commit('setProduct', data);
      return data;
    })
    .catch((error) => {
      return error;
    })
}

export function updateProduct({ commit }, data) {
  return axiosClient.put("/products")
    .then((response) => {
      commit('setProduct', data);
      return response;
    })
    .catch((error) => {
      return error;
    });
}

export function deleteProduct({ commit }, data) {
  return axiosClient.delete("/products/" + data)
    .then((response) => {
      commit('setProduct', data);
      return response;
    })
    .catch((error) => {
      return error;
    });
}
