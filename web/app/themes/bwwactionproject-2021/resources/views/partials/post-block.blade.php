<div class="post-block">
    <div class="wrap">
        <div class="image">
            {!! the_post_thumbnail('medium') !!}
        </div>
        <div class="text">
            <div class="category">{{ get_the_category()[0]->name }}</div>
            <h3><a href="{{ the_permalink() }}">{{ the_title() }}</a></h3>
            {{ the_excerpt() }}
            <a href="{{ the_permalink() }}" class="button">Learn More</a>
        </div>
    </div>
</div>