INSERT INTO clients(clientFirstname, clientLastname, clientEmail, clientPassword, clientLevel, comment) Values('Tony', 'Stark', 'tony@starkent.com', 'Iam1ronM@n', 1, 'I am the real Ironman');

UPDATE clients set clientLevel ="3" where clientId = 2; 

UPDATE inventory
SET invDescription = replace(invDescription, 'small', 'spacious')
WHERE invId = 12;

SELECT inventory.invModel, carclassification.classificationName 
FROM inventory INNER JOIN carclassification ON inventory.classificationId = carclassification.classificationId
WHERE inventory.classificationId = 1;

DELETE FROM inventory WHERE invId = 1;

UPDATE inventory SET invImage=CONCAT("/phpmotors", invImage), invThumbnail=CONCAT("/phpmotors", invThumbnail);