{include 'htmlStart.tpl'}

<div class="card mt-3" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{$agente->nombre}</li>
        <li class="list-group-item">{$agente->saldo}</li>
        <li class="list-group-item">{$agente->acciones}</li>
    </ul>
</div>
<a href="agentes" class="btn btn-primary mt-3">Volver</a>

{include 'htmlEnd.tpl'}