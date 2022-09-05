#!/bin/bash
###############
## CONFIG
###############
PHOTOBOOTH_PATH=(
	'/var/www/html'
	'/var/www/html/photobooth'
)
MOD_FOLDER="mod"
WEB_GROUP="www-data"
LOGLEVEL=3

###############
## FUNCTION
###############
function Info {
	if [ $LOGLEVEL -gt 1 ]; then
		COL='\033[1;33m'
		NC='\033[0m'
		printf "${COL}[INFO]\t\t${NC} ${1}\n"
	fi
}

function Success {
	if [ $LOGLEVEL -gt 2 ]; then
		COL='\033[1;32m'
		NC='\033[0m'
		printf "${COL}[SUCCESS]\t${NC} ${1}\n"
	fi
}

function Error {
	if [ $LOGLEVEL -gt 0 ]; then
		COL='\033[0;31m'
		NC='\033[0m'
		printf "${COL}[ERROR]\t\t${NC} ${1}\n"
	fi
}
###############
## CODE
###############
PHOTOBOOTH_FOUND=false
echo "

                    @@@@@@@@@@@@@@@@@@@
                   @@.               .@@
     %@@@@@@.     @@     @@@@@@@@@     @@
    @@@    @@*   @@.                   .@@
  &@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@&
@@@%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%@@@
@@                                                       @@
@@                     @@@@@@@@@@@@@.        *@@  @@@@@  @@
@@                  @@@@           @@@@                  @@
@@@@@@@@@@@@@@@@@@@@@    #@@@@@@@#    @@@@@@@@@@@@@@@@@@@@@
@@              @@@   @@@@(     (@@@@   @@@              @@
@@             &@@  .@@%           %@@.  @@&             @@
@@             @@   @@               @@   @@             @@
@@            %@@  @@*               /@@  @@%            @@
@@            @@%  @@       MOD       @@  %@@            @@
@@            *@@  @@&   INSTALLER   &@@  @@*            @@
@@             @@   @@*             *@@   @@             @@
@@              @@   @@@           @@@   @@              @@
@@%%%%%%%%%%%%%%%@@%   @@@@@&%&@@@@@   %@@%%%%%%%%%%%%%%%@@
@@@@@@@@@@@@@@@@@@@@@@     *&@&*     @@@@@@@@@@@@@@@@@@@@@@
@@                  ,@@@@&       &@@@@,                  @@
@@                      (@@@@@@@@@(                      @@
@@                                                       @@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
"
# User muss Root sein
if [ $UID != 0 ]; then
    Error "Skript nicht als root gestartet!"
    exit 1
fi

# Finde Basepath
Info "Check Install-Dir"
for path in "${PHOTOBOOTH_PATH[@]}"; do
	if [ -d "${path}" ]; then
		if [ -f "${path}/lib/configsetup.inc.php" ]; then
			PHOTOBOOTH_FOUND=true
			INSTALLFOLDERPATH="${path}"
			Success "Pfad gefunden: ${path}."
			break
		fi
	fi
done

if [ "$PHOTOBOOTH_FOUND" = false ]; then
	Error "Kein Installer gefunden"
	exit 1
fi

MOD_ROOT="${INSTALLFOLDERPATH}/${MOD_FOLDER}"
# Prüfe Infrastrutur
if [ -d "${MOD_ROOT}" ]; then
	Info "Mod-Dir existiert bereits"
else
	mkdir "${MOD_ROOT}"
	if [ -d "${MOD_ROOT}" ]; then
		Success "Mod-Dir wurde angelegt"
	else
		Error "Mod-Dir konnte nicht angelegt werden"
		exit 1
	fi
fi

Info "Repo wird geclont"
git clone https://github.com/Mythrandir89/photobooth-mod "${MOD_ROOT}"

Info "Nutzerrechte werden angepasst"
chown -R $WEB_GROUP "${MOD_ROOT}"
chgrp -R $WEB_GROUP "${MOD_ROOT}"
chmod -R 775 "${MOD_ROOT}"
#TODO

# BACKUP MOD Dir