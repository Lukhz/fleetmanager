@extends('layouts.layout')

@section('content')
        <h1>Alle Modells</h1>
        {{ $entities->links() }}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Hersteller</th>
                    <th>Bearbeiten<th>
                </tr>
            </thead>
            <tbody>
                @foreach($entities as $index=>$modell)
                    <tr>
                        <td>{{ $modell->name}}</td>
                        <td>@if($modell->hersteller_id){{$modell->hersteller->name}}@else - @endif</td>
                        <td>
                            <a href="{{url('modells/show/'.$modell->id)}}" class="btn btn-success">Show</a>
                            <a href="{{url('modells/edit/'.$modell->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('modells/delete/'.$modell->id)}}" class="btn btn-danger">Del</a>
                        </td>
                    </tr>   
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td>
                        <a href="{{url('modells/add')}}" class="btn btn-success">Add</a>
                    </td>
                </tr>   
            </tfoot>
        </table>
        {{ $entities->links() }}
@endsection 