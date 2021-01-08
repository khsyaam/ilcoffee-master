@extends('admin.layouts.master')
@section('title', 'Detail Produk Apparel')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Detail Produk</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/adminprodukpa" style="text-decoration:none">Produk Apparel</a></li>
            <li class="breadcrumb-item active">{{ $produkap->nama }}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="container-fluid">
    <div class="row justify-content-center">
    <div class="card padding-top:10rem" style="width: 18rem;">
        <img src="{{ asset('/storage/images/'. $produkap->foto) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $produkap->nama }}</h5>
                <p class="card-text">{{ $produkap->description }}</p>
                <a href="/adminprodukpa" class="btn btn-primary btn-sm">Kembali</a>
                <a href="{{ $produkap->id }}/edit" class="btn btn-success btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm hapusapparel" produkap-id="{{ $produkap->id }}">Hapus</a>
            </div>
    </div>
    </div>
</div>
@endsection