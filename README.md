# Client_Dereymaeker
projet de site client dans le cadre de la formation au sein du CF2m


PREMIERE CHOSE A FAIRE => INITIALISER GIT

### git init


Ensuite on y ajoute les liens qui nous permettront de récupérer le projet initial (avec PULL) et d'envoyer nos modifications (avec PUSH).

###push = envoyer
###pull = recuperer

On va procéder deux fois. La première pour avoir le lien de référence (le projet initial, hébergé par Dalyome/Mike). La seconde fois pour envoyer nos modifications vers notre compte GitHub.

###git remote add origin lien_github_de_dl

On met origin car c'est l'origine du projet (le lien que vous recuperez depuis le compte de Dalyome/Mike.)
Ce qui donne git remote add origin lien_github_de_dl

###git add remote fork lien_github_de_dl

On met fork parce qu'en tant que collaborateur, on ne va pas travailler SUR le projet mais en marge. On va travailler sur notre propre branche. Pour plus de clarté, on va donc appeler notre remote fork.

DEUXIEME ETAPE => ENVOYER NOS MODIFS AU CHEF DE PROJET (ici Dalyome/Mike)

Première chose à faire, regarder le statut de votre projet avec la commande :
###git status

s'il y a des modifications qui ont été faites, on les ajoute (add)

###git add *

Ensuite, on fait un commit pour valider et preparer à l'envoi.

###git commit -m "message qui décrit le pourquoi du comment de votre envoi"

une fois cela fait on envoie le tout sur son fork

###git push fork master

quand cela est fait, allez sur votre page du projet et réalisez un NEW PULL REQUEST et envoyez le tout au chef de projet avec des commentaires si cela est nécessaire.