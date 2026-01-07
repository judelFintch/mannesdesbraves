(function () {
    "use strict";

    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");

    if (mobileMenuButton && mobileMenu) {
        const toggleMenu = () => {
            const isOpen = mobileMenu.classList.toggle("hidden") === false;
            mobileMenuButton.setAttribute("aria-expanded", isOpen ? "true" : "false");
            mobileMenu.setAttribute("aria-hidden", isOpen ? "false" : "true");
        };

        mobileMenuButton.addEventListener("click", toggleMenu);

        document.addEventListener("click", (event) => {
            if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                if (!mobileMenu.classList.contains("hidden")) {
                    mobileMenu.classList.add("hidden");
                    mobileMenuButton.setAttribute("aria-expanded", "false");
                    mobileMenu.setAttribute("aria-hidden", "true");
                }
            }
        });

        document.addEventListener("keydown", (event) => {
            if (event.key === "Escape" && !mobileMenu.classList.contains("hidden")) {
                mobileMenu.classList.add("hidden");
                mobileMenuButton.setAttribute("aria-expanded", "false");
                mobileMenu.setAttribute("aria-hidden", "true");
                mobileMenuButton.focus();
            }
        });

        mobileMenu.querySelectorAll("a").forEach((link) => {
            link.addEventListener("click", () => {
                mobileMenu.classList.add("hidden");
                mobileMenuButton.setAttribute("aria-expanded", "false");
                mobileMenu.setAttribute("aria-hidden", "true");
            });
        });
    }
})();
