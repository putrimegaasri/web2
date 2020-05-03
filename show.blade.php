@extends('layout/app')

@section('title','Profile Siswa')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Profile Siswa</h1>
            <div class="row no-gutters">
    
  
    <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title"><b>{{ $siswa->npm }}</b></h4>
              <p class="card-text">{{ $siswa->nama }}</p>
              <p class="card-text">{{ $siswa->kelas }}</p>
             


              <a href="{{ $siswa->id }}/edit" class="btn btn-primary">Edit</a>
              
              <form action="{{ $siswa->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <a href="/siswa" class="card-link">back<<</a>
            </div>
          </div>

        </div>
    </div>
</div>
@endsection