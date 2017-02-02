@extends('admin.index')

@section('anggota')

	<h5>Daftar Anggota</h5>
	<hr>
 	 {{-- Menu --}}
		<div class="row">
			<ul class="tombol">
				@if(Auth::user()->level == 'pembina')
					<li>
						<a href="{{ route('Siswa.tambah') }}" class="waves-effect waveslight btn blue accent-2"><i class="fa fa-plus"></i> Tambah</a>
					</li>
					<li><a href="" class="waves-light waves-effect btn amber accent-4"><i class="fa fa-download"></i> Import</a></li>
				@endif
				<li><a href="" class="waves-light waves-effect btn grey lighten-1"><i class="fa fa-print"></i> Print</a></li>
			</ul>
		</div>	
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
						<th>Opsi</th>
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
							<td>
								
									<a href="{{ route('Siswa.edit', $siswas->id) }}" class="waves-effect waves-light btn-floating amber"><i class="fa fa-pencil"></i></a>
									<a href="{{ route('Siswa.hapus', $siswas->id) }}" class="waves-effect waves-light btn-floating amber danger-4"><i class="fa fa-trash"></i></a>
							</td>
							
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div> {{-- End Menu --}}

	</div>
		

@endsection