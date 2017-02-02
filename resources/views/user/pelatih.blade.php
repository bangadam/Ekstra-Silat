@extends('templates.app')

@section('content')


@include('templates.nav')

		<h5>Daftar Pelatih</h5>
		<hr>

  <!-- Modal Structure -->
  	

		<div class="row">
			<div class="col m12">
				
				<table id="TableId" class="mdl-data-table" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>tingkatan</th>
						<th>kelas</th>
					</tr>
				</thead>
			
				<tbody>
					@foreach($Pelatih as $datas)
						<tr>
							<td>{{ $datas->id }}</td>
							<td>{{ $datas->nama_pel }}</td>
							<td>{{ $datas->JK }}</td>
							<td>{{ $datas->alamat_pel }}</td>
							<td>{{ $datas->tingkatan }}</td>
							<td>{{ $datas->nama_kelas }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
		
	</div> {{-- End Menu --}}

		

@endsection