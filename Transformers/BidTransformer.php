<?php

namespace Modules\Iauctions\Transformers;

use Modules\Core\Icrud\Transformers\CrudResource;

class BidTransformer extends CrudResource
{
    /**
     * Method to merge values with response
     */
    public function modelAttributes($request)
    {
        return [
            'statusName' => $this->statusName,
        ];
    }
}
