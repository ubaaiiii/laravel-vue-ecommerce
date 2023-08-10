<script setup>
import SidebarComponent from "@/Layouts/Components/SidebarComponent.vue";
import HeaderComponent from "@/Layouts/Components/HeaderComponent.vue";
import FooterComponent from "@/Layouts/Components/FooterComponent.vue";
import { onMounted  } from 'vue';
// import Inertia from '@inertiajs/vue3';

// onMounted(() => {
//   // Menggunakan Inertia untuk mengirim layoutClass ke Blade
//   Inertia.onVisit((visit) => {
//     Inertia.setPage({ layoutClass: "remember-theme sidebar-o enable-page-overlay side-scroll page-header-modern" });
//   });
// });
</script>

<template>
  <div>
    <!-- Sidebar -->
    <!--
        Helper classes

        Adding .smini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding .smini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
          If you would like to disable the transition, just add the .no-transition along with one of the previous 2 classes

        Adding .smini-hidden to an element will hide it when the sidebar is in mini mode
        Adding .smini-visible to an element will show it only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
    <SidebarComponent />
    <!-- END Sidebar -->

    <!-- Header -->
    <HeaderComponent />
    <!-- END Header -->

    <!-- Main Container -->
    <router-view></router-view>
    <slot></slot>
    <!-- END Main Container -->

    <!-- Footer -->
    <FooterComponent />
    <!-- END Footer -->
  </div>
</template>
