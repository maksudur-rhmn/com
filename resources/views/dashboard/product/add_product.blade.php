@extends ('dashboard.dashboard_layouts.app')

@section('content')
  <div class="body_scroll">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>CRM Dashboard</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                    <li class="breadcrumb-item">Add Prduct</li>

                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-8 col-md-6 col-sm-12 m-auto">

                 {{-- Add Category --}}
                 <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                        Add Category
                      </button>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop1">
                        Add Subcategory
                      </button>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop2">
                        Add Brands
                      </button>
                      @if($errors->all())
                        <div class="alert alert-danger">
                          @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </div>
                      @endif
                      @if(session('success'))
                        <div class="alert alert-success">
                          {{ session('success') }}
                        </div>
                      @endif
                      @if(session('sub'))
                        <div class="alert alert-success">
                          {{ session('sub') }}
                        </div>
                      @endif
                      @if(session('brand'))
                        <div class="alert alert-success">
                          {{ session('brand') }}
                        </div>
                      @endif
                      <!-- Modal -->
                      <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">Add Category</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form id="category_form" method="POST" action="{{ route('product_create') }}">
                                @csrf
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Category Name" name="category_name" required>
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" id="btn-submit" class="btn btn-primary">Submit</button>
                            </div>
                          </div>
                        </div>
                      </div>
                 {{-- Add Category --}}

                 {{-- Sub Category --}}
                 <div class="modal fade" id="staticBackdrop1" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="staticBackdropLabel">Add Subcategory</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                       <div class="modal-body">
                         <form id="category_form1" method="POST" action="{{ route('subcat_create') }}">
                           @csrf
                           <div class="form-group form-float">
                               <input type="text" class="form-control" placeholder="Subcategory Name" name="subcategory_name" required>
                           </div>
                         </form>
                       </div>
                       <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" id="btn-submit1" class="btn btn-primary">Submit</button>
                       </div>
                     </div>
                   </div>
                 </div>
                 {{-- Sub Category --}}

                 {{-- Brands --}}
                 <div class="modal fade" id="staticBackdrop2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="staticBackdropLabel">Add Brands</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                       <div class="modal-body">
                         <form id="category_form2" method="POST" action="{{ route('brand_create') }}">
                           @csrf
                           <div class="form-group form-float">
                               <input type="text" class="form-control" placeholder="Brand Name" name="brand_name" required>
                           </div>
                         </form>
                       </div>
                       <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" id="btn-submit2" class="btn btn-primary">Submit</button>
                       </div>
                     </div>
                   </div>
                 </div>
                 {{-- Brands --}}

                <div class="card">
                    <div class="header">
                        <h2><strong>Add</strong>Product</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form id="form_validation" method="POST" action="{{ route('product_insert') }}" enctype="multipart/form-data">
                          @csrf
                            <div class="form-group form-float">
                                <input type="text" class="form-control" placeholder="Product Name" name="product_name" value="{{ old('product_name') }}">
                                @error ('product_name')
                                  <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group form-float">
                                <input type="text" class="form-control" placeholder="Product Price" name="product_price" value="{{ old('product_price') }}">
                                @error('product_price')
                                  <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group form-float">
                                <input type="text" class="form-control" placeholder="Product Quantity" name="product_quantity"  value="{{ old('product_quantity') }}">
                                @error('product_quantity')
                                  <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group form-float">


                                <select class="form-control show-tick ms select2" data-placeholder="Product Category" name="product_category">
                                    <option></option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                  @endforeach
                                </select>
                                @error('product_category')
                                  <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                            <div class="form-group form-float">


                                <select class="form-control show-tick ms select2" data-placeholder="Product Subcategory" name="product_subcategory">
                                    <option></option>
                                    @foreach($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
                                  @endforeach

                                </select>
                                @error('product_subcategory')
                                  <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>

                            <div class="form-group form-float">
                                <textarea cols="30" rows="5" placeholder="Product Description" class="form-control no-resize" name="product_description">{{ old('product_description') }}</textarea>
                                @error('product_description')
                                  <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                               <div class="form-group form-float">


                                <select class="form-control show-tick ms select2" data-placeholder="Brand" name="product_brand">
                                    <option></option>
                                    @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                  @endforeach
                                </select>
                                @error('product_brand')
                                  <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>


                            <div class="form-group form-float">


                                <select class="form-control show-tick ms select2" data-placeholder="Product Activation" name="product_activation">
                                    <option></option>
                                    <option value="Active">Active</option>
                                    <option value="Deactive">Deactive</option>
                                </select>
                                @error('product_activation')
                                  <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>

                            <div class="form-group form-float">

                                <div class="card">
                                    <div class="header">
                                        <h2>Feature Photo</h2>
                                    </div>
                                    <div class="body">
                                        <input type="file" class="dropify" name="featured_photo">
                                        @error('featured_photo')
                                          <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>Child Photo</h2>
                                            </div>
                                            <div class="body">
                                                <input type="file" class="dropify" name="child_photo1">
                                                @error('child_photo1')
                                                  <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>Child Photo</h2>
                                            </div>
                                            <div class="body">
                                                <input type="file" class="dropify" name="child_photo2">
                                                @error('child_photo2')
                                                  <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>Child Photo</h2>
                                            </div>
                                            <div class="body">
                                                <input type="file" class="dropify" name="child_photo3">
                                                @error('child_photo3')
                                                  <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="checkbox">
                                    <input id="checkbox" type="checkbox" name="form_checked">
                                    <label for="checkbox">I have read and accept the terms</label>
                                    @error('form_checked')
                                      <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                            @if(session('product'))
                              <div class="alert alert-success">
                                {{ session('product') }}
                              </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection

@section('custom_js')
  <script>
    $(document).ready(function(){
     $('#btn-submit').on('click',function(){
        $('#category_form').submit();
     });
    });
  </script>
  <script>
    $(document).ready(function(){
     $('#btn-submit1').on('click',function(){
        $('#category_form1').submit();
     });
    });
  </script>
  <script>
    $(document).ready(function(){
     $('#btn-submit2').on('click',function(){
        $('#category_form2').submit();
     });
    });
  </script>
@endsection
