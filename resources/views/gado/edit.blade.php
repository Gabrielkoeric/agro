<x-layout title="Editar Gado '{{$gado->gado_nome}}'">
    <x-gado.forms :action="route('gado.update', $gado->id_gado)"
                        :brinco="$gado->brinco"
                        :nome="$gado->gado_nome"
                        :datanascimento="$gado->data_nascimento"
                        :mae="$gado->mae"
                        :sexo="$gado->sexo"
                        :ativo="$gado->status"
                        :gados="$gados"
    >
    </x-gado.forms>
</x-layout>