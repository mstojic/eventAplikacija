@extends('layouts.master')

@section('content')
<div class="row">
@include('components.admin-side-nav')
<div class="control-panel-container container col-lg-10">

    <div class="row mb-2">
        <div class="col-12 px-3">
            <h5 class="float-start control-panel-heading">Korisnici</h5>
            <a class="btn btn-sm btn-success float-end" href="{{ route('admin.users.create') }}" role="button">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </a>
        </div>
    </div>

    <div>
        <table class="table" style="">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Ime</th>
                <th scope="col">Email</th>
                <th scope="col" class="text-end">Operacije</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="text-end">
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.users.edit', $user->id) }}" role="button">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <button type="button" class="btn btn-sm btn-danger" onclick="event.preventDefault();
                        document.getElementById('delete-user-form-{{ $user->id }}').submit()">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </button>
                    <form id="delete-user-form-{{ $user->id }}" action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: none">
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        &nbsp;{{ $users->links() }}
    </div>
</div>
</div>
@stop
