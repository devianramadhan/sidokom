@extends('layout.navbar')
@section('sidebar')
    @include('layout.sidebarUser')
@endsection

@section('content')
<section class="content">
    <div class="box">
        <div class="box-header">

        <h2>Ubah Password</h2>

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                  <div class="box-body">
                    <div class="form-group">

                <label>Password Lama:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-font"></i>
                  </div>
                  <input type="text" class="form-control pull-right">
                </div>

                <label>Password Baru:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-edit"></i>
                  </div>
                  <input type="text" class="form-control pull-right">
                </div>

                <label>Ulangi Password:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-edit"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left custom" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary logon custom">Save</button>
                </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

@endsection

@section('footer')
    @include('layout.footer')
@endsection
