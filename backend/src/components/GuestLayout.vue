<template>
  <div id="page-container" class="main-content-boxed">
    <!-- Main Container -->
    <main id="main-container">
      <!-- Page Content -->
      <div class="bg-body-dark">
        <div class="row mx-0 justify-content-center">
          <div class="hero-static col-lg-6 col-xl-4">
            <div class="content content-full overflow-hidden">
              <!-- Header -->
              <div class="py-4 text-center">
                <a class="link-fx fw-bold" href="#">
                  <i class="fa fa-fire"></i>
                  <span class="fs-4 text-body-color">code</span
                  ><span class="fs-4">base</span>
                </a>
                <h1 class="h3 fw-bold mt-4 mb-2">
                  {{ title }}
                </h1>
                <h2 class="h5 fw-medium text-muted mb-0">
                  {{ subtitle }}
                </h2>
              </div>
              <!-- END Header -->
              <form
                class="js-validation"
                @submit.prevent="$emit('submit')"
                method="POST"
              >
                <slot></slot>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
  </div>
</template>

<script setup>
const { title, subtitle } = defineProps({
  title: String,
  subtitle: String,
});
</script>

<style>
</style>
