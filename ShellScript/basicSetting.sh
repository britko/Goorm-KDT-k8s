#!/bin/bash

sudo apt update
sudo apt install -y net-tools
sudo apt install -y tree
# echo -e "alias cp='cp -i'\nalias rm='rm -i'" >> ~/.bashrc

# configure Vim
touch ~/.vimrc && echo -e "set tabstop=4\nset number\nset ai\nset si\nset hlsearch\nset nocompatible\nset roler\nset title\nset mouse=a\nset bs=indent,eol,start\nset showmatch\n">> ~/.vimrc

mkdir ~/work
crontab 30 * * * * /usr/bin/ls -FS / > ~/work/cron.out