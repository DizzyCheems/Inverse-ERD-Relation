<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Member;
use App\Models\Category;
use App\Models\Employee;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('item.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('item.create');
    }


    public function item_show()
    {
   $items = Item::with(['member'])->get();
     foreach($items as $item){
     echo 'Item name :'. $item->name . '<br />';
     echo 'Tailor Assigned :'. $item->labor_tailor . '<br />';
     echo 'Tailor Compensation :'. $item->cost_tailor . '<br />';
     echo 'Cutter Assigned :'. $item->labor_cutter . '<br />';
     echo 'Cutter Compensation :'. $item->cost_cutter . '<br />';
     echo 'Heatpress Assigned :'. $item->labor_heatpress . '<br />';
     echo 'Heatpress Compensation :'. $item->cost_heatpress . '<br />';
     echo 'Price :'. $item->price . '<br />';
     echo 'Category :'. $item->category . '<br />';  
     echo '---------------------------------------------'.'<br />';
     echo 'Member/Owner of This Item:'. $item->member->name.'<br />';
     echo '---------------------------------------------'.'<br />';
     }
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
        $message=[
            'required' => 'This field is required!'
             ];
       
             $request->validate([
             'name'=>'required',
             'shirt_name'=>'required',
             'shirt_number'=>'required',   
             ],$message);
             Member::create([
                'name'=> $request->name,
                'shirt_name'=> $request->shirt_name,
                'shirt_number'=> $request->shirt_number,
                ]);

            $request->validate([     
            'member_id'=>'required', 
            'name'=>'required',
            'labor_tailor'=>'required',
            'labor_cutter'=>'required',
            'labor_heatpress'=>'required',
            'cost_tailor'=> 'required',
            'cost_cutter'=>'required',
            'cost_heatpress'=>'required',
            'price'=> 'required',
            'category'=> 'required',
            ],$message);
                          
            Item::create([
            'member_id'=> $request->member_id,
            'name'=> $request->name,
            'labor_tailor'=> $request->labor_tailor,
            'labor_cutter'=> $request->labor_cutter,
            'labor_heatpress'=> $request->labor_heatpress,
            'cost_tailor'=> $request->cost_tailor,
            'cost_cutter'=> $request->cost_cutter,
            'cost_heatpress'=> $request->cost_heatpress,
            'price'=> $request->price,
            'category'=> $request->category
            ]);
            return redirect()->route('item.show')->with('success', 'Member Registered Successfully');    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
        $members = Member::all();
        $employees = Employee::all();
        $categories = Category::all();
        return view('item.create', compact('members','employees','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }

    public function test()
    {
        
        $members = Member::all();
        $employees = Employee::all();
        $categories = Category::all();
        return view('item.create', compact('members','employees','categories'));
    }
}
