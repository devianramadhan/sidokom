@extends('layout.navbar')
@section('sidebar')
    @include('layout.sidebarUser')
@endsection

@section('content')
<section class="content">
    <div class="box">
        <div class="box-header">
        <div class="box-body">
            <div class="input-group margin pull-left col-md-2">
                <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw fa-plus-circle"></i>Tambah</button>
            </div>
            <div class="input-group margin pull-right col-md-3">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default search " data-toggle="dropdown"><i class="fa fa-search"></i>
                </div>
                <input type="text" name="q" class="form-control search" placeholder="Search...">
            </div>
        </div>

        <h2>Kegiatan</h2>

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body pad table-responsive">
                        <table class="table table-bordered text-center">
                            <td>
                                <button type="button" class="btn btn-block btn-default btn-lg folder"><i class="fa fa-fw fa-folder"></i> Kegiatan 1</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-default btn-lg"><i class="fa fa-fw fa-folder"></i> Kegiatan 2</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-default btn-lg"><i class="fa fa-fw fa-folder"></i> Kegiatan 3</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-default btn-lg"><i class="fa fa-fw fa-folder"></i> Kegiatan 4</button>
                            </td>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>


        <!-- Modal buat nambah kegiatan -->
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Kegiatan</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">

                <label>Judul:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-font"></i>
                  </div>
                  <input type="text" class="form-control pull-right">
                </div>

                <label>Time:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <input type="text" class="form-control pull-right">
                </div>

                <label>Date:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>

                <label>Deskripsi</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>

                <div class="box-header with-border">
                    <h3 class="box-title">Create Tag</h3>
                </div>
                <div class="box-body">
                    <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                        <ul class="fc-color-picker" id="color-chooser">
                    <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a>  </li>
                    <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                </ul>
              </div>
              <!-- /btn-group -->
              <div class="input-group">
                <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                <div class="input-group-btn">
                  <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
                </div>
                <!-- /btn-group -->
              </div>
              <!-- /input-group -->
            </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('footer')
    @include('layout.footer')
@endsection
