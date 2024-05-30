<form class="col-3 m-auto" action="crearCliente" method="POST">
    
      <legend class="text-center">Crear Cliente</legend>
      <div class="mb-3">
        <label class="form-label">Nombre de Cliente</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
      </div>
      <div class="mb-3">
        <label class="form-label">Saldo</label>
        <input type="double" name="saldo" class="form-control" placeholder="Ingrese saldo">
      </div>
      <div class="mb-3">
        <label class="form-label">Estado de cliente</label>
        <select  name="activado" class="form-select">
          <option value="0">Desactivado</option>
          <option value="1">Activado</option>  
        </select>
      </div>
      
      <input name="id_agente" class="form-control" hidden value={$id}>
  
      <button type="submit" class="btn btn-primary col-12">Crear Cliente</button>
  </form>