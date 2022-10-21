@extends('layouts.master')

@section('title')
  KOINOTI NAV | History
@endsection

@section('content')
  <main class="history-page">
    <div class="history-page__board board">
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
        <div class="history-page__board-content">
          <h2>Group of Companies <br>
            "KOINOTI NAV"</h2>
        </div>
        <button
          class="history-page__watch-video watch-video"
          data-src="{{ asset('video/opportunity.mp4') }}"
          onclick="window.playVideo(this)"
          type="button">
          Watch the <br> video
        </button>
      </div>
    </div>

    <div class="history-page__grid container">
      <div class="content">
        <h2>About us</h2>
        <p>"KOINOTI NAV" Group was established in 1991. Today the group of companies unites a number of production and trade enterprises working in the field of supply and realization of consumer goods, medicines and food, maintenance and sale of cars, improvement of education and qualification of specialists. The main mission of "KOINOTI NAV" Group is public well-being. Our pride is our employees. We treat personnel selection with huge responsibility. That is why the holding consists of: professional and competent specialists, highly qualified managers and executives. We are constantly growing and developing, setting ambitious goals, which we are able to achieve effectively.</p>
      </div>

      <x-histories :histories="$data->histories" />
    </div>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/about/history.js') }}" type="module"></script>
@endsection
