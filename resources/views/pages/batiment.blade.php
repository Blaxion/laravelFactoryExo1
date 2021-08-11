@extends('layout.index')
@section('main')
    <a class="btn btn-success" href="batiment/create">CREATE</a>
    <form action="batiment/wipe" method='POST'>
        @csrf
        @method('DELETE')
        <button class="btn btn-danger ">Delete All</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Utilities</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($batiments as $batiment)
                <tr>
                    <th scope="row">{{ $batiment->id }}</th>
                    <td>{{ $batiment->name }}</td>
                    <td>{{ $batiment->description }}</td>
                    <td>
                        <a class="btn btn-info " href="batiment/{{ $batiment->id }}">SHOW</a>
                        <form action="batiment/{{ $batiment->id }}" method='POST'>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ">DELETE</button>
                        </form>
                        <a class="btn btn-warning " href="batiment/{{ $batiment->id }}/edit">EDIT</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
