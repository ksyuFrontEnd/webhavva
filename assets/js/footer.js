// Custom checkbox for subscription
document.querySelector('#custom_checkbox span').addEventListener('click', function() {
        const checkbox = this.previousElementSibling;
        checkbox.checked = !checkbox.checked;
        checkbox.dispatchEvent(new Event('change'));
    
});
