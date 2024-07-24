#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: user
#------------------------------------------------------------

CREATE TABLE user(
        id_user  Int  Auto_increment  NOT NULL ,
        nom      Varchar (255) NOT NULL ,
        prenom   Varchar (255) NOT NULL ,
        mail     Varchar (255) NOT NULL ,
        password Varchar (255) NOT NULL ,
        role     Varchar (50) NOT NULL
	,CONSTRAINT user_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: rencontre
#------------------------------------------------------------

CREATE TABLE rencontre(
        id_rencontre Int  Auto_increment  NOT NULL ,
        date         Date NOT NULL ,
        heure        Time NOT NULL ,
        categorie    Varchar (255) NOT NULL ,
        equipe1      Varchar (255) NOT NULL ,
        equipe2      Varchar (255) NOT NULL ,
        score1       Varchar (255) NOT NULL ,
        score2       Varchar (255) NOT NULL ,
        STATUT       Varchar (255) NOT NULL
	,CONSTRAINT rencontre_PK PRIMARY KEY (id_rencontre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: equipes
#------------------------------------------------------------


CREATE TABLE equipes(
        id_equipe    Int  Auto_increment  NOT NULL ,
        pays         Varchar (255) NOT NULL ,
        categorie    Varchar (255) NOT NULL ,
        victoire     Varchar (255) NOT NULL ,
        medaille     Varchar (255) NOT NULL ,
        id_rencontre Int NOT NULL
	,CONSTRAINT equipes_PK PRIMARY KEY (id_equipe)

	,CONSTRAINT equipes_rencontre_FK FOREIGN KEY (id_rencontre) REFERENCES rencontre(id_rencontre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: joueur
#------------------------------------------------------------

CREATE TABLE joueur(
        idjoueur    Int  Auto_increment  NOT NULL ,
        nom         Varchar (255) NOT NULL ,
        prenom      Varchar (255) NOT NULL ,
        age         Decimal (2) NOT NULL ,
        posteoccupe Varchar (255) NOT NULL ,
        id_equipe   Int NOT NULL
	,CONSTRAINT joueur_PK PRIMARY KEY (idjoueur)

	,CONSTRAINT joueur_equipes_FK FOREIGN KEY (id_equipe) REFERENCES equipes(id_equipe)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CONSULTE
#------------------------------------------------------------

CREATE TABLE CONSULTE(
        id_user      Int NOT NULL ,
        idjoueur     Int NOT NULL ,
        id_equipe    Int NOT NULL ,
        id_rencontre Int NOT NULL
	,CONSTRAINT CONSULTE_PK PRIMARY KEY (id_user,idjoueur,id_equipe,id_rencontre)

	,CONSTRAINT CONSULTE_user_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
	,CONSTRAINT CONSULTE_joueur0_FK FOREIGN KEY (idjoueur) REFERENCES joueur(idjoueur)
	,CONSTRAINT CONSULTE_equipes1_FK FOREIGN KEY (id_equipe) REFERENCES equipes(id_equipe)
	,CONSTRAINT CONSULTE_rencontre2_FK FOREIGN KEY (id_rencontre) REFERENCES rencontre(id_rencontre)
)ENGINE=InnoDB;


