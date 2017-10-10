<ul class="list-group">
  {foreach from=$categorias item=categoria}
      <li class="list-group-item">
        {if !$categoria['nombre'] }
          <s>{$categoria['nombre']} : {$categoria['descripcion']}</s>
        {else}
            {$categoria['nombre']} : {$categoria['descripcion']}
        {/if}
        <a href="borrarCategoria/{$categoria['id']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        <!-- <a href="finalizarProducto/{$producto['id']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a> -->
        <!-- <a href="finalizarProducto/{$producto['id']}"><img src="/open-iconic/svg/circle-x.svg"></a> -->
    </li>
  {/foreach}
</ul>
