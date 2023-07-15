<template>
  <GuestLayout title="Create New Password" subtitle="" @submit="resetPassword">
    <div class="block block-themed block-rounded block-fx-shadow">
      <div class="block-header bg-gd-primary">
        <h3 class="block-title">Please confirm your new password</h3>
      </div>
      <div class="block-content">
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
              Change Password
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
          <i class="fa fa-arrow-left opacity-50 me-1"></i> Sign In Without
          Change Password
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
      "signup-password": {
        required: true,
        minlength: 5,
      },
      "signup-password-confirm": {
        required: true,
        equalTo: "#signup-password",
      },
    },
    messages: {
      "signup-password": {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
      },
      "signup-password-confirm": {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
        equalTo: "Please enter the same password as above",
      },
    },
  });
};


function resetPassword(){
  console.log("resetPassword");
}

onMounted(() => {
  initValidationSignUp();
});
</script>
