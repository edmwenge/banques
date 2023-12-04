create table if not exists user
(
    id_user int not null auto_increment,
    mail varchar(100) not null,
    pass varchar(100) not null,
    date_enregistrement date not null,
    primary key(id_user,mail)
);

create table if not exists client
(
    id_client int not null auto_increment,
    nom varchar(50) not null,
    post_nom varchar(50) not null,
    prenom varchar(50) not null,
    mail varchar(100) not null,
    adresse varchar(100) not null,
    num_tel int not null,
    photo varchar(500) not null;
    numero_compte varchar(100) not null,
    solde int;
    date_enregistrement date not null,
    primary key(id_client,numero_compte)
);
create table if not exists compte_client
(
    id_compte int not null auto_increment,
    id_client varchar(100) not null,
    numero_compte int not null,
    solde int,
    primary key(id_compte,numero_compte),
    foreign key (numero_compte) references client(numero_compte),
    foreign key (id_client) references client(id_client)
);