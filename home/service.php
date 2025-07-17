<style>
        /* --- Service Section Styles --- */
        .as_service_wrapper {
            padding: 15px 0;
            background-color: #f8f9fa;
        }

        /* --- Section Title --- */
        .as_service_wrapper .as_heading {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1rem;
            text-align: center;
        }

        .as_service_wrapper .as_font14 {
            font-size: 14px;
            color: #666;
            margin-bottom: 3rem;
        }

        /* --- Services Grid --- */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 1.5rem;
            margin-top: 2rem;
        }

        /* --- Individual Service Card --- */
        .service-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: #555;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            padding: -2rem;
            border-radius: 8px;
        }
        
        .service-card:hover {
            transform: translateY(-8px);
            text-decoration: none;
            color: #333;
        }

        .service-card img {
            width: 100%;
            height: auto;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            border-radius: 1rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 0.75rem;
            transition: box-shadow 0.3s ease-in-out;
        }
        
        .service-card:hover img {
             box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .service-card p {
            font-size: 1rem;
            font-weight: 500;
            margin: 0;
            text-align: center;
            line-height: 1.4;
        }

        /* --- Responsive Design --- */
        
        /* For Tablets (e.g., screen width <= 1024px) */
        @media (max-width: 1024px) {
            .services-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        /* For Smaller Tablets (e.g., screen width <= 768px) */
        @media (max-width: 768px) {
            .as_service_wrapper {
                padding: 60px 0;
            }
            .services-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 1rem;
            }
            .as_service_wrapper .as_heading {
                font-size: 2rem;
            }
        }

        /* For Mobile Phones (e.g., screen width <= 480px) */
        @media (max-width: 480px) {
            .as_service_wrapper {
                padding: 40px 0;
            }
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }
            .as_service_wrapper .as_heading {
                font-size: 1.5rem;
            }
            .service-card p {
                font-size: 0.8rem;
            }
        }
    </style>

<section class="as_service_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h1 class="as_heading" style="text-align: left;">Our Services</h1>
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="services-grid">
            <!-- Row 1 -->
            <a href="#" class="service-card">
                <img src="assets/images/service/row1.jpg" alt="Match Making">
                <p>Match Making</p>
            </a>
            <a href="#" class="service-card">
                <img src="assets/images/service/panchang.jpg" alt="Panchang">
                <p>Panchang</p>
            </a>
            <a href="#" class="service-card">
                <img src="assets/images/service/tarot.jpg" alt="Tarot Reading">
                <p>Tarot Reading</p>
            </a>
            <a href="#" class="service-card">
                <img src="assets/images/service/kundli.jpg" alt="Kundli">
                <p>Kundli</p>
            </a>
            <a href="#" class="service-card">
                <img src="assets/images/service/love.jpg" alt="Love">
                <p>Love</p>
            </a>
            <a href="#" class="service-card">
                <img src="assets/images/service/numerology.jpg" alt="Numerology">
                <p>Numerology</p>
            </a>

            <!-- Row 2 -->
            <a href="#" class="service-card">
                <img src="assets/images/service/remedies.jpg" alt="Remedies">
                <p>Remedies</p>
            </a>
            <a href="#" class="service-card">
                <img src="assets/images/service/planet.jpg" alt="Planet">
                <p>Planet Transits</p>
            </a>
            <a href="#" class="service-card">
                <img src="assets/images/service/vastu.jpg" alt="Vastu">
                <p>Vastu</p>
            </a>
            <a href="#" class="service-card">
                <img src="assets/images/service/zodiac.jpg" alt="Zodiac Signs">
                <p>Zodiac Signs</p>
            </a>
            <a href="#" class="service-card">
                <img src="assets/images/service/Festivals.jpg" alt="Festivals">
                <p>Festivals</p>
            </a>
            <a href="#" class="service-card">
                <img src="assets/images/service/spirituality.jpg" alt="Spirituality">
                <p>Spirituality</p>
            </a>
                </div>
            </div>
        </div>
    </div>
</section>