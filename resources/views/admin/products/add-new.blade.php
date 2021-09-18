@extends('layouts.masterAdmin')
@section('content')
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
                    <h3 class="card-title">Add New Product</h3>
                    <a href="{{ url('admin/products')}}" class="btn btn-primary btn-sm float-right">View All</a>
                </div>
                <div class="card-body">
                     @if (Session::has('success'))
                      <div class="alert alert-success">
                        {{ Session::get('success') }}
                      </div>
                    @endif
                    @if (Session::has('error'))
                      <div class="alert alert-danger">
                        {{ Session::get('error') }}
                      </div>
                    @endif
                    
                    <form action="{{ url('admin/products') }}" method='post' enctype='multipart/form-data'>
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
                           <p style='text-align:left;' class='text-dark'>Product Details 1</p>
                           <textarea id="productdetails" name="description" class="form-control" style="height: 200px"></textarea>
                       </div>
                      <div class="form-group">
                           <p style='text-align:left;' class='text-dark'>Product Details 2</p>
                           <textarea id="productdetails2" name="description2" class="form-control" style="height: 200px"></textarea>
                       </div>
                       
                      <div class="form-group">
                        <p style='text-align:left;' class='text-dark' for="status">Status</p>
                        <select  name='status' class="form-control mb-2" id="status" required>
                            <option value="1">In-Stock</option>
                            <option value="0">Out of Stock</option>
                        </select>
                      </div>
                      
                      <button type="submit" class="btn btn-success float-right"><i class="fa fa-plus"></i> Save an Item</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </section>
    
</div>
@endsection