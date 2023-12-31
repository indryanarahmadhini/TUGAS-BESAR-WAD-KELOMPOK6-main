<!-- File: index.blade.php (di dalam folder resources/views/penumpangs) -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-body text-center">
            <a href="/penumpang/create" class="btn btn-primary m-2">Add User</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Penumpang</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Penumpang</th>
                                    <th>Tanggal Lahir</th>
                                    <th>No. Telepon</th>
                                    <th>Email</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($penumpangs as $penumpang)
                                    <tr>
                                        <td>{{ $penumpang->id }}</td>
                                        <td>{{ $penumpang->nama_penumpang }}</td>
                                        <td>{{ $penumpang->tanggal_lahir_penumpang }}</td>
                                        <td>{{ $penumpang->no_telepon_penumpang }}</td>
                                        <td>{{ $penumpang->email_penumpang }}</td>
                                        <td>
                                            @if ($penumpang->foto_penumpang)
                                                <img src="{{ asset('uploads/foto_penumpang/' . $penumpang->foto_penumpang) }}" alt="Foto Penumpang" width="50">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">Tidak ada data penumpang.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
