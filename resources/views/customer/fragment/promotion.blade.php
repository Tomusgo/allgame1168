<div class="row">
    @foreach ($promotions as $p)
    <div class="col-4" style="padding: 2px;">
        <img class="btn-image-modal w-100 img-fluid promotion-img" src="{{ $p['image'] }}" alt="{{ $p['name'] }}">
    </div>
    @endforeach
</div>