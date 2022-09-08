@extends('layout.master')

      @include('layout.headerMenue',['country'=>$country])
      <!-- @includeFirst(['layout.headerMenue','layout.footerMenue']) -->
      <!-- @includeif('layout.headerMenue',['country'=>$country]) -->
      <!-- @includewhen(true,'layout.headerMenue',['country'=>$country]) -->
      <!-- @includeUnless(false,'layout.headerMenue',['country'=>$country]) -->

      @section('title','Home Page')

          <section class="py-5">
              <div class="container">
                <div class="row">
                    @foreach($country as $name)
                      <div class="col-lg-4 my-2">
                        <div class="card">
                            <img src="https://images.pexels.com/photos/414102/pexels-photo-414102.jpeg?cs=srgb&dl=pexels-pixabay-414102.jpg&fm=jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$name}}</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
          </section>

