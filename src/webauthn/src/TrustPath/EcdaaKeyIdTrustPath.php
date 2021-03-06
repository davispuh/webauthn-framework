<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2018 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Webauthn\TrustPath;

class EcdaaKeyIdTrustPath implements TrustPath
{
    /**
     * @var string
     */
    private $ecdaaKeyId;

    public function __construct(string $ecdaaKeyId)
    {
        $this->ecdaaKeyId = $ecdaaKeyId;
    }

    public function getEcdaaKeyId(): string
    {
        return $this->ecdaaKeyId;
    }
}
