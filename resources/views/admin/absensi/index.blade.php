@extends('admin.index')

@section('anggota')

	<h5>Absensi</h5>
		
		<form action="{{ route('save.absensi') }}" method="POST" enctype="multipart/form-data">
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
						<th>kelas</th>
						<th>Tingkatan</th>
						<th>Status</th>
						<th>Opsi</th>
					</tr>
				</thead>
			
				<tbody>
				<?php $no=1; ?>
					@foreach($siswa as $siswas)
						<tr>
							<td>{{$no++}}</td>
							<td>{{ $siswas->nama_siswa }}</td>
							<td>{{ $siswas->nama_kelas }}</td>
							<td>{{ $siswas->tingkatan }}</td>
							<td>{{ $siswas->status }}</td>
							<td>
									<input class="with-gap" name="absen[{{ $siswas->id }}]" type="radio" value="Hadir" id="hadir{{ $siswas->id }}" required />
									<label for="hadir{{ $siswas->id }}">Hadir</label>
									<input class="with-gap" name="absen[{{ $siswas->id }}]" type="radio" value="Alfa" id="alfa{{ $siswas->id }}" required />
									<label for="alfa{{ $siswas->id }}">Alfa</label>
									<input class="with-gap" name="absen[{{ $siswas->id }}]" type="radio" value="Sakit" id="sakit{{ $siswas->id }}" required />
									<label for="sakit{{ $siswas->id }}">Sakit</label>
									<input class="with-gap" name="absen[{{ $siswas->id }}]" type="radio" value="Izin" id="Izin{{ $siswas->id }}" required />
									<label for="Izin{{ $siswas->id }}">izin</label>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
		<button type="submit" class="btn waves-effect waves-light right">save <i class="fa fa-send"></i></button>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</div>
			<!-- </form> -->
		

@endsection