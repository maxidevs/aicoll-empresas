<!DOCTYPE html>
<html lang="es">

<head>
  @include('partials.head')
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/suggestions.css'])
  @endif
</head>

<body>
  @include('partials.header')
  <section id="aicollFeaturedWithGSAP">
    <h2 class="aicoll-footer-seo">CRM Financiero & Hub Tecnológico</h2>
    <!-- --------------------------- featured left ---------------------- -->
    <div class="landing__home__heading__container">
      <div class="landing__home__heading__panel--left">
        <div class="landing__home__heading__container--left">
          <h1 class="font-poppins">
            CRM Financiero
            </br>
            & Hub Tecnológico
          </h1>
        </div>
        <div class="landing__home__heading__sub__container">
          <div class="landing__home__heading__sub__container__text">
            <p class="font-poppins">
              Somos una plataforma para automatizar hasta un
              100% los procesos del ciclo de crédito en entidades
              financieras, desde la evaluación del riesgo en el
              origen, hasta la gestión y administración de la
              cartera.
            </p>
          </div>
          <div class="landing__home__container__button">
            <button type="button" data-toggle="modal" data-target="#myModalFormPartner"
              class="btn landing__btn__success">
              Solicita tu demo
            </button>
          </div>
        </div>
      </div>
      <div id="containerDivGSAP" class="aicoll-feactured-with-gsap__top-der-total-container">
        <div data-aos="fade-left" data-aos-duration="1500" data-aos-offset="-100" id="iconTopLeft"
          class="aicoll-feactured-with-gsap__icon-top-left-container"></div>
        <div data-aos="fade-left" data-aos-duration="1500" data-aos-offset="-100" id="iconBottomRight"
          class="aicoll-feactured-with-gsap__icon-bottom-right-container"></div>
        <div id="imgFeaturedWithGSAPDesktop"
          class="aicoll-feactured-with-gsap__top-der-container section-heading-slider">
          <img data-aos="fade-left" data-aos-duration="1500" data-aos-offset="-100" loading="lazy" width="500"
            src="https://www.aicoll.co/landingpage/assets/img/aicoll_charts_01.png" title="Cliente Aicoll"
            alt="Cliente Aicoll" id="aicollDownFirst" class="aicollDown" />
        </div>
      </div>

    </div>
    <div class="landing__subtitle">
      Nuestras cifras
    </div>
    <div class="landing__counter__container">
      <div class="landing__counter__item">
        <div class="landing__counter__item--number">
          +
          <div class="numberCounter" data-target="20">0
          </div>
        </div>
        <span class="font-poppins counterText">Clientes</span>
      </div>
      <div class="landing__counter__item">
        <div class="landing__counter__item--number">
          +
          <div class="numberCounter" data-target="2">0
          </div>M
        </div>
        <span class="font-poppins counterText">Usuarios <br> cada mes</span>
      </div>
      <div class="landing__counter__item">
        <div class="landing__counter__item--number">
          +
          <div class="numberCounter" data-target="500">0
          </div>K
        </div>
        <span class="font-poppins counterText">Gestiones automáticas <br>
          mensuales</span>
      </div>
      <div class="landing__counter__item">
        <div class="landing__counter__item--number">
          +
          <div class="numberCounter" data-target="30">0
          </div>%
        </div>
        <span class="font-poppins counterText">Disminución de costos <br>
          y tiempos operativos</span>
      </div>
    </div>
    <div class="landing__home__container__button" style=" width: 100%;">
      <button type="button" data-toggle="modal" data-target="#myModalFormPartner" class="btn landing__btn__success"
        style="margin: 20px auto;">
        Agenda una demo ahora
      </button>
    </div>
  </section>
  <section id="aicollFeaturedWithGSAP">
    <!-- --------------------------- featured left ---------------------- -->
    <div class="landing__subtitle">
      Transforma la Gestión Financiera de <br>
      tu Empresa con <em class="">Aicoll</em>
    </div>
    <p class="font-poppins" style="text-align: center;">
      Aicoll es una plataforma de CRM financiero y gestión de cartera impulsada por <br>
      inteligencia artificial que integra software avanzado, análisis de datos y herramientas <br>
      de automatización para optimizar tus procesos de crédito y cobranza
    </p>
    <div class="landing__home__container__button">
      <button type="button" data-toggle="modal" data-target="#myModalFormPartner" class="btn landing__btn__blue"
        style="margin: 10px auto;">
        Habla con un experto
      </button>
    </div>
    <div class="landing__home__heading__container">
      <div class="landing__home__heading__panel--left" style=" width: 30%;">
        <div class="landing__home__heading__container--left" style="padding-left: 20px">
          <div class="landing__feature__container">
            <div class="landing__feature__logo">
              <img width="70" src="https://www.aicoll.co/landingpage/assets/img/feature_time.png"
                alt="Reduce tiempos" id="aicollDownFirst" />
            </div>
            <div class="landing__feature__title">Reduce tiempos y <br>
              costos operativos</div>
            <div class="landing__feature__paragraph">
              Optimiza procesos de cobranza y
              gestión financiera a través de una
              plataforma todo-en-uno que integra
              canales como WhatsApp, SMS y email.</div>
          </div>
          <div class="landing__feature__container">
            <div class="landing__feature__logo">
              <img height="70" src="https://www.aicoll.co/landingpage/assets/img/feature_strategy.png"
                alt="Toma decisiones estratégicas" id="aicollDownFirst" />
            </div>
            <div class="landing__feature__title">
              Toma decisiones <br>
              estratégicas
            </div>
            <div class="landing__feature__paragraph">
              Accede a todos los datos de tus
              clientes en un solo lugar, con reportes y
              análisis en tiempo real con información
              completa y actualizada.
            </div>
          </div>
        </div>
      </div>
      <div class="aicoll-feactured-with-gsap__top-der-total-container" style=" width: 70% !important;">
        <div class="landing__feature__container__right">
          <img data-aos="fade-left" data-aos-duration="1500" data-aos-offset="-100" width="100%" loading="lazy"
            src="https://www.aicoll.co/landingpage/assets/img/aicoll_charts_02.png" title="Gestión Analítica"
            alt="Gestión Analítica" id="aicollDownFirst" />
        </div>
      </div>
    </div>
    <div class="landing__home__heading__container">
      <div class="landing__home__heading__panel--left" style=" width: 70%;">
        <div class="landing__feature__container__right">
          <img data-aos="fade-left" data-aos-duration="1500" data-aos-offset="-100" width="100%" loading="lazy"
            src="https://www.aicoll.co/landingpage/assets/img/aicoll_charts_03.png" title="Gestión de campañas"
            alt="Gestión de campañas" id="aicollDownFirst" />
        </div>

      </div>
      <div class="aicoll-feactured-with-gsap__top-der-total-container" style=" width: 30%">
        <div class="landing__home__heading__container--left" style="padding-left: 20px">
          <div class="landing__feature__container">
            <div class="landing__feature__logo">
              <img width="70" src="https://www.aicoll.co/landingpage/assets/img/feature_result.png"
                alt="Mejora los resultados" id="aicollDownFirst" />
            </div>
            <div class="landing__feature__title">Mejora los resultados <br>
              financieros de <br>
              tu empresa
            </div>
            <div class="landing__feature__paragraph">
              Modelos predictivos que reducen el
              riesgo de Impago, segmentación
              avanzada y análisis de datos para
              personalizar estrategias.
            </div>
          </div>
          <div class="landing__feature__container">
            <div class="landing__feature__logo">
              <img height="70" src="https://www.aicoll.co/landingpage/assets/img/feature_efecty.png"
                alt="Cobro efectivo" id="aicollDownFirst" />
            </div>
            <div class="landing__feature__title">
              Cobra de forma <br>
              fácil y efectiva
            </div>
            <div class="landing__feature__paragraph">
              Más que un software, somos tu socio
              tecnológico. Nuestro equipo te apoya
              con <strong> implementación, soporte técnico
                ágil y estrategias personalizadas que
                aseguran el éxito continuo.</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="landing__home__container__button">
      <button type="button" data-toggle="modal" data-target="#myModalFormPartner" class="btn landing__btn__blue"
        style="margin: 20px auto;">
        Habla con un experto y encuentra la solución perfecta para tu empresa.
      </button>
    </div>
  </section>
  <section id="aicollFeaturedWithGSAP">
    <!-- --------------------------- featured left ---------------------- -->
    <div class="landing__subtitle">
      Algunos de nuestros clientes<br>
    </div>
    <div class="landing__client__container">
      <div class="logos__scroll">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_comfamiliar.png" alt="Comfamiliar">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_amanecer.png" alt="Amanecer">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_alcanos.png" style="width: 90px !important;"
          alt="Alcanos">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_finanfuturo.png" alt="Finanfuturo">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_monokera.png" alt="Monokera">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_unimos.png" alt="Unimos">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_prosperando.png" alt="Prosperando">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_comfamiliar.png" alt="Comfamiliar">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_amanecer.png" alt="Amanecer">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_alcanos.png" style="width: 90px !important;"
          alt="Alcanos">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_finanfuturo.png" alt="Finanfuturo">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_monokera.png" alt="Monokera">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_unimos.png" alt="Unimos">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_prosperando.png" alt="Prosperando">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_comfamiliar.png" alt="Comfamiliar">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_amanecer.png" alt="Amanecer">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_alcanos.png" style="width: 90px !important;"
          alt="Alcanos">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_finanfuturo.png" alt="Finanfuturo">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_monokera.png" alt="Monokera">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_unimos.png" alt="Unimos">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_prosperando.png" alt="Prosperando">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_comfamiliar.png" alt="Comfamiliar">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_amanecer.png" alt="Amanecer">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_alcanos.png" style="width: 90px !important;"
          alt="Alcanos">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_finanfuturo.png" alt="Finanfuturo">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_monokera.png" alt="Monokera">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_unimos.png" alt="Unimos">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_prosperando.png" alt="Prosperando">
      </div>
    </div>
  </section>
  <section id="aicollFeaturedWithGSAP">
    <!-- --------------------------- featured left ---------------------- -->
    <div class="landing__ally__container">
      ¿Cómo lo hacen hoy las entidades?
    </div>
    <div class="landing__ally__container__img">
      <img data-aos="fade-left" data-aos-duration="1500" data-aos-offset="-100" width="70%" loading="lazy"
        src="https://www.aicoll.co/landingpage/assets/img/table.png" title="Integraciones Aicoll"
        alt="Integraciones Aicoll" id="aicollDownFirst" />
    </div>
    <div class="landing__carrusel__container">
      <div class="landing__carrusel">
        <div class="landing__container__testimony--item">
          <p class="font-poppins" style="text-align: center; width: 100%; font-size: 13px">
            “Siempre buscamos aliados estratégicos que realmente nos aporten valor. Ahí fue donde encontramos Aicoll...
            Lo que más valoramos es su capacidad de transformar datos en decisiones estratégicas; no es solo tecnología:
            es confianza y resultados. Recomiendo Aicoll no solo por su tecnología innovadora sino también por su
            compromiso y cercanía con la que trabajan"
          </p>
          <div class="landing__ally__testimony__container">
            <div class="landing__ally__testimony__logo"></div>
            <div class="landing__ally__testimony__container_name">
              <p class="font-poppins" style="font-size: 13px">
                <strong>Soraya Hernandez</strong>
              </p>
              <p class="font-poppins" style="font-size: 13px">
                Directora de TI - Finanfuturo
              </p>
            </div>
          </div>
        </div>
        <div class="landing__container__testimony--item">
          <p class="font-poppins" style="text-align: center; width: 100%; font-size: 13px">
            “Confiamos en Aicoll porque nos brinda tecnología, data y predicción. Nos ha facilitado informes en tiempo
            real, gestión omnicanal, gestión personalizada con los usuarios. Usamos Aicoll porque nos facilita un
            trabajo más rápido, eficiente y seguro"
          </p>
          <div class="landing__ally__testimony__container">
            <div class="landing__ally__testimony__logo"></div>
            <div class="landing__ally__testimony__container_name">
              <p class="font-poppins" style="font-size: 13px">
                <strong>Maria Amparo Londoño</strong>
              </p>
              <p class="font-poppins" style="font-size: 13px">
                Directora de Acuerdos y Soluciones - Finanfuturo
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="landing__subtitle">
      <em class="">Aicoll</em> es para todas las empresas <br>
      que gestionan crédito sin importar su sector
    </div>
    <div class="landing__ally__company__container">
      <div class="landing__ally__company__item">
        <img data-aos="fade-left" data-aos-duration="1500" data-aos-offset="-100" loading="lazy"
          src="https://www.aicoll.co/landingpage/assets/img/feature_finances.png"
          title="Cooperativas y Microfinancieras" alt="Cooperativas y Microfinancieras" id="aicollDownFirst" />
        <p class="font-poppins" style="font-size: 12px; text-align: center;">Cooperativas y <br>
          Microfinancieras</p>
      </div>
      <div class="landing__ally__company__item"><img data-aos="fade-left" data-aos-duration="1500"
          data-aos-offset="-100" loading="lazy"
          src="https://www.aicoll.co/landingpage/assets/img/feature_fintech.png" title="Fintech" alt="Fintech"
          id="aicollDownFirst" />
        <p class="font-poppins" style="font-size: 12px; text-align: center;">Fintech</p>
      </div>
      <div class="landing__ally__company__item"><img data-aos="fade-left" data-aos-duration="1500"
          data-aos-offset="-100" loading="lazy" src="https://www.aicoll.co/landingpage/assets/img/feature_zone.png"
          title="Sector Real" alt="Sector Real" id="aicollDownFirst" />
        <p class="font-poppins" style="font-size: 12px; text-align: center;">Sector <br>
          Real</p>
      </div>
      <div class="landing__ally__company__item"><img data-aos="fade-left" data-aos-duration="1500"
          data-aos-offset="-100" loading="lazy"
          src="https://www.aicoll.co/landingpage/assets/img/feature_services.png" title="Servicios" alt="Servicios"
          id="aicollDownFirst" />
        <p class="font-poppins" style="font-size: 12px; text-align: center;">Servicios <br>
          Públicos</p>
      </div>
    </div>
    <div class="landing__subtitle">
      Nuestros Aliados
    </div>
    <div class="landing__client__container"
      style="margin: 0px 0px !important; position: relative !important; background-color: transparent !important;">
      <div class="logos__scroll">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_meta.png" alt="Meta">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_aws.png" alt="AWS">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_oracle.png" alt="Oracle">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_escarlata.png" alt="Escarlata">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_oncredit.png" alt="OnCredit">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_meta.png" alt="Meta">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_aws.png" alt="AWS">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_oracle.png" alt="Oracle">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_escarlata.png" alt="Escarlata">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_oncredit.png" alt="OnCredit">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_meta.png" alt="Meta">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_aws.png" alt="AWS">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_oracle.png" alt="Oracle">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_escarlata.png" alt="Escarlata">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_oncredit.png" alt="OnCredit">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_meta.png" alt="Meta">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_aws.png" alt="AWS">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_oracle.png" alt="Oracle">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_escarlata.png" alt="Escarlata">
        <img src="https://www.aicoll.co/landingpage/assets/img/logo_oncredit.png" alt="OnCredit">
      </div>
    </div>
  </section>
  <section id="aicollFeaturedWithGSAP">
    <!-- --------------------------- featured left ---------------------- -->
    <div class="landing__container__information" style="margin-top: -40px;">
      <div class="landing__container__information__title">
        Optimiza tus procesos de crédito y cartera con Aicoll. </div>
      <div class="landing__container__information__subtitle">
        La plataforma que centraliza, automatiza y transforma tu gestión. </div>
      <div class="landing__home__container__button">
        <button type="button" data-toggle="modal" data-target="#myModalFormPartner" class="btn landing__btn__blue"
          style="margin: 20px auto;">
          Contáctanos ahora
        </button>
      </div>
    </div>
  </section>
  <section id="aicollFeaturedWithGSAP">
    <!-- --------------------------- featured left ---------------------- -->
    <div class="landing__container__contact">
      <div class="landing__info">
        <h2 class="font-poppins">Mejora la eficiencia y reduce costos en la <br>gestión de tu cartera con
          <span>Aicoll</span>
        </h2>
        <p class="font-poppins">Nuestro equipo te ayudará a entender cómo puedes potenciar tu proceso actual de
          cobranzas.</p>
      </div>
      <form class="landing__form" id="formContactAicollMgmt" method="POST">
        <div class="landing__input__group">
          <input type="text" placeholder="Nombre*" id="nombreMgmt" name="nombreMgmt" required>
          <input type="text" placeholder="Nombre de la empresa*" id="empresaNombreMgmt" name="empresaNombreMgmt"
            required>
        </div>
        <div class="landing__input__group">
          <input type="text" placeholder="Celular o Whatsapp*" id="empresaWhatsappMgmt"
            name="empresaWhatsappMgmt" required>
          <input type="email" placeholder="Correo Electrónico*" id="emailMgmt" name="emailMgmt" required>
        </div>
        <div class="landing__input__group full-width">
          <input type="text" placeholder="Tu Mensaje*" id="detalleMgmt" name="detalleMgmt">
        </div>
        <div class="checkbox">
          <input type="checkbox" id="privacy" checked id="checkboxAicollMgmt" name="checkboxAicollMgmt">
          <label for="privacy">
            <a class="font-poppins" style="font-size: 12px; color:#000;" href="document/POLITICA_PRIVACIDAD.pdf"
              rel="nofollow" target="_blank">
              Acepto la política de privacidad y tratamiento de información
            </a>
          </label>
        </div>
        <button type="submit" id="btnSubmitAicollMgmt">Enviar</button>
      </form>
    </div>
  </section>
  <section id="aicollFeaturedWithGSAP">
    <h2 class="aicoll-footer-seo">CRM Financiero & Hub Tecnológico</h2>
    <!-- --------------------------- featured left ---------------------- -->
    <div class="landing__footer__container">
      <div class="landing__home__heading__panel--left" style="text-align: left !important; width: 70%;">
        <div class="landing__home__heading__sub__container">
          <img data-aos="fade-left" data-aos-duration="1500" data-aos-offset="-100" loading="lazy" height="100"
            src="https://www.aicoll.co/landingpage/assets/img/aicoll_logo.png" title="Aicoll"
            alt="Suite de Analítica Estrategia y Gestión" id="aicollDownFirst" class="" />
          <div class="landing__home__heading__sub__container__text">
            <p class="font-poppins" style="font-size: 11px; margin-top: 20px;">
              <strong>Términos Jurídicos:</strong>
            </p>
            <p class="font-poppins" style="font-size: 11px; margin-top: 20px;">
              <a class="font-poppins" style="font-size: 11px; color:#000000"
                href="https://aicoll.co/document/AVISO_PRIVACIDAD.pdf" target="_blank">Aviso de Privacidad</a><br>
              <a class="font-poppins" style="font-size: 11px; color:#000000"
                href="https://aicoll.co/document/POLITICA_PRIVACIDAD.pdf" target="_blank">Política de Privacidad y
                Tratamiento de Información</a><br>
              <a class="font-poppins" style="font-size: 11px; color:#000000"
                href="https://aicoll.co/document/AUTORIZACI%C3%93N_CONSULTA.pdf" target="_blank">Autorización para
                Consulta y Reporte a Centrales</a><br>
              <a class="font-poppins" style="font-size: 11px; color:#000000"
                href="https://aicoll.co/document/TRATAMIENTO_DATOS.pdf" target="_blank">Autorización de Tratamiento de
                Datos Personales</a><br>
            </p>
            <p class="font-poppins" style="font-size: 12px; margin-top: 40px;">
              Aicoll © 2025 Todos los derechos reservados
            </p>
          </div>
        </div>
      </div>
      <div id="containerDivGSAP" class="aicoll-feactured-with-gsap__top-der-total-container"
        style=" width: 30%; background-color: #F7F7FB;">
        <div>
          <p class="font-poppins" style="font-size: 14px; margin-top: 10px; color: #18014c;">
            Contacto
          </p>
          <p class="font-poppins" style="font-size: 12px; margin-top: 10px;">
            info@aicoll.co
          </p>
          <div class="rrss__container">
            <div class="rrss__item">
              <a href="https://www.facebook.com/aicoll.co/" target="_blank">
                <img height="10" src="https://www.aicoll.co/landingpage/assets/img/facebook.png"
                  title="Facebook Aicoll" alt="Facebook Aicoll" id="aicollDownFirst" class="" />
              </a>
            </div>
            <div class="rrss__item">
              <a href="https://www.instagram.com/aicollcolombia/" target="_blank">
                <img height="10" src="https://www.aicoll.co/landingpage/assets/img/instagram.png"
                  title="Instagram Aicoll" alt="Instagram Aicoll" id="aicollDownFirst" class="" />
              </a>
            </div>
            <div class="rrss__item">
              <a href="https://www.linkedin.com/company/aicoll/posts" target="_blank">
                <img height="10" src="https://www.aicoll.co/landingpage/assets/img/in.png" title="LinkedIn Aicoll"
                  alt="LinkedIn Aicoll" id="aicollDownFirst" class="" />
              </a>
            </div>
            <div class="rrss__item">
              <a href="https://www.youtube.com/@aicoll4031" target="_blank">
                <img height="10" src="https://www.aicoll.co/landingpage/assets/img/youtube.png"
                  title="Youtube Aicoll" alt="Youtube Aicoll" id="aicollDownFirst" class="" />
              </a>
            </div>
          </div>
          <div class="landing__home__container__button" style=" width: 100%;">
            <button type="button" data-toggle="modal" data-target="#myModalFormPartner"
              class="btn landing__btn__success" style="margin: 20px auto;">
              Contáctanos
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('partials.modal')
  @include('partials.scripts')
</body>

</html>
