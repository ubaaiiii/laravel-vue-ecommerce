<script setup>
import { ref, onMounted, inject } from "vue";
import { Head, Link, useForm } from '@inertiajs/vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from '@/Components/InputError.vue';
// import store from "@/store";
// import router from "@/router";

defineProps({
  canResetPassword: {
    type: Boolean,
  },
  status: {
    type: String,
  },
});

let appBaseUrl = inject("appBaseUrl");

// const user = {
//   email: "",
//   password: "",
//   remember_me: false,
// };

const form = useForm({
  email: "",
  password: "",
  remember: false,
});

const login = () => {
  form.post(route("login"), {
    onFinish: () => form.reset("password"),
  });
};

function initValidationSignIn() {
  Codebase.helpers("jq-validation");
  jQuery(".js-validation").validate({
    rules: {
      "login-email": {
        required: true,
        minlength: 3,
      },
      "login-password": {
        required: true,
        minlength: 5,
      },
    },
    messages: {
      "login-email": {
        required: "Please enter an email",
        minlength: "Your email must consist of at least 3 characters",
      },
      "login-password": {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
      },
    },
  });
}

// function login() {
  // Codebase.loader("show");
  // console.log("login");
  // store
  //   .dispatch("login", user)
  //   .then(() => {
  //     Codebase.loader("hide");
  //     window.location.href = appBaseUrl + "/app/dashboard";
  //     console.log("login success");
  //   })
  //   .catch((error) => {
  //     Codebase.loader("hide");
  //     console.log(error);
  //   });
// }

onMounted(() => {
  initValidationSignIn();
});
</script>

<template>
  <GuestLayout
    title="Welcome to Your Dashboard"
    subtitle="It’s a great day today!"
    @submit="login"
  >
  <Head title="Login" />
    <div class="block block-themed block-rounded block-fx-shadow">
      <div class="block-header bg-gd-dusk">
        <h3 class="block-title">Please Sign In</h3>
      </div>
      <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
        {{ status }}
      </div>
      <div class="block-content">
        <div class="form-floating mb-4">
          <input
            type="text"
            class="form-control"
            id="login-email"
            name="login-email"
            placeholder="Enter your email"
            v-model="form.email"
          />
          <label class="form-label" for="login-email">Email</label>
          <InputError class="mt-2" :message="form.errors.email" />
        </div>
        <div class="form-floating mb-4">
          <input
            type="password"
            class="form-control"
            id="login-password"
            name="login-password"
            placeholder="Enter your password"
            v-model="form.password"
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
                v-model="form.remember_me"
              />
              <label class="form-check-label" for="login-remember-me"
                >Remember Me</label
              >
            </div>
          </div>
          <div class="col-sm-6 text-sm-end push">
            <button type="submit" class="btn btn-lg btn-alt-primary fw-medium">
              Sign In
            </button>
          </div>
        </div>
      </div>
      <div
        class="block-content block-content-full bg-body-light text-center d-flex justify-content-between"
      >
        <Link
          class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block"
          :href="route('register')"
        >
          <i class="fa fa-plus opacity-50 me-1"></i> Create Account
        </Link>
        <Link
          class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block"
          :href="route('password.request')"
        >
          Forgot Password
        </Link>
      </div>
    </div>
  </GuestLayout>
</template>
