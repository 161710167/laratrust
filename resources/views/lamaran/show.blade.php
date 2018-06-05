@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Lamaran 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">file_cv</label>	
			  			<input type="text" name="file_cv" class="form-control" value="{{ $r->file_cv }}"  readonly>
			  		</div>

        			<div class="form-group">
			  			<label class="control-label">status</label>	
			  			<input type="text" name="status" class="form-control" value="{{ $r->status }}"  readonly>
			  		</div>
					<div class="form-group">
			  			<label class="control-label">Nama Lowongan</label>	
			  			<input type="text" name="low_id" class="form-control" value="{{ $r->Lowongan->nama_low }}"  readonly>
			  		<div class="form-group">
			  			<label class="control-label">Email</label>	
			  			<input type="text" name="user_id" class="form-control" value="{{ $r->User->email }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection