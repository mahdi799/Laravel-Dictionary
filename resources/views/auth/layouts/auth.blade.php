@extends('layouts.app')

@section('page')

    {{--Region Content--}}
    @yield('content')

@endsection

{{-- @section('styles')
    {{ Html::style(mix('auth/css/auth.css')) }} 
    <link href="{{ asset('auth/css/auth.css') }}" rel="stylesheet">
@endsection --}}
