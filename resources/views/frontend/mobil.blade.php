@extends('apps.layout2')
@section('content')
	<!--End Header--><section class="wrapper">
	<section class="page_head">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h2>Vehicles</h2>
					<nav id="breadcrumbs">
						<ul>
							<li>You are here:</li>
							<li><a href="home.html">Home</a></li>
							<li><a>Pilih Mobil</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
	
	<section class="content portfolio">
		<div class="container">
			<div class="row">
				
				<div class="isotope">
					
					<ul id="filter" class="option-set clearfix">
						<li data-filter="*" class="selected"><a href="#">All</a></li>
					</ul>
					
					<ul id="list" class="portfolio_list clearfix ">
						@foreach($data_mobil as $dm)
							<li class="list_item col-lg-4 col-md-4 col-sm-4 mpv">
								<div class="recent-item">
									<figure>
										<div class="bwWrapper touching medium">
											<img src="{{ url('/data_file/'.$dm->file) }}">
										</div>
										<figcaption class="item-description">
                                            <h5>{{$dm->nama_mobil}}</h5>
											<h6>{{formatRupiah($dm->harga_sewa)}} / Hari</h6>
											<a class="btn btn-primary" href="/detail/{{ $dm->id }}">Detail Mobil</a>
                                            <a class="btn btn-success" href="/pesan/{{ $dm->id }}">Pesan</a>
										</figcaption>
									</figure>
								</div>
							</li>
						@endforeach
					</ul>
					
				</div>
				
			</div>
		</div>
    </section>
    @endsection