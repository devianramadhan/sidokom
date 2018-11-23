@extends('layout.navbar')
@section('sidebar')
    @include('layout.sidebarAdmin')
@endsection

@section('content')
<section class="content">
    <div class="box">
        <div class="box-header">
        </div>
        <div class="box-body">
            <div class="input-group margin pull-right col-md-3">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default search " data-toggle="dropdown"><i class="fa fa-search"></i>
                </div>
                <input type="text" name="q" class="form-control search" placeholder="Search...">
            </div>
        </div>
</section>
@endsection

@section('footer')
    @include('layout.footer')
@endsection
