<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trendingGifs = Http::withToken(config('services.giphy.token'))
            ->get('https://api.giphy.com/v1/gifs/trending?api_key='.env('GTOKEN').'&limit=25&rating=pg')
            ->json()['data'];

        $trendingStickersGifs = Http::withToken(config('services.giphy.token'))
            ->get('https://api.giphy.com/v1/stickers/trending?api_key='.env('GTOKEN').'&limit=25&rating=pg')
            ->json()['data'];

        //dd($trendingStickersGifs);
        return view('home', [
            'trendingGifs' => array_slice($trendingGifs, 0, 12),
            'trendingStickersGifs' => array_slice($trendingStickersGifs, 0, 12),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Gif = Http::withToken(config('services.giphy.token'))
            ->get('https://api.giphy.com/v1/gifs/'.$id.'?api_key='.env('GTOKEN').'')
            ->json()['data'];

        // dd($Gif);
        return view('detail', [
            'Gif' => $Gif,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
