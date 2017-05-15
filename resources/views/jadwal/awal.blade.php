@extends('master')
@section('container')


<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Jadwal</strong>
	<a href="{{ url('jadwal/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>Jadwal</a>

		<div class="clearfix"></div>
	</div>
<table class="table">
			<thead>
					<tr>
						<th>No.</th>
						<th>waktu Operasi</th>
						<th>Tanggal</th>
						<th>Ruangan</th>
						<th>Bidan</th>
						<th>Aksi</th>
					</tr>
			</thead>
			<body>
					<?php $x=1 ;?>
					@foreach ($semuaJadwal as $jadwal)
						<tr>
							<td>{{ $x++ }}</td>
							<td>{{ $jadwal->waktu_operai or 'waktu_operai kosong'}}</td>
							<td>{{ $jadwal->tanggal or 'tanggal kosong'}}</td>
							<td>{{ $jadwal->ruangan-->nama or  kosong'}}</td>
							<td>{{ $jadwal->bidan->nama or 'nama kosong'}}</td>
							<td>
								<div class="btn-group" role="group">
								<a href="{{url('jadwal/edit/'.$jadwal->id)}}" class="btn btn-warning btn xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i></a>

								<a href="{{url('jadwal/lihat/'.$jadwal->id)}}" class="btn btn-info btn xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i></a>

								<a href="{{url('jadwal/hapus/'.$jadwal->id)}}" class="btn btn-danger btn xs" data-toggle="tooltip" data-placement="top" title="Hapus">
								<i class="fa fa-remove"></i></a>
						</div>

							</td>
						</tr>
						@endforeach
			</tbody>
</table>
</div>
@stop