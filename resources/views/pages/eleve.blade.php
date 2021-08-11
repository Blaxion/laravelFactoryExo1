@extends('layout.index')
@section('main')
    <a class="btn btn-success" href="eleve/create">CREATE</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job Seeker</th>
                <th scope="col">Utilities</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eleves as $eleve)
                <tr>
                    <th scope="row">{{ $eleve->id }}</th>
                    <td>{{ $eleve->name }}</td>
                    <td>{{ $eleve->lastname}}</td>
                    <td>{{ $eleve->age }}</td>
                    <td>{{ $eleve->jobseeker==1?'yes':'no'}}</td>
                    <td>
                        <a class="btn btn-info " href="eleve/{{ $eleve->id }}">SHOW</a>
                        <form action="eleve/{{ $eleve->id }}" method='POST'>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ">DELETE</button>
                        </form>
                        <a class="btn btn-warning " href="eleve/{{ $eleve->id }}/edit">EDIT</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
