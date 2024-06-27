import $ from "jquery";

const $dataOpenModal = $("[data-open-modal]");
const $modals = $("[data-modal]");

$dataOpenModal.click(openModal);
function openModal() {
  const modalId = $(this).data("open-modal");
  const $modal = $(`[data-modal="${modalId}"]`);
  $modal.fadeIn();
}

const $botonCloseModal = $("[data-close-modal]");

$botonCloseModal.click(closeModal);
function closeModal() {
  $modals.fadeOut();
}

var currentStep = 0;
var steps = $(".step");
var nameValidated = false;

function updateProgressBar() {
  var progress = (currentStep / (steps.length - 1)) * 100;
  $(".progress").css("width", progress + "%");
}

function showStep(step) {
  steps.removeClass("active");
  steps.eq(step).addClass("active");
  updateProgressBar();
}

$(".next-step").click(function () {
  if (currentStep === 0) {
    currentStep++;
    showStep(currentStep);
    validateName();
  } else if (currentStep < steps.length - 1) {
    currentStep++;
    showStep(currentStep);
  }
  updateProgressBar();
});

$(".prev-step").click(function () {
  if (currentStep > 0) {
    currentStep--;
    showStep(currentStep);
  }
  updateProgressBar();
});

// Show the first step
showStep(currentStep);
updateProgressBar();

function validateName() {
  var nombre = $("#nombre").val();

  // Fetch guest information using Ajax
  $.ajax({
    url: "/wp-admin/admin-ajax.php",
    method: "POST",
    data: {
      action: "fetch_guest_info",
      nombre: nombre,
    },
    success: function (response) {
      if (response.success) {
        nameValidated = true;
        $("#nombre-error").remove(); // Eliminar mensaje de error si existe
        var guests = response.data.guests;
        var events = [
          // "ARE YOU ATTENDING?",
          "OUR WEDDING",
          "WELCOME PHANTOM PARTY",
        ];
        var fields = ["event-1-fields", "event-2-fields", "event-3-fields"];

        events.forEach(function (event, index) {
          var eventFields = $("#" + fields[index]);
          eventFields.empty();
          guests.forEach(function (guest) {
            eventFields.append(
              `<p class="title-18">${guest}</p>
               <span class="wpcf7-form-control-wrap">
                  <span class="wpcf7-form-control">
                    <span class="wpcf7-list-item">
                      <label>
                        <input type="radio" name="${event}_${guest}" value="yes" required checked="checked"> 
                        <span class="wpcf7-list-item-label">
                          <span>Accept</span>
                        </span>
                    </label>
                    </span>
                  </span>
                  <span class="wpcf7-list-item">
                      <label>
                        <input type="radio" name="${event}_${guest}" value="no" required> 
                        <span class="wpcf7-list-item-label">
                          <span>Decline</span>
                        </span>
                    </label>
               </span>
               `
            );
          });
        });
      } else {
        nameValidated = false;
        // Mostrar mensaje de error y volver al primer paso
        if ($("#nombre-error").length === 0) {
          $("#nombre").after(
            '<p id="nombre-error" style="color: red;">Nombre no encontrado. Por favor, verifique e intente de nuevo.</p>'
          );
        }
        currentStep = 0;
        showStep(currentStep);
      }
    },
    error: function () {
      nameValidated = false;
      // Mostrar mensaje de error en caso de fallo en la petición Ajax y volver al primer paso
      if ($("#nombre-error").length === 0) {
        $("#nombre").after(
          '<p id="nombre-error" style="color: red;">Error al verificar el nombre. Por favor, intente de nuevo.</p>'
        );
      }
      currentStep = 0;
      showStep(currentStep);
    },
  });
}

// Validar nombre cuando el campo pierde el foco
$("#nombre").on("blur", validateName);

export { openModal, closeModal };
