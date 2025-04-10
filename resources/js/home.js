import $ from "jquery";
import "slick-carousel";

const Home = () => {
    $(".carousel").slick({
        arrows: true,
        infinite: false,
        speed: 300,
        slidesToShow: 5,
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
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    variableWidth: true,
                    // prevArrow: `<button type="button" class="slick-arrow slick-prev"><div class="dark"></div><div class="arrow-prev"></div></button>`, nextArrow: `<button type="button" class="slick-arrow slick-next"><div class="dark"></div><div class="arrow-next"></div></button>`,
                },
            },
        ],
    });

    $(".blog .items").slick({
        slidesToShow: 4,
        infinite: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    centerMode: true,
                    variableWidth: true,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    centerMode: true,
                    variableWidth: true,
                },
            },
            {
                breakpoint: 700,
                settings: {
                    centerMode: true,
                    slidesToShow: 1,
                    variableWidth: true,
                },
            },
        ],
    });
};
export default Home;
