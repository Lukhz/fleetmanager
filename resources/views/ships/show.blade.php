@extends('layouts.layout')

@section('content')
        <h1>Das Schiff "{{ $entity->name}}"</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>BRT</th>
                    <th>deepness</th>
                    <th>decks</th>
                    <th>ps</th>
                    <th>propeller</th>
                    <th>patrol</th>
                    <th>Bearbeiten</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <th>{{ $entity->name}}</th>
                        <th>{{ $entity->brt}}</th>
                        <td>{{ $entity->deepness}}</td>
                        <td>{{ $entity->decks}}</td>
                        <td>{{ $entity->ps}}</td>
                        <td>{{ $entity->propeller}}</td>
                        <td>{{ $entity->patrol}}</td>
                        <th></th>
                    </tr>   
                
            </tbody>
        </table>
@endsection
