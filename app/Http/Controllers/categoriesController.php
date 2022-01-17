<?php

namespace App\Http\Controllers;

use App\Services\GiphyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class categoriesController extends Controller
{
    public $giphyService;
    
    /**
     * Inject GiphyService
     */
    public function __construct(GiphyService $service)
    {   
        $this->giphyService = $service;
    }

    public function index()
    { 
        // Call GiphyService Index method
        $categories = $this->giphyService->GetCategories();
        // dd($categories);
        return view('categories', [ 
            'categories' =>  $categories ,
        ]);
    }

}
