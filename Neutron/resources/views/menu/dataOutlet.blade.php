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
<div class="text">Data Outlet</div>

<!-- Page Header -->
    <div class="page-header">
        <div class="col-auto float-right ml-auto">
            <a href="{{ 'tambahOutlet' }}" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
    </div>
<!-- End of Page Header -->

<!-- Search Filter -->
    <form action="{{ 'searchOutlet' }}" method="get">
        <input type="search" class="form-control" placeholder="Cari berdasarkan Nama" name="query-outlet" aria-label="Search" required>
        @error('query-outlet')
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
<div class="container-profile">
    @foreach ($dataOutlet as $do)
    <div class="box">
      <i class="fas fa-ellipsis-v"><div class="dropdown-content-action">
          <a href="/editOutlet/{{ $do->id }}">Edit</a>
          <a href="/hapusOutlet/{{ $do->id }}">Delete</a>
        </div>
      </i>
      <div class="image">
              <img src="img/outlet-profile.png">
        </div>
        <div class="name-profile">{{ $do-> outlet_name }}</div>
              <p class="title">{{$do -> kota  }}</p>
              <p class="data">{{ $do -> alamat }}</p>
              <p class="data">{{ $do-> outlet_email }}</p>
    </div>
    @endforeach
@endsection