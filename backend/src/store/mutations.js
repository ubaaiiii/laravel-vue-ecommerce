export function setUser(state, user) {
  state.user.data = user;
  sessionStorage.setItem("USER", JSON.stringify(user));
}

export function setToken(state, token) {
  state.user.token = token;
  if (token) {
    sessionStorage.setItem("TOKEN", token);
  } else {
    sessionStorage.removeItem("TOKEN");
  }
}

export function setProducts(state, products) {
  state.products = products;
}

export function setProduct(state, product) {
  state.product = product;
}
