@extends('templates.app')

@section('content')


@include('templates.nav')
	
	<h5>Daftar Kegiatan</h5>
	<hr>
 	 {{-- Menu --}}
		

		@include('templates.alert')	

		<div class="row">
			<div class="col m12">
				<table id="TableId" class="mdl-data-table" width="100%">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nama Kegiatan</th>
							<th>tempat</th>
							<th>Tanggal Pelaksanaan</th>
							<th>administrasi</th>
						</tr>
					</thead>
					<tbody>
					 @foreach($data as $datas)
						<tr>
							<td>{{ $datas->id }}</td>
							<td>{{ $datas->nama_kegiatan }}</td>
							<td>{{ $datas->tempat_kegiatan }}</td>
							<td>{{ $datas->tgl_pel }}</td>
							<td>{{ $datas->administrasi }}</td>
							
						</tr>
					 @endforeach
					</tbody>
				</table>
			</div>
		</div>

@endsection