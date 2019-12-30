@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tus Posts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col align-self-center-card">
                        <h2>Bienvenid@ {{ Auth::user()->name }}, esta es la selección de posts que hemos hecho para ti!</h2>
                    </div>
                                        
                    <div class="col align-self-center-card"><a href={{"/json-api"}}><h4> Mis posts posts</h4></a></div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
