#======== featureSet 1
SELECT * FROM `users` WHERE `username`='Juan';

UPDATE `users` SET `email`='myawesomeemail' WHERE `username`='jesse';

INSERT INTO `users` SET `username`='Mandy',`email`='greatmail@email.com',`password`=sha1('thisisagreatpassword');

DELETE FROM `users` WHERE `username`='Mandy';


#========= featureSet 2
INSERT INTO `todo_items` SET `title`='',`details`='',`timestamp`=CURRENT_TIMESTAMP,`user_id`='';

SELECT * FROM `todo_items` WHERE `user_id`='3'

INSERT INTO `todo_items` SET `title`='Clean the car',`details`='wax it very shiny',`timestamp`=CURRENT_TIMESTAMP,`user_id`='3';

DELETE FROM `todo_items` WHERE `user_id`='3' AND `title`='Sleep';

UPDATE `todo_items` SET `title`='Eat a hearty brunch',`details`='Something light and delicious',`timestamp`=CURRENT_TIMESTAMP WHERE `user_id`='3' AND `title`='Drink coffee';

SELECT todo_items.user_id, users.*
FROM todo_items
RIGHT OUTER JOIN users
ON todo_items.user_id = users.ID
ORDER BY todo_items.user_id;

