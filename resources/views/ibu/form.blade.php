<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" >TTL</label>
	<div class="col-sm-10">
		{!! Form::date('ttl',null,['class'=>'form-control','id'=>'ttl','placeholder'=>"TTL"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="id_ayah">Ayah</label>
	<div class="col-sm-10">
		{!! Form::select('id_ayah',$ayah->lists('nama','id'),null,['class'=>'form-control','id'=>'id_ayah','placeholder'=>"Ayah"]) !!}
		</div>
</div>

