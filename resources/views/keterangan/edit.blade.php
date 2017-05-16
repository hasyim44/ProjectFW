@extends('master_admin')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{ url('keterangan') }}">
	<i style="color:white;" class="fa text-default fa-chevron-left"></i>Perbarui Data Proses Lahiran</a>
	</strong>
	</div>
		{!! Form::model($keterangan,['url'=>'keterangan/edit/'.$keterangan->id,'class'=>'form-horizontal']) !!}
		@include('keterangan.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				<button type"reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop