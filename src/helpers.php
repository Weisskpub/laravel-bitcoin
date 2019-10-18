<?php

if (! function_exists('bitcoind')) {
    /**
     * Get bitcoind client instance.
     *
     * @return \Weisskpub\Bitcoin\Client
     */
    function bitcoind()
    {
        return app('bitcoind');
    }
}
