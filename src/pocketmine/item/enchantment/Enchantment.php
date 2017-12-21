<?php

#______           _    _____           _                  
#|  _  \         | |  /  ___|         | |                 
#| | | |__ _ _ __| | _\ `--. _   _ ___| |_ ___ _ __ ___   
#| | | / _` | '__| |/ /`--. \ | | / __| __/ _ \ '_ ` _ \  
#| |/ / (_| | |  |   </\__/ / |_| \__ \ ||  __/ | | | | | 
#|___/ \__,_|_|  |_|\_\____/ \__, |___/\__\___|_| |_| |_| 
#                             __/ |                       
#                            |___/

namespace pocketmine\item\enchantment;

class Enchantment{

	const TYPE_INVALID = -1;

	const TYPE_ARMOR_PROTECTION = 0; // Protection
	const TYPE_ARMOR_FIRE_PROTECTION = 1; // Fire Protection
	const TYPE_ARMOR_FALL_PROTECTION = 2; // Feather Falling
	const TYPE_ARMOR_EXPLOSION_PROTECTION = 3; // Blast Protection
	const TYPE_ARMOR_PROJECTILE_PROTECTION = 4; // Projectile Protection
	const TYPE_ARMOR_THORNS = 5; // Thorns
	const TYPE_WATER_BREATHING = 6; // Respiration
	const TYPE_WATER_SPEED = 7; // Depth Strider
	const TYPE_WATER_AFFINITY = 8; // Aqua Affinity
	const TYPE_WEAPON_SHARPNESS = 9; // Sharpness
	const TYPE_WEAPON_SMITE = 10; // Smite
	const TYPE_WEAPON_ARTHROPODS = 11; // Bane of Arthropods
	const TYPE_WEAPON_KNOCKBACK = 12; // Knockback
	const TYPE_WEAPON_FIRE_ASPECT = 13; // Fire Aspect
	const TYPE_WEAPON_LOOTING = 14; // Looting
	const TYPE_MINING_EFFICIENCY = 15; // Efficency
	const TYPE_MINING_SILK_TOUCH = 16; // Silk Touch
	const TYPE_MINING_DURABILITY = 17; // Unbreaking
	const TYPE_MINING_FORTUNE = 18; // Fortune
	const TYPE_BOW_POWER = 19; // Power
	const TYPE_BOW_KNOCKBACK = 20; // Punch
	const TYPE_BOW_FLAME = 21; // Flame
	const TYPE_BOW_INFINITY = 22; // Infinity
	const TYPE_FISHING_FORTUNE = 23; // Luck of the Sea
	const TYPE_FISHING_LURE = 24; // Lure

	const RARITY_COMMON = 0;
	const RARITY_UNCOMMON = 1;
	const RARITY_RARE = 2;
	const RARITY_MYTHIC = 3;

	const ACTIVATION_EQUIP = 0;
	const ACTIVATION_HELD = 1;
	const ACTIVATION_SELF = 2;

	const SLOT_NONE = 0;
	const SLOT_ALL = 0b11111111111111;
	const SLOT_ARMOR = 0b1111;
	const SLOT_HEAD = 0b1;
	const SLOT_TORSO = 0b10;
	const SLOT_LEGS = 0b100;
	const SLOT_FEET = 0b1000;
	const SLOT_SWORD = 0b10000;
	const SLOT_BOW = 0b100000;
	const SLOT_TOOL = 0b111000000;
	const SLOT_HOE = 0b1000000;
	const SLOT_SHEARS = 0b10000000;
	const SLOT_FLINT_AND_STEEL = 0b10000000;
	const SLOT_DIG = 0b111000000000;
	const SLOT_AXE = 0b1000000000;
	const SLOT_PICKAXE = 0b10000000000;
	const SLOT_SHOVEL = 0b10000000000;
	const SLOT_FISHING_ROD = 0b100000000000;
	const SLOT_CARROT_STICK = 0b1000000000000;

	/** @var Enchantment[] */
	protected static $enchantments;

