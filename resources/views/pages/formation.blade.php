@extends('layout.index')
@section('main')
    <a class="btn btn-success" href="formation/create">CREATE</a>
    
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
            @foreach ($formations as $formation)
                <tr>
                    <th scope="row">{{ $formation->id }}</th>
                    <td>{{ $formation->name }}</td>
                    <td>{{ $formation->description }}</td>
                    <td>
                        <a class="btn btn-info " href="formation/{{ $formation->id }}">SHOW</a>
                        <form action="formation/{{ $formation->id }}" method='POST'>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ">DELETE</button>
                        </form>
                        <a class="btn btn-warning " href="formation/{{ $formation->id }}/edit">EDIT</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
