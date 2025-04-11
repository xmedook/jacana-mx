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
let lastScrollTop = 0;
const header = document.querySelector('.header');
const scrollThreshold = 100;

window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    if (scrollTop > scrollThreshold) {
        header.style.top = scrollTop > lastScrollTop ? '-60px' : '0';
        if (window.innerWidth >= 992) {
            header.style.top = scrollTop > lastScrollTop ? '-179px' : '0';
        }
    } else {
        header.style.top = '0';
    }
    
    lastScrollTop = scrollTop;
});
