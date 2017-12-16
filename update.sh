#TODO: Finish
rm PocketMine-MP.phar

download_file "http://jenkins.haniokasai.com/job/DarkSystem-PMMP_12/lastSuccessfulBuild/artifact/artifacts/DarkSystem_PMMP1-2.phar" > PocketMine-MP.phar

echo "[*] DarkSystem have been updated!"

exit 0