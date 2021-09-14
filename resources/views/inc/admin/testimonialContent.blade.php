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
            {{-- <div
              class="separator mb-3 opacity-75">
            </div> --}}
            <!--end::Menu separator-->
            <!--begin::Menu item-->
            {{-- <div
              class="menu-item px-3">
              <a href="#"
                class="menu-link px-3">New
                Ticket</a>
            </div> --}}
            <!--end::Menu item-->
            <!--begin::Menu item-->
            {{-- <div
              class="menu-item px-3">
              <a href="#"
                class="menu-link px-3">New
                Customer</a>
            </div> --}}
            <!--end::Menu item-->
            <!--begin::Menu item-->

            <!--end::Menu item-->
            <!--begin::Menu item-->

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
                      Testimonial
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
                      action="{{ url('admin/testimonial/create') }}"
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
                          Name
                        </p>
                        <input
                          type="text"
                          name='name'
                          class="form-control mb-2"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"
                          placeholder="Name"
                          required>

                      </div>
                      <div
                        class="form-group">
                        <p style='text-align:left;'
                          for="exampleInputEmail1">
                          Message
                          </>
                        </p>
                        <input
                          type="text"
                          name='message'
                          class="form-control mb-2"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"
                          placeholder="Message"
                          required>

                      </div>

                      <button
                        type="submit"
                        class="btn btn-primary">Add</button>
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
                  testimonial
                  Id
                </th>
                <th
                  class="w-25px">
                  image
                </th>

                <th
                  class="min-w-140px">
                  Name
                </th>
                <th
                  class="min-w-140px">
                  Message
                </th>
                <th
                  <th
                  class="min-w-100px text-end">
                  Actions
                </th>
              </tr>
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody>
              @foreach ($testimonials as $testimonial)
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
                      class="text-dark fw-bolder text-hover-primary fs-6">{{ $testimonial->id }}</a>
                  </td>
                  <td>
                    <img
                      src="{{ url('/') . '/' . $testimonial->pic }}"
                      style="width:150px;height:auto">
                  <td>
                  <td>

                    <span
                      class="text-muted fw-bold text-muted d-block fs-7">
                      {{ $testimonial->name }}</span>
                  </td>
                  <td>

                    <span
                      class="text-muted fw-bold text-muted d-block fs-7">
                      {{ $testimonial->message }}</span>
                  </td>
                  <td>

                    <span
                      class="text-muted fw-bold text-muted d-block fs-7">{{ $testimonial->price }}</span>
                  </td>
                  <td>

                    <span
                      class="text-muted fw-bold text-muted d-block fs-7">{{ $testimonial->quantity }}</span>
                  </td>
                  <td
                    class="text-dark fw-bolder text-hover-primary fs-6">
                    {{ $testimonial->weight }}
                  </td>
                  <td>
                    {{ $testimonial->discount }}
                  </td>
                  <td
                    class="text-end">
                    <button
                      type="button"
                      class="btn btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target={{ '#exampleModal' . $testimonial->id }}
                      }}>
                      Edit

                    </button>

                    <!-- Modal -->
                    <div
                      class="modal fade"
                      id={{ 'exampleModal' . $testimonial->id }}
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
                              Edit
                              Testimonial
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
                              action="{{ url('admin/testimonial/edit', $testimonial->id) }}"
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
                                  Cateogyr
                                  Name
                                </p>
                                <input
                                  type="text"
                                  name='name'
                                  class="form-control mb-2"
                                  id="exampleInputEmail1"
                                  aria-describedby="emailHelp"
                                  value={{ $testimonial->name }}>
                                >


                              </div>
                              <div
                                class="form-group">
                                <p style='text-align:left;'
                                  for="exampleInputEmail1">
                                  Message
                                  </>
                                </p>
                                <input
                                  type="text"
                                  name='message'
                                  class="form-control mb-2"
                                  id="exampleInputEmail1"
                                  aria-describedby="emailHelp"
                                  value={{ $testimonial->message }}>

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
                      data-bs-target={{ '#exampleModaldelete' . $testimonial->id }}>
                      delete
                    </button>
                    <div
                      class="modal fade"
                      id={{ 'exampleModaldelete' . $testimonial->id }}
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
                              Testimonial
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
                              Testimonial?
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
                              href="{{ url('admin/testimonial/delete', $testimonial->id) }}">
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
