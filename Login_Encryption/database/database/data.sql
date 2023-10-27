--Sentecias DDL--
DROP TABLE IF EXISTS users;

--Creamos la tabla--
CREATE TABLE users (

--Se establece un id que se vaya autoincrementando el cual tambien servira como llave primaria--
    id smallserial PRIMARY KEY,
    username varchar(15),
    password varchar(10)
);

--Se agrega una nueva columna llamada 'last_update' de tipo TIMESTAMP a la tabla'users'--
ALTER TABLE users ADD COLUMN last_update TIMESTAMP;