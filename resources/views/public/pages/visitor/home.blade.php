@extends('public.layouts.public-master')

@section('front_title','Home')

@section('public-content')

<section id="featured">
    <!-- start slider -->
    <div id="slider" class="sl-slider-wrapper demo-2">
      <div class="sl-slider">

        {{-- <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2"> --}}
          
            @foreach ($photos as $key => $item)

              <div class="sl-slide" @if($key+1==1) data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2" 
                                    @elseif($key+1==2) data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5"
                                    @elseif($key+1==3) data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1"
                                    @elseif($key+1==4) data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1"
                                    @elseif($key+1==5) data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"
                                    @endif >

                  <div class="sl-slide-inner">
                      <div class="bg-img">
                          <img src="{{asset("$item->photo")}}">
                      </div>
                      <br><br>
                      <h2><strong> @if(isset($item->title)) {{$item->title}} @else <br> @endif</strong></h2>
                      <blockquote>
                        <p> <strong> {{$item->description}} </strong> </p>
                        <cite>{{$item->author}}</cite>
                      </blockquote>
                  </div>
              </div>
            @endforeach

        {{-- </div> --}}


        {{-- <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-2">
            </div>
            <h2><strong>Twitter</strong> bootstrap</h2>
            <blockquote>
              <p>
                Until he extends the circle of his compassion to all living things, man will not himself find peace.
              </p>
              <cite>Ramond Schummiler</cite>
            </blockquote>
          </div>
        </div> --}}
        {{-- <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-3">
            </div>
            <h2><strong>Responsive</strong> layout</h2>
            <blockquote>
              <p>
                Thousands of people who say they 'love' animals sit down once or twice a day to enjoy the flesh of creatures who have been utterly deprived of everything that could make their lives worth living and who endured the awful suffering and the terror of the
                abattoirs.
              </p>
              <cite>Andress Michel Aorta</cite>
            </blockquote>
          </div>
        </div> --}}
        {{-- <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-4">
            </div>
            <h2><strong>Awesome</strong> features</h2>
            <blockquote>
              <p>
                The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.
              </p>
              <cite>Smilee Bounvaller</cite>
            </blockquote>
          </div>
        </div> --}}
        {{-- <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-5">
            </div>
            <h2><strong>Premium</strong> support</h2>
            <blockquote>
              <p>
                I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.
              </p>
              <cite>Clarke Edward Thompson</cite>
            </blockquote>
          </div>
        </div> --}}
      </div>
      <!-- /sl-slider -->
      <nav id="nav-dots" class="nav-dots">
        <span class="nav-dot-current"></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </nav>
    </div>
    <!-- /slider-wrapper -->
    <!-- end slider -->
</section>

@endsection


              {{-- <div class="bg-img bg-img-1"> --}}
