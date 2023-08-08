<template>
  <div
    class="modal fade"
    id="modal-tabs-alternative"
    tabindex="-1"
    role="dialog"
    aria-labelledby="modal-tabs-alternative"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-slideup modal-xl" role="document">
      <div class="modal-content">
        <!-- Block Tabs Alternative Style -->
        <div class="block block-rounded shadow-none mb-0">
          <ul class="nav nav-tabs nav-tabs-alt" role="tablist">
            <li class="nav-item">
              <button
                type="button"
                class="nav-link active"
                id="btabs-static-home-tab"
                data-bs-toggle="tab"
                data-bs-target="#btabs-static-home"
                role="tab"
                aria-controls="btabs-static-home"
                aria-selected="true"
              >
                Home
              </button>
            </li>
            <li class="nav-item">
              <button
                type="button"
                class="nav-link"
                id="btabs-static-profile-tab"
                data-bs-toggle="tab"
                data-bs-target="#btabs-static-profile"
                role="tab"
                aria-controls="btabs-static-profile"
                aria-selected="false"
              >
                Profile
              </button>
            </li>
            <li class="nav-item ms-auto">
              <button
                type="button"
                class="nav-link"
                id="btabs-static-settings-tab"
                data-bs-toggle="tab"
                data-bs-target="#btabs-static-settings"
                role="tab"
                aria-controls="btabs-static-settings"
                aria-selected="false"
              >
                <i class="si si-settings"></i>
              </button>
            </li>
          </ul>
          <div class="block-content tab-content">
            <div
              class="tab-pane active"
              id="btabs-static-home"
              role="tabpanel"
              aria-labelledby="btabs-static-home-tab"
              tabindex="0"
            >
              <h5 class="fw-semibold">Home Content</h5>
              <p>...</p>
            </div>
            <div
              class="tab-pane"
              id="btabs-static-profile"
              role="tabpanel"
              aria-labelledby="btabs-static-profile-tab"
              tabindex="0"
            >
              <h5 class="fw-semibold">Profile Content</h5>
              <p>...</p>
            </div>
            <div
              class="tab-pane"
              id="btabs-static-settings"
              role="tabpanel"
              aria-labelledby="btabs-static-settings-tab"
              tabindex="0"
            >
              <h5 class="fw-semibold">Settings Content</h5>
              <p>...</p>
            </div>
          </div>
          <div
            class="block-content block-content-full block-content-sm text-end border-top"
          >
            <button
              type="button"
              class="btn btn-alt-secondary"
              data-bs-dismiss="modal"
              v-el="closeButton"
            >
              Close
            </button>
            <button
              type="button"
              class="btn btn-alt-primary"
              data-bs-dismiss="modal"
            >
              Done
            </button>
          </div>
        </div>
        <!-- END Block Tabs Alternative Style -->
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";
import { useStore } from "vuex";
// import { store } from "@/store";

const product = ref({});
const loading = ref(false);

function closeModal() {
  var elm = this.$els.closeButton;
  elm.click();
}

function onSubmit() {
  loading.value = true
  if (product.value.id) {
    store.dispatch("updateProduct", product.value)
    .then(response => {
      loading.value = false;
      if (response.status === 200) {
        // TODO show notification
        store.dispatch("getProducts")
        closeModal();
      }
    }).catch(error => {
      loading.value = false;
      // TODO show notification
    });
  } else {
    store.dispatch("createProduct", product.value)
    .then(response => {
      loading.value = false;
      if (response.status === 201) {
        // TODO show notification
        store.dispatch("getProducts")
        closeModal();
      }
    }).catch(error => {
      loading.value = false;
      console.log('error', error);
      // TODO show notification
    });
  }
}
</script>
