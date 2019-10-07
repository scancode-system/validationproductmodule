<div class="alert alert-info" role="alert">
    <strong>Dados obrigatórios:</strong> descricao
</div>
<table class="table table-bordered">
  <thead>
    <tr>
        <th scope="col">Campo</th>
        <th scope="col">Tipo</th>
        <th scope="col">Min</th>
        <th scope="col">Max</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Número identificador do pagamento, código do pagamento">id_condicao_pagamento</span>
        </td>
        <td>Inteiro</td>
        <td>1</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Título do pagamento que descreve qual pagamento será"><strong>descricao</strong></span>
        </td>
        <td>Texto</td>
        <td>N/A</td>
        <td>30</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Desconto em porcentagem dado a um pedido caso seja este pagamento escolhido">desconto</span>
        </td>
        <td>Inteiro</td>
        <td>0</td>
        <td>100</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Valor minimo para que um pedido seja concluído neste pagamento">valor_minimo</span>
        </td>
        <td>Numérico (Duas casas decimais)</td>
        <td>0</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Acrescimo em porcentagem dado a um pedido caso seja este pagamento escolhido">acrescimo</span>
        </td>
        <td>Inteiro</td>
        <td>0</td>
        <td>100</td>
    </tr>
</tbody>
</table>