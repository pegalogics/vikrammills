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
              Customers
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
                Customers
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
                  Customers
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
                 @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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
                        Photo
                      </th>
                      <th>
                        Name
                      </th>

                      <th>
                        Email
                      </th>
                      <th>
                        mobile
                      </th>
                      <th>
                        Address
                      </th>
                      <th>
                        City
                      </th>
                      <th>
                        State
                      </th>
                      {{-- <th>
                        Country
                      </th> --}}
                      {{-- <th>
                        State
                      </th>
                      <th>
                        zip
                      </th>
                      <th>
                        Ip
                      </th> --}}
                      <th>
                        status
                      </th>
                      <th>
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($customers as $customer)
                      <tr>
                        <td>
                          {{ $customer->id }}
                        </td>
                        <th>
                          <img
                            class="img-thumbnail rounded-circle"
                            src="{{ url('/') . '/uploads/' . $customer->pic }}"
                            alt=""
                            style='width:5rem; height:auto;'>
                        </th>
                        <td>
                          {{ $customer->name }}
                        </td>
                        <td>
                          {{ $customer->email }}
                        </td>
                        <td>
                          {{ $customer->mobile }}
                        </td>
                        <td>
                          {{ $customer->address }}
                        </td>
                        <td>
                          {{ $customer->city }}
                        </td>
                        <td>
                          {{ $customer->state }}
                        </td>
                        <td>
                          {{-- {{ $customer->country }}
                        </td>
                        <td>
                          {{ $customer->state }}
                        </td>
                        <td>
                          {{ $customer->zip }}
                        </td>
                        <td>
                          {{ $customer->ip }}
                        </td> --}}

                        <td>
                          {{ $customer->status }}
                        </td>
                        <td
                          class="text-right">
                          <button
                            type="button"
                            class="btn btn-warning btn-sm"
                            data-toggle="modal"
                            data-target={{ '#editModal' . $customer->id }}><i
                              class="fa fa-pencil-alt"></i></button>
                          <!-- Modal -->
                          <div
                            class="modal fade"
                            id="{{ 'editModal' . $customer->id }}"
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
                                    Customers
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
                                    action="{{ route('customers.update', $customer->id) }}"
                                    method="POST"
                                    enctype='multipart/form-data'>
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
                                          value="{{ $customer->id }}"
                                          disabled>
                                      </p>
                                    </div>
                                    {{-- photo --}}
                                    <div
                                      class="form-group">
                                      <p style='text-align:left;'
                                        for="photo">
                                        Photo
                                      </p>
                                      <input
                                        type="file"
                                        class="button button-primary form-control mb-2"
                                        id="photo"
                                        name="file">
                                       <div class='output'>
                                         <img src="{{ url('uploads/slider') }}/{{ $slider1 ?? ''  }}" alt=""slider1" class="img-thumbnail img-fluid" style='max-width:300px'>
                                                                                             </div>
                                    </div>
                                    <div
                                      class='Customer'>
                                    </div>


                                    {{-- name --}}
                                    <div
                                    class="form-group">
                                      <p style='text-align:left;'
                                        for="name">
                                        Name*
                                      </p>
                                      <input
                                      type="text"
                                      class="form-control"
                                      name="name"
                                      value="{{ $customer->name }}">
                                    </div>
                                    {{-- email --}}
                                    <div
                                    class="form-group">
                                      <p style='text-align:left;'
                                      for="email">
                                      Email*
                                      </p>
                                      <input
                                      type="text"
                                      class="form-control"
                                      name="email"
                                      value="{{ $customer->email }}"
                                      placeholder="{{ $customer->email }}"
                                      required\>

                                     
                                    
                                    </div>
                                    {{-- mobile --}}
                                    <div
                                    class="form-group">
                                      <p style='text-align:left;'
                                      for="mobile">
                                      mobile*
                                      </p>
                                      <input
                                      type="text"
                                      class="form-control"
                                      name="mobile"
                                      value="{{ $customer->mobile }}"
                                      required>
                                    </div>  
                                    {{-- address textaread --}}
                                    <div
                                    class="form-group">
                                      <p style='text-align:left;'
                                      for="address">
                                      Address
                                      </p>
                                      <textarea
                                      class="form-control"
                                      name="address"
                                      rows="3">
                                      {{ $customer->address }}
                                      </textarea>
                                    </div>
                                    
                                    
                                    {{-- city --}}
                                    <div
                                    class="form-group">
                                      <p style='text-align:left;'
                                      for="city">
                                      City
                                      </p>
                                      <input
                                      type="text"
                                      class="form-control"
                                      name="city"
                                      value="{{ $customer->city }}">
                                    </div>
                                    {{-- state --}}
                                    <div
                                    class="form-group">
                                      <p style='text-align:left;'
                                      for="state">
                                      State
                                      </p>
                                      <input
                                      type="text"
                                      class="form-control"
                                      name="state"
                                      value="{{ $customer->state }}">
                                    </div>
                                    {{-- country --}}
                                    <div
                                    class="form-group">
                                      <p style='text-align:left;'
                                      for="country">
                                      Country
                                      </p>
                                      <input
                                      type="text"
                                      class="form-control"
                                      name="country"
                                      value="{{ $customer->country }}">
                                    </div>
                                    {{-- zip --}}
                                    <div
                                    class="form-group">
                                      <p style='text-align:left;'
                                      for="zip">
                                      Zip
                                      </p>
                                      <input
                                      type="number"
                                      class="form-control"
                                      name="zip"
                                      value="{{ $customer->zip }}">
                                    </div>
                                    {{-- ip --}}
                                    <div
                                    class="form-group">
                                      <p style='text-align:left;'
                                      for="ip">
                                      Ip
                                      </p>
                                      <input
                                      type="text"
                                      class="form-control"
                                      name="ip"
                                      value="{{ $customer->ip }}">
                                    </div>
                                    {{-- status --}}
                                    <div
                                    class="form-group">
                                      <p style='text-align:left;'
                                      for="status">
                                      Status
                                      </p>
                                      <select
                                      class="form-control"
                                      name="status">
                                        <option
                                        value="1"
                                        @if($customer->status == 1)
                                        selected
                                        @endif
                                        >Active</option>
                                        <option
                                        value="0"
                                        @if($customer->status == 0)
                                        selected
                                        @endif
                                        >Inactive</option>
                                      </select>
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
                            data-target="{{ '#deleteModal' . $customer->id }}"><i
                              class="fa fa-trash"></i></button>
                          <div
                            class="modal fade"
                            id="{{ 'deleteModal' . $customer->id }}"
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
                                    Customer
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
                                    customer?
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
                                    action="{{ route('customers.destroy', $customer->id) }}"
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


  <!-- Add New Customers Modal -->
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
            Customers
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
            action="{{ url('admin/Customers/create') }}"
            method='post'
            enctype='multipart/form-data'>
            @csrf
            <div
              class="form-group">
              <p style='text-align:left;'
                class='text-dark'
                for="exampleInputEmail1">
                Customers
                Name
              </p>
              <input
                type="text"
                name='name'
                class="form-control mb-2"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Customers Name"
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
