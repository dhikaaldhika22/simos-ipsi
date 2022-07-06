@extends('menu.main')

@section('container')
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/75dcbcaf97.js" crossorigin="anonymous"></script>
<div class="text">Dashboard</div>
<div class="content1">
  <p style="width: 45%; float: right; padding-right : 50px; padding-top : 130px">Grafik disamping merupakan persentase dari Data Karyawan, Data Outlet dan Data Stok berdasarkan Database.</p>
  <div id="piechart" style="width: 680px; height: 390px;"></div>

</div>
<div class="content2">
    <h1>Developed by Kelompok 8</h1><br>
    <p>Arya Wira Krisna<br>Inneke Yola Ferdiana Hadi<br>M. Aldhika Yandaputra<br>Muhammad Reyhan</p>
    <br><P style="text-align : center">© SIMOS.2021</P>
</div>

@endsection