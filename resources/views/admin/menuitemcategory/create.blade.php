@extends('layouts.admin')
@section('title', 'Staytus - Create Menu Item Category')

@section('content')
  <div class="d-flex flex-column-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
              <h3 class="card-title">Create</h3>
              <div class="card-toolbar">
                <div class="example-tools justify-content-center">
                </div>
              </div>
            </div>
            
            <form class="form" method="POST" enctype="multipart/form-data" action="{{ url('/menu-item-category/store') }}">
              {{ csrf_field() }}
             <div class="card-body">
              <div class="form-group">
                <label>Menu Item Category
                <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Menu Item Category" name="name">
              </div>

              <div class="form-group">
                <label>Punch Line
                <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Punch Line" name="punchline">
              </div>

              <div class="form-group">
                <label for="exampleTextarea">Description
                <span class="text-danger">*</span></label>
                <textarea class="form-control" id="exampleTextarea" rows="3" name="desc"></textarea>
              </div>

              <div class="form-group">
                <label>Image</label>
                <div></div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="image" name="image">
                  <label class="custom-file-label" for="image">Choose file</label>
                </div>
              </div>

              <div class="form-group">
                <label>Status</label>
                <div></div>
                <select class="custom-select form-control" name="status">
                  <option value="active">Active</option>
                  <option value="inactive">Inactive</option>
                          
                </select>
              </div>
       
             </div>
             <div class="card-footer">
              <button  type="submit" class="btn btn-primary mr-2">Submit</button>
              <button type="reset" class="btn btn-secondary"><a href="{{ url('/menu-item-category') }}">Cancel</a></button>
             </div>
            </form>
          </div> 
        </div>  
      </div> 
    </div> 
  </div>           
@endsection