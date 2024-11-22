<style>
    .slider {
    width: 100%;
    position: relative;
}

.slides img {
    width: 100%;
    display: none;
}

img.displaySlide {
    display: block;
    animation: fade;
    animation-duration: 1.5s;
}

.control button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: hsla(0, 6%, 80%, 0.5);
    border: none;
    color: white;
    font-size: 30px;
    cursor: pointer;
    width: 48px;
    height: 48px;
    border-radius: 100%;
    opacity: 0.5;
}

.control button:hover{
    opacity: 1;
}

#prev {
    left: 0px;
}

#next {
    right: 0px;
}

@keyframes fade {
    from {
        opacity: 0.5;
    }

    to {
        opacity: 1;
    }
}
</style>

<head>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
</head>

<div class="slider relative">
    <div class="slides flex overflow-hidden">
        <img class="displaySlide" src={{Vite::asset("resources/images/slide1.png")}} alt="slide_img">
        <img src={{Vite::asset("resources/images/slide2.png")}} alt="slide_img">
        <img src={{Vite::asset("resources/images/slide3.png")}} alt="slide_img">
        <img src={{Vite::asset("resources/images/slide4.png")}} alt="slide_img">
        <img src={{Vite::asset("resources/images/slide5.png")}} alt="slide_img">
    </div>
    <div class="control">
        <button id="prev" onclick="prevSlide()">&#60;</button>
        <button id="next" onclick="nextSlide()">&#62;</button>
    </div>
</div>

<script>
    const slides = document.querySelectorAll(".slides img");
    let slideIndex = 0;
    let intervalId = null;
    document.addEventListener("DOMContentLoaded", initializeSlider);

function initializeSlider() {
    if (slides.length > 0) {
        slides[slideIndex].classList.add("displaySlide");
        intervalId = setInterval(nextSlide, 5000);
    }
}

function showSlide(index) {
    if (index >= slides.length) {
        slideIndex = 0;
    } else if (index < 0) {
        slideIndex = slides.length - 1;
    }
    slides.forEach((slide) => slide.classList.remove("displaySlide"));
    slides[slideIndex].classList.add("displaySlide");
}

function prevSlide() {
    slideIndex--;
    showSlide(slideIndex);
    clearInterval(intervalId);
}

function nextSlide() {
    slideIndex++;
    showSlide(slideIndex);
}
</script>
