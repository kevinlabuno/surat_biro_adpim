
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Validasi </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
   <link rel="icon" href="{{ asset('assets/img/logopb.png') }}">
   <link rel="apple-touch-icon" href="{{ asset('assets/img/logopb.png') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">

   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  
  <link rel="stylesheet" type="text/css" 
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter- 
       bootstrap/4.3.1/css/bootstrap.css"> 

     <script type="text/javascript" 
       src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" 
    href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south- 
     street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" 
       src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> 
    </script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"> 
    </script> 

  <link rel="stylesheet" type="text/css" href="http://keith- 
     wood.name/css/jquery.signature.css">

    <style>
        .kbw-signature { width: 60%; height: 400px;}
        #sig canvas{
            width: 100% !important;
            height: auto;
        }
    </style>


  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
     <a class="btn btn-primary bi bi" href="{{url ('suratkeluar')}}"> Kembali</a>
  </header><!-- End Header -->
   
  <!-- ======= Sidebar ======= -->


  <main id="main" class="main">
          <section class="section">
      <div class="row">
      <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tanda Tangan Digital</h5>
                <form  action="{{url('validasi/'. $post->id)}}" method="post" enctype="multipart/form-data">
                    @method('patch')
                  @csrf
                   
                <div class="row mb-3">
           
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Upload Surat Yang Telah DiTanda Tangan</label>
                      <div class="col-md-8 col-lg-9">
                      {{-- <img class="image rounded-circle" src=" {{asset('/image/ttd/'.Auth::user()->ttd)}}" alt="profile_image" > --}}
                       <input class="form-control" name="file" type="file" id="file">
                      </div>

                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Nomor Surat</label>
                      <div class="col-md-8 col-lg-9">
                       <input class="form-control" type="text" name="nomor" id="formFile">
                      </div>

                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Status</label>
                      <div class="col-md-8 col-lg-9">
                      <select class="form-select" aria-label="Default select example" name="status">
                  <option value="0" @if($post->status==0)selected @endif>Menunggu</option>
                  <option value="1" @if($post->status==1)selected @endif>Terima</option>
                  <option value="2" @if($post->status==2)selected @endif>Tolak</option>
                  <option value="3" @if($post->status==3)selected @endif>Perbaiki Kembali</option> 
                      </select>
                      </div>

                       <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Komen</label>
                      <div class="col-md-8 col-lg-9">
                      <textarea class="form-control" name="komen" placeholder="Tinggalkan komentar disini" id="floatingTextarea" style="height: 100px;"></textarea>
                      </div>
                       <div class="text-right">
                     
                        <button class="btn btn-primary">Simpan</button>
                        </div> 
                </div> 

                   
</form>
                </div> 
                          
              
                    </form>
                  
            </div>
          </div>

        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  {{-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="assets/js/main.js"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
   
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>


<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script>
</body>

</html>