/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     29/6/2018 7:20:36                            */
/*==============================================================*/


drop index INCIDENTES_PK;

drop table INCIDENTES;

/*==============================================================*/
/* Table: INCIDENTES                                            */
/*==============================================================*/
create table INCIDENTES (
   ID_INCIDENTE         SERIAL               not null,
   LABORATORIO_INCIDENTE VARCHAR(100)         null,
   NUM_MAQUINA          VARCHAR(20)          null,
   DES_INCIDENTE        VARCHAR(500)         null,
   FOTO_INCIDENTE       CHAR(254)            null,
   CI                   VARCHAR(20)          null,
   constraint PK_INCIDENTES primary key (ID_INCIDENTE)
);

/*==============================================================*/
/* Index: INCIDENTES_PK                                         */
/*==============================================================*/
create unique index INCIDENTES_PK on INCIDENTES (
ID_INCIDENTE
);

