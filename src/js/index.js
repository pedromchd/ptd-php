const label = document.querySelector('label[for="senha"]');
const senha = document.login.senha;

senha.addEventListener('input', () => {
  if (senha.value.length) {
    if (label.innerHTML.indexOf('lock') !== -1)
    label.innerHTML = '<i class="fa fa-eye cs"></i>';
  }
  else {
    senha.type = 'password';
    label.innerHTML = '<i class="fa fa-lock cs"></i>';
  }
});

label.addEventListener('click', e => {
  if (e.target.classList.contains('fa-eye')) {
    senha.type = 'text';
    label.innerHTML = '<i class="fa fa-eye-slash cs"></i>';
  } else
  if (e.target.classList.contains('fa-eye-slash')) {
    senha.type = 'password';
    label.innerHTML = '<i class="fa fa-eye cs"></i>';
  }
});
