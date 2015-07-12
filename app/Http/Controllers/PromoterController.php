<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;
use App\Promoter;

class PromoterController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$promoters = Promoter::all();

		return view('promoters.index', compact('promoters'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('promoters.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		Promoter::create($request->all());

		return redirect('promoters');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Promoter $promoter
	 * @return Response
	 */
	public function show(Promoter $promoter)
	{
		return view('promoters.show', compact('promoter'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Promoter $promoter
	 * @return Response
	 */
	public function edit(Promoter $promoter)
	{
		return view('promoters.edit', compact('promoter'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Promoter $promoter
	 * @param  Request $request
	 * @return Response
	 */
	public function update(Promoter $promoter, Request $request)
	{
		$promoter->name = $request->name;
		
		$promoter->city = $request->city;
		
		$promoter->website = $request->website;

		$promoter->save();

		return redirect('promoters');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Promoter $promoter
	 * @return Response
	 */
	public function destroy(Promoter $promoter)
	{
		$promoter->delete();

		return redirect('promoters');
	}

}
