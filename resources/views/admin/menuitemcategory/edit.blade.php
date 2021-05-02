@extends('layouts.admin')
@section('title', 'Staytus - Edit Menu Item Category')

@section('content')
  <div class="d-flex flex-column-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
              <h3 class="card-title">Edit</h3>
              <div class="card-toolbar">
                <div class="example-tools justify-content-center">
                </div>
              </div>
            </div>
            
            <form class="form" method="POST" enctype="multipart/form-data" action="{{ url('/menu-item-category/update/'.$menuitemcategory->id) }}">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
             <div class="card-body">
              <div class="form-group">
                <label>Menu Item Category
                <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Menu Item Category" name="name" value="{{ old('name') ?? $menuitemcategory->name }}">
              </div>

              <div class="form-group">
                <label>Punch Line
                <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Punch Line" name="punchline" value="{{ old('punchline') ?? $menuitemcategory->punchline }}">
              </div>

              <div class="form-group">
                <label for="exampleTextarea">Description
                <span class="text-danger">*</span></label>
                <textarea class="form-control" id="exampleTextarea" rows="3" name="desc" >{{ old('desc') ?? $menuitemcategory->desc }}</textarea>
              </div>

              <div class="form-group">
                <label>Image</label>
                <div></div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="image" name="image">
                  <label class="custom-file-label" for="image">Choose file</label>
                </div>

                <div style='padding:4%;'>
                  <img src="{{ asset('uploads/'.$menuitemcategory->image) }}"  class="" style="max-width: 50% !important;max-height: 50% !important;border-radius: 4%;">
                </div>

              </div>

              <div class="form-group">
                <label>Status</label>
                <div></div>
                <select class="custom-select form-control" name="status">
                  <option value="active" {{ ($menuitemcategory->status == 'active') ? 'selected="selected"' : ''  }}>Active</option>
                  <option value="inactive" {{ ($menuitemcategory->status == 'inactive') ? 'selected="selected"' : ''  }}>Inactive</option>
                          
                </select>
              </div>
       
             </div>
             <div class="card-footer">
              <button  type="submit" class="btn btn-primary mr-2">Update</button>
              <button type="reset" class="btn btn-secondary"><a href="{{ url('/menu-item-category') }}">Cancel</a></button>
             </div>
            </form>
          </div> 
        </div>  
      </div> 
    </div> 
  </div>           
@endsection