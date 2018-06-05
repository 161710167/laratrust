@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Lowongan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('lowongan.update',$q->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_low') ? ' has-error' : '' }}">
			  			<label class="control-label"></label>	
			  			<input type="text" name="nama_low" value="{{ $q->nama_low }}" class="form-control"  required>
			  			@if ($errors->has('nama_low'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_low') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="form-group {{ $errors->has('tgl_mulai') ? ' has-error' : '' }}">
			  			<label class="control-label">tgl_mulai</label>	
			  			<input type="date" name="tgl_mulai" value="{{ $q->tgl_mulai }}" class="form-control"  required>
			  			@if ($errors->has('tgl_mulai'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_mulai') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('lokasi') ? ' has-error' : '' }}">
			  			<label class="control-label">lokasi</label>	
			  			<input type="text" name="lokasi" value="{{ $q->lokasi }}" class="form-control"  required>
			  			@if ($errors->has('lokasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lokasi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('gaji') ? ' has-error' : '' }}">
			  			<label class="control-label">gaji</label>	
			  			<input type="text" name="gaji" value="{{ $q->gaji }}" class="form-control"  required>
			  			@if ($errors->has('gaji'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gaji') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('deskripsi_iklan') ? ' has-error' : '' }}">
			  			<label class="control-label">deskripsi_iklan</label>	
			  			<input type="text" name="deskripsi_iklan" value="{{ $q->deskripsi_iklan }}" class="form-control"  required>
			  			@if ($errors->has('deskripsi_iklan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi_iklan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		
			  		<div class="form-group {{ $errors->has('pers_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi</label>	
			  			<select name="pers_id" class="form-control">
			  				@foreach($p as $data)
			  				<option value="{{ $data->id }}">{{ $data->deskripsi }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('pers_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pers_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection
