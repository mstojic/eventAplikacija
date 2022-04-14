@extends('layouts.master')

@section('content')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6>Popis svih događaja koje ste kreirali</h6>
            <h2>Vaši oglasi</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center pt-5">
  <a class="btn btn-lg btn-success" href="{{ route('organizer.events.create') }}" role="button">
    <i class="fa fa-plus" aria-hidden="true"></i>
    Dodajte novi događaj
</a>
  </div>
  <div class="listing-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">

                <div class="col-lg-12">
                  <ul class="nacc">
                      <div>
                        @foreach($events as $event)
                        @if ($event->organizer->id == auth()->user()->id)
                        <div class="col-lg-12">
                          <div class="owl-carousel owl-listing">
                                    <div class="item">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <div class="listing-item">
                                            <div class="left-image">
                                            <a href="{{ route('organizer.events.edit', $event->id) }}"><img src="{{ $event->image }}" alt=""></a>
                                            <div class="hover-content">
                                                <div class="main-white-button">
                                                <a href="{{ route('organizer.events.edit', $event->id) }}"><i class="fa fa-eye"></i> Uredite podatke</a>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="right-content align-self-center">
                                            <a href="{{ route('organizer.events.edit', $event->id) }}">
                                                <h4>{{ Str::of($event->name)->limit(50) }}</h4>
                                            </a>
                                            <h6>Organizator: {{ $event->organizer->name }}</h6>
                                            <span class="price">
                                                <div class="icon"><img src="/assets/images/listing-icon-01.png" alt=""></div>
                                                {{ $event->price }} KM
                                            </span>
                                            <span class="details">Detalji: <em>{{ Str::of($event->description)->limit(70) }}</em></span>
                                            <span class="info">
                                                <img src="/assets/images/listing-icon-02.png" alt=""> 2 Sobe<br>
                                                <img src="/assets/images/listing-icon-03.png" alt=""> 3 Kupatila

                                            </span><br>
                                            <button type="button" class="btn btn-sm btn-danger mt-3"  onclick="event.preventDefault();
                                            document.getElementById('delete-event-form-{{ $event->id }}').submit()">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                Uklonite događaj
                                            </button>
                                            <form id="delete-event-form-{{ $event->id }}" action="{{ route('organizer.events.destroy', $event->id) }}" method="POST" style="display: none">
                                                @csrf
                                                @method("DELETE")
                                            </form>

                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>

                          </div>
                        </div>
                        @endif
                        @endforeach
                      </div>
                    </li>


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
