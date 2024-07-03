<?php

namespace App\Http\Controllers;

use App\Exports\UsersDataExport;
use App\Models\Product;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();

        return view('products', ['products' => $products]);
    }

    public function exportExcel() {
        return Excel::download(new UsersDataExport, 'products.xlsx');
    }
}
