document.addEventListener('DOMContentLoaded', function() {
    fetch('components/navbar.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('navbar-placeholder').innerHTML = data;
            
            // Set active class based on current page
            const currentPage = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                // Remove active class from all links
                link.classList.remove('active');
                
                // Add active class to current page link
                if (link.getAttribute('href') === currentPage || 
                    (currentPage === '/' && link.getAttribute('href') === '/')) {
                    link.classList.add('active');
                }
            });
        });
});