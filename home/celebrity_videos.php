<style>
    /* Celebrity Videos Section Styles */
    .celebrity-videos-wrapper {
        padding: 80px 0;
        background-color: #ffffff;
    }

    .celebrity-section {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
    }

    .celebrity-section-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-title {
        font-size: 36px;
        font-weight: 600;
        color: #333;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    /* Video Grid */
    .video-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        padding: 0 15px;
    }

    /* Video Card */
    .video-card {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        position: relative;
    }

    .video-card:hover {
        transform: translateY(-10px);
    }

    .video-thumbnail {
        position: relative;
        width: 100%;
        padding-top: 56.25%; /* 16:9 Aspect Ratio */
        background: #f8f8f8;
        overflow: hidden;
    }

    .video-thumbnail iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }

    /* Remove play button since YouTube embed has its own */
    .play-button {
        display: none;
    }

    .video-info {
        padding: 20px;
    }

    .celebrity-name {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin: 0 0 10px;
    }

    .video-description {
        font-size: 14px;
        color: #666;
        margin: 0;
        line-height: 1.5;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .video-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .celebrity-videos-wrapper {
            padding: 40px 0;
        }
        .section-title {
            font-size: 28px;
        }
        .video-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
    }
</style>

<section class="celebrity-videos-wrapper">
    <div class="container">
        <div class="celebrity-section">
            <!-- Section Header -->
            <div class="celebrity-section-header">
                <h2 class="section-title">OUR CELEBRITY CUSTOMERS</h2>
            </div>

            <!-- Video Grid -->
            <div class="video-grid">
                <!-- Video Card 1 -->
                <div class="video-card">
                    <div class="video-thumbnail">
                        <iframe 
                            src="https://www.youtube.com/embed/yoIex90YnA0" 
                            title="Mandira Bedi Video"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="video-info">
                        <h3 class="celebrity-name">තුලා ලග්න හිමි ඔබට ඉදිරි මාස හය කොහොම ද?</h3>
                        <p class="video-description">Secret of Mandira Bedi's success 🤫</p>
                    </div>
                </div>

                <!-- Video Card 2 -->
                <div class="video-card">
                    <div class="video-thumbnail">
                        <iframe 
                            src="https://www.youtube.com/embed/OZzFoo0uez0" 
                            title="Shweta Tiwari Video"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="video-info">
                        <h3 class="celebrity-name">කන්‍යා ලග්න හිමි ඔබට ඉදිරි මාස හය කොහොම ද?</h3>
                        <p class="video-description">Shweta Tiwari has a message for you. Tap to watch 👆</p>
                    </div>
                </div>

                <!-- Video Card 3 -->
                <div class="video-card">
                    <div class="video-thumbnail">
                        <iframe 
                            src="https://www.youtube.com/embed/LXDU0tiu494" 
                            title="Bharti Singh Video"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="video-info">
                        <h3 class="celebrity-name">මේෂ ලග්න හිමි ඔබට ඉදිරි මාස හය කොහොම ද?</h3>
                        <p class="video-description">Bharti Singh never thought to come on television 🤔</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 