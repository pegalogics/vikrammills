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
          <h1 class="m-0">All Products</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">All Products</li>
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
                    <h3 class="card-title">All Products</h3>
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
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Weight</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Discounted Price</th>
                        <th>Quantiity</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><img src="{{url('/uploads/products') .'/'. $product->pic}}" alt="" style="width:150px;"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->weight }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->discount }}</td>
                            <td>{{ $product->discounted_price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->status }}</td>
                            <td style="width: 150px">
                                
                                <button type="button" class="btn btn-info btn-sm"  data-toggle="modal"  data-target={{ '#viewModal' . $product->id }}><i class="fa fa-eye"></i></button>
                                <!-- Modal -->
                                <div class="modal fade" id="{{ 'viewModal' . $product->id }}" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="viewModalLabel">{{ $product->name }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                         </button>
                                      </div>
                                      <div class="modal-body text-left">
                                        
                                          @csrf
                                          <div class="form-group">
                                            <p style='text-align:left;' for="photo"> Photo</p>
                                            <img src="{{url('/uploads/products') .'/'. $product->pic}}" alt="{{ $product->name }}" style="max-width: 150px;">
                                           </div>
                                           
                                          <div class="form-group">
                                            <p style='text-align:left;' class='text-dark' for="name">Item Name: <strong>{{ $product->name }}</strong></p>
                                            
                                          </div>
                                          <div class="form-group">
                                            <p style='text-align:left;' for="category">Category: <strong>{{ $product->category }}</strong></p>
                                            
                                          </div>
                                          <hr>
                                          <div class="form-group row">
                                            <div class="col-md-3 col-6">
                                                <p style='text-align:left;' class='text-dark' for="weight">Weight</p>
                                                <strong>{{ $product->weight }}</strong>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p style='text-align:left;' class='text-dark' for="price">Price</p>
                                                <strong>{{ $product->price }}</strong>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p style='text-align:left;' class='text-dark' for="discount">Discount</p>
                                                <strong>{{ $product->discount }}</strong>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                  <p style='text-align:left;' for="quantity">Quantity</p>
                                                 <strong> {{ $product->quantity }}</strong>
                                              </div>
                                          </div>
                                          <hr>
                                           <div class="form-group">
                                               <p style='text-align:left;' class='text-dark font-weight-bold'>Product Details</p>
                                               {!!$product->description!!}
                                           </div>
                                           <hr>
                                           <div class="form-group">
                                               <p style='text-align:left;' class='text-dark font-weight-bold'>Product Details 2</p>
                                               {!!$product->more_description!!}
                                           </div>
                                           <hr>
                                          <div class="form-group">
                                            <p style='text-align:left;' class='text-dark' for="status">Status</p>
                                            <p class="text-success"><strong>In Stock</strong></p>
                                          </div>
                                        
            
            
                                      </div>
            
                                    </div>
                                  </div>
                                </div>
                                
                                
                                <button type="button" class="btn btn-warning btn-sm"  data-toggle="modal"  data-target={{ '#editModal' . $product->id }}><i class="fa fa-pencil-alt"></i></button>
                                <!-- Modal -->
                                <div class="modal fade" id="{{ 'editModal' . $product->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">{{ $product->name }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                         </button>
                                      </div>
                                      <div class="modal-body">
                                        
                                        <form action="{{ route('product.update', $product->id) }}" method='post'  enctype='multipart/form-data'>
                                          @csrf
                                          @method('PUT')
                                          <div class="form-group">
                                            <p style='text-align:left;' for="photo"> Photo</p>
                                            <input type="file" class="form-control mb-2" id="photo" name="file">
                                            <div class='output'>
                                              <img src="{{ url('uploads/products') }}/{{ $product->pic ?? 'clientlogo.jpg' }}" alt="clientlogo" class="img-thumbnail img-fluid" style='max-width:300px'>
                                              <input type='hidden' name='pic' value='{{$product->pic}}'>
                                            </div>
                                           </div>
                                           
                                          <div class="form-group">
                                            <p style='text-align:left;' class='text-dark' for="name">Item Name</p>
                                            <input  type="text"  name='name' class="form-control mb-2" id="name" placeholder="Enter Item Name" value="{{ $product->name }}" required>
                                          </div>
                                          <div class="form-group">
                                            <p style='text-align:left;' for="category">Category</p>
                                            <select class="form-control mb-2" id="category" name="category">
                                                
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                          </div>
                                          <div class="form-group row">
                                            <div class="col-md-3 col-6">
                                                <p style='text-align:left;' class='text-dark' for="weight">Weight</p>
                                                <input  type="text"  name='weight' class="form-control mb-2" id="weight" placeholder="Enter Item Weight" value="{{ $product->weight }}" required>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p style='text-align:left;' class='text-dark' for="price">Price</p>
                                                <input  type="number"  name='price' class="form-control mb-2" id="price" placeholder="Enter Item Price" value="{{ $product->price }}" required>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p style='text-align:left;' class='text-dark' for="discount">Discount</p>
                                                <input  type="number"  name='discount' class="form-control mb-2" id="discount" placeholder="Enter Item Discount" value="{{ $product->discount }}" required>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                  <p style='text-align:left;' for="quantity">Quantity</p>
                                                  <input  type="number"  name='quantity' class="form-control mb-2" id="quantity" placeholder="Enter Quantity" value="{{ $product->quantity }}" required>
                                              </div>
                                          </div>
                                          
                                           <div class="form-group">
                                               <p style='text-align:left;' class='text-dark'>Product Details 1</p>
                                               <textarea id="productdetails" name="description" class="form-control" style="height: 200px">{{ $product->description }}</textarea>
                                           </div>
                                           <div class="form-group">
                                               <p style='text-align:left;' class='text-dark'>Product Details 2</p>
                                               <textarea id="productdetails2" name="more_description" class="form-control" style="height: 200px">{{ $product->more_description }}</textarea>
                                           </div>
                                           
                                          <div class="form-group">
                                            <p style='text-align:left;' class='text-dark' for="status">Status</p>
                                            <select  name='status' class="form-control mb-2" id="status" required>
                                                <option value="1">In-Stock</option>
                                                <option value="0">Out of Stock</option>
                                            </select>
                                          </div>
                                          
                                          <button type="submit" class="btn btn-success float-right"><i class="fa fa-plus"></i> Update Item</button>
                                        </form>
            
            
                                      </div>
            
                                    </div>
                                  </div>
                                </div>
                                
                                <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal"  data-target="{{ '#deleteModal' . $product->id }}"><i class="fa fa-trash"></i></button>
                                <div class="modal fade" id="{{ 'deleteModal' . $product->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">
                                          Delete "{{ $product->name }}"
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                         </button>
                                      </div>
                                      <div
                                        class="modal-body text-left">
                                        <p>Are you sure you want to delete this product?
                                        </p>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
                                         <form
                                    action="{{ route('product.destroy', $product->id) }}"
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

                                <!-- Add version -->
                                <button type="button" class="btn btn-primary btn-sm"  data-toggle="modal"  data-target="{{ '#addVersionModal' . $product->id }}"><i class="fa fa-plus"></i></button>
                                <div class="modal fade" id="{{ 'addVersionModal' . $product->id }}" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title text-dark">Add New Version</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="{{ route('product.store') }}" method='post' enctype='multipart/form-data'>
                                        @csrf
                                        <div class="form-group">
                                          <p style='text-align:left;' for="photo"> Photo</p>
                                          
                                          <input type="file" class="form-control mb-2" id="photo" name="file">
                                          <div class='output'>
                                              <img src="{{ url('uploads/products') }}/{{ $product->pic ?? 'clientlogo.jpg' }}" alt="clientlogo" class="img-thumbnail img-fluid" style='max-width:300px'>
                                          </div>
                                          <input type='hidden' name='pic' value='{{$product->pic}}'>
                                        </div>

                                      <div class="form-group" >
                                        <p style='text-align:left;' class='text-dark' for="name">Item Name</p>
                                        <input  type="text"  name='name' class="form-control mb-2" id="name" placeholder="{{$product->name }}" required disabled>
                                        <input type='hidden' name ='name' value={{ $product->name }}>
                                      </div>
                                      <div class="form-group" style='display:none;'>
                                        
                                        <p style='text-align:left;' for="category">Category</p>
                                        <select class="form-control mb-2" id="category" name="category">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                        
  
                                      <div class="form-group row">
                                          <div class="col-md-3 col-6">
                                              <p style='text-align:left;' class='text-dark' for="weight">Weight</p>
                                              <input  type="text"  name='weight' class="form-control mb-2" id="weight" placeholder="Enter Item Weight" required>
                                          </div>
                                          <div class="col-md-3 col-6">
                                              <p style='text-align:left;' class='text-dark' for="price">Price</p>
                                              <input  type="number"  name='price' class="form-control mb-2" id="price" placeholder="Enter Item Price" required>
                                          </div>
                                          <div class="col-md-3 col-6">
                                              <p style='text-align:left;' class='text-dark' for="discount">Discount</p>
                                              <input  type="number"  name='discount' class="form-control mb-2" id="discount" placeholder="Enter Item Discount" required>
                                          </div>
                                          <div class="col-md-3 col-6">
                                                <p style='text-align:left;' for="quantity">Quantity</p>
                                                <input  type="number"  name='quantity' class="form-control mb-2" id="quantity" placeholder="Enter Quantity" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group" style='display:none;'>
                                            <p style='text-align:left;' class='text-dark'>Product Details</p>
                                            <textarea id="productdetails" name="description" class="form-control" style="height: 200px" value='{{$product->description}}' >{{$product->description}}</textarea>
                                        </div>
                                        <div class="form-group" style='display:none;'>
                                            <p style='text-align:left;' class='text-dark'>Product Details 2</p>
                                            <textarea id="productdetails2" name="more_description" class="form-control" style="height: 200px" value='{{$product->more_description}}'>{{$product->more_description}}</textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                          <p style='text-align:left;' class='text-dark' for="status">Status</p>
                                          <select  name='status' class="form-control mb-2" id="status" required>
                                              <option value="1">In-Stock</option>
                                              <option value="0">Out of Stock</option>
                                          </select>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success float-right"><i class="fa fa-plus"></i> Save Item</button>
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

         
<!-- Add New Product Modal -->     
<div class="modal fade" id="modal-default" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title text-dark">Add New Product</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
        
        <form action="{{ route('product.store') }}" method='post' enctype='multipart/form-data'>
          @csrf
          <div class="form-group">
            <p style='text-align:left;' for="photo"> Photo</p>
            <input type="file" class="form-control mb-2" id="photo" name="file" required>
            <div class='output'></div>
           </div>
           
          <div class="form-group">
            <p style='text-align:left;' class='text-dark' for="name">Item Name</p>
            <input  type="text"  name='name' class="form-control mb-2" id="name" placeholder="Enter Item Name" required>
          </div>
          <div class="form-group">
             
            <p style='text-align:left;' for="category">Category</p>
            <select class="form-control mb-2" id="category" name="category">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
             
          </div>
         <div class="form-group row">
            <div class="col-md-3 col-6">
                <p style='text-align:left;' class='text-dark' for="weight">Weight</p>
                <input  type="text"  name='weight' class="form-control mb-2" id="weight" placeholder="Enter Item Weight" required>
            </div>
            <div class="col-md-3 col-6">
                <p style='text-align:left;' class='text-dark' for="price">Price</p>
                <input  type="number"  name='price' class="form-control mb-2" id="price" placeholder="Enter Item Price" required>
            </div>
            <div class="col-md-3 col-6">
                <p style='text-align:left;' class='text-dark' for="discount">Discount</p>
                <input  type="number"  name='discount' class="form-control mb-2" id="discount" placeholder="Enter Item Discount" required>
            </div>
            <div class="col-md-3 col-6">
                  <p style='text-align:left;' for="quantity">Quantity</p>
                  <input  type="number"  name='quantity' class="form-control mb-2" id="quantity" placeholder="Enter Quantity" required>
              </div>
          </div>
          
           <div class="form-group">
               <p style='text-align:left;' class='text-dark'>Product Details</p>
               <textarea id="productdetails" name="description" class="form-control" style="height: 200px"></textarea>
           </div>
           <div class="form-group">
               <p style='text-align:left;' class='text-dark'>Product Details 2</p>
               <textarea id="productdetails2" name="more_description" class="form-control" style="height: 200px"></textarea>
           </div>
           
          <div class="form-group">
            <p style='text-align:left;' class='text-dark' for="status">Status</p>
            <select  name='status' class="form-control mb-2" id="status" required>
                <option value="1">In-Stock</option>
                <option value="0">Out of Stock</option>
            </select>
          </div>
          
          <button type="submit" class="btn btn-success float-right"><i class="fa fa-plus"></i> Save Item</button>
        </form>


      </div>

    </div>
  </div>
</div>





 
          
@endsection