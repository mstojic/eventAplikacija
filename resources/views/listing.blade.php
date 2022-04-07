@extends('layouts.master')

@section('content')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6>Pogledajte dostupne oglase</h6>
            <h2>Oglasi za različite kategorije</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="listing-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    @foreach($categories as $category)
                        @if($loop->first)
                            <div id={{ $category->name }} class="first-thumb active">
                        @else
                            <div id={{ $category->name }} class="first-thumb">
                        @endif
                                <div class="thumb">
                                    <span class="icon"><img src="assets/images/search-icon-01.png" alt=""></span>
                                    {{ $category->name }}
                                </div>
                            </div>
                    @endforeach
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                      @foreach($categories as $category)
                    <!-- first category listing of items -->
                    @if($loop->first)
                    <li class="active">
                    @else
                    <li class="">
                    @endif
                      <div>
                        <div class="col-lg-12">
                          <div class="owl-carousel owl-listing">

                            @foreach($events as $event)
                                @foreach ($event->categories as $event_category )
                                    @if ($event_category->name == $category->name)
                                    <div class="item">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <div class="listing-item">
                                            <div class="left-image">
                                            <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                            <div class="hover-content">
                                                <div class="main-white-button">
                                                <a href="contact"><i class="fa fa-eye"></i> Kontakt</a>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="right-content align-self-center">
                                            <a href="#">
                                                <h4>{{ Str::of($event->name)->limit(30) }}</h4>
                                            </a>
                                            <h6>Organizator: {{ $event->organizer->name }}</h6>
                                            <span class="price">
                                                <div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>
                                                {{ $event->price }} KM
                                            </span>
                                            <span class="details">Detalji: <em>{{ Str::of($event->description)->limit(35) }}</em></span>
                                            <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2
                                                Sobe<br><img src="assets/images/listing-icon-03.png" alt=""> 3
                                                Kupatila</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    @endif
                                @endforeach
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </li>
                    @endforeach

                    <!-- second category listing of items -->


                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
