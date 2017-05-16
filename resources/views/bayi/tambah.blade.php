@extends('master_admin')
@section('container')


<div class="panel panel-primary">
<div class="panel-heading">
	<strong><a href="{{ url('bayi') }}">
	<i style="color:white;" class="fa text-default fa-chevron-left"></i></a>
	Tambah Data Bayi</strong>
	</div>
		{!! Form::open(['class'=>'form-horizontal','url' => 'bayi/simpan']) !!}
		@include('bayi.form', ['submit_text' => 'Tambah Data'])
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
				<button class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop

