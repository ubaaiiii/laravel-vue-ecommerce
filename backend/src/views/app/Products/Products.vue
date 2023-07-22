<template>
  <main id="main-container">
    <!-- Page Content -->
    <div class="content">
      <!-- Products -->
      <div
        class="content-heading d-flex justify-content-between align-items-center"
      >
        <span> Products <small>({{ total_products }})</small> </span>
        <div class="space-x-1">
          <!-- <div class="dropdown d-inline-block">
            <button
              type="button"
              class="btn btn-sm btn-alt-secondary"
              id="ecom-products-category-drop"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <span>Category</span>
              <i class="fa fa-angle-down opacity-50 ms-1"></i>
            </button>
            <div
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="ecom-products-category-drop"
            >
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-gamepad opacity-50 me-1"></i> Video Games
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-desktop opacity-50 me-1"></i>
                Electronics
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-mobile-alt opacity-50 me-1"></i> Mobile
                Phones
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-home opacity-50 me-1"></i> House
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="far fa-fw fa-futbol opacity-50 me-1"></i> Hobby
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-car opacity-50 me-1"></i> Auto - Moto
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-users opacity-50 me-1"></i> Kids
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-heartbeat opacity-50 me-1"></i> Health
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="fab fa-fw fa-black-tie opacity-50 me-1"></i> Fashion
              </a>
            </div>
          </div>
          <div class="dropdown d-inline-block">
            <button
              type="button"
              class="btn btn-sm btn-alt-secondary"
              id="ecom-products-filter-drop"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <span>All</span>
              <i class="fa fa-angle-down opacity-50 ms-1"></i>
            </button>
            <div
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="ecom-products-filter-drop"
            >
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-star text-warning me-1"></i> Top Sellers
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <i
                  class="fa fa-fw fa-exclamation-triangle text-danger me-1"
                ></i>
                Out of Stock
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item active" href="javascript:void(0)">
                <i class="far fa-fw fa-circle text-info opacity-50 me-1"></i>
                All
              </a>
            </div>
          </div> -->
        </div>
      </div>
      <ProductsTable />
      <!-- END Products -->
    </div>
    <!-- END Page Content -->
  </main>
</template>

<script setup>
import { onMounted, ref } from "vue";
import ProductsTable from "./ProductsTable.vue";

const bgElement = ref(null);

// Fungsi untuk mengganti background-image
// const changeBackgroundImage = () => {
//   const imageUrl = "@/assets/media/photos/photo26@2x.jpg";
//   bgElement.value.style.backgroundImage = `url(${imageUrl})`;
// };

// Panggil fungsi pada mounted atau lifecycle hook yang sesuai
// onMounted(changeBackgroundImage);
</script>

<style scoped>
.bg-image {
  background-image: url("src/assets/media/photos/photo26@2x.jpg");
}
</style>
