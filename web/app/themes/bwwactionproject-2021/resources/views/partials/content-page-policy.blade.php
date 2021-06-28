<section id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>{{ the_title() }}</h1>
                @php the_content() @endphp
            </div>
            <div class="col-md-6">
                {!! the_post_thumbnail('medium') !!}
            </div>
    </div>
</section>

<section id="bills">
    <div class="container">
        <h2>{{ $data['bills']['title'] }}</h2>
        <p>{{ $data['bills']['introduction'] }}</p>
        <div class="all-bills">
                @php global $post @endphp
                @foreach ($bills as $post)
                    @php setup_postdata($post) @endphp
                    @include('partials.bill-block')
                    @php wp_reset_postdata() @endphp
                @endforeach
        </div>
    </div>
</section>

<section id="federal">
    <div class="container">
        <h2>{{ $data['federal_bills']['title'] }}</h2>
        @foreach ($data['federal_bills']['bills'] as $bill)
            <div class="fed-bill-block">
                <div class="row">
                    <div class="col-md-12">
                        <h3>{{ $bill['title'] }}</h3>
                    </div>
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                        {!! $bill['text'] !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>