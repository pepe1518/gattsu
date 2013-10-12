/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     12/10/2013 11:24:51                          */
/*==============================================================*/


drop table if exists ADMINISTRADOR;

drop table if exists COMITE;

drop table if exists ENTRADA;

drop table if exists ENTRENAMIENTO;

drop table if exists OLIMPISTA;

drop table if exists PROBLEMA;

drop table if exists SALIDA;

drop table if exists SOLUCION;

/*==============================================================*/
/* Table: ADMINISTRADOR                                         */
/*==============================================================*/
create table ADMINISTRADOR
(
   CODADMIN             int not null,
   NOMBREADMIN          varchar(1024),
   APELLIDOADMIN        varchar(1024),
   LOGINADMIN           varchar(1024),
   PASSADMIN            varchar(1024),
   EMAILADMIN           varchar(1024),
   primary key (CODADMIN)
);

/*==============================================================*/
/* Table: COMITE                                                */
/*==============================================================*/
create table COMITE
(
   CODCOMITE            int not null,
   NOMBRECOMITE         varchar(1024),
   APELLIDOCOMITE       varchar(1024),
   DESCRIPCIONCOMITE    varchar(1024),
   LOGINCOMITE          varchar(1024),
   PASSCOMITE           varchar(1024),
   TIPOCOMITE           varchar(1024),
   primary key (CODCOMITE)
);

/*==============================================================*/
/* Table: ENTRADA                                               */
/*==============================================================*/
create table ENTRADA
(
   CODENTRADA           int not null,
   CODPROBLEMA          int,
   primary key (CODENTRADA)
);

/*==============================================================*/
/* Table: ENTRENAMIENTO                                         */
/*==============================================================*/
create table ENTRENAMIENTO
(
   CODENTRENAMIENTO     int not null,
   CODADMIN             int,
   primary key (CODENTRENAMIENTO)
);

/*==============================================================*/
/* Table: OLIMPISTA                                             */
/*==============================================================*/
create table OLIMPISTA
(
   CODOLIMPISTA         int not null,
   CODENTRENAMIENTO     int,
   NOMBREOLIMPISTA      varchar(1024),
   APELLIDOOLIMPISTA    varchar(1024),
   LOGINOLIMPISTA       varchar(1024),
   PASSOLIMPISTA        varchar(1024),
   EMAILOLIMPISTA       varchar(1024),
   primary key (CODOLIMPISTA)
);

/*==============================================================*/
/* Table: PROBLEMA                                              */
/*==============================================================*/
create table PROBLEMA
(
   CODPROBLEMA          int not null,
   CODENTRENAMIENTO     int,
   CODCOMITE            int,
   DESCRIPCION          varchar(1024),
   AUTORPROBLEMA        varchar(1024),
   primary key (CODPROBLEMA)
);

/*==============================================================*/
/* Table: SALIDA                                                */
/*==============================================================*/
create table SALIDA
(
   CODSALIDA            int not null,
   CODPROBLEMA          int,
   primary key (CODSALIDA)
);

/*==============================================================*/
/* Table: SOLUCION                                              */
/*==============================================================*/
create table SOLUCION
(
   CODSOLUCION          int not null,
   CODPROBLEMA          int,
   primary key (CODSOLUCION)
);

alter table ENTRADA add constraint FK_RELATIONSHIP_1 foreign key (CODPROBLEMA)
      references PROBLEMA (CODPROBLEMA) on delete restrict on update restrict;

alter table ENTRENAMIENTO add constraint FK_RELATIONSHIP_6 foreign key (CODADMIN)
      references ADMINISTRADOR (CODADMIN) on delete restrict on update restrict;

alter table OLIMPISTA add constraint FK_RELATIONSHIP_4 foreign key (CODENTRENAMIENTO)
      references ENTRENAMIENTO (CODENTRENAMIENTO) on delete restrict on update restrict;

alter table PROBLEMA add constraint FK_RELATIONSHIP_3 foreign key (CODENTRENAMIENTO)
      references ENTRENAMIENTO (CODENTRENAMIENTO) on delete restrict on update restrict;

alter table PROBLEMA add constraint FK_RELATIONSHIP_5 foreign key (CODCOMITE)
      references COMITE (CODCOMITE) on delete restrict on update restrict;

alter table SALIDA add constraint FK_RELATIONSHIP_2 foreign key (CODPROBLEMA)
      references PROBLEMA (CODPROBLEMA) on delete restrict on update restrict;

alter table SOLUCION add constraint FK_RELATIONSHIP_7 foreign key (CODPROBLEMA)
      references PROBLEMA (CODPROBLEMA) on delete restrict on update restrict;

