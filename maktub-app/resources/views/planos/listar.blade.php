<x-layout title="layout">
    <div class="container">
    <table class="table">
        @foreach ($planos as $plano)
        <tr>
            <td>{{$plano->operadora}}</td>
            <td>{{$plano->nome}}</td>
            <td><a href="/planos/{{$plano->id}}/editar/"><img src="{{asset('assets/img/editar.png')}}" alt="" width="24px" height="24px"></a>
                <a href="/planos/deletar/{{$plano->id}}" ><img src="{{asset('assets/img/excluir_lixeira.png')}}" alt="" width="24px" height="24px"></a>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="/planos/cadastro" class="btn btn-primary">Novo Plano</a>
    </div>

</x-layout>