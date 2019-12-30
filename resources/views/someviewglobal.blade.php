@extends('layouts.app')

@section('content')


<div class="container-fluid">          

        <div class="title m-b-md">
                Listado de Posts General
        <div>

        <table border=1 class="card flex-center container-fluid">
                <tr>
                    <th>UserId</th>
                    <th>Id Entrada</th>
                    <th>Titulo de la Entrada</th>
                    <th>Mensaje del Post</th>
                </tr>
            @foreach($posts as $post)
                <tr>
                    <td style="padding-left:15px; padding-right: 15px">{{ $post->userId}}</td>
                    <td style="padding-left:15px; padding-right: 15px"><a href="/json-api/{{$post->id}}">{{ $post->id}}</a></td>
                    <td style="padding-left:15px; padding-right: 15px"><a href="/json-api/{{$post->id}}">{{ $post->title}}</a></td>
                    <td style="padding-left:15px; padding-right: 15px">{{ $post->body}}</td>
                </tr>
            @endforeach
            
        </table>

        
    
</div>

@endsection