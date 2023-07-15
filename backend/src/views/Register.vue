<template>
  <GuestLayout
    title="Create New Account"
    subtitle="We’re excited to have you on board!"
    @submit="register"
  >
    <div class="block block-themed block-rounded block-fx-shadow">
      <div class="block-header bg-gd-emerald">
        <h3 class="block-title">Please add your details</h3>
      </div>
      <div class="block-content">
        <div class="form-floating mb-4">
          <input
            type="text"
            class="form-control"
            id="signup-username"
            name="signup-username"
            placeholder="Enter your username"
          />
          <label class="form-label" for="signup-username">Username</label>
        </div>
        <div class="form-floating mb-4">
          <input
            type="email"
            class="form-control"
            id="signup-email"
            name="signup-email"
            placeholder="Enter your email"
          />
          <label class="form-label" for="signup-email">Email</label>
        </div>
        <div class="form-floating mb-4">
          <input
            type="password"
            class="form-control"
            id="signup-password"
            name="signup-password"
            placeholder="Enter your password"
          />
          <label class="form-label" for="signup-password">Password</label>
        </div>
        <div class="form-floating mb-4">
          <input
            type="password"
            class="form-control"
            id="signup-password-confirm"
            name="signup-password-confirm"
            placeholder="Confirm password"
          />
          <label class="form-label" for="signup-password-confirm"
            >Confirm Password</label
          >
        </div>
        <div class="row">
          <div class="col-sm-6 d-sm-flex align-items-center push">
            <!-- <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="signup-terms"
                            name="signup-terms"
                            value="1"
                          />
                          <label class="form-check-label" for="signup-terms"
                            >I agree to Terms</label
                          >
                        </div> -->
          </div>
          <div class="col-sm-6 text-sm-end push">
            <button
              type="submit"
              class="btn btn-lg btn-alt-primary fw-semibold"
            >
              Create Account
            </button>
          </div>
        </div>
      </div>
      <div
        class="block-content block-content-full bg-body-light d-flex justify-content-between"
      >
        <router-link
          class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block"
          to="/login"
        >
          <i class="fa fa-arrow-left opacity-50 me-1"></i> Sign In
        </router-link>
      </div>
    </div>
  </GuestLayout>
</template>

<script setup>
import { onMounted } from "vue";
import GuestLayout from "../components/GuestLayout.vue";

const initValidationSignUp = () => {
  Codebase.helpers("jq-validation");
  jQuery(".js-validation").validate({
    rules: {
      "signup-username": {
        required: true,
        minlength: 3,
      },
      "signup-email": {
        required: true,
        email: true,
      },
      "signup-password": {
        required: true,
        minlength: 5,
      },
      "signup-password-confirm": {
        required: true,
        equalTo: "#signup-password",
      },
      "signup-terms": {
        required: true,
      },
    },
    messages: {
      "signup-username": {
        required: "Please enter a username",
        minlength: "Your username must consist of at least 3 characters",
      },
      "signup-email": "Please enter a valid email address",
      "signup-password": {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
      },
      "signup-password-confirm": {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
        equalTo: "Please enter the same password as above",
      },
      "signup-terms": "You must agree to the service terms!",
    },
  });
};

function register(){
  console.log("register");
}

onMounted(() => {
  initValidationSignUp();
});
</script>
