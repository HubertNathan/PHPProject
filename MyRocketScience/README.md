# PHPProject Nathan Hubert
################################################################################
                         README MyRocketScience Projet PHP
################################################################################

Le thème du projet est les vaisseaux spatiaux (fusées vaisseaux à proprement par
lé) existants et fictifs. Les inventaires sont des agences spatiales, les objets
des vaisseaux en tout genre et les membres les propriétaires de ces agences pouv
ant ainsi se comparer les uns les autres (Le patron de l'ESA est envieux de la r
éussite du projet KSA mené par les vaillants Kerbonautes !)

################################################################################

-- **Structure de la base de donnée** :

   - Inventaire --> agency (agence spatiale)
        Propriétés   #--> id (clef unique dans la base de données)
                     #--> name (le nom de l'agence)
                     #--> location (le lieu du siège de l'agence)
                     #--> spaceships (relation OneToMany sur spaceship inversée 
                          par spaceship.agency)
                     #--> member (relation OneToOne sur Member inversée par mem
                          ber.agency)

   - Objet      --> Spaceship (vaisseau saptial)
        Propriétés   #--> id (clef unique dans la base de données)
                     #--> name (le nom du vaisseau)
                     #--> description (une courte description de l'objet, non af
                          fichée dans les pages)
                     #--> agency (relation ManyToOne sur agency inversée par age
                          ncy.spaceships)
                     #--> hangars (dénote les galleries auxquelles appartient 
                                 l'objet peut être nul)
  
   - Membre     --> Member
        Propriétés   #--> id (clef unique dans la base de données)
                     #--> username (le nom d'utilisateur)
                     #--> email (email de connexion de l'utilisateur)
                     #--> password (mdp de connexion de l'utilisateur)
                     #--> roles (les roles de l'utilisateur: admin, client...)
                     #--> hangars (les hangars détenus par le membre association                                1-N)
                     
   - Hangar     --> Gallerie
       Propriétés    #--> id
                     #--> name (nom)
                     #--> member (le membre auquel appartient la gallerie)
                     #--> Starships (les objets associés)
################################################################################

-- **Pages en consultations** :

   - ***Présents sur toutes les Pages*** :
        Le menu BootStrap qui pour l'instant ne renvoie qu'à la page principale 
        donnant la liste des agences
        Un bandeau décoratif avec le nom de la page

   - ***Agency List (Route /agency réservée aux admin en théorie)*** :
        Liste de toutes les agences spatiales dans la base de données affichées
        sous la forme d'une liste. La liste est constituée d'hyperliens qui poin
        tent sur chacune des agences.

   - ***Agency show (Route /agency/{id}, affiche l'agence du membre)*** :
        Affiche le contenu de l'agence ayant pour identifiant id.  Affiche l'id,
        le nom de l'agence ainsi que le lieu de son siège.
        Affiche sous forme de liste d'hyperliens les vaisseaux de l'agence.
        Permet de revenir sur le membre et ajouter de nouveaux objets

   - ***Spaceship Show (Route /spaceship/{id})***
        Affiche le contenu du vaisseau ayant pour identifiant id. Affiche l'id d
        u vaisseau et son nom.
        Le nom de l'agence est un hyperlien qui renvoie à l'agence en question.
   - *** Spaceship show in Hangar (Route Starship/{id}/show)***
        Affiche l'objet dans le context d'une gallerie permet d'edit et de revenir sur l'agence
