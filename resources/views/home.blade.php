<!-- menghubungkan dg view templating master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<!-- section ini di hugungkan dengan fungsi yield dengan key judul_halaman -->
@section('judul_halaman', 'Halaman Home')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
<!-- section ini di hugungkan dengan fungsi yield dengan konten judul_halaman -->
@section('konten')
	<p>Ini Adalah halaman home</p>
	<p>Selamat Datang</p>
@endsection