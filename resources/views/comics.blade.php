@extends('layouts.app')
@section('content')
    <div class="wrapper pb-4">
        <div class="container">
            <div class="row row-cols-6">
                @foreach ($comics as $single_comics)
                    <div class="col">
                        <div class="card mt-4 h-100">
                            <img src="{{ $single_comics['thumb'] }}" alt="">
                            <div class="card-body">
                                <h6 class="card-title">{{ $single_comics['series'] }}</h6>
                                <p>Price: {{ $single_comics['price'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
