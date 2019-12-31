
@extends('layouts.app')

@section('content')

            <div class="container">
                 <div class="card">
                    <div class="card-header">{{ $post->userId}} | {{ $post->title}}   </div>

                        <div class="card-body">
                    
                        {{ $post->body}}

                        </div>
                    </div>
            </div>
         
 
        @endsection