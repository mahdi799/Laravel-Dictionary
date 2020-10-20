@extends('admin.layouts.admin')

@section('content')

        <div class="row mx-auto rtl">
    
            <div class="col-md-8">
                 <!-- general form elements -->
                <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">ویرایش لغت</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                  
                    
                    <form method="POST" action="{{ route('words.update',$word->id) }}">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-body">
                            <div class="form-group">
                                <label>فارسی</label>
                            <input type="text" name="persian" class="form-control" value="{{$word->persian}}">
                            </div>
                            <div class="form-group">
                                <label>عربی</label>
                                <input type="text" name="arabic" class="form-control" value="{{$word->arabic}}">
                            </div>
                            <div class="form-group">
                                <label>دسته بندی</label>
                                    <select class="form-control" name="cat_name">
                                        <option> -- </option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>توضیحات</label>
                                <textarea class="form-control" name="description" rows="3" >{{$word->description}}</textarea>
                            </div>
                        </div>
                    
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-success">به روز رسانی</button>
                        </div>
                        
                    </form>
                </div>
                  <!-- /.card -->
            </div>
        </div>
          
      <!-- /.card -->
@endsection