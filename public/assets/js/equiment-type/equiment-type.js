const new_vehicle = document.getElementsByClassName("new_vehicle")[0];
const new_vehicle2 = document.getElementsByClassName("new_vehicle2")[0];
const new_record_btn = document.getElementById("new_record");
const change_record_btn = document.querySelectorAll("#change_record");

function articleToggle() {
    new_vehicle2.classList.remove("new_vehicle_show2");
    new_vehicle.classList.add("new_vehicle_show");
}

function articleChangeToggle() {
    new_vehicle.classList.remove("new_vehicle_show");
    new_vehicle2.classList.add("new_vehicle_show2");
    let type_name = this.getAttribute('data-name')

    let update_url = ''
    let url_id = ''
    let new_update_url = ''

    document.querySelector('.new_vehicle2 #car').value = type_name
    update_url = this.getAttribute('data-route')
    url_id = this.getAttribute('data-id')
    new_update_url = update_url + url_id
    update_form.setAttribute('action', new_update_url)
}

new_record_btn.addEventListener("click", articleToggle);
for (i = 0; i < change_record_btn.length; i++) {
    change_record_btn[i].addEventListener("click", articleChangeToggle);
}
