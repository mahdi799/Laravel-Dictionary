@extends('admin.layouts.admin')

@section('content')
<div class="content rtl">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">لیست همه لغت ها </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>فارسی</th>
                                <th>عربی</th>
                                <th>دسته بندی</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                                @foreach ($words as $word)
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td>{{ $word->persian }} </td>
                                    <td>{{ $word->arabic }}</td>
                                    <td>{{ $word->cat_name }} </td> 
                                    <td>
                                         <a class="btn btn-xs btn-primary" href="{{ route('words.show', [$word->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ _('نمایش جزئیات') }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-xs btn-info" href="{{ route('words.edit', [$word->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ _('ویرایش') }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-xs btn-danger" href="{{ route('words.destroy', [$word->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('حذف') }}">
                                        <i class="fa fa-trash"></i>
                                      </a>
                                    </td>
                                </tr>
                                @endforeach
                            
                        </tbody>
                       
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </div>    
    </div>
</div>

<div class="modal fade" id="deleteInspectionModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="deleteInspectionModalTitle">Delete</h4>
            </div>
            <div class="modal-body">
                <p>
                    Are you sure you want to delete
                    <b><span id="deleteModalTitle"></span></b>
                    inspection?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <span class="pull-right">
                <button type="button" id="okDelete" class="btn btn-primary">Yes</button>
            </span>
            </div>
        </div>
    </div>
</div>
@endsection
