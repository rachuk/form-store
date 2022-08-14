@extends('layout')

@section('content')
    @foreach($forms as $form)
        <div class="alert alert-info">
            <h2>{{$form->name}}</h2>
            <h3>{{$form->email}}</h3>
            <p>{{$form->message}}</p>
            <p><small>{{$form->created_at}}</small></p>
        </div>
    @endforeach
@endsection
