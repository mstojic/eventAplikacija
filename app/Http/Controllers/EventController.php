<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\User;
use App\Models\Event;
use App\Models\Location;
use App\Models\Category;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index',
        [
            'events' => Event::latest()->paginate(3),
            'locations' => Location::all(),
            'categories' => Category::all()
        ]);
    }

    /*public function listing()
    {
        return view('listing', ['events' => Event::all()], ['categories' => Category::all()]);
    }*/



    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }

    /**
     * Display data about event.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        return view('details',
        [
            'event' => Event::find($id),
            'user' =>  User::find(Auth::id())
        ]);
    }

    /**
     * Display list of events sorted by category.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listing($id = null)
    {
        if($id == null) {
            $id = Category::first()->id;
        }

            return view('listing',
            [
                'events' => Event::all(),
                'categories' => Category::all(),
                'category_link' => Category::find($id)
            ]);

    }

    public function search(Request $request)
    {
        $search = $request->searchtext;
        $location = $request->location;
        $price = $request->price;

        //dd($request->location);

        $events = Event::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->get();

        if($location != null){
            $events->where('location_id', 'LIKE', "%{$location}%");
        }

        if($price != null){
            $events->where('price', '<=', $price);
        }


        return view('search',
        [
            'events' => $events,
            'categories' => Category::all(),
            'locations' => Location::all(),
            'search' => $search
        ]);
    }


}
