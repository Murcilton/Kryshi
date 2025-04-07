import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { gsap, ScrollTrigger } from "gsap/all";
import Lenis from "@studio-freight/lenis";

gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", () => {
    gsap.utils.toArray("main section").forEach((section) => {
        gsap.from(section, {
            opacity: 0,
            y: 30,
            duration: 0.2,
            scrollTrigger: {
                trigger: section,
                start: "top 80%",
                end: "top 30%",
                scrub: true,
            },
        });
    });

    gsap.to(".divider", {
        duration: 0.2,
        scrollTrigger: {
            trigger: ".divider",
            start: "top 80%",
            end: "bottom top",
            scrub: true,
        },
        position: fixed,
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const tl = gsap.timeline();

    tl.from("header > *", {
        duration: 1,
        opacity: 0,
        y: -10,
        x: -8,
        ease: "back.out(1.3)",
        stagger: 0.2,
    });

    tl.from(
        ".divider",
        {
            duration: 0.7,
            opacity: 0,
            ease: "back.out(1.1)",
            y: -50,
        },
        "-=1"
    );

    tl.from(
        ".roofOne",
        {
            duration: 0.7,
            opacity: 0,
            rotate: 2,
            y: -20,
            x: -8,
            ease: "back.out(1.3)",
        },
        "-=0.5"
    );

    tl.from(
        ".roofTwo",
        {
            duration: 0.7,
            opacity: 0,
            rotate: -2,
            y: 30,
            x: 5,
            ease: "back.out(1.3)",
        },
        "-=0.5"
    );
    tl.from(
        ".roofTwo .content",
        {
            duration: 0.7,
            opacity: 0,
            rotate: -2,
            y: 5,
            ease: "back.out(1.3)",
        },
        "-=0.5"
    );

    tl.from(
        ".offer-left .left",
        {
            duration: 0.7,
            opacity: 0,
            rotate: 1,
            y: -10,
            x: -8,
            ease: "back.out(1.3)",
        },
        "-=0.5"
    );

    tl.from(
        ".offer-right .right",
        {
            duration: 0.7,
            opacity: 0,
            rotate: -1,
            y: -10,
            x: -8,
            ease: "back.out(1.3)",
        },
        "-=0.5"
    );

    gsap.to(".divider", {
        scrollTrigger: {
            trigger: ".divider", 
            start: "top top", 
            end: "900", 
            scrub: true, 
            pin: true, 
        },
        ease: "back.out(1.3)", 
        y: -70, 
    });

    ScrollTrigger.create({
        trigger: ".divider",
        start: "top top",
        end: "bottom top",
        onLeaveBack: () => {
            gsap.to(".divider", { y: 0 }); 
        },
    });

    const lenis = new Lenis({
        lerp: 0.08,
        smoothWheel: true,
        wheelMultiplier: 1.2, 
    });

    lenis.on('scroll', ScrollTrigger.update)

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // ========================= Карточки ===================
gsap.fromTo(".cards-container", 
    { opacity: 1 },
    {
      opacity: 0,
      scrollTrigger: {
        trigger: ".cards-container",
        start: "top top",
        end: "bottom top",
        scrub: 1
      }
    }
  )
  
  gsap.fromTo(".card-left",
    { opacity: 0, x: -100 },
    {
      opacity: 1,
      x: 0,
      scrollTrigger: {
        trigger: ".cards-container",
        start: "top 60%",
        end: "top 30%",
        scrub: 1
      }
    }
  )
  
  gsap.fromTo(".card-middle",
    { opacity: 0, y: 100 },
    {
      opacity: 1,
      y: 0,
      scrollTrigger: {
        trigger: ".cards-container",
        start: "top 60%",
        end: "top 20%",
        scrub: 1
      }
    }
  )
  
  gsap.fromTo(".card-right",
    { opacity: 0, x: 100 },
    {
      opacity: 1,
      x: 0,
      scrollTrigger: {
        trigger: ".cards-container",
        start: "top 60%",
        end: "top 10%",
        scrub: 1
      }
    }
  )

  gsap.fromTo(".card .content",
    { opacity: 0, y: 50 },
    {
      opacity: 1,
      y: 0,
      scrollTrigger: {
        trigger: ".card",
        start: "top 90%",
        end: "top 10%",
        scrub: 1
      }
    }
  )
  
  gsap.fromTo(".card img",
    { opacity: 0, x: 50 },
    {
      opacity: 1,
      x: 0,
      scrollTrigger: {
        trigger: ".card",
        start: "top 90%",
        end: "top 10%",
        scrub: 1
      }
    }
  )

  gsap.fromTo(".cabinet",
    { opacity: 0, y: 30 },
    {
      opacity: 1,
      y: 0,
      scrollTrigger: {
        trigger: ".cabinet",
        start: "top 80%",
        end: "top 100%",
        scrub: 1
      }
    }
  )

});