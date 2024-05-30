{include 'htmlStart.tpl'}


<table class="table table-success table-striped mt-2 text-center">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Saldo</th>
            <th scope="col">Email</th>
            <th scope="col">Activado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>

        {if !isset($agente)}
            <tr>
                <td colspan=5>El agente no existe</td>
            </tr>
        {/if} 

        {$class = ($agente->activado) ? "activado": ""}
        <tr class={$class}>
            <td>{$agente->nombre}</td>
            <td>{$agente->saldo}</td>
            <td>{$agente->email}</td>
            {$estado = ($agente->activado) ?  "Agente activado": "Agente desactivado"}
            <td>{$estado}</td>
            <td>
            <a href='delete/{$agente->id_agente}' class=' btn btn-danger'>Eliminar</a>
            
            
            {if !$agente->activado}
               
                <a href='active/{$agente->id_agente}' class=' btn btn-success'>Activar</a>
                
            
            
            {else}
            
                <a href='desactive/{$agente->id_agente}' class=' btn btn-success'>Desactivar</a>
                
                
            {/if}
            </td>
              

        </tr>


{include 'htmlEnd.tpl'}