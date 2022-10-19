@extends('layouts.master')

@section('title')
  Koinoti Nav | Partnership
@endsection

@section('content')
  <main class="investors-page">
    <div class="investors-page__board board">
      <video
        class="video-card"
        width="320"
        height="240"
        autoplay
        loop
        muted>
        <source src="{{ asset('video/trimmed/opportunity.mp4') }}" type="video/mp4">
      </video>
      <div class="board__container container">
        <div class="investors-page__board-content">
          <h2>Land of <br> opportunity</h2>
          <p>Modern Tajikistan</p>
        </div>
        <button
          class="watch-video"
          data-src="{{ asset('video/opportunity.mp4') }}"
          onclick="window.playVideo(this)"
          style="margin-left: 240px"
          type="button">
          Watch the <br> video
        </button>
      </div>
    </div>

    <div class="container">
      <div class="investors-page__content">
        <div class="content">
          <h2>Message to investors</h2>
          <p>Attracting investment into the economy of the Republic of Tajikistan is one of the strategic objectives of the "KOINOTI NAV" Group. Timely and targeted investments are the drivers of the economy, they directly affect the creation of new jobs, the level and quality of life. Therefore, it is important to create comfortable working conditions and a favorable investment climate aimed at increasing the investment attractiveness of the Republic of Tajikistan. Today the Group of Companies "KOINOTI NAV" is a new space of opportunities and a huge potential for profitable investment. Our Group of Companies has a favorable business environment, comprehensive protection of investors' rights and investment incentives.</p>
        </div>
      </div>

      <x-contacts-list />

      <div class="investors-page__content">
        <div class="content">
          <h2>Contact us</h2>
          <p>Do you have any questions or want to discuss something with us? <br>
            Please contact our staff or send us a message and we will get back to you as soon as possible.</p>
          <a href="{{ route('projects') }}">Our projects</a>
        </div>
      </div>
    </div>
  </main>
@endsection
