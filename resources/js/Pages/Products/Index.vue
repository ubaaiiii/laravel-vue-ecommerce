<script setup>
import { onMounted, ref } from "vue";
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
// import ProductsTable from "./Table.vue";
import store from "@/store";
import ProductsModal from "./Modal.vue";
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
  fixedHeader: true,
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
let dt;
const table = ref();

// function createdRow(row, data, dataIndex) {
//   console.log("created");
// }

onMounted(() => {
  dt = table.value.dt;

  dt.columns()
    .every(function () {
      let column = this;
      let title = column.footer().textContent;

      // Create input element
      let input = document.createElement("input");
      input.placeholder = title;
      input.className = "form-control";
      column.footer().replaceChildren(input);

      // Event listener for user input
      input.addEventListener("keyup", () => {
        if (column.search() !== this.value) {
          column.search(input.value).draw();
        }
      });
    });

  store.dispatch("getUser")
    .then((response) => {
      console.log("user:", response);
    })
    .catch((error) => {
      console.log("user:", error);
    });
});
</script>

<template>
  <Head title="Products" />
  <AuthenticatedLayout>
    <main id="main-container">
      <!-- Page Content -->
      <div class="content mt-5">
        <!-- Products -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Products</h3>
            <div class="block-options">
              <!-- <button
                type="button"
                class="btn-block-option"
                data-toggle="block-option"
                data-action="pinned_toggle"
              >
                <i class="si si-pin"></i>
              </button> -->
              <!-- <button
                type="button"
                class="btn-block-option"
                data-toggle="block-option"
                data-action="state_toggle"
                data-action-mode="demo"
              >
                <i class="si si-refresh"></i>
              </button> -->
              <button
                type="button"
                class="btn-block-option"
                data-toggle="block-option"
                data-action="content_toggle"
              ></button>
              <button
                type="button"
                class="btn-block-option"
                data-toggle="block-option"
                data-action="fullscreen_toggle"
              ></button>
              <!-- <button
                type="button"
                class="btn-block-option"
                data-toggle="block-option"
                data-action="close"
              >
                <i class="si si-close"></i>
              </button> -->
            </div>
          </div>
          <div class="block-content block-content-full">
            <div class="row">
              <!-- Row #1 -->
              <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center" href="javascript:void(0)">
                  <div class="block-content ribbon ribbon-bookmark ribbon-glass ribbon-left bg-gd-dusk">
                    <div class="ribbon-box">750</div>
                    <p class="mt-2 mb-3">
                      <i class="si si-book-open fa-2x text-white-75"></i>
                    </p>
                    <p class="fw-semibold text-white">Articles</p>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center" href="javascript:void(0)">
                  <div class="block-content bg-gd-primary">
                    <p class="mt-2 mb-3">
                      <i class="si si-plus fa-2x text-white-75"></i>
                    </p>
                    <p class="fw-semibold text-white">New Article</p>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center" href="be_pages_forum_categories.html">
                  <div class="block-content ribbon ribbon-bookmark ribbon-glass ribbon-left bg-gd-sea">
                    <div class="ribbon-box">16</div>
                    <p class="mt-2 mb-3">
                      <i class="si si-bubbles fa-2x text-white-75"></i>
                    </p>
                    <p class="fw-semibold text-white">Comments</p>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center" href="be_pages_generic_search.html">
                  <div class="block-content bg-gd-lake">
                    <p class="mt-2 mb-3">
                      <i class="si si-magnifier fa-2x text-white-75"></i>
                    </p>
                    <p class="fw-semibold text-white">Search</p>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center" href="be_comp_charts.html">
                  <div class="block-content bg-gd-emerald">
                    <p class="mt-2 mb-3">
                      <i class="si si-bar-chart fa-2x text-white-75"></i>
                    </p>
                    <p class="fw-semibold text-white">Statistics</p>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center" href="javascript:void(0)">
                  <div class="block-content bg-gd-corporate">
                    <p class="mt-2 mb-3">
                      <i class="si si-settings fa-2x text-white-75"></i>
                    </p>
                    <p class="fw-semibold text-white">Settings</p>
                  </div>
                </a>
              </div>
              <!-- END Row #1 -->
            </div>
            <DataTable
              :options="options"
              :columns="columns"
              ajax="/api/products"
              class="display nowrap table-nowrap"
              ref="table"
            >
              <tfoot v-if="columns">
                <tr>
                  <th v-for="column in columns" :key="column.data">
                    {{ column.title }}
                  </th>
                </tr>
              </tfoot>
            </DataTable>
          </div>
          <ProductsModal
            v-model="showProductModal"
            :product="productModel"
            @close="onModalClose"
          />
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
        </div>
        <!-- END Products -->
      </div>
      <!-- END Page Content -->
    </main>
  </AuthenticatedLayout>
</template>
