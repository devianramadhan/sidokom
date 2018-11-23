@extends('layout.navbar')
@section('sidebar')
    @include('layout.sidebarUser')
@endsection

@section('content')
<section class="content">
    <div class="box">
        <div class="box-header">
        <div class="box-body">
            <div class="input-group margin pull-right col-md-3">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default search " data-toggle="dropdown"><i class="fa fa-search"></i>
                </div>
                <input type="text" name="q" class="form-control search" placeholder="Search...">
            </div>
        </div>

        <h2>Log Activitas</h2>

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Nama User</th>
                        <th>Action</th>
                        <th>Hasil Perubahan</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>22 Nov 2018</td>
                        <td>16.00 AM</td>
                        <td>Devian</td>
                        <td>Edit</td>
                        <td>Folder</td>
                      </tr>
                      </tbody>
                    </table>
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
