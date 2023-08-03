<template>
  <main id="main-container">
    <!-- Page Content -->
    <div class="content">
      <!-- Products -->
      <div
        class="content-heading d-flex justify-content-between align-items-center"
      >
        <span>
          Products <small>({{ total_products }})</small>
        </span>
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
      <div class="block block-rounded">
        <div class="block-content bg-body-light">
          <!-- Search -->
          <form
            action="be_pages_ecom_products.html"
            method="POST"
            onsubmit="return false;"
          >
            <div class="mb-4">
              <div class="input-group">
                <button
                  type="button"
                  class="btn btn-outline-success"
                  data-bs-toggle="modal"
                  data-bs-target="#modal-tabs-alternative"
                >
                  <i class="fa fa-plus opacity-50"></i> New
                </button>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search products.."
                />
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
          </form>
          <!-- END Search -->
        </div>
        <!-- <ProductsTable /> -->
        <div class="block-content block-content-full">
          <DataTable
            :data="data"
            class="table table-bordered table-vcenter js-dataTable-responsive table-hover"
          >
            <thead>
              <tr>
                <th>A</th>
                <th>B</th>
              </tr>
            </thead>
          </DataTable>
        </div>
        <ProductsModal
          v-model="showProductModal"
          :product="productModel"
          @close="onModalClose"
        />
      </div>
      <!-- END Products -->
    </div>
    <!-- END Page Content -->
  </main>
</template>

<script setup>
import { onMounted, ref } from "vue";
import ProductsTable from "./ProductsTable.vue";
import ProductsModal from "./ProductsModal.vue";
import DataTable from "datatables.net-vue3";
import DataTablesCore from "datatables.net";

DataTable.use(DataTablesCore);

const data = ref([]);

const columns = [
  {
    label: "Id",
    field: "id",
  },
  {
    label: "Title",
    field: "title",
  },
  {
    label: "Image",
    field: "image_url",
  },
  {
    label: "Price",
    field: "price",
  },
  {
    label: "Updated On",
    field: "updated_at",
    type: "date",
    dateInputFormat: "yyyy-mm-dd hh:mm:ss",
    dateOutputFormat: "D MMM YYYY",
  },
  {
    label: "Actions",
    field: "actions",
    sortable: false,
  },
];

const rows = ref([
  // { id: 1, name: 'John', age: 20, createdAt: '2011-10-31', score: 0.03343 },
  // { id: 2, name: 'Jane', age: 24, createdAt: '2011-10-31', score: 0.03343 },
  // { id: 3, name: 'Susan', age: 16, createdAt: '2011-10-30', score: 0.03343 },
  // { id: 4, name: 'Chris', age: 55, createdAt: '2011-10-11', score: 0.03343 },
  // { id: 5, name: 'Dan', age: 40, createdAt: '2011-10-21', score: 0.03343 },
  // { id: 6, name: 'John', age: 20, createdAt: '2011-10-31', score: 0.03343 },
]);
</script>

<style scoped>
</style>
