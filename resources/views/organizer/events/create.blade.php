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

  <div class="organizer-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-lg-6">
                <div id="eventImg">
                    <div class="wrapper">
                        <div class="file-upload">
                          <input form="contact" type="file" name="image" />
                          <i class="fa fa-arrow-up"></i>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <form id="contact" method="POST" action="{{ route('organizer.events.store') }}" enctype="multipart/form-data">
                @csrf
                <!--<input type="file" name="image" class="form-control">-->
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
                            <div class="dropdown">
                                <div class="form-select form-select-category" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Kategorije
                                </div>
                                <ul class="dropdown-menu checkbox-menu allow-focus" aria-labelledby="dropdownMenuButton1">
                                  @foreach ($categories as  $category)
                                    <li class="dropdown-item"><label><input type="checkbox" name="categories[]" value={{ $category->id }} /> {{ $category->name }} </label></li>
                                  @endforeach
                                </ul>
                              </div>
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
