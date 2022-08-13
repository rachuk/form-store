@extends('layout')

@section('content')
    <style>
        upper {
            margin-top: 40px;
        }
    </style>
    <div class="card upper">
        <div class="card-header">
            Fill form
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('form.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">name:</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="email">email:</label>
                    <input type="text" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label for="message">message:</label>
                    <input type="text" class="form-control" name="message"/>
                </div>
                <button type="submit" class="btn btn-primary">submit</button>
            </form>
        </div>
    </div>
@endsection
