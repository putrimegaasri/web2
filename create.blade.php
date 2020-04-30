@extends('layout/main')

@section('title','Roster Kuliah')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Roster Kuliah</h1>
            
    <form method="post" action="/roster">
    @csrf
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" id="kode" placeholder="Masukan kode" name="kode" required>
        </div>
        <div class="form-group">
            <label for="namadosen">Nama Dosen</label>
            <input type="text" class="form-control" id="namadosen" placeholder="Masukan namadosen" name="namadosen">
        </div>
        <div class="form-group">
            <label for="matakuliah">Mata Kuliah</label>
            <input type="text" class="form-control" id="matakuliah" placeholder="Masukan matakuliah" name="matakuliah">
        </div>
        <button type="submit" class="btn btn-primary">create</button>
    </form>

        </div>
    </div>
</div>
@endsection