<x-layout title="layout">

    <ul class="list-group">
        @foreach ($planos as $plano)
        <li class="list-group-item">{{ $plano->nome-plano }}</li>
            
        @endforeach

    </ul>

</x-layout>