DIR="$(cd -P "$( dirname "${BASH_SOURCE[0]}" )" && pwd)"
cd "$DIR"

DO_LOOP="no"

while getopts "p:f:l" OPTION 2> /dev/null; do
	case ${OPTION} in
		p)
			PHP_BINARY="$OPTARG"
			;;
		f)
			DARKSYSTEM_FILE="$OPTARG"
			;;
		l)
			DO_LOOP="yes"
			;;
		\?)
			break
			;;
	esac
done

if [ "$PHP_BINARY" == "" ]; then
	if [ -f ./bin/php7/bin/php ]; then
		export PHPRC=""
		PHP_BINARY="./bin/php7/bin/php"
	elif [[ ! -z $(type php) ]]; then
		PHP_BINARY=$(type -p php)
	else
		echo "Couldn't find a working PHP 7 binary, please use the installer."
		exit 1
	fi
fi

if [ "$DARKSYSTEM_FILE" == "" ]; then
	if [ -f ./DarkSystem.phar ]; then
		DARKSYSTEM_FILE="./DarkSystem.phar"
	elif [ -f ./DarkSystem*.phar ]; then
		DARKSYSTEM_FILE="./DarkSystem*.phar"
	elif [ -f ./PocketMine-MP.phar ]; then
		DARKSYSTEM_FILE="./PocketMine-MP.phar"
	elif [ -f ./src/pocketmine/PocketMine.php ]; then
		DARKSYSTEM_FILE="./src/pocketmine/PocketMine.php"
	else
		echo "Couldn't find a valid DarkSystem installation"
		exit 1
	fi
fi

LOOPS=0

set +e
while [ "$LOOPS" -eq 0 ] || [ "$DO_LOOP" == "yes" ]; do
	if [ "$DO_LOOP" == "yes" ]; then
		"$PHP_BINARY" "$DARKSYSTEM_FILE" $@
	else
		exec "$PHP_BINARY" "$DARKSYSTEM_FILE" $@
	fi
	if [ "$DO_LOOP" == "yes" ]; then
		if [ ${LOOPS} -gt 0 ]; then
			echo "Restarted $LOOPS times"
		fi 
		echo "To escape the loop, press CTRL+C now. Otherwise, wait 2 seconds for the server to restart."
		echo ""
		sleep 2
		((LOOPS++))
	fi
done
