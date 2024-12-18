<style>
.slider-wrapper {
    position: relative;
}

.controls button{
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

.controls button:hover{
    opacity: 1;
}

.prev-slide{
    left: 0;
}

.next-slide{
    right: 0;
}

</style>

<div class="slider-wrapper">
    <div class="slider">
        <img src={{Vite::asset("resources/images/slide1.png")}} alt="slide_img">
        <img src={{Vite::asset("resources/images/slide2.png")}} alt="slide_img">
        <img src={{Vite::asset("resources/images/slide3.png")}} alt="slide_img">
        <img src={{Vite::asset("resources/images/slide4.png")}} alt="slide_img">
        <img src={{Vite::asset("resources/images/slide5.png")}} alt="slide_img">
    </div>
    <div class="controls">
        <button class="prev-slide">&#60;</button>
        <button class="next-slide">&#62;</button>
    </div>
</div>

<script>
    $(function() { 
        $('.slider').slick({
            dots: true,           
            infinite: true,         
            slidesToShow: 1,     
            slidesToScroll: 1,    
            autoplay: true,       
            autoplaySpeed: 2000,
            arrows: false,
        });

        $('.prev-slide').on('click', function() {
            $('.slider').slick('slickPrev'); // Move to the previous slide
        });

        $('.next-slide').on('click', function() {
            $('.slider').slick('slickNext'); // Move to the next slide
        });
    })
</script>