<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <title>Document</title>
</head>
<body>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-center">
    <div class="content-wrapper">
      <div class="row p-4">
          <div class="col-lg-12">
              <div class="card m-4">
                  <div class="card-body">
                      <div>
                        
                          <form class="cmxform" method="POST" action="TestCon">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <label for="phone"><b>Número de cliente</b> (contacto)</label>
                                  <input id="phone" name="phone" required type="number" class="form-control " value="">

                                </div>
                                <div class="form-group">
                                    <label for="amount"><b>Valor </b></label>
                                    <input required id="amount" name="amount" type="number" class="form-control " value="">
                                </div>
                                    <p>
                                        <b>Clique em Pagar</b>, depois inserira o PIN no telemóvel que usa o número indicado acima.
                                    </p>

                                    <input class="btn btn-success float-right mt-3" type="submit" value="Pagar">
                            </fieldset>
                            @csrf
                          </form>
                          
                          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>    
</body>
</html>