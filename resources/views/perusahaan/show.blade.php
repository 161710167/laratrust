@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Perusahaan 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  <div class="form-group">
			  			<label class="control-label">nama</label>	
			  			<input type="img" name="nama" class="form-control" value="{{ $p->nama }}"  readonly>
			  		</div>
        			<div class="form-group">
			  			<label class="control-label">logo</label>	
			  			<input type="img" name="logo" class="form-control" value="{{ $p->logo }}"  readonly>
			  		</div>
				<div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">deskripsi</label>	
			  			<input type="text" name="deskripsi" class="form-control" value="{{ $p->deskripsi }}"  readonly>
			  		</div>
			  		<div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">kategori</label>	
			  			<input type="text" name="kategori" class="form-control" value="{{ $p->kategori }}"  readonly>
			  		</div>
			  		<div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">subkategori</label>	
			  			<input type="text" name="subkategori" class="form-control" value="{{ $p->subkategori }}"  readonly>
			  		</div>
			  		<div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">judul</label>	
			  			<input type="text" name=judul" class="form-control" value="{{ $p->judul }}"  readonly>
			  		</div>
			  		<div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">gaji</label>	
			  			<input type="number" name="gaji" class="form-control" value="{{ $p->gaji }}"  readonly>
			  		</div>
			  		<div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">tgl_mulai</label>	
			  			<input type="date" name="tgl_mulai" class="form-control" value="{{ $p->tgl_mulai }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">email</label>	
			  			<input type="text" name="email" class="form-control" value="{{ $p->email }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">telepon</label>	
			  			<input type="number" name="telepon" class="form-control" value="{{ $p->telepon }}"  readonly>
			  		</div>
        			
			  		<div class="form-group">
			  			<label class="control-label">user</label>	
			  			<input type="text" name="user_id" class="form-control" value="{{ $p->User->email }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection