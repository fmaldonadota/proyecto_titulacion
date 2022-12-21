/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     29/6/2018 13:11:59                           */
/*==============================================================*/


drop index RESERVLABORATORIOS_PK;

drop table RESERVLABORATORIOS;

/*==============================================================*/
/* Table: RESERVLABORATORIOS                                    */
/*==============================================================*/
create table RESERVLABORATORIOS (
   ID_RESERVA           SERIAL               not null,
   ID_HORA              VARCHAR(100)         null,
   ID_ESTADO            VARCHAR(100)         null,
   ID_SW                VARCHAR(100)         null,
   ID_DIA               VARCHAR(100)         null,
   ID_LAB               VARCHAR(100)         null,
   CEDULALOGIN          VARCHAR(100)         null,
   CEDULARESERVA        VARCHAR(100)         null,
   CEDULAENCARGADO      VARCHAR(100)         null,
   DFROM                VARCHAR(100)         null,
   constraint PK_RESERVLABORATORIOS primary key (ID_RESERVA)
);

/*==============================================================*/
/* Index: RESERVLABORATORIOS_PK                                 */
/*==============================================================*/
create unique index RESERVLABORATORIOS_PK on RESERVLABORATORIOS (
ID_RESERVA
);

