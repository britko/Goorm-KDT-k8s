#!/usr/bin/env bash
# config alias
sudo echo -e "alias cp='cp -i'\nalias rm='rm -i'" >> ~/.bashrc

# config Vim
sudo touch ~/.vimrc && sudo echo -e "set tabstop=4\nset number\nset ai\nset si\nset hlsearch\nset nocompatible\nset ruler\nset title\nset mouse=a\nset bs=indent,eol,start\nset showmatch\n">> ~/.vimrc

# config sshd
sudo sed -i 's/#PubkeyAuthentication/PubkeyAuthentication/g' /etc/ssh/sshd_config
sudo sed -i 's/PasswordAuthentication no/PasswordAuthentication yes/g' /etc/ssh/sshd_config
sudo systemctl restart sshd