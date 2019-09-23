<?php

namespace Modules\ValidationProduct\Validator;

use Modules\Portal\Imports\ValidatorImport;
use Illuminate\Validation\Rule;

class ProductsValidator extends ValidatorImport 
{

	protected $required = ['descricao', 'codigo', 'codigo_2', 'preco', 'categoria', 'disponivel_atual', 'data_atual'];

	public function rule($data){
		return  [
			'id_produto' => 				'blocked',
			'descricao' => 					'filled|string|max:255',				
			'descricao_detalhada' => 		'string',   																				
			'codigo' => 					'filled|string|max:40|unique_custom_values',
			'codigo_2' => 					'filled|string|max:40|unique_custom_values',
			'preco' => 						'filled|numeric|min:0.01|regex:/^\d+(\.\d{1,2})?$/',
			'preco_varejo' => 				'numeric|min:0.01|regex:/^\d+(\.\d{1,2})?$/', 	 													
			'filial' => 					'integer|min:1',																											
			'filial_descricao' => 			'string|max:255',																		
			'qtd_min' => 					'integer|min:1',																										
			'multiplo' => 					'integer|min:1', 																	
			'desconto_max' => 				'integer|min:0', 																	
			'desconto_bloquear' => 			'integer|between:0,1',									
			'ipi' => 						'numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',				
			'produto_base' => 				'integer|min:1|not_present_custom_values:codigo',
			'disponivel_atual' => 			'filled|integer|min:0',
			'data_atual' => 				'filled|date_format:Y-m-d',
			'disponivel_futuro' => 			'integer|min:0',
			'data_futuro' => 				'date_format:Y-m-d',
			'cor' => 						'nullable|string|max:255',
			'categoria' => 					'filled|string|max:255',
		]+$this->precos_promocionais($data);
	}


	protected function filters(){
		$this->lengthFilter(['data_atual'], 10);
	}

	public function filterRules(){
		return [
			['rule' => ['data_atual' => 'required|date_format:d/m/Y'], 'filter' => 'dateDMY'],
			['rule' => ['data_atual' => 'required|date_format:j/n/Y'], 'filter' => 'dateDMY'],
			['rule' => ['data_futuro' => 'required|date_format:d/m/Y'], 'filter' => 'dateDMY'],
			['rule' => ['data_futuro' => 'required|date_format:j/n/Y'], 'filter' => 'dateDMY'],
			['rule' => ['preco' => ['required', 'regex:/^(R\$)?( )?([1-9]{1}[\d]{0,2}(\.[\d]{3})*(\,[\d]{0,2})?|[1-9]{1}[\d]{0,}(\,[\d]{0,2})?|0(\,[\d]{0,2})?|(\,[\d]{1,2})?)$/']], 'filter' => 'currencyFormat'],
			['rule' => ['preco_varejo' => ['required', 'regex:/^(R\$)?( )?([1-9]{1}[\d]{0,2}(\.[\d]{3})*(\,[\d]{0,2})?|[1-9]{1}[\d]{0,}(\,[\d]{0,2})?|0(\,[\d]{0,2})?|(\,[\d]{1,2})?)$/']], 'filter' => 'currencyFormat'],
			['rule' => ['ipi' => ['required', 'regex:/^([1-9]{1}[\d]{0,2}(\.[\d]{3})*(\,[\d]{0,2})?|[1-9]{1}[\d]{0,}(\,[\d]{0,2})?|0(\,[\d]{0,2})?|(\,[\d]{1,2})?)$/']], 'filter' => 'currencyFormat'],
		];
	}

	private function precos_promocionais($data){

		$precos_promocional = [];

		foreach ($data as $field => $value) {
			if(substr($field, 0, 17) == 'promocional_preco'){
				$required_field = 'promocional_quantidade_'.str_replace('promocional_preco_', '', $field);
				$precos_promocional += [
					$field => 'present_with:'.$required_field.'|nullable|numeric|min:0.01|regex:/^\d+(\.\d{1,2})?$/'
				]; 
			}

			if(substr($field, 0, 22) == 'promocional_quantidade'){
				$required_field = 'promocional_preco_'.str_replace('promocional_quantidade_', '', $field);
				$precos_promocional += [$field => ['present_with:'.$required_field.'|nullable|integer|min:1']];
			}
		}
		return $precos_promocional;
	}


}
