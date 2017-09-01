<?php
/**
 *  Phpuino - Manipulando porta serial arduino com php, atraves de leitura via streams
 *  @version: v1.0.0
 *  @author: Walderlan Sena <eu@walderlan.xyz>
 *  @copyright: Walderlan Sena - 2017
 */
namespace Core;

class Read extends Phpuino
{
    private $Phpuino;

    public function __construct(Phpuino $Phpuino)
    {
        $this->Phpuino = $Phpuino;
    }

    public function read($cout)
    {
        $this->Phpuino->openPort();
        while (true)
            print $this->Phpuino->readData($cout);
    }//end
}
