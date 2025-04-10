import $ from "jquery";
import "slick-carousel";

const Departments = () => {
    //get the get parameters
    const urlParams = new URLSearchParams(window.location.search);
    const startModel = urlParams.get("model");

    $(".carousel").slick({
        arrows: true,
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        // centerMode: true,
        asNavFor: ".wrap-details-items",
        lazyLoad: "ondemand",
        prevArrow: `<button type="button" class="slick-arrow slick-prev"><div class="dark"></div><div class="arrow-prev"></div></button>`,
        nextArrow: `<button type="button" class="slick-arrow slick-next"><div class="dark"></div><div class="arrow-next"></div></button>`,
        responsive: [
            {
                breakpoint: 1700,
                settings: {
                    slidesToShow: 4,
                    variableWidth: true,
                },
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    // arrows: false,
                    variableWidth: true,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    arrows: true,
                    // centerMode: true,
                    variableWidth: true,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    arrows: true,
                    variableWidth: true,
                    // prevArrow: `<button type="button" class="slick-arrow slick-prev"><div class="dark"></div><div class="arrow-prev"></div></button>`, nextArrow: `<button type="button" class="slick-arrow slick-next"><div class="dark"></div><div class="arrow-next"></div></button>`,
                },
            },
        ],
    });
    $(".wrap-details-items").slick({
        asNavFor: ".carousel",
        infinite: false,
    });

    $(".gallery > .items").slick({
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        variableWidth: true,
        centerMode: true,
        arrows: true,
        prevArrow: `<button type="button" class="slick-arrow slick-prev"><div class="dark"></div><div class="arrow-prev"></div></button>`,
        nextArrow: `<button type="button" class="slick-arrow slick-next"><div class="dark"></div><div class="arrow-next"></div></button>`,
        responsive: [
            {
                breakpoint: 999,
                settings: {
                    slidesToShow: 1,
                    arrows: true,
                    variableWidth: false,
                    autoplay: true,
                    centerMode: false,
                },
            },
        ],
    });

    $(".lifes").slick({
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    arrows: false,
                    variableWidth: true,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    // centerMode: true,
                    variableWidth: true,
                    autoplay: true,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    variableWidth: true,
                    autoplay: true,
                    // prevArrow: `<button type="button" class="slick-arrow slick-prev"><div class="dark"></div><div class="arrow-prev"></div></button>`, nextArrow: `<button type="button" class="slick-arrow slick-next"><div class="dark"></div><div class="arrow-next"></div></button>`,
                },
            },
        ],
    });

    $(".single-model a").on("click", function (e) {
        e.preventDefault();
        console.log("enter");
        $(".wrap-details-items").slick("slickGoTo", $(this).data("slide"));
    });

    if (startModel) {
        $(".wrap-details-items").slick("slickGoTo", startModel);
    }
};
export default Departments;
