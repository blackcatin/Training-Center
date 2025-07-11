<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Certificate; // Nanti uncomment ini
// use App\Models\Module; // Nanti uncomment ini
// use App\Models\ModuleProgress; // Nanti uncomment ini
// use Carbon\Carbon; // Nanti uncomment ini

class CertificateController extends Controller
{
    /**
     * Get certificates for a specific user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $user_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUserCertificates(Request $request, $user_id)
    {
        // TODO: Implement authorization (only user themselves or admin can view)
        // TODO: Retrieve all Certificate records for the user
        return response()->json(['message' => "Listing certificates for user ID: $user_id"]);
    }

    /**
     * Display the specified certificate.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $id)
    {
        // TODO: Retrieve certificate by ID
        // TODO: Implement authorization (only owner or admin)
        return response()->json(['message' => "Displaying certificate with ID: $id"]);
    }

    /**
     * Issue a certificate for a completed module.
     * This method typically requires specific conditions to be met (e.g., 100% module completion, passing score).
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $module_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function issueCertificate(Request $request, $module_id)
    {
        return response()->json(['message' => "Certificate issued for module ID: $module_id"], 201);
    }
}