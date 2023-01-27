<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            Editar {{ $alumno->nombre }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200 flex flex-col items-center">
                <form class="mt-6" action="{{ route('alumnos.update', $alumno) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label class="block  mt-2 mb-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                            Nombre:
                            <input type="text" name="nombre" value="{{$alumno->nombre}}"
                                class="px-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                        </label>
                        @error('nombre')
                            <br>
                            <p class="flex items-center font-semibold tracking-wide text-red-500 text-xs">*{{ $message }}</p>
                            <br>
                        @enderror
                    </div>

                    <button type="submit"
                        class="ml-24 focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-sm px-4 py-2 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">
                        Editar alumno
                    </button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>

