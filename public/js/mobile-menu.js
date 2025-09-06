document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelector('.burger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const body = document.querySelector('body');
    const dropdownItems = document.querySelectorAll('.mobile-menu__item--has-dropdown');

    // Toggle mobile menu
    if (burger) {
        burger.addEventListener('click', function() {
            burger.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            body.classList.toggle('locked');
        });
    }

    // Handle dropdown menus in mobile
    dropdownItems.forEach(item => {
        const link = item.querySelector('a');
        link.addEventListener('click', function(e) {
            e.preventDefault();
            item.classList.toggle('active');
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (mobileMenu && mobileMenu.classList.contains('active')) {
            if (!mobileMenu.contains(e.target) && !burger.contains(e.target)) {
                burger.classList.remove('active');
                mobileMenu.classList.remove('active');
                body.classList.remove('locked');
            }
        }
    });

    // Close menu on window resize if screen gets larger
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            burger.classList.remove('active');
            mobileMenu.classList.remove('active');
            body.classList.remove('locked');
        }
    });
});