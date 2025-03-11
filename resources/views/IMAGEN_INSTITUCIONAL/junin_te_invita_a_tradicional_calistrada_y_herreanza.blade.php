@extends('layouts.layout')
@section('title', 'Galerias Fotograficas')
@section('contenido-principal')
    <style>
        .banner {
            position: relative;
            width: 100%;
            height: 340px;
            background: linear-gradient(to left, rgba(204, 204, 204, 0.4), rgba(0, 14, 139, 0.9)),
                url('images/Gobierno_Regional_Junin.jpg') no-repeat;
            background-size: cover;
            background-position: 50% 35%;
            display: flex;
            align-items: center;
            justify-content: start;
            padding-left: 20px;
        }

        .banner h1 {
            color: #fff;
            font-size: 50px;
            font-weight: bold;
            margin-left: 180px;
            margin-top: 50px;
            font-family: 'Panton Narrow Black Italic', sans-serif;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
        }

        .header-alert {
            background-color: #ff6700;
            color: white;
            padding: 15px;
            border-radius: 10px;
            font-size: 16px;
        }

        ::-webkit-scrollbar {
            width: 1.3rem;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 1rem;
            background: #797979;
            transition: all 0.5s ease-in-out;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #222224;
        }

        ::-webkit-scrollbar-track {
            background: #f9f9f9;
        }

        .container {
            max-width: 110rem;
            padding: 0 1rem;
            margin: 0 auto;
        }

        #tranding {
            padding: 4rem 0;
        }

        @media (max-width:1440px) {
            #tranding {
                padding: 7rem 0;
            }
        }

        #tranding .tranding-slider {
            height: 52rem;
            padding: 2rem 0;
            position: relative;
        }

        @media (max-width:500px) {
            #tranding .tranding-slider {
                height: 45rem;
            }
        }

        .tranding-slide {
            width: 37rem;
            height: 42rem;
            position: relative;
        }

        @media (max-width:500px) {
            .tranding-slide {
                width: 28rem !important;
                height: 36rem !important;
            }

            .tranding-slide .tranding-slide-img img {
                width: 28rem !important;
                height: 36rem !important;
            }
        }

        .tranding-slide .tranding-slide-img img {
            width: 37rem;
            height: 40rem;
            border-radius: 2rem;
            object-fit: cover;
        }

    

        .food-rating {
            padding-top: 1rem;
            display: flex;
            gap: 1rem;
        }

        .rating ion-icon {
            color: var(--primary);
        }

        .swiper-slide-shadow-left,
        .swiper-slide-shadow-right {
            display: none;
        }

        .tranding-slider-control {
            position: relative;
            bottom: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tranding-slider-control .swiper-button-next {
            left: 58% !important;
            transform: translateX(-58%) !important;
        }

        @media (max-width:990px) {
            .tranding-slider-control .swiper-button-next {
                left: 70% !important;
                transform: translateX(-70%) !important;
            }
        }

        @media (max-width:450px) {
            .tranding-slider-control .swiper-button-next {
                left: 80% !important;
                transform: translateX(-80%) !important;
            }
        }

        @media (max-width:990px) {
            .tranding-slider-control .swiper-button-prev {
                left: 30% !important;
                transform: translateX(-30%) !important;
            }
        }

        @media (max-width:450px) {
            .tranding-slider-control .swiper-button-prev {
                left: 20% !important;
                transform: translateX(-20%) !important;
            }
        }

        .tranding-slider-control .slider-arrow {
            background: var(--white);
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 50%;
            left: 42%;
            transform: translateX(-42%);
            filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
        }

        .tranding-slider-control .slider-arrow ion-icon {
            font-size: 2rem;
            color: #222224;
        }

        .tranding-slider-control .slider-arrow::after {
            content: '';
        }

        .tranding-slider-control .swiper-pagination {
            position: relative;
            width: 15rem;
            bottom: 1rem;
        }

        .tranding-slider-control .swiper-pagination .swiper-pagination-bullet {
            filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
        }

        .tranding-slider-control .swiper-pagination .swiper-pagination-bullet-active {
            background: var(--primary);
        }
        .custom-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .badge-box {
            background: #1255b3;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 8px 8px 0 0;
            width: 60px;
            font-weight: bold;
        }

        .badge-box span {
            display: block;
            font-size: 18px;
        }

        .badge-box small {
            font-size: 12px;
        }

        
        /* Modal */
        #modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        #modal img {
            
            border-radius: 10px;
            object-fit: contain;
        }

        #modal .close {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }
    </style>

    <div class="banner">
        <h1>FOTOGALERÍA</h1>
    </div>

    <div class="container mt-4">
        <div class="header-alert text-center">
            <strong style="font-size: 20px;">JUNÍN TE INVITA A TRADICIONAL CALISTRADA Y HERRANZA</strong><br>
        </div>
    </div>

    <section id="tranding">
        <div class="container">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/normal_5fd72798079af87e15c47315baa47125.jpg" alt="">
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/normal_a6de64bb8d1a62bcef7f1e6e804eaea1.jpg" alt="">
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/normal_9d91b130c492762bf6d889d98529eb3a.jpg" alt="">
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/normal_8fa18e18af7d921bde0e80d606d2b2a9.jpg" alt="">
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/normal_f41e2b0bd1438960622ea89b3b039b01.jpg" alt="">
                        </div>
                    </div>
                    
                    <!-- Slide-end -->
                </div>

                <div class="tranding-slider-control">
                    <div class="swiper-button-prev slider-arrow">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                    </div>
                    <div class="swiper-button-next slider-arrow">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>

    </section>

    <div id="modal">
        <span class="close">&times;</span>
        <img id="modal-img">
    </div>

    <div class="container mt-4" style="max-width: 1000px;">
        <div class="custom-card">
            <div class="badge-box">
                <span>5</span>
                <small>FOTOS</small>
            </div>
            <div>
                <p class="mb-0">
                    <strong>Del 5 al 15 de marzo</strong>, acompáñanos en la Gran Calistrada y Herranza Junina, 
                    una fiesta que celebra la conexión entre el pueblo andino, la naturaleza y sus costumbres ancestrales. 
                    <em>“Los invito a vivir esta experiencia única, donde la música, la danza y la tradición se entrelazan en 
                    una celebración que trasciende generaciones”</em>, expresó Julio Abanto, director Regional de Comercio 
                    Exterior y Turismo – Junín.
                </p>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script>
        var TrandingSlider = new Swiper('.tranding-slider', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2.5,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        // Inicializar Swiper
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        // Función para abrir imágenes en pantalla completa
        const images = document.querySelectorAll('.swiper-slide img');
        const modal = document.getElementById('modal');
        const modalImg = document.getElementById('modal-img');
        const closeModal = document.querySelector('.close');

        images.forEach(img => {
            img.addEventListener('click', function () {
                modal.style.display = 'flex';
                modalImg.src = this.src;
            });
        });

        closeModal.addEventListener('click', function () {
            modal.style.display = 'none';
        });

        // Cerrar modal si se hace clic fuera de la imagen
        modal.addEventListener('click', function (event) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    </script>
@endsection
