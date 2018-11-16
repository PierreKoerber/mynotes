

#Qu'est-ce que Docker

Docker est un outil d'emballage et d'expédition d'applications. 

Basé sur l’idée d’un conteneur d’expédition, il offre aux développeurs ou aux administrateurs système un moyen normalisé de créer des images ou des collections d’images légères pour chaque élément d’une application, puis de déployer facilement et rapidement l’image. 

Étant donné que l'image est normalisée, elle peut être déployée de manière uniforme en développement ou en production, ce qui simplifie le flux de travail, accélère le temps de développement de l'équipe de développement et réduit les frais de gestion de l'équipe d'exploitation.

Tout d’abord, voici un aperçu de quelques aspects de Docker:

* Un outil open source qui place une couche au-dessus des conteneurs Linux (LXC) pour simplifier le conditionnement et l'expédition d'applications complexes

* Un outil pour créer un système de fichiers en couches; chaque couche est versionnée et peut être partagée entre les instances en cours d'exécution, ce qui permet des déploiements beaucoup plus légers

* Une entreprise derrière le projet, ainsi qu'un site appelé "Docker Hub" pour le partage de conteneurs

Et quelques choses que Docker n'est pas:

* Une machine virtuelle. Contrairement à une véritable machine virtuelle, un conteneur Docker ne nécessite pas non plus de système d'exploitation hôte, ce qui signifie qu'il est beaucoup plus fin qu'une vraie machine virtuelle.
* Un outil d'automatisation d'infrastructure, comme Puppet ou Chef. Comme ces autres outils, Docker est un acteur majeur dans l’espace DevOps, mais son objectif est de faire tourner des applications dans un environnement conteneur, par opposition à la représentation d’un état de la machine.

Ce guide présente les idées clés que vous utiliserez encore et encore dans Docker, telles que les images, les calques, les conteneurs, les validations, les balises, etc. Les principales choses à comprendre comprennent:

* une image est un état spécifique d'un système de fichiers
* une image est composée de couches représentant les modifications du système de fichiers à différents moments; les couches sont un peu comme l'historique de commit d'un dépôt git
* un conteneur est un processus en cours qui est démarré en fonction d'une image vous pouvez changer l'état du système de fichiers sur un conteneur et le valider pour créer une nouvelle image les modifications de mémoire / d'état ne sont pas validées - uniquement les modifications sur le système de fichiers


## Un peu de terminologie

## 


# Liens

* http://odewahn.github.io/docker-jumpstart/introduction.html