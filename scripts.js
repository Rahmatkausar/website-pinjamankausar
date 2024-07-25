document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.button');
    
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.backgroundColor = '#0056b3';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.backgroundColor = '#007BFF';
        });
    });
});
