// Set dark mode
const toggleDarkBtn = document.querySelectorAll('.toggle-dark-btn');
const footerSection = document.querySelector('footer.footer');
const responsiveLink = document.querySelectorAll('a.responsive-link');
const bottomNav = document.querySelector('nav.navbar .bottom-nav');

toggleDarkBtn.forEach((btn) => {
    btn.addEventListener('click', function () {
        if (this.classList.contains('light-mode')) {
            this.classList.toggle('light-mode');
            this.classList.add('dark-mode');
            this.style.setProperty('--pseudo-left-padding','calc(100% - 18px - 3px)');
        } else {
            this.classList.toggle('dark-mode');
            this.classList.add('light-mode');
            this.style.setProperty('--pseudo-left-padding','3px');
        }
        document.body.classList.toggle('dark-mode');
        bottomNav.classList.toggle('light-nav');
        bottomNav.classList.toggle('dark-nav');
        footerSection.classList.toggle('dark-mode');
        responsiveLink.forEach(function (link) {
            link.classList.toggle('light-mode-link');
            link.classList.toggle('dark-mode-link');
        });
    });
});
