<!DOCTYPE html>
<head>
      <title>Fórum - eClass</title>

      <!-- META TAGS -->
      <?php include 'inc/meta.php'; ?>

      <!-- EDITOR TINYMCE -->
      <script>tinymce.init({ selector:'textarea', language: "pt_BR" });</script>
      <!-- FIM EDITOR TINYMCE -->

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
          <h1 class="page-header">Fórum</h1>
          <!-- FÓRUM -->
          <!-- BTN-CRIAR TÓPICO -->
          <button type="button" id="btn_mostrar_esconder_topico" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-check" aria-hidden="true" style="margin-right: 8px;"></span>CRIAR TÓPICO</button>
          <br><br>

          <!-- FORM NOVO TÓPICO -->
          <form class="form-oculta" id="form_topico" style="display:none" method="" action="">
            <div class="form-group">
              <label for="titulo">Título do Tópico:</label>
              <input type="text" class="form-control" name="titulo" required placeholder="Ex: Debate sobre a Atividade 5 de Estatística">
            </div>

            <div class="form-group">
              <label for="conteudo_topico">Conteúdo do Tópico:</label>
              <textarea class="form-control" name="conteudo_topico" rows="4" required placeholder="Ex: Estou com uma dúvida na Atividade 5 de Estatística, não estou entendendo o método..."></textarea>
            </div>

            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check" aria-hidden="true" style="margin-right: 6px;"></span>Criar</button>
            <button type="reset" class="btn btn-default" id="btn_cancelar_topico" onclick="EsconderFormTopico">Cancelar</button>
          </form>

          <!-- FIM FORM NOVO TÓPICO -->

          <!-- TÓPICOS EM ALTA -->
          <table class="table" width="100%;">
            <thead style="background: #e74c3c;">
              <tr style="border: 1px solid #ccc;">
                <th style="color: #fff;" width="55%"><span class="glyphicon glyphicon-fire" aria-hidden="true" style="margin-right: 10px;"></span>Tópicos Quentes</th>
                <th style="color: #fff;" width="15%"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></th>
                <th style="color: #fff;" width="30%"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></th>
              </tr>
            </thead>
            <tbody style="border: 1px solid #ccc;">
              <tr>
                <td><a href="">Cálculo de desvio padrão 1</a></td>
                <td>8</td>
                <td> João Silva, em 13/04/2016 as 15h30</td>
              </tr>
              <tr>
                <td><a href="">Cálculo de desvio padrão 2</a></td>
                <td>3</td>
                <td>João Silva, em 13/04/2016 as 15h30</td>
              </tr>
              <tr>
                <td><a href="">Cálculo de desvio padrão 3</a></td>
                <td>12</td>
                <td>João Silva, em 13/04/2016 as 15h30</td>
              </tr>
            </tbody>
          </table>
          <!-- PÁGINAÇÃO EM ALTA -->
          <nav>
              <ul class="pagination">
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class=""><a href="#">2 <span class="sr-only">(current)</span></a></li>
                <li class=""><a href="#">3 <span class="sr-only">(current)</span></a></li>
              </ul>
          </nav>
          <!-- FIM TÓPICOS EM ALTA -->

          <!-- TÓPICOS POR SUGESTÕES -->
          <table class="table" width="100%;">
            <thead style="background: #00a185;">
              <tr style="border: 1px solid #ccc;">
                <th style="color: #fff;" width="55%"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true" style="margin-right: 10px;"></span>Sugestões</th>
                <th style="color: #fff;" width="15%"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></th>
                <th style="color: #fff;" width="30%"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></th>
              </tr>
            </thead>
            <tbody style="border: 1px solid #ccc;">
              <tr>
                <td><a href="">Cálculo de desvio padrão 1</a></td>
                <td>8</td>
                <td> João Silva, em 13/04/2016 as 15h30</td>
              </tr>
              <tr>
                <td><a href="">Cálculo de desvio padrão 2</a></td>
                <td>3</td>
                <td>João Silva, em 13/04/2016 as 15h30</td>
              </tr>
              <tr>
                <td><a href="">Cálculo de desvio padrão 3</a></td>
                <td>12</td>
                <td>João Silva, em 13/04/2016 as 15h30</td>
              </tr>
            </tbody>
          </table>
          <!-- PÁGINAÇÃO EM ALTA -->
          <nav>
              <ul class="pagination">
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class=""><a href="#">2 <span class="sr-only">(current)</span></a></li>
                <li class=""><a href="#">3 <span class="sr-only">(current)</span></a></li>
              </ul>
          </nav>
          <!-- FIM TÓPICOS POR SUGESTÕES -->
          <!-- FIM FÓRUM -->
        </div>
      </div> <!-- FIM ROW -->
    </div><!-- FIM CONTAINER-FLUID -->
    <!-- FIM LAYOUT -->

    <style>
      .ativo-forum { background: #009048 !important;}
    </style>

  </body>

</html>
