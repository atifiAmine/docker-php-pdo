# Objectif : Créer un environnement php avec une base de donée mysql via PDO.
L'environnement de travail est constitué d'un dossier courant dockerconteneur et de trois sous-dossiers :
- Un dossier php qui contient un fichier index.php (et éventuellment info.php).
- Un dossier db (vide car image tirée d'un serveur web)
- Un dosier phpmyadmin (vide également)
  
## 1) Cloner le répot 
Vous devez cloner ce répot dans un système d'exploitation  ubuntu (par vmware ou via un invité de commande avec wsl sur windows).

## 2) Installer docker et docker-compose avec les commandes suivantes :
-Commande pour installer docker 
 ```bash
sudo apt install docker.io
```
-Commandes pour installer docker-compose 
```bash
curl -L “https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
```
```bash
chmod +x /usr/local/bin/docker-compose
```
```bash
ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose
```
```bash
docker-compose -v
```


