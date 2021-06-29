<footer class="content-info">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <p>{{ the_field('full_name', 'option') }}</p>
        <p>&copy;{{ date( 'Y' ) }} {{ get_bloginfo( 'name' ) }}</p>
      </div>
      <div class="col-md-4">
        <h3>Get In Touch</h3>
        {!! the_field('contact_information', 'option') !!}
      </div>
      <div class="col-md-4">
        <h3>Follow Us</h3>
        <ul>
        @php $links = get_field('social_links', 'option') @endphp
        @foreach ($links as $link)
          <li>
            <a href="{{ $link['url'] }}" target="_blank">{{ $link['name'] }}</a>
          </li>
        @endforeach
        </ul>
      </div>
    </div>
  </div>
</footer>
