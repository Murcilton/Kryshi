import './bootstrap';
import { gsap } from "gsap";

document.addEventListener('DOMContentLoaded', () => {
    const tl = gsap.timeline();

    tl.from('header > *', {
        duration: 1,
        opacity: 0,
        y: -10,
        x: -8,
        ease: 'back.out(1.3)',
        stagger: 0.2
    });

    tl.from('.divider', {
        duration: 0.7,
        opacity: 0,
        ease: 'back.out(1.1)',
        y: -50,
    }, "-=1");

    tl.from('.roofOne', {
        duration: 0.7,
        opacity: 0,
        rotate: 2,
        y: -20,
        x: -8,
        ease: 'back.out(1.3)'
    }, "-=0.5");

    tl.from('.roofTwo', {
        duration: 0.7,
        opacity: 0,
        rotate: -2,
        y: 30,
        x: 5,
        ease: 'back.out(1.3)'
    }, "-=0.5");
    tl.from('.roofTwo .content', {
        duration: 0.7,
        opacity: 0,
        rotate: -2,
        y: 5,
        ease: 'back.out(1.3)'
    }, "-=0.5");

    tl.from('.offer-left .left', {
        duration: 0.7,
        opacity: 0,
        y: -10,
        x: -8,
        ease: 'back.out(1.3)'
    }, "-=0.5");

    tl.from('.offer-right .right', {
        duration: 0.7,
        opacity: 0,
        y: -10,
        x: -8,
        ease: 'back.out(1.3)'
    }, "-=0.5");

    
});

