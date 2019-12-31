
@extends('layouts.app')

@section('content')

            <div class="container">
                 <div class="card">
                    <div class="card-header">
                        <p>Usuario:  {{ $post->userId}}</p> 
                        <h4>Titulo: </h4>
                        <h5><strong>{{ $post->title}} </strong></h5>
                            <div class="card-body">
                        
                                <h4>{{ $post->body}}</h4>
                            </div>
                    </div>
                 </div>
            </div>
         
 
        @endsection