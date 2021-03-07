const tl = gsap.timeline({defaults: { ease: "power1.out"} });

tl.to(".nav", {opacity:0});
tl.to(".slider", { y:"0%", duration: 1, delay: 0.5});
tl.to(".titre", { y:"0%", duration: 1.5});

