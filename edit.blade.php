@extends('layout/main')

@section('title','Form edit roster')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Edit Roster</h1>
            
    <form method="post" action="/roster/{{ $roster->id }}">
    @method('patch')
    @csrf
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" id="kode" placeholder="Masukan kode" name="kode" value="{{ $roster->kode }}">
        </div>
        <div class="form-group">
            <label for="namadosen">Nama Dosen</label>
            <input type="text" class="form-control" id="namadosen" placeholder="Masukan namadosen" name="namadosen" value="{{ $roster->namadosen }}">
        </div>
        <div class="form-group">
            <label for="matakuliah">Mata Kuliah</label>
            <input type="text" class="form-control" id="matakuliah" placeholder="Masukan matakuliah" name="matakuliah" value="{{ $roster->matakuliah }}">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>

        </div>
    </div>
</div>
@endsection