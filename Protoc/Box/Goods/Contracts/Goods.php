<?php
# source: goods.proto

namespace Protoc\Box\Goods\Contracts;

use Protoc\Box\Goods\Request;
use Protoc\Box\Goods\Response;


interface Goods
{

    /**
     * 
     * @var Request $request
     * @return Response
     */
    public function get(Request $request);

}
