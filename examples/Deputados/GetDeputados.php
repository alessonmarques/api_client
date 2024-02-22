<?php

namespace AlessonMarques\ApiClient\Plugin\Deputados;

use AlessonMarques\ApiClient\Mapping\ApiPlugin;
use AlessonMarques\ApiClient\Plugin\CamaraDeputados;

#[ApiPlugin(
    baseUrl: parent::BASE_URL,
    endpoint: "deputados",
    method: "GET",
)]
class GetDeputados extends CamaraDeputados
{
    public function getList(array $query = []): array
    {
        $params = [
            'query' => $query,
        ];
        return $this->do($params);
    }
}
