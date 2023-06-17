
<h4>Resultados</h4>
<table class="table table-responsive table-striped">
    <thead>
    <tr>
        <th>Consultor</th>
        <th>Receita Líquida</th>
        <th>Costo Fijo</th>
        <th>Comissão</th>
        <th>Lucro</th>
    </tr>
    </thead>
    <tbody>
    @if (isset($results))
        @foreach ($results as $result)
            <tr>
                <td>{{ $result['consultor']->no_usuario }}</td>
                <td>{{ $result['receitaLiquida'] }}</td>
                <td>{{ $result['custoFixo'] }}</td>
                <td>{{ $result['comissao'] }}</td>
                <td>{{ $result['lucro'] }}</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
