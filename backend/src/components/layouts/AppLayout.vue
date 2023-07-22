<template>
  <div
    id="page-container"
    class="remember-theme sidebar-o enable-page-overlay side-scroll page-header-modern"
  >
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

<script setup>
import SidebarComponent from "@/components/SidebarComponent.vue";
import HeaderComponent from "@/components/HeaderComponent.vue";
import FooterComponent from "@/components/FooterComponent.vue";
</script>
