@extends('layouts.main')

@section('navbar')
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!--logo-->
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">About</a>
                    </li>
                </ul>
            </nav>
@endsection


<!--
@section('header-main')
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3>Home</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            </ol>
                        </div>
                        </div>
                    </div>
@endsection-->

<!--@section('main-content')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-info">
                            <div class="inner">
                                <h3>Poeople</h3>

                                <p>Jumlah User</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-people"></i>
                            </div>
                            <a href="/tambahUser" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-purple">
                            <div class="inner">
                                <h3>Buyer</h3>

                                <p>Unit</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-briefcase"></i>
                            </div>
                            <a href="#" class="small-box-footer">Jumlah Unit</i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>Showroom</h3>

                                <p>Ruangan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-home"></i>
                            </div>
                            <a href="/tambahRuang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">Semua User</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap"s>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nomor Induk</th>
                                    <th>Nama User</th>
                                    <th>Nama Unit</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">xok</td>
                                    <td>pembeli</td>
                                    <td>prototype</td>
                                    <td>Showroom</td>
                                    <td>buyer</td>
                                </tr>
                            </tbody>

                            </table>
                        </div>

                        <div class="card-footer">
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">Semua Ruang</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap"s>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nomor Ruang</th>
                                    <th>Nama Ruang</th>
                                    <th>Kapasitas</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td scope="row">bingung</td>
                                    <td>cok</td>
                                    <td>jingan</td>
                                    <td>aloy</td>
                                </tr>
                            </tbody>

                            </table>
                        </div>

                        <div class="card-footer">
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">Semua Unit</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap"s>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nomor Unit</th>
                                    <th>Nama Unit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">aloy</td>
                                    <td>asu</td>
                                    <td>tenan</td>
                                </tr>
                            </tbody>

                            </table>
                        </div>

                        <div class="card-footer">
                        </div>

                    </div>

@endsection-->

@section('alert-logout')
                <div class="modal fade" id="logout">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title">Logout User</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body justify-content-wrap">
                                <p align="center">Apakah anda yakin untuk logout ?</p>
                            </div>
                            <div class="modal-footer justify-content-around">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a class="btn btn-danger" value="simpan" href="#">Log out</a>
                            </div>
                        </div>
                        </form>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
@endsection
