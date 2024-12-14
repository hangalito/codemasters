document.querySelectorAll('.course').forEach(course => {
    course.addEventListener('click', function() {
        const pdfUrl = this.getAttribute('data-pdf');
        window.open(pdfUrl, '_blank');
    });
});