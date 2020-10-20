@extends('admin.layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
        <table class="table table-striped table-hover rtl">
            <thead>
                <tr>
                    <th>فارسی</th>
                    <th>عربی</th>
                    <th>دسته بندی</th>
                    <th>توضیحات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $word->persian }} </td>
                    <td>{{ $word->arabic }}</td>
                    <td>{{ $word->cat_name}}</td>
                    <td>{{ $word->description }}</td>
                </tr>
            </tbody>
        </table>
    </div>
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-12 col-md-offset-3">
                <a class="btn btn-primary" href="{{ route('words')}}"> {{ __('برگشت به لیست') }}</a>
                <a class="btn btn-success" href="{{ route('words.edit', [$word->id]) }}"> {{ __('ویرایش') }}</a>
            </div>
        </div>
    </div>
@endsection
