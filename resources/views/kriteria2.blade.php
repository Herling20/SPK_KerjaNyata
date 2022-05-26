@extends('layouts.main')

@section('navbar')
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!--logo-->
                    </li>
                    <img src="style/dist/img/bmo.png" alt="AdminLTE Logo" class="brand-image mt-1" style="opacity: .8">
                    <!-- <div class="preloader flex-column justify-content-center align-items-center">
                        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
                    </div> -->
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/kriteria2">Restart
                            <i class="fa-solid fa-rotate-left"></i>
                        </a>
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

@section('main-content')
<div class=" content-wrapper">
<div class=" container-fluid">
<section class="content-header">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Pertimbangan Kriteria Konsumen (skala 100%)</h3>
</div>


<form>
<div class="card-body">

    <div class="form-group">
    <label>#1 (50%)</label>
    <select class="form-control" >
    <option>...</option>
    <option>Harga</option>
    <option>Penggunaan Bahan Bakar</option>
    <option>Peforma Mesin</option>
    </select>
    </div>

    <div class="form-group">
    <label>#2 (30%)</label>
    <select class="form-control" >
    <option>...</option>
    <option>Harga</option>
    <option>Penggunaan Bahan Bakar</option>
    <option>Peforma Mesin</option>
    </select>
    </div>

    <div class="form-group">
    <label>#3 (20%)</label>
    <select class="form-control" >
    <option>...</option>
    <option>Harga</option>
    <option>Penggunaan Bahan Bakar</option>
    <option>Peforma Mesin</option>
    </select>
    </div>


<center>
    <a href="/hasil">
        <button type="button" class="btn btn-success ">NEXT</button>
    </a>
</center>

</div>
</div>
</section>
</div>

@endsection





