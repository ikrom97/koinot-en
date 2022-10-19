@extends('layouts.master')

@section('title')
  Koinoti Nav | Mission, Vision, Values
@endsection

@section('content')
  <main class="mission-page">
    <div class="mission-page__board board">
      <video
        class="video-card"
        width="320"
        height="240"
        autoplay
        loop
        muted>
        <source src="{{ asset('video/trimmed/mission.mp4') }}" type="video/mp4">
      </video>
      <div class="board__container container">
        <div class="mission-page__board-content">
          <h2>Our Mission</h2>
          <p>To promote the public <br>
            well-being</p>
        </div>
        <button
          class="watch-video"
          data-src="{{ asset('video/mission.mp4') }}"
          onclick="window.playVideo(this)"
          type="button">
          Watch the <br> video
        </button>
      </div>
    </div>

    <section class="mission-page__content container">
      <div class="content">
        <h2>Mission</h2>
        <p>To contribute in every way and in every way to the well-being of society <br>
          through the mission of "KOINOTI NAV" and social responsibility, <br>
          focusing on the multiplication of long-term social and economic benefits.</p>
      </div>
    </section>

    <section class="mission-page__board board">
      <video
        class="video-card"
        width="320"
        height="240"
        autoplay
        loop
        muted>
        <source src="{{ asset('video/trimmed/vision.mp4') }}" type="video/mp4">
      </video>
      <div class="board__container container">
        <div class="mission-page__board-content">
          <h2>Our Vision</h2>
          <p>To take a leading position in the areas of activity by <br>
            developing innovatively and dinamically. </p>
        </div>
        <button
          class="watch-video"
          data-src="{{ asset('video/vision.mp4') }}"
          onclick="window.playVideo(this)"
          type="button">
          Watch the <br> video
        </button>
      </div>
    </section>

    <section class="mission-page__content container">
      <div class="content">
        <h2>Vision</h2>
        <p>To develop innovatively and dynamically: to be on the lookout for new ways and tools to increase efficiency and productivity, to be always competitive, to develop current fields of activity and embrace the new ones, to position ourselves in the international market in the long term. To be flexible in the changing external and internal environment, to foresee the coming changes and to be prepared.</p>
      </div>
    </section>

    <section class="mission-page__board board">
      <video
        class="video-card"
        width="320"
        height="240"
        autoplay
        loop
        muted>
        <source src="{{ asset('video/trimmed/values.mp4') }}" type="video/mp4">
      </video>
      <div class="board__container container">
        <div class="mission-page__board-content">
          <h2>Our Values</h2>
          <p>A system of internal spiritual foundations and traditions, <br>
            business and moral principles professed by employees.</p>
        </div>
        <button
          class="watch-video"
          data-src="{{ asset('video/values.mp4') }}"
          onclick="window.playVideo(this)"
          type="button">
          Watch the <br> video
        </button>
      </div>
    </section>

    <section class="mission-page__content container">
      <div class="content">
        <h2>Values</h2>
        <p>"KOINOTI NAV" Group is a system of internal spiritual foundations and traditions, <br>
          business and moral principles professed by employees, which reflect individuality <br>
          and create the foundation for effective implementation of the strategy.</p>
      </div>
    </section>

    <ul class="mission-page__value-list container">
      <li class="mission-page__value-item" style="background-image: url('/img/value-1.jpg')">
        <div class="content">
          <h3>Respect</h3>
          <p>We recognize the value of every person in the company, respect their work, time, freedom and their own opinion. Respect for our business partners gives us the opportunity to cooperate successfully while maintaining trust and openness.</p>
        </div>
      </li>
      <li class="mission-page__value-item" style="background-image: url('/img/value-2.jpg')">
        <div class="content">
          <h3>Self-realization</h3>
          <p>We have created an atmosphere within the Company that promotes the self-realization of each team member. We support the team's commitment to innovation and creativity. We enjoy our work, we are creators, we are innovators in our field.</p>
        </div>
      </li>
      <li class="mission-page__value-item" style="background-image: url('/img/value-3.jpg')">
        <div class="content">
          <h3>Cheerfulness</h3>
          <p>We are optimistic, cheerful, and energize with positive energy. We know that we have the full and unconditional right to please ourselves and enjoy life no matter what, and sometimes even in spite of it!</p>
        </div>
      </li>
      <li class="mission-page__value-item" style="background-image: url('/img/value-4.jpg')">
        <div class="content">
          <h3>Health</h3>
          <p>We understand that health is the main value of life. Health is a state of complete physical and social well–being, emotional harmony.</p>
        </div>
      </li>
      <li class="mission-page__value-item" style="background-image: url('/img/value-5.jpg')">
        <div class="content">
          <h3>Teamwork</h3>
          <p>The words "We are a team"! – they are generated on the basis of our philosophy of Friendship. We understand that our strength lies in unity and cohesion, in a conscious preference for the team interests, in priority over personal ones. We work together as a team and achieve success.</p>
        </div>
      </li>
      <li class="mission-page__value-item" style="background-image: url('/img/value-6.jpg')">
        <div class="content">
          <h3>Professionalism</h3>
          <p>We are constantly working on improvement of our professional skills, knowledge and skills that provide us with optimal creative condition and the ability to actively study modern trends.</p>
        </div>
      </li>
    </ul>
  </main>
@endsection
