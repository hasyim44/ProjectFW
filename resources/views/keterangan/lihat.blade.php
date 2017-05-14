@extends('master')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('keteranan') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data keteranan</strong>
	</div>
	<table class="table">
		<tr>
			<td>Proses Lahiran</td>
			<td>:</td>
			<td>{{ $keteranan->proses_lahir }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$keteranan->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$keteranan->updated_at }}</td>
		</tr>
	</table>
</div>
@stop