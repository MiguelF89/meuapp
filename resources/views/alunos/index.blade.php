@extends('layouts.app')

@section('slot')
    <div class="py-12">
        <div class="max=w=7x1 mx-auto sm:px-6 lg:px-8">
              <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h1 class="text-2x1 font-semibold text-gray-800 dark:text-gray-200 mb-6">
                        Lista de Alunos
                    </h1>
                    <a href="{{route('alunos.create')}}"
                    class="bg-blue-500 houver:bg-blue-700 text-white font-bold py-2 px4 rounded mb-4">
                        Novo Aluno
                    </a>

                    <div class="overflow-x-auto py-3">
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider"> 
                                        Nome
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider"> 
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider"> 
                                        Matricula
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider"> 
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($alunos as $alunos)

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $alunos->nome }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $alunos->email }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $alunos->matricula }}
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>      
            </div>      
        </div>
    </div>
@endsection 