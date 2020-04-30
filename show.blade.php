@extends('layout/main')

@section('title','Detail Roster')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Detail Roster</h1>
            <div class="row no-gutters">
              
            <div class="card text-white bg-secondary mb-3" style="max-width: 540px;">
            
            <div class="card-header">Detail</div>
            <div class="row no-gutters">
            <div class="col-md-4">
            </div>
              
              <div class="col-md-8">
                
                <div class="card-body">
            
              <h4 class="card-title"><b>{{ $roster->kode }}</b></h4>
              <p class="card-text">{{ $roster->namadosen }}</p>
              <p class="card-text">{{ $roster->matakuliah }}</p>

              <a href="{{ $roster->id }}/edit" class="btn btn-primary">Edit</a>
              
              <form action="{{ $roster->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <a href="/roster" class="card-link"><b>Back<<</b></a>
            </div>
          </div>

        </div>
    </div>
</div>
@endsection