@extends('layouts.master')

@section('title')
  Koinoti Nav | Home
@endsection

@section('content')
  <main class="main-page">
    @if (count($data->banners) != 0)
      <div class="glide banner">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach ($data->banners as $banner)
              <li class="glide__slide">
                <img
                  class="banner__img"
                  src="{{ $banner->img }}"
                  alt="Баннер"
                  width="1920"
                  height="540">
              </li>
            @endforeach
          </ul>
        </div>

        <div class="glide__bullets" data-glide-el="controls[nav]">
          @foreach ($data->banners as $key => $banner)
            <button class="glide__bullet" data-glide-dir="={{ $key }}"></button>
          @endforeach
        </div>

        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
            <svg width="36" height="36">
              <use xlink:href="#more"></use>
            </svg>
          </button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
            <svg width="36" height="36">
              <use xlink:href="#more"></use>
            </svg>
          </button>
        </div>

        <div class="banner__content">
          <div class="banner__container container">
            <h2 class="banner__title">
              Group of Companies<br>
              "KOINOTI NAV"
            </h2>
            <a class="banner__link button" href="{{ route('about', 'history') }}">
              More detailed
            </a>
          </div>
          <svg class="board__mask" width="1250" height="540">
            <use xlink:href="#board-mask"></use>
          </svg>
        </div>
      </div>
    @endif

    <div class="main-page__grid container">
      <x-histories :class="'main-page__grid-item'" :histories="$data->histories" />

      <section
        class="main-page__grid-item"
        style="background-image: url('img/main-page-management.jpg')">
        <div class="content" style="margin-bottom: 40px">
          <h3>Our management</h3>
          <p>We combine innovation and tradition. We are a sign of true quality,
            a symbol of loyalty and dedication to our business, our society and country.</p>
        </div>
      </section>

      <section
        class="main-page__grid-item"
        style="background-image: url('img/main-page-investors.jpg')">
        <div class="content">
          <h3>Investors</h3>
          <p>Attracting investments into the economy of the Republic of Tajikistan is one of the strategic development goals of the Group of Companies "KOINOTI NAV"</p>

          <a href="{{ route('partnership') }}">More detailed</a>
        </div>
      </section>

      <section
        class="main-page__grid-item"
        style="background-image: url('img/main-page-contribution.jpg')">
        <div class="content">
          <h3>Contribution to society</h3>
          <p>The Group of Companies "KOINOTI NAV" is socially responsible holding company that supports the national development goals of the country.</p>

          <a href="{{ route('contribution') }}">More detailed</a>
        </div>
      </section>

      <section class="main-page__grid-item">
        <video
          class="video-card"
          style="border-radius: 8px"
          width="320"
          height="240"
          autoplay
          loop
          muted>
          <source src="{{ asset('video/trimmed/opportunity.mp4') }}" type="video/mp4">
        </video>
        <div style="max-width: 360px; width: 100%; margin: auto; z-index: 0">
          <div class="main-page__card-content content">
            <h2>Land of<br>
              opportunity</h2>
            <p>Modern Tajikistan</p>
          </div>
          <button
            class="watch-video"
            style="margin-left: auto"
            data-src="{{ asset('video/opportunity.mp4') }}"
            onclick="window.playVideo(this)"
            type="button">
            Watch the <br> video
          </button>
        </div>
      </section>
    </div>

    <section class="main-page__news">
      <div class="main-page__news-container container">
        <div class="content">
          <h2>Our news</h2>
          <p>News, development history and intesting events from our life,<br>
            which are always a pleasure to share.</p>
        </div>

        <div class="main-page__news-list">
          @foreach ($data->news as $news)
            <x-news-card :news="$news" />
          @endforeach
        </div>

        <a class="main-page__more-link" href="{{ route('news') }}">Read all the news</a>
      </div>
    </section>

    <section class="main-page__projects">
      <div class="container">
        <div class="content">
          <h2>Our projects</h2>
          <p>Creation of new jobs, implementation of infrastructure projects, <br>
            direct investments, what we have been doing since the very first day of foundation <br>
            Group of Companies "KOINOTI NAV".</p>
        </div>

        @if (count($data->projects) != 0)
          <div class="main-page__projects-list glide">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides">
                @foreach ($data->projects as $project)
                  <li class="glide__slide">
                    <a
                      class="main-page__projects-item"
                      href="{{ $project->url }}" target="_blank">
                      <img
                        class="main-page__projects-img"
                        src="{{ $project->logo }}"
                        width="165"
                        height="112"
                        alt="{{ $project->title }}"
                        style="object-fit: contain">
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        @endif

        <a class="main-page__more-link" href="{{ route('projects') }}">All our projects</a>
      </div>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/main/index.js') }}" type="module"></script>
@endsection
