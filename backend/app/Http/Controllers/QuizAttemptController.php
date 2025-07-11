<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class QuizAttemptController extends Controller
{
    /**
     * Store a new quiz attempt for the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $quiz_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, $quiz_id)
    {
        return response()->json(['message' => "Quiz attempt recorded for quiz ID: $quiz_id"]);
    }

    /**
     * Get quiz attempts for a specific user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $user_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUserQuizAttempts(Request $request, $user_id)
    {
        return response()->json(['message' => "Listing quiz attempts for user ID: $user_id"]);
    }

    /**
     * Display the specified quiz attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $id)
    {
        return response()->json(['message' => "Displaying quiz attempt with ID: $id"]);
    }
}