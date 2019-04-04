# Leenk 
## Sharing, Gaming, Community !

Leenk est un site internet permettant de mettre en relation celles & ceux qui cherchent de nouveaux compagnons de jeu ! Créez vous un profil, ajoutez y vos jeux preferez, et rencontrez d'autres joueurs !

Leenk is a website that refer people who wants to share about Gaming. It allows you to make news friend around your favorite games. Create your profil, add your favorite games, and meet news people ! 

## Getting Started

These instructions will get you a copy of [Leenk](www.leenk.eu), in which you will find a simple MVC project, still in progress.

```
// Create a new folder into your Xampp/Mampp/Wampp htdocs folder and get into it

cd path/to/folder

git clone https://github.com/KiryhQ/leenk_mvc.git
```



## Installing 

All you have to know is that the website uses a lot of SQL. Don't forget to create a new Database, and link it to the project into the Manager.php

```

// Get into Modele/manager.php and follow this model

$bdd = new PDO('mysql:host="localhost" ;dbname="NameOfYourDatabase";charset=utf8', 
                'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

```
Then, you can import "leenkDB.sql" on your Database.

Be sure to be into your htdocs folder. This project uses PDO, and seems to be more stable using the HTDOCS localhost system.



## Localhost

Once everything is done, all you have to do is to use this url to get access to the website.

Verify that you add your OWN folder

```
localhost/NameOfYourFolder/index.php

```

I added an .htaccess to the website, to redirect urls in a more readable way.

It turns

```
localhost/NameOfYourFolder/index.php?action=Example
```

Into 

```
localhost/NameOfYourFolder/app/Example
```

Some href/link may not be done at the moment, as it is not over. The first example is still set.

### Users 

You don't need any "admin" account to explore Leenk. Just create your own profil. You will be able to search for some users to have look at this functionnality.

You can try : 

* Kiryh 

Also, i recommand you to search this game to have a look at the page :

* CS:GO 

Finally, you can search this type of game, because that's the one which got the most games at the moment :

* FPS 
## Built with

The projet is fully built in PHP 7.3 using :

* [MVC](https://fr.wikipedia.org/wiki/Mod%C3%A8le-vue-contr%C3%B4leur) - Model View Controller.

* [Composer](https://getcomposer.org/) - Php package manager. The only uses that we have of it is for the Namespaces.

* [JQuery](https://jquery.com/) - Helping a lot on animations and javaScript.

* [JQuery-ui](https://jqueryui.com/) - Needed for easyAutocomplete plugin.

* [Bootstrap 4](https://getbootstrap.com/) - For the responsive.

I am also using : 

* [easyAutocomplete](http://easyautocomplete.com/) - A jQuery plugin that helped me a lot on my searchbar.


## About Technical Specifications 

At the moment, those are functionnal features : 

* Create a profil 

* Update it

* Modify a part of the interface (As the main banner of profil, corner top right on Mozilla, top left on Chrome, not tested on IE and others)

* Add/Delete games to the profil

* Add/Delete games from profil "Games" to "Favorite" from the "My Profil" section.

* Create a kind of automatic alert on the home page, based on user's favorite Games

* Forgotten password.

* A search bar that display Games, Type of Games and Members from the DB

Features about it incoming :

* Add/Delete Friends

* Join Groups

* Filters on homepage alerts (Based on Favorite games. This way, users can choose to filter on the game they play at the moment.)

* Username recovery

* A complete support to recieve tips about Leenk, potential modifications/upgrades



## Versioning

I would say that Leenk is under an Alpha Version.

**Actual version** : 0.3.0 - Fully responsive on Mozilla, almost done on Google Chrome. Members Managment at 75% done.

0.2.0 - Less responsive, different design and uncomplete profils

0.1.0 - Only game managment.


## Acknowledgments

* Thanks to [easyAutocomplete](http://easyautocomplete.com/), that helped me so much on this searchbar without using a REST API. 

* Thanks [Kercode](http://www.kercode.fr)'s Teachers :
    * Nathalie Morvan
    * Nicolas Le Chenic
    * Marie-Christine 
* And finally, thanks to all those who gave their point of view on the project at the moment. 

## Further Informations

I am sorry if the project seems confusing at the moment. Didn't had time to clarify everything, specially into Controllers/Managers, where I used a lot of $paramX

I am sure that you will understand the organisation of the project, but my internship require all my time at the moment. I hope you will understand.

You must know that Leenk will probably now a nice future. But I will probably turn the "Application" part into a real AngularJS application. And probably export everything into a Mobile Application. I've got the feeling that Leenk could be more useful under Mobile.

