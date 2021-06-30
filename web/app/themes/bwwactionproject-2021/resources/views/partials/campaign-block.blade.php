<div class="campaign-block">
    <div class="wrap">
        <div class="image">
            {!! the_post_thumbnail('large') !!}
        </div>
        <div class="text">
            <h3>{{ the_title() }}</h3>
            {{ the_excerpt() }}
            <a href="{{ the_permalink() }}" class="button">Learn More</a>
        </div>
    </div>
</div>