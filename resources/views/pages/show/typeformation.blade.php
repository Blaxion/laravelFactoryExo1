@extends('layout.index')
@section('main')
    <p class='text-center mt-5 directory display-4'>Here is Type of Formation's preview</p>
    <section>
        <div class="container mt-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <p class="card-text">Type of formation: {{$show->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection