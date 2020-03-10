<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2018-01-21 02:30:45 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-21 02:30:45 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-21 02:30:45 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-21 02:30:45 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_jobschedule_list.php
INFO - 2018-01-21 02:30:45 --> Final output sent to browser
DEBUG - 2018-01-21 02:30:45 --> Total execution time: 0.1269
INFO - 2018-01-21 02:30:49 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-21 02:30:49 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-21 02:30:49 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-21 02:30:49 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-21 02:30:49 --> Final output sent to browser
DEBUG - 2018-01-21 02:30:49 --> Total execution time: 0.0758
INFO - 2018-01-21 02:30:50 --> Final output sent to browser
DEBUG - 2018-01-21 02:30:50 --> Total execution time: 0.0910
INFO - 2018-01-21 02:31:12 --> Final output sent to browser
DEBUG - 2018-01-21 02:31:12 --> Total execution time: 0.1144
ERROR - 2018-01-21 02:32:34 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-21 02:32:34 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-21 02:32:34 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-21 02:32:34 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-21 02:32:34 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-21 02:32:34 --> Final output sent to browser
DEBUG - 2018-01-21 02:32:34 --> Total execution time: 0.0823
INFO - 2018-01-21 02:32:34 --> Final output sent to browser
DEBUG - 2018-01-21 02:32:34 --> Total execution time: 0.0712
ERROR - 2018-01-21 02:53:56 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-21 02:53:56 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-21 02:53:56 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-21 02:53:56 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-21 02:53:56 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-21 02:53:56 --> Final output sent to browser
DEBUG - 2018-01-21 02:53:56 --> Total execution time: 0.1157
INFO - 2018-01-21 02:53:56 --> Final output sent to browser
DEBUG - 2018-01-21 02:53:56 --> Total execution time: 0.1855
ERROR - 2018-01-21 02:57:07 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
ERROR - 2018-01-21 03:04:21 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
ERROR - 2018-01-21 03:04:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`job_id`, `c`.`customer_name`
FROM `job` as `j`
LEFT JOIN `job_product` as `jp`' at line 1 - Invalid query: SELECT `distinct` `j`.`job_id`, `c`.`customer_name`
FROM `job` as `j`
LEFT JOIN `job_product` as `jp` ON `jp`.`job_id` = `j`.`job_id`
LEFT JOIN `customer` as `c` ON `c`.`customer_id`=`j`.`customer_id`
LEFT JOIN `batch` as `b` ON `b`.`job_product_id`=`jp`.`job_product_id`
WHERE `c`.`archived` =0
AND `j`.`archived` =0
AND `b`.`workstep` = 2
AND `b`.`shipping_job_id` =0
AND `has_shipping_shedule` = 1
ORDER BY `job_id` DESC
 LIMIT 50
ERROR - 2018-01-21 03:04:21 --> Severity: Error --> Call to a member function result_array() on boolean /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 119
ERROR - 2018-01-21 03:04:23 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
ERROR - 2018-01-21 03:04:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`job_id`, `c`.`customer_name`
FROM `job` as `j`
LEFT JOIN `job_product` as `jp`' at line 1 - Invalid query: SELECT `distinct` `j`.`job_id`, `c`.`customer_name`
FROM `job` as `j`
LEFT JOIN `job_product` as `jp` ON `jp`.`job_id` = `j`.`job_id`
LEFT JOIN `customer` as `c` ON `c`.`customer_id`=`j`.`customer_id`
LEFT JOIN `batch` as `b` ON `b`.`job_product_id`=`jp`.`job_product_id`
WHERE `c`.`archived` =0
AND `j`.`archived` =0
AND `b`.`workstep` = 2
AND `b`.`shipping_job_id` =0
AND `has_shipping_shedule` = 1
ORDER BY `job_id` DESC
 LIMIT 50
ERROR - 2018-01-21 03:04:23 --> Severity: Error --> Call to a member function result_array() on boolean /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 119
INFO - 2018-01-21 03:04:28 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-21 03:04:28 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-21 03:04:28 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-21 03:04:28 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_jobschedule_list.php
INFO - 2018-01-21 03:04:28 --> Final output sent to browser
DEBUG - 2018-01-21 03:04:28 --> Total execution time: 0.0649
INFO - 2018-01-21 03:04:30 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-21 03:04:30 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-21 03:04:30 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-21 03:04:30 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_product_list.php
INFO - 2018-01-21 03:04:30 --> Final output sent to browser
DEBUG - 2018-01-21 03:04:30 --> Total execution time: 0.1971
INFO - 2018-01-21 03:04:34 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-21 03:04:34 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-21 03:04:34 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-21 03:04:34 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_product_list.php
INFO - 2018-01-21 03:04:34 --> Final output sent to browser
DEBUG - 2018-01-21 03:04:34 --> Total execution time: 0.0799
INFO - 2018-01-21 03:04:44 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-21 03:04:44 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-21 03:04:44 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-21 03:04:44 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_jobschedule_list.php
INFO - 2018-01-21 03:04:44 --> Final output sent to browser
DEBUG - 2018-01-21 03:04:44 --> Total execution time: 0.0521
ERROR - 2018-01-21 03:04:46 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
ERROR - 2018-01-21 03:04:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`job_id`, `c`.`customer_name`
FROM `job` as `j`
LEFT JOIN `job_product` as `jp`' at line 1 - Invalid query: SELECT `distinct` `j`.`job_id`, `c`.`customer_name`
FROM `job` as `j`
LEFT JOIN `job_product` as `jp` ON `jp`.`job_id` = `j`.`job_id`
LEFT JOIN `customer` as `c` ON `c`.`customer_id`=`j`.`customer_id`
LEFT JOIN `batch` as `b` ON `b`.`job_product_id`=`jp`.`job_product_id`
WHERE `c`.`archived` =0
AND `j`.`archived` =0
AND `b`.`workstep` = 2
AND `b`.`shipping_job_id` =0
AND `has_shipping_shedule` = 1
ORDER BY `job_id` DESC
 LIMIT 50
ERROR - 2018-01-21 03:04:46 --> Severity: Error --> Call to a member function result_array() on boolean /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 119
ERROR - 2018-01-21 03:05:09 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-21 03:05:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-21 03:05:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-21 03:05:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-21 03:05:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-21 03:05:09 --> Final output sent to browser
DEBUG - 2018-01-21 03:05:09 --> Total execution time: 0.0553
INFO - 2018-01-21 03:05:10 --> Final output sent to browser
DEBUG - 2018-01-21 03:05:10 --> Total execution time: 0.0850
ERROR - 2018-01-21 03:07:22 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
ERROR - 2018-01-21 03:07:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`job_id`, `c`.`customer_name`
FROM `job` as `j`
LEFT JOIN `job_product` as `jp`' at line 1 - Invalid query: SELECT `DISTINCT` `j`.`job_id`, `c`.`customer_name`
FROM `job` as `j`
LEFT JOIN `job_product` as `jp` ON `jp`.`job_id` = `j`.`job_id`
LEFT JOIN `customer` as `c` ON `c`.`customer_id`=`j`.`customer_id`
LEFT JOIN `batch` as `b` ON `b`.`job_product_id`=`jp`.`job_product_id`
WHERE `c`.`archived` =0
AND `j`.`archived` =0
AND `b`.`workstep` = 2
AND `b`.`shipping_job_id` =0
AND `has_shipping_shedule` = 1
ORDER BY `job_id` DESC
 LIMIT 50
ERROR - 2018-01-21 03:07:22 --> Severity: Error --> Call to a member function result_array() on boolean /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 119
ERROR - 2018-01-21 03:07:25 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
ERROR - 2018-01-21 03:07:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`job_id`, `c`.`customer_name`
FROM `job` as `j`
LEFT JOIN `job_product` as `jp`' at line 1 - Invalid query: SELECT `DISTINCT` `j`.`job_id`, `c`.`customer_name`
FROM `job` as `j`
LEFT JOIN `job_product` as `jp` ON `jp`.`job_id` = `j`.`job_id`
LEFT JOIN `customer` as `c` ON `c`.`customer_id`=`j`.`customer_id`
LEFT JOIN `batch` as `b` ON `b`.`job_product_id`=`jp`.`job_product_id`
WHERE `c`.`archived` =0
AND `j`.`archived` =0
AND `b`.`workstep` = 2
AND `b`.`shipping_job_id` =0
AND `has_shipping_shedule` = 1
ORDER BY `job_id` DESC
 LIMIT 50
ERROR - 2018-01-21 03:07:25 --> Severity: Error --> Call to a member function result_array() on boolean /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 119
ERROR - 2018-01-21 03:08:29 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-21 03:08:29 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-21 03:08:29 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-21 03:08:29 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-21 03:08:29 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-21 03:08:29 --> Final output sent to browser
DEBUG - 2018-01-21 03:08:29 --> Total execution time: 0.1107
INFO - 2018-01-21 03:08:29 --> Final output sent to browser
DEBUG - 2018-01-21 03:08:29 --> Total execution time: 0.0553
ERROR - 2018-01-21 03:08:33 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-21 03:08:33 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-21 03:08:33 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-21 03:08:33 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-21 03:08:33 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-21 03:08:33 --> Final output sent to browser
DEBUG - 2018-01-21 03:08:33 --> Total execution time: 0.0467
INFO - 2018-01-21 03:08:33 --> Final output sent to browser
DEBUG - 2018-01-21 03:08:33 --> Total execution time: 0.0676
INFO - 2018-01-21 03:08:38 --> Final output sent to browser
DEBUG - 2018-01-21 03:08:38 --> Total execution time: 0.0678
INFO - 2018-01-21 03:49:00 --> Final output sent to browser
DEBUG - 2018-01-21 03:49:00 --> Total execution time: 0.1428
INFO - 2018-01-21 03:49:02 --> Final output sent to browser
DEBUG - 2018-01-21 03:49:02 --> Total execution time: 0.0728
ERROR - 2018-01-21 03:49:15 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-21 03:49:15 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-21 03:49:15 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-21 03:49:15 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-21 03:49:15 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-21 03:49:15 --> Final output sent to browser
DEBUG - 2018-01-21 03:49:15 --> Total execution time: 0.0832
INFO - 2018-01-21 03:49:15 --> Final output sent to browser
DEBUG - 2018-01-21 03:49:15 --> Total execution time: 0.1461
ERROR - 2018-01-21 03:49:16 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-21 03:49:16 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-21 03:49:16 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-21 03:49:16 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-21 03:49:16 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-21 03:49:16 --> Final output sent to browser
DEBUG - 2018-01-21 03:49:16 --> Total execution time: 0.0446
INFO - 2018-01-21 03:49:16 --> Final output sent to browser
DEBUG - 2018-01-21 03:49:16 --> Total execution time: 0.0638
ERROR - 2018-01-21 03:49:18 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-21 03:49:18 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-21 03:49:18 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-21 03:49:18 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-21 03:49:18 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-21 03:49:18 --> Final output sent to browser
DEBUG - 2018-01-21 03:49:18 --> Total execution time: 0.0518
INFO - 2018-01-21 03:49:18 --> Final output sent to browser
DEBUG - 2018-01-21 03:49:18 --> Total execution time: 0.0578
ERROR - 2018-01-21 03:49:19 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-21 03:49:19 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-21 03:49:19 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-21 03:49:19 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-21 03:49:19 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-21 03:49:19 --> Final output sent to browser
DEBUG - 2018-01-21 03:49:19 --> Total execution time: 0.0447
INFO - 2018-01-21 03:49:20 --> Final output sent to browser
DEBUG - 2018-01-21 03:49:20 --> Total execution time: 0.0835
INFO - 2018-01-21 17:20:00 --> Config Class Initialized
INFO - 2018-01-21 17:20:00 --> Hooks Class Initialized
DEBUG - 2018-01-21 17:20:00 --> UTF-8 Support Enabled
INFO - 2018-01-21 17:20:00 --> Utf8 Class Initialized
INFO - 2018-01-21 17:20:00 --> URI Class Initialized
DEBUG - 2018-01-21 17:20:00 --> No URI present. Default controller set.
INFO - 2018-01-21 17:20:00 --> Router Class Initialized
INFO - 2018-01-21 17:20:00 --> Output Class Initialized
INFO - 2018-01-21 17:20:00 --> Security Class Initialized
DEBUG - 2018-01-21 17:20:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 17:20:00 --> Input Class Initialized
INFO - 2018-01-21 17:20:00 --> Language Class Initialized
INFO - 2018-01-21 17:20:00 --> Loader Class Initialized
INFO - 2018-01-21 17:20:00 --> Helper loaded: url_helper
INFO - 2018-01-21 17:20:00 --> Helper loaded: general_helper
INFO - 2018-01-21 17:20:00 --> Database Driver Class Initialized
DEBUG - 2018-01-21 17:20:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 17:20:00 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 17:20:00 --> Controller Class Initialized
INFO - 2018-01-21 17:20:00 --> Model Class Initialized
INFO - 2018-01-21 17:20:11 --> Config Class Initialized
INFO - 2018-01-21 17:20:11 --> Hooks Class Initialized
DEBUG - 2018-01-21 17:20:11 --> UTF-8 Support Enabled
INFO - 2018-01-21 17:20:11 --> Utf8 Class Initialized
INFO - 2018-01-21 17:20:11 --> URI Class Initialized
INFO - 2018-01-21 17:20:11 --> Router Class Initialized
INFO - 2018-01-21 17:20:11 --> Output Class Initialized
INFO - 2018-01-21 17:20:11 --> Security Class Initialized
DEBUG - 2018-01-21 17:20:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 17:20:11 --> Input Class Initialized
INFO - 2018-01-21 17:20:11 --> Language Class Initialized
INFO - 2018-01-21 17:20:11 --> Loader Class Initialized
INFO - 2018-01-21 17:20:11 --> Helper loaded: url_helper
INFO - 2018-01-21 17:20:11 --> Helper loaded: general_helper
INFO - 2018-01-21 17:20:11 --> Database Driver Class Initialized
DEBUG - 2018-01-21 17:20:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 17:20:11 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 17:20:11 --> Controller Class Initialized
INFO - 2018-01-21 17:20:11 --> Model Class Initialized
INFO - 2018-01-21 17:20:26 --> Config Class Initialized
INFO - 2018-01-21 17:20:26 --> Hooks Class Initialized
DEBUG - 2018-01-21 17:20:26 --> UTF-8 Support Enabled
INFO - 2018-01-21 17:20:26 --> Utf8 Class Initialized
INFO - 2018-01-21 17:20:26 --> URI Class Initialized
INFO - 2018-01-21 17:20:26 --> Router Class Initialized
INFO - 2018-01-21 17:20:26 --> Output Class Initialized
INFO - 2018-01-21 17:20:26 --> Security Class Initialized
DEBUG - 2018-01-21 17:20:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 17:20:26 --> Input Class Initialized
INFO - 2018-01-21 17:20:26 --> Language Class Initialized
INFO - 2018-01-21 17:20:26 --> Loader Class Initialized
INFO - 2018-01-21 17:20:26 --> Helper loaded: url_helper
INFO - 2018-01-21 17:20:26 --> Helper loaded: general_helper
INFO - 2018-01-21 17:20:26 --> Database Driver Class Initialized
DEBUG - 2018-01-21 17:20:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 17:20:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 17:20:26 --> Controller Class Initialized
INFO - 2018-01-21 17:20:26 --> Model Class Initialized
INFO - 2018-01-21 18:05:19 --> Config Class Initialized
INFO - 2018-01-21 18:05:19 --> Hooks Class Initialized
DEBUG - 2018-01-21 18:05:19 --> UTF-8 Support Enabled
INFO - 2018-01-21 18:05:19 --> Utf8 Class Initialized
INFO - 2018-01-21 18:05:19 --> URI Class Initialized
INFO - 2018-01-21 18:05:19 --> Router Class Initialized
INFO - 2018-01-21 18:05:19 --> Output Class Initialized
INFO - 2018-01-21 18:05:19 --> Security Class Initialized
DEBUG - 2018-01-21 18:05:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 18:05:19 --> Input Class Initialized
INFO - 2018-01-21 18:05:19 --> Language Class Initialized
INFO - 2018-01-21 18:05:19 --> Loader Class Initialized
INFO - 2018-01-21 18:05:19 --> Helper loaded: url_helper
INFO - 2018-01-21 18:05:19 --> Helper loaded: general_helper
INFO - 2018-01-21 18:05:19 --> Database Driver Class Initialized
DEBUG - 2018-01-21 18:05:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 18:05:19 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 18:05:19 --> Controller Class Initialized
INFO - 2018-01-21 18:05:19 --> Model Class Initialized
INFO - 2018-01-21 18:09:44 --> Config Class Initialized
INFO - 2018-01-21 18:09:44 --> Hooks Class Initialized
DEBUG - 2018-01-21 18:09:44 --> UTF-8 Support Enabled
INFO - 2018-01-21 18:09:44 --> Utf8 Class Initialized
INFO - 2018-01-21 18:09:44 --> URI Class Initialized
INFO - 2018-01-21 18:09:44 --> Router Class Initialized
INFO - 2018-01-21 18:09:44 --> Output Class Initialized
INFO - 2018-01-21 18:09:44 --> Security Class Initialized
DEBUG - 2018-01-21 18:09:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 18:09:44 --> Input Class Initialized
INFO - 2018-01-21 18:09:44 --> Language Class Initialized
INFO - 2018-01-21 18:09:44 --> Loader Class Initialized
INFO - 2018-01-21 18:09:44 --> Helper loaded: url_helper
INFO - 2018-01-21 18:09:44 --> Helper loaded: general_helper
INFO - 2018-01-21 18:09:44 --> Database Driver Class Initialized
DEBUG - 2018-01-21 18:09:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 18:09:44 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 18:09:44 --> Controller Class Initialized
INFO - 2018-01-21 18:09:44 --> Model Class Initialized
INFO - 2018-01-21 18:10:59 --> Config Class Initialized
INFO - 2018-01-21 18:10:59 --> Hooks Class Initialized
DEBUG - 2018-01-21 18:10:59 --> UTF-8 Support Enabled
INFO - 2018-01-21 18:10:59 --> Utf8 Class Initialized
INFO - 2018-01-21 18:10:59 --> URI Class Initialized
INFO - 2018-01-21 18:10:59 --> Router Class Initialized
INFO - 2018-01-21 18:10:59 --> Output Class Initialized
INFO - 2018-01-21 18:10:59 --> Security Class Initialized
DEBUG - 2018-01-21 18:10:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 18:10:59 --> Input Class Initialized
INFO - 2018-01-21 18:10:59 --> Language Class Initialized
INFO - 2018-01-21 18:10:59 --> Loader Class Initialized
INFO - 2018-01-21 18:10:59 --> Helper loaded: url_helper
INFO - 2018-01-21 18:10:59 --> Helper loaded: general_helper
INFO - 2018-01-21 18:10:59 --> Database Driver Class Initialized
DEBUG - 2018-01-21 18:10:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 18:10:59 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 18:10:59 --> Controller Class Initialized
INFO - 2018-01-21 18:10:59 --> Model Class Initialized
INFO - 2018-01-21 18:11:06 --> Config Class Initialized
INFO - 2018-01-21 18:11:06 --> Hooks Class Initialized
DEBUG - 2018-01-21 18:11:06 --> UTF-8 Support Enabled
INFO - 2018-01-21 18:11:06 --> Utf8 Class Initialized
INFO - 2018-01-21 18:11:06 --> URI Class Initialized
INFO - 2018-01-21 18:11:06 --> Router Class Initialized
INFO - 2018-01-21 18:11:06 --> Output Class Initialized
INFO - 2018-01-21 18:11:06 --> Security Class Initialized
DEBUG - 2018-01-21 18:11:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 18:11:06 --> Input Class Initialized
INFO - 2018-01-21 18:11:06 --> Language Class Initialized
INFO - 2018-01-21 18:11:06 --> Loader Class Initialized
INFO - 2018-01-21 18:11:06 --> Helper loaded: url_helper
INFO - 2018-01-21 18:11:06 --> Helper loaded: general_helper
INFO - 2018-01-21 18:11:06 --> Database Driver Class Initialized
DEBUG - 2018-01-21 18:11:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 18:11:06 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 18:11:06 --> Controller Class Initialized
INFO - 2018-01-21 18:11:06 --> Model Class Initialized
INFO - 2018-01-21 18:13:08 --> Config Class Initialized
INFO - 2018-01-21 18:13:08 --> Config Class Initialized
INFO - 2018-01-21 18:13:08 --> Hooks Class Initialized
INFO - 2018-01-21 18:13:08 --> Hooks Class Initialized
DEBUG - 2018-01-21 18:13:08 --> UTF-8 Support Enabled
INFO - 2018-01-21 18:13:08 --> Utf8 Class Initialized
DEBUG - 2018-01-21 18:13:08 --> UTF-8 Support Enabled
INFO - 2018-01-21 18:13:08 --> Utf8 Class Initialized
INFO - 2018-01-21 18:13:08 --> URI Class Initialized
INFO - 2018-01-21 18:13:08 --> Router Class Initialized
INFO - 2018-01-21 18:13:08 --> URI Class Initialized
INFO - 2018-01-21 18:13:08 --> Output Class Initialized
INFO - 2018-01-21 18:13:08 --> Router Class Initialized
INFO - 2018-01-21 18:13:08 --> Security Class Initialized
DEBUG - 2018-01-21 18:13:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 18:13:08 --> Input Class Initialized
INFO - 2018-01-21 18:13:08 --> Output Class Initialized
INFO - 2018-01-21 18:13:08 --> Language Class Initialized
INFO - 2018-01-21 18:13:08 --> Security Class Initialized
INFO - 2018-01-21 18:13:08 --> Loader Class Initialized
DEBUG - 2018-01-21 18:13:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 18:13:08 --> Input Class Initialized
INFO - 2018-01-21 18:13:08 --> Helper loaded: url_helper
INFO - 2018-01-21 18:13:08 --> Language Class Initialized
INFO - 2018-01-21 18:13:08 --> Helper loaded: general_helper
INFO - 2018-01-21 18:13:08 --> Loader Class Initialized
INFO - 2018-01-21 18:13:08 --> Helper loaded: url_helper
INFO - 2018-01-21 18:13:08 --> Helper loaded: general_helper
INFO - 2018-01-21 18:13:08 --> Database Driver Class Initialized
DEBUG - 2018-01-21 18:13:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 18:13:08 --> Database Driver Class Initialized
DEBUG - 2018-01-21 18:13:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 18:13:12 --> Config Class Initialized
INFO - 2018-01-21 18:13:12 --> Hooks Class Initialized
DEBUG - 2018-01-21 18:13:12 --> UTF-8 Support Enabled
INFO - 2018-01-21 18:13:12 --> Utf8 Class Initialized
INFO - 2018-01-21 18:13:12 --> URI Class Initialized
INFO - 2018-01-21 18:13:12 --> Router Class Initialized
INFO - 2018-01-21 18:13:12 --> Output Class Initialized
INFO - 2018-01-21 18:13:12 --> Security Class Initialized
DEBUG - 2018-01-21 18:13:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 18:13:12 --> Input Class Initialized
INFO - 2018-01-21 18:13:12 --> Language Class Initialized
INFO - 2018-01-21 18:13:12 --> Loader Class Initialized
INFO - 2018-01-21 18:13:12 --> Helper loaded: url_helper
INFO - 2018-01-21 18:13:12 --> Helper loaded: general_helper
INFO - 2018-01-21 18:13:12 --> Database Driver Class Initialized
DEBUG - 2018-01-21 18:13:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 18:13:14 --> Config Class Initialized
INFO - 2018-01-21 18:13:14 --> Hooks Class Initialized
DEBUG - 2018-01-21 18:13:14 --> UTF-8 Support Enabled
INFO - 2018-01-21 18:13:14 --> Utf8 Class Initialized
INFO - 2018-01-21 18:13:14 --> URI Class Initialized
INFO - 2018-01-21 18:13:14 --> Router Class Initialized
INFO - 2018-01-21 18:13:14 --> Output Class Initialized
INFO - 2018-01-21 18:13:14 --> Security Class Initialized
DEBUG - 2018-01-21 18:13:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 18:13:14 --> Input Class Initialized
INFO - 2018-01-21 18:13:14 --> Language Class Initialized
INFO - 2018-01-21 18:13:14 --> Loader Class Initialized
INFO - 2018-01-21 18:13:14 --> Helper loaded: url_helper
INFO - 2018-01-21 18:13:14 --> Helper loaded: general_helper
INFO - 2018-01-21 18:13:14 --> Database Driver Class Initialized
DEBUG - 2018-01-21 18:13:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 18:13:16 --> Config Class Initialized
INFO - 2018-01-21 18:13:16 --> Hooks Class Initialized
DEBUG - 2018-01-21 18:13:16 --> UTF-8 Support Enabled
INFO - 2018-01-21 18:13:16 --> Utf8 Class Initialized
INFO - 2018-01-21 18:13:16 --> URI Class Initialized
INFO - 2018-01-21 18:13:16 --> Router Class Initialized
INFO - 2018-01-21 18:13:16 --> Output Class Initialized
INFO - 2018-01-21 18:13:16 --> Security Class Initialized
DEBUG - 2018-01-21 18:13:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 18:13:16 --> Input Class Initialized
INFO - 2018-01-21 18:13:16 --> Language Class Initialized
INFO - 2018-01-21 18:13:16 --> Loader Class Initialized
INFO - 2018-01-21 18:13:16 --> Helper loaded: url_helper
INFO - 2018-01-21 18:13:16 --> Helper loaded: general_helper
INFO - 2018-01-21 18:13:16 --> Database Driver Class Initialized
DEBUG - 2018-01-21 18:13:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 18:13:25 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 18:13:25 --> Controller Class Initialized
INFO - 2018-01-21 18:13:25 --> Model Class Initialized
INFO - 2018-01-21 18:13:25 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 18:13:25 --> Controller Class Initialized
INFO - 2018-01-21 18:13:25 --> Model Class Initialized
INFO - 2018-01-21 18:13:25 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 18:13:25 --> Controller Class Initialized
INFO - 2018-01-21 18:13:25 --> Model Class Initialized
INFO - 2018-01-21 18:13:25 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 18:13:25 --> Controller Class Initialized
INFO - 2018-01-21 18:13:25 --> Model Class Initialized
INFO - 2018-01-21 18:13:25 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 18:13:25 --> Controller Class Initialized
INFO - 2018-01-21 18:13:26 --> Model Class Initialized
INFO - 2018-01-21 18:13:30 --> Config Class Initialized
INFO - 2018-01-21 18:13:30 --> Hooks Class Initialized
DEBUG - 2018-01-21 18:13:30 --> UTF-8 Support Enabled
INFO - 2018-01-21 18:13:30 --> Utf8 Class Initialized
INFO - 2018-01-21 18:13:30 --> URI Class Initialized
INFO - 2018-01-21 18:13:30 --> Router Class Initialized
INFO - 2018-01-21 18:13:30 --> Output Class Initialized
INFO - 2018-01-21 18:13:30 --> Security Class Initialized
DEBUG - 2018-01-21 18:13:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 18:13:30 --> Input Class Initialized
INFO - 2018-01-21 18:13:30 --> Language Class Initialized
INFO - 2018-01-21 18:13:30 --> Loader Class Initialized
INFO - 2018-01-21 18:13:30 --> Helper loaded: url_helper
INFO - 2018-01-21 18:13:30 --> Helper loaded: general_helper
INFO - 2018-01-21 18:13:30 --> Database Driver Class Initialized
DEBUG - 2018-01-21 18:13:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 18:13:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 18:13:30 --> Controller Class Initialized
INFO - 2018-01-21 18:13:30 --> Model Class Initialized
INFO - 2018-01-21 18:13:35 --> Config Class Initialized
INFO - 2018-01-21 18:13:35 --> Hooks Class Initialized
DEBUG - 2018-01-21 18:13:35 --> UTF-8 Support Enabled
INFO - 2018-01-21 18:13:35 --> Utf8 Class Initialized
INFO - 2018-01-21 18:13:35 --> URI Class Initialized
INFO - 2018-01-21 18:13:35 --> Router Class Initialized
INFO - 2018-01-21 18:13:35 --> Output Class Initialized
INFO - 2018-01-21 18:13:35 --> Security Class Initialized
DEBUG - 2018-01-21 18:13:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 18:13:35 --> Input Class Initialized
INFO - 2018-01-21 18:13:35 --> Language Class Initialized
INFO - 2018-01-21 18:13:35 --> Loader Class Initialized
INFO - 2018-01-21 18:13:35 --> Helper loaded: url_helper
INFO - 2018-01-21 18:13:35 --> Helper loaded: general_helper
INFO - 2018-01-21 18:13:35 --> Database Driver Class Initialized
DEBUG - 2018-01-21 18:13:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 18:13:35 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 18:13:35 --> Controller Class Initialized
INFO - 2018-01-21 18:13:35 --> Model Class Initialized
INFO - 2018-01-21 18:13:35 --> Config Class Initialized
INFO - 2018-01-21 18:13:35 --> Hooks Class Initialized
DEBUG - 2018-01-21 18:13:35 --> UTF-8 Support Enabled
INFO - 2018-01-21 18:13:35 --> Utf8 Class Initialized
INFO - 2018-01-21 18:13:35 --> URI Class Initialized
INFO - 2018-01-21 18:13:35 --> Router Class Initialized
INFO - 2018-01-21 18:13:35 --> Output Class Initialized
INFO - 2018-01-21 18:13:35 --> Security Class Initialized
DEBUG - 2018-01-21 18:13:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 18:13:35 --> Input Class Initialized
INFO - 2018-01-21 18:13:35 --> Language Class Initialized
INFO - 2018-01-21 18:13:35 --> Loader Class Initialized
INFO - 2018-01-21 18:13:35 --> Helper loaded: url_helper
INFO - 2018-01-21 18:13:35 --> Helper loaded: general_helper
INFO - 2018-01-21 18:13:35 --> Database Driver Class Initialized
DEBUG - 2018-01-21 18:13:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 18:13:35 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 18:13:35 --> Controller Class Initialized
INFO - 2018-01-21 18:13:35 --> Model Class Initialized
INFO - 2018-01-21 18:13:42 --> Config Class Initialized
INFO - 2018-01-21 18:13:42 --> Hooks Class Initialized
DEBUG - 2018-01-21 18:13:42 --> UTF-8 Support Enabled
INFO - 2018-01-21 18:13:42 --> Utf8 Class Initialized
INFO - 2018-01-21 18:13:42 --> URI Class Initialized
INFO - 2018-01-21 18:13:42 --> Router Class Initialized
INFO - 2018-01-21 18:13:42 --> Output Class Initialized
INFO - 2018-01-21 18:13:42 --> Security Class Initialized
DEBUG - 2018-01-21 18:13:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 18:13:42 --> Input Class Initialized
INFO - 2018-01-21 18:13:42 --> Language Class Initialized
INFO - 2018-01-21 18:13:42 --> Loader Class Initialized
INFO - 2018-01-21 18:13:42 --> Helper loaded: url_helper
INFO - 2018-01-21 18:13:42 --> Helper loaded: general_helper
INFO - 2018-01-21 18:13:42 --> Database Driver Class Initialized
DEBUG - 2018-01-21 18:13:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 18:13:42 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 18:13:42 --> Controller Class Initialized
INFO - 2018-01-21 18:13:42 --> Model Class Initialized
INFO - 2018-01-21 18:17:57 --> Config Class Initialized
INFO - 2018-01-21 18:17:57 --> Hooks Class Initialized
DEBUG - 2018-01-21 18:17:57 --> UTF-8 Support Enabled
INFO - 2018-01-21 18:17:57 --> Utf8 Class Initialized
INFO - 2018-01-21 18:17:57 --> URI Class Initialized
INFO - 2018-01-21 18:17:57 --> Router Class Initialized
INFO - 2018-01-21 18:17:57 --> Output Class Initialized
INFO - 2018-01-21 18:17:57 --> Security Class Initialized
DEBUG - 2018-01-21 18:17:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 18:17:57 --> Input Class Initialized
INFO - 2018-01-21 18:17:57 --> Language Class Initialized
INFO - 2018-01-21 18:17:57 --> Loader Class Initialized
INFO - 2018-01-21 18:17:57 --> Helper loaded: url_helper
INFO - 2018-01-21 18:17:57 --> Helper loaded: general_helper
INFO - 2018-01-21 18:17:57 --> Database Driver Class Initialized
DEBUG - 2018-01-21 18:17:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 18:17:57 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 18:17:57 --> Controller Class Initialized
INFO - 2018-01-21 18:17:57 --> Model Class Initialized
INFO - 2018-01-21 18:17:57 --> Config Class Initialized
INFO - 2018-01-21 18:17:57 --> Hooks Class Initialized
DEBUG - 2018-01-21 18:17:57 --> UTF-8 Support Enabled
INFO - 2018-01-21 18:17:57 --> Utf8 Class Initialized
INFO - 2018-01-21 18:17:57 --> URI Class Initialized
INFO - 2018-01-21 18:17:57 --> Router Class Initialized
INFO - 2018-01-21 18:17:57 --> Output Class Initialized
INFO - 2018-01-21 18:17:57 --> Security Class Initialized
DEBUG - 2018-01-21 18:17:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 18:17:57 --> Input Class Initialized
INFO - 2018-01-21 18:17:57 --> Language Class Initialized
INFO - 2018-01-21 18:17:57 --> Loader Class Initialized
INFO - 2018-01-21 18:17:57 --> Helper loaded: url_helper
INFO - 2018-01-21 18:17:57 --> Helper loaded: general_helper
INFO - 2018-01-21 18:17:57 --> Database Driver Class Initialized
DEBUG - 2018-01-21 18:17:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 18:17:57 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 18:17:57 --> Controller Class Initialized
INFO - 2018-01-21 18:17:57 --> Model Class Initialized
INFO - 2018-01-21 20:07:07 --> Config Class Initialized
INFO - 2018-01-21 20:07:07 --> Hooks Class Initialized
DEBUG - 2018-01-21 20:07:07 --> UTF-8 Support Enabled
INFO - 2018-01-21 20:07:07 --> Utf8 Class Initialized
INFO - 2018-01-21 20:07:07 --> URI Class Initialized
INFO - 2018-01-21 20:07:07 --> Router Class Initialized
INFO - 2018-01-21 20:07:07 --> Output Class Initialized
INFO - 2018-01-21 20:07:07 --> Security Class Initialized
DEBUG - 2018-01-21 20:07:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 20:07:07 --> Input Class Initialized
INFO - 2018-01-21 20:07:07 --> Language Class Initialized
INFO - 2018-01-21 20:07:07 --> Loader Class Initialized
INFO - 2018-01-21 20:07:07 --> Helper loaded: url_helper
INFO - 2018-01-21 20:07:07 --> Helper loaded: general_helper
INFO - 2018-01-21 20:07:07 --> Database Driver Class Initialized
DEBUG - 2018-01-21 20:07:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 20:07:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 20:07:07 --> Controller Class Initialized
INFO - 2018-01-21 20:07:07 --> Model Class Initialized
INFO - 2018-01-21 20:07:08 --> Config Class Initialized
INFO - 2018-01-21 20:07:08 --> Hooks Class Initialized
DEBUG - 2018-01-21 20:07:08 --> UTF-8 Support Enabled
INFO - 2018-01-21 20:07:08 --> Utf8 Class Initialized
INFO - 2018-01-21 20:07:08 --> URI Class Initialized
INFO - 2018-01-21 20:07:08 --> Router Class Initialized
INFO - 2018-01-21 20:07:08 --> Output Class Initialized
INFO - 2018-01-21 20:07:08 --> Security Class Initialized
DEBUG - 2018-01-21 20:07:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 20:07:08 --> Input Class Initialized
INFO - 2018-01-21 20:07:08 --> Language Class Initialized
INFO - 2018-01-21 20:07:08 --> Loader Class Initialized
INFO - 2018-01-21 20:07:08 --> Helper loaded: url_helper
INFO - 2018-01-21 20:07:08 --> Helper loaded: general_helper
INFO - 2018-01-21 20:07:08 --> Database Driver Class Initialized
DEBUG - 2018-01-21 20:07:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 20:07:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 20:07:08 --> Controller Class Initialized
INFO - 2018-01-21 20:07:08 --> Model Class Initialized
INFO - 2018-01-21 20:07:35 --> Config Class Initialized
INFO - 2018-01-21 20:07:35 --> Hooks Class Initialized
DEBUG - 2018-01-21 20:07:35 --> UTF-8 Support Enabled
INFO - 2018-01-21 20:07:35 --> Utf8 Class Initialized
INFO - 2018-01-21 20:07:35 --> URI Class Initialized
INFO - 2018-01-21 20:07:35 --> Router Class Initialized
INFO - 2018-01-21 20:07:35 --> Output Class Initialized
INFO - 2018-01-21 20:07:35 --> Security Class Initialized
DEBUG - 2018-01-21 20:07:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 20:07:35 --> Input Class Initialized
INFO - 2018-01-21 20:07:35 --> Language Class Initialized
INFO - 2018-01-21 20:07:35 --> Loader Class Initialized
INFO - 2018-01-21 20:07:35 --> Helper loaded: url_helper
INFO - 2018-01-21 20:07:35 --> Helper loaded: general_helper
INFO - 2018-01-21 20:07:35 --> Database Driver Class Initialized
DEBUG - 2018-01-21 20:07:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 20:07:35 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 20:07:35 --> Controller Class Initialized
INFO - 2018-01-21 20:07:35 --> Model Class Initialized
INFO - 2018-01-21 20:07:41 --> Config Class Initialized
INFO - 2018-01-21 20:07:41 --> Hooks Class Initialized
DEBUG - 2018-01-21 20:07:41 --> UTF-8 Support Enabled
INFO - 2018-01-21 20:07:41 --> Utf8 Class Initialized
INFO - 2018-01-21 20:07:41 --> URI Class Initialized
INFO - 2018-01-21 20:07:41 --> Router Class Initialized
INFO - 2018-01-21 20:07:41 --> Output Class Initialized
INFO - 2018-01-21 20:07:41 --> Security Class Initialized
DEBUG - 2018-01-21 20:07:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 20:07:41 --> Input Class Initialized
INFO - 2018-01-21 20:07:41 --> Language Class Initialized
INFO - 2018-01-21 20:07:41 --> Loader Class Initialized
INFO - 2018-01-21 20:07:41 --> Helper loaded: url_helper
INFO - 2018-01-21 20:07:41 --> Helper loaded: general_helper
INFO - 2018-01-21 20:07:41 --> Database Driver Class Initialized
DEBUG - 2018-01-21 20:07:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 20:07:41 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 20:07:41 --> Controller Class Initialized
INFO - 2018-01-21 20:07:41 --> Model Class Initialized
INFO - 2018-01-21 20:07:59 --> Config Class Initialized
INFO - 2018-01-21 20:07:59 --> Hooks Class Initialized
DEBUG - 2018-01-21 20:07:59 --> UTF-8 Support Enabled
INFO - 2018-01-21 20:07:59 --> Utf8 Class Initialized
INFO - 2018-01-21 20:07:59 --> URI Class Initialized
INFO - 2018-01-21 20:07:59 --> Router Class Initialized
INFO - 2018-01-21 20:07:59 --> Output Class Initialized
INFO - 2018-01-21 20:07:59 --> Security Class Initialized
DEBUG - 2018-01-21 20:07:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 20:07:59 --> Input Class Initialized
INFO - 2018-01-21 20:07:59 --> Language Class Initialized
INFO - 2018-01-21 20:07:59 --> Loader Class Initialized
INFO - 2018-01-21 20:07:59 --> Helper loaded: url_helper
INFO - 2018-01-21 20:07:59 --> Helper loaded: general_helper
INFO - 2018-01-21 20:07:59 --> Database Driver Class Initialized
DEBUG - 2018-01-21 20:07:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 20:07:59 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 20:07:59 --> Controller Class Initialized
INFO - 2018-01-21 20:07:59 --> Model Class Initialized
INFO - 2018-01-21 20:09:04 --> Config Class Initialized
INFO - 2018-01-21 20:09:04 --> Hooks Class Initialized
DEBUG - 2018-01-21 20:09:04 --> UTF-8 Support Enabled
INFO - 2018-01-21 20:09:04 --> Utf8 Class Initialized
INFO - 2018-01-21 20:09:04 --> URI Class Initialized
INFO - 2018-01-21 20:09:04 --> Router Class Initialized
INFO - 2018-01-21 20:09:04 --> Output Class Initialized
INFO - 2018-01-21 20:09:04 --> Security Class Initialized
DEBUG - 2018-01-21 20:09:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 20:09:04 --> Input Class Initialized
INFO - 2018-01-21 20:09:04 --> Language Class Initialized
INFO - 2018-01-21 20:09:04 --> Loader Class Initialized
INFO - 2018-01-21 20:09:04 --> Helper loaded: url_helper
INFO - 2018-01-21 20:09:04 --> Helper loaded: general_helper
INFO - 2018-01-21 20:09:04 --> Database Driver Class Initialized
DEBUG - 2018-01-21 20:09:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 20:09:04 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 20:09:04 --> Controller Class Initialized
INFO - 2018-01-21 20:09:04 --> Model Class Initialized
INFO - 2018-01-21 20:09:18 --> Config Class Initialized
INFO - 2018-01-21 20:09:18 --> Hooks Class Initialized
DEBUG - 2018-01-21 20:09:18 --> UTF-8 Support Enabled
INFO - 2018-01-21 20:09:18 --> Utf8 Class Initialized
INFO - 2018-01-21 20:09:18 --> URI Class Initialized
INFO - 2018-01-21 20:09:18 --> Router Class Initialized
INFO - 2018-01-21 20:09:18 --> Output Class Initialized
INFO - 2018-01-21 20:09:18 --> Security Class Initialized
DEBUG - 2018-01-21 20:09:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 20:09:18 --> Input Class Initialized
INFO - 2018-01-21 20:09:18 --> Language Class Initialized
INFO - 2018-01-21 20:09:18 --> Loader Class Initialized
INFO - 2018-01-21 20:09:19 --> Helper loaded: url_helper
INFO - 2018-01-21 20:09:19 --> Helper loaded: general_helper
INFO - 2018-01-21 20:09:19 --> Database Driver Class Initialized
DEBUG - 2018-01-21 20:09:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 20:09:19 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 20:09:19 --> Controller Class Initialized
INFO - 2018-01-21 20:09:19 --> Model Class Initialized
INFO - 2018-01-21 20:09:30 --> Config Class Initialized
INFO - 2018-01-21 20:09:30 --> Hooks Class Initialized
DEBUG - 2018-01-21 20:09:30 --> UTF-8 Support Enabled
INFO - 2018-01-21 20:09:30 --> Utf8 Class Initialized
INFO - 2018-01-21 20:09:30 --> URI Class Initialized
INFO - 2018-01-21 20:09:30 --> Router Class Initialized
INFO - 2018-01-21 20:09:30 --> Output Class Initialized
INFO - 2018-01-21 20:09:30 --> Security Class Initialized
DEBUG - 2018-01-21 20:09:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 20:09:30 --> Input Class Initialized
INFO - 2018-01-21 20:09:30 --> Language Class Initialized
INFO - 2018-01-21 20:09:30 --> Loader Class Initialized
INFO - 2018-01-21 20:09:30 --> Helper loaded: url_helper
INFO - 2018-01-21 20:09:30 --> Helper loaded: general_helper
INFO - 2018-01-21 20:09:30 --> Database Driver Class Initialized
DEBUG - 2018-01-21 20:09:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 20:09:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 20:09:30 --> Controller Class Initialized
INFO - 2018-01-21 20:09:30 --> Model Class Initialized
INFO - 2018-01-21 20:20:40 --> Config Class Initialized
INFO - 2018-01-21 20:20:40 --> Hooks Class Initialized
DEBUG - 2018-01-21 20:20:40 --> UTF-8 Support Enabled
INFO - 2018-01-21 20:20:40 --> Utf8 Class Initialized
INFO - 2018-01-21 20:20:40 --> URI Class Initialized
INFO - 2018-01-21 20:20:40 --> Router Class Initialized
INFO - 2018-01-21 20:20:40 --> Output Class Initialized
INFO - 2018-01-21 20:20:40 --> Security Class Initialized
DEBUG - 2018-01-21 20:20:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 20:20:40 --> Input Class Initialized
INFO - 2018-01-21 20:20:40 --> Language Class Initialized
INFO - 2018-01-21 20:20:40 --> Loader Class Initialized
INFO - 2018-01-21 20:20:40 --> Helper loaded: url_helper
INFO - 2018-01-21 20:20:40 --> Helper loaded: general_helper
INFO - 2018-01-21 20:20:40 --> Database Driver Class Initialized
DEBUG - 2018-01-21 20:20:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 20:20:40 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 20:20:40 --> Controller Class Initialized
INFO - 2018-01-21 20:20:41 --> Model Class Initialized
INFO - 2018-01-21 20:21:14 --> Config Class Initialized
INFO - 2018-01-21 20:21:14 --> Hooks Class Initialized
DEBUG - 2018-01-21 20:21:14 --> UTF-8 Support Enabled
INFO - 2018-01-21 20:21:14 --> Utf8 Class Initialized
INFO - 2018-01-21 20:21:14 --> URI Class Initialized
INFO - 2018-01-21 20:21:14 --> Router Class Initialized
INFO - 2018-01-21 20:21:14 --> Output Class Initialized
INFO - 2018-01-21 20:21:14 --> Security Class Initialized
DEBUG - 2018-01-21 20:21:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 20:21:14 --> Input Class Initialized
INFO - 2018-01-21 20:21:14 --> Language Class Initialized
INFO - 2018-01-21 20:21:14 --> Loader Class Initialized
INFO - 2018-01-21 20:21:14 --> Helper loaded: url_helper
INFO - 2018-01-21 20:21:14 --> Helper loaded: general_helper
INFO - 2018-01-21 20:21:14 --> Database Driver Class Initialized
DEBUG - 2018-01-21 20:21:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 20:21:14 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 20:21:14 --> Controller Class Initialized
INFO - 2018-01-21 20:21:14 --> Model Class Initialized
INFO - 2018-01-21 23:50:32 --> Config Class Initialized
INFO - 2018-01-21 23:50:32 --> Hooks Class Initialized
DEBUG - 2018-01-21 23:50:32 --> UTF-8 Support Enabled
INFO - 2018-01-21 23:50:32 --> Utf8 Class Initialized
INFO - 2018-01-21 23:50:32 --> URI Class Initialized
DEBUG - 2018-01-21 23:50:32 --> No URI present. Default controller set.
INFO - 2018-01-21 23:50:32 --> Router Class Initialized
INFO - 2018-01-21 23:50:32 --> Output Class Initialized
INFO - 2018-01-21 23:50:32 --> Security Class Initialized
DEBUG - 2018-01-21 23:50:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 23:50:32 --> Input Class Initialized
INFO - 2018-01-21 23:50:32 --> Language Class Initialized
INFO - 2018-01-21 23:50:32 --> Loader Class Initialized
INFO - 2018-01-21 23:50:32 --> Helper loaded: url_helper
INFO - 2018-01-21 23:50:32 --> Helper loaded: general_helper
INFO - 2018-01-21 23:50:32 --> Database Driver Class Initialized
DEBUG - 2018-01-21 23:50:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 23:50:32 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 23:50:32 --> Controller Class Initialized
INFO - 2018-01-21 23:50:32 --> Model Class Initialized
INFO - 2018-01-21 23:50:58 --> Config Class Initialized
INFO - 2018-01-21 23:50:58 --> Hooks Class Initialized
DEBUG - 2018-01-21 23:50:58 --> UTF-8 Support Enabled
INFO - 2018-01-21 23:50:58 --> Utf8 Class Initialized
INFO - 2018-01-21 23:50:58 --> URI Class Initialized
INFO - 2018-01-21 23:50:58 --> Router Class Initialized
INFO - 2018-01-21 23:50:58 --> Output Class Initialized
INFO - 2018-01-21 23:50:58 --> Security Class Initialized
DEBUG - 2018-01-21 23:50:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 23:50:58 --> Input Class Initialized
INFO - 2018-01-21 23:50:58 --> Language Class Initialized
INFO - 2018-01-21 23:50:58 --> Loader Class Initialized
INFO - 2018-01-21 23:50:58 --> Helper loaded: url_helper
INFO - 2018-01-21 23:50:58 --> Helper loaded: general_helper
INFO - 2018-01-21 23:50:58 --> Database Driver Class Initialized
DEBUG - 2018-01-21 23:50:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 23:50:58 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 23:50:58 --> Controller Class Initialized
INFO - 2018-01-21 23:50:58 --> Model Class Initialized
INFO - 2018-01-21 23:51:01 --> Config Class Initialized
INFO - 2018-01-21 23:51:01 --> Hooks Class Initialized
DEBUG - 2018-01-21 23:51:01 --> UTF-8 Support Enabled
INFO - 2018-01-21 23:51:01 --> Utf8 Class Initialized
INFO - 2018-01-21 23:51:01 --> URI Class Initialized
INFO - 2018-01-21 23:51:01 --> Router Class Initialized
INFO - 2018-01-21 23:51:01 --> Output Class Initialized
INFO - 2018-01-21 23:51:01 --> Security Class Initialized
DEBUG - 2018-01-21 23:51:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 23:51:01 --> Input Class Initialized
INFO - 2018-01-21 23:51:01 --> Language Class Initialized
INFO - 2018-01-21 23:51:01 --> Loader Class Initialized
INFO - 2018-01-21 23:51:01 --> Helper loaded: url_helper
INFO - 2018-01-21 23:51:01 --> Helper loaded: general_helper
INFO - 2018-01-21 23:51:01 --> Database Driver Class Initialized
DEBUG - 2018-01-21 23:51:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 23:51:01 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 23:51:01 --> Controller Class Initialized
INFO - 2018-01-21 23:51:01 --> Model Class Initialized
INFO - 2018-01-21 23:51:01 --> Config Class Initialized
INFO - 2018-01-21 23:51:01 --> Hooks Class Initialized
DEBUG - 2018-01-21 23:51:01 --> UTF-8 Support Enabled
INFO - 2018-01-21 23:51:01 --> Utf8 Class Initialized
INFO - 2018-01-21 23:51:01 --> URI Class Initialized
INFO - 2018-01-21 23:51:01 --> Router Class Initialized
INFO - 2018-01-21 23:51:01 --> Output Class Initialized
INFO - 2018-01-21 23:51:01 --> Security Class Initialized
DEBUG - 2018-01-21 23:51:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 23:51:01 --> Input Class Initialized
INFO - 2018-01-21 23:51:01 --> Language Class Initialized
INFO - 2018-01-21 23:51:01 --> Loader Class Initialized
INFO - 2018-01-21 23:51:01 --> Helper loaded: url_helper
INFO - 2018-01-21 23:51:01 --> Helper loaded: general_helper
INFO - 2018-01-21 23:51:01 --> Database Driver Class Initialized
DEBUG - 2018-01-21 23:51:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 23:51:01 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 23:51:01 --> Controller Class Initialized
INFO - 2018-01-21 23:51:01 --> Model Class Initialized
INFO - 2018-01-21 23:51:03 --> Config Class Initialized
INFO - 2018-01-21 23:51:03 --> Hooks Class Initialized
DEBUG - 2018-01-21 23:51:03 --> UTF-8 Support Enabled
INFO - 2018-01-21 23:51:03 --> Utf8 Class Initialized
INFO - 2018-01-21 23:51:03 --> URI Class Initialized
INFO - 2018-01-21 23:51:03 --> Router Class Initialized
INFO - 2018-01-21 23:51:03 --> Output Class Initialized
INFO - 2018-01-21 23:51:03 --> Security Class Initialized
DEBUG - 2018-01-21 23:51:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 23:51:03 --> Input Class Initialized
INFO - 2018-01-21 23:51:03 --> Language Class Initialized
INFO - 2018-01-21 23:51:03 --> Loader Class Initialized
INFO - 2018-01-21 23:51:03 --> Helper loaded: url_helper
INFO - 2018-01-21 23:51:03 --> Helper loaded: general_helper
INFO - 2018-01-21 23:51:03 --> Database Driver Class Initialized
DEBUG - 2018-01-21 23:51:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 23:51:03 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 23:51:03 --> Controller Class Initialized
INFO - 2018-01-21 23:51:03 --> Model Class Initialized
INFO - 2018-01-21 23:51:07 --> Config Class Initialized
INFO - 2018-01-21 23:51:07 --> Hooks Class Initialized
DEBUG - 2018-01-21 23:51:07 --> UTF-8 Support Enabled
INFO - 2018-01-21 23:51:07 --> Utf8 Class Initialized
INFO - 2018-01-21 23:51:07 --> URI Class Initialized
INFO - 2018-01-21 23:51:07 --> Router Class Initialized
INFO - 2018-01-21 23:51:07 --> Output Class Initialized
INFO - 2018-01-21 23:51:07 --> Security Class Initialized
DEBUG - 2018-01-21 23:51:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 23:51:07 --> Input Class Initialized
INFO - 2018-01-21 23:51:07 --> Language Class Initialized
INFO - 2018-01-21 23:51:07 --> Loader Class Initialized
INFO - 2018-01-21 23:51:07 --> Helper loaded: url_helper
INFO - 2018-01-21 23:51:07 --> Helper loaded: general_helper
INFO - 2018-01-21 23:51:07 --> Database Driver Class Initialized
DEBUG - 2018-01-21 23:51:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 23:51:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 23:51:07 --> Controller Class Initialized
INFO - 2018-01-21 23:51:07 --> Model Class Initialized
INFO - 2018-01-21 23:51:11 --> Config Class Initialized
INFO - 2018-01-21 23:51:11 --> Hooks Class Initialized
DEBUG - 2018-01-21 23:51:11 --> UTF-8 Support Enabled
INFO - 2018-01-21 23:51:11 --> Utf8 Class Initialized
INFO - 2018-01-21 23:51:11 --> URI Class Initialized
INFO - 2018-01-21 23:51:11 --> Router Class Initialized
INFO - 2018-01-21 23:51:11 --> Output Class Initialized
INFO - 2018-01-21 23:51:11 --> Security Class Initialized
DEBUG - 2018-01-21 23:51:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 23:51:11 --> Input Class Initialized
INFO - 2018-01-21 23:51:11 --> Language Class Initialized
INFO - 2018-01-21 23:51:11 --> Loader Class Initialized
INFO - 2018-01-21 23:51:11 --> Helper loaded: url_helper
INFO - 2018-01-21 23:51:11 --> Helper loaded: general_helper
INFO - 2018-01-21 23:51:11 --> Database Driver Class Initialized
DEBUG - 2018-01-21 23:51:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 23:51:11 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 23:51:11 --> Controller Class Initialized
INFO - 2018-01-21 23:51:11 --> Model Class Initialized
INFO - 2018-01-21 23:51:22 --> Config Class Initialized
INFO - 2018-01-21 23:51:22 --> Hooks Class Initialized
DEBUG - 2018-01-21 23:51:22 --> UTF-8 Support Enabled
INFO - 2018-01-21 23:51:22 --> Utf8 Class Initialized
INFO - 2018-01-21 23:51:22 --> URI Class Initialized
INFO - 2018-01-21 23:51:22 --> Router Class Initialized
INFO - 2018-01-21 23:51:22 --> Output Class Initialized
INFO - 2018-01-21 23:51:22 --> Security Class Initialized
DEBUG - 2018-01-21 23:51:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 23:51:22 --> Input Class Initialized
INFO - 2018-01-21 23:51:22 --> Language Class Initialized
INFO - 2018-01-21 23:51:22 --> Loader Class Initialized
INFO - 2018-01-21 23:51:22 --> Helper loaded: url_helper
INFO - 2018-01-21 23:51:22 --> Helper loaded: general_helper
INFO - 2018-01-21 23:51:22 --> Database Driver Class Initialized
DEBUG - 2018-01-21 23:51:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 23:51:22 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 23:51:22 --> Controller Class Initialized
INFO - 2018-01-21 23:51:22 --> Model Class Initialized
INFO - 2018-01-21 23:51:28 --> Config Class Initialized
INFO - 2018-01-21 23:51:28 --> Hooks Class Initialized
DEBUG - 2018-01-21 23:51:28 --> UTF-8 Support Enabled
INFO - 2018-01-21 23:51:28 --> Utf8 Class Initialized
INFO - 2018-01-21 23:51:28 --> URI Class Initialized
INFO - 2018-01-21 23:51:28 --> Router Class Initialized
INFO - 2018-01-21 23:51:28 --> Output Class Initialized
INFO - 2018-01-21 23:51:28 --> Security Class Initialized
DEBUG - 2018-01-21 23:51:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 23:51:28 --> Input Class Initialized
INFO - 2018-01-21 23:51:28 --> Language Class Initialized
INFO - 2018-01-21 23:51:28 --> Loader Class Initialized
INFO - 2018-01-21 23:51:28 --> Helper loaded: url_helper
INFO - 2018-01-21 23:51:28 --> Helper loaded: general_helper
INFO - 2018-01-21 23:51:28 --> Database Driver Class Initialized
DEBUG - 2018-01-21 23:51:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 23:51:28 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 23:51:28 --> Controller Class Initialized
INFO - 2018-01-21 23:51:28 --> Model Class Initialized
INFO - 2018-01-21 23:53:01 --> Config Class Initialized
INFO - 2018-01-21 23:53:01 --> Hooks Class Initialized
DEBUG - 2018-01-21 23:53:01 --> UTF-8 Support Enabled
INFO - 2018-01-21 23:53:01 --> Utf8 Class Initialized
INFO - 2018-01-21 23:53:01 --> URI Class Initialized
INFO - 2018-01-21 23:53:01 --> Router Class Initialized
INFO - 2018-01-21 23:53:01 --> Output Class Initialized
INFO - 2018-01-21 23:53:01 --> Security Class Initialized
DEBUG - 2018-01-21 23:53:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-21 23:53:01 --> Input Class Initialized
INFO - 2018-01-21 23:53:01 --> Language Class Initialized
INFO - 2018-01-21 23:53:01 --> Loader Class Initialized
INFO - 2018-01-21 23:53:01 --> Helper loaded: url_helper
INFO - 2018-01-21 23:53:01 --> Helper loaded: general_helper
INFO - 2018-01-21 23:53:01 --> Database Driver Class Initialized
DEBUG - 2018-01-21 23:53:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-21 23:53:01 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-21 23:53:01 --> Controller Class Initialized
INFO - 2018-01-21 23:53:01 --> Model Class Initialized
