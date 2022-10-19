@extends('layouts.master')

@section('title')
  Koinoti Nav | Career
@endsection

@section('content')
  <main class="carrier-page">
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
            <h2 class="banner__title">Team's goal</h2>
            <p class="banner__subtitle">Create an innovative and dynamically <br>
              developing team.</p>
          </div>
          <svg class="board__mask" width="1250" height="540">
            <use xlink:href="#board-mask"></use>
          </svg>
        </div>
      </div>
    @endif

    <div class="container">
      <section class="carrier-page__principles">
        <div class="carrier-page__principles-content">
          <div class="content">
            <h2>The main qualities of an employee.</h2>
            <p>“The ideal employee today perceives himself as a repository of competencies <br>
              that he himself must monitor, develop and improve” - Sven Brinkman</p>
          </div>
        </div>

        <ol class="carrier-page__principles-list">
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Respect and Integrity</h3>
              <p>Respect yourself and others! <br>
                Honest, open and decent!</p>
            </div>
          </li>
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Worldview and Happiness</h3>
              <p>Have a holistic worldview! <br>
                Satisfied with the present!</p>
            </div>
          </li>
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Efficiency and effectiveness</h3>
              <p>We act promptly and competently! <br>
                Focused on effective results!</p>
            </div>
          </li>
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Leadership and Teamwork</h3>
              <p>I am a Leader! Creating Leaders! <br>
                Acting on trust and collaboration!</p>
            </div>
          </li>
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Consciousness and responsibility</h3>
              <p>We are aware of what we do! <br>
                We are responsible for the future!</p>
            </div>
          </li>
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Creativity and courage</h3>
              <p>Inspired and meaningful creativity! <br>
                We show independence in decision making!</p>
            </div>
          </li>
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Discipline and logical conclusion</h3>
              <p>Freedom and responsibility in action! <br>
                Bringing things to their logical conclusion!</p>
            </div>
          </li>
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Customer focus</h3>
              <p>Consciously and purposefully act towards the client! <br>
                Service is customer oriented!</p>
            </div>
          </li>
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Constructive criticism</h3>
              <p>We are not afraid to talk about real things! <br>
                We exclude and condemn intrigues!</p>
            </div>
          </li>
        </ol>

      </section>

      <setion class="section-template">
        <div class="section-template__content">
          <div class="content">
            <h2>Our formula for success</h2>
            <p>We become more mature personalities and reveal our potential by using <br>
              our formula of success and dynamically improving in four dimensions.</p>
          </div>
        </div>

        <ul class="section-template__list" style="margin-bottom: 64px; grid-template-columns: 1fr">
          <li class="section-template__list-item carrier-page__formula" data-before="F" style="white-space: initial">
            <div class="content">
              <h3>FURP</h3>
              <p>Stable workflow management. Continuous improvement of professional skills. <br>
                Autonomy and initiative. Objective performance evaluation</p>
            </div>
          </li>
          <li class="section-template__list-item carrier-page__formula" data-before="D" style="white-space: initial">
            <div class="content">
              <h3>DION</h3>
              <p>Rights and responsibilities. Goal setting and planning. Organization and time management. <br>
                High efficiency and productivity.</p>
            </div>
          </li>
          <li class="section-template__list-item carrier-page__formula" data-before="V" style="white-space: initial">
            <div class="content">
              <h3>VKD</h3>
              <p>Mutual trust and support. Cohesion and synergy. High motivation and inspiration. <br>
                An emotionally positive atmosphere.</p>
            </div>
          </li>
        </ul>

        <ul class="section-template__list carrier-page__fide" style="margin-bottom: 64px; grid-template-columns: 1fr 1fr">
          <li class="section-template__list-item carrier-page__formula" data-before="P" style="white-space: initial">
            <div class="content">
              <h3>Physiological</h3>
              <p>Physical controls, nutrition, <br>
                stress management.</p>
            </div>
          </li>
          <li class="section-template__list-item carrier-page__formula" data-before="I" style="white-space: initial">
            <div class="content">
              <h3>Intellectual</h3>
              <p>Reading, imagination, <br>
                planning, writing.</p>
            </div>
          </li>
          <li class="section-template__list-item carrier-page__formula" data-before="S" style="white-space: initial">
            <div class="content">
              <h3>Spiritual</h3>
              <p>Clarification of values and adherence to them, <br>
                study and reflection.</p>
            </div>
          </li>
          <li class="section-template__list-item carrier-page__formula" data-before="E" style="white-space: initial">
            <div class="content">
              <h3>Emotional</h3>
              <p>Service, empathy, synergy, <br>
                inner security</p>
            </div>
          </li>
        </ul>
      </setion>

      <section class="carrier-page__internship">
        <div class="content">
          <h2>Internship</h2>
          <p>An internship involves the development of a person's labor skills. Often it takes place when a young employee masters a specialty, solving professional problems under the guidance of a more experienced employee of the company. It allows the beginner to plunge into the atmosphere of work activity. Provides an opportunity to learn how to build relationships with colleagues in the team. Teach you to take responsibility for your decisions. During the period there is an opportunity to take a closer look at a potential employee, evaluate his adaptive capabilities associated with working in a particular company, compliance with its values.</p>
          <a href="{{ route('carrier.test') }}">Take the test</a>
        </div>
      </section>
    </div>
  </main>
@endsection
