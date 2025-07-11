<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User; // Nanti uncomment ini

class UserController extends Controller
{
    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        // TODO: Retrieve user by ID
        // Example: $user = User::findOrFail($id);
        // TODO: Implement authorization logic (e.g., only user themselves or admin can view)
        // if (auth()->id() !== (int)$id && !auth()->user()->hasRole('admin')) {
        //     return response()->json(['message' => 'Unauthorized.'], 403);
        // }
        return response()->json(['message' => "Displaying user with ID: $id"]);
    }

    /**
     * Update the specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // TODO: Validate request data
        // TODO: Retrieve user by ID
        // TODO: Implement authorization logic
        // TODO: Update user data
        return response()->json(['message' => "Updating user with ID: $id"]);
    }

    // Anda bisa menambahkan metode index() dan destroy() jika diperlukan untuk manajemen admin.
}