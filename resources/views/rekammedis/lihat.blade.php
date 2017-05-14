@extends('master')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('rekmmedis') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Tensi Darah</strong>
	</div>
	<table class="table">
		<tr>
			<td>Tensi Darah</td>
			<td>:</td>
			<td>{{ $rekmmedis->tensi_darah }}</td>
		</tr>

		<tr>
			<td>Gula Darah</td>
			<td>:</td>
			<td>{{ $rekmmedis->gula_darah }}</td>
		</tr>

		<tr>
			<td>Kondisi</td>
			<td>:</td>
			<td>{{ $rekmmedis->kondisi }}</td>
		</tr>

		<tr>
			<td>Kolestrol</td>
			<td>:</td>
			<td>{{ $rekmmedis->kolestrol }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$rekmmedis->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$rekmmedis->updated_at }}</td>
		</tr>
	</table>
</div>
@stop