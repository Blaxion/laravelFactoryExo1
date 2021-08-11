@extends('layout.index')
@section('main')
    <p class='text-center mt-5 directory display-4'>Here you can update Batiment</p>
    <section>
        <div class="container mt-5">
            <form action="/batiment/{{$edit->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" value='{{$edit->name}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" name="description" value='{{$edit->description}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection