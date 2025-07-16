<style>
        /* --- Basic Setup & Font --- */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: transparent;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* --- Main Container --- */
        .schedule-container {
            width: 100%;
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* --- Header Section --- */
        .schedule-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .schedule-header h2 {
            margin: 0;
            font-size: 1.5rem;
            color: #212529;
            font-weight: 600;
        }

        .view-all-button {
            text-decoration: none;
            color: #495057;
            border: 1px solid #FFD363;
            padding: 6px 20px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: background-color 0.3s, color 0.3s;
        }

        .view-all-button:hover {
            background-color: #FFD363;
            color: #212529;
        }

        /* --- Card Grid --- */
        .schedule-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 30px;
            padding: 20px 0;
        }

        /* --- Individual Cards --- */
        .schedule-card {
            background-color: #FEF9F0;
            border-radius: 16px;
            padding: 30px 20px;
            text-align: center;
            cursor: pointer;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            position: relative;
            overflow: hidden;
            min-height: 160px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23E9E0D2' fill-opacity='0.4'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .schedule-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.07);
        }

        .card-icon {
            height: 60px;
            width: 60px;
            margin: 0 auto 15px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #A0937D;
        }

        .schedule-card p {
            margin: 0;
            font-size: 1rem;
            color: #6D604F;
            font-weight: 500;
            line-height: 1.4;
        }

        /* --- Responsive Design --- */
        @media (max-width: 991px) {
            .schedule-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
            }
        }

        @media (max-width: 767px) {
            .schedule-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }
            .schedule-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            .schedule-card {
                padding: 20px 15px;
                min-height: 140px;
            }
            .card-icon {
                height: 50px;
                width: 50px;
                margin-bottom: 10px;
            }
        }
    </style>



<section class="schedule-container">
    <header class="schedule-header">
        <h2>Schedule Appointment</h2>
        <a href="#" class="view-all-button">View All</a>
    </header>

    <div class="schedule-grid">
        <div class="schedule-card">
            <div class="card-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 13.5a1.5 1.5 0 0 1 3 0v4.5a1.5 1.5 0 0 1 -3 0v-4.5z" />
                    <path d="M11 12v-2a1.5 1.5 0 0 1 3 0v4.5" />
                    <path d="M14 10.5a1.5 1.5 0 0 1 3 0v1.5" />
                    <path d="M17 11.5a1.5 1.5 0 0 1 3 0v4.5a6 6 0 0 1 -6 6h-2c-3.314 0 -6 -2.686 -6 -6v-5.5a9 9 0 0 1 18 0" />
                </svg>
            </div>
            <p>Reiki Healer</p>
        </div>

        <div class="schedule-card">
            <div class="card-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                   <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                   <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                </svg>
            </div>
            <p>Popular Astrologers</p>
        </div>

        <div class="schedule-card">
            <div class="card-icon">
                 <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3.604 7.197l7.336 -3.668a.8 .8 0 0 1 .92 .0l7.336 3.668a.8 .8 0 0 1 .396 .71v10.185a.8 .8 0 0 1 -.396 .71l-7.336 3.668a.8 .8 0 0 1 -.92 0l-7.336 -3.668a.8 .8 0 0 1 -.396 -.71v-10.185a.8 .8 0 0 1 .396 -.71z" />
                    <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                 </svg>
            </div>
            <p>Learn Tarot</p>
        </div>

        <div class="schedule-card">
            <div class="card-icon">
                 <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 5h7a6.5 6.5 0 0 1 0 13h-2.5" />
                    <path d="M14 12h-1a3 3 0 0 0 -2.828 2" />
                    <path d="M7 15.5a2 2 0 0 0 2 1.5" />
                    <path d="M12 3a2 2 0 0 0 -2 2" />
                 </svg>
            </div>
            <p>Rudra Abhishek Pooja</p>
        </div>

        <div class="schedule-card">
            <div class="card-icon">
                 <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M11 14.5v-1.5a2.5 2.5 0 0 0 -5 0v1.5" />
                    <path d="M14 14.5v-4.5a2.5 2.5 0 0 0 -5 0v4.5" />
                    <path d="M17 14.5v-7.5a2.5 2.5 0 0 0 -5 0v7.5" />
                    <path d="M8 18c1.667 0 2.667 -1 3 -2" />
                    <path d="M18 21a5.5 5.5 0 0 0 -5.5 -5.5h-2.5a5.5 5.5 0 0 0 0 11h7.5a2 2 0 0 0 2 -2z" />
                 </svg>
            </div>
            <p>Palm Reader</p>
        </div>

    </div>
</section>