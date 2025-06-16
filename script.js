// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, initializing mobile menu...');
    
    // Navigation toggle for mobile
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.querySelector('.nav-menu');

    console.log('Nav toggle element:', navToggle);
    console.log('Nav menu element:', navMenu);

    if (navToggle && navMenu) {
        // Simple click handler for menu toggle
        navToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            console.log('Toggle clicked');
            
            // Toggle menu visibility
            navMenu.classList.toggle('active');
            navToggle.classList.toggle('active');
            
            console.log('Menu active:', navMenu.classList.contains('active'));
        });

        // Close mobile menu when clicking on a link
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                console.log('Nav link clicked, closing menu');
                navMenu.classList.remove('active');
                navToggle.classList.remove('active');
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            // Check if click is outside menu and toggle button
            if (!navMenu.contains(event.target) && !navToggle.contains(event.target)) {
                if (navMenu.classList.contains('active')) {
                    console.log('Clicking outside menu, closing');
                    navMenu.classList.remove('active');
                    navToggle.classList.remove('active');
                }
            }
        });

        // Prevent menu from closing when clicking inside it
        navMenu.addEventListener('click', function(e) {
            e.stopPropagation();
        });

        console.log('Mobile menu initialized successfully');
    } else {
        console.error('Navigation elements not found!');
        console.log('Available elements with nav-toggle id:', document.querySelectorAll('#nav-toggle'));
        console.log('Available elements with nav-menu class:', document.querySelectorAll('.nav-menu'));
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

    // Active navigation highlighting
    window.addEventListener('scroll', () => {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');
        
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= sectionTop - 200) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });

    // Header background on scroll
    window.addEventListener('scroll', () => {
        const header = document.querySelector('.header');
        if (window.scrollY > 100) {
            header.style.background = 'rgba(255, 255, 255, 0.98)';
        } else {
            header.style.background = 'rgba(255, 255, 255, 0.95)';
        }
    });

    // Animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.news-card, .program-card, .vm-card').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });

    // Console log for development
    console.log('BEM FST UNSAM Website loaded successfully!');
});
