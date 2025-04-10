import React, { useState } from "react";

const SlideGallery = ({ data }) => {
    const [slide, setSlide] = useState(data);
    const [mainImage, setMainImage] = useState(data.items[0]);

    const handleClick = (e, item) => {
        e.preventDefault();
        setMainImage(item);
    };

    return (
        <div className="single-gallery">
            <div className="items">
                {slide.items.map((item) => (
                    <a
                        onClick={(e) => handleClick(e, item)}
                        href="#"
                        key={`item-${item.id}`}
                    >
                        <img
                            src={item.img}
                            alt={data.title}
                            className={mainImage.id == item.id ? "active" : ""}
                        />
                    </a>
                ))}
            </div>
            <div className="main">
                <div className="opacity"></div>
                {mainImage.img && <img src={mainImage.img} alt={data.title} />}
                <div className="description">
                    <h3
                        className="font-outfit"
                        dangerouslySetInnerHTML={{
                            __html: data.title,
                        }}
                    ></h3>
                    <p
                        dangerouslySetInnerHTML={{
                            __html: data.description,
                        }}
                    ></p>
                </div>
            </div>
        </div>
    );
};

export default SlideGallery;
