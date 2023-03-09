const new_vehicle = document.getElementsByClassName("new_vehicle")[0];
const new_vehicle2 = document.getElementsByClassName("new_vehicle2")[0];
const new_record_btn = document.getElementById("new_record");
const change_record_btn = document.querySelectorAll("#change_record");
const search_content = document.querySelector('.search_content')

function articleToggle() {
    new_vehicle2.classList.remove("new_vehicle_show2");
    new_vehicle.classList.toggle("new_vehicle_show");
}

function articleChangeToggle() {
    new_vehicle.classList.remove("new_vehicle_show");
    new_vehicle2.classList.toggle("new_vehicle_show2");
    let type_name = this.getAttribute('data-name')
    document.querySelector('.new_vehicle2 #car').value = type_name
}

new_record_btn.addEventListener("click", articleToggle);
for (i = 0; i < change_record_btn.length; i++) {
    change_record_btn[i].addEventListener("click", articleChangeToggle);
}


// search

search_inp.addEventListener('input', function () {
    let search_val = search_inp.value
    csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch('/equiment-type/search', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf
        },
        body: JSON.stringify({search_val})
    }).then(async response => {

        if (response.ok) {
            const result = (await response.json()).equipment_type
            let content = ''
            let index = 0

            result.data.forEach(el => {
                index++
                content += `  <tr>
                        <td>${index}</td>
                        <td>${el.name}</td>
                        <td>
                            <div>
                                <img src="/assets/images/table/Trash.svg" alt=""/>
                            </div>
                        </td>
                        <td>
                            <div>
                                <img
                                    src="/assets/images/table/pen.svg"
                                    alt=""
                                    id="change_record"
                                    data-name="${el.name}"
                                    data-id="${el.id}"
                                    onclick="articleChangeToggle()"
                                />
                            </div>
                        </td>
                    </tr>`

            })




            search_content.innerHTML = content
        }
    })
})
