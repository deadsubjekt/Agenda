create database bd_eventos;
use bd_eventos;

create table tb_eventos(
	id_evento int not null auto_increment,
	nome varchar (50) not null,
	data date,
  estado varchar (50) not null,
  cidade varchar (50) not null,
  bairro varchar (50) not null,
  rua varchar (50) not null,
  numero int not null,
  banner varchar (50),
	primary key (id_evento),
	fulltext key buscador (nome, estado, cidade)
)engine=myisam default charset=latin1;
    

create table estado(
  id_estado int(11) not null auto_increment,
  estado varchar(75) default null,
  uf varchar(5) default null,
  primary key (id_estado)
) engine=myisam default charset=latin1 auto_increment=28 ;


INSERT INTO estado (id_estado, estado, uf) VALUES
(1, 'Acre', 'AC'),
(2, 'Alagoas', 'AL'),
(3, 'Amazonas', 'AM'),
(4, 'Amapá', 'AP'),
(5, 'Bahia', 'BA'),
(6, 'Ceará', 'CE'),
(7, 'Distrito Federal', 'DF'),
(8, 'Espírito Santo', 'ES'),
(9, 'Goiás', 'GO'),
(10, 'Maranhão', 'MA'),
(11, 'Minas Gerais', 'MG'),
(12, 'Mato Grosso do Sul', 'MS'),
(13, 'Mato Grosso', 'MT'),
(14, 'Pará', 'PA'),
(15, 'Paraíba', 'PB'),
(16, 'Pernambuco', 'PE'),
(17, 'Piauí', 'PI'),
(18, 'Paraná', 'PR'),
(19, 'Rio de Janeiro', 'RJ'),
(20, 'Rio Grande do Norte', 'RN'),
(21, 'Rondônia', 'RO'),
(22, 'Roraima', 'RR'),
(23, 'Rio Grande do Sul', 'RS'),
(24, 'Santa Catarina', 'SC'),
(25, 'Sergipe', 'SE'),
(26, 'São Paulo', 'SP'),
(27, 'Tocantins', 'TO');
