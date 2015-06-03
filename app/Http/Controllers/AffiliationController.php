<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;
use App\Affiliation;

class AffiliationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$affiliations = Affiliation::all();

		return view('affiliations.index', compact('affiliations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('affiliations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		Affiliation::create($request->all());

		return redirect('affiliations');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Affiliation $affiliation
	 * @return Response
	 */
	public function show(Affiliation $affiliation)
	{
		return view('affiliations.show', compact('affiliation'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Affiliation $affiliation
	 * @return Response
	 */
	public function edit(Affiliation $affiliation)
	{
		return view('affiliations.edit', compact('affiliation'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Affiliation $affiliation
	 * @param  Request $request
	 * @return Response
	 */
	public function update(Affiliation $affiliation, Request $request)
	{
		$affiliation->name = $request->name;
		
		$affiliation->city = $request->city;
		
		$affiliation->website = $request->website;

		$affiliation->save();

		return redirect('affiliations');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Affiliation $affiliation
	 * @return Response
	 */
	public function destroy(Affiliation $affiliation)
	{
		$affiliation->delete();

		return redirect('affiliations');
	}

}
