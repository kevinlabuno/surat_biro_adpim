
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

 <title>Input Surat Keluar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/LogoDPRD.png" rel="icon">
  <link href="assets/img/LogoDPRD.png" rel="apple-touch-icon">

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
      <form class="row g-3" action="{{'inputsuratklr'}}" method="post" enctype="multipart/form-data" > 
                        @csrf
    
 <div class="col-lg-4  ">   
           <div class="card">
            <div class="card-body">
              <h5 class="card-title">File Surat</h5>
              <!-- Multi Columns Form -->
                 <div class="col-md-12">
                  <label for="" class="form-label">Unggah File surat disini</label>
                  <input type="file" class="form-control" id="file" name="file">
                </div>
            </div>
              </div>
          </div>

           <div class="col-lg-8  ">

     <div class="card " >
            <div class="card-body">
              <h5 class="card-title">Keterangan Surat Keluar</h5>
              <div class="col-md-12">
                  <label for="" class="form-label">Jenis Surat</label>
                  <select name="jenis_surat" class="form-label">
                    <option>SPPD (Surat Perintah Perjalanan Dinas)</option>
                    <option>SPT (Surat Perintah Tugas)</option>
                    <option>STL (Surat Perintah Luar)</option>
                    <option>Surat Ijin</option>
                    <option>Surat Pemberitahuan</option>
                    <option>Surat Undangan</option>
                    <option>Surat Cuti</option>
                    <option>Surat Panggilan</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="" class="form-label">Nama Surat</label>
                  <input type="text" class="form-control" id="namasrtklr" name="namasrtklr">
                </div>
                   <div class="col-12">
                  <label for="" class="form-label">Perihal</label>
                  <input type="text" class="form-control" id="perihal" name="perihal">
                </div>
                <div class="col-md-12">
                  <label for="" class="form-label">No Surat</label>
                  <input type="text" class="form-control" id="nosurat" name="nosurat">
                </div>
                <div class="col-md-12">
                  <label for="" class="form-label">Tertuju</label>
                <select name="tertuju" id="tertuju" class="form-control"> @foreach ($tertuju as $item) 
               <option value="{{$item->username}}"><b>{{$item->username}}</b> ({{$item->role}}) ({{$item->komisi}})</option>    
               @endforeach
                              </select>
                              </select>
                </div>
             
                <div class="col-12">
                  <label for="" class="form-label">Tanggal Keluar</label>
                  <input type="date" class="form-control" id="tanggalklr" name="tanggalklr">
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

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