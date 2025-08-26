function redirecionar(url) {
    window.location.href = url;
}

function destacar(element) {
    element.classList.add('ativo');
    setTimeout(() => {
        element.classList.remove('ativo');
    }, 300);
}

document.addEventListener('DOMContentLoaded', function() {
    const reveals = document.querySelectorAll('.reveal');

    function revealOnScroll() {
        for (let i = 0; i < reveals.length; i++) {
            let windowHeight = window.innerHeight;
            let elementTop = reveals[i].getBoundingClientRect().top;
            let elementVisible = 100;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add('visible');
            }
        }
    }

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll();
});
