<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = [
            [
                'Azienda' => 'Trenitalia',
                'Stazione di partenza' => 'Santa Maria Novella',
                'Stazione di arrivo' => 'Roma Termini',
            ],
            [
                'Azienda' => 'Trenitalia',
                'Stazione di partenza' => 'Santa Maria Novella',
                'Stazione di arrivo' => 'Roma Termini',
            ],
            [
                'Azienda' => 'Trenitalia',
                'Stazione di partenza' => 'Santa Maria Novella',
                'Stazione di arrivo' => 'Roma Termini',
            ],
            [
                'Azienda' => 'Trenitalia',
                'Stazione di partenza' => 'Santa Maria Novella',
                'Stazione di arrivo' => 'Roma Termini',
            ],
        ];
        return view('home', compact('trains'));
    }
}