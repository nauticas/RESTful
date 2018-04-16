<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    	$hotels = Hotel::all();
    	return response()->json($hotels, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    	$data = new Hotel();
    	$data->name = $request->input('name');
    	$data->city = $request->input('city');
    	$data->address = $request->input('address');
    	$data->country = $request->input('country');
    	$data->phone = $request->input('phone');
    	$data->email = $request->input('email');
    	$data->website = $request->input('website');

    	$success = $data->save();
    	if (!$success) {
        	# code...
    		return response()->json("error saving data", 500);
    	}
    	return response()->json("success", 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    	$hotels = Hotel::find($id);
    	return response()->json($hotels, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    	$data  = Hotel::find($id);

    	if (!is_null($request->input('name'))) {
    		$data->name = $request->input('name');
    	}

    	if (!is_null($request->input('city'))) {
    		$data->city = $request->input('city');
    	}

    	if (!is_null($request->input('address'))) {
    		$data->address = $request->input('address');
    	}

    	if (!is_null($request->input('country'))) {
    		$data->country = $request->input('country');
    	}

    	if (!is_null($request->input('phone'))) {
    		$data->phone = $request->input('phone');
    	}

    	if (!is_null($request->input('email'))) {
    		$data->email = $request->input('email');
    	}

    	if (!is_null($request->input('website'))) {
    		$data->website = $request->input('website');
    	}

    	$success=$data->save();

    	if(!$success)
    	{
    		return response()->json("error updating",500);
    	}

    	return response()->json("success",201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    	$data=Hotel::find($id);
    	if(is_null($data))
    	{
    		return Response::json("not found",404);
    	}

    	$success=$data->delete();

    	if(!$success)
    	{
    		return response()->json("error deleting",500);
    	}

    	return response()->json("success",200);
    }
}
