{{-- @extends('layouts.app')
@section('title', 'کنترل پنل -   خودمونی پز')
@section('styles')
<link rel="icon" href="{{asset('images/icon/ring2.png')}}" />
@stop --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop