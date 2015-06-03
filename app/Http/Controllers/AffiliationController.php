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
	 * @return Response
	 */
	public function store(Request $request)
	{
		/*$affiliation = new Affiliation;

		$affiliation->name = $request->name;
		
		$affiliation->city = $request->city;
		
		$affiliation->website = $request->website;

		// $affiliation->user_id = Auth::user();

		// $affiliation->added_by = Auth::user();

		$affiliation->save();*/

		Affiliation::create($request->all());

		return redirect('affiliations');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Affiliation $affiliation)
	{
		return view('affiliations.show', compact('affiliation'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Affiliation $affiliation)
	{
		return view('affiliations.edit', compact('affiliation'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$affiliation = Affiliation::find($request->id);

		$affiliation = $request->all();

		$affiliation->save();

		return redirect('affiliations');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
