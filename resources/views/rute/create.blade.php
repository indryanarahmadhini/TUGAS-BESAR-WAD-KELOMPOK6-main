@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menambahkan Rute Bus</div>

                <div class="card-body justify-content-center" >
                    <form action="{{ route('rute.store') }}" method="post">
                    @csrf

                    <div class="form-group m-2">
                        <label for="titik_jemput">Titik Keberangkatan :</label>
                        <input class="form-control" type="text" name="titik_jemput" placeholder="Masukkan titik Keberangkatan" required>
                    </div>
                    <div class="form-group m-2">
                        <label for="tujuan">Tujuan : </label>
                        <input class="form-control" type="text" name="tujuan" placeholder="Masukkan Tujuan" required>
                    </div>
                    <button type="submit" class="btn btn-primary m-2">Tambah Rute</button>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Rute Bus</div>
                    </div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Titik Keberangkatan</th>
                                <th scope="col">Tujuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rutes as $rute)
                                <tr>
                                    <td>{{ $rute->id }}</td>
                                    <td>{{ $rute->titik_jemput }}</td>
                                    <td>{{ $rute->tujuan }}</td>
                                    <td>
                                        <a href="{{ route('rute.edit', $rute->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('rute.destroy', $rute->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
