 CREATE TRIGGER hashPassword BEFORE INSERT ON usuarios
 FOR EACH ROW SET NEW.password = SHA2(NEW.password, 224);

CREATE TRIGGER deleteUser BEFORE DELETE ON usuarios FOR EACH ROW
INSERT INTO logs_eliminacion
    (usuario_db, direccion, email,usuario, fecha_eliminacion)
    VALUES ( CURRENT_USER(), OLD.direccion, OLD.email, OLD.usuario, NOW());