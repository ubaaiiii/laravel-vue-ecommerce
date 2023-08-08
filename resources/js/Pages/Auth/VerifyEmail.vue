<script setup>
import { computed } from "vue";
import GuestLayout from "@/layouts/GuestLayout.vue";
import { Link, Head, useForm } from "@inertiajs/vue3";

const props = defineProps({
  status: {
    type: String,
  },
});

const form = useForm({});

const submit = () => {
  form.post(route("verification.send"));
};

const verificationLinkSent = computed(
  () => props.status === "verification-link-sent"
);
</script>

<template>
  <GuestLayout
    title="Thanks for signing up!"
    subtitle=""
    @submit="submit"
  >
    <Head title="Email Verification" />
    <div class="block block-themed block-rounded block-fx-shadow">
      <div class="block-header bg-gd-primary">
        <h3 class="block-title">Email Verification</h3>
      </div>
      <div class="py-4 text-center">
      <h2 class="h5 fw-medium text-muted mb-0">
      Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
      </h2>
      </div>
      <div
        v-if="status"
        class="mb-4 font-medium text-sm text-green-600 dark:text-green-400"
      >
        {{ status }}
      </div>
      <div class="block-content">
        <!-- <div class="form-floating mb-4">
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
        </div> -->
        <div
          class="mb-4 font-medium text-sm text-green-600 dark:text-green-400"
          v-if="verificationLinkSent"
        >
          A new verification link has been sent to the email address you
          provided during registration.
        </div>
        <div class="text-center mb-4">
          <button
            type="submit"
            class="btn btn-lg btn-alt-primary fw-semibold mr-4"
            :disabled="form.processing"
          >
            Resend Verification Email
          </button>
        </div>
      </div>
      <div
        class="block-content block-content-full bg-body-light mb-4 text-center"
      >
        <Link
        class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block"
        method="post"
          :href="route('logout')"
        >
          <i class="fa fa-arrow-left opacity-50 me-1"></i> Log Out
        </Link>
      </div>
    </div>
  </GuestLayout>
</template>
