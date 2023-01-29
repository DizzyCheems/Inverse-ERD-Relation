<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('employee.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employee.create');
    }


    public function employee_show()
    {   
        $employees = Employee::with(['item'])->get();
        echo '<table>';
           echo '<tr>
             <th>No</th>
             <th>Firstname</th>
             <th>Lastname</th>
             <th>Contact</th>
             <th>Role</th>
             </tr>';
             $no = 1;
             foreach($employees as $employee){
             echo '<tr>
              <td>'.$no++.'</td>
              <td>'.$employee->firstname.'</td>
              <td>'.$employee->lastname.'</td>
              <td>'.$employee->contact.'</td>
              <td>'.$employee->role.'</td>
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
        $message=[
            'required' => 'This field is required!'
             ];
                          
            $request->validate([      
                'firstname'=>'required',
                'lastname'=>'required',
                'contact'=>'required',
                'role'=> 'required',
            ],$message);
                          
            Employee::create([
                'firstname' => $request->firstname, 
                'lastname' => $request->lastname,
                'contact' => $request->contact,
                'role' => Str::upper($request->role),
            ]);
            return redirect()->route('employee.show')->with('success', 'Member Registered Successfully');  
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //

        $employee= Employee::all();
        return view ('employee.create', ['employee'=>$employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
