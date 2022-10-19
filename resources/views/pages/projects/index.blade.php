@extends('layouts.master')

@section('title')
  Koinoti Nav | Projects
@endsection

@section('content')
  <main class="projects-page">
    <div class="history-page__board board">
      <video
        class="video-card"
        width="320"
        height="240"
        autoplay
        loop
        muted>
        <source src="{{ asset('video/trimmed/about.mp4') }}" type="video/mp4">
      </video>
      <div class="board__container container">
        <div class="projects-page__board-content">
          <h2>Our Projects</h2>
          <p>Development is the key <br>
            to evolution</p>
        </div>
        <button
          class="watch-video"
          style="margin-left: 240px"
          data-src="{{ asset('video/about.mp4') }}"
          onclick="window.playVideo(this)"
          type="button">
          Watch the <br> video
        </button>
      </div>
    </div>

    <section class="section-template container">
      <div class="section-template__content">
        <div class="content">
          <h2>Our projects</h2>
          <p>We carry innovation in our DNA. To advance and be competitive, we must analyze the market, <br>
            develop our technology, adapt to the new times and the needs of our customers.</p>
        </div>
      </div>

      <div class="section-template__list" id="projects">
        @foreach ($data->projects as $project)
          <x-project-card :project="$project" />
        @endforeach
      </div>
    </section>
  </main>
@endsection
