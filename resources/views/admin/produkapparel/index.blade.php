@extends('admin.layouts.master')
@section('title', 'Produk Apparel')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Produk</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#" style="text-decoration:none">Beranda</a></li>
            <li class="breadcrumb-item active">Produk</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
        <!-- general form elements -->  
            <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Form Input Produk</h3>
            </div>
        
            <form role="form" method="post" action="/adminprodukap" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control inputnama @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                <label for="jabatan">Deskripsi</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Masukkan deskripsi" name="description" value="{{ old('description') }}">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" id="foto" placeholder="Masukkan foto" name="foto" value="{{ old('foto') }}">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary tambahph">Submit</button>
            </div>
            </form>
        </div>
        <!-- /.card -->
        </div>
      
	    <div class="col-md-8">
	  	<div class="card">
	  	<div class="header">
			  <h4 class="title">List Produk</h4>
      </div> <!--akhir clas header-->
		    <div class="content table-responsive table-full-width">
		      <table class="table table-striped" id="example">
						<thead class="thead-dark">
							<tr>
							<th scope="col">#</th>
							<th scope="col">Nama</th>
							<th scope="col">Deskripsi</th>
							<th scope="col">Foto</th>
							<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($produkap as $no => $pa)				
								<tr>
									<th scope="row">{{ $no+1 }}</th>
									<td>{{ $pa->nama }}</td>
									<td>{{ $pa->description }}</td>
                  <td>{{ $pa->foto }}</td>
									<td>
                  <a href="/adminprodukap/detail/{{ $pa->id }}" class="badge badge-primary float-right"><i class="fa fa-cog"></i>  Detail</a>
                </td>
								</tr>
              @endforeach
						</tbody>
					</table>
	      	</div>
		    </div>
	    </div>	
   </div>
</div>
@endsection
