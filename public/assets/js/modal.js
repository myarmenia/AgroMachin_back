const cur_table = document.getElementById("table-route"),
        // remove_btn = document.getElementById("modal-remove-btn"),
        // remove_modal = document.getElementById("remove-modal"),
        accept_btn = document.getElementById("modal-accept-btn"),
        accept_form = document.getElementById("modal-accept-form"),
        confirm_modal = document.getElementById("confirm-modal");

// ------------------------------------------------------------------
// Modal toggling
// ------------------------------------------------------------------
const modal_container = document.querySelector(".modal-container");
function showModal(name) {
    const modal = document.querySelector(name);

    document.body.classList.add("scroll-disabled");
    modal_container.style.display = "block";
    modal.style.display = "block";

    setTimeout(() => {
        // modal.classList.remove("modal-close");
        // modal_container.classList.remove("modal-close");
        modal_container.classList.add("modal-open");
        modal.classList.add("modal-open");
    }, 1);
}
document.querySelectorAll(".toggle").forEach((el) => {
    el.addEventListener("click", () => showModal("#confirm-modal"));
});
function hideModal() {
    const modals = document.getElementsByClassName("modal");
    for (let i = 0; i < modals.length; i++) {
        const modal = modals[i];

    modal.classList.remove("modal-open", "modal-open-sm");
    modal_container.classList.remove("modal-open");

    let status_elem_id = confirm_modal.attributes["data-status-id"].value
    let status_elem = confirm_modal.attributes["data-status"].value

    if(status_elem_id != '' && status_elem != 1){

        let elem_status = document.querySelector(`input[data-id="${status_elem_id}"]`).checked
            document.querySelector(`input[data-id="${status_elem_id}"]`).checked = elem_status ?  false : true
    }

    // modal_container.classList.add("modal-close");
    // modal.classList.add("modal-close");
    setTimeout(() => {
      modal_container.style.display = "none";
      modal.style.display = "none";
      document.body.classList.remove("scroll-disabled");
    }, 300);
  }
}
window.addEventListener("click", (e) => {
  if (e.target == modal_container) {
    hideModal();
  }
});
document.querySelectorAll(".modal .close").forEach((el) => {
  el.addEventListener("click", hideModal);
});
document.getElementById("modal-deny-btn").addEventListener("click", hideModal);
document.getElementById("modal-accept-btn").addEventListener("click", ()=>{
    confirm_modal.attributes["data-status"].value = 1;
    hideModal()
});

// ----------------------------------------------------------------------------
// Open modal with checkbox
document.querySelectorAll(".toggle-checkbox").forEach((el, i) => {
    el.addEventListener("click", function () {
        const checkbox_id = this.attributes["data-id"].value,
                checkbox_checked = this.checked,
                route_name = cur_table.attributes["data-route"].value;
                form_method.value = ''
                confirm_modal.attributes["data-status-id"].value = checkbox_id;

        accept_form.action = `${route_name}/${checkbox_id}/${
            checkbox_checked ? 1 : 0
        }`;

        let status_elem_id = confirm_modal.attributes["data-status-id"].value

        showModal("#confirm-modal");
        confirm_modal.setAttribute("data-modal-id", checkbox_id);
    });
});

// ----------------------------------------------------------------------------
// Open modal with trashbin
document.querySelectorAll(".trashbin").forEach((el, i) => {
    el.addEventListener("click", function () {
        const checkbox_id = this.attributes["data-id"].value,
                route_name = cur_table.attributes["data-delete"].value;
                form_method.value = 'delete'
                confirm_modal.attributes["data-status-id"].value = '';

                accept_form.action = `${route_name}/${checkbox_id}`;

        showModal("#confirm-modal");
        confirm_modal.setAttribute("data-modal-id", checkbox_id);
    });
  });
  // ============================================================================

