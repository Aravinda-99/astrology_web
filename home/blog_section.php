<!-- Blog Section Styles -->
<style>
    .blog-section {
        padding: 4rem 0;
        background: #fff;
    }

    .blog-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
    }

    .blog-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .blog-title {
        font-size: 2.25rem;
        color: #333;
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .blog-subtitle {
        color: #666;
        font-size: 1.1rem;
        max-width: 600px;
        margin: 0 auto;
    }

    .blog-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
    }

    .blog-card {
        background: #fff;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .blog-card:hover {
        transform: translateY(-5px);
    }

    .blog-image {
        width: 100%;
        height: 200px;
        overflow: hidden;
    }

    .blog-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .blog-card:hover .blog-image img {
        transform: scale(1.1);
    }

    .blog-content {
        padding: 1.5rem;
    }

    .blog-category {
        color: #FFD363;
        font-size: 0.9rem;
        font-weight: 500;
        margin-bottom: 0.5rem;
        display: block;
    }

    .blog-card-title {
        font-size: 1.25rem;
        color: #333;
        margin-bottom: 1rem;
        line-height: 1.4;
    }

    .blog-excerpt {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .blog-meta {
        display: flex;
        align-items: center;
        gap: 1rem;
        font-size: 0.9rem;
        color: #888;
    }

    .blog-meta span {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .blog-meta i {
        font-size: 1rem;
    }

    @media (max-width: 1024px) {
        .blog-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .blog-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .blog-title {
            font-size: 1.75rem;
        }
    }
</style>

<!-- Blog Section -->
<section class="blog-section">
    <div class="blog-container">
        <header class="blog-header">
            <h2 class="blog-title">Latest Insights & Articles</h2>
            <p class="blog-subtitle">Discover the latest astrological insights, spiritual guidance, and cosmic wisdom through our carefully curated articles.</p>
        </header>

        <div class="blog-grid">
            <!-- Blog Card 1 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="assets/images/blog/blog1.jpg" alt="Astrology Blog">
                </div>
                <div class="blog-content">
                    <span class="blog-category">Horoscope</span>
                    <h3 class="blog-card-title">Understanding Your Birth Chart: A Complete Guide</h3>
                    <p class="blog-excerpt">Discover the hidden meanings behind your astrological birth chart and how it influences your life's journey.</p>
                    <div class="blog-meta">
                        <span><i class="fa fa-calendar"></i> Jan 15, 2024</span>
                        <span><i class="fa fa-user"></i> By Admin</span>
                    </div>
                </div>
            </article>

            <!-- Blog Card 2 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="assets/images/blog2.jpg" alt="Astrology Blog">
                </div>
                <div class="blog-content">
                    <span class="blog-category">Zodiac Signs</span>
                    <h3 class="blog-card-title">The Power of Planetary Alignments</h3>
                    <p class="blog-excerpt">Learn how planetary movements and alignments can affect your daily life and personal growth.</p>
                    <div class="blog-meta">
                        <span><i class="fa fa-calendar"></i> Jan 12, 2024</span>
                        <span><i class="fa fa-user"></i> By Admin</span>
                    </div>
                </div>
            </article>

            <!-- Blog Card 3 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="assets/images/blog3.jpg" alt="Astrology Blog">
                </div>
                <div class="blog-content">
                    <span class="blog-category">Spiritual Growth</span>
                    <h3 class="blog-card-title">Meditation Techniques for Spiritual Connection</h3>
                    <p class="blog-excerpt">Explore powerful meditation practices that can help you connect with your inner self and the cosmos.</p>
                    <div class="blog-meta">
                        <span><i class="fa fa-calendar"></i> Jan 10, 2024</span>
                        <span><i class="fa fa-user"></i> By Admin</span>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section> 