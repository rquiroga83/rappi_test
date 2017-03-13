<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Laravel</title>

        
        <link rel="stylesheet" type="text/css" href="{{ asset('plugin/bootstrap/css/bootstrap.css')  }}" />
    </head>
    <body>
        
        
        <div class="panel panel-default">
            <div class="panel-body">
  
                <li class="list-group-item active"><h1>Prueba cubo Rappi</h1></li>
                <!--<li class="list-group-item">
                    <h4>Define casos de prueba (T):</h4>
                    <div class="input-group">
                        <input id="input_T" type="text" class="form-control" placeholder="Ingresa un numero entero de 1 al 50...">
                        <span class="input-group-btn">
                            <button id="button_T" class="btn btn-default" type="button">Definir</button>
                        </span>
                    </div>
                </li>--><!-- Fin define casos de prueba -->
                <li class="list-group-item">
                    <h4>Define tamaño de la matriz (N):</h4>
                    <div class="input-group">
                        <input id="input_N" type="text" class="form-control" placeholder="Ingresa un numero entero de 1 al 100...">
                        <span class="input-group-btn">
                            <button id="button_N" class="btn btn-default" type="button">Definir</button>
                        </span>
                    </div><!-- /input-group -->
                </li>
                <li class="list-group-item">
                    <h4>Define numero de operaciones (M):</h4>
                    <div class="input-group">
                        <input id="input_M" type="text" class="form-control" placeholder="Ingresa un numero entero de 1 al 1000...">
                        <span class="input-group-btn">
                            <button id="button_M" class="btn btn-default" type="button">Definir</button>
                        </span>
                    </div>
                </li>
                <li class="list-group-item">
                    <!--<button class="btn btn-success" type="button">
                        Valor de T <span id="label_T" class="badge">0</span>
                    </button>-->
                    
                    <button class="btn btn-success" type="button">
                        Valor de N <span id="label_N" class="badge">0</span>
                    </button>
                    
                    <button class="btn btn-success" type="button">
                        Valor de M <span id="label_M" class="badge">0</span>
                    </button>
                    
                </li>
                <li class="list-group-item">
                    <h4>Ingresa operaciones en el formato adecuado (UPDATE -> x y z W) (QUERY -> x1 y1 z1 x2 y2 z2) :</h4>
                    
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Valores de opreracion</span>
                        <input id="input_Op" type="text" class="form-control" placeholder="Ingresa (x y z W) o (x1 y1 z1 x2 y2 z2)" aria-describedby="basic-addon1">
                    </div>
                    
                    
                    <br/>
                    
                    <button id="button_Update" class="btn btn-warning" type="button">UPDATE</button>
                    <button id="button_Query" class="btn btn-danger" type="button"/>QUERY</button>
                </li>
                
                <li class="list-group-item">
                    <div id="t_lista_operaciones" >
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="sort" data-sort="v_operacion">Operacion</th>
                                    <th class="sort" data-sort="v_valores">Valores</th>
                                </tr>
                            </thead>
                            <tbody class="list">

                            </tbody>
                        </table>
                    </div>
                </li>
                
                <li class="list-group-item">
                    <button id="button_Enviar" class="btn btn-primary" type="button"/>ENVIAR</button>
                </li>
                
                <li id="resultados" class="list-group-item">
                    
                </li>
                
            </div>
        </div>
        
        <script src="{{ asset('plugin/jquery/jquery-3.1.1.js')  }}"></script>
        <script src="{{ asset('plugin/bootstrap/js/bootstrap.js')  }}"></script>
        <script src="{{ asset('plugin/list/list.js')  }}"></script>
        <script src="{{ asset('js/rappi_test.js')  }}"></script>
    </body>
</html>
