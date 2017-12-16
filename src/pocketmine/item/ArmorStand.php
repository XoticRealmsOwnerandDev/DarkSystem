<?php

#______           _    _____           _                  
#|  _  \         | |  /  ___|         | |                 
#| | | |__ _ _ __| | _\ `--. _   _ ___| |_ ___ _ __ ___   
#| | | / _` | '__| |/ /`--. \ | | / __| __/ _ \ '_ ` _ \  
#| |/ / (_| | |  |   </\__/ / |_| \__ \ ||  __/ | | | | | 
#|___/ \__,_|_|  |_|\_\____/ \__, |___/\__\___|_| |_| |_| 
#                             __/ |                       
#                            |___/

namespace pocketmine\item;

use pocketmine\block\Block;
use pocketmine\entity\Entity;
use pocketmine\level\Level;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\DoubleTag;
use pocketmine\nbt\tag\FloatTag;
use pocketmine\nbt\tag\ListTag;
use pocketmine\Player;

class ArmorStand extends Item{

    /**
     * @param int $meta
     * @param int $count
     */
    public function __construct($meta = 0, $count = 1){
        parent::__construct(self::ARMOR_STAND, $meta, $count, "Armor Stand");
    }

    public function canBeActivated(){
        return true;
    }

    public function onActivate(Level $level, Player $player, Block $block, Block $target, $face, $fx, $fy, $fz){
        $nbt = new CompoundTag("", [
            new ListTag("Pos", [
                new DoubleTag("", $block->x + 0.5),
                new DoubleTag("", $block->y),
                new DoubleTag("", $block->z + 0.5)
            ]),
            new ListTag("Motion", [
                new DoubleTag("", 0),
                new DoubleTag("", 0),
                new DoubleTag("", 0)
            ]),
            new ListTag("Rotation", [
                new FloatTag("", $this->getDirection($player->yaw)),
                new FloatTag("", 0)
            ]),
        ]);
        
        $entity = Entity::createEntity("ArmorStand", $level, $nbt);

        if($entity != null){
            if($player->isLiving()){
                $item = $player->getItemInHand();
                $item->setCount($item->getCount() - 1);
                $player->getInventory()->setItemInHand($item);
            }
            $entity->spawnToAll();
            return true;
        }
        return false;
    }

    public function getDirection($yaw){
        $rotation = $yaw % 360;
        if($rotation < 0){
            $rotation += 360.0;
        }
        if((0 <= $rotation && $rotation < 22.5) || (337.5 <= $rotation && $rotation < 360)){
            return 180;
		}elseif(22.5 <= $rotation && $rotation < 67.5){
            return 225;
		}elseif(67.5 <= $rotation && $rotation < 112.5){
            return 270;
		}elseif(112.5 <= $rotation && $rotation < 157.5){
            return 315;
		}elseif(157.5 <= $rotation && $rotation < 202.5){
            return 0;
		}elseif(202.5 <= $rotation && $rotation < 247.5){
            return 45;
		}elseif(247.5 <= $rotation && $rotation < 292.5){
            return 90;
		}elseif(292.5 <= $rotation && $rotation < 337.5){
            return 135;
		}else{
            return 0;
		}
    }
}