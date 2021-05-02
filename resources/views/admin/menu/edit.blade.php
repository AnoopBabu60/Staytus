@extends('layouts.admin')
@section('title', 'Staytus - Edit Menu')

@section('content')
  <div class="d-flex flex-column-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-custom gutter-b example example-compact">
            
            <div class="card-header">
              <h3 class="card-title">Edit</h3>
              <div class="card-toolbar">
                <div class="example-tools justify-content-center">
                  <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                  <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                </div>
              </div>
            </div>

            <form class="form" enctype="multipart/form-data" action="{{ url('/menu/update/'.$menu->id) }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="card-body">
                
                <div class="form-group row">
                  <div class="col-lg-6">
                    <label>Menu Item Category</label>
                    <select class="custom-select form-control" name="menuitemcategoryname" id="menuitemcategoryname">
                      <option selected="selected">Select</option>
                      @foreach($menuitemcategorys as $data)
                          <option 
                                value="{{ $data->id }}_{{ $data->name }}" 
                                {{ ( $menu->menuitemcategoryid.'_'.$menu->menuitemcategoryname == $data->id.'_'.$data->name ) ? 'selected="selected"' : ''  }}  
                                >{{ $data->name }}
                          </option>
                      @endforeach
                    </select>
                    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                  </div>
                  <div class="col-lg-6">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="Enter price" name="price" value="{{ old('price') ?? $menu->price }}"/>
                    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-lg-6">
                    <label>Menu Item</label>
                    <select class="custom-select form-control" name="menuitemname" id="menuitemname">
                      <option selected="selected">Select</option>
                       @foreach($menuitems as $data)
                        <option 
                            value="{{ $data->id }}_{{ $data->name }}"
                            {{ ( $menu->menuitemid.'_'.$menu->menuitemname == $data->id.'_'.$data->name ) ? 'selected="selected"' : ''  }} 
                          >{{ $data->name }}
                        </option>
                      @endforeach
                    </select>
                    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                  </div>
                            
                  <div class="col-lg-6">
                     <label>Is Popuplar Item ?</label>
                    <div class="radio-inline">
                      <label class="radio radio-solid">
                      <input type="radio" name="ispopular" checked="checked" value="1" {{ $menu->ispopular == '1' ? 'checked' : '' }}/>
                      <span></span>Yes</label>
                      <label class="radio radio-solid">
                      <input type="radio" name="ispopular" value="0" {{ $menu->ispopular == '0' ? 'checked' : '' }}/>
                      <span></span>No</label>
                    </div>     
                            
                  </div>
                          
                </div>

                <div class="form-group row">
                  <div class="col-lg-6">
                    <label>Menu Name</label>
                    <input type="text" class="form-control" placeholder="Enter menu name" name="name" value="{{ old('name') ?? $menu->name }}"/>
                    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                  </div>
                            
                  <div class="col-lg-6">
                     <label>Status</label>
                      <div></div>
                      <select class="custom-select form-control" name="status">
                        <option value="active" {{ ($menu->status == 'active') ? 'selected="selected"' : ''  }}>Active</option>
                        <option value="inactive" {{ ($menu->status == 'inactive') ? 'selected="selected"' : ''  }}>Inactive</option>
                      </select>      
                            
                  </div>
                          
                </div>


                <div class="form-group row">
                  <div class="col-lg-6">
                    <label for="exampleTextarea">Desription
                    <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="desc" rows="3" name="desc">{{ old('desc') ?? $menu->desc }}</textarea>
                  </div>
                  <div class="col-lg-6">
                    

                    <label>Image</label>
                      <div></div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>

                      <div style='padding:4%;'>
                        <img src="{{ asset('uploads/'.$menu->image) }}"  class="" style="max-width: 25% !important;max-height: 25% !important;border-radius: 4%;">
                      </div> 

                  </div>    
                </div>
              </div>

              <div class="card-footer">
                <div class="row">
                  <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
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