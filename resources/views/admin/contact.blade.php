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
              
              Contact Records
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
                
                Contact Records
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
                  
                  Contact Records
                </h3>
                {{--  <button
                  type="button"
                  class="btn btn-primary btn-sm float-right"
                  data-toggle="modal"
                  data-target="#modal-default"><i
                    class="fa fa-plus"></i>
                  Add
                  New</button>  --}}

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
                        Name
                      </th>

                      <th>
                        Email
                      </th>
                      <th>
                        Phone
                      </th>
                      <th>
                        Message
                      </th>
                      <th>
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($contacts as $contact)
                      <tr>
                        <td>
                          {{ $contact->id }}
                        </td>
                        
                        <td>
                          {{ $contact->name }}
                        </td>
                        <td>
                          {{ $contact->email }}
                        </td>
                        <td>
                          {{ $contact->phone }}
                        </td>
                        <td>
                          {{ $contact->message }}
                        </td>
                        <td
                          class="text-right">
                          <button
                            type="button"
                            class="btn btn-warning btn-sm"
                            data-toggle="modal"
                            data-target={{ '#editModal' . $contact->id }}><i
                              class="fa fa-pencil-alt"></i></button>
                          <!-- Modal -->
                          <div
                            class="modal fade"
                            id="{{ 'editModal' . $contact->id }}"
                            tabindex="-1"
                            aria-labelledby="editModabel"
                            aria-hidden="true">
                            <div
                              class="modal-dialog">
                              <div
                                class="modal-content">
                                <div
                                  class="modal-header">
                                  <h5
                                    class="modal-title"
                                    id="editModabel">
                                    Edit
                                    Contact Records
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
                                    action="{{ route('contactSubmits.update', $contact->id) }}"
                                    method="POST"
                                    enctype='multipart/form-data'>
                                    @csrf
                                    @method('PUT')  
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
                                      value="{{ $contact->name }}">
                                    </div>
                                    {{-- email --}}
                                    <div
                                    class="form-group">
                                      <p style='text-align:left;'
                                      for="email">
                                      Email*
                                      </p>
                                      <input
                                      type="email"
                                      class="form-control"
                                      name="email"
                                      value="{{ $contact->email }}"
                                      placeholder="{{ $contact->email }}"
                                      required\>

                                     
                                    
                                    </div>
                                    {{-- phone --}}
                                    <div
                                    class="form-group">
                                      <p style='text-align:left;'
                                      for="phone">
                                      Phone*
                                      </p>
                                      <input
                                      type="number"
                                      class="form-control"
                                      name="phone"
                                      value="{{ $contact->phone }}"
                                      required>
                                    </div>  
                                    {{-- message --}}
                                    <div
                                    class="form-group">
                                      <p style='text-align:left;'
                                      for="message">
                                      Message
                                      </p>
                                      <textarea
                                      class="form-control"
                                      name="message"
                                      rows="3">
                                      {{ $contact->message }}
                                      </textarea>
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
                            data-target="{{ '#deleteModal' . $contact->id }}"><i
                              class="fa fa-trash"></i></button>
                          <div
                            class="modal fade"
                            id="{{ 'deleteModal' . $contact->id }}"
                            tabindex="-1"
                            aria-labelledby="deleteModabel"
                            aria-hidden="true">
                            <div
                              class="modal-dialog">
                              <div
                                class="modal-content">
                                <div
                                  class="modal-header">
                                  <h5
                                    class="modal-title"
                                    id="deleteModabel">
                                    Delete
                                    Record
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
                                    contact?
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
                                    action="{{ route('contactSubmits.destroy', $contact->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                      type="submit"
                                      class="btn btn-danger">
                                      Delete
                                    </button>
                                  </form> <form
                                    action="{{ route('contactSubmits.destroy', $contact->id) }}"
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


  <!-- Add New Contact Records Modal -->
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
            Contact record
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

          <form
            action="{{ route('contactSubmits.store') }}"
            method='post'
            enctype='multipart/form-data'>
            @csrf
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
                                      placeholder='Name'>
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
                                      placeholder="Email"
                                      required\>

                                     
                                    
                                    </div>
                                    {{-- phone --}}
                                    <div
                                    class="form-group">
                                      <p style='text-align:left;'
                                      for="phone">
                                      Phone*
                                      </p>
                                      <input
                                      type="text"
                                      class="form-control"
                                      name="tel"
                                      placeholder="Phone"
                                      required>
                                    </div>  
                                    {{-- message --}}
                                    <div
                                    class="form-group">
                                      <p style='text-align:left;'
                                      for="message">
                                      Message
                                      </p>
                                      <textarea
                                      class="form-control"
                                      name="message"
                                      rows="3">
                                      </textarea>
                                    </div>

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
