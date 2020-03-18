@extends('_layouts.master')

@section('body')

<div class="flex items-end"
    style="background: linear-gradient(0deg, rgba(71, 50, 136, 0.8), rgba(71, 50, 136, 0.8)), url('{{ $page->cover }}') no-repeat center center / cover; min-height: 450px;">
    <div class="container mb-16">
        <div class="row">
            <div class="col-8">
                <h1 class="font-bold text-4xl text-yellow-500">{{ $page->title }}</h1>
                <p class="font-medium text-base text-white">Supported by <b>{{ $page->sponsor }}</b></p>
            </div>
        </div>
    </div>
</div>

<div class="flex-row">
    <div class="container text-gray-800">
        <div class="row mt-10 items-center">
            @foreach ($page->images as $images)
            <div class="col-4 px-10 my-10">
                <img src="{{ $images }}" class="w-full h-auto" alt="">
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection