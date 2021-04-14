@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">       
                <div class="card-body">
                    
                    <form method="POST" action="/posts">
                        @csrf
                        <div class="from-group-row">
                            <div class="col-md-6"> 
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title"></input>

                                <label for="description">Description</label>
                                <textarea name="description" class="form-control"></textarea>

                                <input type="submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
