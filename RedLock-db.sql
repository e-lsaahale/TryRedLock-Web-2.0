CREATE TABLE IF NOT EXISTS users (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Names VARCHAR(30) NOT NULL,
    Addresses VARCHAR(50) NOT NULL,
    Titles VARCHAR(30) NOT NULL
);

INSERT INTO users (Names, Addresses, Titles) VALUES ('Louis William Tomlinson', 'Yorkshire, UK', 'CEO'),
INSERT INTO users (Names, Addresses, Titles) VALUES ('Zayn Javadd Malik', 'Bradford, UK', 'COO'),
INSERT INTO users (Names, Addresses, Titles) VALUES ('Niall James Horan', 'Mulinggar, Ireland', 'CMO');
INSERT INTO users (Names, Addresses, Titles) VALUES ('Liam James Payne', 'London, UK', 'CFO');
INSERT INTO users (Names, Addresses, Titles) VALUES ('Harry Edward Styles', 'Cheshire, UK', 'CTO');