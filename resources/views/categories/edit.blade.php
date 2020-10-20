@extends('admin.layouts.admin')

@section('content')

        <div class="row mx-auto rtl">
    
            <div class="col-md-8">

                <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">دسته بندی ها </h3>
                    </div>
                    <form method="POST" action="{{ route('categories.update',$category->id) }}">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-body">
                            <div class="form-group">
                                <label>دسته بندی</label>
                                <input type="text" value="{{$category->category_name}}" class="form-control" required>
                            </div>
                        </div>
                    
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-success">به روز رسانی</button>
                        </div>
                        
                    </form>
                </div>
                 
            </div>
        </div>
 
@endsection