<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter; 
use App\Models\ChapterProgress; 
use App\Models\Module; 
use App\Models\ModuleProgress;
use Carbon\Carbon; 

class ProgressController extends Controller
{
    /**
     * Mark a chapter as completed for the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $chapter_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function completeChapter(Request $request, $chapter_id)
    {
        return response()->json(['message' => "Chapter $chapter_id marked as complete"]);
    }

    /**
     * Get all chapter progress for a specific user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $user_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUserChapterProgress(Request $request, $user_id)
    {
        return response()->json(['message' => "Listing chapter progress for user ID: $user_id"]);
    }

    /**
     * Get all module progress for a specific user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $user_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUserModuleProgress(Request $request, $user_id)
    {
        // TODO: Implement authorization (only user themselves or admin can view)
        // TODO: Retrieve all ModuleProgress records for the user
        return response()->json(['message' => "Listing module progress for user ID: $user_id"]);
    }

    /**
     * Get module progress for the current authenticated user for a specific module.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $module_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getModuleProgressForCurrentUser(Request $request, $module_id)
    {
        // TODO: Retrieve authenticated user
        // TODO: Find ModuleProgress for the user and module
        return response()->json(['message' => "Displaying module $module_id progress for current user"]);
    }

    // TODO: Anda akan membutuhkan metode protected untuk updateModuleProgress($userId, $moduleId)
    // protected function updateModuleProgress($userId, $moduleId) { ... }
}