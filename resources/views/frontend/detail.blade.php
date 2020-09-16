@extends('apps.layout2')
@section('content')
<section class="wrapper">
	<section class="page_head">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h2>Vehicles</h2>
					<nav id="breadcrumbs">
						<ul>
							<li>You are here:</li>
							<li><a href="/home">Home</a></li>
							<li><a href="/mobil">Pilih Mobil</a></li>
							<li><a>{{$data_mobil->nama_mobil}}</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
	
	<section class="content portfolio_single">
		<div class="container">
			<div class="row sub_content">
				<div class="col-lg-8 col-md-8 col-sm-8">
					<!--Project Details Page-->
					<div class="porDetCarousel">
						<div class="carousel-content">
                        <img width="600px" src="{{ url('/data_file/'.$data_mobil->file) }}" >
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="project_description">
						<div class="sw_title">
							<h4>{{$data_mobil->nama_mobil}}</h4>
							<div class="gDot"></div>
						</div>

						<p></p>
					</div>
					<div class="project_details">
						<div class="sw_title">
							<h4>Details</h4>
							<div class="gDot"></div>
						</div>
						<ul class="details">
                            {{$data_mobil->keterangan}}
						</ul>	
                    </div>
					<a href="/mobil" class="btn btn-danger" role="button">Kembali</a>
                </div>
            </div>
		</div>
	</section>
@endsection