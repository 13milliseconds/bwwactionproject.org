<section id="top">
        <div class="text">
            <h1>{{ $data['top']['mission_statement'] }}</h1>
        </div>
        <div class="container">
            <div class="images">
                <img src="{{ $data['top']['image_1']['sizes']['large'] }}" />
                <img src="{{ $data['top']['image_2']['sizes']['large'] }}" />
            </div>
        </div>
    </section>
    
    <section id="content">
        <div class="container">
            @php the_content() @endphp
        </div>
    </section>
    
    <section id="donate">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ $data['donate']['image']['sizes']['large'] }}" />
                </div>
            <div class="col-md-6 text">
                <h2>{{ $data['donate']['title'] }}</h2>
                <p>{{ $data['donate']['text'] }}</p>
                <a class="button" href="/donate">{{ $data['donate']['button_text'] }}</a>
            </div>
        </div>
    </div>
</section>

@if($data['feature'])
<section id="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text">
                @php 
                global $post;
                $post = $data['feature'];
                setup_postdata($post);
                @endphp
                <div class="category">{{ get_the_category()[0]->name }}</div>
                <h2>{{ the_title() }}</h2>
                {!! the_excerpt() !!}
                <a class="button" href="link">Learn More</a>
            </div>
            <div class="col-md-6">
                {!! the_post_thumbnail('large') !!}
            </div>
            @php wp_reset_postdata() @endphp
        </div>
    </div>
</section>
@endif

<section id="newsletter">
    <div class="container">
        <h2>{{ $data['newsletter']['title'] }}</h2>
        <p>{{ $data['newsletter']['text'] }}</p>
        Form
    </div>
</section>

<section id="latest">
    <div class="container">
        <h2>Latest News</h2>
        <div class="row">
        @foreach ($posts as $post)
            @php setup_postdata($post) @endphp
            <div class="col-md-4">
                @include('partials.post-block')
            </div>
            @php wp_reset_postdata() @endphp 
        @endforeach
        </div>
    </div>
</section>