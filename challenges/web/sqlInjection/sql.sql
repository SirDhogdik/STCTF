CREATE TABLE login(
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);

INSERT INTO login(username, password) VALUES ('admin', 'buttercrackers');
INSERT INTO login(username, password) VALUES ('memyselfi', 'solorightuntilidie');
INSERT INTO login(username, password) VALUES ('velociraptor', 'dinosaur');
