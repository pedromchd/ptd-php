const password_label = document.login.querySelector('label[for="senha"] i');
const password_input = document.login.senha;

password_input.addEventListener('input', () => {
  if (password_input.value.length) {
    if (password_input.type === 'password') password_label.classList.value = 'fa fa-eye';
    else password_label.classList.value = 'fa fa-eye-slash';
  } else {
    password_input.type = 'password';
    password_label.classList.value = 'fa fa-lock';
  }
});

password_label.addEventListener('click', () => {
  if (password_label.classList.contains('fa-eye')) {
    password_input.type = 'text';
    password_label.classList.value = 'fa fa-eye-slash';
  } else
  if (password_label.classList.contains('fa-eye-slash')) {
    password_input.type = 'password';
    password_label.classList.value = 'fa fa-eye';
  }
});
