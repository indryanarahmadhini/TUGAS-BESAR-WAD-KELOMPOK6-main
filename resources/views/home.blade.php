@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-auto">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <div class="container">

                                <div class="card d-inline-block text-center m-2">
                                    <img class="card-img-top mt-3" src="route.png" style="height: 50px; width: 50px" alt="Card image cap">
                                        <div class="card-body text-center">
                                            <a href="/rute/create" class="btn btn-primary m-2">Data Rute</a>
                                        </div>
                                </div>

                                <div class="card d-inline-block text-center m-2">
                                    <img class="card-img-top mt-3" src="front-of-bus.png" style="height: 50px; width: 50px" alt="Card image cap">
                                        <div class="card-body text-center">
                                            <a href="/bus/create" class="btn btn-primary m-2">Data Bus</a>
                                        </div>
                                </div>

                                <div class="card d-inline-block text-center m-2">
                                    <img class="card-img-top mt-3" src="chauffeur.png" style="height: 50px; width: 50px" alt="Card image cap">
                                        <div class="card-body text-center">
                                            <a href="/supir/create" class="btn btn-primary m-2">Data Supir</a>
                                        </div>
                                </div>

                                <div class="card d-inline-block text-center m-2">
                                    <img class="card-img-top mt-3" src="user.png" style="height: 50px; width: 50px" alt="Card image cap">
                                        <div class="card-body text-center">
                                            <a href="/penumpang/index" class="btn btn-primary m-2">Data Penumpang</a>
                                        </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
