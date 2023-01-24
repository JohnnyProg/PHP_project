let key_container = 0;


// document.addEventListener("DOMContentLoaded", function () {
//     const arr = [document.getElementById("coffe"), document.getElementById("food"), document.getElementById("zestawy"), document.getElementById("form_zestaw"), document.getElementById("galllery")];
//     const arr2 = ["pages/kawy.html", "pages/jedzenie.html", "pages/zestawy_show.html", "pages/zestaw_forms.html", "pages/gallery.html"];
    
//  for (let i = 0; i < arr.length; i++)
//  {
//     console.log('adwadw')
//      arr[i].addEventListener('click', function () {
//              fetch(arr2[i], {cache: "no-store"})
//                  .then(response => {
//                      return response.text();
//                  })
//                  .then(dane => {
//                      document.getElementById("mainContent").innerHTML = dane;
//                  })
                 
//          },
//          false);
//     }
    
//     document.getElementById("galllery").addEventListener('click', function () { setTimeout(() => { galleryFill(); }, 200); }, false);
//     document.getElementById("zestawy").addEventListener('click', function () { setTimeout(() => { showOrders(); }, 200);}, false);
// })



window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    console.log('adwadw')
    if (sidebarToggle) {
        //Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            //localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

  
function setValid(id) {
    document.getElementById(id).classList.add("is-valid");
    document.getElementById(id).classList.remove("is-invalid");
}

function setInvalid(id) {
    document.getElementById(id).classList.remove("is-valid");
    document.getElementById(id).classList.add("is-invalid");
}

function sprawdzPole(pole_id,obiektRegex) {
    var obiektPole = document.getElementById(pole_id);
    if(!obiektRegex.test(obiektPole.value)) return (false);
    else return (true);
}


function validate(key) {
    var forms = document.querySelectorAll('.needs-validation')
    //Loop over them and prevent submission
    
    console.log("test");
    let regexNazwa = /^\S{1,100}$/u;
    let regexEmail = /^([a-zA-Z0-9])+([.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-]+)+/;
    let regexLista = /^.+/;
    let regexNumber = /^(?:\(?\?)?(?:[-\.\(\)\s]*(\d)){9}\)?$/;

    var forms = document.querySelectorAll('.needs-validation');
    //console.log(forms);
    Array.prototype.slice.call(forms)
        .forEach(function (forms) {
            forms.addEventListener('submit', function (event) {
                if (!forms.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                forms.classList.add('was-validated')
            }, false)
        })
    
    
    if (document.getElementById("food_checker").checked && document.getElementById("foodChooser").value === "") {
        setInvalid("foodChooser");
    } else {
        setValid("foodChooser");
    }

    if (!sprawdzPole("mail", regexEmail)) {
        setInvalid("mail");
    } else {
        setValid("mail");
    }

    if (document.getElementById("kawa").value === "") {
        setInvalid("kawa");
    } else {
        setValid("kawa");
    }

    if (!sprawdzPole("phone", regexNumber)) {
        
        setInvalid("phone");
    } else {

        setValid("phone");
    }

    if (document.getElementById("street").value === "") {
        setInvalid("street");
    } else {
        setValid("street");
    }

    if (document.getElementById("dom").value === "") {
        setInvalid("dom");
    } else {
        setValid("dom");
    }

    // var p = document.getElementsByClassName("is-valid");
    // //console.log(p.length);
    // if (p.length == 6) {
    //     if (document.getElementById("zamow").textContent  === "edytuj") {
    //         console.log(key_container);
    //         localStorage.removeItem(key_container);
    //         setTimeout(() => { showOrders(); }, 200);

    //     }
    //     console.log("udało się ");
    //     saveOrder();
    //     setTimeout(() => { document.getElementById("edit_order").innerHTML = ""; }, 500);
        
    // } else {
    //     console.log("nie udało się");
    //     console.log(p.length)
    // }

}

var z = 0

function selectElement(id, valueToSelect) {    
    let element = document.getElementById(id);
    element.value = valueToSelect;
}

function editOrder(key) {
    key_container = key;
    let order = JSON.parse(localStorage.getItem(key))
    fetch("pages/zestaw_forms.html")
                 .then(response => {
                     return response.text();
                 })
                 .then(dane => {
                     document.getElementById("edit_order").innerHTML = dane;
                 })
    
    //document.getElementById("headerh1").innerHTML = "Edytuj swoje zamówienie";
    setTimeout(() => {
        document.getElementById("headerh1").textContent = "Edytuj zamówienie"
        selectElement("kawa", order.kawa); 
        selectElement("phone", order.telefon)
        selectElement("mail", order.email);
        selectElement("street", order.ulica);
        selectElement("dom", order.nr_domu);
        selectElement("mieszkanie", order.nr_mieszkania)
        selectElement("uwagi", order.uwagi);
        
        var ele = document.getElementsByName("cukier");

        for(i = 0; i < ele.length; i++) {
            if (ele[i].value === order.cukier) {
                ele[i].checked = true;
            }
        }

        if (order.jedzenie === "") {
            
        } else {
            food_checker.checked = true;
            selectElement("foodChooser", order.jedzenie);
        }

        document.getElementById("zamow").textContent = "edytuj";



    }, 200);
    //console.log(order.kawa);
}

function deleteOrder(key) {
    localStorage.removeItem(key);
    showOrders();
}

function showOrders() {
    
    keys = Object.keys(localStorage);
    
    let div = "<h1 class='font-weight-light'>Historia zamówień</h1>";
    div += "</br> Dokonałeś " + keys.length + " zamówień</br></br>";

    div += "<table class='table' id='datatablesSimple'><thead><tr><th>Kawa</th><th>Cukier</th><th>jedzenie</th><th>telefon</th><th>email</th><th>ulica</th><th>dom</th><th>mieszkanie</th><th>uwagi</th><th>edytuj</th><th>usuń</th></tr></thead><tbody>"

    for (i = 0; i < keys.length; i++) {
        let order = JSON.parse(localStorage.getItem(keys[i]))
        //console.log(order);
        div += "<tr><th>"+ order.kawa +"</th><th>"+ order.cukier +"</th><th>"+order.jedzenie+"</th><th>"+ order.telefon +"</th><th>"+order.email+"</th><th>"+order.street+"</th><th>"+order.nr_domu+"</th><th>"+order.nr_mieszkania+"</th><th>"+order.uwagi+"</th><th><input class='form-control' type='button' onclick='editOrder("+keys[i]+")'></th><th><input class='form-control' type='button' onclick='deleteOrder("+keys[i]+")'></th></tr>"
    } 

    document.getElementById("list").innerHTML = div;

    //console.log(keys);
    //

}

function saveOrder() {
    //console.log("zamówienie zapisane");
    var order = {};
    order.kawa = document.getElementById("kawa").value;
    var ele = document.getElementsByName("cukier");

    for(i = 0; i < ele.length; i++) {
        if(ele[i].checked)
            order.cukier = ele[i].value;
            //console.log(ele[i].value)
    }


    order.jedzenie = document.getElementById("foodChooser").value;

    order.telefon = document.getElementById("phone").value;

    order.email = document.getElementById("mail").value;

    order.ulica = document.getElementById("street").value;

    order.nr_domu = document.getElementById("dom").value;

    order.nr_mieszkania = document.getElementById("mieszkanie").value;

    order.uwagi = document.getElementById("uwagi").value;

    localStorage.setItem(z, JSON.stringify(order));
    z++
    
}




function galleryFill()
{
    let gallery = "<h1 class='font-weight-light'>Galeria</h1>";
    for (let i = 1; i <= 12; i++)
    {
        gallery += "<a href='assets/gallery/" + [i] + ".jpg' data-lightbox='gallery' data-title='Obraz " + [i] + "'><img class='p-2 col-lg-3 col-md-4 col-sm-12 col-12 img-thumbnail shadow' src='assets/thumbnails/" + [i] + ".jpg' alt='obraz" + [i] + "'/></a>";
    }
    document.getElementById("gallery").innerHTML = gallery;
}

    
