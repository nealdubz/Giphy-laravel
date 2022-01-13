<div class="col-sm-6 col-md-3 d-flex align-items-stretch mt-2">
    <div class="card" style="width: 18rem;">
        <a class="text-center" href="/gif/{{   $gif['id'] }}">
            <img class="card-img-top" src="{{ $gif['images']['preview_gif']['url'] }}" alt="Giphy image">
            <div class="card-body">
                <h5 class="card-title">{{ substr($gif['title'], 0, 20) }}</h5>
            </div>
        </a>
    </div>
</div>
