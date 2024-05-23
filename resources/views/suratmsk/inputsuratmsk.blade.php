
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

 <title>Input Surat Masuk</title>
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
              <h5 class="card-title">Input Surat Masuk</h5>
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('suratmasuk')}}">Kembali</a></li>
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
      <form class="row g-3" action="{{'inputsuratmsk'}}" method="post" enctype="multipart/form-data" > 
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
              <h5 class="card-title">Input Surat Masuk</h5>
                <div class="col-md-12">
                  <label for="" class="form-label">Nama Surat</label>
                  <input type="text" class="form-control" id="namasrtmsk" name="namasrtmsk">
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

                 {{-- <table class="table table-bordered" id="dynamicAddRemove">
                <tr>
                    <th>Nama Penerima</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                   <td><input type="text" name="addMoreInputFields[0][subject]" placeholder="Enter subject" class="form-control" />
      
                      
                    </td>
                    <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Tambah penerima</button></td>
                </tr>
            </table> --}}
        


                  <label for="" class="form-label">Tertuju</label>
                    
               <select name="tertuju" id="tertuju" class="form-control"> @foreach ($tertuju as $item) 
               <option value="{{$item->username}}"><b>{{$item->username}}</b> ({{$item->role}}) ({{$item->komisi}})</option>    
               @endforeach
                              </select>

                </div>


             
                <div class="col-12">
                  <label for="" class="form-label">Tanggal Masuk</label>
                  <input type="date" class="form-control" id="tanggalmsk" name="tanggalmsk">
                </div>
                <div class="text-center">
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


  <!-- Template Main JS File -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

  <script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
            '][subject]" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>

</body>

</html>