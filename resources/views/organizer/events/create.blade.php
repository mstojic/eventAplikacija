@extends('layouts.master')

@section('content')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6></h6>
            <h2>Kreirajte novi događaj</h2>
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
                <form id="contact" method="POST" action="{{ route('organizer.events.store') }}">
                @csrf
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Naziv" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <select name="location_id" class="form-select" aria-label="Area" id="chooseCategory"
                          onchange="this.form.click()">
                          <option selected>Sva mjesta</option>
                              @foreach($locations as $location)
                                  <option value="{{ $location->id }}">{{ $location->name }}</option>
                              @endforeach
                        </select>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="number" name="price" id="price" placeholder="Cijena"
                          required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="date" name="date" id="date" placeholder="Datum"
                            required="">
                        </fieldset>
                      </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <ul class="items">
                                @foreach ($categories as  $category)
                                <li><input type="checkbox" name="categories[]" value={{ $category->id }} /> {{ $category->name }} </li>
                                @endforeach

                              </ul>
                        </fieldset>
                      <fieldset>
                        <textarea name="description" type="text" class="form-control" id="description" placeholder="Detalji"
                          required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button "><i class="fa fa-users"></i>
                          Organizirajte događaj</button>
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
