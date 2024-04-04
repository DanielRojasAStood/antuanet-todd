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

export { openModal, closeModal };
