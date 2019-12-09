<?php

namespace Modules\ValidationProduct\Services;


class ValidationProductService {
	
	public function fields(){
		return config('validationproduct.fields');
	}

	public function sample(){
		return config('validationproduct.sample');
	}

}
