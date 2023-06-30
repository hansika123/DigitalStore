<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

use DB;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;


class ProductController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'product_code' => 'required|unique:products,product_code',
            'name' => 'required',
            'stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = new Product();
        $product->product_code = $request->input('product_code');
        $product->name = $request->input('name');
        $product->stock = $request->input('stock');
        $product->price = $request->input('price');
         $product->category_id = $request->input('category_id');
        $product->save();
        return redirect()->route('products.store');

    }

    public function showForm()
{
  
    $categories = Category::all();
    $products = Product::with('category')->get();
    return view('products', compact('products','categories'));
   
}

public function downloadPDF()
{
    
    $products = Product::all();
    $options = new Options();
    $options->set('defaultFont', 'Helvetica'); // Optional: Set the default font if needed
    $dompdf = new Dompdf($options);

    $pdfView = view('pdf.products_list', compact('products'));
    $dompdf->loadHtml($pdfView->render());

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    return $dompdf->stream('products_list.pdf');
}

}
