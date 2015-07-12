<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;
use App\Event;

class EventController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = Event::all();

		return view('events.index', compact('events'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('events.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		Event::create($request->all());

		return redirect('events');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Event $event
	 * @return Response
	 */
	public function show(Event $event)
	{
		return view('events.show', compact('event'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Event $event
	 * @return Response
	 */
	public function edit(Event $event)
	{
		return view('events.edit', compact('event'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Event $event
	 * @param  Request $request
	 * @return Response
	 */
	public function update(Event $event, Request $request)
	{
		$event->name = $request->name;
		
		$event->venue = $request->venue;
		
		$event->address = $request->address;

		$event->startDate = $request->startDate;

		$event->endDate = $request->endDate;

		$event->doorTime = $request->doorTime;

		$event->showTime = $request->showTime;

		$event->endTime = $request->endTime;

		$event->price = $request->price;
		
		$event->website = $request->website;
		
		$event->facebook = $request->facebook;

		$event->save();

		return redirect('events');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Event $event
	 * @return Response
	 */
	public function destroy(Event $event)
	{
		$event->delete();

		return redirect('events');
	}

}
