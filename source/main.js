// Check for theme preference in local storage
const currentTheme = localStorage.getItem('theme');

// Apply the saved theme or default to light theme
if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);
}

// Toggle between light and dark themes
document.getElementById('themeToggle').addEventListener('change', function() {
    if (this.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light');
    }
});
if(currentTheme === 'dark'){
    document.getElementById('themeToggle').checked = true;
    }


// типы пользователей

const userTypeSelect = document.getElementById('userType');
const subjectFields = document.getElementById('subjectFields');

if (userTypeSelect) {
    userTypeSelect.addEventListener('change', function() {

        subjectFields.classList.add('hidden');

        if (userTypeSelect.value === 'teacher') {
            subjectFields.classList.remove('hidden');
        }
        else {
            subjectFields.classList.add('hidden')
        }
    });
}

// offcanvas
document.addEventListener('DOMContentLoaded', function() {
    const left = document.querySelector('.left');
    const right = document.querySelector('.right');
    const breakpoint = 800;
    const offcanvas = document.querySelector('.offcanvas')
    function checkWindowSize() {
        if (window.innerWidth < breakpoint) {
            left.classList.add('hidden');
            if (offcanvas.classList.contains('open')) {
                offcanvas.classList.remove('open');
            }
        } else {
            left.classList.remove('hidden');
        }
    }
    checkWindowSize();
    window.addEventListener('resize', checkWindowSize);
});

document.querySelector('.offcanvas').addEventListener('click', function() {
    const left = document.querySelector('.left');
    this.classList.toggle('open');
    left.classList.toggle('hidden');


});

