import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// nav js
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener("click", () => {
    //Animate Links
    navLinks.classList.toggle("open");
    links.forEach((link) => {
        link.classList.toggle("fade");
    });

    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});

    //Hamburger Animation
    

// end nav js


// serach foam script
const selectedAll = document.querySelectorAll(".wrapper-dropdown");

selectedAll.forEach((selected) => {
    const optionsContainer = selected.children[2];
    const optionsList = selected.querySelectorAll("div.wrapper-dropdown li");

    selected.addEventListener("click", () => {
        let arrow = selected.children[1];

        if (selected.classList.contains("active")) {
            handleDropdown(selected, arrow, false);
        } else {
            let currentActive = document.querySelector(
                ".wrapper-dropdown.active"
            );

            if (currentActive) {
                let anotherArrow = currentActive.children[1];
                handleDropdown(currentActive, anotherArrow, false);
            }

            handleDropdown(selected, arrow, true);
        }
    });

    // update the display of the dropdown
    for (let o of optionsList) {
        o.addEventListener("click", () => {
            selected.querySelector(".selected-display").innerHTML = o.innerHTML;
        });
    }
});

// check if anything else ofther than the dropdown is clicked
window.addEventListener("click", function (e) {
    if (e.target.closest(".wrapper-dropdown") === null) {
        closeAllDropdowns();
    }
});

// close all the dropdowns
function closeAllDropdowns() {
    const selectedAll = document.querySelectorAll(".wrapper-dropdown");
    selectedAll.forEach((selected) => {
        const optionsContainer = selected.children[2];
        let arrow = selected.children[1];

        handleDropdown(selected, arrow, false);
    });
}

// open all the dropdowns
function handleDropdown(dropdown, arrow, open) {
    if (open) {
        arrow.classList.add("rotated");
        dropdown.classList.add("active");
    } else {
        arrow.classList.remove("rotated");
        dropdown.classList.remove("active");
    }
}
// end serach foam script

// drverse scrolle script

const slidesContainer = document.querySelector(".slides-container");
const slideWidth = slidesContainer.querySelector(".slide").clientWidth;
const prevButton = document.querySelector(".prev");
const nextButton = document.querySelector(".next");

nextButton.addEventListener("click", () => {
    slidesContainer.scrollLeft += slideWidth;
});

prevButton.addEventListener("click", () => {
    slidesContainer.scrollLeft -= slideWidth;
});

// end drverse scrolle script

// counter script
const counters = document.querySelectorAll(".count");
const speed = 10;

counters.forEach((counter) => {
    const updateCount = () => {
        const target = parseInt(+counter.getAttribute("data-target"));
        const count = parseInt(+counter.innerText);
        const increment = Math.trunc(target / speed);
        console.log(increment);

        if (count < target) {
            counter.innerText = count + increment;
            setTimeout(updateCount, 1);
        } else {
            count.innerText = target;
        }
    };
    updateCount();
});

// end counter script

// testimonials script

// end testimonials script

// single car view js
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides((slideIndex += n));
}

function currentSlide(n) {
    showSlides((slideIndex = n));
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    let captionText = document.getElementById("caption");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}

// end single car view js