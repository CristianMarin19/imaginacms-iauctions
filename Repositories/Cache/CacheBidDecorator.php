<?php

namespace Modules\Iauctions\Repositories\Cache;

use Modules\Core\Icrud\Repositories\Cache\BaseCacheCrudDecorator;
use Modules\Iauctions\Repositories\BidRepository;

class CacheBidDecorator extends BaseCacheCrudDecorator implements BidRepository
{
    public function __construct(BidRepository $bid)
    {
        parent::__construct();
        $this->entityName = 'iauctions.bids';
        $this->repository = $bid;
    }
}
