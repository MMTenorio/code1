<!DOCTYPE html>
<head>
      <title>Material Extra - eClass</title>

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
          <h1 class="page-header">Material Extra</h1>
          <!-- MATERIAL EXTRA -->
          <!-- BTN-PUBLICAR MATERIAL-->
          <button type="button" id="btn_mostrar_esconder_material" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true" style="margin-right: 8px;"></span>PUBLICAR MATERIAL</button>
          <br><br>

          <!-- FORM NOVO MATERIAL -->
          <form class="form-oculta" id="form_material" style="display:none" method="" action="">
            <label for="anexo_tarefa">Envio de Arquivo</label>
            <input type="file" name="anexo_tarefa" placeholder="Envie seu arquivo"><br>

            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true" style="margin-right: 6px;"></span>Publicar</button>
            <button type="reset" class="btn btn-default" id="btn_cancelar_material" onclick="EsconderFormMaterial">Cancelar</button>
          </form>

          <!-- FIM FORM NOVO MATERIAL -->

          <!-- TABELA DE MATERIAIS -->
          <table class="table" width="100%;">
            <thead style="background: #0081bc;">
              <tr style="border: 1px solid #ccc;">
                <th style="color: #fff;" width="50%"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true" style="margin-right: 10px;"></span>Título</th>
                <th style="color: #fff;" width="10%"><span class="glyphicon glyphicon-paperclip" aria-hidden="true" style="margin-right: 10px;"></span></th>
                <th style="color: #fff;" width="10%"><span class="glyphicon glyphicon-download" aria-hidden="true"></span></th>
                <th style="color: #fff;" width="30%"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></th>
              </tr>
            </thead>
            <tbody style="border: 1px solid #ccc;">
              <tr>
                <td><a href="">Questionário 1</a></td>
                <td>PDF</td>
                <td>8</td>
                <td> João Silva, em 13/04/2016 as 15h30</td>
              </tr>
              <tr>
                <td><a href="">Gráfico da Atividade 5 de Geometria</a></td>
                <td>PDF</td>
                <td>3</td>
                <td>João Silva, em 13/04/2016 as 15h30</td>
              </tr>
              <tr>
                <td><a href="">Checklist da Atividade 2 de Geometria</a></td>
                <td>PDF</td>
                <td>12</td>
                <td>João Silva, em 13/04/2016 as 15h30</td>
              </tr>
            </tbody>
          </table>
          <!-- PÁGINAÇÃO -->
          <nav>
              <ul class="pagination">
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class=""><a href="#">2 <span class="sr-only">(current)</span></a></li>
                <li class=""><a href="#">3 <span class="sr-only">(current)</span></a></li>
              </ul>
          </nav>
          <!-- FIM MATERIAIS -->
        </div>
      </div> <!-- FIM ROW -->
    </div><!-- FIM CONTAINER-FLUID -->
    <!-- FIM LAYOUT -->

    <style>
      .ativo-matextra { background: #009048 !important;}
    </style>

  </body>

</html>
