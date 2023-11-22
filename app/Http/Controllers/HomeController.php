<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Entrada;
use App\Models\Salida;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $entradas = Entrada::paginate(10);
        $salidas = Salida::paginate(10);

        return view('home', compact('entradas', 'salidas'));
    }

    public function generatePDF()
    {
        $entradas = Entrada::paginate(10);
        $salidas = Salida::paginate(10);

        $totalMontoEntrada = $entradas->sum('monto_salida');
        $totalMontoSalida = $salidas->sum('monto_salida');
        $balanceTotal = $totalMontoEntrada - $totalMontoSalida;

        $data = [
            'entradas' => $entradas,
            'salidas' => $salidas,
            'totalMontoEntrada' => $totalMontoEntrada,
            'totalMontoSalida' => $totalMontoSalida,
            'balanceTotal' => $balanceTotal,
        ];
        
        $pdf = PDF::loadView('pdf', $data);

        return $pdf->download('pdf_report.pdf');
    }
}
