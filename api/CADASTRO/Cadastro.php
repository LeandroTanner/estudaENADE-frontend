<html lang="pt-br">
    <head>
        <title>CADASTRO-estudaENADE</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../ARQUIVOS_PADROES/CSS_Padrao.css">
        <link rel="stylesheet" type="text/css" href="CSS_Cadastro.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      </head>
    <body class="site">
       
        <?php include '../ARQUIVOS_PADROES/header.php'; ?>

       <div class="site-content">
       <form class="formulario mx-auto">

          <h2 class="Titulo_Form">FAÇA SEU CADASTRO</h2>

          <div class="form-group">
              <label for="Nome">Nome completo</label><i class="fa-solid fa-asterisk"></i>
              <input type="text" class="form-control mx-auto form-control-sm" id="Nome" placeholder="Ex: Leandro Arantes Tanner" required>
          </div>

          <div class="form-group">
            <label for="Email">Endereço de email</label><i class="fa-solid fa-asterisk"></i>
            <input type="email" class="form-control mx-auto form-control-sm" id="Email" aria-describedby="emailHelp" placeholder="Ex: exemplo@gmail.com" required>
            <!--<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>-->
          </div>

          <div class="form-group">
              <label for="confirma_Email">Confirme seu email</label><i class="fa-solid fa-asterisk"></i>
              <input type="email" class="form-control mx-auto form-control-sm" id="confirma_Email" aria-describedby="emailHelp" placeholder="Ex: exemplo@gmail.com" required>
              <!--<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>-->
          </div>

          <div class="form-group">
            <label for="senha">Senha</label><i class="fa-solid fa-asterisk"></i>
            <input type="password" class="form-control mx-auto form-control-sm" id="senha" placeholder="Digite sua senha" required>
            <span class="toggle-password" onclick="togglePasswordVisibility(['senha'])">
                <span class="eye-open"><i class="fa-solid fa-eye"></i></span>
                <span class="eye-closed" style="display:none;"><i class="fa-solid fa-eye-slash"></i></span>
            </span>
          </div>

          <div class="form-group">
            <label for="confirma_senha">Confirme sua senha</label><i class="fa-solid fa-asterisk"></i>
            <input type="password" class="form-control mx-auto form-control-sm" id="confirma_senha" placeholder="Confirme sua senha" required>
            <span class="toggle-password" onclick="togglePasswordVisibility(['confirma_senha'])">
                <span class="eye-open"><i class="fa-solid fa-eye"></i></span>
                <span class="eye-closed" style="display:none;"><i class="fa-solid fa-eye-slash"></i></span>
            </span>
          </div>

          <div class="form-group">
              <label for="data_nascimento">Data de nascimento</label><i class="fa-solid fa-asterisk"></i>
              <input type="date" class="form-control mx-auto form-control-sm" id="data_nascimento" placeholder="Ex: dd/mm/aaaa" required>
          </div>

          <div class="form-group">
              <label for="escolaridade">Escolaridade</label><i class="fa-solid fa-asterisk"></i>
              <select class="form-control mx-auto" id="escolaridade">
                <option>Selecione a opção que melhor se encaixa</option>
                <option>Ensino Superior Completo</option>
                <option>Ensino Superior Cursando</option>
                <option>Ensino Médio Completo</option>
                <option>Ensino Fundamental Completo</option>
                <option>Não concluí nenhuma formação</option>
                <option>Prefiro não informar</option>
              </select>
          </div>

            <div class="form-group">
              <label for="imagem">Insira uma imagem de perfil</label>
              <input type="file" class="form-control mx-auto form-control-sm" id="imagem">
            </div>

          <div class="form-group">
              <label for="instituicao">Instituição:</label>
              <select class="form-control mx-auto" id="instituicao" onchange="adicionarInstituicao()">
                  <option>Selecione ou adicione uma instituição</option>
                  <option value="UNIBRA">CENTRO UNIVERSITÁRIO BRASILEIRO (UNIBRA)</option>
                  <option value="EBAPE">ESCOLA BRASILEIRA DE ADMINISTRAÇÃO PÚBLICA E DE EMPRESAS (EBAPE)</option>
                  <option value="EAESP">ESCOLA DE ADMINISTRAÇÃO DE EMPRESAS DE SÃO PAULO (FGV EAESP)</option>
                  <option value="DIREITO RIO">ESCOLA DE DIREITO DO RIO DE JANEIRO (DIREITO RIO)</option>
                  <option value="EESP">ESCOLA DE ECONOMIA DE SÃO PAULO (EESP)</option>
                  <option value="EPGE">ESCOLA BRASILEIRA DE ECONOMIA E FINANÇAS (FGV - EPGE)</option>
                  <option value="CPDOC">ESCOLA DE CIÊNCIAS SOCIAIS (FGV CPDOC)</option>
                  <option value="FAS">FACULDADE ARI DE SÁ (FAS)</option>
                  <option value="FCC">FACULDADE CRISTÃ DE CURITIBA (FCC)</option>
                  <option value="FCE">FACULDADE CESAR (FCE)</option>
                  <option value="FACEPD">FACULDADE ESCOLA PAULISTA DE DIREITO (FACEPD)</option>
                  <option value="FCMSCSP">FACULDADE DE CIÊNCIAS MÉDICAS DA SANTA CASA SÃO PAULO (FCMSCSP)</option>
                  <option value="FDV">FACULDADE DE DIREITO DE VITÓRIA (FDV)</option>
                  <option value="FAMERP">FACULDADE DE MEDICINA DE SÃO JOSÉ DO RIO PRETO (FAMERP)</option>
                  <option value="FAJE">FACULDADE JESUÍTA DE FILOSOFIA E TEOLOGIA (FAJE)</option>
                  <option value="FIPECAFI">FACULDADE FIPECAFI</option>
                  <option value="FUCAPE">FACULDADE FUCAPE</option>
                  <option value="EST">FACULDADES EST</option>
                  <option value="UFABC">FUNDAÇÃO UNIVERSIDADE FEDERAL DO ABC (UFABC)</option>
                  <option value="UFCSPA">FUNDAÇÃO UNIVERSIDADE FEDERAL DE CIÊNCIAS DA SAÚDE DE PORTO ALEGRE (UFCSPA)</option>
                  <option value="IME">INSTITUTO MILITAR DE ENGENHARIA (IME)</option>
                  <option value="ITA">INSTITUTO TECNOLÓGICO DE AERONÁUTICA (ITA)</option>
                  <option value="INAPÓS">INSTITUTO NACIONAL DE ENSINO SUPERIOR E PÓS-GRADUAÇÃO PADRE GERVÁSIO (INAPÓS)</option>
                  <option value="IFSP">INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DE SÃO PAULO, CAMPUS HORTOLÂNDIA - IFSP (HTO)</option>
                  <option value="UNICAMP">UNIVERSIDADE ESTADUAL DE CAMPINAS (UNICAMP)</option>
                  <option value="UENF">UNIVERSIDADE ESTADUAL DO NORTE FLUMINENSE DARCY RIBEIRO (UENF)</option>
                  <option value="UNESP">UNIVERSIDADE ESTADUAL PAULISTA JÚLIO DE MESQUITA FILHO (UNESP)</option>
                  <option value="UFMG">UNIVERSIDADE FEDERAL DE MINAS GERAIS (UFMG)</option>
                  <option value="UFPR">UNIVERSIDADE FEDERAL DO PARANÁ (UFPR)</option>
                  <option value="UFRGS">UNIVERSIDADE FEDERAL DO RIO GRANDE DO SUL (UFRGS)</option>
                  <option value="UFRJ">UNIVERSIDADE FEDERAL DO RIO DE JANEIRO (UFRJ)</option>
                  <option value="UFSC">UNIVERSIDADE FEDERAL DE SANTA CATARINA (UFSC)</option>
                  <option value="UFSCAR">UNIVERSIDADE FEDERAL DE SÃO CARLOS (UFSCAR)</option>
                  <option value="UFSM">UNIVERSIDADE FEDERAL DE SANTA MARIA (UFSM)</option>
                  <option value="UFSB">UNIVERSIDADE FEDERAL DO SUL DA BAHIA (UFSB)</option>
                  <option value="UFV">UNIVERSIDADE FEDERAL DE VIÇOSA (UFV)</option>
                  <option value="UNB">UNIVERSIDADE DE BRASÍLIA (UNB)</option>
                  <option value="UNIFESP">UNIVERSIDADE FEDERAL DE SÃO PAULO (UNIFESP)</option>
                  <option value="outra">Outra instituição</option>
              </select>
          </div>

          <div class="form-group" id="adicionarInstituicao"  style="display: none">
              <label for="outraInstituicao">Não encontrou a sua? Escreva o nome em CAPS LOCK aqui:</label>
              <input type="text" class="form-control mx-auto form-control-sm" id="outraInstituicao" placeholder="Ex: FACULDADE ANHANGUERA">
          </div>

          <div class="form-group">
            <label for="admin">É administrador?</label>
            <select class="form-control mx-auto" id="admin" onchange="adicionarProfissao()">
              <option>Selecione uma opção</option>
              <option value="sim">SIM</option>
              <option value="nao">NÃO</option>
            </select>
          </div>

          <div class="form-group" id="adicionarProfissao" style="display: none">
              <label for="profissao">Profissão:</label>
              <input type="text" class="form-control mx-auto form-control-sm" id="profissao" placeholder="Ex: Analista de sistema">
          </div>

            <div class="container">
              <div class="row">
                  <div class="col-sm-6">
                      <button type="submit" class="btn btn-primary btn-block btn-sm">CADASTRAR</button>
                  </div>
                  <div class="col-sm-6">
                      <button type="submit" class="btn btn-primary btn-block btn-sm"><a href="../LOGIN/Login.php">JÁ TENHO CADASTRO</a></button>
                  </div>
              </div>
          </div>

          </form>
       </div>
        
        <?php include '../ARQUIVOS_PADROES/footer.php'; ?>

      <script src="./JS_Cadastro.js" ></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
      <script src="https://kit.fontawesome.com/85b261f1db.js" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
      <?php include '../ARQUIVOS_PADROES/libras.php';?>

    </body>
</html>