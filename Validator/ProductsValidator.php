<?php

namespace Modules\ValidationProduct\Validator; 

use Modules\Portal\Imports\ValidatorImport; 
use Illuminate\Validation\Rule;
use Modules\Portal\Rules\NotInCustomRule;
use Modules\Portal\Rules\NullRule;

class ProductsValidator extends ValidatorImport
{


	public function rule($data){
		return  array_merge([
			'sku' => 'filled|string|max:255',		
			'barcode' => ['filled', 'string', 'max:255',  new NotInCustomRule($this->chunkColumn('barcode', 0, $this->row_index-2), 'Duplicado')], 																				
			'description' => 'filled|string|max:255',
			'price' => 'filled|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
			'min_qty' => 'filled|integer|min:1',
			'discount_limit' => 'filled|numeric|between:0,100|regex:/^\d+(\.\d{1,2})?$/', 	 													
			'multiple' => 'filled|integer|min:1',																											
			'category' => 'filled|string|max:255'
		],parent::rule($data));
	}

	public function filterRules()
	{
		return array_merge(
			[
			['rule' => ['multiple' => [new NullRule()]], 'filter' => 'setToOne'],
			['rule' => ['min_qty' => [new NullRule()]], 'filter' => 'setToOne'],
			['rule' => ['discount_limit' => [new NullRule()]], 'filter' => 'setToZero'],
			['rule' => ['price' => ['required', 'regex:/^(R\$)?( )?([1-9]{1}[\d]{0,2}(\.[\d]{3})*(\,[\d]{0,2})?|[1-9]{1}[\d]{0,}(\,[\d]{0,2})?|0(\,[\d]{0,2})?|(\,[\d]{1,2})?)$/']], 'filter' => 'currencyFormat'],
			['rule' => ['discount_limit' => ['required', 'regex:/^(R\$)?( )?([1-9]{1}[\d]{0,2}(\.[\d]{3})*(\,[\d]{0,2})?|[1-9]{1}[\d]{0,}(\,[\d]{0,2})?|0(\,[\d]{0,2})?|(\,[\d]{1,2})?)$/']], 'filter' => 'currencyFormat'],
		],parent::filterRules());
	}

	public function messages(){
		return  [];
	}

}
