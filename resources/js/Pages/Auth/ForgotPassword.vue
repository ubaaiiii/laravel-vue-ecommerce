<script setup>
import { onMounted } from "vue";
import GuestLayout from "@/layouts/GuestLayout.vue";
import { Link, Head, useForm } from "@inertiajs/vue3";

defineProps({
  status: {
    type: String,
  },
});

const form = useForm({
  email: "",
});

function initValidationReminder() {
  Codebase.helpers("jq-validation");
  jQuery(".js-validation").validate({
    rules: {
      "reminder-credential": {
        required: !0,
        minlength: 3,
      },
    },
    messages: {
      "reminder-credential": {
        required: "Please enter a valid credential",
      },
    },
  });
}

function forgotPassword() {
  form.post(route("password.email"));
}

onMounted(() => {
  initValidationReminder();
});
</script>

<template>
  <GuestLayout
    title="Don't worry, we've got your back"
    subtitle="Please enter your username or email"
    @submit="ForgotPassword"
  >
  <Head title="Forgot Password" />
    <div class="block block-themed block-rounded block-fx-shadow">
      <div class="block-header bg-gd-primary">
        <h3 class="block-title">Password Reminder</h3>
      </div>
      <div
        v-if="status"
        class="mb-4 font-medium text-sm text-green-600 dark:text-green-400"
      >
        {{ status }}
      </div>
      <div class="block-content">
        <div class="form-floating mb-4">
          <input
            type="email"
            class="form-control"
            id="reminder-credential"
            name="reminder-credential"
            placeholder="Enter your email"
            v-model="form.email"
            required
            autofocus
            autocomplete="username"
          />
          <label class="form-label" for="reminder-credential"
            >Enter your Email</label
          >
        </div>
        <div class="text-center mb-4">
          <button type="submit" class="btn btn-lg btn-alt-primary fw-semibold">
            Reset Password
          </button>
        </div>
      </div>
      <div
        class="block-content block-content-full bg-body-light mb-4 text-center"
      >
        <Link
          class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block"
          :href="route('login')"
        >
          <i class="fa fa-arrow-left opacity-50 me-1"></i> Sign In
        </Link>
      </div>
    </div>
  </GuestLayout>
</template>
