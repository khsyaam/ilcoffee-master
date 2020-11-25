@extends('admin.layouts.master')
@section('title', 'Edit Pengurus Harian -HMTI Udinus 2020')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Pengurus Harian</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/pengurus-harian" style="text-decoration:none">Pengurus Harian</a></li>
            <li class="breadcrumb-item active">Edit Pengurus Harian</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md">
        <!-- general form elements -->  
            <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Form Edit Pengurus Harian</h3>
            </div>
            <form role="form" method="post" action="/pengurus-harian/detail/{{ $leader->id }}" enctype="multipart/form-data">
                @method('patch')
                @csrf
            <div class="card-body">
                <div class="form-row">
                <div class="form-group col-md-6">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama" value="{{ $leader->nama }}">
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group col-md-6">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" placeholder="Masukkan jabatan" name="jabatan" value="{{ $leader->jabatan }}">
                @error('jabatan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                <label for="foto">Foto</label> (jika tidak ingin mengganti foto, tidak usah diklik)
                <input type="file" class="form-control" id="foto" placeholder="Masukkan foto" name="foto" value="{{ $leader->foto }}">
                </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary editph">Submit</button>
            </div>
            </form>
        </div>
        <!-- /.card -->
        </div>
      
   </div>
</div>

@endsection
