<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

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
          <h1 class="h3 mb-2 text-gray-800">FOODS LIST</h1>
            <a href="/createmakanan/form" class="btn btn-success">Tambah Makanan</a>
          <p></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Makanan</th>
                      <th>Harga</th>
                      <th>Stok Makanan</th>
                      <th>Gambar</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach ($makanan as $u)
                    <tr>
                      <th scope="row">{{ $u->id }}</th>
                      <td>{{ $u->nama }}</td>
                      <td>{{ $u->harga }}</td>
                      <td>{{ $u->stok }}</td>

                      <td><img src="{{ asset('assets/gambar_makanan/'. $u->gambar) }}" alt="{{ $u->gambar }}" width="30%" height="30%"></td>

                      <td><a class="btn btn-primary " href="/edit/{{ $u->id}}">edit</a>
                      <a class="btn btn-danger" href="/hapus/{{ $u->id }}">delete</a></td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
@include('admin.include.footer')