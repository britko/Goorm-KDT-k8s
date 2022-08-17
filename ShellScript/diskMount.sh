#!/bin/bash

# manipulate disk partition table
sudo fdisk /dev/sdb

# build a Linux filesystem
sudo mkfs.ext4 /dev/sdb1

# setting for mount disk(sdb1)
sudo mkdir /mnt/exhdd
sudo chown $USER:$USER /mnt/exhdd

# Auto mount settings
uuid_sdb1=$(ls -l /dev/disk/by-uuid | grep sdb | awk '{print $9}')
echo -e "# extended disk /dev/sdb1\nUUID=$(echo $uuid_sdb1) /mnt/exhdd ext4 errors=remount-ro 0 1" | sudo tee -a /etc/fstab