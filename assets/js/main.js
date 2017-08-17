jQuery(document).ready( function($) {


    //All swipers
    var heroTop = new Swiper('.swiper-bottom', {
        grabCursor: true,
        //autoplay: 6000,
        onSlideChangeEnd: function(swiper){
            var activeIndex = swiper.activeIndex;
            $(heroBottom.slides).removeClass('is-selected');
            $(heroBottom.slides).eq(activeIndex).addClass('is-selected');
            heroBottom.slideTo(activeIndex,500, false);
        }
    });
    var heroBottom = new Swiper('.swiper-top', {
        spaceBetween: 0,
        centeredSlides: false,
        slidesPerView: 4,
        slideToClickedSlide: true,
        onClick: function (swiper, event){
            var clicked = swiper.clickedIndex;
            swiper.activeIndex = clicked; //don't need this
            swiper.updateClasses() //don't need this
            $(swiper.slides).removeClass('is-selected');
            $(swiper.clickedSlide).addClass('is-selected');
            heroTop.slideTo(clicked,500, false);
        }
    });

});