@extends('templates.app')

@section('content')


@include('templates.nav')

	<h5>Daftar absensi</h5>
	<hr>
 	 	
		<div class="row">
			<div class="col m12">
				
				
				<table id="TableId" class="mdl-data-table" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>no</th>
						<th>Nama</th>
						<th>kelas</th>
						<th>keterangan</th>
						<th>tanggal</th>
					</tr>
				</thead>
			
				<tbody>
					<?php $no=1; ?>
					@foreach($absensi as $absensis)
						<tr>
							<td>{{$no++}}</td>
							<td>{{ $absensis->nama_siswa }}</td>
							<td>{{ $absensis->nama_kelas }}</td>
							<td>
								{{ $absensis->absen }}
							</td>
							<td>{{ $absensis->created_at }}</td>
							
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div> {{-- End Menu --}}

	</div>
		

@endsection