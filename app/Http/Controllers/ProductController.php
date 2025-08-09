<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Dados fictícios para teste (sem banco)
        $products = [
            (object) ['id' => 1, 'name' => 'Notebook Gamer', 'price' => 5999.90, 'description' => 'Notebook gamer com placa RTX e processador i7'],
            (object) ['id' => 2, 'name' => 'Mouse Sem Fio', 'price' => 149.90, 'description' => 'Mouse sem fio com 1600 DPI'],
            (object) ['id' => 3, 'name' => 'Teclado Mecânico RGB', 'price' => 299.90, 'description' => 'Teclado mecânico com iluminação RGB e switches blue'],
        ];

        // Retorna a view com os dados
        return view('products.index', compact('products'));
    }
}
