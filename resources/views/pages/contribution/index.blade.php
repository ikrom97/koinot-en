@extends('layouts.master')

@section('title')
  Koinoti Nav | Contribution to society
@endsection

@section('content')
  <main class="contribution-page">
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
            <h2 class="banner__title">Contribution to society</h2>
            <p class="banner__subtitle">We are a socially responsible holding company,<br>
              supporting the national goals of the <br>
              country's development.</p>
          </div>
          <svg class="board__mask" width="1250" height="540">
            <use xlink:href="#board-mask"></use>
          </svg>
        </div>
      </div>
    @endif

    <section class="section-template container" id="contributions">
      <div class="section-template__content">
        <div class="content">
          <h2>Contribution to society</h2>
          <p>The "KOINOTI NAV" Group of Companies is a socially responsible holding company that supports the national development goals of the country. "KOINOTI NAV" constantly strives to have a positive impact on the quality of life of both society and individual social groups that is not limited to one-time events. We help not only the people who find themselves in a difficult life situation, but also those who are looking for support in their good endeavors. The "KOINOTI NAV" Group of Companies employs initiative and responsible people and competent organizers, who always bring the idea to a logical result.</p>
        </div>
      </div>

      <ul class="section-template__list">
        @foreach ($data->contributions as $contribution)
          <li class="section-template__list-item">
            <x-contribution-card :contribution="$contribution" />
          </li>
        @endforeach
      </ul>

      <div class="section-template__pagination">
        {{ $data->contributions->fragment('contributions')->links('components.pagination') }}
      </div>
    </section>
  </main>
@endsection
