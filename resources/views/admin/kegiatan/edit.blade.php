@extends('admin.index')

@section('pembina')

	<h5>Edit Kegiatan</h5>
	<hr>	
	
	<div class="row">
		<a  href="{{ route('lihat.kegiatan') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Kembali</a>
	</div>

		<div class="cantainer">
			<div class="col m7">
			<div class="card">
				<div class="card-content">
					<form action="{{ route('kegiatan.update', $data->id) }}" method="POST" enctype="multipart/form-data">
				<h3 class="blue-text blue-lighten-2 center-align">Edit Kegiatan</h3>
				<div class="input-field{{ $errors->has('nama_kegiatan') ? ' has-error' : '' }}"> 
					<input type="text" name="nama_kegiatan" class="validate" value="{{$data->nama_kegiatan}}" required>
					<label for="">Nama Kegiatan</label>
					@if($errors->has('nama_kegiatan'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('nama_kegiatan') }}</p>
        				 </ul>
					@endif
				</div>

				<div class="input-field{{ $errors->has('tempat_kegiatan') ? ' has-error' : '' }}"> 
					<input type="text" name="tempat_kegiatan" class="validate" value="{{$data->tempat_kegiatan}}" required>
					<label for="">Tempat Kegiatan</label>
					@if($errors->has('tempat_kegiatan'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('tempat_kegiatan') }}</p>
        				 </ul>
					@endif
				</div>
					
				<label for="">Tanggal Pelaksanaan</label>
				<div class="input-field{{ $errors->has('tgl_pel') ? ' has-error' : '' }}">
					<input type="date" class="datepicker"  name="tgl_pel" value="{{$data->tgl_pel}}" required>
					@if($errors->has('tgl_pel'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('tgl_pel') }}</p>
        				 </ul>
					@endif
				</div>

				<div class="input-field{{ $errors->has('administrasi') ? ' has-error' : '' }}"> 
					<input type="text" name="administrasi" class="validate" value="{{$data->administrasi}}" required>
					<label for="">Administrasi</label>
					@if($errors->has('administrasi'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('administrasi') }}</p>
        				 </ul>
					@endif
				</div>
				
				
				<div class="row">
					<button type="submit" class="btn waves-effect waves-light right amber">Edit <i class="fa fa-pencil"></i></button>
				</div>
				<input type="hidden" name="_method" value="put">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
				</div>
			</div>
		</div>
		
		</div>

</div>

@endsection