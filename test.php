<?php 
/* 
Template Name: Test
*/
get_header();
?>

<body>
  <main>

  <section class="section-1">
    <img class="section-1__img-top" src="<?php echo IMG_BASE . 'marco-home-1.png' ?>" alt="home">
    <img class="section-1__bckg" src="<?php echo IMG_BASE . 'background-one-blue-4.png' ?>" alt="">
    <img class="section-1__bckg-two" src="<?php echo IMG_BASE . 'new-home-mobile-update.png' ?>" alt="">
    <div class="section-1__copy">
      <div class="m-b13">
        <img src="<?php echo IMG_BASE . 'text-antuanet-todd.svg' ?>" alt="">
      </div>
      <p class="title-38">March 7-8th, 2025</p>
      <p class="title-20">Cartagena de Indias, Colombia</p>
    </div>
    <img class="section-1__img-bottom" src="<?php echo IMG_BASE . 'separador-one.webp' ?>" alt="">
  </section>

  <section class="section-2" id="wedding">
    <img class="section-2__bckg" src="<?php echo IMG_BASE . 'bg-two.webp' ?>" alt="">
    <img class="section-2__bckg-two" src="<?php echo IMG_BASE . 'home-mobile-wedding-mobile.png' ?>" alt="">
    <div class="section-2__copy">
      <p class="title-26 m-b8">NUESTRA BODA</p>
      <img class="m-b40" src="<?php echo IMG_BASE . 'text-our-wedding.svg' ?>" alt="">
      <p class="title-24 m-b13">CEREMONY</p>
      <p class="title-30">March 8th, 2025</p>
      <p class="title-30 m-b13" style="line-height: normal">Baluarte San Ignacio</p>
      <p class="title-30 m-b13" style="">5:00 P.M.</p>
      <p class="title-24 m-b20">RECEPTION</p>
      <p class="title-30 m-b13" style="line-height: normal">
      Hotel Charleston <br> Santa Teresa
      </p>
      <p class="title-30 m-b40" style="">7:00 P.M.</p>
      <div class="grid">
        <button type="button" class="m-auto button button--transparent" data-open-modal="modal-1" > DRESS CODE </button>
        <!-- <button type="button" class="m-auto button button--transparent" data-open-modal="modal-2" > GIFTS </button> -->
        <a href="https://www.honeyfund.com/site/HoneymoonfunBusler" target="_blank" class="m-auto button button--transparent" > GIFTS </a>
      </div>
    </div>
  </section>

  <section class="section-2 section-reverse">
    <div class="section-2__copy">
      <p class="title-26 m-b8">FIESTA BIENVENIDA</p>
      <img class="m-b40" src="<?php echo IMG_BASE . 'text-phantom-party.svg' ?>" alt="">
      <p class="title-30">March 7th, 2025</p>
      <p class="title-32 m-b13" style="">4:30 P.M.</p>
      <p class="title-30 m-b40" style="line-height: normal">
      Barco Phantom
      </p>
      <div class="section-2__cta">
        <button type="button" class="m-auto button button--transparent" data-open-modal="modal-3" > DRESS CODE </button>
      </div>
    </div>
    <img class="section-2__bckg" src="<?php echo IMG_BASE . 'bg-three.webp' ?>" alt="">
    <img class="section-2__bckg-two" src="<?php echo IMG_BASE . 'home-mobile-phantom-boat-party.png' ?>" alt="">
  </section>

  <section class="section section-3">
    <div class="section-3__bckg">
      <img src="<?php echo IMG_BASE . 'bg-four.webp' ?>" alt="">
    </div>

    <div class="section-3__slick">
      <div class="slick0">
        <div class="slick-item">
          <div class="slick-item__bckg">
            <img src="<?php echo IMG_BASE . 'foto-novios-one.webp' ?>" alt="">
          </div>
        </div>
        <div class="slick-item">
          <div class="slick-item__bckg">
            <img src="<?php echo IMG_BASE . 'foto-novios-two.webp' ?>" alt="">
          </div>
        </div>
        <div class="slick-item">
          <div class="slick-item__bckg">
            <img src="<?php echo IMG_BASE . 'foto-novios-three.webp' ?>" alt="">
          </div>
        </div>
        <div class="slick-item">
          <div class="slick-item__bckg">
            <img src="<?php echo IMG_BASE . 'foto-novios-four.webp' ?>" alt="">
          </div>
        </div>
        <div class="slick-item">
          <div class="slick-item__bckg">
            <img src="<?php echo IMG_BASE . 'foto-novios-five.webp' ?>" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="section-3__copy">
      <p class="title-36 m-b40">CELEBRATE WITH US!</p>
      <div class="section-3__countdown" id="countdown-timer"></div>
    </div>
  </section>

  <section class="section section-4">
    <div class="section-4__bckg">
      <img src="<?php echo IMG_BASE . 'bg-five.webp' ?>" alt="">
    </div>
    <img class="section-1__img-bottom" src="<?php echo IMG_BASE . 'separador-one.webp' ?>" alt="">
  </section>

  <section class="section section-5" id="cartagena">
    <div class="section-5__bckg">
      <img src="<?php echo IMG_BASE . 'bg-six.webp' ?>" alt="">
    </div>
    <div class="section-5__wrapper">
      <div class="text-center m-b40">
        <img src="<?php echo IMG_BASE . 'text-cartagena-indias.svg' ?>" alt="">
      </div>
      <div class="section-5__copy">
        <p class="title-20 m-b20">
          We were very excited to have our wedding in Cartagena. A city full of magic, charm, history and tradition, which is characterized by its great wall, cobblestone streets and beautiful colonial houses. Cartagena is a UNESCO World Heritage Site and is considered one of the greatest cultural treasures of Latin America.
        </p>
        <p class="title-20">
          We would like to make some recommendations, so that you can enjoy your stay in this wonderful place to the fullest. The best way to experience Cartagena is to walk and explore its labyrinths of narrow streets and lush squares. Ideally, you should stay in the historic district, so that you can be within walking distance of places of interest and experience live music, excellent gastronomy and popular art.
        </p>
      </div>
    </div>
  </section>

  <section class="section section-6" id="places">
    <img class="section-6__bckg" src="<?php echo IMG_BASE . 'bg-seven.webp' ?>" alt="">

    <div class="section-6__copy">
      <div class="section-6__copy-img">
        <div class="text-center">
          <img src="<?php echo IMG_BASE . 'places-of-interest.svg' ?>" alt="">
        </div>
      </div>
      <div>
        <p class="title-26 text-center m-b80">SITIOS DE INTERÉS</p>
        <div class="section-6__items">
          <a href="/index.php/cartagena#hoteles" class="section-6__item">
            HOTELS
            <img src="<?php echo IMG_BASE . 'icon-hotels.svg' ?>" alt="">
          </a>
        </div>
        <div class="section-6__items">
          <a href="/index.php/cartagena#restaurantes" class="section-6__item">
            RESTAURANTS
            <img src="<?php echo IMG_BASE . 'icon-restaurants.svg' ?>" alt="">
          </a>
        </div>
        <div class="section-6__items">
          <a href="/index.php/cartagena#brunch" class="section-6__item">
            BRUNCH & DESSERTS
            <img src="<?php echo IMG_BASE . 'icon-brunch desserts.svg' ?>" alt="">
          </a>
        </div>
        <div class="section-6__items">
          <a href="/index.php/cartagena#bares" class="section-6__item">
            BARS
            <img src="<?php echo IMG_BASE . 'icon-bars.svg' ?>" alt="">
          </a>
        </div>
        <div class="section-6__items">
          <a href="/index.php/cartagena#boutique" class="section-6__item">
            BOUTIQUES
            <img src="<?php echo IMG_BASE . 'icon-boutique.svg' ?>" alt="">
          </a>
        </div>
        <div class="section-6__items">
          <a href="/index.php/cartagena#peluquerias" class="section-6__item">
            BEAUTY SALONS
            <img src="<?php echo IMG_BASE . 'icon-beauty-salon.svg' ?>" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-7">
    <div class="section-7__bckg">
      <img src="<?php echo IMG_BASE . 'bg-eight.webp' ?>" alt="">
    </div>
    <div class="section-7__wrapper">
      <div class="text-center m-b40">
        <h2 class="title-56">PLACES TO VISIT</h2>
      </div>
      <div class="card-slick">

        <div class="card-slick__container">
          <div class="swiper-places slick1">
            <div class="card-slick__item">
              <div class="card-slick__item-box">
                <img src="/wp-content/themes/antuanet-todd/img/swiper-10.webp" alt="" width="" height="" />
                <div class="card-slick__item-info">
                  <p class="title-22 mb-10 border-bottom">
                  TEATRO HEREDIA
                  </p>
                  <p class="title-16">
                  Magniﬁcent eclectic-style 
                  building erected in 1902, 
                  designed by Luis Felipe Jaspe, 
                  the same architect who created 
                  the Cartagena Clock Tower.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="card-slick__item">
              <div class="card-slick__item-box">
                <img src="/wp-content/themes/antuanet-todd/img/swiper-11.webp" alt="" width="" height="" />
                <div class="card-slick__item-info">
                  <p class="title-22 mb-10 border-bottom">
                  murallas cartagena
                  </p>
                  <p class="title-16">
                    Fortiﬁcation that took more than 
                    a hundred years to complete, 
                    carried out in stages from 1586 
                    to 1699, encompassing the 
                    perimeter of the center of the 
                    old city, San Diego and 
                    Getsemaní.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="card-slick__item">
              <div class="card-slick__item-box">
                <img src="/wp-content/themes/antuanet-todd/img/swiper-12.webp" alt="" width="" height="" />
                <div class="card-slick__item-info">
                  <p class="title-22 mb-10 border-bottom">
                  Torre del reloj
                  </p>
                  <p class="title-16">
                    Famous gateway to the walled 
                    city, characterized by its baroque 
                    stone doorway that precedes an 
                    imposing structure.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="card-slick__item">
              <div class="card-slick__item-box">
                <img src="/wp-content/themes/antuanet-todd/img/swiper-13.webp" alt="" width="" height="" />
                <div class="card-slick__item-info">
                  <p class="title-22 mb-10 border-bottom">
                  isla de barú
                  </p>
                  <p class="title-16">
                    Coastal area located 45 minutes 
                    by boat, known for its 
                    paradisiacal almost virgin white 
                    sand beaches, transparent waters 
                    and coral reefs.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="card-slick__item">
              <div class="card-slick__item-box">
                <img src="/wp-content/themes/antuanet-todd/img/swiper-14.webp" alt="" width="" height="" />
                <div class="card-slick__item-info">
                  <p class="title-22 mb-10 border-bottom">
                    castillo san felipe
                  </p>
                  <p class="title-16">
                    One of the most famous sites, 
                    corresponding to a castle built in 
                    the seventeenth century, 
                    considered the most outstanding 
                    work of Spanish military 
                    engineering in America.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="card-slick__item">
              <div class="card-slick__item-box">
                <img src="/wp-content/themes/antuanet-todd/img/swiper-15.webp" alt="" width="" height="" />
                <div class="card-slick__item-info">
                  <p class="title-22 mb-10 border-bottom">
                  cerro de la popa
                  </p>
                  <p class="title-16">
                    Highest point in Cartagena, a 
                    strategic position that allows 
                    privileged views of both the 
                    old city and the Caribbean Sea, 
                    the island of Tierrabomba and 
                    La Boquilla.
                  </p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-8" id="rsvp">
    <img class="section-8__bckg" src="<?php echo IMG_BASE . 'bg-nine.webp' ?>" alt="">
    <img class="section-8__flower" src="<?php echo IMG_BASE . 'flor-five.webp' ?>" alt="">

    <div class="section-8__copy">
      <div>
        <p class="title-56 text-center m-b20">
        R.S.V.P.
        </p>

        <div class="text-center m-b40">
          <p class="title-18 m-b8">Kindly respond by JUNE 15th, 2024</p>
          <p class="title-16">Por favor confirmar asistencia antes de JUNIO 15, 2024</p>
        </div>

        <div>
          <?php echo do_shortcode('[rsvp_form]')?>
        </div>

        
      </div>
    </div>
  </section>

  <section class="section section-9">

  </section>

  <section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.9102070933877!2d-75.55006448856406!3d10.428699989656767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef62f99208a15a3%3A0x3187872c9d2602d2!2sSofitel%20Legend%20Santa%20Clara%20Cartagena!5e0!3m2!1ses!2sco!4v1682346924399!5m2!1ses!2sco" width="100%" height="600" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="map__text">
      <div class="text-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51.14 51.153" style="margin: 0 auto; opacity: 1 !important;visibility:visible">
          <defs>
            <style>
              .cls-1 {
                fill: #3060A9
              }
            </style>
          </defs>
          <g id="Grupo_44" data-name="Grupo 44" transform="translate(-178.86 -2109.842)">
            <path id="Trazado_25" data-name="Trazado 25" class="cls-1" d="M192.172 2161a1.106 1.106 0 0 1-.538-1.05c.018-1 .02-2 0-2.994a1.183 1.183 0 0 1 .659-1.131c2.458-1.463 4.9-2.948 7.365-4.4a.689.689 0 0 0 .392-.878c-.249-1.118-.431-2.251-.655-3.376a7.014 7.014 0 0 1-.136-1.386q.008-2.893 0-5.788c0-.641-.017-.649-.6-.431L180.4 2146.4c-1.02.382-1.534.026-1.535-1.063 0-1.513.011-3.027-.007-4.541a1.16 1.16 0 0 1 .695-1.155c.769-.4 1.514-.837 2.286-1.225a.694.694 0 0 0 .428-.749 16.76 16.76 0 0 1 0-1.4 2.594 2.594 0 0 1 1.959-2.473 2.534 2.534 0 0 1 2.87 1.187c.234.42.416.386.76.179a26.357 26.357 0 0 1 1.711-.926.6.6 0 0 0 .381-.625 27.533 27.533 0 0 1 0-1.6 2.6 2.6 0 0 1 1.894-2.472 2.538 2.538 0 0 1 2.912 1.186c.252.47.455.472.867.234.978-.566 1.963-1.127 2.981-1.615a1.082 1.082 0 0 0 .675-1.164 531.437 531.437 0 0 1-.008-8.183 18.8 18.8 0 0 1 1.642-7.646 3.934 3.934 0 0 1 2.526-2.376 3.676 3.676 0 0 1 4.3 1.981 17.98 17.98 0 0 1 1.852 7.339c.1 3.027.027 6.053.043 9.079a.868.868 0 0 0 .539.891 98.56 98.56 0 0 1 3.291 1.779c.306.172.441.118.609-.189a2.587 2.587 0 0 1 4.889 1.25c0 .5.017 1 0 1.5a.6.6 0 0 0 .379.626 47.56 47.56 0 0 1 1.886 1.021c.241.137.358.107.506-.142a2.576 2.576 0 0 1 3-1.3 2.6 2.6 0 0 1 1.914 2.66 5.089 5.089 0 0 1-.007.847 1.088 1.088 0 0 0 .774 1.3c.652.29 1.262.671 1.9 1a1.714 1.714 0 0 1 .7.616v5.789a1.039 1.039 0 0 1-1.475.39l-18.3-6.863c-.566-.212-.587-.2-.588.4v5.886a6.535 6.535 0 0 1-.127 1.287c-.223 1.141-.411 2.29-.666 3.423a.688.688 0 0 0 .4.874c2.446 1.448 4.876 2.924 7.32 4.376a1.25 1.25 0 0 1 .7 1.211 58.13 58.13 0 0 0 0 2.893 1.134 1.134 0 0 1-.538 1.1h-1l-8.422-1.448a.376.376 0 0 0-.426.178 3.286 3.286 0 0 1-1.732 1.27h-1.4a3.321 3.321 0 0 1-1.729-1.276c-.131-.209-.319-.185-.528-.149-1.11.192-2.222.368-3.333.558q-2.5.429-4.99.867Zm15.637-28.13v-12.726a16.54 16.54 0 0 0-1.585-7.145 1.983 1.983 0 0 0-1.818-1.341 1.931 1.931 0 0 0-1.774 1.315 16.333 16.333 0 0 0-1.537 6.906q-.02 13.024 0 26.049a3.471 3.471 0 0 0 .041.645q1.114 5.8 2.24 11.6c.137.705.482 1.029 1.072 1.032s.945-.311 1.081-1.016c.567-2.92 1.077-5.852 1.711-8.757a28.407 28.407 0 0 0 .586-6.482c-.05-3.365-.017-6.725-.017-10.085Zm-8.558 1.425v-2.444c0-.792 0-.8-.681-.43q-5.528 2.988-11.052 5.981c-2.12 1.148-4.235 2.3-6.361 3.441a.757.757 0 0 0-.468.783c.027.714 0 1.43.009 2.145 0 .549.039.575.527.394.873-.323 1.744-.652 2.616-.979q7.422-2.784 14.849-5.559a.735.735 0 0 0 .57-.838c-.033-.835-.009-1.668-.009-2.499Zm10.4-.026c0 .865.018 1.73-.008 2.594a.651.651 0 0 0 .5.734c1.376.495 2.742 1.018 4.112 1.531l13.352 5c.584.219.594.21.6-.437a10.542 10.542 0 0 1 .013-1.445 1.5 1.5 0 0 0-1.013-1.721c-3.5-1.837-6.967-3.751-10.446-5.635q-3.267-1.77-6.537-3.533c-.564-.3-.569-.3-.57.364q-.009 1.271-.007 2.543Zm-16.181 23.727v.646c-.01.292.075.42.41.363q3.587-.615 7.177-1.2c.309-.05.368-.165.306-.465q-.39-1.9-.731-3.818c-.077-.432-.217-.461-.577-.242a340.033 340.033 0 0 1-5.863 3.512c-.54.308-.892.638-.726 1.199Zm21.968.155c-.03-.427.11-.868-.414-1.173a353.914 353.914 0 0 1-6.2-3.717c-.371-.226-.473-.115-.541.253-.217 1.176-.449 2.349-.679 3.523-.139.715-.141.711.583.83q3.171.52 6.341 1.048c1.093.179.879.165.906-.769Zm-23.717-25.876c-.012.787.006.8.578.486.262-.143.522-.291.787-.43.182-.095.3-.22.221-.437a.786.786 0 0 0-.711-.6.722.722 0 0 0-.778.5 2.452 2.452 0 0 0-.101.476Zm25.464.044a3.139 3.139 0 0 0-.058-.4.742.742 0 0 0-.83-.628.765.765 0 0 0-.7.615c-.108.351.212.4.411.52s.434.245.654.363c.513.27.525.262.519-.475Zm-33.085 4.141c-.008.684.027.708.579.419.25-.131.494-.271.741-.406.273-.149.262-.351.111-.581a.788.788 0 0 0-1.431.568Zm40.7.024a.767.767 0 0 0-.482-.881.739.739 0 0 0-.866.186c-.232.265-.3.518.086.717.236.121.464.255.7.378.528.279.562.256.562-.4Z"></path>
            <path id="Trazado_26" data-name="Trazado 26" class="cls-1" d="M204.409 2114.967a2.11 2.11 0 0 1 1.91 1.219c.237.546.4 1.127.594 1.69.075.21.029.356-.191.43-.032.01-.063.021-.094.033-1.288.521-1.28.518-1.737-.807-.089-.259-.059-.7-.444-.684-.365.011-.349.438-.442.7-.451 1.282-.44 1.276-1.7.8-.322-.119-.41-.269-.285-.592.191-.495.329-1.011.529-1.5a2.075 2.075 0 0 1 1.86-1.289Z"></path>
          </g>
        </svg>
      </div>
      <div class="map__copy">
        <div>
          <h4 class="title-18 m-b8">
          RAFAEL NUÑEZ
          </h4>
          <p class="title-10 m-b8">
          INTERNATIONAL AIRPORT<br>
          CARTAGENA, COLOMBIA 
          </p>
        </div>
        <p class="title-10 border" style="color: #606060">
          El aeropuerto está a 10 minutos en taxi de la ciudad amurallada. Hay servicios de taxi autorizados las 24 horas del día. Los precios son fijos y están estipulados por ley.
          <br>
          La tarifa a Getsemaní cuesta unos $14.000 cop. A la zona hotelera del centro histórico (Ciudad Amurallada) alrededor de $14.000 cop y a la zona de Bocagrande cuesta $20.000 cop.
          <br> <br>
          Normalmente $1 USD equivale a $3.900 cop.
        </p>
      </div>
    </div>
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
            src="/wp-content/themes/antuanet-todd/img/dress-code-antuanet-DEF.png"
            alt=""
            id=""
          />
        </div>
      </div>
    </section>

    <section class="modal" style="display: none" data-modal="modal-2">
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
            src="/wp-content/themes/antuanet-todd/img/dress-code-party.png"
            alt=""
            id=""
          />
        </div>
      </div>
    </section>

    <section class="modal" style="display: none" data-modal="modal-3">
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
            src="/wp-content/themes/antuanet-todd/img/newdresscodeantuanettodd-ezgif.com-jpg-to-webp-converter.webp"
            alt=""
            id=""
            
          />
        </div>
      </div>
    </section>
    
  </main>
</body>

<?php include('footer.php'); ?>
