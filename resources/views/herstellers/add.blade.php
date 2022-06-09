@extends('layouts.layout')

@section('content')
        <h1>Hersteller hinzufügen</h1>
        @include('snippets.error')

        {!! Form::open(['url' => 'herstellers/save']) !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Herstellersname...']) !!}
            <br/>
            {!! Form::submit('Speichern', ['class'=>'btn btn-success']) !!}
            <a href="{{url('herstellers')}}" class="btn btn-danger">Abbrechen</a>

        {!! Form::close() !!}
@endsection
