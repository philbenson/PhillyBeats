<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;
use App\Genre;

class GenreController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$genres = Genre::all();

		return view('genres.index', compact('genres'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('genres.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		Genre::create($request->all());

		return redirect('genres');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Genre $genre
	 * @return Response
	 */
	public function show(Genre $genre)
	{
		return view('genres.show', compact('genre'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Genre $genre
	 * @return Response
	 */
	public function edit(Genre $genre)
	{
		return view('genres.edit', compact('genre'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Genre $genre
	 * @param  Request $request
	 * @return Response
	 */
	public function update(Genre $genre, Request $request)
	{
		$genre->name = $request->name;

		$genre->save();

		return redirect('genres');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Genre $genre
	 * @return Response
	 */
	public function destroy(Genre $genre)
	{
		$genre->delete();

		return redirect('genres');
	}

}
