<?php

# Based on Turanic

namespace pocketmine\block;

use pocketmine\item\Item;

class UndyedShulkerBox extends ShulkerBox{

    protected $id = self::UNDYED_SHULKER_BOX;

    public function __construct($meta = 0){
        $this->meta = $meta;
    }

    public function getDrops(Item $item){
        return [
            [$this->id, 0, 1]
        ];
    }
}