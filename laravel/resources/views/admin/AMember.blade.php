@extends('layout.navbar')
@section('sidebar')
    @include('layout.sidebarAdmin')
@endsection

@section('content')
<section class="content">
    <div class="box">
        <div class="box-header">
            <h1>Member</h1>
        </div>
        <div class=""></div>
        <button type="button" class="btn btn-lg btn-success">
            Tambah
        </button>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NID</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>390284184</td>
                        <td>Sansa Stark</td>
                        <td>
                            <button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>390284185</td>
                        <td>Jon Snow</td>
                        <td>
                            <button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>390284186</td>
                        <td>Cersei Lannister</td>
                        <td>
                            <button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>390284187</td>
                        <td>Daenerys Targaryen</td>
                        <td>
                            <button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>390284188</td>
                        <td>Tyrion Lannister</td>
                        <td>
                            <button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>390284189</td>
                        <td>Tommen Baratheon</td>
                        <td>
                            <button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>390284190</td>
                        <td>Sandor Clegane</td>
                        <td>
                            <button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    </tfoot>
            </table>
        </div>
</section>
@endsection

@section('footer')
    @include('layout.footer')
@endsection
