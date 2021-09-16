@extends('layouts.masterAdmin')
@section('content')
  <link rel="stylesheet" href="{{ asset('assets_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets_admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">All Categories</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">All Categories</li>
          </ol>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    <!-- /.content-header -->

     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">All Categories</h3>
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Add New</button>
                    
                </div>
                <div class="card-body">
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
                  <table id="example1" class="table table-stripped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $cateogry)
                        <tr>
                            <td>{{ $cateogry->id }}</td>
                            <td>{{ $cateogry->name }}</td>
                            <td class="text-right">
                                <button type="button" class="btn btn-warning btn-sm"  data-toggle="modal"  data-target={{ '#editModal' . $cateogry->id }}><i class="fa fa-pencil-alt"></i></button>
                                <!-- Modal -->
                                <div class="modal fade" id="{{ 'editModal' . $cateogry->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Category </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                         </button>
                                      </div>
                                      <div class="modal-body">
                                        
                                        <form action="{{ url('admin/category/edit', $cateogry->id) }}" method='post' enctype='multipart/form-data'>
                                          @csrf
                                          <div class="form-group">
                                            <p style='text-align:left;' for="editCategory">
                                              Cateogyr Name
                                            </p>
                                            <input type="text" name='name' class="form-control mb-2" id="editCategory"  value={{ $cateogry->name }}>
                                           
                                          </div>
                                          <button type="submit" class="btn btn-success float-right">Update</button>
                                        </form>
            
            
                                      </div>
            
                                    </div>
                                  </div>
                                </div>
                                
                                <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal"  data-target="{{ '#deleteModal' . $cateogry->id }}"><i class="fa fa-trash"></i></button>
                                <div class="modal fade" id="{{ 'deleteModal' . $cateogry->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">
                                          Delete Category
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                         </button>
                                      </div>
                                      <div
                                        class="modal-body text-left">
                                        <p>Are you sure you want to delete this category?
                                        </p>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
                                        <a class="btn btn-danger" href="{{ url('admin/category/delete', $cateogry->id) }}">Delete </a>
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

         
<!-- Add New Category Modal -->     
<div class="modal fade" id="modal-default" aria-modal="true" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title text-dark">Add New Category</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
        {{-- boostrap form --}}
        <form action="{{ url('admin/category/create') }}" method='post' enctype='multipart/form-data'>
          @csrf

          <div class="form-group">
            <p style='text-align:left;' class='text-dark' for="exampleInputEmail1">
              Category Name
            </p>
            <input  type="text"  name='name' class="form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name" required>

          </div>
      
          <button type="submit" class="btn btn-success float-right"><i class="fa fa-plus"></i> Add</button>
        </form>


      </div>

    </div>
  </div>
</div>



@endsection