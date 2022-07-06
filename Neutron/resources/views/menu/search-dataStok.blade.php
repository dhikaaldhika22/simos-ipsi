<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | Ttile Neutron | Shortcut </title>-->
    <title>SIMOS | Manajemen Sistem Informasi Outlet Shop</title>
    <link rel="stylesheet" href="/css/search-data-style.css">
    <link rel="shortcut icon" href="img/logo-head.png">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-dashboard icon'></i>
        <div class="logo_name">SIMOS</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="{{ 'dashboard' }}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="{{ 'karyawan' }}">
         <i class='bx bx-user' ></i>
         <span class="links_name">Data Karyawan</span>
       </a>
       <span class="tooltip">Data Karyawan</span>
     </li>
     <li>
       <a href="{{ 'transaksi' }}">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Data Transaksi</span>
       </a>
       <span class="tooltip">Data Transaksi</span>
     </li>
     <li>
       <a href="{{ 'outlet' }}">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Data Outlet</span>
       </a>
       <span class="tooltip">Data Outlet</span>
     </li>
     <li>
       <a href="{{ 'stok' }}">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Data Stok</span>
       </a>
       <span class="tooltip">Data Stok</span>
     </li>
     <li>
       <a href="{{ 'tentang' }}">
        <i class='bx bx-info-circle'></i>
         <span class="links_name">Tentang</span>
       </a>
       <span class="tooltip">Tentang</span>
     </li>
     <li>
      <!--   
      <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Pengaturan</span>
       </a>
       <span class="tooltip">Pengaturan</span>
       -->
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="img/User-profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">{{ Auth::user()->name }}</div>
             <div class="job">{{ Auth::user()->employee }}</div>
           </div>
         </div>
         <a href="/logoutprocess" >
          <i class='bx bx-log-out' id="log_out" ></i>
         </a>
         
     </li>
    </ul>
  </div>

  <section class="home-section">
    <!-- Page Header -->
<div class="page-header">
    <div class="col-auto float-right ml-auto">
        <a href="{{ 'tambahStok' }}" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Tambah Data</a>
    </div>
</div>
<!-- End of Page Header -->

<!-- Search Filter -->
<form action="{{ 'searchStok' }}" method="get">
    <input type="search" class="form-control form-control-dark" placeholder="Cari berdasarkan Nama" name="query-stok" aria-label="Search">
</form>
<!-- End of Search Filter -->

<!-- Line -->
<hr style="width:100%">
<!-- End of Line -->


@if (isset($stok))
<div class="container-profile">
    @foreach ($stok as $sk)
    <div class="box">
        <i class="fas fa-ellipsis-v"><div class="dropdown-content-action">
            <a href="{{ 'editOutlet' }}">Edit</a>
            <a href="#">Delete</a>
          </div>
        </i>
        <div class="image">
                <img src="img/stok-image.png">
          </div>
          <div class="name-profile">{{ $sk-> nama_barang }}</div>
                <p class="title">{{$sk -> kondisi  }}</p>
                <p class="data">{{ $sk -> kategori_barang }}</p>
                <p class="data">{{ $sk-> kode_barang }}</p>
      </div>
    @endforeach
    
    @else
    <p class="data">Data tidak ditemukan!</p>
    @endif
  </section>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu"); //replacing the iocns class
   }
  }
  </script>
</body>
</html>