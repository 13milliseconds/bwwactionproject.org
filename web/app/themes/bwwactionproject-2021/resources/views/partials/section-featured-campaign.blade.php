@if($data['featured_campaign'])
<section id="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text">
                @php 
                global $post;
                $post = $data['featured_campaign'];
                setup_postdata($post);
                @endphp
                <div class="category">{{ get_the_category()[0]->name }}</div>
                <h2>{{ the_title() }}</h2>
                {!! the_excerpt() !!}
                <a class="button" href="{{ the_permalink() }}">Learn More</a>
            </div>
            <div class="col-md-6">
                {!! the_post_thumbnail('large') !!}
            </div>
            @php wp_reset_postdata() @endphp
        </div>
    </div>
</section>
@endif