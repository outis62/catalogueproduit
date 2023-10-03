<?php

use App\Models\Produit;

function deleteItem($model, $id)
{

    $item = Produit::find($id);

    if ($item) {
        $item->delete();
        return true;
    }

    return false;
}
