<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\WordResource;
use App\Word;


class WordController extends Controller
{
    private $with = ['definitions'];

    public function index() {
        $words = Word::inRandomOrder()->limit(100)->get();
        return WordResource::collection($words->load($this->with));
    }
}
