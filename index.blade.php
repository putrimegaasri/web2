@extends('layout/main')

@section('title','Roster Kuliah')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-15">
            <h1 class="mt-3">Roster Kuliah</h1>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            <table class="table table-dark">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama Dosen</th>
                    <th scope="col">Mata Kuliah</th>
                  </tr>
                </thead>    
                <tbody>
                @foreach( $roster as $roster )
                    <tr>
                    <th scope="row">{{ $loop->literation }}</th>
                    <td>{{ $roster->kode}}</td>
                    <td>{{ $roster->namadosen }}</td>
                    <td>{{ $roster->matakuliah }}</td>
                    <td>
                    <a href="/roster/{{ $roster->id }}" class="badge badge-info">Detail</a>
                    </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            
        

            <a href="/roster/create" class="btn btn-primary my-3">create</a>

        </div>
    </div>
</div>
@endsection