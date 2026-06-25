<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Official landing page concept for the Province of Davao de Oro.">
    <title>Davao de Oro</title>
    @vite('resources/css/app.css')
</head>
<body>
    @php
        $navigation = ['Home', 'Services', 'Announcements', 'About', 'Contact'];
    @endphp

    <main class="site">
        <header class="site-header">
            <div class="topbar">
                <div class="container topbar__inner">
                    <span>Province of Davao de Oro Official Portal</span>
                    <span>Public service information for residents, visitors, and partners</span>
                </div>
            </div>

            <nav class="container nav" aria-label="Primary navigation">
                <a href="#home" class="brand">
                    <span class="brand__mark">DDO</span>
                    <span>
                        <span class="brand__name">Davao de Oro</span>
                        <span class="brand__label">Provincial Government</span>
                    </span>
                </a>

                <div class="nav__links">
                    @foreach ($navigation as $item)
                        <a href="#{{ strtolower($item) }}">{{ $item }}</a>
                    @endforeach
                </div>

                <button class="menu-button" type="button" aria-label="Toggle navigation menu" aria-expanded="false" data-menu-button>
                    <span data-menu-icon>&#8801;</span>
                </button>
            </nav>

            <div class="mobile-menu" data-mobile-menu>
                <div class="container mobile-menu__inner">
                    @foreach ($navigation as $item)
                        <a href="#{{ strtolower($item) }}">{{ $item }}</a>
                    @endforeach
                </div>
            </div>
        </header>

        <section id="home" class="hero">
            <div class="hero__stripe"></div>
            <div class="container hero__grid">
                <div>
                    <p class="badge">Welcome to Davao de Oro</p>
                    <h1>A helpful province portal for everyday public service.</h1>
                    <p class="hero__copy">Discover services, announcements, and provincial information in one convenient portal.</p>

                    <div class="hero__actions">
                        <a href="#services" class="button button--primary">Explore Services</a>
                        <a href="#announcements" class="button button--secondary">View Announcements</a>
                    </div>
                </div>

                <div class="hero__media-card">
                    <div class="hero__media">
                        <img src="{{ asset('images/davao-de-oro-welcome.jpg') }}" alt="Welcome to Davao de Oro">
                    </div>
                </div>
            </div>

            <div class="container quick-links">
                @foreach (['Office Directory', 'Permits & Forms', 'Emergency Contacts', 'Provincial Programs'] as $item)
                    <a href="#services">{{ $item }}</a>
                @endforeach
            </div>
        </section>

        <section id="services" class="section">
            <div class="container">
                <div class="section-heading">
                    <p>Public Services</p>
                    <h2>How can we help you today?</h2>
                    <span>A simple starting point for services, programs, tourism information, and citizen assistance.</span>
                </div>

                <div class="service-grid">
                    @foreach ([
                        ['icon' => 'GOV', 'title' => 'Government Services', 'description' => 'Find provincial offices, public forms, permits, and frontline service information.'],
                        ['icon' => 'TOUR', 'title' => 'Tourism', 'description' => 'Discover destinations, culture, events, and travel information across Davao de Oro.'],
                        ['icon' => 'INFO', 'title' => 'Public Announcements', 'description' => 'Read advisories, schedules, official notices, and program updates from the province.'],
                        ['icon' => 'HELP', 'title' => 'Citizen Assistance', 'description' => 'Connect with help desks, emergency contacts, social support, and assistance channels.'],
                    ] as $service)
                        <article class="card service-card">
                            <div class="service-card__icon">{{ $service['icon'] }}</div>
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['description'] }}</p>
                            <a href="#contact">Learn more</a>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="about" class="section section--white">
            <div class="container about-grid">
                <div>
                    <div class="section-heading">
                        <p>About the Province</p>
                        <h2>Progressive, resilient, and service-centered.</h2>
                        <span>Davao de Oro is a province in the Davao Region known for its rich natural resources, resilient communities, and commitment to inclusive public service.</span>
                    </div>
                    <p class="body-copy">
                        This landing page concept is designed as a civic gateway where residents, visitors, and
                        stakeholders can find trusted information, reach provincial offices, and follow public
                        programs with less friction.
                    </p>
                </div>

                <div class="value-list">
                    @foreach ([
                        'Accessible services for citizens',
                        'Timely and organized public information',
                        'Support for tourism, culture, and local communities',
                    ] as $item)
                        <div class="value-item">
                            <h3>{{ $item }}</h3>
                            <p>Built for clear navigation, readable content, and dependable public access.</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="announcements" class="section">
            <div class="container">
                <div class="announcement-head">
                    <div class="section-heading">
                        <p>Announcements</p>
                        <h2>Latest provincial updates</h2>
                        <span>Sample announcement cards for advisories, program schedules, office notices, and community information.</span>
                    </div>
                    <a href="#contact" class="button button--light">View all notices</a>
                </div>

                <div class="announcement-grid">
                    @foreach ([
                        ['date' => 'June 25, 2026', 'title' => 'Provincial Service Caravan Schedule', 'description' => 'Selected offices will bring key services closer to communities through outreach activities.'],
                        ['date' => 'June 20, 2026', 'title' => 'Tourism and Culture Month Activities', 'description' => 'Residents and visitors are invited to join programs highlighting local heritage and destinations.'],
                        ['date' => 'June 15, 2026', 'title' => 'Public Advisory on Office Hours', 'description' => 'Please be guided by the updated transaction hours for provincial government offices.'],
                    ] as $announcement)
                        <article class="card announcement-card">
                            <time>{{ $announcement['date'] }}</time>
                            <h3>{{ $announcement['title'] }}</h3>
                            <p>{{ $announcement['description'] }}</p>
                            <a href="#contact">Read announcement</a>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section section--cta">
            <div class="container">
                <div class="cta">
                    <div>
                        <p>Need assistance?</p>
                        <h2>Connect with the province</h2>
                        <span>Reach the right office, view public notices, or find helpful information for your visit or transaction.</span>
                    </div>
                    <a href="#contact" class="button button--primary">Contact Us</a>
                </div>
            </div>
        </section>

        <footer id="contact" class="footer">
            <div class="container footer__grid">
                <div>
                    <h2>Province of Davao de Oro</h2>
                    <p>A light, modern public service portal concept for residents, visitors, and partner agencies.</p>
                </div>

                <div>
                    <h3>Quick Links</h3>
                    <div class="footer__links">
                        @foreach ($navigation as $item)
                            <a href="#{{ strtolower($item) }}">{{ $item }}</a>
                        @endforeach
                    </div>
                </div>

                <div>
                    <h3>Contact</h3>
                    <div class="footer__contact">
                        <p>Provincial Capitol, Davao de Oro</p>
                        <p>Email: info@davaodeoro.gov.ph</p>
                        <p>Phone: (000) 000-0000</p>
                    </div>
                </div>
            </div>

            <div class="container footer__bottom">
                &copy; 2026 Province of Davao de Oro. All rights reserved.
            </div>
        </footer>
    </main>

    <script>
        const button = document.querySelector('[data-menu-button]');
        const menu = document.querySelector('[data-mobile-menu]');
        const icon = document.querySelector('[data-menu-icon]');

        button.addEventListener('click', () => {
            const isOpen = menu.classList.toggle('is-open');
            button.setAttribute('aria-expanded', String(isOpen));
            icon.innerHTML = isOpen ? '&times;' : '&#8801;';
        });

        menu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                menu.classList.remove('is-open');
                button.setAttribute('aria-expanded', 'false');
                icon.innerHTML = '&#8801;';
            });
        });
    </script>
</body>
</html>
