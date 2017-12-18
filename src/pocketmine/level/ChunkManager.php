<?php

#______           _    _____           _                  
#|  _  \         | |  /  ___|         | |                 
#| | | |__ _ _ __| | _\ `--. _   _ ___| |_ ___ _ __ ___   
#| | | / _` | '__| |/ /`--. \ | | / __| __/ _ \ '_ ` _ \  
#| |/ / (_| | |  |   </\__/ / |_| \__ \ ||  __/ | | | | | 
#|___/ \__,_|_|  |_|\_\____/ \__, |___/\__\___|_| |_| |_| 
#                             __/ |                       
#                            |___/

namespace pocketmine\level;

use pocketmine\level\format\Chunk;

interface ChunkManager{
    /**
     * @param $x
     * @param $y
     * @param $z
     * @return mixed
     */
	public function getBlockIdAt($x, $y, $z);

    /**
     * @param $x
     * @param $y
     * @param $z
     * @param $id
     * @return mixed
     */
	public function setBlockIdAt($x, $y, $z, $id);

    /**
     * @param $x
     * @param $y
     * @param $z
     * @return mixed
     */
	public function getBlockDataAt($x, $y, $z);

    /**
     * @param $x
     * @param $y
     * @param $z
     * @param $data
     * @return mixed
     */
	public function setBlockDataAt($x, $y, $z, $data);

    /**
     * @return mixed
     */
	public function getYMask();

    /**
     * @return mixed
     */
	public function getMaxY();
}
