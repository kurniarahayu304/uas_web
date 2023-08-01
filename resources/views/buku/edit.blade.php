@extends('layout1.main2')
@section('content')


<h4><b>Edit Data </b></h1>
<br>
<form action="{{ url('buku/edit_proses') }}" method="POST">
@csrf

<div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Nama Buku</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama" value="{{$buku->nama}}" name="nama">
    <input type="hidden" value="{{$buku->id}}" name="idbuku">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Jenis</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama" value="{{$buku->jenis}}" name="jenis">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Harga</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama" value="{{$buku->harga}}" name="harga">
    </div>
</div>
<div class="mb-3 row">
    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="penerbit" value="{{$buku->penerbit}}" name="penerbit">
    </div>
</div>
<div class="mb-3 row">
    <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="pengarang" value="{{$buku->pengarang}}" name="pengarang">
    </div>
</div>
<input type="submit" value="Simpan">
</form> 
@endsection