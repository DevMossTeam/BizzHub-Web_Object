document.addEventListener('DOMContentLoaded', function() {
    const submenuLinks = document.querySelectorAll('aside ul li > a');

    submenuLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            const submenu = this.nextElementSibling;
            if (submenu && submenu.classList.contains('submenu')) {
                event.preventDefault();
                toggleSubmenu(submenu);
            }
        });
    });
});

function toggleSubmenu(submenuId) {
    const submenu = document.getElementById(submenuId);
    if (submenu.style.maxHeight) {
        submenu.style.maxHeight = null;
    } else {
        submenu.style.maxHeight = submenu.scrollHeight + "px";
    }
}

function toggleDropdown(id) {
    const dropdown = document.getElementById(id);
    if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
    } else {
        dropdown.style.display = "block";
        loadNotifications();
    }
}

function loadNotifications() {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'notifications.php', true);
    xhr.onload = function() {
        if (this.status == 200) {
            document.getElementById('notifications-dropdown').innerHTML = this.responseText;
        } else {
            document.getElementById('notifications-dropdown').innerHTML = 'Failed to load notifications.';
        }
    };
    xhr.send();
}

function loadPage(page) {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', page, true);
    xhr.onload = function() {
        if (this.status == 200) {
            document.getElementById('main-content').innerHTML = this.responseText;
            // Execute any scripts in the loaded content
            const scripts = document.getElementById('main-content').getElementsByTagName('script');
            for (let i = 0; i < scripts.length; i++) {
                eval(scripts[i].innerText);
            }
        } else {
            document.getElementById('main-content').innerHTML = 'Page not found.';
        }
    };
    xhr.send();
}