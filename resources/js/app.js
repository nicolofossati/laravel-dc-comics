import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


//<button type="submit" class="btn btn-danger">Delete</button>

//const delete_button = document.getElementById('delete_bttn');



function popup() {
    console.log('booooh');
}

document.getElementById("delete_bttn").addEventListener("click", popup);