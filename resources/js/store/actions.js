import axiosClient from "../axiosClient";

// ############################## USER ##############################
export function getUser() {
  return axiosClient.get("/users")
    .then(({ data }) => {
      return data;
    })
    .catch((error) => {
      return error;
    })
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
