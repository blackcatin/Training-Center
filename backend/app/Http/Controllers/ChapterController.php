<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Chapter; // Nanti uncomment ini
// use App\Models\Module; // Nanti uncomment ini

class ChapterController extends Controller
{
    /**
     * Display a listing of the chapters for a specific module.
     *
     * @param  int  $module_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($module_id)
    {
        // TODO: Retrieve chapters for the given module_id, ordered by order_number
        return response()->json(['message' => "Listing chapters for module ID: $module_id"]);
    }

    /**
     * Store a newly created chapter in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $module_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, $module_id)
    {
        // TODO: Validate chapter data
        // TODO: Ensure module_id exists and user is authorized (creator/admin)
        // TODO: Create a new chapter record
        return response()->json(['message' => "Chapter created for module ID: $module_id"], 201);
    }

    /**
     * Display the specified chapter.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        // TODO: Retrieve chapter by ID, possibly with related quizzes
        return response()->json(['message' => "Displaying chapter with ID: $id"]);
    }

    /**
     * Update the specified chapter in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // TODO: Validate request data
        // TODO: Retrieve chapter by ID
        // TODO: Implement authorization (e.g., only module creator or admin)
        // TODO: Update chapter data
        return response()->json(['message' => "Updating chapter with ID: $id"]);
    }

    /**
     * Remove the specified chapter from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        // TODO: Retrieve chapter by ID
        // TODO: Implement authorization (e.g., only module creator or admin)
        // TODO: Delete chapter
        return response()->json(['message' => "Deleting chapter with ID: $id"]);
    }
}