	public static function init(){
		self::$enchantments = new \SplFixedArray(256);
		// armor effects
		self::$enchantments[self::TYPE_ARMOR_PROTECTION] = new Enchantment(self::TYPE_ARMOR_PROTECTION, "%enchantment.protect.all", self::RARITY_COMMON, self::ACTIVATION_EQUIP, self::SLOT_ARMOR);
		self::$enchantments[self::TYPE_ARMOR_FIRE_PROTECTION] = new Enchantment(self::TYPE_ARMOR_FIRE_PROTECTION, "%enchantment.protect.fire", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_ARMOR);
		self::$enchantments[self::TYPE_ARMOR_FALL_PROTECTION] = new Enchantment(self::TYPE_ARMOR_FALL_PROTECTION, "%enchantment.protect.fall", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_FEET);
		self::$enchantments[self::TYPE_ARMOR_EXPLOSION_PROTECTION] = new Enchantment(self::TYPE_ARMOR_EXPLOSION_PROTECTION, "%enchantment.protect.explosion", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_ARMOR);
		self::$enchantments[self::TYPE_ARMOR_PROJECTILE_PROTECTION] = new Enchantment(self::TYPE_ARMOR_PROJECTILE_PROTECTION, "%enchantment.protect.projectile", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_ARMOR);
		self::$enchantments[self::TYPE_ARMOR_THORNS] = new Enchantment(self::TYPE_ARMOR_THORNS, "%enchantment.protect.thorns", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_SWORD);
		self::$enchantments[self::TYPE_WATER_BREATHING] = new Enchantment(self::TYPE_WATER_BREATHING, "%enchantment.protect.waterbrething", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_FEET);
		self::$enchantments[self::TYPE_WATER_SPEED] = new Enchantment(self::TYPE_WATER_SPEED, "%enchantment.waterspeed", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_FEET);
		self::$enchantments[self::TYPE_WATER_AFFINITY] = new Enchantment(self::TYPE_WATER_AFFINITY, "%enchantment.protect.wateraffinity", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_FEET);
		// weapon effects
		self::$enchantments[self::TYPE_WEAPON_SHARPNESS] = new Enchantment(self::TYPE_WEAPON_SHARPNESS, "%enchantment.weapon.sharpness", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_SWORD);
		self::$enchantments[self::TYPE_WEAPON_SMITE] = new Enchantment(self::TYPE_WEAPON_SMITE, "%enchantment.weapon.smite", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_SWORD);
		self::$enchantments[self::TYPE_WEAPON_ARTHROPODS] = new Enchantment(self::TYPE_WEAPON_ARTHROPODS, "%enchantment.weapon.arthropods", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_SWORD);
		self::$enchantments[self::TYPE_WEAPON_KNOCKBACK] = new Enchantment(self::TYPE_WEAPON_KNOCKBACK, "%enchantment.weapon.knockback", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_SWORD);
		self::$enchantments[self::TYPE_WEAPON_FIRE_ASPECT] = new Enchantment(self::TYPE_WEAPON_FIRE_ASPECT, "%enchantment.weapon.fireaspect", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_SWORD);
		self::$enchantments[self::TYPE_WEAPON_LOOTING] = new Enchantment(self::TYPE_WEAPON_LOOTING, "%enchantment.weapon.looting", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_SWORD);
		// tool effects
		self::$enchantments[self::TYPE_MINING_EFFICIENCY] = new Enchantment(self::TYPE_MINING_EFFICIENCY, "%enchantment.mining.efficiency", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_TOOL);
		self::$enchantments[self::TYPE_MINING_SILK_TOUCH] = new Enchantment(self::TYPE_MINING_SILK_TOUCH, "%enchantment.mining.silktouch", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_TOOL);
		self::$enchantments[self::TYPE_MINING_DURABILITY] = new Enchantment(self::TYPE_MINING_DURABILITY, "%enchantment.mining.durability", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_TOOL);
		self::$enchantments[self::TYPE_MINING_FORTUNE] = new Enchantment(self::TYPE_MINING_FORTUNE, "%enchantment.mining.fortune", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_TOOL);
		// bow effects
		self::$enchantments[self::TYPE_BOW_POWER] = new Enchantment(self::TYPE_BOW_POWER, "%enchantment.bow.power", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_BOW);
		self::$enchantments[self::TYPE_BOW_KNOCKBACK] = new Enchantment(self::TYPE_BOW_KNOCKBACK, "%enchantment.bow.knockback", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_BOW);
		self::$enchantments[self::TYPE_BOW_FLAME] = new Enchantment(self::TYPE_BOW_FLAME, "%enchantment.bow.flame", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_BOW);
		self::$enchantments[self::TYPE_BOW_INFINITY] = new Enchantment(self::TYPE_BOW_INFINITY, "%enchantment.bow.infinity", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_BOW);
		// fishing rod effects
		self::$enchantments[self::TYPE_FISHING_FORTUNE] = new Enchantment(self::TYPE_FISHING_FORTUNE, "%enchantment.fishing.fortune", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_FISHING_ROD);
		self::$enchantments[self::TYPE_FISHING_LURE] = new Enchantment(self::TYPE_FISHING_LURE, "%enchantment.fishing.lure", self::RARITY_UNCOMMON, self::ACTIVATION_EQUIP, self::SLOT_FISHING_ROD);
	}

