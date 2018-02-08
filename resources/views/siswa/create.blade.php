@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Data Siswa
						<div class="panel-title pull-right">
							<a href="{{route('siswa.index')}}">Kembali</a>
						</div>
					</div>
					<div class="panel-body">
						<form action="{{route('siswa.store')}}" method="post">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('nis') ? 'has-error' : ''}}">
								<label class="control-label">NIS</label>
								<input type="number" name="nis" class="form-control" required>
								@if ($errors->has('nis'))
									<span class="help-blocks">
										<strong>{{$errors->first('nis')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
								<label class="control-label">Nama</label>
								<input type="text" name="nama" class="form-control" required>
								@if ($errors->has('nama'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama')}}</strong>
									</span>
								@endif
							</div>
							
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Tambah</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection