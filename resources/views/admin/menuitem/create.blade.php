@extends('layouts.admin')
@section('title', 'Staytus - Create Menu Item ')

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
            
            <form class="form" method="POST" action="{{ url('/menu-item/store') }}">
              {{ csrf_field() }}
             <div class="card-body">
              <div class="form-group">
                <label>Menu Item 
                <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Menu Item " name="name">
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
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button type="reset" class="btn btn-secondary"><a href="{{ url('/menu-item') }}">Cancel</a></button>
             </div>
            </form>
          </div> 
        </div>  
      </div> 
    </div> 
  </div>           
@endsection