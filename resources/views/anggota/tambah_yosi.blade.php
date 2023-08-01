@extends('layout1.main2')
@section('content')


<h4><b>Tambah Data Transaksi</b></h4>
<br>
<form action="{{ asset('views_master_yosi/tambah_proses_yosi') }}" method="POST">
@csrf
<div class="mb-3 row">
    <label for="id_perkiraan" class="col-sm-2 col-form-label">Id Perkiraan</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="id_perkiraan" name="id_perkiraan">
    </div>
</div>
<div class="mb-3 row">
    <label for="nomor_perkiraan" class="col-sm-2 col-form-label">Nomor Perkiraan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nomor_perkiraan" name="nomor_perkiraan">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_perkiraan" class="col-sm-2 col-form-label">Nama Perkiraan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_perkiraan" name="nama_perkiraan">
    </div>
</div>
<div class="mb-3 row">
    <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="tipe" name="tipe">
    </div>
</div>
<div class="mb-3 row">
    <label for="induk" class="col-sm-2 col-form-label">Induk</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="induk" name="induk">
    </div>
</div>
<div class="mb-3 row">
    <label for="level" class="col-sm-2 col-form-label">Level</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="level" name="level">
    </div>
</div>
<div class="mb-3 row">
    <label for="kelompok" class="col-sm-2 col-form-label">Kelompok</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="kelompok" name="kelompok">
    </div>
</div>
<div class="mb-3 row">
    <label for="normal" class="col-sm-2 col-form-label">Normal</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="normal" name="normal">
    </div>
</div>
<div class="mb-3 row">
    <label for="awal_debet" class="col-sm-2 col-form-label">Awal Debet</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="awal_debet" name="awal_debet">
    </div>
</div>
<div class="mb-3 row">
    <label for="awal_kredit" class="col-sm-2 col-form-label">Awal Kredit</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="awal_kredit" name="awal_kredit">
    </div>
</div>
<div class="mb-3 row">
    <label for="mut_debet" class="col-sm-2 col-form-label">Mut Debet</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="mut_debet" name="mut_debet">
    </div>
</div>
<div class="mb-3 row">
    <label for="mut_kredit" class="col-sm-2 col-form-label">Mut Kredit</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="mut_kredit" name="mut_kredit">
    </div>
</div>
<div class="mb-3 row">
    <label for="sisa_debet" class="col-sm-2 col-form-label">Sisa Debet</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="sisa_debet" name="sisa_debet">
    </div>
</div>
<div class="mb-3 row">
    <label for="sisa_kredit" class="col-sm-2 col-form-label">Sisa Kredit</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="sisa_kredit" name="sisa_kredit">
    </div>
</div>
<div class="mb-3 row">
    <label for="rl_debet" class="col-sm-2 col-form-label">RL Debet</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="rl_debet" name="rl_debet">
    </div>
</div>
<div class="mb-3 row">
    <label for="rl_kredit" class="col-sm-2 col-form-label">RL Kredit</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="rl_kredit" name="rl_kredit">
    </div>
</div>
<div class="mb-3 row">
    <label for="nrc_debet" class="col-sm-2 col-form-label">NRC Debet</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="nrc_debet" name="nrc_debet">
    </div>
</div>
<div class="mb-3 row">
    <label for="nrc_kredit" class="col-sm-2 col-form-label">NRC Kredit</label>
    <div class="col-sm-10">
    <input type="integer" class="form-control" id="nrc_kredit" name="nrc_kredit">
    </div>
</div>
<input type="submit" value="Simpan">
</form> 

@endsection