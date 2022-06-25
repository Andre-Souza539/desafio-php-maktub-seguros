<x-layout title="layout">
    <div class="container">
        
        @if (Request::is('*/editar'))
            
        <form action="/planos/atualizar/{{$plano->id}}" method="post">
            @csrf
            <h1>Editar Plano:</h1><br><br>

            <label class="form-label" for="operadora">Selecione uma Operadora</label><br>
            <select name="operadora" id="" class="form-select">
                <option value="Bradesco">Bradesco</option>
                <option value="Allianz">Allianz</option>
                <option value="Porto Seguros">Porto S.</option>
            </select><br>

            <label class="form-label" for="nome-plano">Nome do Plano</label><br>
            <input type="text" name="nome" class="form-control" value="{{ $plano->nome }}"><br>

            <label class="form-label" for="coparticipacao">Coparticipação em %</label><br>
            <input type="number" name="coparticipacao" class="form-control" value="{{ $plano->coparticipacao }}"><br>


            <label class="form-label" for="cobertura">Cobertura:</label><br>
            <select name="cobertura" id="" class="form-select">
                <option value="Hospitalar">Hospitalar</option>
                <option value="Hospitalar com Obstrética">Hospitalar com Obstrética</option>
                <option value="Ambulatorial+">Ambulatorial + hospital com Obstrética</option>
            </select><br>

            <label class="form-label" for="hospitais">Hospitais:</label><br>
            <input type="checkbox" name="hospitais" value="Hospital Brasil"> Hospital Brasil<br>
            <input type="checkbox" name="hospitais" value="Hospital Albert Einstein"> Hospital Albert Einstein<br>
            <input type="checkbox" name="hospitais" value="Hospital e Maternidade São Luíz"> Hospital e Maternidade São Luíz<br>
            <input type="checkbox" name="hospitais" value="Hospital Hcor"> Hospital Hcor<br>
            <input type="checkbox" name="hospitais" value="Hospital A C Camargo"> Hospital A C Camargo<br>
            <input type="checkbox" name="hospitais" value="Hospital Samaritano Higenópolis"> Hospital Samaritano Higenópolis<br>
            <input type="checkbox" name="hospitais" value="Hospital Infantil Sabará"> Hospital Infantil Sabará<br>

            <br>
            <label for="valor">Valor do plano em R$</label><br>
            <input class="form-control" type="text" name="valor" id="" value="{{ $plano->valor }}"><br>

            <div class="form-check form-switch">
            <label for="visivel">Visível na Página Inicial?</label>
            <input class="form-check-input" type="checkbox" checked role="switch" id="flexSwitchCheckDefault" name="visivel" id="" data-toggle="toggle">
            </div>
            
            <br>
            <label for="reembolso">Reembolso R$</label><br>
            <input class="form-control" type="text" name="reembolso" id="" value="{{ $plano->reembolso }}"><br>

            <br>
            <input type="submit" value="Enviar" class="btn btn-primary">

        </form>
            
        @else
            
        <form action="/planos/salvar" method="post">
            @csrf
            <h1>Planos:</h1><br><br>

            <label class="form-label" for="operadora">Selecione uma Operadora</label><br>
            <select name="operadora" id="" class="form-select">
                <option value="Bradesco">Bradesco</option>
                <option value="Allianz">Allianz</option>
                <option value="Porto Seguros">Porto S.</option>
            </select><br>

            <label class="form-label" for="nome-plano">Nome do Plano</label><br>
            <input type="text" name="nome" class="form-control"><br>

            <label class="form-label" for="coparticipacao">Coparticipação em %</label><br>
            <input type="number" name="coparticipacao" class="form-control"><br>


            <label class="form-label" for="cobertura">Cobertura:</label><br>
            <select name="cobertura" id="" class="form-select">
                <option value="Hospitalar">Hospitalar</option>
                <option value="Hospitalar com Obstrética">Hospitalar com Obstrética</option>
                <option value="Ambulatorial+">Ambulatorial + hospital com Obstrética</option>
            </select><br>

            <label class="form-label" for="hospitais">Hospitais:</label><br>
            <input type="checkbox" name="hospitais" value="Hospital Brasil"> Hospital Brasil<br>
            <input type="checkbox" name="hospitais" value="Hospital Albert Einstein"> Hospital Albert Einstein<br>
            <input type="checkbox" name="hospitais" value="Hospital e Maternidade São Luíz"> Hospital e Maternidade São Luíz<br>
            <input type="checkbox" name="hospitais" value="Hospital Hcor"> Hospital Hcor<br>
            <input type="checkbox" name="hospitais" value="Hospital A C Camargo"> Hospital A C Camargo<br>
            <input type="checkbox" name="hospitais" value="Hospital Samaritano Higenópolis"> Hospital Samaritano Higenópolis<br>
            <input type="checkbox" name="hospitais" value="Hospital Infantil Sabará"> Hospital Infantil Sabará<br>

            <br>
            <label for="valor">Valor do plano em R$</label><br>
            <input class="form-control" type="text" name="valor" id=""><br>

            <div class="form-check form-switch">
            <label for="visivel">Visível na Página Inicial?</label>
            <input class="form-check-input" type="checkbox" checked role="switch" id="flexSwitchCheckDefault" name="visivel" id="" data-toggle="toggle">
            </div>
            
            <br>
            <label for="reembolso">Reembolso R$</label><br>
            <input class="form-control" type="text" name="reembolso" id=""><br>

            <br>
            <input type="submit" value="Enviar" class="btn btn-primary">

        </form>

        @endif

    </div>

</x-layout>