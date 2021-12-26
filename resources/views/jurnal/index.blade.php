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
              <li class="breadcrumb-item active">Jurnal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Data Jurnal</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Petugas</th>
                      <th>Tanggal</th>
                      <th>User</th>
                      <th>Tahun</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $key => $value)
                    <tr>
                      <td>{{ $value->user_id }}</td>
                      <td>{{ $value->tanggal }}</td>
                      <td>{{ $value->kode_user }}</td>
                      <td>2020</td>
                      <td>
                        <form action="{{ route('jurnal.destroy',$value->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('jurnal.show',$value->id) }}">Detail</a>
                            <a class="btn btn-primary" href="{{ route('jurnal.edit',$value->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                 {!! $data->links() !!}
                </ul>
              </div>
            </div>
            <!-- /.card -->
          </div>

@endsection

