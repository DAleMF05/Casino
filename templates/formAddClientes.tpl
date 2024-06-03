
<form class="col-3 m-auto" action="crearCliente" method="POST">
 <div class="formulario">
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
      <div class="mb-3">
      <label class="form-label">Agente Padre</label>
      <select  name="id_agente" class="form-select">
      {foreach $agentes as $agente}
        <option value="{$agente->id_agente}" >{$agente->nombre}</option>
      {/foreach}
      </select>
    </div>
</div>
    
  
      <button type="submit" class="btn btn-primary col-12">Crear Cliente</button>
</form>