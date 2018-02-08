@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Show Data Post
					<div class="panel-title pull-right">
						<a href="{{route('wali.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label">Nama</label>
							<input type="text" name="nama" class="form-control" value="{{$walis->nama}}" readonly>
						</div>

						<div class="form-group">
							<label class="control-label">No.Telp</label>
							<input type="text" name="no_telp" class="form-control" value="{{$walis->no_telp}}" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection