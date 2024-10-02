const passwordInput = document.getElementById('password');
const strengthMeter = document.getElementById('password-strength-meter');
const strengthText = document.getElementById('password-strength-text');

passwordInput.addEventListener('input', updateStrengthMeter);
//Funciones para definir la seguridad de una contraseña
function updateStrengthMeter() {
    const password = passwordInput.value;
    const strength = calculatePasswordStrength(password);
  
    // Actualizar la barra de seguridad
    strengthMeter.style.width = `${strength}%`;
    strengthMeter.style.backgroundColor = getColor(strength);
  
    // Actualizar el texto descriptivo
    strengthText.textContent = getStrengthText(strength);
  }
  
  function calculatePasswordStrength(password) {
    let strength = 10;
  
    if (password.length >= 8) strength += 25;
    if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength += 25;
    if (password.match(/\d/)) strength += 25;
    if (password.match(/[^a-zA-Z\d]/)) strength += 25;
  
    return strength;
  }
  
  function getColor(strength) {
    if (strength < 25) return '#b34400';
    if (strength < 50) return '#e65800';
    if (strength < 75) return '#ff711a';
    return '#ff914d';
  }
  
  function getStrengthText(strength) {
    if (strength < 25) return 'Muy débil';
    if (strength < 50) return 'Débil';
    if (strength < 75) return 'Moderada';
    return 'Fuerte';
  }