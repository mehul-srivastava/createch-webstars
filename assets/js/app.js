const counters = document.querySelectorAll('#counter');
const speed = 100;
const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");
const newsletterBtn = document.getElementById('submitEmail');

//navbar mobile menu
btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});

//newsletter submit
newsletterBtn.addEventListener('click', () => {
    var email = document.getElementById('hero-field').value;
    alert(email+' has been successfully added to our mailing list. Thank you for your patience!');
});


//counter section
counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        const inc = target / speed;

        if (count < target) {
            counter.innerText = count + inc;
            setTimeout(updateCount, 1);
        } else {
            counter.innerText = target;
        }
    };

    updateCount();
});