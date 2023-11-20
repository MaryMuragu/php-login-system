// Get references to the menu icon button and the navigation menu
const menuIcon = document.getElementById('menuIcon');
const mainMenu = document.getElementById('mainMenu');

// Add a click event listener to the menu icon
menuIcon.addEventListener('click', function() {
    if (mainMenu.style.display === 'block') {
        mainMenu.style.display = 'none'; // Hide the menu
    } else {
        mainMenu.style.display = 'block'; // Show the menu
    }
});
