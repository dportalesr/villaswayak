INSERT INTO `albums` (`id`, `nombre`, `slug`, `activo`, `albumimg_count`, `created`) VALUES
(11,  'Penthouse (Ultimate Tower)', '11_penthouse-ultimate-tower',  1,  0,  NOW()),
(12,  'Niveles 1, 2 y 3 (Ultimate Tower)',  '12_niveles', 1,  0,  NOW()),
(13, 'Pentgarden (Ultimate Tower)', '13_pentgarden_ultimate', 1, 0, NOW());

UPDATE `albums` SET `nombre` = '2do y 3er Nivel (PALM)', `slug` = '7_2do-y3er-nivel-palm' WHERE `albums`.`id` = 7;
UPDATE `albums` SET `nombre` = 'ULTIMATE TOWER (Galer&iacute;a General)', `slug` = '10_ultimate-tower-galeria-general' WHERE `albums`.`id` = 10;