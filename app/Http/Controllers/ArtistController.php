<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;
use App\Artist;

class ArtistController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$artists = Artist::all();

		return view('artists.index', compact('artists'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('artists.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		Artist::create($request->all());

		return redirect('artists');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Artist $artist
	 * @return Response
	 */
	public function show(Artist $artist)
	{
		return view('artists.show', compact('artist'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Artist $artist
	 * @return Response
	 */
	public function edit(Artist $artist)
	{
		return view('artists.edit', compact('artist'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Artist $artist
	 * @param  Request $request
	 * @return Response
	 */
	public function update(Artist $artist, Request $request)
	{
		$artist->name = $request->name;
		
		$artist->city = $request->city;
		
		$artist->website = $request->website;

		$artist->soundcloud = $request->soundcloud;

		$artist->mixcloud = $request->mixcloud;

		$artist->bandcamp = $request->bandcamp;

		$artist->facebook = $request->facebook;

		$artist->twitter = $request->twitter;

		$artist->save();

		return redirect('artists');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Artist $artist
	 * @return Response
	 */
	public function destroy(Artist $artist)
	{
		$artist->delete();

		return redirect('artists');
	}

}
