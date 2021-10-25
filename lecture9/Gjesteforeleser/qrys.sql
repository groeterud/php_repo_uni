SELECT *,
CASE
    WHEN Årslønn>=600000 THEN "Høy lønn"
    WHEN Årslønn<500000 THEN "Lav lønn"
    ELSE "Middels lønn"
END AS Lønn
FROM ansatt
ORDER BY Lønn;  

SELECT ROUND(345.445,1);

USE hobbyhuset;

SELECT kunde.KNr,Fornavn,Etternavn,OrdreNr
FROM kunde
JOIN ordre USING(KNr);

SELECT * FROM ansatt;

SELECT COUNT(Stilling) AS Antall, Stilling
FROM ansatt
GROUP BY Stilling
HAVING Antall>2;




SELECT COUNT(DISTINCT Stilling) as Antall
FROM ansatt;

SELECT COUNT(stilling_navn) AS Antall, stilling_navn
FROM ansatt
GROUP BY stilling_navn;



