<script setup>
import SidebarComponent from "@/Layouts/Components/SidebarComponent.vue";
import HeaderComponent from "@/Layouts/Components/HeaderComponent.vue";
import FooterComponent from "@/Layouts/Components/FooterComponent.vue";
import { onMounted, ref  } from 'vue';

const appData = ref(JSON.parse(document.getElementById('app').getAttribute('data-page')));
const { props } = appData.value;

onMounted(() => {
  Codebase._uiInit()
});
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
    <SidebarComponent v-bind="props" />
    <!-- END Sidebar -->

    <!-- Header -->
    <HeaderComponent v-bind="props" />
    <!-- END Header -->

    <!-- Main Container -->
    <!-- <router-view></router-view> -->
    <slot></slot>
    <!-- END Main Container -->

    <!-- Footer -->
    <FooterComponent v-bind="props" />
    <!-- END Footer -->

  </div>
</template>
