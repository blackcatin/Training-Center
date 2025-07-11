<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Module; // Nanti uncomment ini

class ModuleController extends Controller
{
    /**
     * Display a listing of the modules.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // TODO: Retrieve all modules
        return response()->json(['message' => 'Listing all modules']);
    }

    /**
     * Store a newly created module in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // TODO: Validate module data
        // TODO: Create a new module record
        // TODO: Assign created_by to the authenticated user's ID
        return response()->json(['message' => 'Module created successfully'], 201);
    }

    /**
     * Display the specified module.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        // TODO: Retrieve module by ID, possibly with related chapters and quizzes
        return response()->json(['message' => "Displaying module with ID: $id"]);
    }

    /**
     * Update the specified module in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // TODO: Validate request data
        // TODO: Retrieve module by ID
        // TODO: Implement authorization (e.g., only creator or admin)
        // TODO: Update module data
        return response()->json(['message' => "Updating module with ID: $id"]);
    }

    /**
     * Remove the specified module from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        // TODO: Retrieve module by ID
        // TODO: Implement authorization (e.g., only creator or admin)
        // TODO: Delete module
        return response()->json(['message' => "Deleting module with ID: $id"]);
    }
}