<?php
# source: goods.proto

namespace Protoc\Box\Goods;

use Google\Protobuf\Internal\GPBUtil;


class Response extends \Google\Protobuf\Internal\Message
{

    /**
     * 
     * @var string
     */
    private $name = "";


    /**
     * Response constructor.
     * @param array $init
     */
    public function __construct(array $init = [])
    {
        \Protoc\Box\Goods\Metadata\Goods::init();
        parent::__construct();
    }


    

    /**
     * 
     * @return string
     */
    public function getName() : string
    {
        
        return $this->name;
        
    }

    /**
     * 
     * @param string $var
     * @return self
     */
    public function setName(string $var) : self
    {
        $this->name = $var;
        return $this;
    }

}
