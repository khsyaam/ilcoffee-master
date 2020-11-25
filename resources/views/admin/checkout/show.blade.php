@extends('admin.layouts.master')
@section('title', 'Detail Pengurus Harian - HMTI Udinus 2020')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Detail Pengurus Harian</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/pengurus-harian" style="text-decoration:none">Pengurus Harian</a></li>
            <li class="breadcrumb-item active">{{ $leader->nama }}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="container-fluid">
    <div class="row justify-content-center">
    <div class="card padding-top:10rem" style="width: 18rem;">
        <img src="{{ asset('/storage/images/'. $leader->foto) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $leader->nama }}</h5>
                <p class="card-text">{{ $leader->jabatan }}</p>
                <a href="/pengurus-harian" class="btn btn-primary btn-sm">Kembali</a>
                <a href="{{ $leader->id }}/edit" class="btn btn-success btn-sm">Edit</a>
                {{-- <form action="{{ $leader->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form> --}}
                
                <a href="#" class="btn btn-danger btn-sm hapusph" ph-id="{{ $leader->id }}">Hapus</a>
            </div>
    </div>
    </div>
</div>
@endsection