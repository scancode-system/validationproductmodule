<?php

namespace Modules\ValidationProduct\Services; 

use Modules\Portal\Services\Validation\ValidatorRowService; 

use Illuminate\Validation\Rule;
use Modules\Portal\Rules\NotInCustomRule;
use Modules\Portal\Rules\NullRule;

class ValidatorRowProductsService extends ValidatorRowService
{

	public $date_columns = [];				
	public $string_columns = ['barcode']; 

	public function rule($data){
		return  array_merge([
			'sku' => 'filled|string|max:191',		
			'barcode' => ['filled', 'string', 'max:191',  new NotInCustomRule(ValidatorRowService::chunkColumn($this->columns, 'barcode', 0, $this->index-2), 'Duplicado')], 																				
			'description' => 'filled|string|max:191',
			'price' => 'filled|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
			'min_qty' => 'filled|integer|min:1',
			'discount_limit' => 'filled|numeric|between:0,100|regex:/^\d+(\.\d{1,2})?$/',
			'multiple' => 'filled|integer|min:1',
			'category' => 'filled|string|max:191'
		],parent::rule($data));
	}

	public function filterRules()
	{
		return array_merge(
			[
			['rule' => ['multiple' => [new NullRule()]], 'filter' => 'setToOne'],
			['rule' => ['min_qty' => [new NullRule()]], 'filter' => 'setToOne'],
			['rule' => ['discount_limit' => [new NullRule()]], 'filter' => 'setToZero'],
			['rule' => ['price' => ['required', 'string', 'regex:/^(R\$)?( )?([1-9]{1}[\d]{0,2}(\.[\d]{3})*(\,[\d]{0,2})?|[1-9]{1}[\d]{0,}(\,[\d]{0,2})?|0(\,[\d]{0,2})?|(\,[\d]{1,2})?)$/']], 'filter' => 'currencyFormat'],
			['rule' => ['discount_limit' => ['required', 'string', 'regex:/^(R\$)?( )?([1-9]{1}[\d]{0,2}(\.[\d]{3})*(\,[\d]{0,2})?|[1-9]{1}[\d]{0,}(\,[\d]{0,2})?|0(\,[\d]{0,2})?|(\,[\d]{1,2})?)$/']], 'filter' => 'currencyFormat'],
		],parent::filterRules());
	}

}
