<?php include('header.php'); ?>

<body>
  <main>

  <section class="section-1">
    <img class="section-1__img-top" src="<?php echo IMG_BASE . 'marco-home-1.png' ?>" alt="">
    <img class="section-1__bckg" src="<?php echo IMG_BASE . 'background-one-blue-4.png' ?>" alt="">
    <div class="section-1__copy">
      <div class="m-b13">
        <img src="<?php echo IMG_BASE . 'text-antuanet-todd.svg' ?>" alt="">
      </div>
      <p class="title-38">March 7-8th, 2025</p>
      <p class="title-20">Cartagena de Indias, Colombia</p>
    </div>
    <img class="section-1__img-bottom" src="<?php echo IMG_BASE . 'separador-one.webp' ?>" alt="">
  </section>

  <section class="section-2">
    <img class="section-2__bckg" src="<?php echo IMG_BASE . 'bg-two.webp' ?>" alt="">
    <div class="section-2__copy">
      <p class="title-26 m-b8">NUESTRA BODA</p>
      <img class="m-b40" src="<?php echo IMG_BASE . 'text-our-wedding.svg' ?>" alt="">
      <p class="title-24 m-b13">CEREMONY</p>
      <p class="title-30">March 8th, 2025</p>
      <p class="title-30 m-b13" style="line-height: normal">Baluarte San Ignacio</p>
      <p class="title-32 m-b13" style="">7:00 P.M.</p>
      <p class="title-24 m-b20">RECEPTION</p>
      <p class="title-30 m-b40" style="line-height: normal">
      Hotel Charleston <br> Santa Teresa
      </p>
      <div class="grid">
        <button type="button" class="m-auto button button--transparent" data-open-modal="modal-1" > DRESS CODE </button>
        <button type="button" class="m-auto button button--transparent" data-open-modal="modal-2" > GIFTS </button>
      </div>
    </div>
  </section>

  <section class="section-2 section-reverse">
    <div class="section-2__copy">
      <p class="title-26 m-b8">FIESTA BIENVENIDA</p>
      <img class="m-b40" src="<?php echo IMG_BASE . 'text-phantom-party.svg' ?>" alt="">
      <p class="title-30">March 7th, 2025</p>
      <p class="title-32 m-b13" style="">5:00 P.M.</p>
      <p class="title-30 m-b40" style="line-height: normal">
      Barco Phantom
      </p>
      <div class="section-2__cta">
        <button type="button" class="m-auto button button--transparent" data-open-modal="modal-3" > DRESS CODE </button>
      </div>
    </div>
    <img class="section-2__bckg" src="<?php echo IMG_BASE . 'bg-three.webp' ?>" alt="">
  </section>

  <section>
  </section>

  
    <!-- Modals -->
    <section class="modal" style="display: none" data-modal="modal-1">
      <div class="modal__wrapper">
        <div class="modal__body">
          <button type="button" data-close-modal>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
              <path
                fill="#fff"
                stroke-miterlimit="10"
                d="M7.72 6.28 6.28 7.72 23.56 25 6.28 42.28l1.44 1.44L25 26.44l17.28 17.28 1.44-1.44L26.44 25 43.72 7.72l-1.44-1.44L25 23.56z"
                font-family="none"
                font-size="none"
                font-weight="none"
                style="mix-blend-mode: normal"
                text-anchor="none"
                transform="scale(5.1)"
              />
            </svg>
          </button>
          <img
            src="/wp-content/themes/twentytwentyone/img/dresscode-donald-and-adriana.webp"
            alt=""
            id=""
          />
        </div>
      </div>
    </section>
    
  </main>
</body>

<?php include('footer.php'); ?>
