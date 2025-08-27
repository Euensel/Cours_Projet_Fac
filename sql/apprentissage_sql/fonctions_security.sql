/*
    >Chiffrement     : (donnée en clair) ->clé->(donnée chiffrée)
    >Hashage         : (donnée en clair) ->(hash)
        N bits=N/4 caractères
        SHA2-> 224bits,256,bits,384bits,512bits
*/

--MD5('bonjour')->128bits(32 caractère) char(32) à ne plus utiliser

SELECT SHA1('bonjour');--ne plus utiliser

SELECT SHA2('bonjour',224);
--chiffrement
SET @passw= AES_ENCRYPT('bonjour','secret');
SELECT @passw;
SET @text=AES_DECRYPT(@passw,'secret');
SELECT @text;