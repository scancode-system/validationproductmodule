<?php

namespace Modules\ValidationProduct\Validator;

use Modules\Portal\Imports\ValidatorImport;
use Illuminate\Validation\Rule;

class ProductsValidator extends ValidatorImport
{

	public function rule($data){
		return  [
			'id_produto' => 				'blocked',		  
			'descricao' => 					'required|string|max:255',
			'descricao_detalhada' => 		'string',   																				
			'codigo' => 					'required|string|max:40|unique_custom_values',
			'codigo_2' => 					'required|string|max:40|unique_custom_values',
			'preco' => 						'required|numeric|min:0.01|regex:/^\d+(\.\d{1,2})?$/',
			'preco_varejo' => 				'nullable|numeric|min:0.01|regex:/^\d+(\.\d{1,2})?$/',  													
			'filial' => 					'integer|min:1',    																		
			'filial_descricao' => 			'string|max:255',																		
			'qtd_min' => 					'integer|min:1', 																		
			'multiplo' => 					'integer|min:1', 																		
			'desconto_max' => 				'integer|min:0', 																		
			'desconto_bloquear' => 			'integer|between:0,1',
			'imagem' => 					'blocked',
			'ipi' => 						'numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
			'produto_base' => 				'nullable|integer|min:1|not_present_custom_values:codigo',
			'disponivel_atual' => 			'present|integer|min:0',
			'total_atual' => 				'blocked', 																		
			'data_atual' => 				'present|date_format:Y-m-d',
			'disponivel_futuro' => 			'present|integer|min:0',
			'total_futuro' => 				'blocked',
			'data_futuro' => 				'present|date_format:Y-m-d',
			'cor' => 						'nullable|string|max:255',
			'categoria' => 					'required|string|max:255',
		]+$this->precos_promocionais($data);
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
