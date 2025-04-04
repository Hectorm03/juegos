

<div class="container">
    <div class="alert alert-primary" role="alert">
        <strong>Agregar Categoria</strong>
    </div>
    
    <form method="post">
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Nombre de la Categoria</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="inputName" placeholder="Ingrese el nombre" required />
            </div>
        </div>
        
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button name="ok1" type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>
</div>

<div class="container">
    <div class="card">
        <div class="card-header alert alert-dark">Categorias Agregados</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</div>
