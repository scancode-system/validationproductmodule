<div class="alert alert-info" role="alert">
    <strong>Dados obrigatórios:</strong> descricao, codigo, codigo_2, preco, categoria, disponivel_atual, data_atual
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
            <span data-toggle="tooltip" data-placement="top" title="Nome do produto que o descreve">descricao</span>
        </td>
        <td>Texto</td>
        <td>N/A</td>
        <td>255</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Codigo de barras">codigo</span>
        </td>
        <td>Texto</td>
        <td>N/A</td>
        <td>40</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Codigo referencia do produto">codigo_2</span>
        </td>
        <td>Texto</td>
        <td>N/A</td>
        <td>40</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Preco padrao do produto">preco</span>
        </td>
        <td>Numerico (Duas casas decimais)</td>
        <td>0,1</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Preco varejo, depedendo do cliente, sera aplicado esta tabela de preco">preco_varejo</span>
        </td>
        <td>Numerico (Duas casas decimais)</td>
        <td>0,1</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Codigo da filial em que o produto pertence">filial</span>
        </td>
        <td>Inteiro</td>
        <td>1</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Titulo da filial em que o produto pertence">filial_descricao</span>
        </td>
        <td>Texto</td>
        <td>N/A</td>
        <td>255</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Quantidade minima que o produto pode ser colocado na sacola">qtd_min</span>
        </td>
        <td>Inteiro</td>
        <td>1</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Determina as quantidades validas em que o produto pode ser colocado na sacola, caso o multiplo seja 1, toda quantidade inteira positiva sera valiada">multiplo</span>
        </td>
        <td>Inteiro</td>
        <td>1</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Limitar a porcentagem de desconto que um produto pode receber, sobrescrevendo qualquer tipo de desconto aplicado">desconto_max</span>
        </td>
        <td>Inteiro</td>
        <td>0</td>
        <td>N/A</td>
    </tr>
        <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Bloqueia qualquer tipo de desconto">desconto_bloquear</span>
        </td>
        <td>Inteiro</td>
        <td>0</td>
        <td>1</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Aplicaç~ao do imposto IPI">ipi</span>
        </td>
        <td>Numerico (duas casas decimais)</td>
        <td>0</td>
        <td>100</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Codigo do produto base">produto_base</span>
        </td>
        <td>Texto</td>
        <td>N/A</td>
        <td>40</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Estoque atual, que possui no momento da feira">disponivel_atual</span>
        </td>
        <td>Inteiro</td>
        <td>0</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Data previsto para o despacho do produto do estoque atual">data_atual</span>
        </td>
        <td>Texto em formato data (dd/mm/yyyy)</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Estoque futuro, que obtera numa data futura">disponivel_futuro</span>
        </td>
        <td>Inteiro</td>
        <td>0</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Data previsto para o despacho do produto do estoque futuro">data_futuro</span>
        </td>
        <td>Texto em formato data (dd/mm/yyyy)</td>
        <td>N/A</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Descricao da cor de um determinado produto">cor</span>
        </td>
        <td>Texto</td>
        <td>N/A</td>
        <td>255</td>
    </tr>
    <tr>
        <td scope="row">
            <span data-toggle="tooltip" data-placement="top" title="Categoria em que o produto pertence">categoria</span>
        </td>
        <td>Texto</td>
        <td>N/A</td>
        <td>255</td>
    </tr>
</tbody>
</table>