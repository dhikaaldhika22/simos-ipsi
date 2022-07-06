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
<div class="text">Data Stok</div>

<!-- Page Header -->
    <div class="page-header">
        <div class="col-auto float-right ml-auto">
            <a href="{{ 'tambahStok' }}" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
    </div>
<!-- End of Page Header -->

<!-- Search Filter -->
    <form action="{{ 'searchStok' }}" method="get">
        <input type="search" class="form-control form-control-dark" placeholder="Cari berdasarkan Nama" name="query-stok" aria-label="Search" required>
        @error('query-stok')
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
    @foreach ($dataStok as $ds)
    <div class="box">
      <i class="fas fa-ellipsis-v"><div class="dropdown-content-action">
          <a href="/editStok/{{ $ds->id }}">Edit</a>
          <a href="/hapusStok/{{ $ds->id }}">Delete</a>
        </div>
      </i>
      <div class="image">
              <img src="img/stok-image.png">
        </div>
        <div class="name-profile">{{ $ds -> nama_barang }}</div>
              <p class="title">{{$ds -> kondisi  }}</p>
              <p class="data">{{ $ds -> kategori_barang }}</p>
              <p class="data">{{ $ds -> kode_barang }}</p>
    </div>
    @endforeach
@endsection