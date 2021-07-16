<section id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>{{ the_title() }}</h1>
                {!! the_content() !!}
            </div>
            <div class="col-md-6">
                {!! the_post_thumbnail('large') !!}
            </div>
        </div>
    </div>
</section>

{{-- Endorsements --}}
@php $endorsements = $data['current_endorsements'] @endphp
@include('partials.section-endorsements')


{{-- Ballot Guides --}}
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


{{-- Endorsements --}}
@php $endorsements = $data['past_endorsements'] @endphp
@include('partials.section-endorsements')


{{-- Featured Campaign --}}
@include('section-featured-campaign')