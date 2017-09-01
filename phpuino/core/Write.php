<?php
/**
 *  Phpuino - Manipulando porta serial arduino com php, atraves de leitura via streams
 *  @version: v1.0.0
 *  @author: Walderlan Sena <eu@walderlan.xyz>
 *  @copyright: Walderlan Sena - 2017
 */
namespace Core;

class Write extends Phpuino
{
    private $Phpuino;

    public function __construct(Phpuino $Phpuino)
    {
        $this->Phpuino = $Phpuino;
    }//end construct

    public function write($buffer)
    {
        $this->Phpuino->openPort();
        $this->Phpuino->writeData($buffer);
        $this->Phpuino->closePort();
    }//end write
}//end class Write
