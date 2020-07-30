<?php

namespace Modules\ValidationProduct\Exports;

use Modules\Portal\Exports\ValidationExport;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class ValidationExportProducts extends ValidationExport
{

	public $format_columns = ['date_delivery' => NumberFormat::FORMAT_DATE_DDMMYYYY];
	public $date_columns = ['date_delivery'];

}
