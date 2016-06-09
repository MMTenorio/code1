<!DOCTYPE html>
<head>
      <title>Tarefas - eClass</title>

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
          <h1 class="page-header">Tarefas</h1>
          <!-- TAREFAS -->
          <!-- BTN-TAREFAS
          <button type="button" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true" style="margin-right: 8px;"></span>PUBLICAR MATERIAL</button>
          <br><br>-->
          <!-- TABELA DE TAREFAS -->
          <table class="table" width="100%;">
            <thead style="background: #0081bc;">
              <tr style="border: 1px solid #ccc;">
                <th style="color: #fff;" width="40%"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true" style="margin-right: 10px;"></span>Título</th>
                <th style="color: #fff;" width="25%"><span class="glyphicon glyphicon-calendar" aria-hidden="true" style="margin-right: 10px;"></span>Data Entrega</th>
                <th style="color: #fff;" width="25%"><span class="glyphicon glyphicon-calendar" aria-hidden="true" style="margin-right: 10px;"></span>Data Limite</th>
                <th style="color: #fff;" width="10%"><span class="glyphicon glyphicon-flag" aria-hidden="true" style="margin-right: 10px;"></span>Status</th>
              </tr>
            </thead>
            <tbody style="border: 1px solid #ccc;">
              <tr>
                <td><a href="">Tarefa 1</a></td>
                <td>25/03/2016</td>
                <td style="color: #f00;">25/04/2016</td>
                <td style="text-align: center;"><span class="glyphicon glyphicon-ok" aria-hidden="true" title="Enviado"></span></td>
              </tr>
              <tr>
                <td><a href="">Tarefa 2</a></td>
                <td></td>
                <td style="color: #f00;">25/04/2016</td>
                <td style="text-align: center;"><span class="glyphicon glyphicon-remove" aria-hidden="true" title="Não Enviado"></td>
              </tr>
              <tr>
                <td><a href="">Tarefa 3</a></td>
                <td>25/03/2016</td>
                <td style="color: #f00;">25/04/2016</td>
                <td style="text-align: center;"><span class="glyphicon glyphicon-ok" aria-hidden="true" title="Enviado"></span></td>
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
          <!-- FIM TAREFAS -->
        </div>
      </div> <!-- FIM ROW -->
    </div><!-- FIM CONTAINER-FLUID -->
    <!-- FIM LAYOUT -->

    <style>
      .ativo-tarefas { background: #009048 !important;}
    </style>

  </body>

</html>
