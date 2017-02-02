@extends('admin.index')

@section('pembina')

		<h5>Daftar Pelatih</h5>
		<hr>

 	 {{-- Menu --}}
		<div class="row">
			<ul class="tombol">
				@if(Auth::user()->level == 'admin')
					<li>
						
						<li><a href="{{ url('warga/downloadExcel/xlsx') }}" class="waves-light waves-effect btn green"><i class="fa fa-upload"></i> Export</a></li>
					</li>
				@endif
				<li><a href="{{ route('warga.print') }}" class="waves-light waves-effect btn grey lighten-1"><i class="fa fa-print"></i> Print</a></li>
			</ul>
		</div>

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
						<th>Opsi</th>
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
							<td>
								
								
									<a href="{{ route('warga.edit', $datas->id) }}" class="waves-effect waves-light btn-floating amber accent-4"><i class="fa fa-pencil"></i></a>
									<a href="{{ route('warga.hapus', $datas->id) }}" class="waves-effect waves-light btn-floating amber danger-4"><i class="fa fa-trash"></i></a>
								
							</td>
							<!-- @if(Auth::user()->username == 'admin')
								<td>
									<form action="{{ route('warga.hapus', $datas->id) }}" method="delete">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">

										<button type="submit" name="hapus" class="waves-effect waves-light btn-floating red"><i class="fa fa-trash"></i></button>
									</form>
								</td>
							@endif -->
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
		
	</div> {{-- End Menu --}}

		

@endsection