<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Search extends Component
{
    public $search=''; 

    public function render()
    {
        $searchResults = [];
        if (strlen($this->search) >= 2) { 
            $searchResults = Http::withToken(config('services.giphy.token'))
                ->get('https://api.giphy.com/v1/gifs/search?api_key='.env('GTOKEN').'&q='.$this->search.'&limit=25&offset=0&rating=g&lang=en' )
                ->json()['data'];
        } 
        return view('livewire.search',[
            "searchResults" => collect($searchResults)->take(8)
        ]);
    }
}
