@extends('layout')

@section('main')

    <!-- main -->
    <main class="container">
      <section class="single-blog-post">
        <h1>About Me</h1>
        <div class="single-blog-post-ContentImage" data-aos="fade-left">
          <img src="{{asset('images/photography.jpg')}}" alt="" />
        </div>

        <div>
          <p class="about-text">
            I am Md. Irfan Hosain. I want to like travel, sloving problem,
            playing different type of indoor and outdoor games.
            My main focus on feel my life with different phases.
            <br /><br />
          </p>
        </div>
      </section>
    </main>
@endsection
