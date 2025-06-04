<div class="modal fade" id="myModalFormPartner" role="dialog">
    <h2 class="aicoll-footer-seo">Aicoll - Contáctenos</h2>
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
          </button>
        </div>
        <div class="modal-body aicoll-form-partner__container">
          <!-- --------------------------- title and subtitle ---------------------- -->
          <div class="aicoll-form-partner__heading-container">
            <div class="aicoll-form-partner__heading-title-container">
              <h1>
                ¿Estás listo para transformar digitalmente tu negocio y llevarlo a otro nivel?
              </h1>
            </div>
            <div class="aicoll-form-partner__heading-subtitle-container">
              <h2>
                ¡No lo dejes para después, contáctanos!
              </h2>
            </div>
          </div>
          <!-- ---------------------------------- form ----------------------------- -->
          <div class="aicoll-form-partner__form-container">
            <form id="formContactAicoll" method="POST">
              <div class="aicoll-form-partner__form-input-container">
                <label style="text-align:left;" for="nombre">Tu Nombre: <div id="spanValueNombre"
                    class="spanValidation"></div></label>
                <input required title="Completa el campo - Tu Nombre" size="40" type="text" id="nombre"
                  name="nombre" placeholder="Ingresa nombre completo">
              </div>
              <div class="aicoll-form-partner__form-input-container">
                <label style="text-align:left;" for="empresaNombre">Tu Empresa: <div id="spanValueEmpresa"
                    class="spanValidation"></div></label>
                <input required title="Completa el campo - Tu Empresa" size="40" type="text"
                  id="empresaNombre" name="empresaNombre" placeholder="Ingresa nombre de la empresa">
              </div>
              <div class="aicoll-form-partner__form-input-container">
                <label style="text-align:left;" for="empresaWhatsapp">Tu Whatsapp: <div id="spanValueWhatsapp"
                    class="spanValidation"></div></label>
                <input required title="Completa el campo - Tu Whatsapp" size="40" type="tel"
                  id="empresaWhatsapp" name="empresaWhatsapp" placeholder="Ingresa número de Celular o Whatsapp">
              </div>
              <div class="aicoll-form-partner__form-input-container">
                <label style="text-align:left;" for="email">Tu Correo Electrónico: <div id="spanValueEmail"
                    class="spanValidation"></div></label>
                <input required title="Completa el campo - Tu Correo Electrónico" size="40" type="email"
                  id="email" name="email"
                  pattern="[a-zA-Z0-9!#$%&'*_+-]([\.]?[a-zA-Z0-9!#$%&'*_+-])+@[a-zA-Z0-9]([^@&%$\/()=?¿!.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?"
                  placeholder="Ingresa correo electrónico">
              </div>
              <div class="aicoll-form-partner__form-input-container">
                <label style="text-align:left;" for="detalle">Tu Mensaje: <div id="spanValueMensaje"
                    class="spanValidation"></div></label>
                <textarea rows="2" title="Completa el campo - Tu Mensaje" id="detalle" name="detalle" maxlength="254"
                  placeholder="Ingresa un Mensaje"></textarea>
              </div>

              <div class="aicoll-form-partner__form-input-checkbox-container">
                <input required title="Completa el campo - Política de privacidad y tratamiento de información"
                  type="checkbox" id="checkboxAicoll" name="checkboxAicoll" value="no">
                <label>
                  <a href="document/POLITICA_PRIVACIDAD.pdf" rel="nofollow" target="_blank">
                    Acepto la política de privacidad y tratamiento de información
                  </a>
                </label>
              </div>
              <div class="aicoll-form-partner__button--container">
                <button type="submit" id="btnSubmitAicoll" name="enviar" value="Enviar"
                  class="btn aicoll-form-partner__button-form--success">
                  Enviar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
