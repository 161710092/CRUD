@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Data Siswa
						<div class="panel-title pull-right">
							<a href="{{route('wali.index')}}">Kembali</a>
						</div>
					</div>
					<div class="panel-body">
						<form action="{{route('wali.store')}}" method="post">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
								<label class="control-label">Nama</label>
								<input type="text" name="nama" class="form-control" required>
								@if ($errors->has('nama'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('no_telp') ? 'has-error' : ''}}">
								<label class="control-label">No.Telp</label>
								<input type="string" name="no_telp" class="form-control" required>
								@if ($errors->has('no_telp'))
									<span class="help-blocks">
										<strong>{{$errors->first('no_telp')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group">
								<button class="btn btn-primary" type="submit">Tambah</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection