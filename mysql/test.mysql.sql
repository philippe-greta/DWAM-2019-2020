SELECT * FROM commandes;

SELECT nom, prenom FROM clients WHERE nom='Doe'

SELECT * FROM clients WHERE email LIKE '%google.com'

SELECT * FROM commandes 
WHERE date_commande <='2019-03-01' 
ORDER BY date_commande

SELECT * FROM commandes WHERE date_commande BETWEEN '2019-03-01' AND '2019-03-31' ORDER BY date_commande

SELECT * FROM commandes ORDER BY montant DESC LIMIT 5,10

SELECT UPPER(nom) AS nom_maj, prenom, email FROM clients

SELECT LOWER(nom) AS nom_min FROM clients

SELECT email, LENGTH(email) AS nb_car FROM clients

SELECT ROUND(montant,2) AS montant_round FROM commandes

UPDATE commandes SET produit = replace(produit,'Site vitrine HTML','Site vitrine HTML-CSS')

---

SELECT AVG(montant) AS prix_moyen 
FROM commandes

SELECT ROUND(AVG(montant),2) AS prix_moyen
FROM commandes

SELECT SUM(montant) AS total_commandes
FROM commandes

SELECT MAX(montant) AS montant_max
FROM commandes

SELECT MIN(montant) AS montant_min
FROM commandes

SELECT COUNT(*) AS nb_commandes
FROM commandes
WHERE produit="Site vitrine HTML-CSS"

SELECT produit, SUM(montant)
FROM commandes
GROUP BY produit

SELECT SUM(montant) AS montant_total, produit 
FROM commandes GROUP BY produit ORDER BY montant_total ASC

SELECT SUM(montant) AS montant_total, UPPER(produit) AS produit_maj
FROM commandes GROUP BY produit_maj HAVING montant_total>= 2000

---
SELECT clients.nom, clients.id, commandes.montant
FROM clients
INNER JOIN commandes
ON commandes.id_client = clients.id

SELECT p.id, p.nom, p.prenom, c.montant
FROM clients AS p
INNER JOIN commandes AS c
ON c.id_client = p.id ORDER BY p.id

SELECT p.id, p.nom, p.prenom, SUM(c.montant) AS somme_client
FROM clients AS p
INNER JOIN commandes AS c
ON c.id_client = p.id GROUP BY p.id ORDER BY p.nom

SELECT p.id, p.nom, p.prenom, SUM(c.montant) AS somme_produit
FROM clients AS p
INNER JOIN commandes AS c
ON c.id_client = p.id GROUP BY c.produit



-- INSERT INTO clients(prenom, nom, email) VALUES('Philippe', 'Durand', 'philippe.durand@google.com')

-- INSERT INTO commandes(id_client, produit, montant, date_commande) VALUES(11, 'Site vitrine HTML', 500, '2019-05-04')

-- UPDATE clients SET prenom = 'Jacques', nom = 'Blanc', email = 'jacques.blanc@google.com'  WHERE id = 15

SELECT * FROM commandes
