<?php

return [
	'name' => 'ValidationProduct', 
	'fields' => ['sku', 'barcode', 'description', 'price', 'min_qty', 'discount_limit', 'multiple', 'category'],
	'sample' => [
		[
			'name' => 'sku',
			'observation' => 'Código refrência do produto.',
			'sample_1' => 'ws-3242f',
			'filled' => true
		], 
		[
			'name' => 'barcode',
			'observation' => 'Código de barras, normalmente EAN13.',
			'sample_1' => '2346324678432',
			'filled' => true
		], 
		[
			'name' => 'description',
			'observation' => 'Descrição do produto.',
			'sample_1' => 'vaso verde limao',
			'filled' => true
		], 
		[
			'name' => 'price',
			'observation' => 'Preço base do produto.',
			'sample_1' => '38',
			'filled' => true
		], 
		[
			'name' => 'min_qty',
			'observation' => 'Quantidade minima para colocar na sacolas.',
			'sample_1' => '2',
			'filled' => false
		], 
		[
			'name' => 'discount_limit',
			'observation' => 'Disconto máximo que um produto pode receber em porcentagem.',
			'sample_1' => '5',
			'filled' => false
		], 
		[
			'name' => 'multiple',
			'observation' => 'Configuração para a quantidade de unidades que se pode colocar na sacola, sendo que o o produto somente irá para a sacola se for multiplo do numero estabelecido. O padrão é 1.',
			'sample_1' => '1',
			'filled' => false
		], 
		[
			'name' => 'category',
			'observation' => 'Categoria que o produto pertence.',
			'sample_1' => 'vasos',
			'filled' => true
		]
	]
];
