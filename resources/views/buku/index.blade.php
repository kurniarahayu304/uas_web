@extends('layout1.main2')
@section('content')

<h4><b>Data Master</b></h4>
<br>
<a href="{{ url('buku/tambah')  }}">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>Nama Buku</td>
    <td><b>Jenis Buku</td>
    <td><b>Harga Buku</td>
    <td><b>Penerbit</td>
    <td><b>Pengarang</td>
    <td><b>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($buku as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->nama }}</td>
    <td>{{ $rows->jenis }}</td>
    <td>{{ $rows->harga }}</td>
    <td>{{ $rows->penerbit }}</td>
    <td>{{ $rows->pengarang }}</td>
    <td>
        <a href="{{ url('buku/edit/'.$rows->id ) }}">Edit</a>
        <a href="{{ url('buku/delete/'.$rows->id ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection