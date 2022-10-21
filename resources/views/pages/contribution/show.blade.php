@extends('layouts.master')

@section('title')
  KOINOTI NAV | Contribution to society
@endsection

@section('meta-tags')
  @php
    $share_text = preg_replace('#<[^>]+>#', ' ', $data->contribution->content);
    $share_text = mb_strlen($share_text) < 170 ? $share_text : mb_substr($share_text, 0, 166) . '...';
  @endphp
  <meta name="description" content="{{ $share_text }}">
  <meta property="og:description" content="{{ $share_text }}">
  <meta property="og:title" content="{{ $data->contribution->title }}" />
  <meta property="og:image:alt" content="{{ $data->contribution->title }}">
  <meta name="twitter:title" content="{{ $data->contribution->title }}">
  @if (count($data->contribution->images) > 0)
    <meta property="og:image" content="{{ asset($data->contribution->images[0]->src) }}">
    <meta name="twitter:image" content="{{ asset($data->contribution->images[0]->src) }}">
  @endif
@endsection

@section('content')
  <main class="contribution-show-page">
    <div class="container">
      <time
        class="contribution-show-page__date"
        datetime="{{ $data->contribution->date }}">
        {{ Carbon\Carbon::create($data->contribution->date)->isoFormat('DD.MM.YYYY') }}
      </time>

      <h1 class="contribution-show-page__title">{{ $data->contribution->title }}</h1>
      <div class="content">{!! $data->contribution->content !!}</div>

      @if (count($data->contribution->images) > 0)
        <img class="contribution-show-page__img board"
          src="{{ asset($data->contribution->images[0]->src) }}"
          width="1280"
          height="540"
          alt="{{ $data->contribution->title }}">
      @endif

      <div class="contribution-show-page__gallery gallery">
        @foreach ($data->contribution->images as $key => $image)
          <a
            class="gallery__item @if ($key > 6 || $key == 0) visually-hidden @endif"
            href="{{ asset($image->src) }}"
            data-lcl-thumb="{{ asset($image->thumb_src) }}">
            <span class="gallery__thumb" style="background-image: url('{{ asset($image->thumb_src) }}')">
              <svg class="gallery__icon" width="41" height="40">
                <use xlink:href="#image"></use>
              </svg>
            </span>
          </a>
        @endforeach
      </div>
    </div>

    <section class="section-template container">
      <div class="section-template__content">
        <div class="content">
          <h2>Contribution to society through social assistance</h2>
          <p>The group of companies "KOINOTI NAV" pays special attention to social support. <br>
            The task of the company is to act as a conscientious citizen in any situation and respect society.</p>
          <p></p>
          <p>In support of the interests of the population, we often on our own initiative <br>
            We carry out projects to improve the quality of life.</p>
        </div>
      </div>

      <div class="section-template__list">
        @foreach ($data->lastContributions as $contribution)
          <x-contribution-card :contribution="$contribution" />
        @endforeach
      </div>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/contribution/show.js') }}" type="module"></script>
@endsection
