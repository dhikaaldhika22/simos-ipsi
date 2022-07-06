<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | Ttile Neutron | Shortcut </title>-->
    <title>SIMOS | Manajemen Sistem Informasi Outlet Shop</title>
    <link rel="stylesheet" href="/css/menu/main-style.css">
    <link rel="shortcut icon" href="img/logo-head.png">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Karyawan',     {{ $user }}],
          ['Outlet',      {{ $outlet }}],
          ['Stok',  {{ $stok }}],
        ]);

        var options = {
          title: 'Presentase Data'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
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
    <div class="container mt-0">
      @yield('container')
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

  var close = document.getElementsByClassName("closebtnn");
var i;

// Loop through all close buttons
for (i = 0; i < close.length; i++) {
  // When someone clicks on a close button
  close[i].onclick = function(){

    // Get the parent of <span class="closebtn"> (<div class="alert">)
    var div = this.parentElement;

    // Set the opacity of div to 0 (transparent)
    div.style.opacity = "0";

    // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
  </script>
</body>
</html>