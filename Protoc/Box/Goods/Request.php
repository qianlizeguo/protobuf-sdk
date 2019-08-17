<?php
# source: goods.proto

namespace Protoc\Box\Goods;

use Google\Protobuf\Internal\GPBUtil;


class Request extends \Google\Protobuf\Internal\Message
{

    /**
     * 
     * @var int
     */
    private $id = 0;

    /**
     * 
     * @var string
     */
    private $name = "";


    /**
     * Request constructor.
     * @param array $init
     */
    public function __construct(array $init = [])
    {
        \Protoc\Box\Goods\Metadata\Goods::init();
        parent::__construct();
    }


    

    /**
     * 
     * @return int
     */
    public function getId() : int
    {
        
        return $this->id;
        
    }

    /**
     * 
     * @param int $var
     * @return self
     */
    public function setId(int $var) : self
    {
        $this->id = $var;
        return $this;
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
