<section id="top">
    <div class="container">
        <h1>{{ the_title() }}</h1>
        @php the_content() @endphp
    </div>
</section>

<section id="campaigns">
    <div class="container">
        @php global $post @endphp
        @foreach ($campaigns as $post)
            @php setup_postdata($post) @endphp
            @include('partials.campaign-block')
            @php wp_reset_postdata() @endphp
        @endforeach
    </div>
</section>