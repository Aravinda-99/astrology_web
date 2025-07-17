<style>
        /* General Body Styles */
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #1e2a3a; /* Dark blue background */
            color: #e0e0e0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 2rem;
        }

        /* Main Section Container */
        .astrology-section {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 4rem; /* Space between image and text columns */
            max-width: 1200px;
            width: 100%;
        }

        /* Left Column: Image and Decorative Dots */
        .image-container {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .decorative-dots {
            display: flex;
            flex-direction: column;
            gap: 0.75rem; /* Space between dots */
            align-self: flex-start; /* Align to the top of the container */
            margin-top: 4rem;
        }

        .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #4a5568; /* Default dot color */
        }

        .dot.orange {
            background-color: #f97316; /* Orange highlight dot */
        }

        .astrology-image {
            max-width: 450px;
            width: 100%;
            height: auto;
            border-radius: 1rem; /* Rounded corners for the image */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        /* Right Column: Text Content */
        .content-container {
            max-width: 500px;
        }

        .content-container h2 {
            font-size: 2.5rem; /* Large heading */
            font-weight: 600;
            color:rgb(0, 0, 0);
            margin-top: 0;
            margin-bottom: 1rem;
        }

        .divider {
            width: 60px;
            height: 4px;
            background-color: #f97316; /* Orange divider */
            border-radius: 2px;
            margin-bottom: 2rem;
        }

        .content-container p {
            font-size: 1rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            color: #a0aec0; /* Lighter text color for paragraphs */
        }

        /* "Read More" Button */
        .cta-button {
            background-color: #f97316; /* Orange button */
            color: #ffffff;
            font-size: 1rem;
            font-weight: 500;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin-top: 1rem;
            margin-bottom: 2.5rem;
        }

        .cta-button:hover {
            background-color: #ea580c; /* Darker orange on hover */
            transform: translateY(-2px);
        }

        /* Contact Info Box */
        .contact-box {
            background-color: #2d3748; /* Slightly lighter background for the box */
            border-radius: 0.75rem;
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1.5rem;
            max-width: 350px;
        }

        .contact-icon-wrapper {
            background-color: #f97316;
            width: 60px;
            height: 60px;
            min-width: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contact-icon-wrapper svg {
            width: 28px;
            height: 28px;
            fill: #ffffff;
        }

        .contact-details h3 {
            margin: 0 0 0.25rem 0;
            font-size: 1rem;
            font-weight: 500;
            color: #a0aec0;
        }

        .contact-details p {
            margin: 0;
            font-size: 1.25rem;
            font-weight: 600;
            color: #ffffff;
        }

        /* Responsive Design for smaller screens */
        @media (max-width: 992px) {
            .astrology-section {
                flex-direction: column; /* Stack columns vertically */
                gap: 3rem;
                text-align: center;
            }

            .image-container {
                order: 1; /* Image appears first */
            }

            .content-container {
                order: 2; /* Text content appears second */
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            
            .decorative-dots {
                display: none; /* Hide dots on smaller screens */
            }

            .contact-box {
                margin: 0 auto; /* Center the contact box */
            }
        }
        
        @media (max-width: 576px) {
            body {
                padding: 1rem;
            }
            .content-container h2 {
                font-size: 2rem;
            }
            .contact-box {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }
        }
    </style>




<section class="astrology-section">

<!-- Left Column: Image and Decorative Dots -->
<div class="image-container">
    <div class="decorative-dots">
        <span class="dot orange"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <img src="https://storage.googleapis.com/gemini-prod-us-west1-409905740559/uploads/2024/07/17/image_f1caac.jpg" 
         alt="Hands holding a glowing astrology wheel with zodiac signs." 
         class="astrology-image"
         onerror="this.onerror=null;this.src='https://placehold.co/450x480/1e2a3a/ffffff?text=Astrology+Image';">
</div>

<!-- Right Column: Text Content -->
<div class="content-container">
    <h2>Know About Astrology</h2>
    <div class="divider"></div>
    <p>
        It is a long established fact that a reader will be distracted by the
        readable content of a page when looking at its layout. The point of
        using Lorem Ipsum is that it has a more-or-less normal distribution
        of letters.
    </p>
    <p>
        As opposed to using 'Content here, content here', making it look
        like readable English. Many desktop publishing packages and
        web page editors now use Lorem Ipsum as their default model text.
    </p>
    <button class="cta-button">Read More</button>

    <!-- Contact Information Box -->
    <div class="contact-box">
        <div class="contact-icon-wrapper">
            <!-- Phone Icon SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"/></svg>
        </div>
        <div class="contact-details">
            <h3>Contact Our Expert Astrologers</h3>
            <p>+ (91) 1800-124-105</p>
        </div>
    </div>
</div>

</section>
