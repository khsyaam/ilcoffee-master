@extends('admin.layouts.master')
@section('title', 'Detail Produk Beans')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Detail Produk Beans</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/adminproduk" style="text-decoration:none">Produk Beans</a></li>
            <li class="breadcrumb-item active">{{ $produk->nama }}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="container-fluid">
    <div class="row justify-content-center">
    <div class="card padding-top:10rem" style="width: 18rem;">
        <img src="{{ asset('/storage/images/'. $produk->foto) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $produk->nama }}</h5>
                <p class="card-text">{{ $produk->description }}</p>
                <a href="/adminproduk" class="btn btn-primary btn-sm">Kembali</a>
                <a href="{{ $produk->id }}/edit" class="btn btn-success btn-sm">Edit</a>
                {{-- <form action="{{ $leader->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form> --}}
                
                <a href="#" class="btn btn-danger btn-sm hapusph" produk-id="{{ $produk->id }}">Hapus</a>
            </div>
    </div>
    </div>
</div>
@endsection