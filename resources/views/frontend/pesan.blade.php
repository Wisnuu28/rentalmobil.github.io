@extends('apps.layout2')
@section('content')
<section class="wrapper">
	<section class="page_head">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h2>Reservation</h2>
					<nav id="breadcrumbs">
						<ul>
							<li>You are here:</li>
							<li><a href="home.html">Home</a></li>
							<li><a>Reservation</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
	
	<section class="content portfolio_single">
		<div class="container">
        @if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
            <form action="/pesan/store" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="name" placeholder="Masukkan Nama Anda">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email" placeholder="Masukkan Email Anda">
                </div>
                <div class="form-group">
                    <label>Mobil</label>
                    <input class="form-control" name="mobil" readonly class="form-control-plaintext" value="{{ $data_mobil->nama_mobil }}">
                </div>
                <div class="form-group">
                    <label>Nomor Handphone</label>
                    <input class="form-control" name="nomor_hp" placeholder="Masukkan No. Hp Anda" value="+62">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" rows="4" placeholder="Masukkan Alamat Anda"></textarea>
                </div>
                <div class="form-group">
                    <label>Pilih Tanggal Pemesanan</label>
                    <input class="date form-control" name="tanggal_pesan" type="date" placeholder="Klik untuk memilih tanggal">
                </div>
                <div class="form-group">
                    <label>Sampai Tanggal</label>
                    <input class="date form-control" name="selesai_pesan" type="date" placeholder="Klik untuk memilih tanggal">
                </div>
                    <input type="submit" value="Upload" class="btn btn-info">
                    <a class="btn btn-default" href="/mobil">Cancel</a>
            </div>
            </form>
		</div>
	</section>
@stop