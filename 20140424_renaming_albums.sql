UPDATE `albums` SET `nombre` = 'Departamentos (Xel-Há)' WHERE `id` = '3'; -- 0.018 s
UPDATE `albums` SET `nombre` = 'Penthouse (Xel-Há)' WHERE `id` = '4'; -- 0.000 s
UPDATE `albums` SET `nombre` = 'Pentgarden (PALM)' WHERE `id` = '6'; -- 0.000 s
UPDATE `albums` SET `nombre` = 'Niveles 1, 2 y 3 (Ultimate Tower)' WHERE `id` = '12'; -- 0.000 s
UPDATE `albums` SET `nombre` = 'Ultimate Tower (Galer&iacute;a General)' WHERE `id` = '10'; -- 0.000 s

DELETE FROM `albums` WHERE ((`id` = '13')); -- 0.042 s
DELETE FROM `albumimgs` WHERE ((`album_id` = '13')); -- 0.042 s