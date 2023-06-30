<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use DB;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories,name',
        ]);

        $category = new Category();
        $category->name = $request->input('category_name');
        $category->save();
        $request->session()->flash('success', 'Category created successfully.');
        return redirect()->route('home');
    }

     function show()
     {
        $categories = Category::all();
        $productsCount = Product::count();
        // return view('home', ['categories' => $categories]);
        return view('home', compact('categories', 'productsCount'));
     }

     public function downloadPDF()
{
    
    $categories = Product::all();
    $options = new Options();
    $options->set('defaultFont', 'Helvetica'); 
    $dompdf = new Dompdf($options);

    $pdfView = view('pdf.categories_list', compact('categories'));
    $dompdf->loadHtml($pdfView->render());

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    return $dompdf->stream('categories_list.pdf');
}

}
