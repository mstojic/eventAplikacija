@extends('layouts.master')

@section('content')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6></h6>
            <h2>Uredite događaj</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-lg-6">
                <div id="eventImg">
                    <input type="file" name="image" class="form-control">

                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <form id="contact" method="POST" action="{{ route('organizer.events.update', $event->id) }}">
                @method('PATCH')
                @csrf
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Naziv" @isset($event) value="{{ $event->name }}" @endisset autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <select name="location_id" class="form-select" aria-label="Area" id="chooseCategory"
                          onchange="this.form.click()">
                              @foreach($locations as $location)
                                  <option value="{{ $location->id }}" @isset($event) @if($location->id == $event->location_id ) selected @endif @endisset>{{ $location->name }}</option>
                              @endforeach
                        </select>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="number" name="price" id="price" placeholder="Cijena"
                          required="" @isset($event) value="{{ $event->price }}" @endisset>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="date" name="date" id="date" placeholder="Datum"
                            required="" @isset($event) value="{{ $event->date }}" @endisset>
                        </fieldset>
                      </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <ul class="form-categories">
                                @foreach ($categories as  $category)
                                <li><input type="checkbox" name="categories[]" value={{ $category->id }} @if(in_array($category->id, $event->categories->pluck('id')->toArray())) checked @endif /> {{ $category->name }}</li>
                                @endforeach
                            </ul>
                        </fieldset>
                      <fieldset>
                        <textarea name="description" type="text" class="form-control" id="description" placeholder="Detalji"
                          required="" >@isset($event){{ $event->description }}@endisset</textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button "><i class="fa fa-users"></i>
                          Uredite događaj</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
