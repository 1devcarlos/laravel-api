<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuestionController extends Controller
{
    public function fetchInsert() {
        $response = Http::get('https://quizapi.io/api/v1/questions', [
            'apiKey'=> 'GR1LWhjKZPm10xGvLFsZyghLjQrB2UeqSPtVuU8L',
            'limit'=> 10,
        ]);
        $questions = json_decode($response->body());
        foreach($questions as $q){
            $question = new Question();
    
            $question -> question = $q -> question; 
            $question -> answer_a = $q -> answers -> answer_a;
            $question -> answer_b = $q -> answers -> answer_b;
            $question -> answer_c = $q -> answers -> answer_c;
            $question -> answer_d = $q -> answers -> answer_d;
            $question -> save();
        }

        return "Data fecthed from external api and saved into Database!";
    }

    public function show() {
        $data['questions'] = Question::all();
        return view('welcome', $data);
    }
}
