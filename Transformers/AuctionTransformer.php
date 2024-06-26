<?php

namespace Modules\Iauctions\Transformers;

use Modules\Core\Icrud\Transformers\CrudResource;

class AuctionTransformer extends CrudResource
{
    /**
     * Method to merge values with response
     */
    public function modelAttributes($request)
    {
        return [
            'statusName' => $this->statusName,
            'typeName' => $this->typeName,
        ];
    }
}
