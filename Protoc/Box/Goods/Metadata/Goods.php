<?php
# file: goods.proto

namespace Protoc\Box\Goods\Metadata;



class Goods
{
    private static $initialized = false;

    /**
     * Goods initialize
     */
    public static function init() : void
    {
        if (self::$initialized) {
            return;
        }

        

        \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool()->internalAddGeneratedFile(hex2bin(
        
            "0a6e0a0b676f6f64732e70726f746f121070726f746f632e626f782e676f" . 
            "6f6473222d0a0752657175657374120e0a02696418012001280552026964" . 
            "12120a046e616d6518022001280952046e616d65221e0a08526573706f6e" . 
            "736512120a046e616d6518012001280952046e616d65" . 
            ""
        ));

        self::$initialized = true;
    }
}
