<?php

namespace pocketmine\network\raknet\protocol;

use pocketmine\network\raknet\Binary;

abstract class AcknowledgePacket extends Packet{
	
    /** @var int[] */
    public $packets = [];

    public function encode(){
        parent::encode();
        $payload = "";
        sort($this->packets, SORT_NUMERIC);
        $count = count($this->packets);
        $records = 0;

        if($count > 0){
            $pointer = 1;
            $start = $this->packets[0];
            $last = $this->packets[0];

            while($pointer < $count){
                $current = $this->packets[$pointer++];
                $diff = $current - $last;
                if($diff === 1){
                    $last = $current;
                }elseif($diff > 1){ //Forget about duplicated packets (bad queues?)
                    if($start === $last){
                        $payload .= "\x01";
                        $payload .= Binary::writeLTriad($start);
                        $start = $last = $current;
                    }else{
                        $payload .= "\x00";
                        $payload .= Binary::writeLTriad($start);
                        $payload .= Binary::writeLTriad($last);
                        $start = $last = $current;
                    }
                    ++$records;
                }
            }

            if($start === $last){
                $payload .= "\x01";
                $payload .= Binary::writeLTriad($start);
            }else{
                $payload .= "\x00";
                $payload .= Binary::writeLTriad($start);
                $payload .= Binary::writeLTriad($last);
            }
            ++$records;
        }

        $this->putShort($records);
        $this->buffer .= $payload;
    }

    public function decode(){
        parent::decode();
        $count = $this->getShort();
        $this->packets = [];
        $cnt = 0;
        for($i = 0; $i < $count and !$this->feof() and $cnt < 4096; ++$i){
            if($this->getByte() === 0){
                $start = $this->getLTriad();
                $end = $this->getLTriad();
                if(($end - $start) > 512){
                    $end = $start + 512;
                }
                for($c = $start; $c <= $end; ++$c){
                    $this->packets[$cnt++] = $c;
                }
            }else{
                $this->packets[$cnt++] = $this->getLTriad();
            }
        }
    }

	public function clean(){
		$this->packets = [];
		return parent::clean();
	}
}