@extends('layout.index')
@section('main')
    <p class='text-center mt-5 directory display-4'>Here you can create eleve</p>
    <section>
        <div class="container mt-5">
            <form action="/eleve" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Last Name</label>
                    <input type="text" name="lastname"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Age</label>
                    <input type="number" name="age"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name='jobseeker' class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Job Seeker</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection