function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.querySelector('.eye-icon i');
    if (passwordInput.type === 'password'){
        passwordInput.type = 'text';
        eyeIcon.className = 'far fa-eye-slash';
    }
    else{
        passwordInput.type = 'password';
        eyeIcon.className = 'far fa-eye';
    }
};
function togglePassword() {
    const conPasswordInput = document.getElementById('con-password');
    const eyeVisible = document.querySelector('.eye-visible i');
    if (conPasswordInput.type === 'password'){
        conPasswordInput.type = 'text';
        eyeVisible.className = 'far fa-eye-slash';
    }
    else{
        conPasswordInput.type = 'password';
        eyeVisible.className = 'far fa-eye';
    }
}
