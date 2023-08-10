<script setup>
import { ref, defineProps } from "vue";
import { Link, Head, useForm } from "@inertiajs/vue3";

const props = defineProps({
  auth: Object,
});
</script>

<template>
  <nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
      <!-- Side Header -->
      <div class="content-header justify-content-lg-center">
        <!-- Logo -->
        <div>
          <span class="smini-visible fw-bold tracking-wide fs-lg">
            S<span class="text-primary">3</span>
          </span>
          <a
            class="link-fx fw-bold tracking-wide mx-auto"
            href="javascript:void(0)"
          >
            <span class="smini-hidden">
              <!-- <i class="fa fa-fire text-primary"></i> -->
              <img
              class="mb-1" width="20%"
              src="assets/media/favicons/favicon.png"
              alt=""
              />
              <span class="fs-4 text-dual"> SIAP</span
              ><span class="fs-4 text-primary"> v3</span>
            </span>
          </a>
        </div>
        <!-- END Logo -->

        <!-- Options -->
        <div>
          <!-- Close Sidebar, Visible only on mobile screens -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button
            type="button"
            class="btn btn-sm btn-alt-danger d-lg-none"
            data-toggle="layout"
            data-action="sidebar_close"
          >
            <i class="fa fa-fw fa-times"></i>
          </button>
          <!-- END Close Sidebar -->
        </div>
        <!-- END Options -->
      </div>
      <!-- END Side Header -->

      <!-- Sidebar Scrolling -->
      <div class="js-sidebar-scroll">
        <!-- Side User -->
        <div class="content-side content-side-user px-0 py-0">
          <!-- Visible only in mini mode -->
          <div class="smini-visible-block animated fadeIn px-3">
            <img
              class="img-avatar img-avatar32"
              :src="`assets/media/avatars/${auth.user.photo}`"
              alt=""
            />
          </div>
          <!-- END Visible only in mini mode -->

          <!-- Visible only in normal mode -->
          <div class="smini-hidden text-center mx-auto">
            <div class="img-link">
              <img
                class="img-avatar"
                :src="`assets/media/avatars/${auth.user.photo}`"
                alt=""
              />
            </div>
            <ul class="list-inline mt-3 mb-0">
              <li class="list-inline-item">
                <div class="link-fx text-dual fs-sm fw-semibold text-uppercase">
                  {{ auth.user.name }}
                </div>
              </li>
              <li class="list-inline-item">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a
                  class="link-fx text-dual"
                  data-toggle="layout"
                  data-action="dark_mode_toggle"
                  href="javascript:void(0)"
                >
                  <i
                    class="fa fa-moon"></i>
                </a>
              </li>
              <!-- <li class="list-inline-item">
                    <a class="link-fx text-dual" href="op_auth_signin.html">
                      <i class="fa fa-sign-out-alt"></i>
                    </a>
                  </li> -->
            </ul>
          </div>
          <!-- END Visible only in normal mode -->
        </div>
        <!-- END Side User -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
          <ul class="nav-main">
            <li class="nav-main-item">
              <Link :class="{active: route().current('dashboard')}" class="nav-main-link" :href="route('dashboard')">
                <i class="nav-main-link-icon fa fa-house-user"></i>
                <span class="nav-main-link-name">Dashboard</span>
              </Link>
            </li>
            <li class="nav-main-item">
              <Link :class="{active: route().current('products')}" class="nav-main-link" :href="route('products')">
                <i class="nav-main-link-icon fa fa-list"></i>
                <span class="nav-main-link-name">Products</span>
              </Link>
            </li>
            <li class="nav-main-item">
              <Link :class="{active: route().current('users')}" class="nav-main-link" :href="route('users')">
                <i class="nav-main-link-icon fa fa-users"></i>
                <span class="nav-main-link-name">Users</span>
              </Link>
            </li>
            <li class="nav-main-item">
              <Link :class="{active: route().current('reports')}" class="nav-main-link" :href="route('reports')">
                <i class="nav-main-link-icon fa fa-chart-simple"></i>
                <span class="nav-main-link-name">Report</span>
              </Link>
            </li>
          </ul>
        </div>
        <!-- END Side Navigation -->
      </div>
      <!-- END Sidebar Scrolling -->
    </div>
    <!-- Sidebar Content -->
  </nav>
</template>
