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
      <p>Bulan November</p>
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
   <div class="accordion">
    <div>
      <input type="radio" name="example_accordion" id="section1" class="accordion__input">
      <label for="section1" class="accordion__label">Data Transaksi Ibu Nur</label>
      <div class="accordion__content">
        <p>Data Transaksi Ibu Nur</p>
        <table class="styled-table">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Keterangan</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  <th>Total</th>
              </tr>
          </thead>
          @foreach ($dataTransaksi as $dt)
          <p class="kodeTransaksi" style="float: right">{{ $dt->kode }}</p>
          <tbody>
              <tr>
                  <td>{{ $dt->id }}</td>
                  <td>{{ $dt->keterangan }}</td>
                  <td>{{ $dt->jumlah }}</td>
                  <td>{{ $dt->harga }}</td>
                  <td>{{ $dt->total }}</td>
              </tr>
              
              <!-- and so on... -->
          </tbody>
          @endforeach 
      </table>
      <br>
      <a href="{{ 'tambahNur' }}" style="background-color: #3BBA9C; text-decoration: none; border-radius: 7px; color: #fff; padding: 10px;"><i class="fa fa-plus"></i> Tambah Data</a>
      <a href="/editNur/{{ $dt->id }}" style="border: 1px solid; border-color: #3BBA9C; background-color: none; text-decoration: none; border-radius: 7px; color: #3BBA9C; padding: 10px;">Edit Data</a>
      
  
      </div>
    </div>
    <div>
      <input type="radio" name="example_accordion" id="section2" class="accordion__input">
      <label for="section2" class="accordion__label">Data Transaksi Ibu Siti</label>
      <div class="accordion__content">
        <p>Data Transaksi Ibu Siti</p>
        <table class="styled-table">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Keterangan</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  <th>Total</th>
              </tr>
          </thead>
          @foreach ($dataSiti as $ds)
          <p class="kodeTransaksi" style="float: right">{{ $ds->kode }}</p>
          <tbody>
              <tr>
                  <td>{{ $ds->id }}</td>
                  <td>{{ $ds->keterangan }}</td>
                  <td>{{ $ds->jumlah }}</td>
                  <td>{{ $ds->harga }}</td>
                  <td>{{ $ds->total }}</td>
              </tr>
              
              <!-- and so on... -->
          </tbody>
          @endforeach 
      </table>
      <br>
      <a href="{{ 'tambahSiti' }}" style="background-color: #3BBA9C; text-decoration: none; border-radius: 7px; color: #fff; padding: 10px;"><i class="fa fa-plus"></i> Tambah Data</a>
      <a href="/editSiti/{{ $ds->id }}" style="border: 1px solid; border-color: #3BBA9C; background-color: none; text-decoration: none; border-radius: 7px; color: #3BBA9C; padding: 10px;">Edit Data</a>
      </div>
    </div>
    <div>
      <input type="radio" name="example_accordion" id="section3" class="accordion__input">
      <label for="section3" class="accordion__label">Data Transaksi Pak Jamal</label>
      <div class="accordion__content">
        <p>Data Transaksi Pak Jamal</p>
        <table class="styled-table">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Keterangan</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  <th>Total</th>
              </tr>
          </thead>
          @foreach ($dataJamal as $dj)
          <p class="kodeTransaksi" style="float: right">{{ $dj->kode }}</p>
          <tbody>
              <tr>
                  <td>{{ $dj->id }}</td>
                  <td>{{ $dj->keterangan }}</td>
                  <td>{{ $dj->jumlah }}</td>
                  <td>{{ $dj->harga }}</td>
                  <td>{{ $dj->total }}</td>
              </tr>
              
              <!-- and so on... -->
          </tbody>
          @endforeach 
      </table>
      <br>
      <a href="{{ 'tambahJamal' }}" style="background-color: #3BBA9C; text-decoration: none; border-radius: 7px; color: #fff; padding: 10px;"><i class="fa fa-plus"></i> Tambah Data</a>
      <a href="/editJamal/{{ $dj->id }}" style="border: 1px solid; border-color: #3BBA9C; background-color: none; text-decoration: none; border-radius: 7px; color: #3BBA9C; padding: 10px;">Edit Data</a>
      </div>
    </div>
  </div>
@endsection