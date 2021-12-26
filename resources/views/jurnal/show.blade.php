@extends('layouts.main')

@section('content')
<div class="col-xl-12">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Jurnal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/jurnal">Jurnal</a></li>
              <li class="breadcrumb-item active">Detail Jurnal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detail Data Jurnal</h3>
        </div>
        <div class="card-body">
                <table class="table table-striped">
                    <tr>
                      <th>Petugas</th>
                      <th>{{ $jurnal->user_id }}</th>
                    </tr>
                    <tr>
                      <th>Kode Klasifikasi</th>
                      <th>{{ $jurnal->kode_klasifikasi }}</th>
                    </tr>
                      <th>Unit Kerja</th>
                      <th>{{ $jurnal->unit_id }}</th>
                    </tr>
                    <tr>
                      <th>Tanggal Jurnal</th>
                      <th>{{ $jurnal->tanggal }}</th>
                    </tr>
                    <tr>
                      <th>Kode User</th>
                      <th>{{ $jurnal->kode_user }}</th>
                    </tr>
                    <tr>
                      <th>Tahun</th>
                      <th>{{ $jurnal->id }}</th>
                    </tr>
                </table>
        </div>
    </div>
@endsection
