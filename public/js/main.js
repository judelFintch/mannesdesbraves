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

    const counters = document.querySelectorAll("[data-count]");
    if (counters.length) {
        const animateCounter = (el) => {
            const endValue = parseInt(el.dataset.count, 10);
            if (Number.isNaN(endValue)) return;
            const suffix = el.textContent.replace(/[0-9]/g, "").trim();
            const duration = 1200;
            const startTime = performance.now();

            const step = (now) => {
                const progress = Math.min((now - startTime) / duration, 1);
                const value = Math.floor(progress * endValue);
                el.textContent = `${value}${suffix}`;
                if (progress < 1) {
                    requestAnimationFrame(step);
                }
            };

            requestAnimationFrame(step);
        };

        const observer = new IntersectionObserver(
            (entries, obs) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        obs.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.6 }
        );

        counters.forEach((counter) => observer.observe(counter));
    }
})();
