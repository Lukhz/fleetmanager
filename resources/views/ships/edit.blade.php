@extends('layouts.layout')

@section('content')
        <h1>Schiff hinzufügen</h1>
        @include('snippets.error')
        {!! Form::model($entity, ['url' => 'ships/update/'.$entity->id]) !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Schiffsname...']) !!}
            <br/>
            {!! Form::text('brt', null, ['class'=>'form-control', 'placeholder'=>'BRT...']) !!}
            <br/>
            {!! Form::text('deepness', null, ['class'=>'form-control', 'placeholder'=>'deepness']) !!}
            <br/>
            {!! Form::text('decks', null, ['class'=>'form-control', 'placeholder'=>'decks']) !!}
            <br/>
            {!! Form::text('ps', null, ['class'=>'form-control', 'placeholder'=>'ps']) !!}
            <br/>
            {!! Form::text('propeller', null, ['class'=>'form-control', 'placeholder'=>'propeller']) !!}
            <br/>
            {!! Form::text('patrol', null, ['class'=>'form-control', 'placeholder'=>'patrol']) !!}
            <br/>
            {!! Form::select('hersteller_id', $herstellers, null, ['class'=>'form-control', 'placeholder'=>'hersteller']) !!}
            <br/>
            {!! Form::select('modell_id', $modells, null, ['class'=>'form-control', 'placeholder'=>'modell']) !!}
            <br/>
            {!! Form::submit('Speichern', ['class'=>'btn btn-success']) !!}
            <a href="{{url('ships')}}" class="btn btn-danger">Abbrechen</a>

        {!! Form::close() !!}
@endsection
