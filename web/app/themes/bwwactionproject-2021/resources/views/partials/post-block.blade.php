@php $category = get_the_category()[0] @endphp

@if($category->term_id == 5)
    @php 
        $buttonText = 'Visit'; 
        $link = get_field('link');
    @endphp
@else
    @php 
        $buttonText = 'Learn More';
        $link = get_permalink();
    @endphp
@endif

<div class="post-block">
    <div class="wrap">
        <div class="image">
            {!! the_post_thumbnail('medium') !!}
        </div>
        <div class="text">
            <div class="category">{{ $category->name }}</div>
            <h3><a href="{{ $link }}" @if($category->term_id == 5) target="_blank" @endif>{{ the_title() }}</a></h3>
            {{ the_excerpt() }}
            <a href="{{ $link }}" class="button" @if($category->term_id == 5) target="_blank" @endif>{{ $buttonText }}</a>
        </div>
    </div>
</div>