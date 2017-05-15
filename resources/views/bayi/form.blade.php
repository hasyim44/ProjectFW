<div class="form-group">
	<label class="col-sm-2 control-label">Bayi</label>
	<div class="col-sm-10">
		{!! Form::select('id_bayi',$bayi->listIbuDanNama(),null,['class'=>'form-control','id'=>'id_bayi','placeholder'=>"Bayi"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="id_ibu">Ibu</label>
	<div class="col-sm-10">
		{!! Form::select('id_ibu',$ibu->listIbuDanNama(),null,['class'=>'form-control','id'=>'id_ibu','placeholder'=>"Ibu"]) !!}
		</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="id_ruangan">Ruangan</label>
	<div class="col-sm-10">
		{!! Form::select('id_ruangan',$ruangan->lists('nama','id'),null,['class'=>'form-control','id'=>'id_ruangan','placeholder'=>"Ruangan"]) !!}
		</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Jadwal</label>
	<div class="col-sm-10">
		{!! Form::select('id_jadwal',$jadwal->lists('tittle','id'),null,['class'=>'form-control','id'=>'id_jadwal','placeholder'=>"Jadwal"]) !!}
		</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Keterangan</label>
	<div class="col-sm-10">
		{!! Form::select('id_keterangan',$keterangan->lists('tittle','id'),null,['class'=>'form-control','id'=>'id_keterangan','placeholder'=>"Keterangan"]) !!}
		</div>
</div>

