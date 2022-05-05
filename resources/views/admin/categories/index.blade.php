@extends('layouts.master')

@section('content')
<div class="row">
@include('components.admin-side-nav')
<div class="control-panel-container container col-lg-10">

    <div class="row mb-2">
        <div class="col-12 px-3">
            <h5 class="float-start control-panel-heading">Kategorije</h5>
            <a class="btn btn-sm btn-success float-end" href="{{ route('admin.categories.create') }}" role="button">
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
                <th scope="col">Opis</th>
                <th scope="col" class="text-end">Operacije</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td class="text-end">
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.categories.edit', $category->id) }}" role="button">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <button type="button" class="btn btn-sm btn-danger" onclick="event.preventDefault();
                        document.getElementById('delete-category-form-{{ $category->id }}').submit()">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </button>
                    <form id="delete-category-form-{{ $category->id }}" action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display: none">
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        &nbsp;{{ $categories->links() }}
    </div>
</div>
</div>
@stop
