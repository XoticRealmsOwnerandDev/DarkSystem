<img src="https://raw.githubusercontent.com/DarkYusuf13/DarkSystem/master/banner.png" border="0">


**An Advanced & Feature-rich Server Engine/Software For Minecraft (PE) Bedrock Edition 1.x.x & W10**

| Travis CI | Discord Chat Server |
| :---: | :---: |
[![Build Status](https://travis-ci.org/DarkYusuf13/DarkSystem.svg?branch=master)](https://travis-ci.org/DarkYusuf13/DarkSystem) | [![Discord](https://camo.githubusercontent.com/455152269a0ed38255ed15e375084d4dd08e0c98/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f636861742d6f6e253230646973636f72642d3732383944412e737667)](https://discord.gg/4TewN6v) |

### DarkSystem Special Android APP is Out!
You can download it [here](http://bit.do/darksystem_apk).<br>
**NOTE:** Language of app is Turkish, does not support English. Will be added soon.<br>

**We may have language problems :)**

# Features:
- DarkSystem is **# 1** about speed & no-lag. (We think so)
- Based on **old** PocketMine-MP for best performance and stability.
- Loads chunks region-to-region. It uses less CPU resources & loads chunks fast.
- Cached chunk loading (Loads chunks and levels with cache for speed.)
- MobAI Support (Almost all mobs can move & attack) (Support Attacking Movement)
- Smooth Movement (Players don't glitch or clip through the floor (if they are not in 1.2) while moving and does not throw them back.)
- MCPE 1.2 Support (DarkSystem is compatible with MC: Bedrock Edition/Better together update (aka 1.2))
- Auto Updater (DarkSystem is automatically updated from GitHub.) (!!! Not implemented yet !!!)
- More Biomes & Advanced Generator (DarkSystem supports more biomes than others softwares, loads levels fast)
- Anti-BOT (Bot Protection) (Blocks joining of MCPE Bots from same ip. Ex. MineBot)
- Anti-COOP Play (Like bot protection)
- Themes! (You can change theme in **server.properties**. Available themes: classic, dark, light, metal, energy, uranium)
- Ender Biome Support (No description :D)
- Advanced Fly Checker (Can be activated from config. May cause lag when moving. Checks if player is in the air better.)
- No Bad Packets! (Players only can send a few packets before logging in. Only LoginPacket, Resource and Behavior packs packets, and 1-2 required packets. Blocks AdventureSettingsPacket and SetPlayerGameType packet. Cool!)
- **InventoryAPI!** (You can create customizable virtual inventories!) (**InventoryAPI::createInventory(...)**)
- /ping Command (Allows to get quality of player's connection)
- /xyz Command (Allows to get players position)
- /createinv Command (Allows to open virtual inventories)
- Custom 1.2 and WIN10 Inventories (No Bug)
- More Mobs/Entities (Support Parrot, NPC, Chalkboard, LearnToCodeMascot and many more)
- Extended Plugin API (It is an api called as DarkAPI :D lol) (Support Compound & CompoundTag etc.)
- Compatible with newest plugins (API 3.x.x)
- Custom Query (When server starts, sets up a mySQL connection to specified host from config. Can be disabled from **server.properties**)
- MySQLManager (You can send data to website of your server about players' kills, deaths, money etc. quickly.) (**utils\MySQLManager**)
- If you want to have a fast cool and safe (Don't forget 'fast' :)) server, use DarkSystem!
- Colored & Clean Console (Console is really clean, does not send junk messages like plugin enabling, XBOX offline mode warn. etc.)
- AntiForceOP (Hackers cannot access to OP command, you are in safe :))
- Floating Text as Entity (On DarkSystem, floating text isn't a particle, it is an entity. So it blocks floating text hack or other. Also dissappearing floating texts is impossible.)
- Auto Lag Cleaner (How does it work? It automatically removes items and arrows from ground without occuping CPU.)
- Weather (Supports snow/rain/thunder)
- **DarkRCON!** (NOT PUBLISHED YET!) (An advanced rcon client for managing DarkSystem servers. Fully protected with password. 100% safe. Works on Android, Windows And more...)
- CustomUI (Allows to create fully customizable menus, can be added by /addui) (only +1.2)
- /addui Command (You can easily test CustomUIs with this) (/addui {player} {type:shop/alert/image/slider/dropdown/input/mix})
- Fully Turkish Language (DarkSystem Support %79 Turkish Language. How to set language to Turkish? Simple, choose language to **tur** on set-up wizard. After set **language:** to **tur** on **pocketmine.yml**) **Greek language comming soon**
- MultiVersion® support (**What is this?** We support **1.0.x, 1.1.x and 1.2.x** versions of Minecraft (PE) Bedrock Edition)
- Always up-to-date. We always add new block, items to DarkSystem. You can always find new things here when they are out.
- No junk tasks/threads on background. Anything cannot occupy the CPU resources and performance.
- Zoom Support (indev) (May be useful for PvP servers. Simply write /zoom.)
- World Teleporting (/world) (You can teleport to another world without a plugin, only with a simple command!)
- TextUtils (Idea from MiNET, code taken from Turanic. Allows to create more beautiful texts. Example, **TextUtils::center($message)** makes message in center.)
- BlockLauncher join Blocking (indev) (If you hate hackers, this is for you. How to use? It is fully automatic. But not implemented yet. Doesn't work...YET)
- Code is clean, FAST and SAFE, coded in PHP.
- More & Advanced Commands (/clear, /tpall, /clearchat /addui /zoom /world /morph /xyz /cave /summon /chunkinfo /ping /createinv etc.)
- Advanced Config **(pocketmine_advanced.yml)**
- DarkBot (Virtual Intelligent Bot; It can talk, help players, move etc.) (say "hi darkbot" in-game to test :))
- Other feautures:
 * Piston (indev)
 * Banner (1.2 only)
 * Parrots (1.2 only)
 * Rideable Car (indev)
 * Rideable Horse (indev)
 * Behavior Support (indev)
 * Armor Stand (1.2 only) (indev) (as tile, we will make it as entity) (progress: 10%)
 * Writable & Written Books (1.2 only)
 * Jukebox & Music Discs (1.2 only)
 * Working Command Block (indev) (progress 40%) 

# TODO List:
- [x] **Command Block (indev)**
- [ ] **Experience System (working)**
- [ ] **Map**
- [x] **Horse**
- [x] **Fireworks (%60)**
- [ ] **Armor Stand (made %10)**
- [x] **Throwing Potions**
- [x] **Writable & Written Books**
- [x] **Fully Working CustomUI**
- [ ] **Riding Minecart and Boat**
- [x] **Fully Redstone System**
- [x] **Multi-core**
- [x] **Jukebox**
- [x] **Pistons**
- [x] **Fully Multi-Language**
- [ ] **Mob Spawner**
- [x] **Item Frame**
- [x] **Auto lag cleaner**

# Known Bugs:
- When DarkSystem crash, server does not stop. (Solved 90%)
- DarkSystem's experience system does not work correctly. (Well its not a HUGE problem :D)

# Known Bugs in 1.2:
- Moving is glitchy. (Seen on Android OS & 32-bit machines, 64-bit should be OK!)
- AvailableCommandPacket problems

# Notes:
- DarkSystem does not support PMAnvil map format,it only supports Anvil and McRegion.
- DarkSystem's language is currently Turkish, but you can change it in pocketmine.yml (Supports 20+ Languages)
- Some strings, messages and lines may be in Turkish, we are adding translation to them on every update.
- DarkSystem is 68% stable now.It will be 90%+ in future
- /op command is renamed to /operator and you easily can enable/disable this command from **pocketmine_advanced.yml**.
- Splash potions and mob spawners are not supported yet. Sorry for this, they will be added soon...

# Test Server
- **COMING SOON**

# Get DarkSystem:
- Download the latest build from [Travis CI](https://travis-ci.org/DarkYusuf13/DarkSystem).
- PHP Binaries [here](https://github.com/LeverylTeam/PHP7-Binaries).
<!--* Installation instructions can be found in the [wiki](https://github.com/iTXTech/Genisys/wiki).-->
NOTE: **The master branch is the only officially supported.**
_All other branches are in testing and may be unstable. Do not use builds from other branches unless you are sure you understand the risks._

# Tools:
- [DevTools](https://github.com/pmmp/PocketMine-DevTools) - Plugin and server development tools plugin
- [Pocket Server](https://github.com/fengberd/MinecraftPEServer) - Run DarkSystem on Android devices
- [DarkSystem Android APP](http://bit.do/darksystem_apk) - DarkSystem Special Android APP for Android

# Resources
Your DarkSystem Server needs Visual Studio C++ Redistributable 2015 (For Windows).<br>
It can be downloaded [here](https://www.microsoft.com/en-us/download/details.aspx?id=48145)<br>

# Converting to .phar
- Download DevTools plugin.
- Start your server 
- Run `makeserver` command in the console.

It will drop a .phar file into DevTools data folder.

# License:
```
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
```

# Third-party Libraries/Protocols Used:
* __[PHP Sockets](http://php.net/manual/en/book.sockets.php)__
* __[PHP mbstring](http://php.net/manual/en/book.mbstring.php)__
* __[PHP SQLite3](http://php.net/manual/en/book.sqlite3.php)__
* __[PHP BCMath](http://php.net/manual/en/book.bc.php)__
* __[PHP pthreads](http://pthreads.org/)__: Threading for PHP - Share Nothing, Do Everything.
* __[PHP YAML](https://code.google.com/p/php-yaml/)__: The Yaml PHP Extension provides a wrapper to the LibYAML library.
* __[LibYAML](http://pyyaml.org/wiki/LibYAML)__: A YAML 1.1 parser and emitter written in C.
* __[cURL](http://curl.haxx.se/)__: cURL is a command line tool for transferring data with URL syntax
* __[Zlib](http://www.zlib.net/)__: A Massively Spiffy Yet Delicately Unobtrusive Compression Library
* __[Source RCON Protocol](https://developer.valvesoftware.com/wiki/Source_RCON_Protocol)__
* __[UT3 Query Protocol](http://wiki.unrealadmin.org/UT3_query_protocol)__
* __[PHP OpenSSL](http://php.net/manual/en/book.openssl.php)__: Cryptography and SSL/TLS Toolkit
