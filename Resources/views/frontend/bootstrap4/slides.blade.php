@foreach($slider->slides as $index => $slide)
    <div class="carousel-item @if($index === 0) active @endif ">
        <img class="d-block w-100" src="{!! $slide->getImageUrl() !!}" alt="{{ $slide->title }}">
        @if(!empty($slide->getLinkUrl()))
            <a href="{{ $slide->getLinkUrl() }}" target="{{ $slide->target }}">
        @endif
        <div class="carousel-caption d-none d-md-block">
            <h3 class="slide-title animated fadeInDown">{{ $slide->title }}</h3>
            <h5 class="slide-text animated fadeIn">{{ $slide->caption }}</h5>
            {!! $slide->custom_html !!}
        </div>
        @if(!empty($slide->getLinkUrl()))
            </a>
        @endif
    </div>
@endforeach
