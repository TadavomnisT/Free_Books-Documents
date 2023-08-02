#!/bin/bash

if [ -z "$1" ]
  then
    echo "[*]ERROR: No argument supplied."
    exit
fi

if [ "$1" == "-h" ]
  then
    echo -e "This script converts .odf file into .html/.md/.pdf files \nusing \`libreoffice\` and \`html2md\` \n\n Usage: build.sh FILE_NAME.odt"
    exit
fi

if ! type "libreoffice" > /dev/null;
  then
    echo "[*]ERROR: \`libreoffice\` is not installed."
    exit
fi

if ! type "pandoc" > /dev/null;
  then
    echo "[*]ERROR: \`pandoc\` is not installed."
    exit
fi

if ! test -f "$1";
  then
    echo "[*]ERROR: File \`$1\` does not exist."
    exit
fi

libreoffice --convert-to pdf "$1";

echo "[*] Created ${1%.*}.pdf";

libreoffice --convert-to html "$1";

echo "[*] Created ${1%.*}.html";

pandoc -t gfm "${1%.*}.odt" > "${1%.*}.md";

echo "[*] Created ${1%.*}.md";

pandoc -w mediawiki "${1%.*}.md" -o "${1%.*}.mediawiki";

echo "[*] Created ${1%.*}.mediawiki";
