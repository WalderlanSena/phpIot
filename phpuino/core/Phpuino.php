<?php
/**
 *  Phpuino - Manipulando porta serial arduino com php, atraves de leitura via streams
 *  @version: v1.0.0
 *  @author: Walderlan Sena <eu@walderlan.xyz>
 *  @copyright: Walderlan Sena - 2017
 */
namespace Core;

class Phpuino
{
    private $port;
    private $openPort;
    private $buffer;

    /**
     *  Seta o nome da porta serial a ser aberta
     *  @param nome da porta. Ex: /dev/ttyACM1
     */
    public function setPort($port)
    {
        $this->port = $port;
    }//end setPort

    protected function getPort()
    {
        return $this->port;
    }//end getPort

    /**
     *  Realizando a abertura da porta serial atráves do fopen
     */
    public function openPort()
    {
        $this->openPort = fopen($this->getPort(),'r+');
        return true;
    }//end openPort

    /**
     *  Fechado a conexão
     */
    protected function closePort()
    {
        return fclose($this->openPort);
    }//end closePort

    /**
     *  Realiza a escrita de dados na porta respectiva
     *  @return fwrite
     */
    protected function writeData($buffer)
    {
        sleep(2);   //Espera 2s para realizar o fluxo de escrita na porta setada
        return fwrite($this->openPort, $buffer);
    }//end write
    /**
     *  Realiza leitura da porta serial
     */
    protected function readData($cout)
    {
        if ($this->openPort) {
            // buscando o dado a ser impresso
            while (!feof($this->openPort)) {
                // Imprimindo o dados na tela caso exista
                $this->buffer = fgets($this->openPort, $cout);
                return $this->buffer;
            }//end while
        }//end if
    }//end printData

}//end init
