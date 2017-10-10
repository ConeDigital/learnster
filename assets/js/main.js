jQuery(document).ready( function($) {

    //Hamburger script
    $('.hamburger').on('click', function(){
        closeOpen($(this));
    });
    function closeOpen (a){
        if(a.hasClass('is-active')){
            $(".mobile-menu").fadeOut('fast');
            $(".mobile-menu").removeClass('mobile-links');
            a.removeClass('is-active');
            $("html, body").css({
                height: 'auto',
                overflow: 'visible'
            });
        }
        else{
            a.addClass('is-active');
            $(".mobile-menu").fadeIn('fast');
            $(".mobile-menu").addClass('mobile-links');
            $("html, body").css({
                height: '100%',
                overflow: 'hidden',
                position: 'relative'
            });
        }
    }

    //Open lightbox on click
    $('.open-lightbox').on('click', function(e){
        e.preventDefault();
        $('.lightbox').fadeIn('fast');
    })

    $(document).on('click', '.close-lightbox',function(){
        console.log('cancel');
        $('.lightbox').fadeOut('fast');
        $('.lightbox').html( $('.lightbox').html() );

    });

    //Fade out on click outside
    $(document).mouseup(function(e){
        var container = $(".lightbox");
        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0){
            console.log('mouseup');
            container.fadeOut('fast');
            $('.lightbox').html( $('.lightbox').html() );
        }
    });

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

    //Filter posts by category
    $('.filter-button').on('click', function () {
        var category = this.value;
        if ($(this).hasClass('active-cat')) {return false;}
        $('.active-cat').removeClass('active-cat');
        $(this).addClass('active-cat');
        $('.blog-grid').hide();
        $('.blog-grid').each(function () {
            if($(this).hasClass(category)) {
                $(this).fadeIn();
            }
        });
    });

    //Show all posts on click
    $('.all-button').on('click', function () {
        $('.blog-grid').fadeIn();
    });

});