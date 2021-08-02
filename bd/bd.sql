CREATE TABLE `login`.`new_table` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(245) NOT NULL,
  `apellidoPaterno` VARCHAR(245) NOT NULL,
  `apellidoMaterno` VARCHAR(245) NOT NULL,
  `sexo` VARCHAR(245) NOT NULL,
  `telefono` INT NOT NULL,
  `email` VARCHAR(245) NOT NULL,
  `usuario` VARCHAR(245) NOT NULL,
  `password` INT NOT NULL,
  `fechaInsert` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id_usuario`));
ALTER TABLE `login`.`new_table` 
RENAME TO  `login`.`t_usuarios` ;
ALTER TABLE `login`.`t_usuarios` 
CHANGE COLUMN `password` `password` TEXT NOT NULL ;
