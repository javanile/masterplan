#!/usr/bin/env bash

workdir=$(dirname $(realpath $0))
export PS1="Ciao> "
export ASCIINEMA_CONFIG_HOME=${workdir}
export ASCIINEMA_RCFILE=${workdir}/.bashrc
file=${workdir}/demo.cast

#echo "ASCIINEMA_CONFIG_HOME=${ASCIINEMA_CONFIG_HOME}"
#echo "Recording on file: ${file}"
mv ${file} ${file}.$(date +"%s")
clear
asciinema rec ${file}
