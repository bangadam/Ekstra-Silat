@extends('admin.index')

@section('anggota')

<div class="row">
	<h5>Tambah Siswa</h5>
	<hr>

		<div class="row">
				<a href="{{ route('admin.index') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Back</a>
		</div>
		<div class="col m9 offset-m2">
			<div class="card z-depth-2">
				<div class="card-content">
					<form action="{{ route('Siswa.tambah') }}" method="POST" enctype="multipart/form-data">
				<h3 class="blue-text blue-lighten-2 center-align">Tambah Siswa</h3>
				<div class="input-field{{ $errors->has('nama') ? ' has-error' : '' }}"> 
					<input type="text" name="nama" id="nama">
					<label for="">Nama</label>
					@if($errors->has('nama'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('nama') }}</p>
        				 </ul>
					@endif
				</div>
				<div class="input-field{{ $errors->has('sabuk') ? ' has-error' : '' }}">
					<select class="form-control" name="sabuk" >
                        <option value="">-sabuk-</option>
                           @foreach($sabuk as $k)
                            <option value="{{{ $k->id_sabuk }}}"> {{{ $k->tingkatan }}}</option>
                            @endforeach 
                    </select>
					
					<label for="">sabuk</label>
					@if($errors->has('sabuk'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('sabuk') }}</p>
        				 </ul>
					@endif
				</div>

				<div class="input-field{{ $errors->has('ttl') ? ' has-error' : '' }}"> 
					<input type="text" name="ttl">
					<label for="">TTL</label>
					
				</div>
					
				<div class="input-field{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
					<select name="jenis_kelamin" >
						<option value="" disabled selected>- Pilih Jenis Kelamin -</option>
						<option value="L">pria
						</option>
						<option value="P">wanita
						</option>
					</select>
					<label for="">Jenis Kelamin</label>
					@if($errors->has('jenis_kelamin'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('jenis_kelamin') }}</p>
        				 </ul>
					@endif
				</div>
				<div class="input-field{{ $errors->has('alamat') ? ' has-error' : '' }}">
					<textarea name="alamat" rows="3" class="materialize-textarea validate" ></textarea>
					<label for="">Alamat</label>
					@if($errors->has('alamat'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('alamat') }}</p>
        				 </ul>
					@endif
				</div>
				<div class="input-field{{ $errors->has('no_hp') ? ' has-error' : '' }}">
					<input type="text" name="no_hp" id="no_hp" class="validate" maxlength="12" >
					<label for="">No. Hp</label>
					@if($errors->has('no_hp'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('no_hp') }}</p>
        				 </ul>
					@endif
				</div>
				<div class="input-field{{ $errors->has('kelas') ? ' has-error' : '' }}">
					<select class="form-control" name="kelas" >
						<option value="">- Pilih kelas -</option>
						@foreach($Kelas as $m)
							<option value="{{{ $m->id_kelas }}}"> {{{ $m->nama_kelas }}}</option>
						@endforeach
					</select>
					<label for="">kelas</label>
					@if($errors->has('kelas'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('kelas') }}</p>
        				 </ul>
					@endif
				</div>
				<div class="input-field{{ $errors->has('status') ? 'has-error' : '' }}">
				<select name="status" >
					<option value="" disabled selected>- Status -</option>
					<option value="siswa">Siswa</option>
					<option value="warga">warga</option>
				</select>
				</div>

				<button type="reset" class="red reset btn waves-effect waves-light">Reset <i class="fa fa-circle-o-notch"></i></button>
				<button type="submit" class="btn waves-effect waves-light right">Tambah <i class="fa fa-send"></i></button>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				

			</form>
		</div>
				</div>
			</div>
		</div>
</div>

@endsection