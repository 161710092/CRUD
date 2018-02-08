@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Data Guru
						<div class="panel-title pull-right">
							<a href="{{route('guru.create')}}">Tambah</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>NIP</th>
										<th>Nama</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
								<tbody>
									@php
										$no = 1;
									@endphp
									@foreach ($gurus as $data)
									<tr>
										<td>{{$no++}}</td>
										<td>{{$data->nip}}</td>
										<td>{{$data->nama}}</td>
										<td>
											<a href="{{route('guru.edit', $data->id)}}" class="btn btn-warning">Edit</a>
										</td>
										<td>
											<a href="{{route('guru.show', $data->id)}}" class="btn btn-success">Show</a>
										</td>
										<td>
											<form method="post" action="{{route('guru.destroy' ,$data->id)}}">
												<input type="hidden" name="_token" value="{{csrf_token()}}">
												<input type="hidden" name="_method" value="DELETE">
												<button class="btn btn-danger" type="submit">Delete</button>
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection