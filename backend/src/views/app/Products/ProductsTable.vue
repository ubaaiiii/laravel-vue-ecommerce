<template>
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
    <div class="block-content block-content-full">
      <!-- Products Table -->
      <table class="table table-borderless table-striped">
        <thead>
          <tr>
            <th style="width: 100px">ID</th>
            <th class="d-none d-sm-table-cell">Image</th>
            <th class="d-none d-sm-table-cell">Title</th>
            <th>Price</th>
            <th class="d-none d-md-table-cell">Last Updated At</th>
            <th class="text-end">Actions</th>
          </tr>
        </thead>
        <tbody>
        <!--   <tr>
            <td>
              <a class="fw-semibold" href="be_pages_ecom_product_edit.html"
                >PID.424</a
              >
            </td>
            <td class="d-none d-sm-table-cell">
              <span class="badge bg-success">Available</span>
            </td>
            <td class="d-none d-sm-table-cell">2017/09/27</td>
            <td>
              <a href="be_pages_ecom_product_edit.html">Product #24</a>
            </td>
            <td class="d-none d-md-table-cell">
              <a href="be_pages_ecom_products.html">Health</a>
            </td>
            <td class="text-end">$31</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="be_pages_ecom_product_edit.html"
                >PID.423</a
              >
            </td>
            <td class="d-none d-sm-table-cell">
              <span class="badge bg-success">Available</span>
            </td>
            <td class="d-none d-sm-table-cell">2017/09/26</td>
            <td>
              <a href="be_pages_ecom_product_edit.html">Product #23</a>
            </td>
            <td class="d-none d-md-table-cell">
              <a href="be_pages_ecom_products.html">Auto - Moto</a>
            </td>
            <td class="text-end">$85</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="be_pages_ecom_product_edit.html"
                >PID.422</a
              >
            </td>
            <td class="d-none d-sm-table-cell">
              <span class="badge bg-danger">Out of Stock</span>
            </td>
            <td class="d-none d-sm-table-cell">2017/09/25</td>
            <td>
              <a href="be_pages_ecom_product_edit.html">Product #22</a>
            </td>
            <td class="d-none d-md-table-cell">
              <a href="be_pages_ecom_products.html">Health</a>
            </td>
            <td class="text-end">$72</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="be_pages_ecom_product_edit.html"
                >PID.421</a
              >
            </td>
            <td class="d-none d-sm-table-cell">
              <span class="badge bg-success">Available</span>
            </td>
            <td class="d-none d-sm-table-cell">2017/09/24</td>
            <td>
              <a href="be_pages_ecom_product_edit.html">Product #21</a>
            </td>
            <td class="d-none d-md-table-cell">
              <a href="be_pages_ecom_products.html">House</a>
            </td>
            <td class="text-end">$38</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="be_pages_ecom_product_edit.html"
                >PID.420</a
              >
            </td>
            <td class="d-none d-sm-table-cell">
              <span class="badge bg-danger">Out of Stock</span>
            </td>
            <td class="d-none d-sm-table-cell">2017/09/23</td>
            <td>
              <a href="be_pages_ecom_product_edit.html">Product #20</a>
            </td>
            <td class="d-none d-md-table-cell">
              <a href="be_pages_ecom_products.html">Kids</a>
            </td>
            <td class="text-end">$71</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="be_pages_ecom_product_edit.html"
                >PID.419</a
              >
            </td>
            <td class="d-none d-sm-table-cell">
              <span class="badge bg-danger">Out of Stock</span>
            </td>
            <td class="d-none d-sm-table-cell">2017/09/22</td>
            <td>
              <a href="be_pages_ecom_product_edit.html">Product #19</a>
            </td>
            <td class="d-none d-md-table-cell">
              <a href="be_pages_ecom_products.html">Electronics</a>
            </td>
            <td class="text-end">$32</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="be_pages_ecom_product_edit.html"
                >PID.418</a
              >
            </td>
            <td class="d-none d-sm-table-cell">
              <span class="badge bg-success">Available</span>
            </td>
            <td class="d-none d-sm-table-cell">2017/09/21</td>
            <td>
              <a href="be_pages_ecom_product_edit.html">Product #18</a>
            </td>
            <td class="d-none d-md-table-cell">
              <a href="be_pages_ecom_products.html">Kids</a>
            </td>
            <td class="text-end">$81</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="be_pages_ecom_product_edit.html"
                >PID.417</a
              >
            </td>
            <td class="d-none d-sm-table-cell">
              <span class="badge bg-success">Available</span>
            </td>
            <td class="d-none d-sm-table-cell">2017/09/20</td>
            <td>
              <a href="be_pages_ecom_product_edit.html">Product #17</a>
            </td>
            <td class="d-none d-md-table-cell">
              <a href="be_pages_ecom_products.html">Health</a>
            </td>
            <td class="text-end">$39</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="be_pages_ecom_product_edit.html"
                >PID.416</a
              >
            </td>
            <td class="d-none d-sm-table-cell">
              <span class="badge bg-success">Available</span>
            </td>
            <td class="d-none d-sm-table-cell">2017/09/19</td>
            <td>
              <a href="be_pages_ecom_product_edit.html">Product #16</a>
            </td>
            <td class="d-none d-md-table-cell">
              <a href="be_pages_ecom_products.html">Electronics</a>
            </td>
            <td class="text-end">$25</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="be_pages_ecom_product_edit.html"
                >PID.415</a
              >
            </td>
            <td class="d-none d-sm-table-cell">
              <span class="badge bg-danger">Out of Stock</span>
            </td>
            <td class="d-none d-sm-table-cell">2017/09/18</td>
            <td>
              <a href="be_pages_ecom_product_edit.html">Product #15</a>
            </td>
            <td class="d-none d-md-table-cell">
              <a href="be_pages_ecom_products.html">Electronics</a>
            </td>
            <td class="text-end">$12</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="be_pages_ecom_product_edit.html"
                >PID.414</a
              >
            </td>
            <td class="d-none d-sm-table-cell">
              <span class="badge bg-danger">Out of Stock</span>
            </td>
            <td class="d-none d-sm-table-cell">2017/09/17</td>
            <td>
              <a href="be_pages_ecom_product_edit.html">Product #14</a>
            </td>
            <td class="d-none d-md-table-cell">
              <a href="be_pages_ecom_products.html">Mobile Phones</a>
            </td>
            <td class="text-end">$62</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="be_pages_ecom_product_edit.html"
                >PID.413</a
              >
            </td>
            <td class="d-none d-sm-table-cell">
              <span class="badge bg-success">Available</span>
            </td>
            <td class="d-none d-sm-table-cell">2017/09/16</td>
            <td>
              <a href="be_pages_ecom_product_edit.html">Product #13</a>
            </td>
            <td class="d-none d-md-table-cell">
              <a href="be_pages_ecom_products.html">Fashion</a>
            </td>
            <td class="text-end">$14</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="be_pages_ecom_product_edit.html"
                >PID.412</a
              >
            </td>
            <td class="d-none d-sm-table-cell">
              <span class="badge bg-success">Available</span>
            </td>
            <td class="d-none d-sm-table-cell">2017/09/15</td>
            <td>
              <a href="be_pages_ecom_product_edit.html">Product #12</a>
            </td>
            <td class="d-none d-md-table-cell">
              <a href="be_pages_ecom_products.html">Fashion</a>
            </td>
            <td class="text-end">$46</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="be_pages_ecom_product_edit.html"
                >PID.411</a
              >
            </td>
            <td class="d-none d-sm-table-cell">
              <span class="badge bg-success">Available</span>
            </td>
            <td class="d-none d-sm-table-cell">2017/09/14</td>
            <td>
              <a href="be_pages_ecom_product_edit.html">Product #11</a>
            </td>
            <td class="d-none d-md-table-cell">
              <a href="be_pages_ecom_products.html">House</a>
            </td>
            <td class="text-end">$17</td>
          </tr>
          <tr>
            <td>
              <a class="fw-semibold" href="be_pages_ecom_product_edit.html"
                >PID.410</a
              >
            </td>
            <td class="d-none d-sm-table-cell">
              <span class="badge bg-danger">Out of Stock</span>
            </td>
            <td class="d-none d-sm-table-cell">2017/09/13</td>
            <td>
              <a href="be_pages_ecom_product_edit.html">Product #10</a>
            </td>
            <td class="d-none d-md-table-cell">
              <a href="be_pages_ecom_products.html">Electronics</a>
            </td>
            <td class="text-end">$63</td>
          </tr> -->
        </tbody>
      </table>
      <!-- END Products Table -->

      <!-- Navigation -->
      <nav aria-label="Products navigation">
        <ul class="pagination justify-content-end mb-0">
          <li class="page-item">
            <a
              class="page-link"
              href="javascript:void(0)"
              aria-label="Previous"
            >
              <span aria-hidden="true">
                <i class="fa fa-angle-left"></i>
              </span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="javascript:void(0)">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">2</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="javascript:void(0)">...</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">39</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">40</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" aria-label="Next">
              <span aria-hidden="true">
                <i class="fa fa-angle-right"></i>
              </span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- END Navigation -->
    </div>
  </div>
</template>

<script setup>

</script>

<style>
</style>
