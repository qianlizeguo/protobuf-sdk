<?php
# source: goods.proto

namespace Protoc\Box\Goods\Clients;

use Protoc\Box\Goods\Request;
use Protoc\Box\Goods\Response;


class Goods extends \Carno\RPC\Client implements \Protoc\Box\Goods\Contracts\Goods
{

    /**
     * 
     * @var Request $request
     * @return Response
     */
    public function get(Request $request)
    {
        return $this->request('protoc.box.goods', 'Goods', 'get', $request, new Response);
    }

}
