<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            Alumnos
        </h1>
    </x-slot>
    <div class="py-6">
        <div class="flex flex-col items-center mt-4">
            <div class="border border-gray-200 shadow">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre</th>
                            <th  class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($alumnos as $alumno)
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        <a href="{{ route('alumnos.show', $alumno) }}">
                                            {{ $alumno->nombre }}
                                        </a>
                                    </div>
                                </td>
                                <td class="px-6 py-4 inline-flex">
                                    <form action="{{ route('alumnos.edit', $alumno) }}" method="GET">
                                        <button
                                        class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">
                                            Editar
                                        </button>
                                    </form>
                                    <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                            Borrar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex justify-center mt-2">
                <a href="{{ route('alumnos.create') }}">
                    <button
                    class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">
                        Añadir nuevo alumno
                    </button>
                </a>
            </div>
        </div>

</x-app-layout>
