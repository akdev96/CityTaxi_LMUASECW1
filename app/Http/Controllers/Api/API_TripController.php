<?php

namespace App\Http\Controllers\trips;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\User;

class API_TripController extends Controller
{
    /**
     * Display a listing of the trips.
     */
    public function index()
    {
        $trips = Trip::all(); // Retrieve all trips
        return view('content.trips.index', compact('trips')); // Return trips to a view
    }

    /**
     * Show the form for creating a new trip.
     */
    public function create()
    {
        return view('content.trips.create'); // Return a form view to create a new trip
    }


    /**
     * Store a newly created trip in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'passenger_id' => 'required|exists:passengers,id',
            'driver_id' => 'required|exists:drivers,id',
            'vehicle_id' => 'required|exists:vehicles,id',
            'from_lat' => 'required|numeric',
            'from_lng' => 'required|numeric',
            'to_lat' => 'required|numeric',
            'to_lng' => 'required|numeric',
            'from_location' => 'required|string|max:255',
            'to_location' => 'required|string|max:255',
            'trip_status' => 'required|string|in:Scheduled,In Progress,Completed,Cancelled',
            'trip_fare' => 'nullable|numeric',
            'trip_duration' => 'nullable|integer',
            'trip_distance' => 'nullable|numeric',
            'start_time' => 'nullable|date',
            'end_time' => 'nullable|date',
            'cancel_reason' => 'nullable|string',
            'feedback' => 'nullable|string',
        ]);

        $trip = Trip::create($request->all()); // Store trip in the database

        return redirect()->route('trips.index')->with('success', 'Trip created successfully!');
    }

    /**
     * Display the specified trip.
     */
    public function show($id)
    {
        $trip = Trip::findOrFail($id); // Find trip by ID
        return view('trips.show', compact('trip')); // Return trip details to a view
    }

    /**
     * Show the form for editing the specified trip.
     */
    public function edit($id)
    {
        $trip = Trip::findOrFail($id); // Find trip by ID
        return view('trips.edit', compact('trip')); // Return a form view to edit the trip
    }

    /**
     * Update the specified trip in the database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'passenger_id' => 'required|exists:passengers,id',
            'driver_id' => 'required|exists:drivers,id',
            'vehicle_id' => 'required|exists:vehicles,id',
            'from_lat' => 'required|numeric',
            'from_lng' => 'required|numeric',
            'to_lat' => 'required|numeric',
            'to_lng' => 'required|numeric',
            'from_location' => 'required|string|max:255',
            'to_location' => 'required|string|max:255',
            'trip_status' => 'required|string|in:Scheduled,In Progress,Completed,Cancelled',
            'trip_fare' => 'nullable|numeric',
            'trip_duration' => 'nullable|integer',
            'trip_distance' => 'nullable|numeric',
            'start_time' => 'nullable|date',
            'end_time' => 'nullable|date',
            'cancel_reason' => 'nullable|string',
            'feedback' => 'nullable|string',
        ]);

        $trip = Trip::findOrFail($id);
        $trip->update($request->all()); // Update trip in the database

        return redirect()->route('trips.index')->with('success', 'Trip updated successfully!');
    }

    /**
     * Remove the specified trip from the database.
     */
    public function destroy($id)
    {
        $trip = Trip::findOrFail($id);
        $trip->delete(); // Delete trip from the database

        return redirect()->route('trips.index')->with('success', 'Trip deleted successfully!');
    }


    // Helper APIs

    /**
     * Search passengers by keyword.
     */
    public function get_passenger_by_kwd(Request $request)
    {
        $request->validate([
            'keyword' => 'required|string|max:100',
        ]);

        $keyword = $request->input('keyword');

        $passengers = User::where('role', 'passenger') // Assuming 'role' column identifies passengers
            ->where(function ($query) use ($keyword) {
                $query->where('first_name', 'LIKE', "%{$keyword}%")
                    ->orWhere('email', 'LIKE', "%{$keyword}%")
                    ->orWhere('mobile_number', 'LIKE', "%{$keyword}%");
            })
            ->get();

        return response()->json($passengers);
    }

    /**
     * Search drivers by keyword.
     */
    public function get_driver_by_kwd(Request $request)
    {
        $request->validate([
            'keyword' => 'required|string|max:255',
        ]);

        $keyword = $request->input('keyword');

        $drivers = User::where('role', 'driver') // Assuming 'role' column identifies drivers
            ->where(function ($query) use ($keyword) {
                $query->where('name', 'LIKE', "%{$keyword}%")
                    ->orWhere('email', 'LIKE', "%{$keyword}%")
                    ->orWhere('phone', 'LIKE', "%{$keyword}%");
            })
            ->get();

        return response()->json($drivers);
    }

}
