<x-layout title="Planos">
    <div class="container">
        <form action="/planos/salvar" method="post">
            <h1>Planos:</h1><br><br>

            <label class="form-label" for="operadora">Selecione uma Operadora</label><br>
            <select name="nome-operadora" id="" class="form-select">
                <option value="Bradesco">Bradesco</option>
                <option value="Allianz">Allianz</option>
                <option value="Porto Seguros">Porto S.</option>
            </select><br>

            <label class="form-label" for="nome-plano">Nome do Plano</label><br>
            <input type="text" name="nome-plano" class="form-control"><br>

            <label class="form-label" for="coparticipacao-percent">Coparticipação em %</label><br>
            <input type="number" name="coparticipacao-percent" class="form-control"><br>


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
            <label for="valor-plano">Valor do plano em R$</label><br>
            <input class="form-control" type="text" name="valor-plano" id=""><br>

            <div class="form-check form-switch">
            <label for="visivel-pag-inicial">Visível na Página Inicial?</label>
            <input class="form-check-input" type="checkbox" checked role="switch" id="flexSwitchCheckDefault" name="visivel" id="" data-toggle="toggle">
            </div>
            
            <br>
            <input type="submit" value="Enviar" class="btn btn-primary">

        </form>
    </div>

</x-layout>