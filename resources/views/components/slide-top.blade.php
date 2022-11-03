@if ($countImagesSlide >= 1)
    <div id="slideTop" class="carousel slide" data-bs-ride="true">
        @if ($countImagesSlide > 1)
            <div class="carousel-indicators">
                @foreach ($imagesSlide as $imageSlide)
                    <button type="button" data-bs-target="#slideTop" data-bs-slide-to={{($imageSlide['pos'] - 1)}} {!! $imageSlide['pos'] == 1 ?'class="active" aria-current="true"' : "" !!} aria-label="Slide {{$imageSlide['pos']}}"></button>
                @endforeach
            </div>
        @endif
        <div class="carousel-inner">
            @foreach ($imagesSlide as $imageSlide)
                <div class="carousel-item{{$imageSlide['pos'] == 1 ? " active" : ""}}">
                    <img src="{{ asset('assets/images/' . $imageSlide['imageSrc']) }}" class="d-block w-100" alt="{{ $imageSlide['imageName'] }}">
                </div>
            @endforeach
        </div>
        @if ($countImagesSlide > 1)
            <button class="carousel-control-prev" type="button" data-bs-target="#slideTop"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slideTop"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        @endif
    </div>
@endif
