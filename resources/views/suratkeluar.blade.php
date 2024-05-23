
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Surat Keluar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logopb.png" rel="icon">
  <link href="assets/img/logopb.png" rel="apple-touch-icon">
<link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
<script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">    

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="assets/img/logopb.png" alt="">
        <span class="d-none d-lg-block">BIRO ADPIM PB</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

  <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-success badge-number">{{$jm}}</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              Kamu memiliki {{$jm}} pesan
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
             

            @foreach ($tsrtmsk as $item)
            <li class="message-item">
              <a href="#">
                <div>
                  <h4>{{$item->namasuratmsk}}</h4>
                  <p>{{$item->perihal}}</p>
                  <p>{{$item->namapengirim}}</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
             @endforeach
            @foreach ($tsrtklr as $item)
            <li class="message-item">
              <a href="#">
                <div>
                  <h4>{{$item->namasuratklr}}</h4>
                  <p>{{$item->perihal}}</p>
                     <p>{{$item->namapengirim}}</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
             @endforeach
            <li class="dropdown-footer">
              <a href="#">Lihat Semua Pesan</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav --><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
               {{-- @if(Auth::user()->image)
            <img src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="Profile" class="rounded-circle">
          @endif   --}}
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->username}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{Auth::user()->username}}</h6>
              <span>{{Auth::user()->role}}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{url ('profile/'.Auth::user()->id)}}">
                <i class="bi bi-person"></i>
                <span>Profil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

             @auth
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url('logout')}}">  
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
               </form> </a>
            </li>
@endauth
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

     
      


      <li class="nav-item">
        <a class="nav-link "   href="{{url('dasboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      
      </li><!-- End Forms Nav -->

          <li class="nav-item">
        <a class="nav-link "  href="{{url('suratmasuk')}}">
          <i class="bi bi-envelope"></i>
          <span>Surat Masuk</span>
        </a>
      
      </li><!-- End Forms Nav -->

       <li class="nav-item">
        <a class="nav-link "  href="{{url('suratkeluar')}}">
          <i class="bi bi-envelope-open-fill"></i>
          <span>Surat Keluar</span>
        </a>
      
      </li><!-- End Forms Nav -->

          <li class="nav-item">
        <a class="nav-link "  href="{{url('daftaranggota')}}">
          <i class="bi bi-people"></i>
          <span>Daftar Anggota</span>
        </a>
      
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link "  href="{{url('daftarkaro')}}">
          <i class="bi bi-person-circle"></i>
          <span>Daftar Karo</span>
        </a>
      
      </li><!-- End Forms Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Surat Keluar</h1>
         @if ($message = Session::get('success'))
      <div class="alert alert-primary" role="alert">
{{ $message }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    @endif
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Menu</a></li>
          <li class="breadcrumb-item active">Surat Keluar</li>
        </ol>
        @if(Auth::user()->role=='Staf')
         <a class="btn btn-warning btn-sm " href="{{url('inputsuratklr')}}">+ Surat Keluar</a>
         <a class="btn btn-secondary btn-sm " href="{{url('template')}}">Template Surat Keluar</a>
          @endif
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <div class="card">
     
            <div class="card-body">
              
              <h5 class="card-title">Daftar Surat Keluar</h5>
                  
              

              <!-- Table with hoverable rows -->
              <table class="table table-hover" id="my_table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Surat</th>
                    <th scope="col">Tertuju</th>
                    <th scope="col">Nama Surat</th>
                    <th scope="col">Perihal</th>
                    <th scope="col">No Surat</th>
                     <th scope="col">Status</th>
                        <th scope="col">komen</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                             @php
                      $no = 1;
                  @endphp
                <tbody>
                     @foreach ($data as $item)  <tr>
                      
               
                    <td scope="row">{{$no ++}}</td>
                    <td>{{$item->jenis_surat}}</td>
                    <td scope="row"><b>{{$item->tertuju}}</b></td>
                    <td>{{$item->namasuratklr}}</td>
                    <td>{{$item->perihal}}</td>
                    <td>{{$item->nosurat}}</td>
                     <td>
                       @if($item->status == 0)
        <span class="label label-primary">Menunggu</span>
        @elseif($item->status == 1)
        <span class="label label-success">Diterima</span>
        @elseif($item->status == 2)
        <span class="label label-danger">Ditolak</span>
        @else
        <span class="label label-info">Perbaiki kembali</span>
       @endif
                    
                    </td>
                      <td>{{$item->komen}}</td>
                    <td>
                    <a class="btn btn-primary bi bi-collection" href="{{url('surat/'.$item->id)}}"> Lihat</a>
                      @if(Auth::user()->role=='Karo')
                    <a href="{{url('validasi/'.$item->id)}}" class="btn btn-warning"> Validasi</a>
                     @endif
                    </td>
                  </tr>
                   @endforeach
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>


           

         
             

         
      

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<script type="text/javascript"> 
  $(document).ready( function () {
    $('#my_table').DataTable();
} );</script>
</body>

</html>