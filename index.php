<?php include 'header.php'; ?>
<?php include 'PHP/boleto.php'; ?>
    <div class="container" style="height: 100vh;">
        <div class="row h-100 d-flex align-items-center">
            <div class="col-md-6">
                <div class="card bg-light">
                    <div class="card-body">
                        <table class="table table-striped">
                            <h1 class="w-100 text-center">Escenario</h1>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td><?php echo $database[0][-1]; ?></td>
                                    <td><?php echo $database[1][-1]; ?></td>
                                    <td><?php echo $database[2][-1]; ?></td>
                                    <td><?php echo $database[3][-1]; ?></td>
                                    <td><?php echo $database[4][-1]; ?></td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td><?php echo $database[5][-1]; ?></td>
                                    <td><?php echo $database[6][-1]; ?></td>
                                    <td><?php echo $database[7][-1]; ?></td>
                                    <td><?php echo $database[8][-1]; ?></td>
                                    <td><?php echo $database[9][-1]; ?></td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td><?php echo $database[10][-1]; ?></td>
                                    <td><?php echo $database[11][-1]; ?></td>
                                    <td><?php echo $database[12][-1]; ?></td>
                                    <td><?php echo $database[13][-1]; ?></td>
                                    <td><?php echo $database[14][-1]; ?></td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td><?php echo $database[15][-1]; ?></td>
                                    <td><?php echo $database[16][-1]; ?></td>
                                    <td><?php echo $database[17][-1]; ?></td>
                                    <td><?php echo $database[18][-1]; ?></td>
                                    <td><?php echo $database[19][-1]; ?></td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td><?php echo $database[20][-1]; ?></td>
                                    <td><?php echo $database[21][-1]; ?></td>
                                    <td><?php echo $database[22][-1]; ?></td>
                                    <td><?php echo $database[23][-1]; ?></td>
                                    <td><?php echo $database[24][-1]; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-light">
                    <div class="card-header bg-light">
                        <h1 class="w-100 text-center">Boletería</h1>
                    </div>
                    <div class="card-body">
                        <form action="index.php" method="post">
                            <div class="form-group">
                                <label for="fila">Fila</label>
                                <input type="text" name="fila" class="form-control" placeholder="Elegir fila" id="fila" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="puesto">Puesto</label>
                                <input type="text" name="puesto" class="form-control" placeholder="Elegir puesto" id="puesto" autocomplete="off">
                            </div>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input pull-right" type="checkbox" name="opcion" value="R"> Reservar
                                </label>
                            </div>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input pull-right" type="checkbox" name="opcion" value="V"> Comprar
                                </label>
                            </div>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="opcion" value="L"> Liberar
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" name="enviar" class="btn btn-primary mr-5">Enviar</button>
                                <button type="submit" name="borrar" class="btn btn-danger">Borrar</button>
                            </div>
                      </form>
                    </div>
                </div>
            </div>
          </div>
    </div>
<?php include 'footer.php'; ?>