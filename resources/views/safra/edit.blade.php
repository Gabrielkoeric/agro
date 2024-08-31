<x-layout title="Editar Usuario '{{$safra->safra_nome}}'">
    <x-usuario.forms :action="route('safra.update', $safra)"
                        :nome="$safra->safra_nome"
    >
    </x-usuario.forms>
</x-layout>

