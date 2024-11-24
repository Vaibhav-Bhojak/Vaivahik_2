var tl = gsap.timeline();
tl.to(".nav", {
  x: 20,
  ease: "power2.in",
});

tl.from("#head1", {
  opacity: 0,
});

tl.to("#head1", {
  opacity: 1,
});

tl.from(".sec-btn", {
  scale: 0,
});

tl.to(".sec-btn", {
  scale: 1,
});

gsap.from(".review-one", {
  scrollTrigger: ".review-one",
  opacity: 0,
  delay: 0.5,
});

gsap.from(".review-three", {
  scrollTrigger: ".review-three",
  opacity: 0,
  delay: 0.5,
});

// Initialize Lenis
const lenis = new Lenis();

// Listen for the scroll event and log the event data
lenis.on("scroll", (e) => {
  console.log(e);
});

// Use requestAnimationFrame to continuously update the scroll
function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);
