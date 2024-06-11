CREATE DATABASE db_usuarios;
USE db_usuarios;
DROP TABLE Usuarios;
CREATE TABLE tbl_usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    telefone VARCHAR(20),
    dataNascimento DATE,
    senha VARCHAR(100),
    papel VARCHAR(50)
);
SELECT * FROM tbl_usuarios;
INSERT INTO tbl_usuarios (nome, email, telefone, dataNascimento, senha, papel)
VALUES
    ('João Silva', 'joao.silva@email.com', '123456789', '1990-05-15', 'senha123', 'usuario'),
    ('Maria Oliveira', 'maria.oliveira@email.com', '987654321', '1985-08-22', 'senha456', 'admin'),
    ('Carlos Santos', 'carlos.santos@email.com', '555888999', '1982-11-10', 'senha789', 'usuario'),
    ('Ana Lima', 'ana.lima@email.com', '111222333', '1995-02-28', 'senhaabc', 'usuario'),
    ('Pedro Costa', 'pedro.costa@email.com', '999000111', '1988-04-05', 'senhadef', 'admin'),
    ('Mariana Pereira', 'mariana.pereira@email.com', '777444555', '1993-07-18', 'senhaghi', 'usuario'),
    ('Fernando Rocha', 'fernando.rocha@email.com', '333666999', '1980-09-25', 'senhajkl', 'usuario'),
    ('Camila Martins', 'camila.martins@email.com', '444777888', '1987-12-03', 'senhamno', 'admin'),
    ('Lucas Oliveira', 'lucas.oliveira@email.com', '888555222', '1998-01-20', 'senhappq', 'usuario'),
    ('Patricia Souza', 'patricia.souza@email.com', '222333444', '1984-03-08', 'senha123r', 'usuario');
    -- GET
    SELECT * FROM tbl_usuarios;
    -- POST
    INSERT INTO tbl_usuarios (nome, email, telefone, dataNascimento, senha, papel) VALUES
    ('Robson', 'r.gmail.com', '190', '1984-11-09','r123', 'admin');
    -- PUT
    UPDATE tbl_usuarios 
    SET nome = 'Lucas', email = 'l@gmail.com', telefone = '156', dataNascimento = '2000-04-04', senha='123', papel = 'usuario'
    where id = 11;
    -- DELETE
    DELETE FROM tbl_usuarios
    WHERE id = 11;
    ALTER TABLE tbl_usuarios convert to character set utf8mb4 collate utf8mb4_general_ci;