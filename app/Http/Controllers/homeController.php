<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\GiphyService;

class homeController extends Controller
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
        $data = $this->giphyService->GetIndexData();

        // Return View
        return view('home', [
            'trendingGifs' => array_slice($data['trendingGifs'], 0, 12),
            'trendingStickersGifs' => array_slice($data['trendingStickers'], 0, 12),
        ]);
    }

    public function show($id)
    {
        $data = $this->giphyService->GetGif($id);

        // Return View
        return view('detail', [
            'Gif' => $data['Gif'],
        ]);
    }
}
