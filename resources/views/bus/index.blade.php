<!-- resources/views/bus/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div>
            <a href="/bus/create" class="btn btn-primary text-right">Back</a>
        </div>
    </div>
</div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <h2>Data Bus</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Perusahaan</th>
                            <th>Merk Mobil</th>
                            <th>Model Mobil</th>
                            <th>Foto</th>
                            <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($buses as $bus)
                            <tr>
                                <td>{{ $bus->id }}</td>
                                <td>{{ $bus->nama_perusahaan }}</td>
                                <td>{{ $bus->merk_mobil }}</td>
                                <td>{{ $bus->model_mobil }}</td>
                                <td>
                                    @if($bus->foto)
                                        <img src="{{ asset('uploads/foto_buses/' . $bus->foto) }}" alt="Foto Bus" style="max-width: 100px;">
                                    @else
                                        Tidak ada foto
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('bus.destroy', $bus->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
