@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Rute</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('rute.update', $rute->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="titik_jemput">Titik Jemput</label>
                                <input type="text" name="titik_jemput" class="form-control" value="{{ $rute->titik_jemput }}">
                            </div>

                            <div class="form-group">
                                <label for="tujuan">Tujuan</label>
                                <input type="text" name="tujuan" class="form-control" value="{{ $rute->tujuan }}">
                            </div>

                            <button type="submit" class="btn btn-primary m-2">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
