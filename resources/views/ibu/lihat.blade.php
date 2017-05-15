@extends('master')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('ibu') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data ibu</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $ibu->nama }}</td>
		</tr>

		<tr>
			<td>TTL</td>
			<td>:</td>
			<td>{{ $ibu->ttl }}</td>
		</tr>

		<tr>
			<td>Nama Suami</td>
			<td>:</td>
			<td>{{ $ibu->ayah->nama }}</td>
		</tr>

		<tr>
			<td>Rekam Medis</td>
			<td>:</td>
			<td>{{ $ibu->rekmamedis->nama }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$ibu->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$ibu->updated_at }}</td>
		</tr>
	</table>
</div>
@stop