SELECT product_name FROM fv_products;--afficher le champ product_name de la table fv_products

SELECT product_name,product_amount FROM fv_products;;--afficher le champ product_name et products_amount de la table fv_products

SELECT * FROM fv_products;;--afficher tous champs de la table fv_products


SELECT DISTINCT product_name FROM fv_products;;--afficher le champ product_name de la table fv_products une seule fois en cas de doublons


SELECT product_name AS "Nom du produit" FROM fv_products AS inventory; --créer des alias 
