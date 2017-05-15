@extends('master')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('jadwal') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Jadwal Matakuliah</strong>
	</div>
	<table class="table">
		<tr>
			<td>Waktu operasi</td>
			<td>:</td>
			<td>{{ $jadwal->waktu_operasi }}</td>
		</tr>

		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td>{{ $jadwal->tanggal }}</td>
		</tr>

		<tr>
			<td>Bidan</td>
			<td>:</td>
			<td>{{ $jadwal->bidan->nama or 'kosong' }}</td>
		</tr>

		<tr>
			<td>Ruangan</td>
			<td>:</td>
			<td>{{ $jadwal->ruangan->nama  }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jadwal->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jadwal->updated_at }}</td>
		</tr>
	</table>
</div>
@stop