<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Bayi</label>
	<div class="col-sm-10">
			{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Bayi"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="id_ibu">Ibu</label>
	<div class="col-sm-10">
		{!! Form::select('id_ibu',$ibu->lists('nama','id'),null,['class'=>'form-control','id'=>'id_ibu','placeholder'=>"Ibu"]) !!}
		</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="id_ruangan">Ruangan</label>
	<div class="col-sm-10">
		{!! Form::select('id_ruangan',$ruangan->lists('nama','id'),null,['class'=>'form-control','id'=>'id_ruangan','placeholder'=>"Ruangan"]) !!}
		</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="id_jadwal">Jadwal</label>
	<div class="col-sm-10">
		{!! Form::select('id_jadwal',$jadwalb->lists('tanggal','id'),null,['class'=>'form-control','id'=>'id_jadwal','placeholder'=>"Jadwal"]) !!}
		</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="id_keterangan">Keterangan</label>
	<div class="col-sm-10">
		{!! Form::select('id_keterangan',$keterangan->lists('proses_lahir','id'),null,['class'=>'form-control','id'=>'id_keterangan','placeholder'=>"Keterangan"]) !!}
		</div>
</div>

