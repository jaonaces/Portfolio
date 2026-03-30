<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jared Delle Dave Naces — Full-Stack Developer Portfolio">
    <title>Jared Naces | Full-Stack Developer</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Mono:wght@300;400;500&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Devicons (for skill icons) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

    <!-- Noise Overlay -->
    <div class="noise-overlay"></div>

    <!-- Cursor -->
    <div class="custom-cursor" id="cursor"></div>
    <div class="custom-cursor-dot" id="cursorDot"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-dark fixed-top" id="mainNav">
        <div class="container-fluid px-4 px-lg-5">
            <a class="navbar-brand mono-text" href="#hero">
                <span class="accent-color">&lt;</span>JN<span class="accent-color">/&gt;</span>
            </a>
            <div class="nav-links d-none d-lg-flex gap-4 align-items-center">
                <a href="#about"      class="nav-link-item">About</a>
                <a href="#skills"     class="nav-link-item">Skills</a>
                <a href="#projects"   class="nav-link-item">Projects</a>
                <a href="#experience" class="nav-link-item">Experience</a>
                <a href="#contact"    class="nav-link-item btn-nav-contact">Contact</a>
            </div>
            <button class="hamburger d-lg-none" id="menuToggle">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-inner">
            <a href="#about"      class="mobile-nav-link">About</a>
            <a href="#skills"     class="mobile-nav-link">Skills</a>
            <a href="#projects"   class="mobile-nav-link">Projects</a>
            <a href="#experience" class="mobile-nav-link">Experience</a>
            <a href="#contact"    class="mobile-nav-link">Contact</a>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container-fluid px-4 px-lg-5">
            <div class="footer-inner">
                <p class="mono-text footer-copy">
                    <span class="accent-color">©</span> {{ date('Y') }} Jared Delle Dave Naces
                   
                </p>
                <div class="footer-socials">
                    <a href="mailto:jdnaces1145@gmail.com" class="footer-icon" title="Email">
                        <i class="bi bi-envelope"></i>
                    </a>
                    <a href="https://github.com/jaonaces" target="_blank" class="footer-icon" title="GitHub">
                        <i class="bi bi-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/jared-delle-dave-naces-326ba03ba/" target="_blank" class="footer-icon" title="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- ═══════════════════════════════════════════════════
         SCRIPTS — Order matters: Bootstrap → AOS → EmailJS
    ═══════════════════════════════════════════════════ -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- EmailJS SDK v4 -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

    <script>
    // ─────────────────────────────────────────────────────
    // 1. EMAILJS — Initialize with your Public Key
    // ─────────────────────────────────────────────────────
    (function () {
        emailjs.init({
            publicKey: 's00foB5zHsFlxD-Nb',
        });
    })();

    // ─────────────────────────────────────────────────────
    // 2. AOS INIT
    // ─────────────────────────────────────────────────────
    AOS.init({ duration: 800, once: true, offset: 80 });

    // ─────────────────────────────────────────────────────
    // 3. CUSTOM CURSOR
    // ─────────────────────────────────────────────────────
    const cursor    = document.getElementById('cursor');
    const cursorDot = document.getElementById('cursorDot');

    document.addEventListener('mousemove', (e) => {
        cursor.style.left    = e.clientX + 'px';
        cursor.style.top     = e.clientY + 'px';
        cursorDot.style.left = e.clientX + 'px';
        cursorDot.style.top  = e.clientY + 'px';
    });

    document.querySelectorAll('a, button, .project-card, .skill-chip').forEach(el => {
        el.addEventListener('mouseenter', () => cursor.classList.add('cursor-hover'));
        el.addEventListener('mouseleave', () => cursor.classList.remove('cursor-hover'));
    });

    // ─────────────────────────────────────────────────────
    // 4. NAVBAR SCROLL EFFECT
    // ─────────────────────────────────────────────────────
    window.addEventListener('scroll', () => {
        document.getElementById('mainNav')
                .classList.toggle('scrolled', window.scrollY > 50);
    });

    // ─────────────────────────────────────────────────────
    // 5. MOBILE MENU TOGGLE
    // ─────────────────────────────────────────────────────
    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('open');
        mobileMenu.classList.toggle('open');
    });

    document.querySelectorAll('.mobile-nav-link').forEach(link => {
        link.addEventListener('click', () => {
            menuToggle.classList.remove('open');
            mobileMenu.classList.remove('open');
        });
    });

    // ─────────────────────────────────────────────────────
    // 6. TYPEWRITER EFFECT
    // ─────────────────────────────────────────────────────
    const phrases  = ['Full-Stack Developer', 'PHP & Laravel Expert', 'C# Desktop Developer', 'UI/UX Enthusiast'];
    let phraseIndex = 0, charIndex = 0, isDeleting = false;
    const typeEl    = document.getElementById('typewriter');

    function type() {
        if (!typeEl) return;
        const current = phrases[phraseIndex];
        typeEl.textContent = isDeleting
            ? current.substring(0, charIndex--)
            : current.substring(0, charIndex++);

        if (!isDeleting && charIndex === current.length + 1) {
            isDeleting = true;
            setTimeout(type, 1500);
            return;
        }
        if (isDeleting && charIndex === 0) {
            isDeleting   = false;
            phraseIndex  = (phraseIndex + 1) % phrases.length;
        }
        setTimeout(type, isDeleting ? 60 : 100);
    }
    type();

    // ─────────────────────────────────────────────────────
    // 7. SCROLL PROGRESS BAR
    // ─────────────────────────────────────────────────────
    window.addEventListener('scroll', () => {
        const prog = document.getElementById('scrollProgress');
        if (!prog) return;
        const scrolled  = window.scrollY;
        const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
        prog.style.width = ((scrolled / maxScroll) * 100) + '%';
    });

    // ─────────────────────────────────────────────────────
    // 8. COUNTER ANIMATION
    // ─────────────────────────────────────────────────────
    function animateCounter(el) {
        const target = parseInt(el.getAttribute('data-target'));
        const suffix = el.getAttribute('data-suffix') || '';
        const step   = target / (1500 / 16);
        let current  = 0;

        const tick = () => {
            current = Math.min(current + step, target);
            el.textContent = Math.floor(current) + suffix;
            if (current < target) requestAnimationFrame(tick);
        };
        requestAnimationFrame(tick);
    }

    const counterObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.querySelectorAll('[data-target]').forEach(animateCounter);
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    const statsSection = document.getElementById('statsRow');
    if (statsSection) counterObserver.observe(statsSection);

    // ─────────────────────────────────────────────────────
    // 9. EMAILJS CONTACT FORM — sends to jdnaces1145@gmail.com
    // ─────────────────────────────────────────────────────
    const contactForm = document.getElementById('contactForm');

    if (contactForm) {

        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // ── Read field values ──
            const senderName    = document.getElementById('contact_name').value.trim();
            const senderEmail   = document.getElementById('contact_email').value.trim();
            const emailSubject  = document.getElementById('contact_subject').value.trim();
            const emailMessage  = document.getElementById('contact_message').value.trim();

            // ── Basic client-side validation ──
            if (!senderName || !senderEmail || !emailSubject || !emailMessage) {
                showAlert('error', '<i class="bi bi-exclamation-triangle-fill me-2"></i>Please fill in all fields before sending.');
                return;
            }

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(senderEmail)) {
                showAlert('error', '<i class="bi bi-exclamation-triangle-fill me-2"></i>Please enter a valid email address.');
                return;
            }

            // ── Show loading state ──
            const submitBtn = document.getElementById('submitBtn');
            submitBtn.disabled     = true;
            submitBtn.innerHTML    = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Sending...';

            // ── Template parameters — MUST match your EmailJS template variables ──
            const templateParams = {
                from_name  : senderName,
                from_email : senderEmail,
                subject    : emailSubject,
                message    : emailMessage,
                reply_to   : senderEmail,
                to_email   : 'jdnaces1145@gmail.com',
            };

            // ── Send via EmailJS ──
            emailjs.send('service_8496bot', 'template_gtq6oa5', templateParams)

                .then(function (response) {
                    console.log('EmailJS SUCCESS:', response.status, response.text);
                    showAlert(
                        'success',
                        `<i class="bi bi-check-circle-fill me-2"></i>
                         Message sent successfully! Thanks, <strong>${senderName}</strong> —
                         I'll reply to <strong>${senderEmail}</strong> soon.`
                    );
                    contactForm.reset();
                })

                .catch(function (error) {
                    console.error('EmailJS FAILED:', error);
                    showAlert(
                        'error',
                        `<i class="bi bi-x-circle-fill me-2"></i>
                         Failed to send (${error.text || 'network error'}).
                         Please email me directly at
                         <a href="mailto:jdnaces1145@gmail.com" style="color:inherit;font-weight:600;">
                             jdnaces1145@gmail.com
                         </a>`
                    );
                })

                .finally(function () {
                    submitBtn.disabled  = false;
                    submitBtn.innerHTML = 'Send Message <i class="bi bi-send-fill ms-2"></i>';
                });
        });
    }

    // ── Helper: render alert box ──
    function showAlert(type, html) {
        const alertBox = document.getElementById('formAlert');
        if (!alertBox) return;

        alertBox.innerHTML = `
            <div class="alert-custom ${type}" role="alert">
                ${html}
            </div>`;

        // Auto-dismiss success after 8 seconds
        if (type === 'success') {
            setTimeout(() => {
                alertBox.innerHTML = '';
            }, 8000);
        }

        // Scroll alert into view smoothly
        alertBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
    </script>

    @stack('scripts')
</body>
</html>
