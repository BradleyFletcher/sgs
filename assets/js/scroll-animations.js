/**
 * Scroll animations using Intersection Observer API
 * Adds modern fade-in and slide-up effects when elements enter viewport
 */

document.addEventListener("DOMContentLoaded", function () {
  // Animation configuration
  const animationConfig = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  };

  // Create intersection observer
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        // Add staggered delay for multiple items
        const delay = entry.target.dataset.delay || 0;
        setTimeout(() => {
          entry.target.classList.add("animate-in");
        }, delay);

        // Unobserve after animation to improve performance
        observer.unobserve(entry.target);
      }
    });
  }, animationConfig);

  // Select all elements with animation classes
  const animatedElements = document.querySelectorAll(
    ".fade-in-up, .fade-in-left, .fade-in-right, .fade-in, .scale-in, .slide-in-left, .slide-in-right"
  );

  // Observe each element
  animatedElements.forEach((element, index) => {
    // Add staggered delays for elements in the same container
    const container = element.closest("[data-stagger]");
    if (container) {
      const staggerDelay = parseInt(container.dataset.stagger) || 100;
      const siblings = Array.from(
        container.querySelectorAll(
          ".fade-in-up, .fade-in-left, .fade-in-right, .fade-in, .scale-in, .slide-in-left, .slide-in-right"
        )
      );
      const elementIndex = siblings.indexOf(element);
      element.dataset.delay = elementIndex * staggerDelay;
    }

    observer.observe(element);
  });

  // Counter animation for stats
  const counters = document.querySelectorAll("[data-counter]");
  const counterObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const target = entry.target;
          const finalValue = parseInt(target.dataset.counter);
          const duration = parseInt(target.dataset.duration) || 2000;
          const increment = finalValue / (duration / 16); // 60fps
          let currentValue = 0;

          const updateCounter = () => {
            currentValue += increment;
            if (currentValue < finalValue) {
              target.textContent =
                Math.floor(currentValue) + (target.dataset.suffix || "");
              requestAnimationFrame(updateCounter);
            } else {
              target.textContent = finalValue + (target.dataset.suffix || "");
            }
          };

          updateCounter();
          counterObserver.unobserve(target);
        }
      });
    },
    { threshold: 0.5 }
  );

  counters.forEach((counter) => counterObserver.observe(counter));

  // Parallax effect for hero section
  const heroSection = document.querySelector(".hero-parallax");
  if (heroSection) {
    window.addEventListener("scroll", () => {
      const scrolled = window.pageYOffset;
      const parallaxElements =
        heroSection.querySelectorAll(".parallax-element");
      parallaxElements.forEach((element) => {
        const speed = element.dataset.speed || 0.5;
        element.style.transform = `translateY(${scrolled * speed}px)`;
      });
    });
  }
});
