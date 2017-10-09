#!/usr/bin/php
<?PHP
$list = array (
		array('https://i.goopics.net/4G9rZ.jpg;Sac à main - Couleur: Beige;75€;1;sac;!'),
		array('https://i.goopics.net/01Vp2.jpg;Sac à main - Couleur: Noir;65€;2;sac;!'),
		array('https://i.goopics.net/x7Yoj.jpg;Sac à main - Couleur: Camel;86€;3;sac;!'),
		array('https://i.goopics.net/YgLWx.jpg;Sac à main - Couleur: Rouge;69€;4;sac;!'),
		array('https://i.goopics.net/Zm1WG.jpg;Sac à main - Couleur: Gris;60€;5;sac;!'),
		array('https://i.goopics.net/Op4Ww.jpg;Sac à main - Couleur: Camel;45€;6;sac;!'),
		array('https://i.goopics.net/vZP4A.jpg;Sac à main - Couleur: Jaune;49€;7;sac;!'),
		array('https://i.goopics.net/yoY8D.jpg;Sac à main - Couleur: Noir;39€;8;sac;!'),
		array('https://i.goopics.net/7ywrm.jpg;Montre Marc Jacobs - Couleur: Noir;49€;9;montre;!'),
		array('https://i.goopics.net/LG5mL.jpg;Montre Skagen - Couleur: Beige;59€;10;montre;!'),
		array('https://i.goopics.net/5GAry.jpg;Montre Kenneth Cole - Couleur: Argent;54€;11;montre;!'),
		array('https://i.goopics.net/AYprg.jpg;Montre Oplayer - Couleur: Noir;79€;12;montre;!')
);


$fp = fopen('stock.csv', 'w+');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
?>
