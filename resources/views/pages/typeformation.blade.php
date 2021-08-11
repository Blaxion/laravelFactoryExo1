@extends('layout.index')
@section('main')
    <a class="btn btn-success" href="typeformation/create">CREATE</a>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Utilities</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($typeformations as $typeformation)
                <tr>
                    <th scope="row">{{ $typeformation->id }}</th>
                    <td>{{ $typeformation->name }}</td>
                    <td>
                        <a class="btn btn-info " href="typeformation/{{ $typeformation->id }}">SHOW</a>
                        <form action="typeformation/{{ $typeformation->id }}" method='POST'>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ">DELETE</button>
                        </form>
                        <a class="btn btn-warning " href="typeformation/{{ $typeformation->id }}/edit">EDIT</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
