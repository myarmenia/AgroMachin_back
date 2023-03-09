const new_vehicle = document.getElementsByClassName("new_vehicle")[0];
const new_vehicle2 = document.getElementsByClassName("new_vehicle2")[0];
const new_record_btn = document.getElementById("new_record");
const change_record_btn = document.querySelectorAll(".change_record");

function articleToggle() {

  new_vehicle2.classList.remove("new_vehicle_show2");
  new_vehicle.classList.toggle("new_vehicle_show");

}
function articleChangeToggle() {

  new_vehicle.classList.remove("new_vehicle_show");
  new_vehicle2.classList.toggle("new_vehicle_show2");
    //=========Իմ գրած մասը
    let place_id = this.getAttribute('data-id')
    let place_name =  this.getAttribute('data-name')
    let place_status = this.getAttribute('data-status')

    document.getElementById('car1').value=place_name

    if(place_status==1){
        document.querySelector('.edit_counting_place_status').checked=true
       
    }
    if(place_status==0){
        document.querySelector('.edit_counting_place_status').checked=false
    }
   document.getElementById('edit_counting_place').setAttribute('action',"/countingplaces/"+place_id)

}
new_record_btn.addEventListener("click", articleToggle);
for (i = 0; i < change_record_btn.length; i++) {
  change_record_btn[i].addEventListener("click", articleChangeToggle);
}
