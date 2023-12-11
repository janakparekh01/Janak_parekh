<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\country;
use Illuminate\Http\Request;

use Hash;
use Session;
use Alert;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    function login()
	{
		return view('employee/login'); 
	}
	
	function login_auth(Request $request)
	{
		$data=employee::where('username','=',$request->username)->first();
		if($data)
		{
			if(Hash::check($request->password,$data->password))
			{
				// session create
				session()->put('userid',$data->id);
				session()->put('name',$data->name);
				
				// use session => session('name') / // session()->get('name')
				
				Alert::success('Congrats', 'You\'ve Successfully Login');
				return redirect('/');
			}
			else
			{
				Alert::error('Failed', 'Wrong Password ');
				return redirect()->back();	
			}
		}
		else
		{
			Alert::error('Failed', 'Wrong Email ');
			return redirect()->back();
		}
		
	}
	
	function logout()
	{
		// session delete
		session()->pull('userid');
		session()->pull('name');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/');
		
	}
	
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data=country::all();
        return view('employee/signup',['country'=>$data]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new employee;
		$data->name=$request->name;
		$data->email=$request->email;
		$data->username=$request->username;
		$data->password=Hash::make($request->password);
		$data->mobile=$request->mobile;
		
		//img upload
		$file=$request->file('file');		
		$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		$file->move('upload/',$filename);  // use move for move image in public/upload		
		$data->file=$filename;
		

		$data->save();
		Alert::success('Congrats', 'You\'ve Successfully Registered');
		return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
		$data=employee::all();
        return view('employee/manage_emp',['data_employee'=>$data]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee,$id)
    {
		// get id data img
		$data=employee::find($id);  // get only one data in string 
		$filename=$data->file;
		
		// data delete with unlink image
        employee::find($id)->delete();
		if($filename!="")
		{
			unlink('upload/'.$filename);
		}
		Alert::success('Congrats', 'You\'ve Successfully Deleted');
		return redirect()->back();
    }
}