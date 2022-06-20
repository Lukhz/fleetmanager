@extends('layouts.layout')

@section('content')
        <h1>Modell hinzufügen</h1>
        @include('snippets.error')

        {!! Form::open(['url' => 'modells/save']) !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Herstellersname...']) !!}
            <br/>
            {!! Form::select('hersteller_id', $herstellers, null, ['class'=>'form-control', 'placeholder'=>'hersteller']) !!}
            <br/>
            {!! Form::submit('Speichern', ['class'=>'btn btn-success']) !!}
            <a href="{{url('modells')}}" class="btn btn-danger">Abbrechen</a>

        {!! Form::close() !!}
@endsection
