@extends('menu.main')

@section('container')

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
<!-- Lineawesome CSS -->
<link rel="stylesheet" href="assets/css/line-awesome.min.css">

<!-- Select2 CSS -->
<link rel="stylesheet" href="assets/css/select2.min.css">

<!-- Datetimepicker CSS -->
<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<div class="text">Data Karyawan</div>

<!-- Page Header -->
    <div class="page-header">
        <div class="col-auto float-right ml-auto">
            <a href="{{ 'tambahKaryawan' }}" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
    </div>
<!-- End of Page Header -->

<!-- Search Filter -->
    <form action="{{ 'search' }}" method="get">
        <input type="search" class="form-control" placeholder="Cari berdasarkan Nama" name="query"  aria-label="Search" required>
        @error('query')
        <br>     
        <span style="color: red; margin-left: 22px">Kolom search tidak boleh kosong</span>
        @enderror
    </form>
<!-- End of Search Filter -->

<!-- Line -->
    <hr style="width:100%">
<!-- End of Line -->

    @if ($message = Session::get('success'))
    <div class="alertt">
        <span class="closebtnn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ $message }}
    </div>
    @endif


<!-- Card View
<div class="row">
    <div class="column">
      <div class="card">
        <img src="img/User-profile.jpg" style="width:150px;height:auto;padding-top:10px">
        <h1>M. Aldhika Yandaputra</h1>
        <p class="title">Owner</p>
        <p>(+62) 896 6914 ****</p>
        <p>dhikaaldhika22@gmail.com</p>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="img/User-profile.jpg" style="width:150px;height:auto;padding-top:10px">
        <h1>Gitahayu Pradipta</h1>
        <p class="title">Owner</p>
        <p>(+62) 896 6914 ****</p>
        <p>gitahayu22@gmail.com</p>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="img/User-profile.jpg" style="width:150px;height:auto;padding-top:10px">
        <h1>Rahajeng Mufti</h1>
        <p class="title">Manajer</p>
        <p>(+62) 896 6999 **** </p>
        <p>rahajeng.mufti@gmail.com</p>
      </div>
    </div>

    <div class="column">
        <div class="card">
          <img src="img/User-profile.jpg" style="width:150px;height:auto;padding-top:10px">
          <h1>Arya wira</h1>
          <p class="title">Manajer</p>
          <p>(+62) 896 6999 **** </p>
          <p>arya.wira@gmail.com</p>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img src="img/User-profile.jpg" style="width:150px;height:auto;padding-top:10px">
          <h1>Inneke Yola</h1>
          <p class="title">Manajer</p>
          <p>(+62) 896 6399 **** </p>
          <p>inneke.mufti@gmail.com</p>
        </div>
      </div>
  </div> -->
<div class="container-profile">
  @foreach ($dataKaryawan as $dk)
  <div class="box">
    <i class="fas fa-ellipsis-v"><div class="dropdown-content-action">
        <a href="/editKaryawan/{{ $dk->id }}">Edit</a>
        <a href="/hapusKaryawan/{{ $dk->id }}">Delete</a>
      </div>
    </i>
    <div class="image">
            <img src="img/User-profile.jpg">
      </div>
      <div class="name-profile">{{ $dk-> name }}</div>
            <p class="title">{{$dk -> employee }}</p>
            <p class="data">{{ $dk -> no_hp }}</p>
            <p class="data">{{ $dk-> email }}</p>
  </div>
  @endforeach
    
<!--  
    <div class="box">
      <div class="image">
            <img src="img/User-profile.jpg" alt="">
      </div>
      <div class="name-profile">Gitahayu Pradipta</div>
            <p class="title">Owner</p>
            <p class="data">(+62) 896 6914 ****</p>
            <p class="data">gitahayupr22@gmail.com</p>
    </div>

    <div class="box">
      <div class="image">
            <img src="img/User-profile.jpg" alt="">
      </div>
      <div class="name-profile">Inneke Yola Ferdiana Hadi</div>
            <p class="title">Manajer</p>
            <p class="data">(+62) 896 6999 ****</p>
            <p class="data">inneke.yola@gmail.com</p>
    </div>
</div>
-->
<!-- End of Card View -->
@endsection



