<?php

#______           _    _____           _                  
#|  _  \         | |  /  ___|         | |                 
#| | | |__ _ _ __| | _\ `--. _   _ ___| |_ ___ _ __ ___   
#| | | / _` | '__| |/ /`--. \ | | / __| __/ _ \ '_ ` _ \  
#| |/ / (_| | |  |   </\__/ / |_| \__ \ ||  __/ | | | | | 
#|___/ \__,_|_|  |_|\_\____/ \__, |___/\__\___|_| |_| |_| 
#                             __/ |                       
#                            |___/

namespace darksystem;

class StringTranslator{
	
	public function __construct(Server $server, $lang, $fallbackLang = "eng"){
		$this->server = $server;
		
		$path = \pocketmine\PATH . "src/darksystem/strings/";
		
		$this->loadLang($path . $lang . ".ini", $this->lang);
		$this->loadLang($path . $fallback . ".ini", $this->fallbackLang);
	}
	
    public static function translate($string){
    	if(!file_exists(\pocketmine\DATA . "sunucu.properties") && !file_exists(\pocketmine\DATA . "yoneticiler.json") && !file_exists(\pocketmine\DATA . "beyaz-liste.json")){
    	    $isTurkish = "no";
    	}else{
            $isTurkish = "yes";
    	}
    
    	return $isTurkish;
    }
    
    protected function loadLang($path, array &$d){
		if(file_exists($path) && strlen($content = file_get_contents($path)) > 0){
			foreach(explode("\n", $content) as $line){
				$line = trim($line);
				if($line === "" || $line{0} === "#"){
					continue;
				}

				$t = explode("=", $line);
				if(count($t) < 2){
					continue;
				}

				$key = trim(array_shift($t));
				$value = trim(implode("=", $t));

				if($value === ""){
					continue;
				}

				$d[$key] = $value;
			}
		}
	}
	
    public static function getServer(){
    	return $this->server;
    }
    
}
