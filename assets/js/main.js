// Toggle Menu

const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });


// Dropdown Menu

const profileButton = document.getElementById('profile-menu-button');
const profileMenu = document.getElementById('profile-menu');

profileButton.addEventListener('click', () => {
    profileMenu.classList.toggle('hidden');
});

document.addEventListener('click', (event) => {
    if (!profileButton.contains(event.target) && !profileMenu.contains(event.target)) {
        profileMenu.classList.add('hidden');
    }
});



