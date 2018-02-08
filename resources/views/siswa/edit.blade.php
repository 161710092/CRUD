@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data Siswa
						<div class="panel-title pull-right">
							<a href="{{route('siswa.index')}}">Kembali</a>
						</div>
					</div>
					<div class="panel-body">
						<form action="{{route('siswa.update', $siswas->id)}}" method="post">
							<input type="hidden" name="_method" value="PATCH">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('nis') ? 'has-error' : ''}}">
								<label class="control-label">NIS</label>
								<input type="number" name="nis" class="form-control" value="{{$siswas->nis}}" required>
								@if ($errors->has('nis'))
									<span class="help-blocks">
										<strong>{{$errors->first('nis')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
								<label class="control-label">Nama</label>
								<input type="text" name="nama" class="form-control" value="{{$siswas->nama}}" required>
								@if ($errors->has('nama'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary">Edit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection