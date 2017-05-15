<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">TTL</label>
	<div class="col-sm-10">
		{!! Form::text('ttl',null,['class'=>'form-control','id'=>'ttl','placeholder'=>"TTL"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="id_ayah">Ayah</label>
	<div class="col-sm-10">
		{!! Form::select('id_ayah',$ayah->lists('tittle','id'),null,['class'=>'form-control','id'=>'id_ayah','placeholder'=>"Ayah"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="id_rekammedis">Rekam Medis</label>
	<div class="col-sm-10">
		{!! Form::select('id_rekammedis',$ruangan->lists('tittle','id'),null,['class'=>'form-control','id'=>'id_rekammedis','placeholder'=>"Rekam Medis"]) !!}
		</div>
</div>