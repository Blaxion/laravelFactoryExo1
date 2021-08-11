@extends('layout.index')
@section('main')
    <p class='text-center mt-5 directory display-4'>Here you can update type of formation</p>
    <section>
        <div class="container mt-5">
            <form action="/typeformation" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection