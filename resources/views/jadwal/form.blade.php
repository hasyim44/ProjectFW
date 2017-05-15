<div class="form-group">
	<label class="col-sm-2 control-label" >Nama</label>
	<div class="col-sm-10">
		{!! Form::nama('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" >Tanggal</label>
	<div class="col-sm-10">
		{!! Form::tanggal('tanggal',null,['class'=>'form-control','placeholder'=>"Tanggal"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="id_ruangan">Ruangan</label>
	<div class="col-sm-10">
		{!! Form::select('id_ruangan',$ruangan->listRuangan(),null,['class'=>'form-control','id'=>'id_ruangan','placeholder'=>"Ruangan"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="id_bidan">Bidan</label>
	<div class="col-sm-10">
		{!! Form::select('id_bidan',$Bidan->listBidan(),null,['class'=>'form-control','id'=>'id_bidan','placeholder'=>"Bidan"]) !!}
		</div>
</div>

