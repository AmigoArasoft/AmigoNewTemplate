<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CotejoExport implements FromView{
	public $errores;
	public $cotejo;

	public function __construct(array $errores, int $cotejo) {
        $this->errores = $errores;
        $this->cotejo = $cotejo;
    }

    public function view(): View
    {
        return view('mina.empresa.cotejo.excel', [
            'errores' => $this->errores,
            'cotejo' => $this->cotejo
        ]);
    }
}