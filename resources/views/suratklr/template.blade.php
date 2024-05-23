
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

 <title>Template Surat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logopb.png" rel="icon">
  <link href="assets/img/logopb.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

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

  <main>
    <div class="container">

      <section class="section">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Input Surat Keluar</h5>
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('suratkeluar')}}">Kembali</a></li>
                </ol>
              </nav>
       @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

     <div class="row ">
    
 <div class="col-lg-4  ">   
           <div class="card">
                  <form class="row g-3" action="{{'template'}}" method="post" enctype="multipart/form-data" > 
                        @csrf
            <div class="card-body">
            <h5 class="card-title">Tambah Template Surat Keluar</h5>
              <!-- Multi Columns Form -->
            <div class="col-md-12">
            <label for="" class="form-label">Upload File surat disini</label>
            <input type="file" class="form-control" id="file" name="file">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
              </div>
          </div>

           <div class="col-lg-8  ">
            <div class="card " >
            <div class="card-body">
            <h5 class="card-title">Keterangan Surat Keluar</h5>
            <div class="col-md-12">
          <table class="table table-hover" >
                <thead>
                  <tr>
                    <th scope="col">Nama Surat</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>@foreach ($data as $item)
                     <tr>
                    <td scope="row">{{$item->namasurat}}</td>
                    <td><a href="{{url('templates/'.$item->file)}}" target="_blank" download>Download</a> </td>
                  </tr>       @endforeach
             
                </tbody>
              </table>
           </div>
          </div>
          </div> 

          </div>
       
            </div>
</div>

   
          </div> 

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>