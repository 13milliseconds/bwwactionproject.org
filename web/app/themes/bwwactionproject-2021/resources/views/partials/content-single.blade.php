<article @php post_class() @endphp>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="category">{{ get_the_category()[0]->name }}</div>
          <h1 class="entry-title">{!! get_the_title() !!}</h1>
          {!! the_excerpt() !!}

          @php $website = get_field('website') @endphp
          @if($website)
              <a href="{{ $website }}" class="button" target="_blank">Visit</a>
          @endif
        </div>
        <div class="col-md-6">
          {!! the_post_thumbnail('large') !!}
        </div>
      </div>
    </div>
  </header>
  
  <section class="entry-content">
    <div class="container">
    @php the_content() @endphp
    </div>
  </section>
</article>
