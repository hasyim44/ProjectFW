<div class="form-group">
	<label class="col-sm-2 control-label" id="id_ibu">Nama</label>
	<div class="col-sm-10">
		{!! Form::select('id_ibu',$ibu->lists('nama','id'),null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Tensi Darah</label>
	<div class="col-sm-10">
		{!! Form::text('tensi_darah',null,['class'=>'form-control','placeholder'=>"Tensi Darah"]) !!}
		</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Gula Darah</label>
	<div class="col-sm-10">
		{!! Form::text('gula_darah',null,['class'=>'form-control','placeholder'=>"Gula Darah"]) !!}
		</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Kondisi</label>
	<div class="col-sm-10">
		{!! Form::text('kondisi',null,['class'=>'form-control','placeholder'=>"Kondisi"]) !!}
		</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Kolestrol</label>
	<div class="col-sm-10">
		{!! Form::text('kolestrol',null,['class'=>'form-control','placeholder'=>"Kolestrol"]) !!}
		</div>
</div>