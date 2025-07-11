<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Quiz; // Nanti uncomment ini
// use App\Models\Chapter; // Nanti uncomment ini

class QuizController extends Controller
{
    /**
     * Display a listing of the quizzes for a specific chapter.
     *
     * @param  int  $chapter_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($chapter_id)
    {
        // TODO: Retrieve quizzes for the given chapter_id
        return response()->json(['message' => "Listing quizzes for chapter ID: $chapter_id"]);
    }

    /**
     * Store a newly created quiz in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $chapter_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, $chapter_id)
    {
        // TODO: Validate quiz data (question, options, correct_option)
        // TODO: Ensure chapter_id exists and user is authorized (module creator/admin)
        // TODO: Create a new quiz record
        return response()->json(['message' => "Quiz created for chapter ID: $chapter_id"], 201);
    }

    /**
     * Display the specified quiz.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        // TODO: Retrieve quiz by ID
        return response()->json(['message' => "Displaying quiz with ID: $id"]);
    }

    /**
     * Update the specified quiz in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // TODO: Validate request data
        // TODO: Retrieve quiz by ID
        // TODO: Implement authorization (e.g., only module/chapter creator or admin)
        // TODO: Update quiz data
        return response()->json(['message' => "Updating quiz with ID: $id"]);
    }

    /**
     * Remove the specified quiz from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        // TODO: Retrieve quiz by ID
        // TODO: Implement authorization (e.g., only module/chapter creator or admin)
        // TODO: Delete quiz
        return response()->json(['message' => "Deleting quiz with ID: $id"]);
    }
}