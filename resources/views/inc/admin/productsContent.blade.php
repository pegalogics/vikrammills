<!--begin::Content-->
<div
  class="content d-flex flex-column flex-column-fluid"
  id="kt_content">
  <!--begin::Toolbar-->

  <!--end::Toolbar-->
  <!--begin::Post-->
  <div
    class="" id="
    kt_post">

    <!--begin::Row-->
    <div
      class="card mb-5 mb-xl-8">
      <!--begin::Header-->
      <div
        class="card-header border-0 pt-5">
        <h3
          class="card-title align-items-start flex-column">

        </h3>
        <div
          class="card-toolbar">
          <!--begin::Menu-->
          <button
            type="button"
            class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
            data-kt-menu-trigger="click"
            data-kt-menu-placement="bottom-end"
            data-kt-menu-flip="top-end">
            <!--begin::Svg Icon | path: icons/stockholm/Layout/Layout-4-blocks-2.svg-->
            <span
              class="svg-icon svg-icon-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="24px"
                height="24px"
                viewBox="0 0 24 24"
                version="1.1">
                <g stroke="none"
                  stroke-width="1"
                  fill="none"
                  fill-rule="evenodd">
                  <rect
                    x="5"
                    y="5"
                    width="5"
                    height="5"
                    rx="1"
                    fill="#000000" />
                  <rect
                    x="14"
                    y="5"
                    width="5"
                    height="5"
                    rx="1"
                    fill="#000000"
                    opacity="0.3" />
                  <rect
                    x="5"
                    y="14"
                    width="5"
                    height="5"
                    rx="1"
                    fill="#000000"
                    opacity="0.3" />
                  <rect
                    x="14"
                    y="14"
                    width="5"
                    height="5"
                    rx="1"
                    fill="#000000"
                    opacity="0.3" />
                </g>
              </svg>
            </span>
            <!--end::Svg Icon-->
          </button>
          <!--begin::Menu 2-->
          <div
            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px"
            data-kt-menu="true">
            <!--begin::Menu item-->
            <div
              class="menu-item px-3">
              <div
                class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
                Quick
                Actions
              </div>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu separator-->
            <div
              class="separator mt-3 opacity-75">
            </div>
            <!--end::Menu separator-->
            <!--begin::Menu item-->
            <div
              class="menu-item px-3">
              <div
                class="menu-content px-3 py-3">
                <a class="btn btn-primary btn-sm px-4"
                  href="#">Generate
                  Reports</a>
              </div>
            </div>
            <!--end::Menu item-->
          </div>
          <!--end::Menu 2-->
          <!--end::Menu-->
        </div>
      </div>
      <!--end::Header-->
      <!--begin::Body-->
      <div
        class="card-body py-3">
        @if (Session::has('success'))
          <div
            class="alert alert-success">
            {{ Session::get('success') }}
          </div>
        @endif
        @if (Session::has('error'))
          <div
            class="alert alert-danger">
            {{ Session::get('error') }}
          </div>
        @endif
        <h1>
          Products
        </h1>
        <!--begin::Table container-->
        <!-- Button trigger modal -->
        <div
          class="container row justify-content-end">
          <div
            class='col-3'>
            <button
              type="button"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal">

              Add
            </button>

            <!-- Modal -->
            <div
              class="modal fade"
              id="exampleModal"
              tabindex="-1"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div
                class="modal-dialog">
                <div
                  class="modal-content">
                  <div
                    class="modal-header">
                    <h5
                      class="modal-title"
                      id="exampleModalLabel">
                      Add
                      Product
                    </h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"></button>
                  </div>
                  <div
                    class="modal-body">
                    {{-- boostrap form --}}
                    <form
                      action="{{ url('admin/products') }}"
                      method='post'
                      enctype='multipart/form-data'>
                      @csrf
                      {{-- upload photo --}}
                      <div
                        class="form-group">
                        <p style='text-align:left;'
                          for="photo">
                          Photo
                        </p>
                        <input
                          type="file"
                          class="form-control mb-2"
                          id="photo"
                          name="file"
                          required>
                      </div>
                      <div
                        class='output'>
                      </div>
                      {{-- end upload photo --}}
                      <div
                        class="form-group">
                        <p style='text-align:left;'
                          for="exampleInputEmail1">
                          Product
                          Name
                        </p>
                        <input
                          type="text"
                          name='name'
                          class="form-control mb-2"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"
                          placeholder="Enter Product Name"
                          required>

                      </div>
                      <div
                        class="form-group">
                        <p style='text-align:left;'
                          for="exampleInputPassword1">
                          Price
                        </p>
                        <input
                          type="number"
                          name='price'
                          class="form-control mb-2"
                          id="exampleInputPassword1"
                          placeholder="price"
                          required>
                      </div>

                      {{-- quantity --}}
                      <div
                        class="form-group">
                        <p style='text-align:left;'
                          for="exampleInputPassword1">
                          Quantity
                        </p>
                        <input
                          type="number"
                          name='quantity'
                          class="form-control mb-2"
                          id="exampleInputPassword1"
                          placeholder="Quantity"
                          required>
                      </div>
                      {{-- Weight --}}
                      <div
                        class="form-group">
                        <p style='text-align:left;'
                          for="exampleInputPassword1">
                          Weight
                        </p>
                        <input
                          type="text"
                          name='weight'
                          class="form-control mb-2"
                          id="exampleInputPassword1"
                          placeholder="Weight"
                          required>
                      </div>

                      {{-- Discount --}}
                      <div
                        class="form-group">
                        <p style='text-align:left;'
                          for="exampleInputPassword1">
                          Discount
                        </p>
                        <input
                          type="number"
                          name='discount'
                          class="form-control mb-2"
                          id="exampleInputPassword1"
                          placeholder="Discount"
                          required>
                      </div>

                      {{-- Category --}}
                      <div
                        class="form-group">
                        <p style='text-align:left;'
                          for="exampleInputPassword1">
                          Category
                        </p>
                        <select
                          class="form-control mb-2"
                          id="exampleInputPassword1"
                          name="category"
                          required>
                          <option
                            value="">
                            Select
                            Category
                          </option>
                          @foreach ($categories as $category)
                            <option
                              value="{{ $category->id }}">
                              {{ $category->name }}
                            </option>
                          @endforeach




                        </select>
                      </div>
                      {{-- Description --}}
                      <div
                        class="form-group">
                        <p style='text-align:left;'
                          for="exampleInputPassword1">
                          Description
                        </p>
                        <textarea
                          class="form-control mb-2"
                          id="exampleInputPassword1"
                          name="description"
                          rows="3"
                          placeholder="Description"></textarea>
                      </div>


                      <button
                        type="submit"
                        class="btn btn-primary">Submit</button>
                    </form>


                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="table-responsive">
          <!--begin::Table-->
          <table
            class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
            <!--begin::Table head-->
            <thead>
              <tr
                class="fw-bolder text-muted">
                <th
                  class="w-25px">
                  <div
                    class="form-check form-check-sm form-check-custom form-check-solid">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="1"
                      data-kt-check="true"
                      data-kt-check-target=".widget-13-check" />
                  </div>
                </th>
                <th
                  class="min-w-150px">
                  Product
                  Id
                </th>
                <th
                  class="min-w-150px">
                  Image
                </th>
                <th
                  class="min-w-140px">
                  Name
                </th>
                <th
                  class="min-w-120px">
                  Price
                </th>
                <th
                  class="min-w-120px">
                  Quantity
                </th>
                <th
                  class="min-w-120px">
                  Weight
                </th>
                <th
                  class="min-w-120px">
                  discount
                </th>
                <th
                  class="min-w-120px">
                  Descripotion
                </th>
                <th
                  class="min-w-100px text-end">
                  Actions
                </th>
              </tr>
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody>
              @foreach ($products as $product)
                <tr>
                  <td>
                    <div
                      class="form-check form-check-sm form-check-custom form-check-solid">
                      <input
                        class="form-check-input widget-13-check"
                        type="checkbox"
                        value="1" />
                    </div>
                  </td>
                  <td>
                    <a href="#"
                      class="text-dark fw-bolder text-hover-primary fs-6">{{ $product->id }}</a>
                  </td>
                  <td>
                    <img
                      src="{{ url('/') . '/' . $product->pic }}"
                      style="width:150px;height:auto">
                  <td>

                    <span
                     class="text-muted fw-bold text-muted d-block fs-7"
                     >
                      {{ $product->name }}</span>
                  </td>
                  <td>

                    <span
                     class="text-muted fw-bold text-muted d-block fs-7"
                      >{{ $product->price }}</span>
                  </td>
                  <td>

                    <span
                     class="text-muted fw-bold text-muted d-block fs-7"
                      >{{ $product->quantity }}</span>
                  </td>
                  <td>
                    <span
                     class="text-muted fw-bold text-muted d-block fs-7">
                    {{ $product->weight }}
                    </span>
                  </td>
                  <td>
                    <span
                     class="text-muted fw-bold text-muted d-block fs-7">
                    {{ $product->discount }}
                    </span>
                  </td>
                  <td>
                    <span
                     class="text-muted fw-bold text-muted d-block fs-7">
                    {{ $product->description }}
                    </span>
                  </td>
                  <td
                    class="text-end">
                    <button
                      type="button"
                      class="btn btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target={{ '#exampleModal' . $product->id }}
                      }}>
                      Edit

                    </button>

                    <!-- Modal -->
                    <div
                      class="modal fade"
                      id={{ 'exampleModal' . $product->id }}
                      tabindex="-1"
                      aria-labelledby="exampleModalLabel"
                      aria-hidden="true">
                      <div
                        class="modal-dialog">
                        <div
                          class="modal-content">
                          <div
                            class="modal-header">
                            <h5
                              class="modal-title"
                              id="exampleModalLabel">
                              Add
                              Product
                            </h5>
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"></button>
                          </div>
                          <div
                            class="modal-body">
                            {{-- boostrap form --}}
                            <form
                              action="{{ url('admin/products/edit', $product->id) }}"
                              method='post'
                              enctype='multipart/form-data'>
                              @csrf
                              {{-- upload photo --}}
                              <div
                                class="form-group">
                                <p style='text-align:left;'
                                  for="photo">
                                  Photo
                                </p>
                                <input
                                  type="file"
                                  class="form-control mb-2"
                                  id="photo"
                                  name="file">
                              </div>
                              <div
                                class='output'>
                              </div>
                              {{-- end upload photo --}}
                              <div
                                class="form-group">
                                <p style='text-align:left;'
                                  for="exampleInputEmail1">
                                  Product
                                  Name
                                </p>
                                <input
                                  type="text"
                                  name='name'
                                  class="form-control mb-2"
                                  id="exampleInputEmail1"
                                  aria-describedby="emailHelp"
                                  value={{ $product->name }}>
                                >

                              </div>
                              <div
                                class="form-group">
                                <p style='text-align:left;'
                                  for="exampleInputPassword1">
                                  Price
                                </p>
                                <input
                                  type="number"
                                  name='price'
                                  class="form-control mb-2"
                                  id="exampleInputPassword1"
                                  value={{ $product->price }}>
                                >
                              </div>

                              {{-- quantity --}}
                              <div
                                class="form-group">
                                <p style='text-align:left;'
                                  for="exampleInputPassword1">
                                  Quantity
                                </p>
                                <input
                                  type="number"
                                  name='quantity'
                                  class="form-control mb-2"
                                  id="exampleInputPassword1"
                                  value={{ $product->quantity }}>
                                >
                              </div>
                              {{-- Weight --}}
                              <div
                                class="form-group">
                                <p style='text-align:left;'
                                  for="exampleInputPassword1">
                                  Weight
                                </p>
                                <input
                                  type="text"
                                  name='weight'
                                  class="form-control mb-2"
                                  id="exampleInputPassword1"
                                  value={{ $product->weight }}>
                                >
                              </div>

                              {{-- Discount --}}
                              <div
                                class="form-group">
                                <p style='text-align:left;'
                                  for="exampleInputPassword1">
                                  Discount
                                </p>
                                <input
                                  type="number"
                                  name='discount'
                                  class="form-control mb-2"
                                  id="exampleInputPassword1"
                                  value={{ $product->discount }}>
                                >
                              </div>

                              {{-- Category --}}
                              <div
                                class="form-group">
                                <p style='text-align:left;'
                                  for="exampleInputPassword1">
                                  Category
                                </p>
                                <select
                                  class="form-control mb-2"
                                  id="exampleInputPassword1"
                                  name="category">
                                  <option
                                    value="">
                                    {{ $product->category }}
                                  </option>
                                  @foreach ($categories as $category)
                                    <option
                                      value="{{ $category->id }}">
                                      {{ $category->name }}
                                    </option>
                                  @endforeach
                                  




                                </select>
                              </div>
                              {{-- Description --}}
                              <div
                                class="form-group">
                                <p style='text-align:left;'
                                  for="exampleInputPassword1">
                                  Description
                                </p>
                                <textarea
                                  class="form-control mb-2"
                                  id="exampleInputPassword1"
                                  name="description"
                                  rows="3"
                                  value={{ $product->description }}>{{ $product->description }}</textarea>
                              </div>


                              <button
                                type="submit"
                                class="btn btn-primary">Submit</button>
                            </form>


                          </div>

                        </div>
                      </div>
                    </div>
                    {{-- delete model and button --}}
                    <button
                      type="button"
                      class="btn btn-danger"
                      data-bs-toggle="modal"
                      data-bs-target={{ '#exampleModaldelete' . $product->id }}>
                      delete
                    </button>
                    <div
                      class="modal fade"
                      id={{ 'exampleModaldelete' . $product->id }}
                      tabindex="-1"
                      aria-labelledby="exampleModalLabel"
                      aria-hidden="true">
                      <div
                        class="modal-dialog">
                        <div
                          class="modal-content">
                          <div
                            class="modal-header">
                            <h5
                              class="modal-title"
                              id="exampleModalLabel">
                              Delete
                              Product
                            </h5>
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"></button>
                          </div>
                          <div
                            class="modal-body">
                            <p>
                              Are
                              you
                              sure
                              you
                              want
                              to
                              delete
                              this
                              product?
                            </p>
                          </div>
                          <div
                            class="modal-footer">
                            <button
                              type="button"
                              class="btn btn-secondary"
                              data-dismiss="modal">
                              Close
                            </button>
                            <a class="btn btn-danger"
                              href="{{ url('admin/products/delete', $product->id) }}">
                              Delete
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    {{-- end delete --}}



                  </td>
                </tr>
              @endforeach
              



            </tbody>
            <!--end::Table body-->
          </table>
          <!--end::Table-->
        </div>
        <!--end::Table container-->
      </div>
      <!--begin::Body-->
    </div>
    <!--end::Row-->


  </div>
  <!--end::Post-->
</div>
<!--end::Content-->
