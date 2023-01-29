<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('category.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.create');
    }

    public function category_show()
    {   
        $categories = Category::with(['item'])->get();
        echo '<table>';
           echo '<tr>
             <th>No</th>
             <th>Category Name</th>
             <th>Description</th>
             </tr>';
             $no = 1;
             foreach($categories as $category){
             echo '<tr>
              <td>'.$no++.'</td>
              <td>'.$category->name.'</td>
              <td>'.$category->description .'</td>
              <td>';
            '
           </tr>';
     }
          echo '</table>';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
                //
                $message=[
                    'required' => 'This field is required!'
                     ];
                                  
                    $request->validate([      
                        'name'=>'required',
                        'description',
                    ],$message);
                                  
                     Category::create([
                        'name' => $request->name, 
                        'description' => $request->description,
                  
                    ]);
                    return redirect()->route('category.show')->with('success', 'Category Registered Successfully');  
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        $category= Category::all();
         return view ('category.create', ['employee'=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
