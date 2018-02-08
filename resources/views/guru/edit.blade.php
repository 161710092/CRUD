@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data Guru
						<div class="panel-title pull-right">
							<a href="{{route('guru.index')}}">Kembali</a>
						</div>
					</div>
					<div class="panel-body">
						<form action="{{route('guru.update', $gurus->id)}}" method="post">
							<input type="hidden" name="_method" value="PATCH">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('nip') ? 'has-error' : ''}}">
								<label class="control-label">NIP</label>
								<input type="number" name="nip" class="form-control" value="{{$gurus->nip}}" required>
								@if ($errors->has('nip'))
									<span class="help-blocks">
										<strong>{{$errors->first('nip')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
								<label class="control-label">Nama</label>
								<input type="text" name="nama" class="form-control" value="{{$gurus->nama}}" required>
								@if ($errors->has('nama'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama')}}</strong>
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