<section id="top">
    <div class="wrap">
        <h1>{{ $data['top']['mission_statement'] }}</h1>
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
                Image
            </div>
            <div class="col-md-6">
                <h2>{{ $data['donate']['title'] }}</h2>
                <p>{{ $data['donate']['text'] }}</p>
                <a class="button" href="/donate">{{ $data['donate']['button_text'] }}</a>
            </div>
        </div>
    </div>
</section>

{{-- @if($data['feature']) --}}
<section id="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                Cat
                <h2>Title</h2>
                <p>Excerpt</p>
                <a class="button" href="link">Learn More</a>
            </div>
            <div class="col-md-6">
                Image
            </div>
        </div>
    </div>
</section>
{{-- @endif --}}

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
        the last posts
    </div>
</section>