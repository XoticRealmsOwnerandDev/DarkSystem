@echo off
TITLE DarkSystem
cd /d %~dp0

if exist bin\php\php.exe (
	set PHPRC=""
	set PHP_BINARY=bin\php\php.exe
) else (
	set PHP_BINARY=php
)

if exist DarkSystem.phar (
	set DARKSYSTEM_FILE=DarkSystem.phar
) else (
	if exist DarkSystem*.phar (
		set DARKSYSTEM_FILE=DarkSystem*.phar
	) else (
		if exist PocketMine-MP.phar (
			set DARKSYSTEM_FILE=PocketMine-MP.phar
		) else (
		    if exist src\pocketmine\PocketMine.php (
		        set DARKSYSTEM_FILE=src\pocketmine\PocketMine.php
			) else (
		        echo "[ERROR] Couldn't find a valid DarkSystem installation."
		        pause
		        exit 1
		    )
	    )
	)
)

if exist bin\php\php_wxwidgets.dll (
    %PHP_BINARY% %DARKSYSTEM_FILE% --enable-gui %*
) else (
    if exist bin\mintty.exe (
        start "" bin\mintty.exe -o Columns=88 -o Rows=32 -o AllowBlinking=0 -o FontQuality=3 -o Font="DejaVu Sans Mono" -o FontHeight=10 -o CursorType=0 -o CursorBlinks=1 -h error -t "DarkSystem" -w max %PHP_BINARY% %DARKSYSTEM_FILE% --enable-ansi %*
    ) else (
        %PHP_BINARY% -c bin\php %DARKSYSTEM_FILE% %*
    )
)
