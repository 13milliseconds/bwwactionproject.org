<section id="top">
    <div class="container">
        <h1>Black Women For Wellness <strong>Action Project</strong></h1>
        <div class="wrap">
            <div class="text">
                {!! $data['header']['text'] !!}
            </div>
            <div class="image">
                <img src="{{ $data['header']['image']['sizes']['medium'] }}"/>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $data['left_column']['image']['sizes']['large'] }}"/>
                {!! $data['left_column']['text'] !!}
            </div>
            <div class="col-md-6">
                @php the_content() @endphp
            </div>
        </div>
    </div>
</section>