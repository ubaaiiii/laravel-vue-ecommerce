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
              class="w-25"
              src="@/assets/media/favicons/favicon-192x192.png"
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
              src="@/assets/media/avatars/avatar15.jpg"
              alt=""
            />
          </div>
          <!-- END Visible only in mini mode -->

          <!-- Visible only in normal mode -->
          <div class="smini-hidden text-center mx-auto">
            <div class="img-link">
              <img
                class="img-avatar"
                src="@/assets/media/avatars/avatar15.jpg"
                alt=""
              />
            </div>
            <ul class="list-inline mt-3 mb-0">
              <li class="list-inline-item">
                <div class="link-fx text-dual fs-sm fw-semibold text-uppercase">
                  J. Smith
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
              <router-link class="nav-main-link active"
              to="/app/dashboard">
                <i class="nav-main-link-icon fa fa-house-user"></i>
                <span class="nav-main-link-name">Dashboard</span>
              </router-link>
            </li>
            <li class="nav-main-item">
              <router-link class="nav-main-link active"
              to="/app/products">
                <i class="nav-main-link-icon fa fa-list"></i>
                <span class="nav-main-link-name">Products</span>
              </router-link>
            </li>
            <li class="nav-main-item">
              <router-link class="nav-main-link active"
              to="/app/users">
                <i class="nav-main-link-icon fa fa-users"></i>
                <span class="nav-main-link-name">Users</span>
              </router-link>
            </li>
            <li class="nav-main-item">
              <router-link class="nav-main-link active"
              to="/app/reports">
                <i class="nav-main-link-icon fa fa-chart-simple"></i>
                <span class="nav-main-link-name">Report</span>
              </router-link>
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

<script setup>
</script>

<style>
</style>
