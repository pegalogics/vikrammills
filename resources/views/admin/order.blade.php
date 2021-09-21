@extends('layouts.masterAdmin')
@section('content')
  <link
    rel="stylesheet"
    href="{{ asset('assets_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link
    rel="stylesheet"
    href="{{ asset('assets_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link
    rel="stylesheet"
    href="{{ asset('assets_admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">


  <div
    class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div
      class="content-header">
      <div
        class="container-fluid">
        <div
          class="row mb-2">
          <div
            class="col-sm-6">
            <h1
              class="m-0">
              All
              Orders
            </h1>
          </div>
          <!-- /.col -->
          <div
            class="col-sm-6">
            <ol
              class="breadcrumb float-sm-right">
              <li
                class="breadcrumb-item">
                <a
                  href="index.php">Dashboard</a>
              </li>
              <li
                class="breadcrumb-item active">
                All
                Orders
              </li>
            </ol>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section
      class="content">
      <div
        class="container-fluid">
        <div
          class="row">
          <div
            class="col-12">

            <div
              class="card card-secondary">
              <div
                class="card-header">
                <h3
                  class="card-title">
                  All
                  Orders
                </h3>
                <button
                  type="button"
                  class="btn btn-primary btn-sm float-right"
                  data-toggle="modal"
                  data-target="#modal-default"><i
                    class="fa fa-plus"></i>
                  Add
                  New</button>

              </div>
              <div
                class="card-body">
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
                <table
                  id="example1"
                  class="table table-stripped">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Customer
                      </th>
                      <th>
                        Status
                      </th>
                      <th>
                        Total
                        Amount
                      </th>
                      <th>
                        Date
                        Added
                      </th>
                      <th>
                        Date
                        Modified
                      </th>
                      <th>
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)
                      <tr>
                        <td>
                          {{ $order->id }}
                        </td>
                        <td>
                          {{ $order->customer }}
                        </td>
                        <td>
                          {{ $order->status }}
                        </td>
                        <td>
                          {{ $order->total }}
                        </td>
                        <td>
                          {{ $order->created_at }}
                        </td>
                        <td>
                          {{ $order->updated_at }}
                        </td>
                        <td
                          class="text-right">
                          <button
                            type="button"
                            class="btn btn-warning btn-sm"
                            data-toggle="modal"
                            data-target={{ '#editModal' . $order->id }}><i
                              class="fa fa-pencil-alt"></i></button>
                          <!-- Modal -->
                          <div
                            class="modal fade"
                            id="{{ 'editModal' . $order->id }}"
                            tabindex="-1"
                            aria-labelledby="editModalLabel"
                            aria-hidden="true">
                            <div
                              class="modal-dialog">
                              <div
                                class="modal-content">
                                <div
                                  class="modal-header">
                                  <h5
                                    class="modal-title"
                                    id="editModalLabel">
                                    Edit
                                    Orders
                                  </h5>
                                  <button
                                    type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-label="Close">
                                    <span
                                      aria-hidden="true">×</span>
                                  </button>
                                </div>
                                <div
                                  class="modal-body">

                                  <form
                                    action="{{ route('orders.update', $order->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div
                                      class="form-group">
                                      <p style='text-align:left;'
                                        for="name">
                                        ID</label>
                                        <input
                                          type="text"
                                          class="form-control"
                                          name="id"
                                          value="{{ $order->id }}"
                                          disabled>
                                    </div>
                                    <div
                                      class="form-group">
                                      <p style='text-align:left;'
                                        style='text-align:left;'
                                        for="customer">
                                        Customer</label>
                                        <input
                                          type="text"
                                          class="form-control"
                                          name="customer"
                                          value="{{ $order->customer }}">
                                    </div>
                                    <div
                                      class="form-group">
                                      <p style='text-align:left;'
                                        for="status">
                                        Status</label>
                                        <!-- select drop down -->
                                        <select
                                          name="status"
                                          class="form-control">
                                          <option
                                            value="{{ $order->status }}">
                                            {{ $order->status }}
                                          </option>
                                          <option
                                            value="Pending">
                                            Pending
                                          </option>
                                          <option
                                            value="Processing">
                                            Processing
                                          </option>
                                          <option
                                            value="Completed">
                                            Completed
                                          </option>
                                          <option
                                            value="Cancelled">
                                            Cancelled
                                          </option>
                                        </select>

                                    </div>
                                    <div
                                      class="form-group">
                                      <p style='text-align:left;'
                                        for="total">
                                        Total
                                        Amount</label>
                                        <input
                                          type="number"
                                          class="form-control"
                                          name="total"
                                          value="{{ $order->total }}">
                                    </div>
                                    <div
                                      class="form-group">
                                      <p style='text-align:left;'
                                        for="created_at">
                                        Date
                                        Added</label>
                                        <input
                                          type="date"
                                          class="form-control"
                                          name="created_at"
                                          value="{{ $order->created_at }}">
                                    </div>
                                    <div
                                      class="form-group">
                                      <p style='text-align:left;'
                                        for="updated_at">
                                        Date
                                        Modified</label>
                                        <input
                                          type="date"
                                          class="form-control"
                                          name="updated_at"
                                          value="{{ $order->updated_at }}">
                                    </div>
                                    <div
                                      class="form-group">
                                      <button
                                        type="submit"
                                        class="btn btn-primary">Update</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->

                          <button
                            type="button"
                            class="btn btn-danger btn-sm"
                            data-toggle="modal"
                            data-target="{{ '#deleteModal' . $order->id }}"><i
                              class="fa fa-trash"></i></button>
                          <div
                            class="modal fade"
                            id="{{ 'deleteModal' . $order->id }}"
                            tabindex="-1"
                            aria-labelledby="deleteModalLabel"
                            aria-hidden="true">
                            <div
                              class="modal-dialog">
                              <div
                                class="modal-content">
                                <div
                                  class="modal-header">
                                  <h5
                                    class="modal-title"
                                    id="deleteModalLabel">
                                    Delete
                                    Order
                                  </h5>
                                  <button
                                    type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-label="Close">
                                    <span
                                      aria-hidden="true">×</span>
                                  </button>
                                </div>
                                <div
                                  class="modal-body text-left">
                                  <p>
                                    Are
                                    you
                                    sure
                                    you
                                    want
                                    to
                                    delete
                                    this
                                    order?
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

                                  <form
                                    action="{{ route('orders.destroy', $order->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                      type="submit"
                                      class="btn btn-danger">
                                      Delete
                                    </button>
                                  </form>

                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


  <!-- Add New Orders Modal -->
  <div
    class="modal fade"
    id="modal-default"
    aria-modal="true"
    role="dialog">
    <div
      class="modal-dialog">
      <div
        class="modal-content">
        <div
          class="modal-header">
          <h4
            class="modal-title text-dark">
            Add
            New
            Orders
          </h4>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close">
            <span
              aria-hidden="true">×</span>
          </button>
        </div>
        <div
          class="modal-body">
          {{-- boostrap form --}}
          <form
            action="{{ url('admin/Orders/create') }}"
            method='post'
            enctype='multipart/form-data'>
            @csrf
            <div
              class="form-group">
              <p style='text-align:left;'
                class='text-dark'
                for="exampleInputEmail1">
                Orders
                Name
              </p>
              <input
                type="text"
                name='name'
                class="form-control mb-2"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Orders Name"
                required>

            </div>
            <!-- according to table -->



            <button
              type="submit"
              class="btn btn-success float-right"><i
                class="fa fa-plus"></i>
              Add</button>
          </form>


        </div>

      </div>
    </div>
  </div>

@endsection
