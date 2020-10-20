@extends('admin.layouts.admin')

@section('content')

        <div class="row mx-auto rtl">
    
            <div class="col-md-8">
                 <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">دسته بندی ها </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                  
                    
                    <form method="POST" action="{{ route('categories.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>دسته بندی</label>
                                <input type="text" name="category_name" class="form-control" placeholder="نام دسته بندی">
                            </div>
                        </div>
                    
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary">ذخیره</button>
                        </div>
                        
                    </form>
                </div>
                  <!-- /.card -->
            </div>
        </div>
          
      <!-- /.card -->
@endsection