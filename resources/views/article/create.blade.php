@extends('layouts.app')

@section('title',  'Новая статья' )

@section('content')
    <h1 class="text-4xl pb-4 border-b-2 border-gray-600">Новая статья</h1>

    @if ($errors->any())
        <div role="alert" class="my-2">
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                Ошибка
            </div>
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                <div class="alert alert-danger">
                    <p>Валидация не пройдена</p>
                </div>
            </div>
        </div>
    @endif

    <form class="w-full py-6" action="" method="POST">
        @csrf
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="title">
                    Заголовок
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="@error('title') border-red-400 @enderror
                bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4
                text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800"
                       id="title" name="title" type="text" value="{{ old('title') }}">
                @error('title')
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                     role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="author">
                    Автор
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="@error('author') border-red-400 @enderror
                bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4
                text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800"
                       id="author" name="author" type="text" value="{{ old('author') }}">
                @error('author')
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                     role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="brief">
                     Бриф
                </label>
            </div>
            <div class="md:w-2/3">
                <textarea class="@error('brief') border-red-400 @enderror
                bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4
                text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800"
                          id="brief" name="brief" >{{ old('brief') }}</textarea>
                @error('brief')
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                     role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="fulltext">
                    Текст
                </label>
            </div>
            <div class="md:w-2/3">
                <textarea class="@error('fulltext') border-red-400 @enderror
                bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4
                text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800"
                          id="fulltext" name="fulltext" rows="20">{{ old('fulltext') }}</textarea>
                @error('fulltext')
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                     role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
                <button class="cursor-pointer shadow bg-gray-800 hover:bg-gray-800 focus:shadow-outline focus:outline-none
                text-white font-bold py-2 px-4 rounded" type="submit">
                    Создать статью
                </button>
            </div>
        </div>
    </form>

@endsection
