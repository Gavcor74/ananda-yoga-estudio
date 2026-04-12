const revealItems = document.querySelectorAll(
  ".hero-content, .hero-card, .trust-item, .info-card, .quote, .quote-support, .service-card, .check-list p, .timeline-item, .contact-box, .contact-panel"
);

revealItems.forEach((item, index) => {
  item.classList.add("reveal");
  item.style.transitionDelay = `${index * 70}ms`;
});

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) {
        return;
      }

      entry.target.classList.add("is-visible");
      observer.unobserve(entry.target);
    });
  },
  { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
);

revealItems.forEach((item) => observer.observe(item));
