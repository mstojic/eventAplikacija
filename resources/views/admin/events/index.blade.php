@extends('layouts.master')

@section('content')
<div class="row">
@include('components.admin-side-nav')
<div class="control-panel-container container col-lg-10">

    <div class="row mb-2">
        <div class="col-12 px-3">
            <h5 class="float-start control-panel-heading">Događaji</h5>
            <a class="btn btn-sm btn-success float-end" href="{{ route('admin.events.create') }}" role="button">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </a>
        </div>
    </div>

    <div class="">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Naziv</th>
                <th scope="col">Opis</th>
                <th scope="col">Datum</th>
                <th scope="col">Kategorije</th>
                <th scope="col" class="text-end">Operacije</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                <th scope="row">{{ $event->id }}</th>
                <td>{{ $event->name }}</td>
                <td>{{ $event->description }}</td>
                <td>{{ $event->date }}</td>
                <td>@foreach($event->categories as $category){{ $category->name}}@if ( !($loop->last) ),@endif
                    @endforeach</td>
                <td class="text-end">
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.events.edit', $event->id) }}" role="button">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <button type="button" class="btn btn-sm btn-danger" onclick="event.preventDefault();
                        document.getElementById('delete-event-form-{{ $event->id }}').submit()">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </button>
                    <form id="delete-event-form-{{ $event->id }}" action="{{ route('admin.events.destroy', $event->id) }}" method="POST" style="display: none">
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $events->links() }}
    </div>
</div>
</div>
@stop
