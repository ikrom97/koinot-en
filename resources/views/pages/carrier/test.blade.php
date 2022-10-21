@extends('layouts.master')

@section('title')
  KOINOTI NAV | Career
@endsection

@section('content')
  <main class="test-page">
    <div class="container">
      <section class="carrier-stages">
        <div class="carrier-stages__content">
          <div class="content">
            <h2>Career stages</h2>
          </div>
        </div>

        <ul class="carrier-stages__list">
          <li class="carrier-stages__item">Internship and Adaptation</li>
          <li class="carrier-stages__item">Specialist</li>
          <li class="carrier-stages__item">Senior Specialist</li>
          <li class="carrier-stages__item">Lead Specialist</li>
        </ul>

        <img
          class="carrier-stages__img board"
          src="{{ asset('img/carrier-stage.jpg') }}"
          width="1280"
          height="540"
          alt="Карьерные этапы">
      </section>

      <section class="test">
        <div class="test__content">
          <div class="content">
            <h2>Improve yourself with "KOINOTI NAV"!</h2>
            <p>Take the test and become part of our team!</p>
          </div>
        </div>

        <div class="test__form form">
          <div class="form__content">
            <div class="content">
              <h2>Take the test and <br>
                become part of our team!</h2>
            </div>
          </div>

          <div class="quiz-container"></div>
        </div>
      </section>
    </div>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/carrier/test.js') }}" type="module"></script>
@endsection
