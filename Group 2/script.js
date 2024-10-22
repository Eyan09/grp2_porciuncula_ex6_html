const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signup');

// Show the sign-up form and hide the sign-in form when "Sign Up" is clicked
signUpButton.addEventListener('click', function () {
    signInForm.style.display = 'none';
    signUpForm.style.display = 'block';
});

// Show the sign-in form and hide the sign-up form when "Sign In" is clicked
signInButton.addEventListener('click', function () {
    signUpForm.style.display = 'none';
    signInForm.style.display = 'block';
});
