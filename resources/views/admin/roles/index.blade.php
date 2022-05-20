@extends('layouts.master')

@section('content')
<div class="row">
@include('components.admin-side-nav')
<div class="control-panel-container container col-lg-10">

    <div class="row mb-2">
        <div class="col-12 px-3">
            <h5 class="float-start control-panel-heading">Uloge</h5>
            <a class="btn btn-sm btn-success float-end" href="#" data-toggle="modal" data-target="#modalCreate" role="button">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </a>
            @include('admin.roles.modals.create')
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
                @foreach($roles as $role)
                <tr>
                <th scope="row">{{ $role->id }}</th>
                <td>{{ $role->role_name }}</td>
                <td class="text-end">
                    <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#modalEdit-{{$role->id}}" role="button">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    @include('admin.roles.modals.edit')
                    <button type="button" class="btn btn-sm btn-danger" onclick="event.preventDefault();
                        document.getElementById('delete-role-form-{{ $role->id }}').submit()">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </button>
                    <form id="delete-role-form-{{ $role->id }}" action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" style="display: none">
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        &nbsp;{{ $roles->links() }}
    </div>
</div>
</div>
@stop
