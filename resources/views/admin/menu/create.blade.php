@extends('layouts.admin')
@section('title', 'Staytus - Create Menu')

@section('content')
  <div class="d-flex flex-column-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-custom gutter-b example example-compact">
            
            <div class="card-header">
              <h3 class="card-title">Create</h3>
              <div class="card-toolbar">
                <div class="example-tools justify-content-center">
                  <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                  <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                </div>
              </div>
            </div>

            <form class="form" enctype="multipart/form-data" action="{{ url('/menu/store') }}" method="POST">
              {{ csrf_field() }}
              <div class="card-body">
                
                <div class="form-group row">
                  <div class="col-lg-6">
                    <label>Menu Item Category</label>
                    <select class="custom-select form-control" name="menuitemcategoryname" id="menuitemcategoryname">
                      <option selected="selected">Select</option>
                      @foreach($dropdowndata['menuitemcategorys'] as $data)
                        <option value="{{ $data->id }}_{{ $data->name }}">{{ $data->name }}</option>
                      @endforeach
                    </select>
                    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                  </div>
                  <div class="col-lg-6">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="Enter price" name="price"/>
                    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-lg-6">
                    <label>Menu Item</label>
                    <select class="custom-select form-control" name="menuitemname" id="menuitemname">
                      <option selected="selected">Select</option>
                       @foreach($dropdowndata['menuitems'] as $data)
                        <option value="{{ $data->id }}_{{ $data->name }}">{{ $data->name }}</option>
                      @endforeach
                    </select>
                    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                  </div>
                            
                  <div class="col-lg-6">
                     <label>Image</label>
                      <div></div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>      
                            
                  </div>
                          
                </div>

                <div class="form-group row">
                  <div class="col-lg-6">
                    <label>Menu Name</label>
                    <input type="text" class="form-control" placeholder="Enter menu name" name="name" />
                    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                  </div>
                            
                  <div class="col-lg-6">
                     <label>Status</label>
                      <div></div>
                      <select class="custom-select form-control" name="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                      </select>      
                            
                  </div>
                          
                </div>


                <div class="form-group row">
                  <div class="col-lg-6">
                    <label for="exampleTextarea">Desription
                    <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="desc" rows="3" name="desc"></textarea>
                  </div>
                  <div class="col-lg-6">
                    <label>Is Popuplar Item ?</label>
                    <div class="radio-inline">
                      <label class="radio radio-solid">
                      <input type="radio" name="ispopular" checked="checked" value="1" />
                      <span></span>Yes</label>
                      <label class="radio radio-solid">
                      <input type="radio" name="ispopular" value="0" />
                      <span></span>No</label>
                    </div>
                  </div>    
                </div>
              </div>

              <div class="card-footer">
                <div class="row">
                  <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                              <button type="reset" class="btn btn-secondary"><a href="{{ url('/menu') }}">Cancel</a></button>
                  </div>
                        
                </div>
              </div>

            </form>    
          </div> 
        </div>  
      </div> 
    </div> 
  </div>           
@endsection