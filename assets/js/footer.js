// Custom checkbox for subscription
document.querySelector('#custom_checkbox span').addEventListener('click', function() {
        const checkbox = this.previousElementSibling;
        checkbox.checked = !checkbox.checked;
        checkbox.dispatchEvent(new Event('change'));
    
});

// Form validation
document.getElementById('footerForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const email = document.getElementById('email');
        const subscription = document.getElementById('subscription');
        let isValid = true;
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (!emailPattern.test(email.value)) {
                document.getElementById('emailError').style.display = 'block';
                email.classList.add('form__input-field-error');
                isValid = false;
        } else {
                document.getElementById('emailError').style.display = 'none';
                email.classList.remove('form__input-field-error');
        }

        if (!subscription.checked) {
                document.getElementById('checkboxError').style.display = 'block';
                isValid = false;
        } else {
                document.getElementById('checkboxError').style.display = 'none';
        }

        if (isValid) {
                document.getElementById('successMessage').style.display = 'block';

                setTimeout(() => {
                        this.submit();   
                }, 5000);
        }
});
