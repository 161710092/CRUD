@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data Wali
						<div class="panel-title pull-right">
							<a href="{{route('wali.index')}}">Kembali</a>
						</div>
					</div>
					<div class="panel-body">
						<form action="{{route('wali.update', $walis->id)}}" method="post">
							<input type="hidden" name="_method" value="PATCH">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
								<label class="control-label">Nama</label>
								<input type="text" name="nama" class="form-control" value="{{$walis->nama}}" required>
								@if ($errors->has('nama'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('no_telp') ? 'has-errors' : ''}}">
								<label class="control-label">No.Telp</label>
								<input type="text" name="no_telp" class="form-control" value="{{$walis->no_telp}}" required>
								@if ($errors->has('no_telp'))
									<span class="help-blocks">
										<strong>{{$errors->first('no_telp')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group">
								<button class="btn btn-primary" type="submit">Edit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection