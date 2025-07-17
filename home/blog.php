<style>
        /* General Body Styling */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb; /* A neutral background for the page */
            margin: 0;
        }

        /* Wrapper for the section to handle padding */
        .blogs-section {
            padding: 1rem;
        }

        /* Main container for the blogs content */
        .blogs-container {
            width: 100%;
            max-width: 72rem; /* max-w-6xl */
            margin: 0 auto;
        }

        /* Section Header */
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem; /* mb-6 */
        }

        .section-header h1 {
            font-size: 1.875rem; /* text-3xl */
            font-weight: 700; /* font-bold */
            color: #1f2937; /* text-gray-800 */
        }

        .view-all-btn {
            font-size: 0.875rem; /* text-sm */
            font-weight: 500; /* font-medium */
            color: #4b5563; /* text-gray-600 */
            border: 1px solid #d1d5db; /* border-gray-300 */
            border-radius: 9999px; /* rounded-full */
            padding: 0.5rem 1rem; /* px-4 py-2 */
            text-decoration: none;
            transition: background-color 0.2s;
        }

        .view-all-btn:hover {
            background-color: #f3f4f6; /* hover:bg-gray-100 */
        }

        /* Grid container for the blog cards */
        .blogs-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem; /* gap-8 */
        }

        /* Blog Card Styling */
        .blog-card {
            background-color: #ffffff; /* bg-white */
            border-radius: 0.75rem; /* rounded-xl */
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1); /* shadow-md */
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease-in-out;
        }

        .blog-card:hover {
            transform: scale(1.05);
        }

        .card-image-container {
            position: relative;
        }

        .card-image {
            width: 100%;
            height: 14rem; /* h-56 */
            object-fit: cover;
        }

        .card-badge {
            position: absolute;
            bottom: 1rem; /* bottom-4 */
            left: 1rem; /* left-4 */
            background-color: #b91c1c; /* bg-red-700 */
            color: #ffffff;
            padding: 0.25rem 0.75rem; /* px-3 py-1 */
            border-radius: 0.375rem; /* rounded-md */
            font-size: 0.875rem; /* text-sm */
            font-weight: 700; /* font-bold */
        }
        
        .card-image-overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .card-image-overlay h3 {
            color: #ffffff;
            font-size: 1.875rem; /* text-3xl */
            font-weight: 700; /* font-bold */
            text-align: center;
        }

        .card-content {
            padding: 1.25rem; /* p-5 */
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-content h2 {
            font-size: 1.125rem; /* text-lg */
            font-weight: 600; /* font-semibold */
            color: #111827; /* text-gray-900 */
            margin-bottom: 0.5rem; /* mb-2 */
            flex-grow: 1;
        }

        .card-footer {
            display: flex;
            align-items: center;
            font-size: 0.875rem; /* text-sm */
            color: #6b7280; /* text-gray-500 */
            margin-top: 1rem; /* mt-4 */
        }

        .author-avatar {
            width: 1.75rem; /* w-7 */
            height: 1.75rem; /* h-7 */
            border-radius: 9999px; /* rounded-full */
            margin-right: 0.75rem; /* mr-3 */
        }

        .author-name {
            font-weight: 500; /* font-medium */
            color: #1f2937; /* text-gray-800 */
        }

        .separator {
            margin: 0 0.5rem; /* mx-2 */
            color: #9ca3af; /* text-gray-400 */
        }

        .arrow-link {
            margin-left: auto;
        }

        .arrow-link svg {
            width: 1.75rem; /* w-7 */
            height: 1.75rem; /* h-7 */
            color: #f59e0b; /* text-yellow-500 */
            transition: color 0.2s;
        }

        .arrow-link:hover svg {
            color: #d97706; /* hover:text-yellow-600 */
        }

        /* Responsive Styles */
        @media (min-width: 640px) { /* sm breakpoint */
            .blogs-section {
                padding: 1.5rem;
            }
        }

        @media (min-width: 768px) { /* md breakpoint */
            .blogs-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .section-header h1 {
                 font-size: 1.5rem; /* text-2xl */
            }
        }

        @media (min-width: 1024px) { /* lg breakpoint */
            .blogs-grid {
                grid-template-columns: repeat(3, 1fr);
            }
            .blogs-section {
                padding: 2rem;
            }
        }
    </style>


<section class="blogs-section">
        <!-- Main container for the blogs section -->
        <div class="blogs-container">
            
            <!-- Section Header -->
            <header class="section-header">
                <h1>Blogs</h1>
                <a href="#" class="view-all-btn">
                    View All
                </a>
            </header>

            <!-- Grid container for the blog cards -->
            <main class="blogs-grid">

                <!-- Blog Card 1 -->
                <article class="blog-card">
                    <div class="card-image-container">
                        <img class="card-image" src="assets/images/blog/blog1.jpg" alt="Auspicious Hindu calendar representation">
                        <div class="card-badge">
                            August 2025
                        </div>
                    </div>
                    <div class="card-content">
                        <h2>
                            August Shubh Muhurats 2025: Plan Big, Start Strong at the Auspicious Time
                        </h2>
                        <footer class="card-footer">
                            <img class="author-avatar" src="https://placehold.co/40x40/E2E8F0/4A5568?text=A" alt="Team Astroyogi avatar">
                            <span class="author-name">Team Astroyogi</span>
                            <span class="separator">|</span>
                            <span>Fri, May 02, 2025</span>
                            <a href="#" class="arrow-link">
                               <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </footer>
                    </div>
                </article>

                <!-- Blog Card 2 -->
                <article class="blog-card">
                    <div class="card-image-container">
                    <img class="card-image" src="assets/images/blog/blog1.jpg" alt="Auspicious Hindu calendar representation">
                         <div class="card-image-overlay">
                            <h3>Mars Transit in Virgo</h3>
                        </div>
                    </div>
                    <div class="card-content">
                        <h2>
                            Mars in Virgo Transit Is About to Test Your Limits – Here’s What You Must Know
                        </h2>
                        <footer class="card-footer">
                            <img class="author-avatar" src="https://placehold.co/40x40/E2E8F0/4A5568?text=T" alt="Tarot Sonia avatar">
                            <span class="author-name">Tarot Sonia</span>
                            <span class="separator">|</span>
                            <span>Fri, May 02, 2025</span>
                            <a href="#" class="arrow-link">
                               <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </footer>
                    </div>
                </article>

                <!-- Blog Card 3 -->
                <article class="blog-card">
                    <div class="card-image-container">
                    <img class="card-image" src="assets/images/blog/blog1.jpg" alt="Auspicious Hindu calendar representation">
                        <div class="card-image-overlay">
                            <h3>Cat's Eye Gemstone</h3>
                        </div>
                    </div>
                    <div class="card-content">
                        <h2>
                            Cat's Eye Gemstone - What is it? What are its Astrological Benefits?
                        </h2>
                        <footer class="card-footer">
                            <img class="author-avatar" src="https://placehold.co/40x40/E2E8F0/4A5568?text=A" alt="Team Astroyogi avatar">
                            <span class="author-name">Team Astroyogi</span>
                            <span class="separator">|</span>
                            <span>Fri, May 02, 2025</span>
                            <a href="#" class="arrow-link">
                               <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </footer>
                    </div>
                </article>

            </main>
        </div>
    </section>