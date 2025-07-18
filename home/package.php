<style>
        /* --- Package Section Styles --- */
        .as_package_wrapper {
            padding: 50px 0;
            background-color: #f8f9fa;
            position: relative;
            z-index: 1;
        }
        
        .as_package_wrapper .section-subtitle {
            font-size: 0.8rem;
            font-weight: 500;
            color: #6c757d;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }

        .as_package_wrapper .section-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 3rem;
            color: #333;
        }

        /* Pricing Cards Container */
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            max-width: 1100px;
            margin: 0 auto;
        }

        /* Individual Pricing Card */
        .pricing-card {
            background-color: #ffffff;
            border: 1px solid #e9ecef;
            border-radius: 16px;
            padding: 2.5rem 2rem;
            display: flex;
            flex-direction: column;
            text-align: left;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Popular Card Styling */
        .pricing-card.popular {
            border-color:rgb(243, 153, 69);
            transform: scale(1.05);
            z-index: 1;
        }
        
        .pricing-card.popular:hover {
             transform: scale(1.05) translateY(-10px);
        }

        .popular-badge {
            position: absolute;
            top: -14px;
            right: 20px;
            background-color:rgb(243, 164, 89);
            color: #000;
            padding: 0.4rem 0.8rem;
            font-size: 0.75rem;
            font-weight: 700;
            border-radius: 20px;
            text-transform: uppercase;
        }

        /* Card Content */
        .card-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2rem;
            font-weight: 600;
            margin: 0;
            color: #333;
        }

        .card-subtitle {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 2rem;
        }

        .features-list {
            list-style: none;
            padding: 0;
            margin: 0 0 2rem 0;
            flex-grow: 1;
        }

        .features-list li {
            margin-bottom: 1rem;
            color: #6c757d;
            font-size: 0.95rem;
            line-height: 1.5;
            position: relative;
            padding-left: 1.5rem;
        }

        .features-list li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #28a745;
            font-weight: bold;
        }

        .price {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: #333;
        }

        .price-period {
            font-size: 1rem;
            font-weight: 400;
            color: #6c757d;
        }

        /* Subscribe Button */
        .subscribe-btn {
            background-color: transparent;
            border: 1px solid #6c757d;
            color: #333;
            padding: 0.8rem 1.5rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .subscribe-btn:hover {
            background-color: #333;
            color: #ffffff;
            border-color: #333;
            text-decoration: none;
        }
        
        .pricing-card.popular .subscribe-btn {
            background-color:rgb(250, 187, 105);
            border-color: #D4FF00;
            color: #000;
            font-weight: 700;
        }
        
        .pricing-card.popular .subscribe-btn:hover {
             background-color: #c3f000;
             border-color: #c3f000;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .pricing-grid {
                grid-template-columns: 1fr;
                max-width: 450px;
            }
            .pricing-card.popular {
                transform: scale(1);
            }
        }

        @media (max-width: 768px) {
            .as_package_wrapper .section-title {
                font-size: 2rem;
            }
            .price {
                font-size: 2rem;
            }
            .pricing-card {
                padding: 2rem 1.5rem;
            }
        }
    </style>

<section class="as_package_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <p class="section-subtitle">Pricing Plan</p>
                    <h1 class="section-title">Check Our Membership Plan</h1>
                    <!-- <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="240" height="15" viewbox="0 0 240 15">
                        <image id="Vector_Smart_Object" data-name="Vector Smart Object" width="240" height="15" xlink:href="data:img/png;base64,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"></image>
                      </svg>
                    </span> -->
                </div>

                <div class="pricing-grid">
                    <!-- Card 1: Basic -->
                    <div class="pricing-card">
                        <h3 class="card-title">Celestial Seeker</h3>
                        <p class="card-subtitle">Basic Membership</p>
                        <ul class="features-list">
                            <li>Basic natal chart analysis</li>
                            <li>Monthly newsletter with celestial insights</li>
                            <li>Member-only discounts on special readings and services</li>
                        </ul>
                        <div class="price">$9.99<span class="price-period">/month</span></div>
                        <a href="#" class="subscribe-btn">Subscribe Now</a>
                    </div>

                    <!-- Card 2: Popular -->
                    <div class="pricing-card popular">
                        <div class="popular-badge">Popular</div>
                        <h3 class="card-title">Celestial Explorer</h3>
                        <p class="card-subtitle">Premium Membership</p>
                        <ul class="features-list">
                            <li>All features of the Celestial Seeker plan</li>
                            <li>Access to daily horoscopes</li>
                            <li>Exclusive early access to monthly astrological forecasts</li>
                        </ul>
                        <div class="price">$19.99<span class="price-period">/month</span></div>
                        <a href="#" class="subscribe-btn">Subscribe Now</a>
                    </div>

                    <!-- Card 3: VIP -->
                    <div class="pricing-card">
                        <h3 class="card-title">Celestial Visionary</h3>
                        <p class="card-subtitle">VIP Membership</p>
                        <ul class="features-list">
                            <li>All features of the Celestial Explorer plan</li>
                            <li>Exclusive access to webinars and workshops</li>
                            <li>Personalized monthly guidance sessions with a professional astrologer</li>
                        </ul>
                        <div class="price">$49.99<span class="price-period">/month</span></div>
                        <a href="#" class="subscribe-btn">Subscribe Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
