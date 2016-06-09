<!DOCTYPE html>
<head>
      <title>eClass</title>

      <!-- META TAGS -->
      <?php include 'inc/meta.php'; ?>

  </head>

  <body>
    <!-- MENU TOP -->
    <?php include 'inc/top.php'; ?>
    <!-- FIM MENU TOP -->

    <!-- CONTAINER-FLUID -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" style="background-color: #335770;">
            <!-- SIDEBAR -->
            <?php include 'inc/sidebar.php'; ?>
            <!-- FIM SIDEBAR -->
        </div>

        <!-- LAYOUT -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Meu Painel</h1>
          <!-- INFORMAÇÕES DE GAMIFICATION DO ALUNO -->
          <div class="row placeholders">
              <div class="col-xs-6 col-sm-3 placeholder">
                <img src="img/icones/forum.png" width="100" class="img-responsive" alt="Forum">
                <h1 style="font-weight: bold;">15</h1>
                <span class="text-muted">Fórun(s) criado(s)</span>
              </div>
              <div class="col-xs-6 col-sm-3 placeholder">
                <img src="img/icones/conquistas.png" width="100" class="img-responsive" alt="Conquistas">
                <h1 style="font-weight: bold;">12</h1>
                <span class="text-muted">Conquista(s)</span>
              </div>
              <div class="col-xs-6 col-sm-3 placeholder">
                <img src="img/icones/disciplinas.png" width="100" class="img-responsive" alt="Disciplinas">
                <h1 style="font-weight: bold;">1</h1>
                <span class="text-muted">Disciplina Matriculada</span>
              </div>
              <div class="col-xs-6 col-sm-3 placeholder">
                <img src="img/icones/exp.png" width="100" class="img-responsive" alt="Forum">
                <h1 style="font-weight: bold;">890</h1>
                <span class="text-muted">Ponto(s) de EXP</span>
              </div>
          </div>
          <!-- FIM INFORMAÇÕES DE GAMIFICATION DO ALUNO -->
        </div>
      </div> <!-- FIM ROW -->
    </div><!-- FIM CONTAINER-FLUID -->
    <!-- FIM LAYOUT -->

    <style>
      .ativo-index { background: #009048 !important;}
    </style>
  </body>

</html>
