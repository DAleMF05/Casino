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
       
        <tr>
            <td>{$agente->nombre}</td>
            <td>{$agente->saldo}</td>
            <td>
            <a href='mostrarClientes/{$agente->id_agente}' class='btn btn-primary'>Ver Clientes</a>
            <a href='delete/{$agente->id_agente}' class='btn btn-danger'>Eliminar</a>
            </td>
            
        </tr>
        {/foreach}

        {include 'htmlEnd.tpl'}
