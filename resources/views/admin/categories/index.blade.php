@extends('layouts.app')


@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.categories.show', $category)}}">Visualizza</a>
                    <a class="btn btn-warning" href="{{route('admin.categories.edit', $category)}}">Modifica</a>
                    <form class="d-inline-block" action="{{route('admin.categories.destroy', $category)}}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>
@endsection