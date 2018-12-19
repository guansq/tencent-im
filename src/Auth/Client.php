<?php

/*
 * This file is part of the halobear/tencent-im
 *
 * (c) guansq <94600115@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace TencentIm\Auth;

use TencentIm\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author guansq <94600115@qq.com>
 */
class Client extends BaseClient
{
    /**
     * @return array
     */
    public function scopes()
    {
        return $this->httpGet('auth/scopes');
    }
}
