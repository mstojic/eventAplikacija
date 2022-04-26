@extends('layouts.master')

@section('content')
<div class="row">
@include('components.admin-side-nav')
<div class="control-panel-container container col-lg-10">

    <div class="row mb-2">
        <div class="col-12 px-3">
            <h5 class="float-start control-panel-heading">Lokacije</h5>
            <a class="btn btn-sm btn-success float-end" href="{{ route('admin.locations.create') }}" role="button">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </a>
        </div>
    </div>

    <div>
        <table class="table" style="">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Naziv</th>
                <th scope="col" class="text-end">Operacije</th>
                </tr>
            </thead>
            <tbody>
                @foreach($locations as $location)
                <tr>
                <th scope="row">{{ $location->id }}</th>
                <td>{{ $location->name }}</td>
                <td class="text-end">
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.locations.edit', $location->id) }}" role="button">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <button type="button" class="btn btn-sm btn-danger" onclick="event.preventDefault();
                        document.getElementById('delete-location-form-{{ $location->id }}').submit()">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </button>
                    <form id="delete-location-form-{{ $location->id }}" action="{{ route('admin.locations.destroy', $location->id) }}" method="POST" style="display: none">
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        &nbsp;{{ $locations->links() }}
    </div>
</div>
</div>
@stop
