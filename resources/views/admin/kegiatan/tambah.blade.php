@extends('admin.index')

@section('kegiatan')
	<div class="row">
	<h5>Tambah Kegiatan</h5>
	<hr>
</div>		
	
	<div class="row">
		<a href="{{ route('lihat.kegiatan') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Kembali</a>
	</div>

		<div class="col m8 offset-m2">
			<div class="card">
				<div class="card-content">
					<form action="{{ route('kegiatan.tambah') }}" method="POST" enctype="multipart/form-data">
				<h3 class="blue-text blue-lighten-2 center-align">Tambah Kegiatan</h3>
				<div class="input-field{{ $errors->has('nama_kegiatan') ? ' has-error' : '' }}"> 
					<input type="text" name="nama_kegiatan" class="validate" required>
					<label for="">Nama Kegiatan</label>
					@if($errors->has('nama_kegiatan'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('nama_kegiatan') }}</p>
        				 </ul>
					@endif
				</div>

				<div class="input-field{{ $errors->has('tempat_kegiatan') ? ' has-error' : '' }}"> 
					<input type="text" name="tempat_kegiatan" class="validate" required>
					<label for="">Tempat Kegiatan</label>
					@if($errors->has('tempat_kegiatan'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('tempat_kegiatan') }}</p>
        				 </ul>
					@endif
				</div>
					
				<label for="">Tanggal Pelaksanaan</label>
				<div class="input-field{{ $errors->has('tgl_pel') ? ' has-error' : '' }}">
					<input type="date" class="datepicker"  name="tgl_pel" required>
					@if($errors->has('tgl_pel'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('tgl_pel') }}</p>
        				 </ul>
					@endif
				</div>

				<div class="input-field{{ $errors->has('administrasi') ? ' has-error' : '' }}"> 
					<input type="text" name="administrasi" class="validate" required>
					<label for="">Administrasi</label>
					@if($errors->has('administrasi'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('administrasi') }}</p>
        				 </ul>
					@endif
				</div>
				
				
				<div class="row">
					<button type="reset" class="red reset btn waves-effect waves-light">Reset <i class="fa fa-circle-o-notch"></i></button>
					<button type="submit" class="btn waves-effect waves-light right blue lighten-2">Tambah <i class="fa fa-plus"></i></button>
				</div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
				</div>
			</div>
		</div>
</div>
@endsection