


Ressources
=============

> questions
http://www.penguintutor.com/quiz/question.php

> git ressource
https://github.com/kenju/lpic

> about the c shell
http://www.grymoire.com/Unix/Csh.html

## Linux main directory

- boot  : necessarry file for start up system like Linux kernel
- bin   : command for general users
- dev   : device files
- etc   : system setting files
- home  : home directory for users
- lib   : library
- media : mount point for outer media
- proc  : process information of system
- root  : home directory for root users
- sbin  : commands for system admin users
- tmp   : temporary files
- usr   : programs, libraries, documents, etc.
- var   : frequently updated files like log files



# Commands

uname -a
cat /proc/version
cat /etc/*release

## Quiz 21-10-2018

> dmesg : display the system errors from boot

> man command
https://www.computerhope.com/unix/uman.htm

What is the environment variable that determines what directories are searched by the man command?

$MANPATH 

> df (disk filesystem)

> runlevel : http://www.linfo.org/runlevel_def.html


 > Which section of the man pages holds the file formats?

man1
man2
man3
man4
man5
man6
man7
man8
man9

> https://www-users.york.ac.uk/%7Emijp1/teaching/2nd_year_Comp_Lab/guides/grep_awk_sed.pdf
°

> lsmod display linux modules

> 
Fill in the blank:
Using the mount command to mount a disc image (e.g. an ISO), the -o _______ option is used. Assume we are going to use any available device, rather than choosing a specific one. The answer should be one word


Question 24 of 25

Which of the following commands can be used to partition up a disk in preparation for installing the Linux operating system, or creating a disk for data storage?

admin
fdisk
format
mkfs
Answer

Incorrect

The correct answer is fdisk. The admin command is used to administer SCCS and is nothing to do with disk partitioning. The format command does not exist on linux. The mkfs command is used to create a filesystem after the partitions have been created.



# Learning linux


## Commands

> pg
> nice
> renice

> man
man -k list 

> apropos list
> which echo
affiche la commande echo

> tee
The line above will take any output from the command and put a copy in file1 as well as sending it to the screen. This could be combined further by allowing the output to be further processed by another command. The tee command can be used any number of times in a pipeline like this.


## About the shell
Linux Basic Shell Reference Guide

chsh : permet de changer de schell

Liste de shell : bourne shell, korn shell, bash (bourne again shell)

When you login to a shell a number of variables and settings are configured for your shell. The files that are most commonly used by bash are:

    /etc/profile
    ~/.bash_profile
    ~/.bashrc
    ~/.bash_logout


## About man

The man pages are split into sections. These sections are:

    1 User commands/li>
    System calls
    3 Library functions
    4 Devices and device drivers
    5 File formats
    6 Games
    7 Miscellaneous
    8 System and operation

The man files are all held within the directories listed in the $MANPATH environment variable.

### wathis database

> create with catman -w
> apropos list


# Linux command basics reference guide


Redirecting Standard Error (stderr) 2>

Whilst you may see all the output from a command on a single screen this is not all neccessarily coming from stdout. There is also another data stream called standard error which by default is directed to the same screen as stdout. This data stream is used to send messages regarding any error messages. The advantage of having errors as a separate stream is that even if you redirect stdout to a file you will instantly see any error messages on the screen.

If the command is running automatically without user interaction then there may not be any one to see messages put on the screen. The standard error data stream can therefore be redirected in a similar way to stdout by prefixing the redirect by the number 2 digit. In fact the stdout data stream should be prefixed by the number 1 digit however this is dropped to save typing. To redirect any error messages to an error.log file and the normal responses to a log file the following would be used.

command >log.file 2>error.log

sort file1 >/temp/tmp$$
mv /tmp/tmp$$ file1

The file ending in $$ will actually be created by the system with a unique number. This is useful for temporary files as it prevents you overwriting a temporary file in use by a different process.

