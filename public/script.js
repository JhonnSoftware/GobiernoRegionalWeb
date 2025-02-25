document.addEventListener("DOMContentLoaded", function () {
    new Swiper('.noticias-swiper', {
        loop: true,
        spaceBetween: 30,
        pagination: {
            el: '.noticias-swiper .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.noticias-swiper .swiper-button-next',
            prevEl: '.noticias-swiper .swiper-button-prev',
        },
        breakpoints: {
            0: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        }
    });

    new Swiper('.videos-swiper', {
        // Optional parameters
        loop: true,
        spaceBetween: 30,  // Espacio entre las imágenes
    
        // If we need pagination
        pagination: {
            el: '.videos-swiper .swiper-pagination',
            clickable: true,
        },
    
        // Navigation arrows
        navigation: {
            nextEl: '.videos-swiper .swiper-button-next',
            prevEl: '.videos-swiper .swiper-button-prev',
        },
    
        scrollbar: {
            el: '.swiper-scrollbar',
          },
    
        breakpoints: {
            0: {
                slidesPerView: 1, // 1 imagen visible para pantallas pequeñas
            },
            768: {
                slidesPerView: 2, // 1 imagen visible para pantallas medianas
            },
            1024: {
                slidesPerView: 3, // 3 imágenes visibles para pantallas grandes
            }
        }
    });
});


