@extends('layouts.app')

@section('title', 'Список статей')

@section('content')


    <div class="flex justify-between pb-2 border-b-2 border-gray-600">
        <h1 class="text-4xl ">Список статей</h1>
        <a href="{{ url('article/new') }}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4
        focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-gray-800
        dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Добавить новую статью</a>
    </div>

    <div class="articles pt-4 pb-8 flex flex-col divide-y-1  divide-gray-200">
    @foreach ($articles as $article)
        <div class="article py-3">
            <p class="title text-xl">{{ $article->title }}</p>
            <p class="author text-sm text-gray-500">{{ $article->author }}</p>
            <p class="brief pb-3">{{ $article->brief }}</p>
            <a href="{{ url('article', $article->id) }}" class="inline-block text-white bg-gray-800
            hover:bg-gray-900 focus:outline-none focus:ring-4
             focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 dark:bg-gray-800
             dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Подробнее</a>
        </div>
    @endforeach
    </div>
    {{ $articles->links() }}
@endsection
