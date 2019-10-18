<?php

namespace Weisskpub\Bitcoin\Traits;

trait Bitcoind
{
    public function bitcoind()
    {
        return app('bitcoind');
    }
}