	/**
	 * @param int $id
	 * @return $this
	 */
	public static function getEnchantment($id){
		if(isset(self::$enchantments[$id])){
			return clone self::$enchantments[(int) $id];
		}
		return new Enchantment(self::TYPE_INVALID, "unknown", 0, 0, 0);
	}

	public static function getEffectByName($name){ //EffectByName? (WTF)
		if(defined(Enchantment::class . "::TYPE_" . strtoupper($name))){
			return self::getEnchantment(constant(Enchantment::class . "::TYPE_" . strtoupper($name)));
		}
		return null;
	}
	
	public static function getEnchantMaxLevel(int $enchantmentId){
		switch($enchantmentId){
			case self::TYPE_ARMOR_PROTECTION:
			case self::TYPE_ARMOR_FIRE_PROTECTION:
			case self::TYPE_ARMOR_FALL_PROTECTION:
			case self::TYPE_ARMOR_EXPLOSION_PROTECTION:
			case self::TYPE_ARMOR_PROJECTILE_PROTECTION:
				return 4;
			case self::TYPE_ARMOR_THORNS:
				return 3;
			case self::TYPE_WATER_BREATHING:
			case self::TYPE_WATER_SPEED:
				return 3;
			case self::TYPE_WATER_AFFINITY:
				return 1;
			case self::TYPE_WEAPON_SHARPNESS:
			case self::TYPE_WEAPON_SMITE:
			case self::TYPE_WEAPON_ARTHROPODS:
				return 5;
			case self::TYPE_WEAPON_KNOCKBACK:
			case self::TYPE_WEAPON_FIRE_ASPECT:
				return 2;
			case self::TYPE_WEAPON_LOOTING:
				return 3;
			case self::TYPE_MINING_EFFICIENCY:
				return 5;
			case self::TYPE_MINING_SILK_TOUCH:
				return 1;
			case self::TYPE_MINING_DURABILITY:
			case self::TYPE_MINING_FORTUNE:
				return 3;
			case self::TYPE_BOW_POWER:
				return 5;
			case self::TYPE_BOW_KNOCKBACK:
				return 2;
			case self::TYPE_BOW_FLAME:
			case self::TYPE_BOW_INFINITY:
				return 1;
			case self::TYPE_FISHING_FORTUNE:
			case self::TYPE_FISHING_LURE:
				return 3;
		}
		return 999;
	}

	private $id;
	private $level = 1;
	private $name;
	private $rarity;
	private $activationType;
	private $slot;

	private function __construct($id, $name, $rarity, $activationType, $slot){
		$this->id = (int) $id;
		$this->name = (string) $name;
		$this->rarity = (int) $rarity;
		$this->activationType = (int) $activationType;
		$this->slot = (int) $slot;
	}

	public function getId(){
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}

	public function getRarity(){
		return $this->rarity;
	}

	public function getActivationType(){
		return $this->activationType;
	}

	public function getSlot(){
		return $this->slot;
	}

	public function hasSlot($slot){
		return ($this->slot & $slot) > 0;
	}

	public function getLevel(){
		return $this->level;
	}

	public function setLevel($level){
		$this->level = (int) min(5, $level);

		return $this;
	}

}
