import React from "react";
import { createRoot } from "react-dom/client";
import Slider from "react-slick";
import SlideGallery from "./SlideGallery";

const PrevArrow = (props) => {
    const { className, style, onClick } = props;
    return (
        <button
            type="button"
            onClick={onClick}
            className="slick-arrow slick-prev"
        >
            <div className="arrow-prev"></div>
        </button>
    );
};
const NextArrow = (props) => {
    const { className, style, onClick } = props;
    return (
        <button
            type="button"
            onClick={onClick}
            className="slick-arrow slick-next"
        >
            <div className="arrow-next"></div>
        </button>
    );
};

const Gallery = () => {
    const lang = document.documentElement.lang ?? "es";
    const data = [
        {
            title:
                lang == "es"
                    ? "<strong>Vida</strong> Activa"
                    : "<strong>An Active</strong> Life",
            description:
                lang == "es"
                    ? "<strong>Conéctate</strong> con el entorno natural de Bucerías en el roof garden mientras practicas pádel, yoga, o haces tu rutina en nuestro gimnasio equipado."
                    : "<strong>Connect</strong> with the natural environment of Bucerías from the roof garden, or while enjoying padel court, yoga, or your workout in our fully equipped gymnasium.",
            items: [
                {
                    id: 1,
                    img: "/images/gallery/vida-activa-1.jpg",
                },
                {
                    id: 2,
                    img: "/images/gallery/vida-activa-2.jpg",
                },
                {
                    id: 3,
                    img: "/images/gallery/vida-activa-3.jpg",
                },
                {
                    id: 4,
                    img: "/images/gallery/vida-activa-4.jpg",
                },
            ],
        },
        {
            title:
                lang == "es"
                    ? "<strong>Vida</strong> Social"
                    : "<strong>Your Social</strong> Life",
            description:
                lang == "es"
                    ? "Ama pasar los días en la alberca para adultos o jacuzzi con vista al mar, en el asoleadero, brinda en nuestra terraza pergolada o vive un grato momento en nuestros salones lounge y sociales. "
                    : "Enjoy spending your days in the adult swimming pool with ocean views, toast your new life on our roofed terrace, or have unforgettable moments in our social lounge areas.",
            items: [
                {
                    id: 1,
                    img: "/images/gallery/vida-social-1.jpg",
                },
                {
                    id: 2,
                    img: "/images/gallery/vida-social-2.jpg",
                },
                {
                    id: 3,
                    img: "/images/gallery/vida-social-3.jpg",
                },
                {
                    id: 4,
                    img: "/images/gallery/vida-social-4.jpg",
                },
            ],
        },
        {
            title:
                lang == "es"
                    ? "<strong>Vida</strong> Familiar"
                    : "<strong>Your Family</strong> Life",
            description:
                lang == "es"
                    ? "Pasa los días más maravillosos con tus seres queridos en nuestro jardín con alberca familiar y chapoteadero con asoleaderos y una hermosa terraza con pérgolas."
                    : "Have the most wonderful time with your loved ones in our garden area, complete with family pool, fire pit, and a lovely, roofed terrace.",
            items: [
                {
                    id: 1,
                    img: "/images/gallery/vida-familiar-1.jpg",
                },
                {
                    id: 2,
                    img: "/images/gallery/vida-familiar-2.jpg",
                },
                {
                    id: 3,
                    img: "/images/gallery/vida-familiar-3.jpg",
                },
                {
                    id: 4,
                    img: "/images/gallery/vida-familiar-4.jpg",
                },
            ],
        },
        {
            title:
                lang == "es"
                    ? "<strong>Vida</strong> de Playa"
                    : "<strong>Your Beach</strong> Life",
            description:
                lang == "es"
                    ? "Ama pasar los días en la alberca para adultos o jacuzzi con vista al mar, en el asoleadero, brinda en nuestra terraza pergolada o vive un grato momento en nuestros salones lounge y sociales."
                    : "Make the most out of an exclusive amenity. A golf cart awaits to drive you to the beach in comfort whenever you or your family desire it.",
            items: [
                {
                    id: 1,
                    img: "/images/gallery/vida-playa-1.jpg",
                },
                {
                    id: 2,
                    img: "/images/gallery/vida-playa-2.jpg",
                },
                {
                    id: 3,
                    img: "/images/gallery/vida-playa-3.jpg",
                },
                {
                    id: 4,
                    img: "/images/gallery/vida-playa-4.jpg",
                },
            ],
        },
    ];
    const settings = {
        arrows: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        prevArrow: <PrevArrow />,
        nextArrow: <NextArrow />,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                },
            },
        ],
    };

    return (
        <div className="gallery-slider">
            <Slider {...settings}>
                <SlideGallery data={data[0]} />
                <SlideGallery data={data[1]} />
                <SlideGallery data={data[2]} />
                <SlideGallery data={data[3]} />
            </Slider>
        </div>
    );
};

export default Gallery;

const app = document.getElementById("gallery");
if (app) {
    const root = createRoot(app);
    root.render(<Gallery />);
}
