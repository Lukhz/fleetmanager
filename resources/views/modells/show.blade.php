@extends('layouts.layout')

@section('content')
        <h1>Jenes Modell "{{ $entity->name}}"</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Bearbeiten</th>
                    <th>Hersteller</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <th>{{ $entity->name}}</th>
                        <td>@if($entity->hersteller_id){{$entity->hersteller->name}}@else - @endif</td>
                        <th></th>
                    </tr>   
                
            </tbody>
        </table>
@endsection
