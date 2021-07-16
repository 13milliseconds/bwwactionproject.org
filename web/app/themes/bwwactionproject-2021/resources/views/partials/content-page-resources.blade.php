<section id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>{{ the_title() }}</h1>
                {!! the_content() !!}
            </div>
            <div class="col-md-6">
                {!! the_post_thumbnail('large') !!}
            </div>
        </div>
    </div>
</section>


{{-- Ballot Guides --}}
<section id="resources">
    <div class="container">
        @foreach ($data['categories'] as $category)
            <div class="category-wrap">
                <h3>{{ $category['title'] }}</h3>
                <ul class="resources">
                @foreach ($category['resources'] as $item)
                    <li class="resource">
                        @php $link = $item[$item['type_of_resource']] @endphp
                        <a target="_blank" href="{{ $link }}">{{ $item['name'] }}</a>
                    </li>
                @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</section>
