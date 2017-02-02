@extends('templates.app')

@section('content')


@include('templates.nav')

	<h5>Daftar Anggota</h5>
	<hr>
		<div class="row">
			<div class="col m12">
				@include('templates.alert')
				{{-- Search --}}
				<div class="row">

				{{-- Table --}}
				<table id="TableId" class="mdl-data-table" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>tingkatan</th>
						<th>kelas</th>
						<th>Status</th>
					</tr>
				</thead>
			
				<tbody>
					@foreach($siswa as $siswas)
						<tr>
							<td>{{ $siswas->id }}</td>
							<td>{{ $siswas->nama_siswa }}</td>
							<td>{{ $siswas->JK }}</td>
							<td>{{ $siswas->alamat_siswa }}</td>
							<td>{{ $siswas->tingkatan}}</td>
							<td>{{ $siswas->nama_kelas}}</td>
							<td>{{ $siswas->status }}</td>
							
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div> {{-- End Menu --}}

	</div>
		

@endsection