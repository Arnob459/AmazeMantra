@extends('admin.layouts.template')

@section('content')

<div> {{auth()->guard('admin')->user()->name}}</div>

@endsection
