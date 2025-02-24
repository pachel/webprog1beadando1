<?php
$uzenetek = $db->query("SELECT u.szoveg,u.datum,IF(f.id IS NULL,CONCAT(u.nev,' - Vendég'),CONCAT(f.csaladi_nev,' ',f.uto_nev)) AS nev FROM uzenetek u LEFT JOIN felhasznalok f ON f.id=u.id_felhasznalok ORDER BY u.datum DESC")->rows();
