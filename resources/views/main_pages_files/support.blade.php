<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> {{ __('messages.title_support') }}</title>
    <!-- favicons Icons -->
    @include('main_pages_files.inc.head')

</head>

<body>

    @if (session('failed'))
        <div class="background_msg">
          <div class="modal_msg animate__animated animate__lightSpeedInRight">
          <p>{!! __('messages.session_failed') !!}</p>
          <p>{!! __('messages.session_failed2') !!}</p>
          <a href="/profile" class="read_more">{!! __('messages.go_to_profile') !!}</a>
          <button onclick="window.location.reload()" 
          class="closeRead">{!! __('messages.global_close') !!}</button>
          </div>
        </div>
      @endif 

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
      
        @include('main_pages_files.inc.header')
     

        
        <section class="pricing-one pricing-one--page">
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>
                        {{ __('messages.support_plans') }}
                    </h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title bw-split-in-left">    {{ __('messages.support_by_subscribing') }}, <br>     {{ __('messages.support_you_make_it_possible') }}</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-xl-4 wow fadeInUp" style="--accent-color: #66acf2;" data-wow-delay="00ms">
                        <div class="pricing-one__card text-center">
                            <div class="pricing-one__card__top">
                                <div class="pricing-one__card__top__bg"></div>
                                <div class="pricing-one__card__icon">
                                    <i class="icon-zakat"></i>
                                </div><!-- /.pricing-one__card__icon -->
                                <h6 class="pricing-one__card__title"> {{ __('messages.plan_basic') }}</h6>
                                <h5 class="pricing-one__card__price">{{ __('messages.plan_basic_price') }}</h5><!-- /.pricing-one__card__price -->
                            </div>
                            <a href="{{ route('checkout', ['plan' => 'price_1Qb8AhGBUEBHTd3SiPpgghel'])}}" class="careox-btn"><span>{{ __('messages.buy_subscription') }}</span></a>
                        </div><!-- /.pricing-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-xl-4 wow fadeInUp" style="--accent-color: #66acf2;" data-wow-delay="100ms">
                        <div class="pricing-one__card text-center">
                            <div class="pricing-one__card__top">
                                <div class="pricing-one__card__top__bg"></div>
                                <div class="pricing-one__card__icon">
                                    <i class="icon-messages"></i>
                                </div><!-- /.pricing-one__card__icon -->
                                <h6 class="pricing-one__card__title">{{ __('messages.plan_average') }}</h6>
                                <h5 class="pricing-one__card__price">{{ __('messages.plan_average_price') }}</h5><!-- /.pricing-one__card__price -->
                            </div>
                            <a href="{{ route('checkout', ['plan' => 'price_1Qb8AsGBUEBHTd3SF0vSVm73'])}}" class="careox-btn"><span>{{ __('messages.buy_subscription') }}</span></a>
                        </div><!-- /.pricing-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-xl-4 wow fadeInUp" style="--accent-color: #66acf2;" data-wow-delay="200ms">
                        <div class="pricing-one__card text-center">
                            <div class="pricing-one__card__top">
                                <div class="pricing-one__card__top__bg"></div>
                                <div class="pricing-one__card__icon">
                                    <i class="icon-multiple-users-silhouette"></i>
                                </div><!-- /.pricing-one__card__icon -->
                                <h4 class="pricing-one__card__title">{{ __('messages.plan_advanced') }}</h4>
                                <h3 class="pricing-one__card__price">{{ __('messages.plan_advanced_price') }}</span></h3><!-- /.pricing-one__card__price -->
                            </div>
                          
                            <a href="{{ route('checkout', ['plan' => 'price_1Qb9p6GBUEBHTd3SaryqDDXm'])}}" class="careox-btn"><span>{{ __('messages.buy_subscription') }}</span></a>
                        </div><!-- /.pricing-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.pricing-one -->

        
        <section>
            <div class="container">
                <div class="sec-title text-center">
                    <h3 class="sec-title__title bw-split-in-left">{{ __('messages.faq') }}</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title --><!-- section-title -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="faq-one__accordion careox-accrodion" data-grp-name="careox-accrodion">
                            <div class="accrodion" style="--accent-color: #ffa415">
                                <div class="accrodion-title">
                                    <h4>
                                        <span class="accrodion-title__number"></span>
                                {{ __('messages.support_faq_question1') }}

                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                             {{ __('messages.support_faq_answer1') }}
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                     
                            <div class="accrodion" style="--accent-color: #399be7">
                                <div class="accrodion-title">
                                    <h4>
                                        <span class="accrodion-title__number"></span>
                                              {{ __('messages.support_faq_question2') }}

                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                       {{ __('messages.support_faq_answer2') }}

                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->


                        </div>
                    </div><!-- /.col-xl-6 -->
                    <div class="col-xl-6">
                        <div class="faq-one__accordion careox-accrodion" data-grp-name="careox-accrodion">
                            <div class="accrodion" style="--accent-color: #ffa415">
                                <div class="accrodion-title">
                                    <h4>
                                        <span class="accrodion-title__number"></span>
                                        {{ __('messages.support_faq_question3') }}

                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            {{ __('messages.support_faq_answer3') }}
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion" style="--accent-color: #fc5528">
                                <div class="accrodion-title">
                                    <h4>
                                        <span class="accrodion-title__number"></span>
                                          {{ __('messages.support_faq_question4') }}

                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                           {{ __('messages.support_faq_answer4') }}
                                            
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                         

                        </div>
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.faq-one -->


        @include('main_pages_files.inc.footer')


    </div><!-- /.page-wrapper -->


</body>

</html>