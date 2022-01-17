<?php   

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GiphyService 
{   
    /**
     * Get Index data
     */
    public function GetIndexData()
    {
        $trendingGifs = Http::get('https://api.giphy.com/v1/gifs/trending?api_key='.env('GTOKEN').'&limit=25&rating=pg')
            ->json()['data'];

        $trendingStickersGifs = Http::get('https://api.giphy.com/v1/stickers/trending?api_key='.env('GTOKEN').'&limit=25&rating=pg')
            ->json()['data'];

        return [
            'trendingGifs'=>$trendingGifs,
            'trendingStickers'=> $trendingStickersGifs  
        ];    
    }

    /**
     * Get Gif
     */
    public function GetGif($id)
    {
        $Gif = Http::withToken(config('services.giphy.token'))
            ->get('https://api.giphy.com/v1/gifs/'.$id.'?api_key='.env('GTOKEN').'')
            ->json()['data'];

        return [
            'Gif'=>$Gif
        ];    
    }

    /**
     * Get Categories
     */
    public function GetCategories()
    {
        $categories = Http::withToken(config('services.giphy.token'))
            ->get('api.giphy.com/v1/gifs/categories?api_key='.env('GTOKEN').'')
            ->json()['data'];

        return $categories;    
    }
}