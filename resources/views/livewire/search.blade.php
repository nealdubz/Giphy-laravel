<div class="searchBar position-relative mt-2">
    <input wire:model.debounce.500ms="search" type="text" class="search-input" placeholder="Search" />
    <div class="position-absolute search-glass">
        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24">
            <path class="heroicon-ui"
                d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z" />
        </svg>
    </div>
    <div wire:loading class="spinner mr-4 mt-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38">
            <defs>
                <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
                    <stop stop-color="#fff" stop-opacity="0" offset="0%" />
                    <stop stop-color="#fff" stop-opacity=".631" offset="63.146%" />
                    <stop stop-color="#fff" offset="100%" />
                </linearGradient>
            </defs>
            <g fill="none" fill-rule="evenodd">
                <g transform="translate(1 1)">
                    <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2">
                        <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18"
                            dur="0.9s" repeatCount="indefinite" />
                    </path>
                    <circle fill="#fff" cx="36" cy="18" r="1">
                        <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18"
                            dur="0.9s" repeatCount="indefinite" />
                    </circle>
                </g>
            </g>
        </svg>
    </div>
    @if (strlen($search) >= 2)
        <h5 class="text-white mt-2">Search Results for '{{ $search }}'</h5>
        <div class="row">
            @if (count($searchResults) == 0){
                <div class="col-12"><p class="text-white text-center"> No search results found.</p></div>
            @else
                @foreach ($searchResults as $gif)
                    <x-gif-card :gif="$gif" />
                @endforeach
            @endif
        </div>
    @endif
</div>
