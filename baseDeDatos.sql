CREATE TABLE IF NOT EXISTS producto (
    id INT AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(50),
    descripcion TEXT,
    codigo VARCHAR(10),
    valorUnitario BIGINT,
    PRIMARY KEY (id)
)  ENGINE=INNODB;