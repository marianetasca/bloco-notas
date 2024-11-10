@extends('layouts.app')

@section('slot')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ route('notas.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="titulo" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Título</label>
                        <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600" required>
                    </div>

                    <div class="mb-4">
                        <label for="conteudo" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Conteúdo</label>
                        <textarea name="conteudo" id="conteudo" rows="4"
                                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600" required>{{ old('conteudo') }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="categoria_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Categoria</label>
                        <select name="categoria_id" id="categoria_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600" required>
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Tags</label>
                        <div class="grid grid-cols-3 gap-4">
                            @foreach($tags as $tag)
                                <div class="flex items-center">
                                    <input type="checkbox" name="tags[]" id="tag_{{ $tag->id }}" value="{{ $tag->id }}"
                                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <label for="tag_{{ $tag->id }}" class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                                        {{ $tag->nome }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Criar Nota
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
