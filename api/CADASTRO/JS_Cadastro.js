function togglePasswordVisibility(elementIds) {
    elementIds.forEach(function(id) {
      var passwordInput = document.getElementById(id);
      var togglePassword = passwordInput.nextElementSibling;
      var eyeOpen = togglePassword.getElementsByClassName("eye-open")[0];
      var eyeClosed = togglePassword.getElementsByClassName("eye-closed")[0];

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeOpen.style.display = "none";
        eyeClosed.style.display = "inline";
      } else {
        passwordInput.type = "password";
        eyeOpen.style.display = "inline";
        eyeClosed.style.display = "none";
      }
    });
  }

    function adicionarInstituicao() {
      var instituicaoSelect = document.getElementById('instituicao');
      var outraInstituicao = document.getElementById('adicionarInstituicao');

      if (instituicaoSelect.value === 'outra') {
        outraInstituicao.style.display = 'block';
      } else {
        outraInstituicao.style.display = 'none';
      }
    }


    function adicionarProfissao() {
      var adminSelect = document.getElementById('admin');
      var outraProfissao = document.getElementById('adicionarProfissao');

      if (adminSelect.value === 'sim') {
        outraProfissao.style.display = 'block';
      } else {
        outraProfissao.style.display = 'none';
      }
    }