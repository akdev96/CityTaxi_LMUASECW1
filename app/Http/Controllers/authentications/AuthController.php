<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // $registerdData = 
        $request->validate([
            'role' => 'required|string|max:15',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'nic_no' => 'required|string|max:12',
            'license_no' => 'string|max:18',
            'vehicle_no' => 'string|max:12',
            'password' => 'required|confirmed',
            'email' => 'email|required|unique:users',
            'mobile_number' => 'required|string|max:15',
            'birth_day' => 'required|date',
            'gender' => 'required|string|in:male,female,other',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'district' => 'required|string'
        ]);

        // $user = User::create($registerdData);
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'nic_no' => $request->nic_no,
            'license_no' => $request->license_no,
            'vehicle_no' => $request->vehicle_no,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile_number' => $request->mobile_number,
            'birth_day' => $request->birth_day,
            'address' => $request->address,
            'district' => $request->district,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'gender' => $request->gender

            // $table->bigInteger('role_id');
        ]);


        // $accessToken = $user->createToken('authToken')->accessToken;
        // return response(['user' => $user, 'access_token' => $accessToken], 201);

        // Automatically log the user in after registration
        auth()->login($user);
        return redirect()->route('dashboard-analytics')->with('success', 'Registration successful!');


    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            'mobile_number' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|string|in:Passenger,Driver,Admin', // Validate role
        ]);

        if (!auth()->attempt($loginData)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $user = auth()->user();

        // $accessToken = $user->createToken('authToken')->accessToken;
        // return response()->json([
        //     'user' => $user,
        //     'access_token' => $accessToken,
        // ]);


        // Check if the user's role matches the input role
        if ($user->role !== $loginData['role']) {
            auth()->logout(); // Logout the user if roles don't match
            return response()->json(['message' => 'Invalid role'], 403);
        }

        auth()->login($user);

        // Redirect to a different page based on the role
        /*
        switch ($user->role) {
            case 'Admin':
                return redirect()->route('dashboard-analytics')->with('success', 'Welcome Admin!');
            case 'Driver':
                return redirect()->route('driver-dashboard')->with('success', 'Welcome Driver!');
            case 'Passenger':
                return redirect()->route('passenger-dashboard')->with('success', 'Welcome Passenger!');
            default:
                return response()->json(['message' => 'Role not recognized'], 400);
        }
        */

        return redirect()->route('dashboard-analytics')->with('success', 'Login successful!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/'); // Redirect to home or login page
    }
}