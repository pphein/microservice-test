<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SurveyController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();

        Log::info("Data >> " . print_r($data, true));

        $survey = new Survey();
        $survey->name = $data['name'];
        $survey->age = $data['age'];
        $survey->occupation = $data['occupation'];

        $survey->save();

        return response()->json([
            'message' => 'successfully created'
        ], 200);
    }

    public function get()
    {
        $data = Survey::all();
        return  response()->json([
            'data' => $data
        ], 200);
    }
}