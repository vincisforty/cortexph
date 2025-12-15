document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Drawer Logic
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const closeBtn = document.getElementById('closeMobileMenuBtn');
    const backdrop = document.getElementById('mobileMenuBackdrop');
    const panel = document.getElementById('mobileMenuPanel');
    const mobileLinks = document.querySelectorAll('.mobile-link');
    
    function openMenu() {
        backdrop.classList.remove('opacity-0', 'pointer-events-none');
        panel.classList.remove('translate-x-full');
        document.body.style.overflow = 'hidden';
    }
    
    function closeMenu() {
        backdrop.classList.add('opacity-0', 'pointer-events-none');
        panel.classList.add('translate-x-full');
        document.body.style.overflow = '';
    }
    
    if (mobileBtn) mobileBtn.addEventListener('click', openMenu);
    if (closeBtn) closeBtn.addEventListener('click', closeMenu);
    if (backdrop) backdrop.addEventListener('click', closeMenu);
    
    mobileLinks.forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // Smooth Scrolling for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const headerOffset = 80;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth"
                });
            }
        });
    });

    // Navbar Scroll Effect
    const navbar = document.getElementById('navbar');
    
    function updateNavbar() {
        if (window.scrollY > 20) {
            navbar.classList.add('bg-slate-900/90', 'backdrop-blur-md', 'shadow-lg', 'border-b', 'border-white/10');
        } else {
            navbar.classList.remove('bg-slate-900/90', 'backdrop-blur-md', 'shadow-lg', 'border-b', 'border-white/10');
        }
    }
    
    window.addEventListener('scroll', updateNavbar);
    updateNavbar(); // Check on load

    // Form Submission with FormSubmit.co
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const btn = this.querySelector('button[type="submit"]');
            const originalText = btn.innerText;
            const formData = new FormData(this);
            
            // Loading state
            btn.innerText = 'Sending...';
            btn.disabled = true;
            
            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    // Success state
                    btn.innerText = 'Message Sent!';
                    btn.classList.remove('from-cortex-primary', 'to-cortex-secondary');
                    btn.classList.add('bg-green-500');
                    
                    contactForm.reset();
                    
                    // Show alert
                    const name = formData.get('name') || 'there';
                    alert(`Thanks ${name}! We've received your message.`);
                    
                    // Reset button after 3 seconds
                    setTimeout(() => {
                        btn.innerText = originalText;
                        btn.disabled = false;
                        btn.classList.remove('bg-green-500');
                        btn.classList.add('from-cortex-primary', 'to-cortex-secondary');
                    }, 3000);
                } else {
                    return response.json().then(data => {
                        throw new Error(data.message || 'Form submission failed');
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                btn.innerText = 'Error!';
                alert('Oops! There was a problem submitting your form. Please try again.');
                
                // Reset button
                btn.disabled = false;
                btn.innerText = originalText;
            });
        });
    }

    // AOS Animation Initialization
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 50
    });
});
