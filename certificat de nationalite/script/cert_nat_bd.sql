/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  16/05/2024 18:20:15                      */
/*==============================================================*/


/*==============================================================*/
/* Table : agentadministratif                                   */
/*==============================================================*/
create table agentadministratif
(
   matricule            serial not null,
   nom                  varchar(50),
   poste                varchar(50)
);

/*==============================================================*/
/* Index : agentadministratif_pk                                */
/*==============================================================*/
create unique index agentadministratif_pk on agentadministratif
(
   matricule
);

/*==============================================================*/
/* Table : certificatdenationalite                              */
/*==============================================================*/
create table certificatdenationalite
(
   idcertificat         serial not null,
   matricule            varchar(50) not null,
   nomdelivrant         varchar(50),
   postedelivrant       varchar(50),
   justificatif         varchar(50),
   nomdemandeur         varchar(50),
   datenaissance        datetime,
   lieunaissance        varchar(50),
   arrondissement       varchar(50),
   region               varchar(50),
   nompere              varchar(50),
   nommere              varchar(50),
   datedelivrance       datetime,
   lieudeivrance        varchar(50)
);

/*==============================================================*/
/* Index : certificatdenationalite_pk                           */
/*==============================================================*/
create unique index certificatdenationalite_pk on certificatdenationalite
(
   idcertificat
);

/*==============================================================*/
/* Index : gere_fk                                              */
/*==============================================================*/
create index gere_fk on certificatdenationalite
(
   matricule
);

/*==============================================================*/
/* Table : cetificatutiliateur                                  */
/*==============================================================*/
create table cetificatutiliateur
(
   idusers              varchar(50) not null,
   idcertificat         int not null,
   id                   serial not null
);

/*==============================================================*/
/* Index : cetificatutiliateur_pk                               */
/*==============================================================*/
create unique index cetificatutiliateur_pk on cetificatutiliateur
(
   idusers,
   idcertificat,
   id
);

/*==============================================================*/
/* Index : demande_fk                                           */
/*==============================================================*/
create index demande_fk on cetificatutiliateur
(
   idusers
);

/*==============================================================*/
/* Index : demande_fk2                                          */
/*==============================================================*/
create index demande_fk2 on cetificatutiliateur
(
   idcertificat
);

/*==============================================================*/
/* Table : utilisateur                                          */
/*==============================================================*/
create table utilisateur
(
   idusers              serial not null,
   login                varchar(50),
   password             varchar(50),
   email                varchar(50)
);

/*==============================================================*/
/* Index : utilisateur_pk                                       */
/*==============================================================*/
create unique index utilisateur_pk on utilisateur
(
   idusers
);

