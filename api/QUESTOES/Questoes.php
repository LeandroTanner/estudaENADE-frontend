<html lang="pt-br">
    <head>
        <title>QUESTÕES-estudaENADE</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../ARQUIVOS_PADROES/CSS_Padrao.css">
        <link rel="stylesheet" href="CSS_Questoes.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      </head>

    <body class="site">
       
        <?php include '../ARQUIVOS_PADROES/header.php'; ?>

       <div class="site-content">

        <h2 class="mx-auto">Filtro de Pesquisa</h2>

              <div class="filtro mx-auto row">
                
                <div class="col-sm-6 col-md-3">
                  <input type="text" id="pesquisar" onkeyup="filtro()" placeholder="Pesquisar...">
                </div>

                <div class="col-sm-6 col-md-3">
                  <select id="area" class="itens_filtro">

                  <option value="">Área...</option>
                
                  <option value="">Selecione uma área</option> <option value="administração">Administração</option> <option value="administração pública">Administração Pública</option> <option value="agronomia">Agronomia</option> <option value="agronegócio">Agronegócio</option> <option value="análise e desenvolvimento de sistemas">Análise e Desenvolvimento de Sistemas</option> <option value="arquitetura e urbanismo">Arquitetura e Urbanismo</option> <option value="arquivologia">Arquivologia</option> <option value="artes visuais">Artes Visuais</option> <option value="automação industrial">Automação Industrial</option> <option value="biologia">Biologia</option> <option value="biomedicina">Biomedicina</option> <option value="ciência da computação">Ciência da Computação</option> <option value="ciências biológicas">Ciências Biológicas</option> <option value="ciências contábeis">Ciências Contábeis</option> <option value="ciências econômicas">Ciências Econômicas</option> <option value="ciências sociais">Ciências Sociais</option> <option value="comércio exterior">Comércio Exterior</option> <option value="comunicação social - jornalismo">Comunicação Social - Jornalismo</option> <option value="comunicação social - publicidade e propaganda">Comunicação Social - Publicidade e Propaganda</option> <option value="computação">Computação</option> <option value="construção de edifícios">Construção de Edifícios</option> <option value="design">Design</option> <option value="design de interiores">Design de Interiores</option> <option value="design de moda">Design de Moda</option> <option value="design gráfico">Design Gráfico</option> <option value="direito">Direito</option> <option value="educação física">Educação Física</option> <option value="enfermagem">Enfermagem</option> <option value="engenharia">Engenharia</option> <option value="engenharia ambiental">Engenharia Ambiental</option> <option value="engenharia civil">Engenharia Civil</option> <option value="engenharia de alimentos">Engenharia de Alimentos</option> <option value="engenharia de computação">Engenharia de Computação</option> <option value="engenharia de controle e automação">Engenharia de Controle e Automação</option> <option value="engenharia de produção">Engenharia de Produção</option> <option value="engenharia elétrica">Engenharia Elétrica</option> <option value="engenharia florestal">Engenharia Florestal</option> <option value="engenharia mecânica">Engenharia Mecânica</option> <option value="engenharia química">Engenharia Química</option> <option value="estética e cosmética">Estética e Cosmética</option> <option value="fabricação mecânica">Fabricação Mecânica</option> <option value="farmácia">Farmácia</option> <option value="filosofia">Filosofia</option> <option value="física">Física</option> <option value="fisioterapia">Fisioterapia</option> <option value="fonoaudiologia">Fonoaudiologia</option> <option value="gastronomia">Gastronomia</option> <option value="geografia">Geografia</option> <option value="gestão ambiental">Gestão Ambiental</option> <option value="gestão comercial">Gestão Comercial</option> <option value="gestão da produção industrial">Gestão da Produção Industrial</option> <option value="gestão da qualidade">Gestão da Qualidade</option> <option value="gestão da tecnologia da informação">Gestão da Tecnologia da Informação</option> <option value="gestão financeira">Gestão Financeira</option> <option value="gestão hospitalar">Gestão Hospitalar</option> <option value="gestão pública">Gestão Pública</option> <option value="gestão de recursos humanos">Gestão de Recursos Humanos</option> <option value="história">História</option> <option value="letras - inglês">Letras - Inglês</option> <option value="letras - português">Letras - Português</option> <option value="letras - português e espanhol">Letras - Português e Espanhol</option> <option value="letras - português e inglês">Letras - Português e Inglês</option> <option value="logística">Logística</option> <option value="marketing">Marketing</option> <option value="matemática">Matemática</option> <option value="medicina">Medicina</option> <option value="medicina veterinária">Medicina Veterinária</option> <option value="música">Música</option> <option value="nutrição">Nutrição</option> <option value="odontologia">Odontologia</option> <option value="pedagogia">Pedagogia</option> <option value="processos gerenciais">Processos Gerenciais</option> <option value="processos químicos">Processos Químicos</option> <option value="psicologia">Psicologia</option> <option value="química">Química</option> <option value="radiologia">Radiologia</option> <option value="redes de computadores">Redes de Computadores</option> <option value="relações internacionais">Relações Internacionais</option> <option value="saneamento ambiental">Saneamento Ambiental</option> <option value="secretariado executivo">Secretariado Executivo</option> <option value="segurança no trabalho">Segurança no Trabalho</option> <option value="serviço social">Serviço Social</option> <option value="sistemas de informação">Sistemas de Informação</option> <option value="tecnologia em análise e desenvolvimento de sistemas">Tecnologia em Análise e Desenvolvimento de Sistemas</option> <option value="tecnologia em agroindústria">Tecnologia em Agroindústria</option> <option value="tecnologia em agronegócios">Tecnologia em Agronegócios</option> <option value="tecnologia em comércio exterior">Tecnologia em Comércio Exterior</option> <option value="tecnologia em construção de edifícios">Tecnologia em Construção de Edifícios</option> <option value="tecnologia em design de interiores">Tecnologia em Design de Interiores</option> <option value="tecnologia em design de moda">Tecnologia em Design de Moda</option> <option value="tecnologia em design gráfico">Tecnologia em Design Gráfico</option> <option value="tecnologia em fabricação mecânica">Tecnologia em Fabricação Mecânica</option> <option value="tecnologia em gastronomia">Tecnologia em Gastronomia</option> <option value="tecnologia em gestão ambiental">Tecnologia em Gestão Ambiental</option> <option value="tecnologia em gestão comercial">Tecnologia em Gestão Comercial</option> <option value="tecnologia em gestão da qualidade">Tecnologia em Gestão da Qualidade</option> <option value="tecnologia em gestão da tecnologia da informação">Tecnologia em Gestão da Tecnologia da Informação</option> <option value="tecnologia em gestão financeira">Tecnologia em Gestão Financeira</option> <option value="tecnologia em gestão hospitalar">Tecnologia em Gestão Hospitalar</option> <option value="tecnologia em gestão pública">Tecnologia em Gestão Pública</option> <option value="tecnologia em gestão de recursos humanos">Tecnologia em Gestão de Recursos Humanos</option> <option value="tecnologia em gestão pública">Tecnologia em Gestão Pública</option> <option value="tecnologia em logística">Tecnologia em Logística</option> <option value="tecnologia em manutenção industrial">Tecnologia em Manutenção Industrial</option> <option value="tecnologia em marketing">Tecnologia em Marketing</option> <option value="tecnologia em processos gerenciais">Tecnologia em Processos Gerenciais</option> <option value="tecnologia em processos químicos">Tecnologia em Processos Químicos</option> <option value="tecnologia em radiologia">Tecnologia em Radiologia</option> <option value="tecnologia em redes de computadores">Tecnologia em Redes de Computadores</option> <option value="tecnologia em saneamento ambiental">Tecnologia em Saneamento Ambiental</option> <option value="terapia ocupacional">Terapia Ocupacional</option> <option value="teologia">Teologia</option> <option value="turismo">Turismo</option> <option value="zootecnia">Zootecnia</option>

                  </select> 
                </div>

              <div class="col-sm-3 col-md-3">
              <select id="ano" class="itens_filtro">
                <option value="">Ano...</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
              </select>
              </div>

              <div class="col-sm-3 col-md-3">
                <button class="botao_filtro">Filtrar</button>
              </div>

              </div>
        
        <div class="card conteudo  mx-auto">
            <div class="card-body">
              <h5 class="card-title">CIÊNCIA DA COMPUTAÇÃO</h5>
              <h6 class="card-subtitle mb-2 text-muted">| ANO | ÁREA |</h6>
              <p class="card-text">[...]A pandemia ocasionada pelo novo Coronavírus gerou impactos negativos na economia e nos negócios,
                intensificando problemas sociais no mundo todo. Nos Estados Unidos, um estudo realizado com a
                parceria de duas importantes universidades verifi cou que a expectati va de vida dos norte-americanos
                caiu 1,1 ano em 2020.[...]</p>
                <div class="text-center">
                    <a href="../RESPONDER_QUESTOES/Responder_Questoes.php" class="btn mb-2" role="button">Responder Questão<i class="fa-regular fa-hand"></i></a>
                    <button type="button" class="btn mb-2">Salvar Questão<i class="fa-regular fa-bookmark"></i></button>
                </div>
            </div>
        </div>

        <div class="card conteudo  mx-auto">
            <div class="card-body">
              <h5 class="card-title">CIÊNCIA DA COMPUTAÇÃO</h5>
              <h6 class="card-subtitle mb-2 text-muted">| ANO | ÁREA |</h6>
              <p class="card-text">[...]A pandemia ocasionada pelo novo Coronavírus gerou impactos negativos na economia e nos negócios,
                intensificando problemas sociais no mundo todo. Nos Estados Unidos, um estudo realizado com a
                parceria de duas importantes universidades verifi cou que a expectati va de vida dos norte-americanos
                caiu 1,1 ano em 2020.[...]</p>
                <div class="text-center">
                    <a href="../RESPONDER_QUESTOES/Responder_Questoes.php" class="btn mb-2" role="button">Responder Questão<i class="fa-regular fa-hand"></i></a>
                    <button type="button" class="btn mb-2">Salvar Questão<i class="fa-regular fa-bookmark"></i></button>
                </div>
            </div>
        </div>

        <div class="card conteudo  mx-auto">
            <div class="card-body">
              <h5 class="card-title">CIÊNCIA DA COMPUTAÇÃO</h5>
              <h6 class="card-subtitle mb-2 text-muted">| ANO | ÁREA |</h6>
              <p class="card-text">[...]A pandemia ocasionada pelo novo Coronavírus gerou impactos negativos na economia e nos negócios,
                intensificando problemas sociais no mundo todo. Nos Estados Unidos, um estudo realizado com a
                parceria de duas importantes universidades verifi cou que a expectati va de vida dos norte-americanos
                caiu 1,1 ano em 2020.[...]</p>
                <div class="text-center">
                    <a href="../RESPONDER_QUESTOES/Responder_Questoes.php" class="btn mb-2" role="button">Responder Questão<i class="fa-regular fa-hand"></i></a>
                    <button type="button" class="btn mb-2">Salvar Questão<i class="fa-regular fa-bookmark"></i></button>
                </div>
            </div>
        </div>

        <div class="card conteudo  mx-auto">
            <div class="card-body">
              <h5 class="card-title">CIÊNCIA DA COMPUTAÇÃO</h5>
              <h6 class="card-subtitle mb-2 text-muted">| ANO | ÁREA |</h6>
              <p class="card-text">[...]A pandemia ocasionada pelo novo Coronavírus gerou impactos negativos na economia e nos negócios,
                intensificando problemas sociais no mundo todo. Nos Estados Unidos, um estudo realizado com a
                parceria de duas importantes universidades verifi cou que a expectati va de vida dos norte-americanos
                caiu 1,1 ano em 2020.[...]</p>
                <div class="text-center">
                    <a href="../RESPONDER_QUESTOES/Responder_Questoes.php" class="btn mb-2" role="button">Responder Questão<i class="fa-regular fa-hand"></i></a>
                    <button type="button" class="btn mb-2">Salvar Questão<i class="fa-regular fa-bookmark"></i></button>
                </div>
            </div>
        </div>

       </div>
        
        <?php include '../ARQUIVOS_PADROES/footer.php'; ?>

      <script src="https://kit.fontawesome.com/85b261f1db.js" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
      <?php include '../ARQUIVOS_PADROES/libras.php';?>
    
    </body>
</html>