  <?php
  require_once '../../App/auth.php';
  require_once '../../layout/script.php';

  echo $head;
  echo $header;
  echo $aside;


        

  echo '<div class="content-wrapper">';
 
 require '../../layout/alert.php';

if($perm != 1){
          echo "Você não tem permissão! </div>";

          exit();
        }

  echo '<!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Adicionar <small>Empresa</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="../"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Empresa</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">';

  echo ' 
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Empresa</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" action="../../App/Database/insertempresa.php" method="POST">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nome Empresa</label>
                    <input type="text" name="Nome_Empresa" class="form-control" id="exampleInputEmail1" placeholder="Nome Empresa">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">CNPJ</label>
                    <input type="text" name="CNPJ" class="form-control" id="exampleInputEmail1" placeholder="CNPJ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Endereço</label>
                    <input type="text" name="Endereco" class="form-control" id="exampleInputEmail1" placeholder="Endereço">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="text" name="Email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
                  </div>

                  
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" name="upload" class="btn btn-primary" value="Cadastrar">Cadastrar</button>
                  <a class="btn btn-danger" href="../../views">Cancelar</a>
                  <a href="../../views/" class="btn btn-success">Voltar</a>
                </div>
              </form>
            </div>
            <!-- /.box -->
            </div>
  </div>';

  echo '</div>';
  echo '</div>';
  echo '</section>';
  echo '</div>';
  echo  $footer;
  echo $javascript;
  ?>