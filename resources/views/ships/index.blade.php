@extends('layouts.layout')

@section('content')
        <h1>Alle Schiffe</h1>
        {{ $entities->links() }}
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
                    <th>Modell</th>
                    <th>Hersteller<th>
                    <th>Bearbeiten</th>
                </tr>
            </thead>
            <tbody>
                @foreach($entities as $index=>$ship)
                    <tr>
                        <td>{{ $ship->name}}</td>
                        <td>{{ $ship->brt}}</td>
                        <td>{{ $ship->deepness}}</td>
                        <td>{{ $ship->decks}}</td>
                        <td>{{ $ship->ps}}</td>
                        <td>{{ $ship->propeller}}</td>
                        <td>{{ $ship->patrol}}</td>
                        <td>@if($ship->modell_id){{$ship->modell->name}}@else - @endif</td>
                        <td>@if($ship->modell->hersteller_id){{$ship->modell->hersteller->name}}@else - @endif</td>
                        <td>
                            <a href="{{url('ships/show/'.$ship->id)}}" class="btn btn-success">Show</a>
                            <a href="{{url('ships/edit/'.$ship->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('ships/delete/'.$ship->id)}}" class="btn btn-danger">Del</a>
                        </td>
                    </tr>   
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="{{url('ships/add')}}" class="btn btn-success">Add</a>
                    </td>
                </tr>   
            </tfoot>
        </table>
        {{ $entities->links() }}
@endsection 