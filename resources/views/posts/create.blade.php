@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">       
                <div class="card-body">
                    
                    <form method="POST" action="/posts">
                        @csrf
                            <input type="text" name="title"></input>
                            <textarea name="description"></textarea>

                            <input type="submit">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
