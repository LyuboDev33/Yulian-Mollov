<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>   {{ __('messages.title_discover_page') }}</title>
    <!-- favicons Icons -->

    

    @include('main_pages_files.inc.head')

</head>

<body>

    <!-- /.preloader -->
    <div class="page-wrapper">
        @include('main_pages_files.inc.header')
   

        <section class="donations-one">
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>
                       {{ __('messages.global_causes') }}
                    </h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title bw-split-in-left">
                     {{ __('messages.title_discover_page') }}
                    </h3><!-- /.sec-title__title -->
               
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">

                  @foreach ($all_causes as $cause)
                  <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="donations-one__item" style="--accent-color: #0d6efd;">
                        <div class="donations-one__item__image">
                            <img src="/assets_dashboard/images/main_images/{{$cause->cause_main_image}}" alt="{{$cause->cause_name}}">
                            <a href="/discover/{{$cause->id}}" class="donations-one__item__image__link"></a>
                            {{-- <div class="donations-one__item__category">Категория</div> --}}
                        </div>
                        <div class="donations-one__item__content">
                            <p class="donations-one__item__title"><a href="/discover/{{$cause->id}}">{{$cause->cause_name}}</a></p>
                            <p class="donations-one__item__text">{!! Str::limit($cause->cause_description, 100, '...') !!}</p>
                            <a class="donations-one__item__rm" href="/discover/{{$cause->id}}">
                               {!! __('messages.discover_make_donation') !!}
                    
                            </a>
                        </div>
                        <div class="donations-one__item__bottom">
                            {{-- <div class="donations-one__item__bottom__shape" style="background-image: url(assets/images/shapes/d-shape-1.png);"></div> --}}
                            <div class="donations-one__item__bottom__progress">
                         <div class="donations-one__item__bottom__progress__inner count-bar" 
                            data-percent="{{ number_format(((float) ($cause->cause_amount_collected ?? 0) * 100) / ((float) ($cause->cause_desired_amount ?? 1)), 0) }}%">
                            <div class="donations-one__item__bottom__progress__number count-text">
                                {{ number_format((((float) ($cause->cause_amount_collected ?? 0) * 100) / ((float) ($cause->cause_desired_amount ?? 1))), 0) }}%
                            </div>
                        </div>
                            </div>
                            <div class="donations-one__item__bottom__text">
                                <span> {!! __('messages.discover_donated') !!}: <br> {{ $cause->all_sum }} EUR</span>
                                <span>{!! __('messages.discover_desired_amount') !!}: <br> {{ number_format((float) ($cause->cause_desired_amount ?? 0), 2, '.', '') }} EUR</span>
                            </div>
                        </div><!-- /.donations-one__item__bottom -->
                    </div>
                </div><!-- /.item -->
               
                  @endforeach
                  
                </div><!-- /.row -->
            </div>
        </section>



        @include('main_pages_files.inc.footer')
    </div><!-- /.page-wrapper -->





   
</body>

</html>