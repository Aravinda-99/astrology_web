<style>
        /* --- Readers Section Styles --- */
        .as_readers_wrapper {
            padding: 10px 0;
            background-color: #ffffff;
        }

        /* --- Main Section Container --- */
        .readers-section {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* --- Section Header --- */
        .readers-section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #333333;
            margin: 0;
        }

        .all-readers-btn {
            border: 1px solid #666666;
            background-color: transparent;
            color: #333333;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            text-decoration: none;
            font-size: 0.9rem;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .all-readers-btn:hover {
            background-color: #333333;
            color: #ffffff;
        }

        /* --- Cards Grid --- */
        .readers-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        /* --- Individual Card --- */
        .reader-card {
            background-color: #f8f9fa;
            border-radius: 16px;
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #e9ecef;
        }

        .reader-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card-image-wrapper {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            /* Creates a subtle glow effect similar to the image */
            box-shadow: inset 0 0 40px 20px rgba(245, 158, 11, 0.15), 0 0 15px rgba(245, 158, 11, 0.2);
        }

        .reader-card img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 16px;
        }

        .card-info {
            padding: 20px 15px;
        }

        .reader-name {
            margin: 0;
            font-size: 1rem;
            font-weight: 500;
            color: #333333;
        }

        /* --- Responsive Design --- */
        @media (max-width: 1024px) {
            .as_readers_wrapper {
                padding: 60px 0;
            }
            .readers-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
            .section-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 768px) {
            .as_readers_wrapper {
                padding: 40px 0;
            }
            .readers-section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            .readers-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }
            .section-title {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 480px) {
            .readers-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            .section-title {
                font-size: 1.5rem;
            }
            .all-readers-btn {
                align-self: flex-start;
            }
        }
    </style>

<section class="as_readers_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="readers-section">
                    <!-- Header with Title and Button -->
                    <header class="readers-section-header">
                        <h2 class="section-title">Meet Celestial Readers</h2>
                        <a href="#" class="all-readers-btn">All Readers</a>
                    </header>

                    <!-- Grid container for the reader cards -->
                    <div class="readers-grid">
            <!-- Card 1 -->
            <div class="reader-card">
                <div class="card-image-wrapper">
                    <img src="assets/images/reader/reader5.jpg" alt="Portrait of Shari Walsh" onerror="this.onerror=null;this.src='https://placehold.co/400x400/2c1f17/e8d9c0?text=Image+Not+Found';">
                </div>
                <div class="card-info">
                    <p class="reader-name">Shari Walsh</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="reader-card">
                <div class="card-image-wrapper">
                    <img src="assets/images/reader/reader5.jpg" alt="Portrait of Margarita Heringer" onerror="this.onerror=null;this.src='https://placehold.co/400x400/2c1f17/e8d9c0?text=Image+Not+Found';">
                </div>
                <div class="card-info">
                    <p class="reader-name">Margarita Heringer</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="reader-card">
                <div class="card-image-wrapper">
                    <img src="assets/images/reader/reader5.jpg" alt="Portrait of Victoria Stiedemann" onerror="this.onerror=null;this.src='https://placehold.co/400x400/2c1f17/e8d9c0?text=Image+Not+Found';">
                </div>
                <div class="card-info">
                    <p class="reader-name">Victoria Stiedemann</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="reader-card">
                <div class="card-image-wrapper">
                    <img src="assets/images/reader/reader5.jpg" alt="Portrait of Laverne Gusikowski" onerror="this.onerror=null;this.src='https://placehold.co/400x400/2c1f17/e8d9c0?text=Image+Not+Found';">
                </div>
                <div class="card-info">
                    <p class="reader-name">Laverne Gusikowski</p>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>