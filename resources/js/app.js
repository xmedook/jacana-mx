import "./bootstrap";

import Gallery from "./Components/Gallery";
import Departments from "./departments";

import Home from "./home";

//get the url section
const path = window.location.pathname;
console.log(path);
switch (path) {
    case "/":
    case "/en":
    case "/en/":
        Home();
        break;
    case "/departamentos":
    case "/en/departamentos":
        Departments();
        break;
    default:
        console.log("default");
        break;
}

//scroll header
let prevScrollpos = window.scrollY;

window.onscroll = function () {
    const currentScrollPos = window.scrollY;
    const header = document.getElementById("header");
    if (prevScrollpos > currentScrollPos) {
        header.style.top = "0";
    } else {
        if (currentScrollPos > 200) header.style.top = "-200px";
    }
    prevScrollpos = currentScrollPos;
};
