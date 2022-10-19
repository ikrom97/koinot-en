@extends('layouts.master')

@section('title')
  Koinoti Nav | Contacts
@endsection

@section('content')
  <main class="contacts-page">
    <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3119.109242450845!2d68.75148400706672!3d38.57733209183249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1658895390814!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="container">
      <div class="contacts-page__content">
        <div class="content">
          <h2>Contact us</h2>
          <p>Do you have any questions or want to discuss something with us? <br>
            Please contact our staff or send us a message and we will get back to you as soon as possible.</p>
        </div>
      </div>

      <x-contacts-list />
    </div>
  </main>
@endsection
