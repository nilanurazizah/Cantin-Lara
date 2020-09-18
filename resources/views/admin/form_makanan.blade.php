<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

  <style>
        h1{
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        a{
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('admin.include.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('admin.include.header')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          {{-- <h1 class="h3 mb-4 text-gray-800 text-center">Table</h1> --}}
          <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tambah Produk</h1>
            {{-- <a href="/form_makanan" class="btn btn-success">Tambah Makanan</a> --}}
          <p></p>

    <div class="container pt-4">
            <div class="row">
                <div class="col-md-8">
                <form action="{{ url('/createmakanan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                    <input class="form-control" @error('nama') is-invalid @enderror"
                            type="text" name="nama" id="nama" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                        </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                    <input class="form-control" @error('harga') is-invalid @enderror"
                            type="text" name="harga" id="harga" value="{{ old('harga') }}"> 
                        @error('harga')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                    <input class="form-control" @error('stok') is-invalid @enderror"
                        type="number" name="stok" id="stok" value="{{ old('stok') }}">
                        @error('stok')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                    <input class="form-control-file" type="file" name="gambar" id="gambar">
                </div>
                        <button  class="btn btn-info" style="margin-left: 650px; font-size: 20px;" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>