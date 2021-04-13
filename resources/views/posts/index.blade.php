@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">       
                    <a class="btn button btn-info" href="/posts/create">Create New</a>
                    <div class="card-body">

                        
                        <table class="table">
                            <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th> TITLE </th>
                                        <th> DESCRIPTION </th>
                                        <th>  </th>
                                    </tr>
                            </thead>
                            <tbody>
                                @foreach ($post as $post)
                                <tr>
                                        <td> {{ $post->id }} </td>
                                        <td> {{ $post->title }} </td>
                                        <td> {{ $post->description }} </td>
                                        <td> <a  href="/users/{{$post->id}}"> View </a> </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection