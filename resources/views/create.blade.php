@extends('layout')

@section('content')
    <div class="card">
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
                    <input type="text" placeholder="input name" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" placeholder="input email" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label for="quantity">message :</label>
                    <textarea type="text" placeholder="input message" class="form-control" name="message"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
