@extends('layouts.app')

@section('content')

    <!-- Scroll Progress Bar -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- ═══════════════════════════════════
         HERO SECTION
    ═══════════════════════════════════ -->
    <section id="hero" class="hero-section">
        <div class="hero-grid-bg"></div>
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>

        <div class="container-fluid px-4 px-lg-5">
            <div class="hero-inner">

                <div class="hero-badge" data-aos="fade-down">
                    <span class="badge-dot"></span>
                    <span class="mono-text">Available for Projects</span>
                </div>

                <h1 class="hero-name" data-aos="fade-up" data-aos-delay="100">
                    Jared Delle Dave<br>
                    <span class="name-outline">Naces</span>
                </h1>

                <div class="hero-tagline" data-aos="fade-up" data-aos-delay="200">
                    <span class="mono-text accent-color">&gt;_</span>
                    <span id="typewriter" class="typewriter-text">Full-Stack Developer</span>
                    <span class="typewriter-cursor">|</span>
                </div>

                <p class="hero-desc" data-aos="fade-up" data-aos-delay="300">
                    Results-driven IT professional building scalable, user-focused web &amp; desktop applications.
                    Based in Valencia City, Philippines.
                </p>

                <div class="hero-cta" data-aos="fade-up" data-aos-delay="400">
                    <a href="#projects" class="btn btn-primary-custom">
                        View My Work <i class="bi bi-arrow-down-right ms-2"></i>
                    </a>
                    <a href="#contact" class="btn btn-outline-custom ms-3">
                        Let's Talk <i class="bi bi-chat-dots ms-2"></i>
                    </a>
                </div>

                <div class="hero-stats" id="statsRow" data-aos="fade-up" data-aos-delay="500">
                    <div class="stat-item">
                        <span class="stat-number" data-target="5" data-suffix="+">0+</span>
                        <span class="stat-label">Projects Built</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="8" data-suffix="+">0+</span>
                        <span class="stat-label">Technologies</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="3" data-suffix="">0</span>
                        <span class="stat-label">Years Learning</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-indicator">
            <div class="scroll-line"></div>
            <span class="mono-text">scroll</span>
        </div>
    </section>


    <!-- ═══════════════════════════════════
         ABOUT SECTION
    ═══════════════════════════════════ -->
    <section id="about" class="about-section section-padding">
        <div class="container-fluid px-4 px-lg-5">

            <div class="section-label" data-aos="fade-right">
                <span class="mono-text">01 /</span> About Me
            </div>

            <div class="row align-items-center g-5">
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                    <div class="about-img-wrapper">
                        <div class="about-img-placeholder">
                            <div class="avatar-initials">JDDN</div>
                            <div class="avatar-ring ring-1"></div>
                            <div class="avatar-ring ring-2"></div>
                            <div class="avatar-tag mono-text">
                                <i class="bi bi-geo-alt-fill accent-color"></i> Valencia City, PH
                            </div>
                        </div>
                        <div class="about-img-decor"></div>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="150">
                    <h2 class="section-title">Crafting Digital<br><span class="accent-color">Experiences</span></h2>
                    <p class="about-text">
                        Results-driven IT professional with hands-on experience in technical support,
                        troubleshooting, and <strong>full-stack software development</strong>. Proficient in
                        diagnosing and resolving hardware and software issues efficiently while maintaining
                        high standards of customer service.
                    </p>
                    <p class="about-text">
                        Skilled across multiple programming languages and frameworks with a demonstrated
                        ability to design and deliver scalable, user-focused applications — both
                        <strong>web-based and desktop</strong>. Currently pursuing a BS in Information Technology
                        at IBA College of Mindanao.
                    </p>

                    <div class="about-highlights">
                        <div class="highlight-item">
                            <i class="bi bi-mortarboard-fill accent-color"></i>
                            <div>
                                <strong>BS Information Technology</strong>
                                <span>IBA College of Mindanao (Current)</span>
                            </div>
                        </div>
                        <div class="highlight-item">
                            <i class="bi bi-geo-alt-fill accent-color"></i>
                            <div>
                                <strong>Valencia City, Philippines</strong>
                                <span>Open to Remote Work</span>
                            </div>
                        </div>
                        <div class="highlight-item">
                            <i class="bi bi-lightning-fill accent-color"></i>
                            <div>
                                <strong>TESDA-Certified Assessor</strong>
                                <span>Computer Servicing NC II</span>
                            </div>
                        </div>
                    </div>

                    <a href="#contact" class="btn btn-primary-custom mt-4">
                        Hire Me <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════
         SKILLS SECTION
    ═══════════════════════════════════ -->
    <section id="skills" class="skills-section section-padding">
        <div class="container-fluid px-4 px-lg-5">

            <div class="section-label" data-aos="fade-right">
                <span class="mono-text">02 /</span> Tech Stack
            </div>
            <h2 class="section-title" data-aos="fade-up">Skills &amp; <span class="accent-color">Technologies</span></h2>

            <div class="skills-grid" data-aos="fade-up" data-aos-delay="100">

                <!-- Languages & Frameworks -->
                <div class="skill-category">
                    <h5 class="category-label mono-text">
                        <span class="accent-color">→</span> Languages &amp; Frameworks
                    </h5>
                    <div class="chips-row">
                        <div class="skill-chip">
                            <img src="https://cdn.simpleicons.org/php/777BB4" alt="PHP" class="chip-icon" width="20" height="20"> PHP
                        </div>
                        <div class="skill-chip chip-featured">
                            <img src="https://cdn.simpleicons.org/laravel/FF2D20" alt="Laravel" class="chip-icon" width="20" height="20"> Laravel
                        </div>
                        <div class="skill-chip">
                            <img src="https://cdn.simpleicons.org/html5/E34F26" alt="HTML5" class="chip-icon" width="20" height="20"> HTML5
                        </div>
                        <div class="skill-chip">
                            <i class="devicon-css3-plain colored chip-icon"></i> CSS3
                        </div>
                        <div class="skill-chip">
                            <img src="https://cdn.simpleicons.org/javascript/F7DF1E" alt="JavaScript" class="chip-icon" width="20" height="20"> JavaScript
                        </div>
                        <div class="skill-chip">
                            <i class="devicon-csharp-plain colored chip-icon"></i> C#
                        </div>
                        <div class="skill-chip">
                            <img src="https://cdn.simpleicons.org/dotnet/512BD4" alt="VB.NET" class="chip-icon" width="20" height="20"> VB.NET
                        </div>
                        <div class="skill-chip">
                            <i class="bi bi-diagram-3-fill chip-icon accent-color"></i> OOP
                        </div>
                    </div>
                </div>

                <!-- Tools & Platforms -->
                <div class="skill-category">
                    <h5 class="category-label mono-text">
                        <span class="accent-color">→</span> Tools &amp; Platforms
                    </h5>
                    <div class="chips-row">
                        <div class="skill-chip chip-featured">
                            <img src="https://cdn.simpleicons.org/bootstrap/7952B3" alt="Bootstrap" class="chip-icon" width="20" height="20"> Bootstrap 5
                        </div>
                        <div class="skill-chip">
                            <img src="https://cdn.simpleicons.org/mysql/4479A1" alt="MySQL" class="chip-icon" width="20" height="20"> MySQL
                        </div>
                        <div class="skill-chip">
                            <i class="devicon-visualstudio-plain colored chip-icon"></i> Visual Studio
                        </div>
                        <div class="skill-chip">
                            <img src="https://cdn.simpleicons.org/unity/FFFFFF" alt="Unity" class="chip-icon" width="20" height="20"> Unity
                        </div>
                        <div class="skill-chip">
                            <img src="https://cdn.simpleicons.org/blender/F5792A" alt="Blender" class="chip-icon" width="20" height="20"> Blender
                        </div>
                        <div class="skill-chip">
                            <i class="devicon-vscode-plain colored chip-icon"></i> VS Code
                        </div>
                    </div>
                </div>

                <!-- Core Competencies -->
                <div class="skill-category">
                    <h5 class="category-label mono-text">
                        <span class="accent-color">→</span> Core Competencies
                    </h5>
                    <div class="chips-row">
                        <div class="skill-chip"><i class="bi bi-puzzle-fill accent-color"></i> Problem Solving</div>
                        <div class="skill-chip"><i class="bi bi-people-fill accent-color"></i> Team Collaboration</div>
                        <div class="skill-chip"><i class="bi bi-chat-fill accent-color"></i> Communication</div>
                        <div class="skill-chip"><i class="bi bi-clock-fill accent-color"></i> Time Management</div>
                        <div class="skill-chip"><i class="bi bi-eye-fill accent-color"></i> Attention to Detail</div>
                        <div class="skill-chip"><i class="bi bi-lightbulb-fill accent-color"></i> Critical Thinking</div>
                    </div>
                </div>
            </div>

            <!-- Proficiency Bars -->
            <div class="proficiency-row row g-4 mt-5" data-aos="fade-up" data-aos-delay="200">
                @foreach([
                    ['label' => 'PHP / Laravel',           'pct' => 85],
                    ['label' => 'HTML / CSS / Bootstrap',  'pct' => 90],
                    ['label' => 'C# / VB.NET',             'pct' => 80],
                    ['label' => 'MySQL',                   'pct' => 78],
                    ['label' => 'JavaScript',              'pct' => 65],
                ] as $skill)
                <div class="col-md-6">
                    <div class="skill-bar-item">
                        <div class="skill-bar-header">
                            <span class="skill-bar-label">{{ $skill['label'] }}</span>
                            <span class="skill-bar-pct mono-text accent-color">{{ $skill['pct'] }}%</span>
                        </div>
                        <div class="skill-bar-track">
                            <div class="skill-bar-fill" style="--target-width: {{ $skill['pct'] }}%"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>


    <!-- ═══════════════════════════════════
         PROJECTS SECTION
    ═══════════════════════════════════ -->
    <section id="projects" class="projects-section section-padding">
        <div class="container-fluid px-4 px-lg-5">

            <div class="section-label" data-aos="fade-right">
                <span class="mono-text">03 /</span> Projects
            </div>
            <h2 class="section-title" data-aos="fade-up">Featured <span class="accent-color">Work</span></h2>

            <!-- Featured Project -->
            <div class="featured-project" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6">
                        <div class="fp-mockup">
                            <div class="fp-browser-bar">
                                <span class="dot red"></span>
                                <span class="dot yellow"></span>
                                <span class="dot green"></span>
                                <span class="fp-url mono-text">barangay-system.php</span>
                            </div>
                            <div class="fp-screen">
                                <div class="fp-screen-header">
                                    <div class="fp-logo-area">
                                        <i class="bi bi-building" style="font-size:2rem; color: var(--accent)"></i>
                                        <div>
                                            <div style="font-weight:700; color:#fff">Barangay Management</div>
                                            <div class="mono-text" style="font-size:.7rem;color:#888">Admin Dashboard</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fp-screen-body">
                                    <div class="fp-stat-mini"><span>Residents</span><strong>1,204</strong></div>
                                    <div class="fp-stat-mini"><span>Certificates</span><strong>87</strong></div>
                                    <div class="fp-stat-mini"><span>Documents</span><strong>340</strong></div>
                                </div>
                                <div class="fp-screen-table">
                                    <div class="fp-table-row header">
                                        <span>Name</span><span>Type</span><span>Status</span>
                                    </div>
                                    <div class="fp-table-row">
                                        <span>Juan Dela Cruz</span><span>Certificate</span>
                                        <span class="badge-status done">Done</span>
                                    </div>
                                    <div class="fp-table-row">
                                        <span>Maria Santos</span><span>Clearance</span>
                                        <span class="badge-status pending">Pending</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 fp-info">
                        <span class="project-tag">⭐ Featured Project</span>
                        <h3 class="project-title">Barangay Management System</h3>
                        <p class="project-desc">
                            A web-based system to manage barangay resident records, certificate requests, and
                            official documentation. Features a responsive Bootstrap UI and streamlines operations
                            by digitizing manual record-keeping.
                        </p>
                        <div class="tech-stack-pills">
                            <span class="tech-pill">HTML</span>
                            <span class="tech-pill">CSS</span>
                            <span class="tech-pill">Bootstrap</span>
                            <span class="tech-pill">JavaScript</span>
                            <span class="tech-pill">PHP</span>
                            <span class="tech-pill">MySQL</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="btn btn-primary-custom btn-sm">
                                <i class="bi bi-github me-2"></i>View Code
                            </a>
                            <a href="#" class="btn btn-outline-custom btn-sm ms-2">
                                <i class="bi bi-box-arrow-up-right me-2"></i>Live Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Projects Grid -->
            <div class="row g-4 mt-2">
                @php
                $projects = [
                    [
                        'number'   => '01',
                        'icon'     => 'bi-shop',
                        'title'    => 'POS System',
                        'subtitle' => 'Desktop Application',
                        'desc'     => 'Desktop-based Point of Sale system for managing sales transactions, product inventory, and receipt generation with real-time stock updates and user authentication.',
                        'tech'     => ['C#', 'Visual Studio', 'MySQL'],
                        'color'    => '#4ade80',
                    ],
                    [
                        'number'   => '02',
                        'icon'     => 'bi-boxes',
                        'title'    => 'Inventory Management',
                        'subtitle' => 'Web Application',
                        'desc'     => 'Web-based inventory management system with full CRUD functionality for tracking products, stock levels, and transaction history with a clean PHP/MySQL backend.',
                        'tech'     => ['HTML', 'CSS', 'PHP', 'MySQL'],
                        'color'    => '#60a5fa',
                    ],
                    [
                        'number'   => '03',
                        'icon'     => 'bi-globe',
                        'title'    => 'Unicenter Website',
                        'subtitle' => 'Frontend / Internship',
                        'desc'     => 'Official business website for Unicenter Communication — built during internship. Translated design requirements into a structured, responsive semantic HTML/CSS layout.',
                        'tech'     => ['HTML', 'CSS'],
                        'color'    => '#f472b6',
                    ],
                    [
                        'number'   => '04',
                        'icon'     => 'bi-controller',
                        'title'    => 'TAKIPSILIM',
                        'subtitle' => 'Capstone Game',
                        'desc'     => 'Co-developed a desktop game as a capstone project using Unity engine and C# scripting, with 3D assets modeled and animated in Blender.',
                        'tech'     => ['Unity', 'C#', 'Blender'],
                        'color'    => '#fb923c',
                    ],
                ];
                @endphp

                @foreach($projects as $project)
                <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                    <div class="project-card">
                        <div class="project-card-top">
                            <div class="project-number mono-text">{{ $project['number'] }}</div>
                            <div class="project-icon" style="color: {{ $project['color'] }}">
                                <i class="bi {{ $project['icon'] }}"></i>
                            </div>
                        </div>
                        <div class="project-card-body">
                            <span class="project-subtitle mono-text">{{ $project['subtitle'] }}</span>
                            <h4 class="project-card-title">{{ $project['title'] }}</h4>
                            <p class="project-card-desc">{{ $project['desc'] }}</p>
                        </div>
                        <div class="project-card-footer">
                            <div class="tech-stack-pills small-pills">
                                @foreach($project['tech'] as $t)
                                    <span class="tech-pill">{{ $t }}</span>
                                @endforeach
                            </div>
                            <div class="card-links mt-3">
                                <a href="#" class="card-link" title="View Code">
                                    <i class="bi bi-github"></i>
                                </a>
                                <a href="#" class="card-link" title="Live Demo">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════
         EXPERIENCE SECTION
    ═══════════════════════════════════ -->
    <section id="experience" class="experience-section section-padding">
        <div class="container-fluid px-4 px-lg-5">

            <div class="section-label" data-aos="fade-right">
                <span class="mono-text">04 /</span> Experience
            </div>
            <h2 class="section-title" data-aos="fade-up">My <span class="accent-color">Journey</span></h2>

            <div class="timeline" data-aos="fade-up" data-aos-delay="100">

                <!-- Experience 1 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date mono-text">2026</div>
                        <span class="timeline-tag">Internship / OJT</span>
                        <h4 class="timeline-title">Web Developer — Unicenter Communication</h4>
                        <p class="timeline-org">Philippines</p>
                        <ul class="timeline-list">
                            <li>Designed and developed the official website for Unicenter Communication as part of my internship (OJT), serving as the company's public-facing web presence.</li>
                            <li>Built a responsive and professional layout using HTML5, CSS3, Bootstrap, and JavaScript to represent the company's brand and services online.</li>
                            <li>Managed the full development cycle independently — from initial design mockups through deployment and delivery.</li>
                        </ul>
                    </div>
                </div>

                <!-- Experience 2 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date mono-text">2026</div>
                        <span class="timeline-tag">Independent</span>
                        <h4 class="timeline-title">Full-Stack Web &amp; Software Developer — Coffee Shop Client</h4>
                        <p class="timeline-org">Philippines</p>
                        <ul class="timeline-list">
                            <li>Independently designed, developed, and deployed a fully functional POS and Inventory Management System for a local coffee shop.</li>
                            <li>Built the front-end with a clean, intuitive UI using HTML, CSS, and Bootstrap; implemented back-end logic with PHP and MySQL for transactions, stock tracking, and sales reports.</li>
                            <li>Handled the complete software lifecycle — from requirements gathering with the client, system design, development, testing, and handover.</li>
                        </ul>
                    </div>
                </div>

                <!-- Experience 3 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date mono-text">2022 – 2023</div>
                        <span class="timeline-tag">Freelance</span>
                        <h4 class="timeline-title">Freelance Front-End Developer — Self-Employed</h4>
                        <p class="timeline-org">Philippines</p>
                        <ul class="timeline-list">
                            <li>Took on freelance projects during first year of college, developing front-end interfaces for capstone projects of other students.</li>
                            <li>Designed and coded responsive web pages using HTML5, CSS3, JavaScript, and Bootstrap, aligned with each client's specifications.</li>
                            <li>Delivered clean, functional interfaces on time, building strong foundations in client communication and independent project management.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════
         CONTACT SECTION — EmailJS Powered
         Sends directly to jdnaces1145@gmail.com
    ═══════════════════════════════════ -->
    <section id="contact" class="contact-section section-padding">
        <div class="container-fluid px-4 px-lg-5">

            <div class="section-label" data-aos="fade-right">
                <span class="mono-text">05 /</span> Contact
            </div>
            <h2 class="section-title text-center" data-aos="fade-up">
                Let's <span class="accent-color">Connect</span>
            </h2>
            <p class="contact-subtext text-center" data-aos="fade-up" data-aos-delay="100">
                Have a project in mind? I'd love to hear about it. Send me a message and let's build something great.
            </p>

            <div class="row justify-content-center g-5 mt-2">

                <!-- ── Contact Info Panel ── -->
                <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="contact-info-panel">
                        <h5 class="contact-panel-title">Get in Touch</h5>

                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <span class="contact-info-label mono-text">Email</span>
                                <a href="mailto:jdnaces1145@gmail.com" class="contact-info-val">
                                    jdnaces1145@gmail.com
                                </a>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <span class="contact-info-label mono-text">Location</span>
                                <span class="contact-info-val">Valencia City, Philippines</span>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-clock-fill"></i>
                            </div>
                            <div>
                                <span class="contact-info-label mono-text">Availability</span>
                                <span class="contact-info-val">Open to Freelance &amp; Remote</span>
                            </div>
                        </div>

                        <div class="contact-socials">
                            <a href="https://github.com" target="_blank" class="social-btn" title="GitHub">
                                <i class="bi bi-github"></i>
                            </a>
                            <a href="https://linkedin.com" target="_blank" class="social-btn" title="LinkedIn">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="mailto:jdnaces1145@gmail.com" class="social-btn" title="Email">
                                <i class="bi bi-envelope-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ── EmailJS Contact Form ── -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">

                    {{-- ✅ Alert box — success/error messages rendered here by JS --}}
                    <div id="formAlert" class="mb-3"></div>

                    {{--
                        ✅ NO action="" or method="POST" — EmailJS sends 100% via JavaScript.
                           The form id="contactForm" is the JS hook in app.blade.php.
                    --}}
                    <form id="contactForm" class="contact-form" novalidate>
                        <div class="row g-3">

                            {{-- Name --}}
                            <div class="col-md-6">
                                <div class="form-group-custom">
                                    <input
                                        type="text"
                                        id="contact_name"
                                        name="from_name"
                                        class="form-control-custom"
                                        placeholder="Your Name"
                                        autocomplete="name"
                                        required
                                    >
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="col-md-6">
                                <div class="form-group-custom">
                                    <input
                                        type="email"
                                        id="contact_email"
                                        name="from_email"
                                        class="form-control-custom"
                                        placeholder="Your Email"
                                        autocomplete="email"
                                        required
                                    >
                                </div>
                            </div>

                            {{-- Subject --}}
                            <div class="col-12">
                                <div class="form-group-custom">
                                    <input
                                        type="text"
                                        id="contact_subject"
                                        name="subject"
                                        class="form-control-custom"
                                        placeholder="Subject"
                                        required
                                    >
                                </div>
                            </div>

                            {{-- Message --}}
                            <div class="col-12">
                                <div class="form-group-custom">
                                    <textarea
                                        id="contact_message"
                                        name="message"
                                        class="form-control-custom"
                                        placeholder="Your Message"
                                        rows="5"
                                        required
                                    ></textarea>
                                </div>
                            </div>

                            {{-- Submit --}}
                            <div class="col-12">
                                <button type="submit" id="submitBtn" class="btn btn-primary-custom w-100">
                                    Send Message <i class="bi bi-send-fill ms-2"></i>
                                </button>
                            </div>

                        </div>
                    </form>

                

                </div>{{-- end form col --}}

            </div>{{-- end row --}}
        </div>
    </section>

@endsection
