<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            Criterios de {{ $alumno->nombre }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="flex flex-col items-center mt-4">
            <div class="border border-gray-200 shadow">
                @if ($alumno->notas->isNotEmpty())
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Criterio Evaluación</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Descripción</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nota</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($alumno->notas as $nota)
                                <tr>
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $nota->ccee->ce }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $nota->ccee->descripcion }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $nota->nota }}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="bg-red-100 rounded-lg p-4 mt-4 mb-4 text-sm text-red-700 w-96 text-center"
                        role="alert">
                        {{ $alumno->nombre }} no tiene notas asignadas.
                    </div>
                @endif
            </div>
        </div>
</x-app-layout>
