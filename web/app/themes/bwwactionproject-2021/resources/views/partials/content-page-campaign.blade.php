<section id="top">
    <div class="container">
        <h1>{{ the_title() }}</h1>
        @php the_content() @endphp
    </div>
</section>

<section id="campaigns">
    <div class="container">
        <div class="container">
            <div id="feature">
                @php global $post @endphp
                @php $post = $data['featured_campaign'] @endphp
                @php setup_postdata($post) @endphp
                @include('partials.campaign-block')
                @php wp_reset_postdata() @endphp
            </div>

        <div class="row">
            @foreach ($campaigns as $post)
            @php setup_postdata($post) @endphp
            <div class="col-md-6">
                @include('partials.campaign-block')
            </div>
            @php wp_reset_postdata() @endphp
        @endforeach
        </div>
    </div>
</section>