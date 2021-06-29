<section id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>{{ the_title() }}</h1>
            </div>
            <div class="col-md-6">
                {!! the_post_thumbnail('large') !!}
            </div>
        </div>
    </div>
</section>

<section id="endorsements">
    <div class="container">
        <h2>Endorsements</h2>
        <div class="row">
            <div class="col-md-4 intro">
                {!! $data['endorsements']['introduction'] !!}
            </div>
            <div class="col-md-8">
                @foreach ($data['endorsements']['candidates'] as $item)
                    <div class="candidate">
                        <div class="image">
                            <img src="{{ $item['image']['sizes']['medium'] }}" />
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
            </div>
        </div>
    </div>
</section>


<section id="ballotGuides">
    <div class="container">
        <h2>{{ $data['ballot_guides']['title'] }}</h2>
        <p>{{ $data['ballot_guides']['text'] }}</p>
        <div class="guides row">
            @foreach ($data['ballot_guides']['guides'] as $guide)
                <div class="guide">
                    <div class="year">{{ $guide['year'] }}</div>
                    <a href="{{ $guide['pdf'] }}" target="_blank">
                        <img src="{{ $guide['thumbnail']['sizes']['medium'] }}" />
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>