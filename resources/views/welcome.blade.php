@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Dairy Farm Management
System')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
    <div class="col-lg-7 col-md-8">
      <img
        src="https://babysuperstorebd.com/envato/dairy-farm-management-system/storage/app/public/uploads/751280420015239.png"
        height="100px" width="100px" alt="Icon" style="margin-left:250px">
      <h1 class="text-white text-center">{{ __('Welcome to Dairy Farm Management System.') }}</h1>
    </div>
  </div>
</div>
@endsection