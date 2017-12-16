<?php

#______           _    _____           _                  
#|  _  \         | |  /  ___|         | |                 
#| | | |__ _ _ __| | _\ `--. _   _ ___| |_ ___ _ __ ___   
#| | | / _` | '__| |/ /`--. \ | | / __| __/ _ \ '_ ` _ \  
#| |/ / (_| | |  |   </\__/ / |_| \__ \ ||  __/ | | | | | 
#|___/ \__,_|_|  |_|\_\____/ \__, |___/\__\___|_| |_| |_| 
#                             __/ |                       
#                            |___/

namespace pocketmine\inventory;

class InventoryType{
	
	const CHEST = 0;
	const DOUBLE_CHEST = 1;
	const PLAYER = 2;
	const FURNACE = 3;
	const CRAFTING = 4;
	const WORKBENCH = 5;
	const STONECUTTER = 6;
	const BREWING_STAND = 7;
	const ANVIL = 8;
	const ENCHANT_TABLE = 9;
	const DISPENSER = 10;
	const DROPPER = 11;
	const HOPPER = 12;
	const ENDER_CHEST = 13;
	const BEACON = 14;
	const COMMAND_BLOCK = 15;

	private static $default = [];

	private $size;
	private $title;
	private $typeId;

	/**
	 * @param $index
	 *
	 * @return InventoryType
	 */
	public static function get($index){
		return isset(static::$default[$index]) ? static::$default[$index] : null;
	}

	public static function init(){
		if(count(static::$default) > 0){
			return false;
		}
		
		static::$default[static::CHEST] = new InventoryType(27, "Chest", 0);
		static::$default[static::DOUBLE_CHEST] = new InventoryType(54, "Double Chest", 0);
		static::$default[static::PLAYER] = new InventoryType(41, "Player", 0);
		static::$default[static::FURNACE] = new InventoryType(3, "Furnace", 2);
		static::$default[static::CRAFTING] = new InventoryType(5, "Crafting", 1);
		static::$default[static::WORKBENCH] = new InventoryType(10, "Crafting", 1);
		static::$default[static::STONECUTTER] = new InventoryType(10, "Crafting", 1);
		static::$default[static::ENCHANT_TABLE] = new InventoryType(2, "Enchant", 3);
		static::$default[static::BREWING_STAND] = new InventoryType(4, "Brewing", 4);
		static::$default[static::ANVIL] = new InventoryType(3, "Anvil", 5);
		static::$default[static::DISPENSER] = new InventoryType(9, "Dispenser", 6);
		static::$default[static::DROPPER] = new InventoryType(9, "Dropper", 7);
		static::$default[static::HOPPER] = new InventoryType(5, "Hopper", 8);
		static::$default[static::COMMAND_BLOCK] = new InventoryType(0, "Command Block", 1);
		static::$default[static::ENDER_CHEST] = new InventoryType(27, "Ender Chest", 0);
		static::$default[static::BEACON] = new InventoryType(0, "Beacon", 13);
	}

	/**
	 * @param int    $defaultSize
	 * @param string $defaultTitle
	 * @param int    $typeId
	 */
	private function __construct($defaultSize, $defaultTitle, $typeId = 0){
		$this->size = $defaultSize;
		$this->title = $defaultTitle;
		$this->typeId = $typeId;
	}

	/**
	 * @return int
	 */
	public function getDefaultSize(){
		return $this->size;
	}

	/**
	 * @return string
	 */
	public function getDefaultTitle(){
		return $this->title;
	}

	/**
	 * @return int
	 */
	public function getNetworkType(){
		return $this->typeId;
	}
	
}
