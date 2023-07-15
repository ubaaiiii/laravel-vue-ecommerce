<template>
  <GuestLayout
    title="Welcome to Your Dashboard"
    subtitle="It’s a great day today!"
    @submit="login"
  >

      <div class="block block-themed block-rounded block-fx-shadow">
        <div class="block-header bg-gd-dusk">
          <h3 class="block-title">Please Sign In</h3>
        </div>
        <div class="block-content">
          <div class="form-floating mb-4">
            <input
              type="text"
              class="form-control"
              id="login-username"
              name="login-username"
              placeholder="Enter your username"
            />
            <label class="form-label" for="login-username">Username</label>
          </div>
          <div class="form-floating mb-4">
            <input
              type="password"
              class="form-control"
              id="login-password"
              name="login-password"
              placeholder="Enter your password"
            />
            <label class="form-label" for="login-password">Password</label>
          </div>
          <div class="row">
            <div class="col-sm-6 d-sm-flex align-items-center push">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="login-remember-me"
                  name="login-remember-me"
                />
                <label class="form-check-label" for="login-remember-me"
                  >Remember Me</label
                >
              </div>
            </div>
            <div class="col-sm-6 text-sm-end push">
              <button
                type="submit"
                class="btn btn-lg btn-alt-primary fw-medium"
              >
                Sign In
              </button>
            </div>
          </div>
        </div>
        <div
          class="block-content block-content-full bg-body-light text-center d-flex justify-content-between"
        >
          <router-link
            class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block"
            to="/register"
          >
            <i class="fa fa-plus opacity-50 me-1"></i> Create Account
          </router-link>
          <router-link
            class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block"
            to="/forgot-password"
          >
            Forgot Password
          </router-link>
        </div>
      </div>
  </GuestLayout>
</template>

<script setup>
import { onMounted } from "vue";
import GuestLayout from "../components/GuestLayout.vue";

function initValidationSignIn() {
  Codebase.helpers("jq-validation");
  jQuery(".js-validation").validate({
    rules: {
      "login-username": {
        required: true,
        minlength: 3,
      },
      "login-password": {
        required: true,
        minlength: 5,
      },
    },
    messages: {
      "login-username": {
        required: "Please enter a username",
        minlength: "Your username must consist of at least 3 characters",
      },
      "login-password": {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
      },
    },
  });
}

function login(){
  console.log("login");
}

onMounted(() => {
  initValidationSignIn();
});
</script>
