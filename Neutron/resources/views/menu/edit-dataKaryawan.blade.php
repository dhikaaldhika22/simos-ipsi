<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | Ttile Neutron | Shortcut </title>-->
    <title>SIMOS | Manajemen Sistem Informasi Outlet Shop</title>
    <link rel="stylesheet" href="/css/menu/main-style.css">
    <link rel="shortcut icon" href="img/logo-head.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
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
    <div class="text"><a href="/karyawan"><i class="fas fa-chevron-left"></i></a>Edit Data</div>
    <div class="containerTambah">
      
      <form action="/updateKaryawan/{{ $dataKaryawan->id }}" method="POST">
        @csrf
        <div class="wrapper">
          <div class="title">
            Edit Data Karyawan
          </div>
          <div class="form">
             <div class="inputfield">
                <label>Nama Lengkap</label>
                <input type="text" value="{{ $dataKaryawan->name }}" name="name" class="input">
             </div>  
             <div class="inputfield">
              <label>Jabatan</label>
              <div class="custom_select">
                <select name="employee">
                  <option value="{{ $dataKaryawan->employee }}">Pilih Jabatan</option>
                  <option value="Manajer">Manajer</option>
                  <option value="Owner">Owner</option>
                  <option value="Seller">Seller</option>
                </select>
              </div>
           </div> 
              <div class="inputfield">
                <label>Nomor Handphone</label>
                <input type="text" value="{{ $dataKaryawan->no_hp }}" name="no_hp" class="input">
             </div>  
             <div class="inputfield">
                <label>Alamat Email</label>
                <input type="text" value="{{ $dataKaryawan->email }}" name="email" class="input">
             </div>  
            <div class="inputfield">
              <input type="submit" value="Edit Data" class="btn">
            </div>
          </div>
      </div>	
      </form>
    </div>

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