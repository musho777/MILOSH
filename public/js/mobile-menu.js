document.addEventListener("DOMContentLoaded", function () {
    const burger1 = document.querySelector(".burger1");
    const mobileMenu = document.querySelector(".mobile-menu");
    const mobileMenuClose = document.querySelector(".mobile-menu__close");
    console.log("Mobile menu close button found:", mobileMenuClose);
    const body = document.querySelector("body");
    const dropdownItems = document.querySelectorAll(
        ".mobile-menu__item--has-dropdown"
    );

    // Toggle mobile menu
    if (burger1) {
        burger1.addEventListener("click", function () {
            burger1.classList.toggle("active");
            mobileMenu.classList.toggle("active");
            body.classList.toggle("locked");
        });
    }

    // Close mobile menu with X button
    if (mobileMenuClose) {
        mobileMenuClose.addEventListener("click", function (e) {
            console.log("Close button clicked");
            e.preventDefault();
            e.stopPropagation();
            burger1.classList.remove("active");
            mobileMenu.classList.remove("active");
            body.classList.remove("locked");
        });

        // Also add touch event for mobile devices
        mobileMenuClose.addEventListener("touchstart", function (e) {
            console.log("Close button touched");
            e.preventDefault();
            e.stopPropagation();
            burger1.classList.remove("active");
            mobileMenu.classList.remove("active");
            body.classList.remove("locked");
        });
    } else {
        console.log("Mobile menu close button not found in DOM");
    }

    // Handle dropdown menus in mobile
    dropdownItems.forEach((item) => {
        const link = item.querySelector("a");
        link.addEventListener("click", function (e) {
            e.preventDefault();
            item.classList.toggle("active");
        });
    });

    // Close menu when clicking outside
    document.addEventListener("click", function (e) {
        if (mobileMenu && mobileMenu.classList.contains("active")) {
            // Don't close if clicking the close button - let its handler do it
            if (mobileMenuClose && mobileMenuClose.contains(e.target)) {
                return;
            }
            if (!mobileMenu.contains(e.target) && !burger1.contains(e.target)) {
                burger1.classList.remove("active");
                mobileMenu.classList.remove("active");
                body.classList.remove("locked");
            }
        }
    });

    // Close menu on window resize if screen gets larger
    window.addEventListener("resize", function () {
        if (window.innerWidth > 980) {
            burger1.classList.remove("active");
            mobileMenu.classList.remove("active");
            body.classList.remove("locked");
        }
    });
});
