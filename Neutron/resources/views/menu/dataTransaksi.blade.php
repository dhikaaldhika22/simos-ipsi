@extends('menu.main')

@section('container')
<script src="https://kit.fontawesome.com/75dcbcaf97.js" crossorigin="anonymous"></script>
<div class="text">Data Transaksi</div>
   <!--  <button class="bulan">Pilih Bulan <i class="fas fa-caret-down"></i></button> -->
   <div class="contentTransaksi">
    <div class="dropdown">
        <button class="dropbtn">Pilih Bulan <i class="fas fa-caret-down"></i> </button>
        <div class="dropdown-content">
          <a href="/dataSeptember">September 2021</a>
          <a href="/dataOktober">Oktober 2021</a>
          <a href="/dataNovember">November 2021</a>
        </div>
      </div>
   </div>
      <!--  
      <div class="dropdown">
        <button class="dropbtnn" style="width: 100%;">Data Transaksi Ibu Nur<i class="fas fa-caret-down"></i> </button>
        <div class="dropdown-content">
          <a href="#">September 2021</a>
          <a href="#">Oktober 2021</a>
          <a href="#">November 2021</a>
        </div>
      </div>
   </div>
   -->
   
@endsection