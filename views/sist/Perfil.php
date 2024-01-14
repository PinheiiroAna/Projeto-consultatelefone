<?php
include_once('template/links.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .btn{
    color: #fff;
    background-color: #47C9FF;
    }

    .img-account-profile {
        height: 10rem;
    }
    .rounded-circle {
        border-radius: 50% !important;
    }
    .card {
        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
    }
    .card .card-header {
        font-weight: 500;
    }
    .card-header:first-child {
        border-radius: 0.35rem 0.35rem 0 0;
    }
    .card-header {
        padding: 1rem 1.35rem;
        margin-bottom: 0;
        background-color: rgba(33, 40, 50, 0.03);
        border-bottom: 1px solid rgba(33, 40, 50, 0.125);
    }
    .form-control, .dataTable-input {
        display: block;
        width: 100%;
        padding: 0.875rem 1.125rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1;
        color: #69707a;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #c5ccd6;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.35rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .nav-borders .nav-link.active {
        color: #0061f2;
        border-bottom-color: #0061f2;
    }
    .nav-borders .nav-link {
        color: #69707a;
        border-bottom-width: 0.125rem;
        border-bottom-style: solid;
        border-bottom-color: transparent;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 0;
        padding-right: 0;
        margin-left: 1rem;
        margin-right: 1rem;
    }
  /*MODELO DB*/
    /*parte do modelo db*/
    .blocoDB1, .blocoDB2{
      background-color: #ffffff;
      padding: 10px;
      border-radius: 10px;
      border: solid 1px #e0e0e0;
      box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
    #btnDB1,#btnDB2 {
      background-color: #47C9FF;
      color: #fff;
      padding: 3px 8px;
      border-radius: 10px 10px 0px 0px;
      border: none;
    }
    /*fim parte do modelo db*/
    </style>
</head>
<body>

  <div class="container-xl px-4 mt-4">

    <div class="row">
        <div class="col-xl-4">
            <!-- Profile card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Perfil</div>
                <div class="card-body text-center">
                    <!-- Profile image-->
                    <img class="img-account-profile rounded-circle mb-2" src="https://cdn-icons-png.flaticon.com/512/3135/3135823.png" alt="">
                    <p><strong>Nome Usuário</strong></p>       
                    <p>[tipo de usuario]</p>       
                    <!--upload button-->
                    <!-- <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <button class="btn" type="button">Upload new image</button><br><br><br> -->
                  <!-- <input type="file" name="arquivos" class="btn"  accept="image/png, image/jpeg"  multiple />  -->
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Detalhes da conta-->
            <div class="card mb-4">
                <div class="card-header">Detalhes da conta</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <p><strong>Nome</strong></p>
                            <p>test</p>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                              <p><strong>email</strong></p>
                              <p>test</p>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                              <p><strong>cpf</strong></p>
                                <p>test</p>
                            </div>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                          <!-- Form Group (first name)-->
                          <div class="col-md-6">
                            <p><strong>Data de Nascimento</strong></p>
                            <p>test</p>
                          </div>
                          <!-- Form Group (last name)-->
                          <div class="col-md-6">
                            <p><strong>Celular</strong></p>
                              <p>test</p>
                          </div>
                      </div>
                      <!-- Form Row-->
                      <div class="row gx-3 mb-3">
                        <!-- Form Group (first name)-->
                        <div class="col-md-6">
                          <p><strong>Telefone</strong></p>
                          <p>test</p>
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="col-md-6">
                          <p><strong>Endereço</strong></p>
                            <p>test</p>
                        </div>
                    </div>
                        <!-- Save changes button-->
                        <!-- <button class="btn" type="button">Editar</button> -->
                    </form>
                </div>
            </div>
        </div>


        <!-- EDITAR -->
        <!-- <div class="col-xl-8">
           Detalhes da conta
          <div class="card mb-4">
              <div class="card-header">Detalhes da conta</div>
              <div class="card-body">
                  <form>
                       Form Group (username)
                      <div class="mb-3">
                          <label class="small mb-1" for="inputUsername">Nome</label>
                          <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" >
                      </div>
                       Form Row
                      <div class="row gx-3 mb-3">
                           Form Group (first name)
                          <div class="col-md-6">
                              <label class="small mb-1" for="inputFirstName">First name</label>
                              <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" >
                          </div>
                           Form Group (last name)
                          <div class="col-md-6">
                              <label class="small mb-1" for="inputLastName">Last name</label>
                              <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" >
                          </div>
                      </div>
                       Form Row        
                      <div class="row gx-3 mb-3">
                           Form Group (organization name)
                          <div class="col-md-6">
                              <label class="small mb-1" for="inputOrgName">Organization name</label>
                              <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap">
                          </div>
                           Form Group (location)
                          <div class="col-md-6">
                              <label class="small mb-1" for="inputLocation">Location</label>
                              <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location">
                          </div>
                      </div>
                       Form Group (email address)
                      <div class="mb-3">
                          <label class="small mb-1" for="inputEmailAddress">Email address</label>
                          <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address">
                      </div>
                       Form Row
                      <div class="row gx-3 mb-3">
                           Form Group (phone number)
                          <div class="col-md-6">
                              <label class="small mb-1" for="inputPhone">Phone number</label>
                              <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" >
                          </div>
                           Form Group (birthday)
                          <div class="col-md-6">
                              <label class="small mb-1" for="inputBirthday">Birthday</label>
                              <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" >
                          </div>
                      </div>
                       Save changes button
                      <button class="btn" type="button">Salvar</button>
                  </form>
              </div>
          </div>
      </div> -->
    </div>
</div>
</body>
</html>

