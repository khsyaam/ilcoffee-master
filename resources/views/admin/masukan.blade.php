@extends('admin.layouts.master')
@section('title', 'Masukan - HMTI Udinus 2020')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Masukan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#" style="text-decoration:none">Home</a></li>
            <li class="breadcrumb-item active">Masukan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
              
	    <div class="col-md-11">
	  	<div class="card">
	  	<div class="header">
			  <h4 class="title">Daftar Masukan</h4>
        </div> <!--akhir clas header-->
		    <div class="content table-responsive table-full-width">
		      <table class="table table-striped" id="example">
						<thead class="thead-dark">
							<tr>
							<th scope="col">#</th>
							<th scope="col">Nama</th>
							<th scope="col">Email</th>
							<th scope="col">Pesan</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($comment as $no => $saran)				
								<tr>
									<th scope="row">{{ $no+1 }}</th>
									<td>{{ $saran->nama }}</td>
									<td>{{ $saran->email }}</td>
                                    <td>{{ $saran->pesan }}</td>
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
