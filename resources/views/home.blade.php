@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12 col-sg-10">
            @if(Auth::user()->role == 'admin')
            <div class="card">
                <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <div class="card">
                            <h5 class="card-header">Aktualności</h5>
                            <div class="card-body">
                              <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="card">
                            <h5 class="card-header">Konsultanci</h5>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="card">
                            <h5 class="card-header">Praca</h5>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="card">
                                <h5 class="card-header">Klienci i referencje</h5>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                        </div>   
                        <div class="card">
                                <h5 class="card-header">Użytkownicy</h5>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                        </div>                       
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
