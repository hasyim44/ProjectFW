@extends('master_admin')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{ url('ayah') }}">
	<i style="color:white;" class="fa text-default fa-chevron-left"></i>Perbarui Data ayah</a>
	</strong>
	</div>
		{!! Form::model($ayah,['url'=>'ayah/edit/'.$ayah->id,'class'=>'form-horizontal']) !!}
		@include('ayah.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop