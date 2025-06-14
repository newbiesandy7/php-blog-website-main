<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrekNepal Adventures - Destination Details</title>
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/individual.css">
   	<link rel="stylesheet" href="css/nav.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="blog.php">
            <img src="img/logo_wobg.png" alt="logo" style="width:90px; height:90px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.php">Category</a>
                </li>
            </ul>

            <div class="d-flex align-items-center">
                <form class="d-flex me-3" role="search" method="GET" action="blog.php">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <?php
                // Assuming $logged is defined and holds the login status
                if ($logged) {
                ?>
                    <ul class="navbar-nav mb-2 mb-lg-0"> <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="profile.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i> <?= htmlspecialchars($_SESSION['username'] ?? 'Guest') ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end"> <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                <li><a class="dropdown-item" href="userprofile.php">Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php
                } else {
                ?>
                    <ul class="navbar-nav mb-2 mb-lg-0"> <li class="nav-item">
                            <a class="nav-link" href="login.php">Login | Signup</a>
                        </li>
                    </ul>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</nav>
        <nav class="navbar">
            <div class="nav-logo">
                <a href="all-treks.html">TrekNepal</a>
            </div>
            <ul class="nav-links">
                <li><a href="all-treks.html">Back to All Treks</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <div id="dynamic-destination-content">
            <div class="main-content-wrapper">
                <section class="destination-info">
                    <h1>Loading Destination...</h1>
                    <img src="https://placehold.co/800x350/a3bffa/333333?text=Loading..." alt="Loading Image" class="destination-image">
                    <p>Please wait while the destination details are loaded.</p>
                </section>

                <div class="side-content-wrapper">
                    <aside class="weather-section">
                        <h2>Current Weather</h2>
                        <div id="weather-forecast-card" 
                             class="weather-card"
                             data-lat="" 
                             data-lon=""
                             data-location-name="">
                            <div class="weather-loading-message">
                                <div class="spinner"></div>
                                <p>Loading weather...</p>
                            </div>
                            <div class="weather-content hidden">
                                <h3 class="weather-location"></h3>
                                <div class="weather-main">
                                    <img class="weather-icon-img" src="https://openweathermap.org/img/wn/01d@2x.png" alt="Weather icon"> <div class="weather-temperature">--°C</div>
                                </div>
                                <p class="weather-description">--</p>
                                <div class="weather-details-grid">
                                    <div class="weather-detail-item"><strong>Feels like:</strong> <span class="weather-feels-like">--°C</span></div>
                                    <div class="weather-detail-item"><strong>Humidity:</strong> <span class="weather-humidity">--%</span></div>
                                    <div class="weather-detail-item"><strong>Wind:</strong> <span class="weather-wind">-- m/s</span></div>
                                    <div class="weather-detail-item"><strong>Pressure:</strong> <span class="weather-pressure">-- hPa</span></div>
                                </div>
                            </div>
                            <div class="weather-error-message hidden">
                                <p>Could not fetch weather data.</p>
                            </div>
                        </div>
                    </aside>

                    <aside class="budget-calculator-section">
                        <h2>Travel Budget Calculator</h2>
                        <div class="budget-calculator-content">
                            <div class="budget-input-group">
                                <label for="travel-time">Total Travel Time (Days):</label>
                                <input type="number" id="travel-time" value="0" min="0">
                            </div>
                            <div class="budget-input-group">
                                <label for="transportation-cost">Transportation Cost :</label>
                                <input type="number" id="transportation-cost" value="0" min="0">
                            </div>
                            <div class="budget-input-group">
                                <label for="accommodation-cost">Accommodation Cost :</label>
                                <input type="number" id="accommodation-cost" value="0" min="0">
                            </div>
                            <div class="budget-input-group">
                                <label for="food-drinks-cost">Food & Drinks Cost :</label>
                                <input type="number" id="food-drinks-cost" value="0" min="0">
                            </div>
                            <div class="budget-input-group">
                                <label for="activities-cost">Activities Cost :</label>
                                <input type="number" id="activities-cost" value="0" min="0">
                            </div>
                            <div class="budget-input-group">
                                <label for="shopping-cost">Shopping Cost :</label>
                                <input type="number" id="shopping-cost" value="0" min="0">
                            </div>
                            <div class="budget-input-group">
                                <label for="miscellaneous-cost">Miscellaneous Cost :</label>
                                <input type="number" id="miscellaneous-cost" value="0" min="0">
                            </div>
                            <button class="budget-calculate-btn" id="calculate-budget-btn">Calculate Budget</button>
                            <div class="budget-result hidden" id="estimated-total-budget">
                                Estimated Total Budget: <strong>Rs.0</strong>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>

            <section class="more-info-section">
                <h2>Explore More about this Trek</h2>
                <p>Detailed information will load here.</p>
                
                <h3>Photo Gallery</h3>
                <div class="photo-gallery-grid">
                    </div>

                <h3>Location Map</h3>
                <div class="map-and-details-wrapper">
                    <div class="map-container">
                        <iframe src="about:blank" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="map-side-content">
                        <h4>About the Region</h4>
                        <p>Information about the region will load here.</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <p>© 2025 TrekNepal Adventures. All rights reserved.</p>
    </footer>

    <script>
        const apiKey = 'bd5e378503939ddaee76f12ad7a97608'; // IMPORTANT: Replace with your actual OpenWeatherMap API key

        // All Destinations Data - Populate this with ALL your 30 destinations
        const allDestinations = [
            {
                id: 1,
                name: 'Everest Base Camp Trek',
                imageSrc: 'https://placehold.co/800x350/a3bffa/333333?text=Everest+Base+Camp+View',
                description: [
                    "The Everest Base Camp trek is one of the most iconic and breathtaking trekking adventures in the world. It takes you through stunning Sherpa villages, ancient monasteries, and dramatic mountain landscapes, culminating at the foot of Mount Everest, the world's highest peak. The journey typically takes around 12-14 days, including acclimatization days, and offers unparalleled views of some of the highest mountains on Earth.",
                    "Key highlights include Lukla airport (one of the most extreme airports), Namche Bazaar (the Sherpa capital), Tengboche Monastery, and of course, the Kala Patthar viewpoint for sunrise over Everest."
                ],
                moreInfo: [
                    "The Everest Base Camp trek is not just a physical journey but a cultural immersion. You'll pass through charming Sherpa villages like Phakding and Namche Bazaar, where you can experience the unique Sherpa culture and hospitality. The trail offers breathtaking views of iconic peaks such as Ama Dablam, Lhotse, Nuptse, and of course, Mount Everest itself. Acclimatization days in Namche and Dingboche are crucial for a safe and enjoyable trek, allowing your body to adjust to the increasing altitude. The final ascent to Kala Patthar (5,545m) provides the most spectacular panoramic sunrise views of Everest and the surrounding Himalayas.",
                    "Beyond the well-trodden path, the Everest region offers opportunities for side trips to hidden valleys and less-frequented monasteries, providing a deeper connection with the Himalayan wilderness. Wildlife such as Himalayan Tahr and various bird species can be spotted, adding to the natural beauty of the journey. Local Sherpa guides and porters play a vital role in making the trek possible, and interacting with them offers invaluable insights into their resilient way of life."
                ],
                lat: '28.0042',
                lon: '86.8528',
                locationName: 'Everest Base Camp (approx.)',
                galleryImages: [
                    'https://placehold.co/200x150/a3bffa/333333?text=EBC+View+1',
                    'https://placehold.co/200x150/a3bffa/333333?text=EBC+View+2',
                    'https://placehold.co/200x150/a3bffa/333333?text=Namche+Bazaar',
                    'https://placehold.co/200x150/a3bffa/333333?text=Tengboche+Monastery'
                ],
                mapIframeSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d86.72624419999999!3d28.0163351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a32d1645e99815%3A0xc3f5d60634691456!2sEverest%20Base%20Camp!5e0!3m2!1sen!2snp!4v1700000000000!5m2!1sen!2snp', // Example real map for EBC
                mapSideContent: 'The Khumbu region, home to Everest Base Camp, is a UNESCO World Heritage Site. It\'s not just about the mountains; it\'s a vibrant ecosystem with unique flora and fauna, and a rich cultural tapestry woven by the Sherpa people. The air is thin, but the views are boundless, offering a profound sense of scale and wonder. Many trekkers find the spiritual atmosphere, with prayer flags fluttering and ancient chortens, as impactful as the physical challenge.'
            },
            {
                id: 2,
                name: 'Annapurna Base Camp Trek',
                imageSrc: 'https://placehold.co/800x350/FFD700/333333?text=Annapurna+Base+Camp',
                description: [
                    "The Annapurna Base Camp (ABC) trek is a spectacular journey through diverse landscapes, from lush rhododendron forests to the high alpine terrain of the Annapurna Sanctuary. It offers breathtaking close-up views of Annapurna I, Machhapuchhre (Fishtail), Hiunchuli, and other towering peaks.",
                    "This trek is generally shorter and at lower altitudes than EBC, making it a popular choice. Highlights include the hot springs at Jhinu Danda, the charming Gurung villages, and the panoramic views from ABC itself."
                ],
                moreInfo: [
                    "The trail to Annapurna Base Camp takes you through terraced fields, dense forests, and past cascading waterfalls. You'll encounter a rich variety of flora and fauna, especially in the Annapurna Conservation Area. The trek provides a unique cultural experience, passing through traditional Gurung villages where you can interact with the local communities and learn about their way of life. The final approach into the Annapurna Sanctuary, a natural amphitheater, is truly awe-inspiring, surrounded by a ring of magnificent peaks.",
                    "Acclimatization is still important for this trek, though less critical than EBC. The best seasons to trek are spring (March-May) and autumn (September-November)."
                ],
                lat: '28.3966',
                lon: '83.8646',
                locationName: 'Annapurna Base Camp',
                galleryImages: [
                    'https://placehold.co/200x150/FFD700/333333?text=ABC+View+1',
                    'https://placehold.co/200x150/FFD700/333333?text=Machhapuchhre',
                    'https://placehold.co/200x150/FFD700/333333?text=Gurung+Village',
                    'https://placehold.co/200x150/FFD700/333333?text=Jhinu+Hot+Springs'
                ],
                mapIframeSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d83.757755!3d28.3966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399581c6204c32b9%3A0x6b306e12e12e12e!2sAnnapurna%20Base%20Camp!5e0!3m2!1sen!2snp!4v1700000000001!5m2!1sen!2snp',
                mapSideContent: 'The Annapurna region is famous for its diverse trekking routes, vibrant local culture, and stunning mountain scenery. It encompasses a wide range of ecosystems, from subtropical forests to high-altitude deserts, and is home to various ethnic groups. The Annapurna Conservation Area is Nepal\'s first and largest conservation area, protecting its rich biodiversity. Trekkers are rewarded with spectacular views of some of the world\'s highest peaks and a deep insight into Himalayan life.'
            },
            {
    id: 3,
    name: 'Langtang Valley Trek',
    imageSrc: 'https://placehold.co/800x350/4682B4/FFFFFF?text=Langtang+Valley',
    description: [
        "The Langtang Valley Trek offers a stunning journey into the heart of the Himalayas, just north of Kathmandu. It’s known for its pristine alpine landscapes, rich Tamang culture, and impressive mountain views of Langtang Lirung.",
        "The trail traverses rhododendron forests, glacial streams, and charming villages, making it perfect for those seeking beauty and culture in a shorter trek."
    ],
    moreInfo: [
        "Langtang National Park is home to rare wildlife like red pandas and Himalayan tahr. Kyanjin Gompa is a spiritual and scenic highlight, where trekkers can explore a Buddhist monastery and nearby glacial viewpoints.",
        "Due to the 2015 earthquake, the region has rebuilt with resilient communities. Trekking here not only supports local livelihoods but offers authentic Himalayan hospitality. It's an ideal trek for those with limited time but high expectations."
    ],
    lat: '28.2500',
    lon: '85.5000',
    locationName: 'Langtang Valley, Nepal',
    galleryImages: [
        'https://placehold.co/200x150/4682B4/FFFFFF?text=Langtang+Village',
        'https://placehold.co/200x150/4682B4/FFFFFF?text=Kyanjin+Gompa',
        'https://placehold.co/200x150/4682B4/FFFFFF?text=Langtang+Lirung',
        'https://placehold.co/200x150/4682B4/FFFFFF?text=Glacial+View'
    ],
    mapIframeSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3530.704711!2d85.5!3d28.25!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sLangtang+Valley!5e0!3m2!1sen!2snp!4v1700000000003!5m2!1sen!2snp',
    mapSideContent: 'The Langtang region offers a perfect blend of accessibility, cultural richness, and natural grandeur. With less crowding than Annapurna or Everest regions, trekkers here find serenity among the peaks, and meaningful encounters with local Tamang communities.'
},
{
  id: 4,
  name: 'Ghorepani Poon Hill Trek',
  imageSrc: 'https://placehold.co/800x350/D2B48C/FFFFFF?text=Ghorepani+Poon+Hill',
  description: [
    "Ghorepani Poon Hill Trek is famous for sunrise views over the Annapurna and Dhaulagiri ranges.",
    "This trek passes through Gurung and Magar villages rich in cultural heritage.",
    "Typical local food includes dal bhat, lentil soup, and seasonal vegetables.",
    "The trail goes through lush rhododendron forests and terraced fields.",
    "Here’s a short day-by-day plan to help you visualize the trek:",
    "Day 1: Drive from Pokhara to Nayapul and trek to Tikhedhunga.",
    "Day 2: Trek to Ghorepani.",
    "Day 3: Early morning hike to Poon Hill for sunrise, then trek to Tadapani.",
    "Day 4: Trek to Ghandruk village.",
    "Day 5: Trek back to Nayapul and drive to Pokhara."
  ],
  moreInfo: [
    "This is one of the most popular short treks in Nepal, renowned for the panoramic sunrise view over the Annapurna and Dhaulagiri ranges from Poon Hill.",
    "Ideal for beginners, families, or trekkers short on time, this trek combines mountain vistas, rhododendron forests, and welcoming Gurung villages.",
    "The trek typically starts from Nayapul and ascends through Ulleri, Ghorepani, and Ghandruk. It’s particularly breathtaking in spring when rhododendrons bloom in full color.",
    "From Poon Hill, trekkers are rewarded with a 360-degree view of snow-capped giants, including Annapurna South, Machhapuchhre, and Dhaulagiri. The trail is well-maintained and accessible year-round."
  ],
  lat: '28.4000',
  lon: '83.6920',
  locationName: 'Poon Hill, Nepal',
  galleryImages: [
    'https://placehold.co/200x150/D2B48C/FFFFFF?text=Poon+Hill+Sunrise',
    'https://placehold.co/200x150/D2B48C/FFFFFF?text=Ghorepani',
    'https://placehold.co/200x150/D2B48C/FFFFFF?text=Rhododendron+Trail',
    'https://placehold.co/200x150/D2B48C/FFFFFF?text=Ghandruk+Village'
  ],
  mapIframeSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d83.692!3d28.4!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995f3c81aeb7033%3A0xb3cce9d4b!2sPoon+Hill!5e0!3m2!1sen!2snp!4v1700000000004!5m2!1sen!2snp',
  mapSideContent: 'Poon Hill is a renowned viewpoint in the Annapurna region. At just over 3,200 meters, it offers one of the best sunrise views in Nepal. Combined with the warmth of Gurung hospitality and lush greenery, it creates a perfect trekking experience.'
},
{
    id: 5,
    name: 'Manaslu Circuit Trek',
    imageSrc: 'https://placehold.co/800x350/A52A2A/FFFFFF?text=Manaslu+Circuit',
    description: [
        "The Manaslu Circuit Trek circles the majestic Mt. Manaslu, the 8th highest mountain in the world. It's a challenging yet culturally rich trek through remote Himalayan terrain and Tibetan-influenced villages.",
        "With fewer crowds and more raw wilderness, this trek is a great alternative to the Annapurna Circuit."
    ],
    moreInfo: [
        "Traversing through Budhi Gandaki Valley, trekkers witness dramatic gorges, suspension bridges, and diverse ethnic settlements like Samagaon and Lho. The high point is Larkya La Pass (5,160m), offering jaw-dropping views.",
        "The region is a restricted trekking area, requiring a special permit and guide. It’s known for its biodiversity, Buddhist culture, and the blend of rugged nature and heritage."
    ],
    lat: '28.5583',
    lon: '84.5611',
    locationName: 'Manaslu Region, Nepal',
    galleryImages: [
        'https://placehold.co/200x150/A52A2A/FFFFFF?text=Mt+Manaslu',
        'https://placehold.co/200x150/A52A2A/FFFFFF?text=Samagaon+Village',
        'https://placehold.co/200x150/A52A2A/FFFFFF?text=Larkya+La+Pass',
        'https://placehold.co/200x150/A52A2A/FFFFFF?text=Tibetan+Culture'
    ],
    mapIframeSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.5611!3d28.5583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399794d3e2cfad01%3A0xd7a8283fa1b89d88!2sManaslu+Circuit!5e0!3m2!1sen!2snp!4v1700000000005!5m2!1sen!2snp',
    mapSideContent: 'The Manaslu region offers an off-the-beaten-path Himalayan experience. It’s a culturally enriching journey through ancient Tibetan monasteries, yak pastures, and breathtaking alpine scenery. This trek suits adventurous spirits seeking solitude and authenticity.'
},
{
    "id": 6,
    "name": "Upper Mustang Trek",
    "imageSrc": "https://placehold.co/800x350/808000/FFFFFF?text=Upper+Mustang",
    "description": [
        "Upper Mustang Trek offers trekkers an unforgettable journey through the Mustang Region of Nepal. Experience Tibetan culture and arid landscapes.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Mustang Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/808000/FFFFFF?text=Upper+Mustang+1",
        "https://placehold.co/200x150/808000/FFFFFF?text=Upper+Mustang+2",
        "https://placehold.co/200x150/808000/FFFFFF?text=Upper+Mustang+3",
        "https://placehold.co/200x150/808000/FFFFFF?text=Upper+Mustang+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sUpper+Mustang+Trek!5e0!3m2!1sen!2snp!4v1700000000006!5m2!1sen!2snp",
    "mapSideContent": "Upper Mustang Trek showcases the raw beauty and cultural depth of the Mustang Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 7,
    "name": "Kanchenjunga Base Camp Trek",
    "imageSrc": "https://placehold.co/800x350/4B0082/FFFFFF?text=Kanchenjunga+Base+Camp",
    "description": [
        "Kanchenjunga Base Camp Trek offers trekkers an unforgettable journey through the Kanchenjunga Region of Nepal. Explore the remote base of the world\u2019s third highest peak.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Kanchenjunga Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/4B0082/FFFFFF?text=Kanchenjunga+Base+Camp+1",
        "https://placehold.co/200x150/4B0082/FFFFFF?text=Kanchenjunga+Base+Camp+2",
        "https://placehold.co/200x150/4B0082/FFFFFF?text=Kanchenjunga+Base+Camp+3",
        "https://placehold.co/200x150/4B0082/FFFFFF?text=Kanchenjunga+Base+Camp+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sKanchenjunga+Base+Camp+Trek!5e0!3m2!1sen!2snp!4v1700000000007!5m2!1sen!2snp",
    "mapSideContent": "Kanchenjunga Base Camp Trek showcases the raw beauty and cultural depth of the Kanchenjunga Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 8,
    "name": "Everest Three Passes Trek",
    "imageSrc": "https://placehold.co/800x350/6A5ACD/FFFFFF?text=Everest+3+Passes",
    "description": [
        "Everest Three Passes Trek offers trekkers an unforgettable journey through the Khumbu Region of Nepal. The ultimate challenge in the Everest region.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Khumbu Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/6A5ACD/FFFFFF?text=Everest+3+Passes+1",
        "https://placehold.co/200x150/6A5ACD/FFFFFF?text=Everest+3+Passes+2",
        "https://placehold.co/200x150/6A5ACD/FFFFFF?text=Everest+3+Passes+3",
        "https://placehold.co/200x150/6A5ACD/FFFFFF?text=Everest+3+Passes+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sEverest+Three+Passes+Trek!5e0!3m2!1sen!2snp!4v1700000000008!5m2!1sen!2snp",
    "mapSideContent": "Everest Three Passes Trek showcases the raw beauty and cultural depth of the Khumbu Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 9,
    "name": "Mardi Himal Base Camp Trek",
    "imageSrc": "https://placehold.co/800x350/9ACD32/FFFFFF?text=Mardi+Himal",
    "description": [
        "Mardi Himal Base Camp Trek offers trekkers an unforgettable journey through the Annapurna Region of Nepal. A short and scenic trek in the Annapurna range.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Annapurna Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/9ACD32/FFFFFF?text=Mardi+Himal+1",
        "https://placehold.co/200x150/9ACD32/FFFFFF?text=Mardi+Himal+2",
        "https://placehold.co/200x150/9ACD32/FFFFFF?text=Mardi+Himal+3",
        "https://placehold.co/200x150/9ACD32/FFFFFF?text=Mardi+Himal+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sMardi+Himal+Base+Camp+Trek!5e0!3m2!1sen!2snp!4v1700000000009!5m2!1sen!2snp",
    "mapSideContent": "Mardi Himal Base Camp Trek showcases the raw beauty and cultural depth of the Annapurna Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 10,
    "name": "Rara Lake Trek",
    "imageSrc": "https://placehold.co/800x350/CD5C5C/FFFFFF?text=Rara+Lake",
    "description": [
        "Rara Lake Trek offers trekkers an unforgettable journey through the Mugu District of Nepal. Nepal\u2019s largest and most serene lake destination.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Mugu District, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/CD5C5C/FFFFFF?text=Rara+Lake+1",
        "https://placehold.co/200x150/CD5C5C/FFFFFF?text=Rara+Lake+2",
        "https://placehold.co/200x150/CD5C5C/FFFFFF?text=Rara+Lake+3",
        "https://placehold.co/200x150/CD5C5C/FFFFFF?text=Rara+Lake+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sRara+Lake+Trek!5e0!3m2!1sen!2snp!4v17000000000010!5m2!1sen!2snp",
    "mapSideContent": "Rara Lake Trek showcases the raw beauty and cultural depth of the Mugu District. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 11,
    "name": "Upper Dolpo Trek",
    "imageSrc": "https://placehold.co/800x350/FFD700/FFFFFF?text=Upper+Dolpo",
    "description": [
        "Upper Dolpo Trek offers trekkers an unforgettable journey through the Dolpo Region of Nepal. Ancient traditions in an isolated wilderness.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Dolpo Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/FFD700/FFFFFF?text=Upper+Dolpo+1",
        "https://placehold.co/200x150/FFD700/FFFFFF?text=Upper+Dolpo+2",
        "https://placehold.co/200x150/FFD700/FFFFFF?text=Upper+Dolpo+3",
        "https://placehold.co/200x150/FFD700/FFFFFF?text=Upper+Dolpo+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sUpper+Dolpo+Trek!5e0!3m2!1sen!2snp!4v17000000000011!5m2!1sen!2snp",
    "mapSideContent": "Upper Dolpo Trek showcases the raw beauty and cultural depth of the Dolpo Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 12,
    "name": "Pikey Peak Trek",
    "imageSrc": "https://placehold.co/800x350/778899/FFFFFF?text=Pikey+Peak",
    "description": [
        "Pikey Peak Trek offers trekkers an unforgettable journey through the Everest Region of Nepal. Panoramic Everest views from a less-known trail.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Everest Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/778899/FFFFFF?text=Pikey+Peak+1",
        "https://placehold.co/200x150/778899/FFFFFF?text=Pikey+Peak+2",
        "https://placehold.co/200x150/778899/FFFFFF?text=Pikey+Peak+3",
        "https://placehold.co/200x150/778899/FFFFFF?text=Pikey+Peak+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sPikey+Peak+Trek!5e0!3m2!1sen!2snp!4v17000000000012!5m2!1sen!2snp",
    "mapSideContent": "Pikey Peak Trek showcases the raw beauty and cultural depth of the Everest Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 13,
    "name": "Tsum Valley Trek",
    "imageSrc": "https://placehold.co/800x350/5F9EA0/FFFFFF?text=Tsum+Valley",
    "description": [
        "Tsum Valley Trek offers trekkers an unforgettable journey through the Manaslu Region of Nepal. A sacred and culturally rich hidden valley.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Manaslu Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/5F9EA0/FFFFFF?text=Tsum+Valley+1",
        "https://placehold.co/200x150/5F9EA0/FFFFFF?text=Tsum+Valley+2",
        "https://placehold.co/200x150/5F9EA0/FFFFFF?text=Tsum+Valley+3",
        "https://placehold.co/200x150/5F9EA0/FFFFFF?text=Tsum+Valley+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sTsum+Valley+Trek!5e0!3m2!1sen!2snp!4v17000000000013!5m2!1sen!2snp",
    "mapSideContent": "Tsum Valley Trek showcases the raw beauty and cultural depth of the Manaslu Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 14,
    "name": "Makalu Base Camp Trek",
    "imageSrc": "https://placehold.co/800x350/DEB887/FFFFFF?text=Makalu+Base+Camp",
    "description": [
        "Makalu Base Camp Trek offers trekkers an unforgettable journey through the Makalu Barun National Park of Nepal. Wild and challenging trek to the fifth highest peak.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Makalu Barun National Park, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/DEB887/FFFFFF?text=Makalu+Base+Camp+1",
        "https://placehold.co/200x150/DEB887/FFFFFF?text=Makalu+Base+Camp+2",
        "https://placehold.co/200x150/DEB887/FFFFFF?text=Makalu+Base+Camp+3",
        "https://placehold.co/200x150/DEB887/FFFFFF?text=Makalu+Base+Camp+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sMakalu+Base+Camp+Trek!5e0!3m2!1sen!2snp!4v17000000000014!5m2!1sen!2snp",
    "mapSideContent": "Makalu Base Camp Trek showcases the raw beauty and cultural depth of the Makalu Barun National Park. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 15,
    "name": "Upper Mustang (Lo Manthang) Trek",
    "imageSrc": "https://placehold.co/800x350/BDB76B/FFFFFF?text=Upper+Mustang+Lo+Manthang",
    "description": [
        "Upper Mustang (Lo Manthang) Trek offers trekkers an unforgettable journey through the Mustang Region of Nepal. Explore the ancient walled city of Lo Manthang.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Mustang Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/BDB76B/FFFFFF?text=Upper+Mustang+Lo+Manthang+1",
        "https://placehold.co/200x150/BDB76B/FFFFFF?text=Upper+Mustang+Lo+Manthang+2",
        "https://placehold.co/200x150/BDB76B/FFFFFF?text=Upper+Mustang+Lo+Manthang+3",
        "https://placehold.co/200x150/BDB76B/FFFFFF?text=Upper+Mustang+Lo+Manthang+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sUpper+Mustang+(Lo+Manthang)+Trek!5e0!3m2!1sen!2snp!4v17000000000015!5m2!1sen!2snp",
    "mapSideContent": "Upper Mustang (Lo Manthang) Trek showcases the raw beauty and cultural depth of the Mustang Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 16,
    "name": "Gosaikunda Lake Trek",
    "imageSrc": "https://placehold.co/800x350/7B68EE/FFFFFF?text=Gosaikunda+Lake",
    "description": [
        "Gosaikunda Lake Trek offers trekkers an unforgettable journey through the Langtang Region of Nepal. Alpine lake pilgrimage in the Himalayas.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Langtang Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/7B68EE/FFFFFF?text=Gosaikunda+Lake+1",
        "https://placehold.co/200x150/7B68EE/FFFFFF?text=Gosaikunda+Lake+2",
        "https://placehold.co/200x150/7B68EE/FFFFFF?text=Gosaikunda+Lake+3",
        "https://placehold.co/200x150/7B68EE/FFFFFF?text=Gosaikunda+Lake+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sGosaikunda+Lake+Trek!5e0!3m2!1sen!2snp!4v17000000000016!5m2!1sen!2snp",
    "mapSideContent": "Gosaikunda Lake Trek showcases the raw beauty and cultural depth of the Langtang Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 17,
    "name": "Ruby Valley Trek",
    "imageSrc": "https://placehold.co/800x350/DDA0DD/FFFFFF?text=Ruby+Valley",
    "description": [
        "Ruby Valley Trek offers trekkers an unforgettable journey through the Ganesh Himal Region of Nepal. Remote beauty and cultural encounters.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Ganesh Himal Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/DDA0DD/FFFFFF?text=Ruby+Valley+1",
        "https://placehold.co/200x150/DDA0DD/FFFFFF?text=Ruby+Valley+2",
        "https://placehold.co/200x150/DDA0DD/FFFFFF?text=Ruby+Valley+3",
        "https://placehold.co/200x150/DDA0DD/FFFFFF?text=Ruby+Valley+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sRuby+Valley+Trek!5e0!3m2!1sen!2snp!4v17000000000017!5m2!1sen!2snp",
    "mapSideContent": "Ruby Valley Trek showcases the raw beauty and cultural depth of the Ganesh Himal Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 18,
    "name": "Tamang Heritage Trail",
    "imageSrc": "https://placehold.co/800x350/B0E0E6/FFFFFF?text=Tamang+Heritage+Trail",
    "description": [
        "Tamang Heritage Trail offers trekkers an unforgettable journey through the Langtang Region of Nepal. Immerse in Tamang culture and mountain views.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Langtang Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/B0E0E6/FFFFFF?text=Tamang+Heritage+Trail+1",
        "https://placehold.co/200x150/B0E0E6/FFFFFF?text=Tamang+Heritage+Trail+2",
        "https://placehold.co/200x150/B0E0E6/FFFFFF?text=Tamang+Heritage+Trail+3",
        "https://placehold.co/200x150/B0E0E6/FFFFFF?text=Tamang+Heritage+Trail+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sTamang+Heritage+Trail!5e0!3m2!1sen!2snp!4v17000000000018!5m2!1sen!2snp",
    "mapSideContent": "Tamang Heritage Trail showcases the raw beauty and cultural depth of the Langtang Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 19,
    "name": "Helambu Trek",
    "imageSrc": "https://placehold.co/800x350/8A2BE2/FFFFFF?text=Helambu+Trek",
    "description": [
        "Helambu Trek offers trekkers an unforgettable journey through the Langtang Region of Nepal. Easy trek near Kathmandu with Sherpa heritage.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Langtang Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/8A2BE2/FFFFFF?text=Helambu+Trek+1",
        "https://placehold.co/200x150/8A2BE2/FFFFFF?text=Helambu+Trek+2",
        "https://placehold.co/200x150/8A2BE2/FFFFFF?text=Helambu+Trek+3",
        "https://placehold.co/200x150/8A2BE2/FFFFFF?text=Helambu+Trek+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sHelambu+Trek!5e0!3m2!1sen!2snp!4v17000000000019!5m2!1sen!2snp",
    "mapSideContent": "Helambu Trek showcases the raw beauty and cultural depth of the Langtang Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 20,
    "name": "Khopra Ridge Trek",
    "imageSrc": "https://placehold.co/800x350/8B4513/FFFFFF?text=Khopra+Ridge",
    "description": [
        "Khopra Ridge Trek offers trekkers an unforgettable journey through the Annapurna Region of Nepal. Stunning alternative to Ghorepani with ridge views.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Annapurna Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/8B4513/FFFFFF?text=Khopra+Ridge+1",
        "https://placehold.co/200x150/8B4513/FFFFFF?text=Khopra+Ridge+2",
        "https://placehold.co/200x150/8B4513/FFFFFF?text=Khopra+Ridge+3",
        "https://placehold.co/200x150/8B4513/FFFFFF?text=Khopra+Ridge+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sKhopra+Ridge+Trek!5e0!3m2!1sen!2snp!4v17000000000020!5m2!1sen!2snp",
    "mapSideContent": "Khopra Ridge Trek showcases the raw beauty and cultural depth of the Annapurna Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 21,
    "name": "Dhaulagiri Circuit Trek",
    "imageSrc": "https://placehold.co/800x350/008B8B/FFFFFF?text=Dhaulagiri+Circuit",
    "description": [
        "Dhaulagiri Circuit Trek offers trekkers an unforgettable journey through the Dhaulagiri Region of Nepal. Remote circumnavigation of Dhaulagiri massif.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Dhaulagiri Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/008B8B/FFFFFF?text=Dhaulagiri+Circuit+1",
        "https://placehold.co/200x150/008B8B/FFFFFF?text=Dhaulagiri+Circuit+2",
        "https://placehold.co/200x150/008B8B/FFFFFF?text=Dhaulagiri+Circuit+3",
        "https://placehold.co/200x150/008B8B/FFFFFF?text=Dhaulagiri+Circuit+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sDhaulagiri+Circuit+Trek!5e0!3m2!1sen!2snp!4v17000000000021!5m2!1sen!2snp",
    "mapSideContent": "Dhaulagiri Circuit Trek showcases the raw beauty and cultural depth of the Dhaulagiri Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 22,
    "name": "Nar Phu Valley Trek",
    "imageSrc": "https://placehold.co/800x350/556B2F/FFFFFF?text=Nar+Phu+Valley",
    "description": [
        "Nar Phu Valley Trek offers trekkers an unforgettable journey through the Annapurna Region of Nepal. Trek through isolated valleys and old monasteries.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Annapurna Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/556B2F/FFFFFF?text=Nar+Phu+Valley+1",
        "https://placehold.co/200x150/556B2F/FFFFFF?text=Nar+Phu+Valley+2",
        "https://placehold.co/200x150/556B2F/FFFFFF?text=Nar+Phu+Valley+3",
        "https://placehold.co/200x150/556B2F/FFFFFF?text=Nar+Phu+Valley+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sNar+Phu+Valley+Trek!5e0!3m2!1sen!2snp!4v17000000000022!5m2!1sen!2snp",
    "mapSideContent": "Nar Phu Valley Trek showcases the raw beauty and cultural depth of the Annapurna Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 23,
    "name": "Chisapani Nagarkot Trek",
    "imageSrc": "https://placehold.co/800x350/7F0000/FFFFFF?text=Chisapani+Nagarkot",
    "description": [
        "Chisapani Nagarkot Trek offers trekkers an unforgettable journey through the Kathmandu Valley Rim of Nepal. Quick trek for sunrise views near the capital.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Kathmandu Valley Rim, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/7F0000/FFFFFF?text=Chisapani+Nagarkot+1",
        "https://placehold.co/200x150/7F0000/FFFFFF?text=Chisapani+Nagarkot+2",
        "https://placehold.co/200x150/7F0000/FFFFFF?text=Chisapani+Nagarkot+3",
        "https://placehold.co/200x150/7F0000/FFFFFF?text=Chisapani+Nagarkot+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sChisapani+Nagarkot+Trek!5e0!3m2!1sen!2snp!4v17000000000023!5m2!1sen!2snp",
    "mapSideContent": "Chisapani Nagarkot Trek showcases the raw beauty and cultural depth of the Kathmandu Valley Rim. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 24,
    "name": "Api Base Camp Trek",
    "imageSrc": "https://placehold.co/800x350/696969/FFFFFF?text=Api+Base+Camp",
    "description": [
        "Api Base Camp Trek offers trekkers an unforgettable journey through the Far Western Nepal of Nepal. Wilderness adventure to the base of Mt. Api.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Far Western Nepal, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/696969/FFFFFF?text=Api+Base+Camp+1",
        "https://placehold.co/200x150/696969/FFFFFF?text=Api+Base+Camp+2",
        "https://placehold.co/200x150/696969/FFFFFF?text=Api+Base+Camp+3",
        "https://placehold.co/200x150/696969/FFFFFF?text=Api+Base+Camp+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sApi+Base+Camp+Trek!5e0!3m2!1sen!2snp!4v17000000000024!5m2!1sen!2snp",
    "mapSideContent": "Api Base Camp Trek showcases the raw beauty and cultural depth of the Far Western Nepal. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 25,
    "name": "Mohare Danda Trek",
    "imageSrc": "https://placehold.co/800x350/40E0D0/FFFFFF?text=Mohare+Danda",
    "description": [
        "Mohare Danda Trek offers trekkers an unforgettable journey through the Annapurna Region of Nepal. Eco-community trek with panoramic views.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Annapurna Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/40E0D0/FFFFFF?text=Mohare+Danda+1",
        "https://placehold.co/200x150/40E0D0/FFFFFF?text=Mohare+Danda+2",
        "https://placehold.co/200x150/40E0D0/FFFFFF?text=Mohare+Danda+3",
        "https://placehold.co/200x150/40E0D0/FFFFFF?text=Mohare+Danda+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sMohare+Danda+Trek!5e0!3m2!1sen!2snp!4v17000000000025!5m2!1sen!2snp",
    "mapSideContent": "Mohare Danda Trek showcases the raw beauty and cultural depth of the Annapurna Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 26,
    "name": "Lower Dolpo (Shey Gompa) Trek",
    "imageSrc": "https://placehold.co/800x350/000080/FFFFFF?text=Dolpo+Shey+Gompa",
    "description": [
        "Lower Dolpo (Shey Gompa) Trek offers trekkers an unforgettable journey through the Dolpo Region of Nepal. Mystical land of gompas and spiritual landscapes.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Dolpo Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/000080/FFFFFF?text=Dolpo+Shey+Gompa+1",
        "https://placehold.co/200x150/000080/FFFFFF?text=Dolpo+Shey+Gompa+2",
        "https://placehold.co/200x150/000080/FFFFFF?text=Dolpo+Shey+Gompa+3",
        "https://placehold.co/200x150/000080/FFFFFF?text=Dolpo+Shey+Gompa+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sLower+Dolpo+(Shey+Gompa)+Trek!5e0!3m2!1sen!2snp!4v17000000000026!5m2!1sen!2snp",
    "mapSideContent": "Lower Dolpo (Shey Gompa) Trek showcases the raw beauty and cultural depth of the Dolpo Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 27,
    "name": "Amphu Lapcha Pass Trek",
    "imageSrc": "https://placehold.co/800x350/FF4500/FFFFFF?text=Amphu+Lapcha+Pass",
    "description": [
        "Amphu Lapcha Pass Trek offers trekkers an unforgettable journey through the Khumbu Region of Nepal. Technical pass for seasoned adventurers.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Khumbu Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/FF4500/FFFFFF?text=Amphu+Lapcha+Pass+1",
        "https://placehold.co/200x150/FF4500/FFFFFF?text=Amphu+Lapcha+Pass+2",
        "https://placehold.co/200x150/FF4500/FFFFFF?text=Amphu+Lapcha+Pass+3",
        "https://placehold.co/200x150/FF4500/FFFFFF?text=Amphu+Lapcha+Pass+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sAmphu+Lapcha+Pass+Trek!5e0!3m2!1sen!2snp!4v17000000000027!5m2!1sen!2snp",
    "mapSideContent": "Amphu Lapcha Pass Trek showcases the raw beauty and cultural depth of the Khumbu Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 28,
    "name": "Limbu Cultural Trail",
    "imageSrc": "https://placehold.co/800x350/DAA520/FFFFFF?text=Limbu+Cultural+Trail",
    "description": [
        "Limbu Cultural Trail offers trekkers an unforgettable journey through the Eastern Nepal of Nepal. Discover the vibrant Limbu culture and heritage.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Eastern Nepal, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/DAA520/FFFFFF?text=Limbu+Cultural+Trail+1",
        "https://placehold.co/200x150/DAA520/FFFFFF?text=Limbu+Cultural+Trail+2",
        "https://placehold.co/200x150/DAA520/FFFFFF?text=Limbu+Cultural+Trail+3",
        "https://placehold.co/200x150/DAA520/FFFFFF?text=Limbu+Cultural+Trail+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sLimbu+Cultural+Trail!5e0!3m2!1sen!2snp!4v17000000000028!5m2!1sen!2snp",
    "mapSideContent": "Limbu Cultural Trail showcases the raw beauty and cultural depth of the Eastern Nepal. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 29,
    "name": "Rolwaling Tashi Lapcha Pass Trek",
    "imageSrc": "https://placehold.co/800x350/ADFF2F/FFFFFF?text=Rolwaling+Tashi+Lapcha",
    "description": [
        "Rolwaling Tashi Lapcha Pass Trek offers trekkers an unforgettable journey through the Rolwaling Region of Nepal. Cross a thrilling high pass linking two valleys.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Rolwaling Region, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/ADFF2F/FFFFFF?text=Rolwaling+Tashi+Lapcha+1",
        "https://placehold.co/200x150/ADFF2F/FFFFFF?text=Rolwaling+Tashi+Lapcha+2",
        "https://placehold.co/200x150/ADFF2F/FFFFFF?text=Rolwaling+Tashi+Lapcha+3",
        "https://placehold.co/200x150/ADFF2F/FFFFFF?text=Rolwaling+Tashi+Lapcha+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sRolwaling+Tashi+Lapcha+Pass+Trek!5e0!3m2!1sen!2snp!4v17000000000029!5m2!1sen!2snp",
    "mapSideContent": "Rolwaling Tashi Lapcha Pass Trek showcases the raw beauty and cultural depth of the Rolwaling Region. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
},
{
    "id": 30,
    "name": "Chepang Hill Trail",
    "imageSrc": "https://placehold.co/800x350/4169E1/FFFFFF?text=Chepang+Hill+Trail",
    "description": [
        "Chepang Hill Trail offers trekkers an unforgettable journey through the Chitwan District of Nepal. Cultural trek with stunning Himalayan views.",
        "This trek combines natural wonders with cultural experiences, making it ideal for those seeking more than just scenic beauty."
    ],
    "moreInfo": [
        "Along the way, trekkers encounter local villages, diverse landscapes, and opportunities to connect with authentic Himalayan culture. Wildlife, ancient monasteries, and high-altitude views add to the richness of the journey.",
        "Best seasons for this trek vary, but spring and autumn generally provide clear skies and moderate conditions. It is suitable for moderately fit to experienced trekkers depending on the route."
    ],
    "lat": "28.0000",
    "lon": "84.0000",
    "locationName": "Chitwan District, Nepal",
    "galleryImages": [
        "https://placehold.co/200x150/4169E1/FFFFFF?text=Chepang+Hill+Trail+1",
        "https://placehold.co/200x150/4169E1/FFFFFF?text=Chepang+Hill+Trail+2",
        "https://placehold.co/200x150/4169E1/FFFFFF?text=Chepang+Hill+Trail+3",
        "https://placehold.co/200x150/4169E1/FFFFFF?text=Chepang+Hill+Trail+4"
    ],
    "mapIframeSrc": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112349.5446452292!2d84.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sChepang+Hill+Trail!5e0!3m2!1sen!2snp!4v17000000000030!5m2!1sen!2snp",
    "mapSideContent": "Chepang Hill Trail showcases the raw beauty and cultural depth of the Chitwan District. Trekkers can expect breathtaking vistas, deep cultural roots, and a profound connection with the high Himalayas throughout the journey."
}

            // ADD ALL YOUR 30 DESTINATION OBJECTS HERE
            // Make sure each has a unique 'id' (5, 6, 7, ... up to 30)
            // Example structure for other destinations:
            // {
            //     id: 5,
            //     name: 'Ghorepani Poon Hill Trek',
            //     imageSrc: '...',
            //     description: ['...'],
            //     moreInfo: ['...'],
            //     lat: '...',
            //     lon: '...',
            //     locationName: 'Ghorepani Poon Hill',
            //     galleryImages: ['...'],
            //     mapIframeSrc: '...',
            //     mapSideContent: '...'
            // },
            // ... and so on for ID 6 to 30
        ];

        async function fetchWeatherForCard(weatherCardElement) {
            const lat = weatherCardElement.dataset.lat;
            const lon = weatherCardElement.dataset.lon;
            const locationName = weatherCardElement.dataset.locationName || 'Selected Location';

            const weatherLoadingEl = weatherCardElement.querySelector('.weather-loading-message');
            const weatherContentEl = weatherCardElement.querySelector('.weather-content');
            const weatherErrorEl = weatherCardElement.querySelector('.weather-error-message');

            const locationEl = weatherContentEl.querySelector('.weather-location');
            const iconEl = weatherContentEl.querySelector('.weather-icon-img');
            const tempEl = weatherContentEl.querySelector('.weather-temperature');
            const descEl = weatherContentEl.querySelector('.weather-description');
            const feelsLikeEl = weatherContentEl.querySelector('.weather-feels-like');
            const humidityEl = weatherContentEl.querySelector('.weather-humidity');
            const windEl = weatherContentEl.querySelector('.weather-wind');
            const pressureEl = weatherContentEl.querySelector('.weather-pressure');

            const showLoading = (isLoading) => {
                if (isLoading) {
                    if (weatherLoadingEl) weatherLoadingEl.classList.remove('hidden');
                    if (weatherContentEl) weatherContentEl.classList.add('hidden');
                    if (weatherErrorEl) weatherErrorEl.classList.add('hidden');
                } else {
                    if (weatherLoadingEl) weatherLoadingEl.classList.add('hidden');
                }
            };

            const showError = (message) => {
                const errorParagraph = weatherErrorEl.querySelector('p');
                if (errorParagraph) {
                    errorParagraph.textContent = `Weather Update: ${message}`;
                }
                if (weatherErrorEl) weatherErrorEl.classList.remove('hidden');
                if (weatherContentEl) weatherContentEl.classList.add('hidden');
                if (weatherLoadingEl) weatherLoadingEl.classList.add('hidden');
            };

            const displayWeather = (data) => {
                if (!data || !data.main || !data.weather || !data.weather[0] || !data.wind) {
                    showError('Received incomplete weather data from API.');
                    return;
                }

                if (locationEl) locationEl.textContent = locationName;
                if (tempEl) tempEl.textContent = `${Math.round(data.main.temp)}°C`;
                if (descEl) descEl.textContent = data.weather[0].description;
                if (iconEl) {
                    iconEl.src = `https://openweathermap.org/img/wn/${data.weather[0].icon}@2x.png`;
                    iconEl.alt = data.weather[0].description;
                }

                if (feelsLikeEl) feelsLikeEl.textContent = `${Math.round(data.main.feels_like)}°C`;
                if (humidityEl) humidityEl.textContent = `${data.main.humidity}%`;
                if (windEl) windEl.textContent = `${data.wind.speed.toFixed(1)} m/s`;
                if (pressureEl) pressureEl.textContent = `${data.main.pressure} hPa`;

                if (weatherContentEl) weatherContentEl.classList.remove('hidden');
                if (weatherErrorEl) weatherErrorEl.classList.add('hidden');
            };

            showLoading(true);
            if (apiKey === 'YOUR_OPENWEATHERMAP_API_KEY' || !apiKey) {
                showError('API key missing. Please configure the API key in the JavaScript section of this file.');
                showLoading(false);
                return;
            }
            
            const apiUrl = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}&units=metric`;

            try {
                const response = await fetch(apiUrl);
                if (!response.ok) {
                    const errorData = await response.json().catch(() => ({ message: "Failed to parse error response." }));
                    throw new Error(errorData.message || `HTTP error! status: ${response.status}`);
                }
                const data = await response.json();
                displayWeather(data);
            } catch (error) {
                console.error('Error fetching weather data:', error);
                showError(`Failed to fetch weather: ${error.message}`);
            } finally {
                showLoading(false);
            }
        }

        // Budget Calculator Logic
        const calculateBudgetBtn = document.getElementById('calculate-budget-btn');
        const estimatedTotalBudget = document.getElementById('estimated-total-budget');

        function calculateBudget() {
            const travelTime = parseFloat(document.getElementById('travel-time').value) || 0;
            const transportationCost = parseFloat(document.getElementById('transportation-cost').value) || 0;
            const accommodationCost = parseFloat(document.getElementById('accommodation-cost').value) || 0;
            const foodDrinksCost = parseFloat(document.getElementById('food-drinks-cost').value) || 0;
            const activitiesCost = parseFloat(document.getElementById('activities-cost').value) || 0;
            const shoppingCost = parseFloat(document.getElementById('shopping-cost').value) || 0;
            const miscellaneousCost = parseFloat(document.getElementById('miscellaneous-cost').value) || 0;

            const totalBudget = transportationCost + accommodationCost + foodDrinksCost + activitiesCost + shoppingCost + miscellaneousCost;

            estimatedTotalBudget.querySelector('strong').textContent = `$${totalBudget.toFixed(2)}`;
            estimatedTotalBudget.classList.remove('hidden');
        }

        calculateBudgetBtn.addEventListener('click', calculateBudget);

        // Function to load destination details dynamically
        function loadDestinationDetails(destinationIdFromUrl) {
            const numericDestinationId = parseInt(destinationIdFromUrl, 10);
            
            // Find the destination. If not found or invalid, default to the first one (ID 1).
            const destination = allDestinations.find(dest => dest.id === numericDestinationId) || allDestinations[0];

            // If still no destination (e.g., array is empty), show an error or a default message
            if (!destination) {
                document.querySelector('.destination-info h1').textContent = 'Destination Not Found';
                document.querySelector('.destination-image').src = 'https://placehold.co/800x350/FF0000/FFFFFF?text=Error';
                document.querySelector('.destination-info p').textContent = 'The requested destination could not be found.';
                console.error(`Destination with ID ${destinationIdFromUrl} not found in allDestinations array.`);
                return;
            }

            // Update Destination Info Section
            document.querySelector('.destination-info h1').textContent = destination.name;
            const destImage = document.querySelector('.destination-image');
            destImage.src = destination.imageSrc;
            destImage.alt = destination.name;

            const destInfoParagraphsContainer = document.querySelector('.destination-info');
            // Remove existing paragraphs, but keep h1 and img
            let existingParagraphs = Array.from(destInfoParagraphsContainer.querySelectorAll('p'));
            existingParagraphs.forEach(p => p.remove());
            
            destination.description.forEach(text => {
                const p = document.createElement('p');
                p.textContent = text;
                destInfoParagraphsContainer.appendChild(p);
            });

            // Update Weather Card
            const weatherCard = document.getElementById('weather-forecast-card');
            weatherCard.dataset.lat = destination.lat;
            weatherCard.dataset.lon = destination.lon;
            weatherCard.dataset.locationName = destination.locationName;
            fetchWeatherForCard(weatherCard); // Re-fetch weather for the new location

            // Update More Info Section
            const moreInfoSection = document.querySelector('.more-info-section');
            moreInfoSection.querySelector('h2').textContent = `Explore More about ${destination.name}`;

            // Remove existing paragraphs in more info section
            const moreInfoParagraphs = Array.from(moreInfoSection.querySelectorAll('p:not(.weather-error-message p):not(.weather-loading-message p)')); // Exclude weather messages
            moreInfoParagraphs.forEach(p => p.remove());

            // Add new paragraphs from moreInfo array
            destination.moreInfo.forEach(text => {
                const p = document.createElement('p');
                p.textContent = text;
                const photoGalleryH3 = moreInfoSection.querySelector('h3'); // Find the first h3 (Photo Gallery)
                if (photoGalleryH3) {
                    moreInfoSection.insertBefore(p, photoGalleryH3); // Insert before Photo Gallery
                } else {
                    moreInfoSection.appendChild(p); // Fallback if h3 not found
                }
            });

            // Update Photo Gallery
            const photoGalleryGrid = document.querySelector('.photo-gallery-grid');
            photoGalleryGrid.innerHTML = ''; // Clear existing images
            destination.galleryImages.forEach(imgSrc => {
                const img = document.createElement('img');
                img.src = imgSrc;
                img.alt = `${destination.name} image`;
                photoGalleryGrid.appendChild(img);
            });

            // Update Map
            const mapIframe = document.querySelector('.map-container iframe');
            mapIframe.src = destination.mapIframeSrc;
            document.querySelector('.map-side-content h4').textContent = `About the ${destination.locationName || destination.name} Region`;
            document.querySelector('.map-side-content p').textContent = destination.mapSideContent;
        }

        // Initial setup on page load: read destination ID from URL and load content
        document.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            const destinationId = urlParams.get('destination'); // Get 'destination' parameter (e.g., '1', '2', '3')
            
            // Load details based on URL parameter. If none, default to ID 1.
            loadDestinationDetails(destinationId || '1'); 
        });
    </script>
</body>
</html>