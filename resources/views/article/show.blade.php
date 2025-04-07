@extends('layouts.app')

@section('title',  $article->title )

@section('content')



    <h1 class="text-4xl pb-2 border-b-2 border-gray-600">{{ $article->title }}</h1>

    @if (session('success'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                    <p class="font-bold">Поздравляем</p>
                    <p class="text-sm">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    @endif

    <div class="article pt-4 pb-8 flex flex-col divide-y-1  divide-gray-200">

        <div class="article py-3">
            <span class="author text-sm text-gray-500">{{ $article->author }}</span>

            <p class="brief pb-3">{{ $article->fulltext }}</p>
            <span class="date block text-sm text-gray-500 text-right">{{ $article->created_at->format('d m Y - H:i:s') }}</span>
        </div>

    </div>

@endsection
