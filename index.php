<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Email Generator - Palópoli :.</title>
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">


<body>
    <main>
        <div class="container-fluid">
            <div class="form-body">
                <div class="row">
                    <div class="form-holder">
                        <div class="form-content">
                            <div class="form-items">
                                <img src="https://avatars.githubusercontent.com/u/12401162?v=4" alt="" style="border-radius: 40%;margin-left: 30%;">
                                <h3>Sistema Palópoli de Emails</h3>
                                <p>Preencha os dados para criar o email</p>
                                <form class="requires-validation" novalidate method="post" action="valida_modelo.php">

                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="iCampanha" placeholder="Nome da Campanha">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="iUrlBanner1" placeholder="Link do banner principal">
                                    </div>

                                    <div class="form-group">
                                        <label for="iTxtTransicao">Texto de Transicao</label>
                                        <textarea class="form-control" id="iTxtTransicao" rows="12" name="iTxtTransicao"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="iURLS">URLs</label>
                                        <textarea class="form-control" id="iURLS" rows="12" name="iURLS"></textarea>
                                    </div>


                                    <div class="form-group">
                                        <select class="form-select" name="iModelo" id="iModelo">
                                            <option selected value="1">Modelo Padrão</option>
                                            <option value="2">Modelo Rodapé 3</option>
                                            <option value="3">Modelo Rodapé 3 sem botão</option>
                                        </select>

                                    </div>




                                    <div class="form-button mt-3">
                                        <button id="submit" type="submit" class="btn btn-primary">Criar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="js/script.js"></script>
        </div>
    </main>
</body>

</html>