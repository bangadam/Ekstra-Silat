@extends('admin.index')

@section('dashboard')


		<h5>Dashboard</h5>
		<hr>
		
		<!--  -->

		  {{-- Menu --}}
		<div class="row">
			<div class="col m3">
				<div class="card hoverable blue accent-1	 ">
					<div class="card-content">
						<div class="row">
							<div class="col m3 white-text">
								<span class="fa fa-user fa-5x"></span>
							</div>
							<div class="col m8">
								<a class="white-text"><h4>Pelatih</h4></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col m3">
				<div class="card hoverable blue accent-1	 ">
					<div class="card-content">
						<div class="row">
							<div class="col m3 white-text">
								<span class="fa fa-users fa-5x"></span>
							</div>
						<div class="col m8">
							<a class="white-text"><h4>Siswa</h4></a>
						</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col m3">
				<div class="card hoverable blue accent-1	 ">
					<div class="card-content">
						<div class="row">
							<div class="col m3 white-text">
								<span class="fa fa-users fa-5x"></span>
							</div>
						<div class="col m8">
							<a class="white-text"><h4>Absensi</h4></a>
						</div>
						</div>
					</div>
				</div>
			</div> 
			<div class="col m3">
				<div class="card hoverable blue accent-1	 ">
					<div class="card-content">
						<div class="row">
							<div class="col m3 white-text">
								<span class="fa fa-book fa-5x"></span>
							</div>
							<div class="col m8 ">
								<a class="white-text"><h4>Kegiatan</h4></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> {{-- End Menu --}}
		
		
@endsection
