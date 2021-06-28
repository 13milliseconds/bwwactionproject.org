<div class="bill-block">
    <header>
        <div class="text">
            <p>{{ the_title() }}</p>
            <h3>{{ the_field('full_title') }}</h3>
        </div>
        <div class="toggle"></div>
    </header>
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                {!! the_post_thumbnail('large') !!}
            </div>
            <div class="col-md-6">
                {{ the_content() }}
            </div>
        </div>
    </div>
</div>