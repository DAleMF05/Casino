{include 'htmlStart.tpl'}

{include 'formAddclientes.tpl'}

<table class="table table-success table-striped mt-2 text-center">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Saldo</th>
            <th scope="col">Activado</th>
            <th scope="col">Acciones</th>
            <th scope="col">Agente Padre</th>
        </tr>
    </thead>
    <tbody>

        {if $clientes == 0}
            <tr>
                <td colspan=5>No hay clientes para mostrar</td>
            </tr>
        {/if}

    {foreach $clientes as $cliente}
       
        <tr>

            {$class = ($cliente->activado) ? "activado": ""}
            <tr class={$class}>
                <td>{$cliente->nombre_usuario}</td>
                <td>{$cliente->saldo_cliente}</td>

                {$estado = ($cliente->activado) ?  "cliente activado": "cliente desactivado"}
                <td>{$estado}</td>
                <td>
                    <a href='deleteClient/{$cliente->id_cliente}' class=' btn btn-danger'>Eliminar</a>
                    
                    
                    {* {if !$cliente->activado}
                    
                        <a href='cambiarEstado/{$cliente->id_cliente}' class=' btn btn-success'>Activar</a>
                        
                    
                    
                    {else}
                    
                        <a href='cambiarEstado/{$cliente->id_cliente}' class=' btn btn-success'>Desactivar</a> *}
                        
                        
                    {* {/if} *}
                </td>
                <td>{$cliente->nombre}</td>
            
        </tr>
        {/foreach}

        {include 'htmlEnd.tpl'}
