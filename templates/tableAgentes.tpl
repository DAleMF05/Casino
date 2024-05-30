{include 'htmlStart.tpl'}

{include 'formAddAgentes.tpl'}

<table class="table table-success table-striped mt-2 text-center">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Saldo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>

        {if $agentes == 0}
            <tr>
                <td colspan=5>No hay agentes para mostrar</td>
            </tr>
        {/if}

    {foreach $agentes as $agente}
        {$class = ($agente->activado) ? "activado": ""}
        <tr class={$class}>
            <td>{$agente->nombre}</td>
            <td>{$agente->saldo}</td>
            {* <td>{$agente->email}</td> *}
            {* {$estado = ($agente->activado) ?  "agente activado": "agente desactivado"} *}
            <td>
            <a href='mostrarAgente/{$agente->id_agente}' class='btn btn-primary'>Ver</a>
            <a href='delete/{$agente->id_agente}' class='btn btn-danger'>Eliminar</a>
            </td>
            
            
            {* <td>{$estado}</td>
            {if !$agente->activado}
                <td>
                    <a href='finalize/{$agente->id_agente} class='btn btn-success'>Activar</a>
                </td>
            {else}
                <td>
                    <a href='show/{$agente->id_agente} class='btn btn-primary'>Ver</a>
                </td>
            {/if} *}
            
        </tr>
        {/foreach}

        {include 'htmlEnd.tpl'}
