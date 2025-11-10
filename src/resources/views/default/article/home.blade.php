<div class="row g-4 justify-content-center">
    @foreach($items as $item)
        <div class="col-lg-3 col-md-6 col-sm-10 wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".5s">
            <div class="step-card step-card-default p-4 rounded-4 border position-relative">
                <span class="step-number mb-20">
                    {{ sprintf('%02d', $loop->iteration) }}
                </span>
                <h3 class="step-title mb-15">{{$item->title}}</h3>
                {!! str_replace('<p>', '<p class="step-description">', $item->text) !!}
            </div>
        </div>
    @endforeach
</div>