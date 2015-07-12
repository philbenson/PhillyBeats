<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;
use App\Venue;

class VenueController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$venues = Venue::all();

		return view('venues.index', compact('venues'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('venues.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		Venue::create($request->all());

		return redirect('venues');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Venue $venue
	 * @return Response
	 */
	public function show(Venue $venue)
	{
		return view('venues.show', compact('venue'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Venue $venue
	 * @return Response
	 */
	public function edit(Venue $venue)
	{
		return view('venues.edit', compact('venue'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Venue $venue
	 * @param  Request $request
	 * @return Response
	 */
	public function update(Venue $venue, Request $request)
	{
		$venue->name = $request->name;
		
		$venue->address = $request->address;
		
		$venue->website = $request->website;

		$venue->facebook = $request->facebook;

		$venue->twitter = $request->twitter;

		$venue->instagram = $request->instagram;

		$venue->save();

		return redirect('venues');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Venue $venue
	 * @return Response
	 */
	public function destroy(Venue $venue)
	{
		$venue->delete();

		return redirect('venues');
	}

}
