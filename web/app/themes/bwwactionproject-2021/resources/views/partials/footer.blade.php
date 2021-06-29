<footer class="content-info">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <a class="brand" href="{{ home_url('/') }}">
          <img src="@asset('images/bwwap-logo-500.png')" />
        </a>
        <p class="copyright">&copy;{{ date( 'Y' ) }} {{ the_field('full_name', 'option') }}</p>
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
