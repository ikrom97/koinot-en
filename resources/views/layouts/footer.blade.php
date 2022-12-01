<footer class="page-footer">
  <div class="page-footer__top">
    <div class="anim"></div>
    <div class="anim second"></div>
    <div class="anim third"></div>
    <dl class="page-footer__menu">
      <div class="page-footer__menu-list">
        <dt class="page-footer__menu-caption">About us</dt>

        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('about', 'history') }}">
            History
          </a>
        </dd>
        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('about', 'mission') }}">
            Mission, Vision, Values
          </a>
        </dd>
        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('news') }}">
            News
          </a>
        </dd>
      </div>

      <div class="page-footer__menu-list">
        <dt class="page-footer__menu-caption">Other links</dt>

        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('projects') }}">
            Projects
          </a>
        </dd>
        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('partnership') }}">
            Partnership
          </a>
        </dd>
        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('contribution') }}">
            Contribution to society
          </a>
        </dd>
        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="https://sport.koinotinav.com/" target="_blank">
            &#8220;KOINOTI NAV&#8221; Cup
          </a>
        </dd>
        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('carrier') }}">
            Carreer
          </a>
        </dd>
        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('contacts') }}">
            Contacts
          </a>
        </dd>
      </div>
    </dl>

    <button class="page-footer__button circle" type="button">
      <svg width="18" height="18">
        <use xlink:href="#more"></use>
      </svg>
    </button>
  </div>

  <div class="page-footer__bottom container">
    <div class="page-footer__details details">
      <a class="details__item" href="mailto:info@koinotinav.tj">
        <span class="details__icon">
          <svg width="18" height="16">
            <use xlink:href="#email"></use>
          </svg>
        </span>
        <span class="details__info">info@koinotinav.tj</span>
      </a>
      <a class="details__item" href="tel:+992446000043">
        <span class="details__icon">
          <svg width="17" height="16">
            <use xlink:href="#phone"></use>
          </svg>
        </span>
        <span class="details__info">+992 (44) 600 00 43</span>
      </a>
    </div>

    <p class="page-footer__copyright">
      &#169; {{ date('Y') }} CJSC &#8220;Koinoti Nav&#8221;<br>
      All rights reserved</p>
  </div>
</footer>
