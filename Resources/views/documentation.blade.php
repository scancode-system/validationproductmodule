@extends('portal::layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="card bg-light">
					<div class="card-header">Informações iniciais</div>
					<div class="card-body">
						<p class="card-text">
							No Portal online da Scancode, poderá preparar seu sistema para o ambiente de produção (feira), de forma que o sistema trabalhe com dados integros e sem corromper o sistema.
							Aqui no portal poderá validar os seu sistema ERP de forma que corresponde eficientemente com o nosso sistema, com esta documentação será demonstrado a estrutura necessária para a importação e como estas dados devem ser formatados.
						</p>
						<a href="{{ route('portal.doc.download.sample', $client_validation) }}" class="btn btn-primary">Download da planilha de produtos</a>
					</div>
				</div>
				<h1 class="mb-3">Validação de Produtos</h1>
				<ul>
					<li class="mb-2"><span class="font-weight-bold">Extensão do Arquivo:</span> Os arquivos devem ter o formato de planiha Excel Micorsoft Word com a extensção "xlsx"</li>
					<li class="mb-2">
						<span class="font-weight-bold">Primeira Linha:</span> A primeira linha do arquivo será o <span class="font-weight-bold">cabeçalho</span>, cada coluna conterá um cabeçalho indicando uma determinada propriedade do produto. Atenção quanto a formalização do cabeçalho, todao cabeçalho segue a formatação <i>snake case</i>, isto é letras são em minúsculas é permitido número e cabeçalho com palavras duplas são separadas por underscore "_".
					</li>
					<li class="mb-2"><span class="font-weight-bold">Linhas de registro:</span> Após o cabeçalho, toda linha representará um registro único do seu produto, não há um número limite de produtos para o arquivo, coloque quantos produtos forem necessários, preenchendo de acordo com co cabeçalho.</li>
					<li class="mb-2"><span class="font-weight-bold">Formatação:</span> Toda coluna segue uma determinada formatação, podendo ser alfanúmerica, numérico, número inteiro ou apenas números positivos e até mesmo formatação de data.</li>
				</ul>
				<hr>
				<h1 class="mb-3">Colunas do Cabeçalho</h1>
				<p>
					A seguir é listado todas as colunas com seus respectivos cabeçalhos com as formatações necessárias e propriedades.
				</p>
				<ul class="list-group">
					<li class="list-group-item">
						<span class="font-weight-bold">descricao</span> - [obrigatório, não pode ser vazio, texto, máximo 255 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">descricao_detalhada</span> - [opcional, pode ser vazio, texto]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">codigo</span> - [obrigatório, não pode ser vazio, alfanumérico, máximo 40 caracteres e único para cada registro] - Este campo é destinado para o código de barras
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">codigo_2</span> - [obrigatório, não pode ser vazio, alfanumérico, máximo 40 caracteres e único para cada registro] - Este campo é destinado para a referência do produto
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">preco</span> - [obrigatório, não pode ser vazio, numérico, máximo duas casas decimais, positivo]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">preco_varejo</span> - [opicional, pode ser vazio, numérico, máximo duas casas decimais, positivo]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">filial</span> - [opicional, não pode ser vazio, inteiro, valor mínimo 1]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">filial_descricao</span> - [opicional, pode ser vazio, texto, máximo 255 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">qtd_min</span> - [opicional, não pode ser vazio, inteiro, valor mínimo 1]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">multiplo</span> - [opicional, não pode ser vazio, inteiro, valor mínimo 1]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">desconto_max</span> - [opicional, não pode ser vazio, inteiro, valor mínimo 0]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">desconto_bloquear</span> - [opicional, não pode ser vazio, inteiro, valor entre 0 e 1]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">ipi</span> - [opicional, não pode ser vazio, numérico, máximo duas casas decimais, valor minimo 0]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">produto_base</span> - [opicional, pode ser vazio, inteiro, valor minimo 1]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">disponivel_atual</span> - [obrigatório, não pode ser vazio, inteiro, valor minimo 0]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">data_atual</span> - [obrigatório, não pode ser vazio, data no formato (yyyy-mm-dd)]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">disponivel_futuro</span> - [obrigatório, não pode ser vazio, inteiro, valor minimo 0]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">data_futuro</span> - [obrigatório, não pode ser vazio, data no formato (yyyy-mm-dd)]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">cor</span> - [opicional, pode ser vazio, texto, máximo 255 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">categoria</span> - [obrigatório, não pode ser vazio, texto, máximo 255 caracteres]
					</li>
				</ul>				
			</div>
		</div>
	</div>
</div>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ route('portal.dashboard') }}">Dashboard</a>
</li>
<li class="breadcrumb-item">
	<a href="{{ route('portal.main', 1) }}">Painel Central - Importar e Validar</a>
</li>
<li class="breadcrumb-item text-capitalize">Documentação de {{ $client_validation->validation->alias }}</li>
@endsection