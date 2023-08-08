<template>
  <main id="main-container">
    <!-- Page Content -->
    <div class="content">
      <!-- Products -->
      <div
        class="content-heading d-flex justify-content-between align-items-center"
      >
        <span> Products </span>
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
        <!-- <div class="block-content bg-body-light">
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
        </div> -->
        <!-- <ProductsTable /> -->
        <div class="block-content block-content-full">
          <DataTable
            :options="options"
            :columns="columns"
            :ajax="url"
            :createdRow="createdRow"
            class="display nowrap"
          >
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
import { onMounted, ref, inject } from "vue";
import ProductsTable from "./ProductsTable.vue";
import store from "@/store";
import ProductsModal from "./ProductsModal.vue";
import DataTable from "datatables.net-vue3";
import DataTablesLib from "datatables.net-dt";
import "datatables.net-select";
import "datatables.net-responsive";
import "datatables.net-buttons";
import "datatables.net-scroller";
import "datatables.net-buttons/js/buttons.html5";
// import "datatables.net-plugins/pagination/input.js";
import jszip from "jszip";
import pdfmake from "pdfmake";

DataTable.use(DataTablesLib);
// DataTable.use(Buttons);
DataTablesLib.Buttons.jszip(jszip);
DataTablesLib.Buttons.pdfMake(pdfmake);

let apiBaseUrl = inject("apiBaseUrl");
let url = apiBaseUrl + "/api/products";
const data = ref([]);
const columns = [
  {
    data: "id",
    title: "ID",
  },
  {
    data: "title",
    title: "Title",
  },
  // {
  //   data: "slug",
  //   title: "Slug",
  // },
  {
    data: "image",
    title: "Image",
  },
  // {
  //   data: "image_mime",
  //   title: "Image Mime",
  // },
  // {
  //   data: "image_size",
  //   title: "Image Size",
  // },
  {
    data: "description",
    title: "Description",
  },
  {
    data: "price",
    title: "Price",
  },
  // {
  //   data: "created_by",
  //   title: "Created By",
  // },
  // {
  //   data: "updated_by",
  //   title: "Updated By",
  // },
  // {
  //   data: "deleted_at",
  //   title: "Deleted At",
  // },
  // {
  //   data: "deleted_by",
  //   title: "Deleted By",
  // },
  // {
  //   data: "created_at",
  //   title: "Created At",
  // },
  {
    data: "updated_at",
    title: "Updated At",
  },
];
const options = {
  // responsive: true,
  processing: true,
  serverSide: true,
  scrollX: true,
  // scrollY: 500,
  // ordering: false,
  // scroller: {
  //   loadingIndicator: true,
  // },
  deferRender: true,
  select: true,
  dom: "Blfrtip",
  // pagingType: "input",
  buttons: [
    {
      text: "<i class='fa fa-add'></i> New",
      attr: {
        "data-bs-toggle": "modal",
        "data-bs-target": "#modal-tabs-alternative",
      },
      className: "btn btn-sm btn-alt-primary mb-3",
    },
    {
      extend: "copy",
      text: "<i class='fa fa-copy'></i> Copy",
      attr: { "data-toggle": "click-ripple" },
      className: "btn btn-sm btn-alt-primary mb-3",
    },
    {
      extend: "csv",
      text: "<i class='fa fa-download'></i> Csv",
      attr: { "data-toggle": "click-ripple" },
      className: "btn btn-sm btn-alt-primary mb-3",
    },
    {
      extend: "excel",
      text: "<i class='fa fa-download'></i> Excel",
      attr: { "data-toggle": "click-ripple" },
      className: "btn btn-sm btn-alt-primary mb-3",
    },
    // {extend: 'pdf', text: ' PDF', attr: {'data-toggle':'click-ripple'}, className: 'btn btn-sm btn-alt-primary mb-3 fa fa-download'},
    // {extend: 'print', text: ' Print', attr: {'data-toggle':'click-ripple'}, className: 'btn btn-sm btn-alt-primary fa fa-print'}
  ],
  // pagingType: "bootstrap_input",
};

function createdRow(row, data, dataIndex) {
  console.log("created");
}

// store
//   .dispatch("getProducts")
//   .then(() => {
//     data.value = store.state.products.data;
//     console.log("data", data.value);
//   })
//   .catch((err) => {
//     console.log("err", err);
//   });
</script>

<style scoped>
</style>
