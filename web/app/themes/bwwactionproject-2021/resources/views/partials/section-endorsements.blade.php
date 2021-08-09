@if($endorsements['display'])
<section class="endorsements">
    <div class="container">
        <h2>{{ $endorsements['title'] }}</h2>
        <div class="row">
            <div class="col-md-6 intro">
                {!! $endorsements['introduction'] !!}
            </div>
            <div class="col-md-6">
                @if($endorsements['candidates'])
                @foreach ($endorsements['candidates'] as $item)
                    <div class="candidate">
                        <div class="image">
                            @if($item['image'])
                                <img src="{{ $item['image']['sizes']['medium'] }}" />
                            @endif
                        </div>
                        <div class="text">
                            <h3>{{ $item['name'] }}</h3>
                            {!! $item['description'] !!}
                            @if($item['link'])
                            <a class="button" target="_blank" href="{{ $item['link'] }}">Learn More</a>
                            @endif
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
@endif