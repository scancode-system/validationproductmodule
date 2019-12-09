<?php

return [
    'name' => 'ValidationProduct', 
    'fields' => ['sku', 'barcode', 'description', 'price', 'min_qty', 'discount_limit', 'multiple', 'category'],
	'sample' => [
		[
			'name' => 'sku',
			'observation' => 'Código refrência do produto.',
			'filled' => true
		], 
		[
			'name' => 'barcode',
			'observation' => 'Código de barras, normalmente EAN13.',
			'filled' => true
		], 
		[
			'name' => 'description',
			'observation' => 'Descrição do produto.',
			'filled' => true
		], 
		[
			'name' => 'price',
			'observation' => 'Preço base do produto.',
			'filled' => true
		], 
		[
			'name' => 'min_qty',
			'observation' => 'Quantidade minima para colocar na sacolas.',
			'filled' => false
		], 
		[
			'name' => 'discount_limit',
			'observation' => 'Disconto máximo que um produto pode receber em porcentagem.',
			'filled' => false
		], 
		[
			'name' => 'multiple',
			'observation' => 'Configuração para a quantidade de unidades que se pode colocar na sacola, sendo que o o produto somente irá para a sacola se for multiplo do numero estabelecido. O padrão é 1.',
			'filled' => false
		], 
		[
			'name' => 'category',
			'observation' => 'Categoria que o produto pertence.',
			'filled' => true
		]
	]
];
 