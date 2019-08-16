<?php

namespace NovaTesting\Assert;

use NovaTesting\NovaResponse;

trait AssertResources
{
    public $novaCardResponse;

    public function assertResourceCount($amount)
    {
        $this->assertJsonCount($amount, 'resources');

        return $this;
    }
}
