@extends('layouts.app')

@section('content')
<div class="content">          

        Someview 
        <table border=1>
            <tr><th>UserId</th>
            <th>Titulo</th>
            <th>Body</th></tr>
        @foreach($posts as $post)
            <tr>
                
            <td>{{ $post->userId}}</td>
            <td><a href="/json-api/{{$post->id}}">{{ $post->title}}</a></td>
            <td>{{ $post->body}}</td>
        </tr>
        @endforeach
        </table>

        
    
</div>

@endsection