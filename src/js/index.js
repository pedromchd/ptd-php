const password_label = document.login.querySelector('label[for="senha"] i');
const password_input = document.login.senha;

password_input.addEventListener('input', () => {
  const bool = password_input.value.length;
  password_label.classList.toggle(
    'fa-eye',
    password_input.type === 'password' && bool
  );
  password_label.classList.toggle(
    'fa-eye-slash',
    password_input.type === 'text' && bool
  );
  password_label.classList.toggle('fa-lock', !bool);
  if (!bool) password_input.type = 'password';
});

password_label.addEventListener('click', () => {
  const eye = password_label.classList.contains('fa-eye');
  const slash = password_label.classList.contains('fa-eye-slash');
  password_input.type = (eye) ? 'text' : 'password';
  password_label.classList.toggle('fa-eye', slash);
  password_label.classList.toggle('fa-eye-slash', eye);
});
