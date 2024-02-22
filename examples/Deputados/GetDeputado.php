<?php

namespace AlessonMarques\ApiClient\Plugin\Deputados;

use AlessonMarques\ApiClient\Mapping\ApiPlugin;
use AlessonMarques\ApiClient\Plugin\CamaraDeputados;

#[ApiPlugin(
    baseUrl: parent::BASE_URL,
    endpoint: "deputados/{id}",
    method: "GET",
)]
class GetDeputado extends CamaraDeputados
{
    public function get(string $id = ''): array
    {
        if (!$id) {
            throw new \Exception("The parameter Id must be informed.");
        }
        $params = [
            "id" => $id,
            'query' => [],
        ];
        return $this->do($params);
    }
}
