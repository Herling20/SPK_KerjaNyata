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
                        <a class="nav-link" href="/kriteria">Restart
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
<h3 class="card-title">Hasil Rekomendasi Kendaraan</h3>
</div>


<form>

<section class="content">

<div class="card card-solid">
<div class="card-body pb-0">
<div class="row">
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
MPV
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Toyota Avanza</b></h2>
<p class="text-muted text-sm"><b>About: </b> 1496 cc / 97 hp / Manual, Otomatis / Bensin </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-duotone fa-money-bills"></i></span> Harga : Rp 233.100.000 </li>
<li class="small"><span class="fa-li"><i></i></span></li>
</ul>
</div>
<div class="col-5 text-center">
<img src="style/dist/img/toyota avanza.jpg" alt="user-avatar" class="img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-solid fa-circle-info"></i>
</a>
</div>
</div>
</div>
</div>


<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
MPV
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Daihatsu Xenia</b></h2>
<p class="text-muted text-sm"><b>About: </b> 1300 cc / 98 hp / Manual, Otomatis / Bensin </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-duotone fa-money-bills"></i></span> Harga : Rp 190.900.000 </li>
<li class="small"><span class="fa-li"><i></i></span></li>
</ul>
</div>
<div class="col-5 text-center">
<img src="style/dist/img/daihatsu xenia.jpg" alt="user-avatar" class=" img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-solid fa-circle-info"></i>
</a>
</div>
</div>
</div>
</div>


<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
MPV
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Honda Mobilio</b></h2>
<p class="text-muted text-sm"><b>About: </b> 1500 cc / 116.5 hp / Manual, Otomatis / Bensin </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-duotone fa-money-bills"></i></span> Harga : Rp 196.100.000 </li>
<li class="small"><span class="fa-li"><i></i></span></li>
</ul>
</div>
<div class="col-5 text-center">
<img src="style/dist/img/honda mobilio.jpg" alt="user-avatar" class=" img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-solid fa-circle-info"></i>
</a>
</div>
</div>
</div>
</div>


<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
MPV
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Suzuki Ertiga</b></h2>
<p class="text-muted text-sm"><b>About: </b> 1462 cc / 103 hp / Manual, Otomatis / Bensin </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-duotone fa-money-bills"></i></span> Harga : Rp 225.100.000 </li>
<li class="small"><span class="fa-li"><i></i></span></li>
</ul>
</div>
<div class="col-5 text-center">
<img src="style/dist/img/suzuki ertiga.jpg" alt="user-avatar" class=" img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-solid fa-circle-info"></i>
</a>
</div>
</div>
</div>
</div>


<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
MPV
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Mitsubishi Xpander</b></h2>
<p class="text-muted text-sm"><b>About: </b> 1499 cc / 104 hp / Manual, CVT / Bensin </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-duotone fa-money-bills"></i></span> Harga : Rp 225.100.000 </li>
<li class="small"><span class="fa-li"><i></i></span></li>
</ul>
</div>
<div class="col-5 text-center">
<img src="style/dist/img/mitsubishi xpander.webp" alt="user-avatar" class=" img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-solid fa-circle-info"></i>
</a>
</div>
</div>
</div>
</div>


<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
MPV
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nissan Livina</b></h2>
<p class="text-muted text-sm"><b>About: </b> 1499 cc / 103 hp / Manual, Otomatis / Bensin </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-duotone fa-money-bills"></i></span> Harga : Rp 253.900.000 </li>
<li class="small"><span class="fa-li"><i></i></span></li>
</ul>
</div>
<div class="col-5 text-center">
<img src="style/dist/img/nissan livina.jpg" alt="user-avatar" class=" img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-solid fa-circle-info"></i>
</a>
</div>
</div>
</div>
</div>


</div>
</div>

<div class="card-footer">
<nav aria-label="Contacts Page Navigation">
<ul class="pagination justify-content-center m-0">
<li class="page-item active"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
</ul>
</nav>
</div>

</div>

</section>


</form>
</div>
</div>
</section>
</div>

@endsection





