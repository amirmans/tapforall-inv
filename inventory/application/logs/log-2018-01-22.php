<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2018-01-22 01:20:00 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 01:20:00 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 01:20:00 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer.php
INFO - 2018-01-22 01:20:00 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 01:20:00 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_customer_list.php
INFO - 2018-01-22 01:20:00 --> Final output sent to browser
DEBUG - 2018-01-22 01:20:00 --> Total execution time: 0.2823
INFO - 2018-01-22 01:20:11 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 01:20:11 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 01:20:11 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 01:20:11 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_jobschedule_list.php
INFO - 2018-01-22 01:20:11 --> Final output sent to browser
DEBUG - 2018-01-22 01:20:11 --> Total execution time: 0.0860
ERROR - 2018-01-22 01:20:30 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
ERROR - 2018-01-22 02:05:09 --> Query error: Unknown column 'j.archived' in 'where clause' - Invalid query: SELECT DISTINCT `p`.`product_id`, `p`.`product_name`
FROM `product` as `p`
LEFT JOIN `job_product` as `jp` ON `jp`.`product_id` = `p`.`product_id`
LEFT JOIN `batch` as `b` ON `b`.`job_product_id`=`jp`.`job_product_id`
WHERE `p`.`archived` =0
AND `j`.`archived` =0
AND `b`.`workstep` = 2
AND `b`.`shipping_job_id` =0
ERROR - 2018-01-22 02:05:09 --> Severity: Error --> Call to a member function result_array() on boolean /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 143
ERROR - 2018-01-22 02:05:22 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
ERROR - 2018-01-22 02:05:24 --> Query error: Unknown column 'j.archived' in 'where clause' - Invalid query: SELECT DISTINCT `p`.`product_id`, `p`.`product_name`
FROM `product` as `p`
LEFT JOIN `job_product` as `jp` ON `jp`.`product_id` = `p`.`product_id`
LEFT JOIN `batch` as `b` ON `b`.`job_product_id`=`jp`.`job_product_id`
WHERE `p`.`archived` =0
AND `j`.`archived` =0
AND `b`.`workstep` = 2
AND `b`.`shipping_job_id` =0
ERROR - 2018-01-22 02:05:24 --> Severity: Error --> Call to a member function result_array() on boolean /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 143
ERROR - 2018-01-22 02:09:47 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
ERROR - 2018-01-22 02:09:49 --> Query error: Unknown column 'j.archived' in 'where clause' - Invalid query: SELECT `p`.`product_id`, `p`.`product_name`
FROM `product` as `p`
LEFT JOIN `job_product` as `jp` ON `jp`.`product_id` = `p`.`product_id`
LEFT JOIN `batch` as `b` ON `b`.`job_product_id`=`jp`.`job_product_id`
WHERE `p`.`archived` =0
AND `j`.`archived` =0
AND `b`.`workstep` = 2
AND `b`.`shipping_job_id` =0
ERROR - 2018-01-22 02:09:49 --> Severity: Error --> Call to a member function result_array() on boolean /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 143
ERROR - 2018-01-22 02:11:02 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 02:11:06 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 02:11:06 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 02:11:06 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 02:11:06 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 02:11:06 --> Final output sent to browser
DEBUG - 2018-01-22 02:11:06 --> Total execution time: 6.9174
INFO - 2018-01-22 02:13:25 --> Final output sent to browser
DEBUG - 2018-01-22 02:13:25 --> Total execution time: 138.9977
ERROR - 2018-01-22 02:13:25 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 02:13:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 02:13:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 02:13:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 02:13:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
ERROR - 2018-01-22 02:13:25 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 02:13:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 02:13:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 02:13:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 02:13:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 02:13:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 02:13:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 02:13:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 02:13:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_jobschedule_list.php
INFO - 2018-01-22 02:13:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 02:13:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 02:13:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 02:13:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_jobschedule_list.php
INFO - 2018-01-22 02:13:26 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 02:13:26 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 02:13:26 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 02:13:26 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_jobschedule_list.php
INFO - 2018-01-22 02:13:26 --> Final output sent to browser
DEBUG - 2018-01-22 02:13:26 --> Total execution time: 9.7513
INFO - 2018-01-22 02:13:30 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 02:13:30 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 02:13:30 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 02:13:30 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_jobschedule_list.php
INFO - 2018-01-22 02:13:30 --> Final output sent to browser
DEBUG - 2018-01-22 02:13:30 --> Total execution time: 0.1236
ERROR - 2018-01-22 02:13:35 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 02:13:35 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 02:13:35 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 02:13:35 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 02:13:35 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 02:13:35 --> Final output sent to browser
DEBUG - 2018-01-22 02:13:35 --> Total execution time: 0.0496
INFO - 2018-01-22 02:13:35 --> Final output sent to browser
DEBUG - 2018-01-22 02:13:35 --> Total execution time: 0.0670
ERROR - 2018-01-22 02:13:44 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
ERROR - 2018-01-22 02:17:57 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 02:17:57 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 02:17:57 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 02:17:57 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 02:17:57 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 02:17:57 --> Final output sent to browser
DEBUG - 2018-01-22 02:17:57 --> Total execution time: 0.1108
INFO - 2018-01-22 02:17:57 --> Final output sent to browser
DEBUG - 2018-01-22 02:17:57 --> Total execution time: 0.0848
ERROR - 2018-01-22 04:07:07 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 04:07:07 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 04:07:07 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 04:07:07 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 04:07:07 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 04:07:07 --> Final output sent to browser
DEBUG - 2018-01-22 04:07:07 --> Total execution time: 0.1169
INFO - 2018-01-22 04:07:08 --> Final output sent to browser
DEBUG - 2018-01-22 04:07:08 --> Total execution time: 0.2186
ERROR - 2018-01-22 04:07:38 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 04:07:41 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 04:07:41 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 04:07:41 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 04:07:41 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 04:07:41 --> Final output sent to browser
DEBUG - 2018-01-22 04:07:41 --> Total execution time: 5.5783
INFO - 2018-01-22 04:07:42 --> Final output sent to browser
DEBUG - 2018-01-22 04:07:42 --> Total execution time: 1.1648
INFO - 2018-01-22 04:08:06 --> Final output sent to browser
DEBUG - 2018-01-22 04:08:06 --> Total execution time: 7.1592
ERROR - 2018-01-22 04:09:09 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 04:09:18 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 04:09:18 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 04:09:18 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 04:09:18 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 04:09:18 --> Final output sent to browser
DEBUG - 2018-01-22 04:09:18 --> Total execution time: 13.9139
INFO - 2018-01-22 04:09:20 --> Final output sent to browser
DEBUG - 2018-01-22 04:09:20 --> Total execution time: 1.3355
INFO - 2018-01-22 04:20:34 --> Final output sent to browser
DEBUG - 2018-01-22 04:20:34 --> Total execution time: 663.9966
INFO - 2018-01-22 04:21:10 --> Final output sent to browser
DEBUG - 2018-01-22 04:21:10 --> Total execution time: 29.2811
INFO - 2018-01-22 07:50:32 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 07:50:32 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 07:50:32 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer.php
INFO - 2018-01-22 07:50:32 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 07:50:32 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_customer_list.php
INFO - 2018-01-22 07:50:32 --> Final output sent to browser
DEBUG - 2018-01-22 07:50:32 --> Total execution time: 0.1794
INFO - 2018-01-22 07:50:58 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 07:50:58 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 07:50:58 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 07:50:58 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_jobschedule_list.php
INFO - 2018-01-22 07:50:58 --> Final output sent to browser
DEBUG - 2018-01-22 07:50:58 --> Total execution time: 0.1132
ERROR - 2018-01-22 07:51:01 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 07:51:01 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 07:51:01 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 07:51:01 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 07:51:01 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 07:51:01 --> Final output sent to browser
DEBUG - 2018-01-22 07:51:01 --> Total execution time: 0.0484
INFO - 2018-01-22 07:51:01 --> Final output sent to browser
DEBUG - 2018-01-22 07:51:01 --> Total execution time: 0.0799
INFO - 2018-01-22 07:51:03 --> Final output sent to browser
DEBUG - 2018-01-22 07:51:03 --> Total execution time: 0.0547
INFO - 2018-01-22 07:51:07 --> Final output sent to browser
DEBUG - 2018-01-22 07:51:07 --> Total execution time: 0.0593
INFO - 2018-01-22 07:51:11 --> Final output sent to browser
DEBUG - 2018-01-22 07:51:11 --> Total execution time: 0.0647
INFO - 2018-01-22 07:51:22 --> Final output sent to browser
DEBUG - 2018-01-22 07:51:22 --> Total execution time: 0.0820
INFO - 2018-01-22 07:51:28 --> Final output sent to browser
DEBUG - 2018-01-22 07:51:28 --> Total execution time: 0.0651
INFO - 2018-01-22 07:55:16 --> Final output sent to browser
DEBUG - 2018-01-22 07:55:16 --> Total execution time: 134.7212
INFO - 2018-01-22 00:07:38 --> Config Class Initialized
INFO - 2018-01-22 00:07:38 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:07:38 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:07:38 --> Utf8 Class Initialized
INFO - 2018-01-22 00:07:38 --> URI Class Initialized
INFO - 2018-01-22 00:07:38 --> Router Class Initialized
INFO - 2018-01-22 00:07:38 --> Output Class Initialized
INFO - 2018-01-22 00:07:38 --> Security Class Initialized
DEBUG - 2018-01-22 00:07:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:07:38 --> Input Class Initialized
INFO - 2018-01-22 00:07:38 --> Language Class Initialized
INFO - 2018-01-22 00:07:38 --> Loader Class Initialized
INFO - 2018-01-22 00:07:38 --> Helper loaded: url_helper
INFO - 2018-01-22 00:07:38 --> Helper loaded: general_helper
INFO - 2018-01-22 00:07:38 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:07:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:07:38 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:07:38 --> Controller Class Initialized
INFO - 2018-01-22 00:07:38 --> Model Class Initialized
INFO - 2018-01-22 08:07:40 --> Final output sent to browser
DEBUG - 2018-01-22 08:07:40 --> Total execution time: 2.5008
INFO - 2018-01-22 00:07:47 --> Config Class Initialized
INFO - 2018-01-22 00:07:47 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:07:47 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:07:47 --> Utf8 Class Initialized
INFO - 2018-01-22 00:07:47 --> URI Class Initialized
INFO - 2018-01-22 00:07:47 --> Router Class Initialized
INFO - 2018-01-22 00:07:47 --> Output Class Initialized
INFO - 2018-01-22 00:07:47 --> Security Class Initialized
DEBUG - 2018-01-22 00:07:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:07:47 --> Input Class Initialized
INFO - 2018-01-22 00:07:47 --> Language Class Initialized
INFO - 2018-01-22 00:07:47 --> Loader Class Initialized
INFO - 2018-01-22 00:07:47 --> Helper loaded: url_helper
INFO - 2018-01-22 00:07:47 --> Helper loaded: general_helper
INFO - 2018-01-22 00:07:47 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:07:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:07:47 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:07:47 --> Controller Class Initialized
INFO - 2018-01-22 00:07:47 --> Model Class Initialized
INFO - 2018-01-22 00:11:03 --> Config Class Initialized
INFO - 2018-01-22 00:11:03 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:11:03 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:11:03 --> Utf8 Class Initialized
INFO - 2018-01-22 00:11:03 --> URI Class Initialized
INFO - 2018-01-22 00:11:03 --> Router Class Initialized
INFO - 2018-01-22 00:11:03 --> Output Class Initialized
INFO - 2018-01-22 00:11:03 --> Security Class Initialized
DEBUG - 2018-01-22 00:11:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:11:03 --> Input Class Initialized
INFO - 2018-01-22 00:11:03 --> Language Class Initialized
INFO - 2018-01-22 00:11:03 --> Loader Class Initialized
INFO - 2018-01-22 00:11:03 --> Helper loaded: url_helper
INFO - 2018-01-22 00:11:03 --> Helper loaded: general_helper
INFO - 2018-01-22 00:11:03 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:11:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:11:03 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:11:03 --> Controller Class Initialized
INFO - 2018-01-22 00:11:03 --> Model Class Initialized
ERROR - 2018-01-22 08:11:03 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 08:11:03 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:11:03 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:11:03 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:11:03 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:11:03 --> Final output sent to browser
DEBUG - 2018-01-22 08:11:03 --> Total execution time: 0.0617
INFO - 2018-01-22 00:11:03 --> Config Class Initialized
INFO - 2018-01-22 00:11:03 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:11:03 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:11:03 --> Utf8 Class Initialized
INFO - 2018-01-22 00:11:03 --> URI Class Initialized
INFO - 2018-01-22 00:11:03 --> Router Class Initialized
INFO - 2018-01-22 00:11:03 --> Output Class Initialized
INFO - 2018-01-22 00:11:03 --> Security Class Initialized
DEBUG - 2018-01-22 00:11:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:11:03 --> Input Class Initialized
INFO - 2018-01-22 00:11:03 --> Language Class Initialized
INFO - 2018-01-22 00:11:03 --> Loader Class Initialized
INFO - 2018-01-22 00:11:03 --> Helper loaded: url_helper
INFO - 2018-01-22 00:11:03 --> Helper loaded: general_helper
INFO - 2018-01-22 00:11:03 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:11:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:11:03 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:11:03 --> Controller Class Initialized
INFO - 2018-01-22 00:11:03 --> Model Class Initialized
INFO - 2018-01-22 08:11:03 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:11:03 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:11:03 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:11:03 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:11:03 --> Final output sent to browser
DEBUG - 2018-01-22 08:11:03 --> Total execution time: 0.2035
INFO - 2018-01-22 00:11:08 --> Config Class Initialized
INFO - 2018-01-22 00:11:08 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:11:08 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:11:08 --> Utf8 Class Initialized
INFO - 2018-01-22 00:11:08 --> URI Class Initialized
INFO - 2018-01-22 00:11:08 --> Router Class Initialized
INFO - 2018-01-22 00:11:08 --> Output Class Initialized
INFO - 2018-01-22 00:11:08 --> Security Class Initialized
DEBUG - 2018-01-22 00:11:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:11:08 --> Input Class Initialized
INFO - 2018-01-22 00:11:08 --> Language Class Initialized
INFO - 2018-01-22 00:11:08 --> Loader Class Initialized
INFO - 2018-01-22 00:11:08 --> Helper loaded: url_helper
INFO - 2018-01-22 00:11:08 --> Helper loaded: general_helper
INFO - 2018-01-22 00:11:08 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:11:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:11:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:11:08 --> Controller Class Initialized
INFO - 2018-01-22 00:11:08 --> Model Class Initialized
INFO - 2018-01-22 08:11:08 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:11:08 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:11:08 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:11:08 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:11:08 --> Final output sent to browser
DEBUG - 2018-01-22 08:11:08 --> Total execution time: 0.0663
INFO - 2018-01-22 00:11:10 --> Config Class Initialized
INFO - 2018-01-22 00:11:10 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:11:10 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:11:10 --> Utf8 Class Initialized
INFO - 2018-01-22 00:11:10 --> URI Class Initialized
INFO - 2018-01-22 00:11:10 --> Router Class Initialized
INFO - 2018-01-22 00:11:10 --> Output Class Initialized
INFO - 2018-01-22 00:11:10 --> Security Class Initialized
DEBUG - 2018-01-22 00:11:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:11:10 --> Input Class Initialized
INFO - 2018-01-22 00:11:10 --> Language Class Initialized
INFO - 2018-01-22 00:11:10 --> Loader Class Initialized
INFO - 2018-01-22 00:11:10 --> Helper loaded: url_helper
INFO - 2018-01-22 00:11:10 --> Helper loaded: general_helper
INFO - 2018-01-22 00:11:10 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:11:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:11:10 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:11:10 --> Controller Class Initialized
INFO - 2018-01-22 00:11:10 --> Model Class Initialized
INFO - 2018-01-22 08:11:10 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:11:10 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:11:10 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:11:10 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:11:10 --> Final output sent to browser
DEBUG - 2018-01-22 08:11:10 --> Total execution time: 0.0884
INFO - 2018-01-22 00:11:19 --> Config Class Initialized
INFO - 2018-01-22 00:11:19 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:11:19 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:11:19 --> Utf8 Class Initialized
INFO - 2018-01-22 00:11:19 --> URI Class Initialized
INFO - 2018-01-22 00:11:19 --> Router Class Initialized
INFO - 2018-01-22 00:11:19 --> Output Class Initialized
INFO - 2018-01-22 00:11:19 --> Security Class Initialized
DEBUG - 2018-01-22 00:11:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:11:19 --> Input Class Initialized
INFO - 2018-01-22 00:11:19 --> Language Class Initialized
INFO - 2018-01-22 00:11:19 --> Loader Class Initialized
INFO - 2018-01-22 00:11:19 --> Helper loaded: url_helper
INFO - 2018-01-22 00:11:19 --> Helper loaded: general_helper
INFO - 2018-01-22 00:11:19 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:11:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:11:19 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:11:19 --> Controller Class Initialized
INFO - 2018-01-22 00:11:19 --> Model Class Initialized
ERROR - 2018-01-22 08:11:19 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 08:11:19 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:11:19 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:11:19 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:11:19 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:11:19 --> Final output sent to browser
DEBUG - 2018-01-22 08:11:19 --> Total execution time: 0.0807
INFO - 2018-01-22 00:11:19 --> Config Class Initialized
INFO - 2018-01-22 00:11:19 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:11:19 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:11:19 --> Utf8 Class Initialized
INFO - 2018-01-22 00:11:19 --> URI Class Initialized
INFO - 2018-01-22 00:11:19 --> Router Class Initialized
INFO - 2018-01-22 00:11:19 --> Output Class Initialized
INFO - 2018-01-22 00:11:19 --> Security Class Initialized
DEBUG - 2018-01-22 00:11:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:11:19 --> Input Class Initialized
INFO - 2018-01-22 00:11:19 --> Language Class Initialized
INFO - 2018-01-22 00:11:19 --> Loader Class Initialized
INFO - 2018-01-22 00:11:19 --> Helper loaded: url_helper
INFO - 2018-01-22 00:11:19 --> Helper loaded: general_helper
INFO - 2018-01-22 00:11:19 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:11:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:11:19 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:11:19 --> Controller Class Initialized
INFO - 2018-01-22 00:11:19 --> Model Class Initialized
INFO - 2018-01-22 08:11:19 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:11:19 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:11:19 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:11:19 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:11:19 --> Final output sent to browser
DEBUG - 2018-01-22 08:11:19 --> Total execution time: 0.0827
INFO - 2018-01-22 00:11:22 --> Config Class Initialized
INFO - 2018-01-22 00:11:22 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:11:22 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:11:22 --> Utf8 Class Initialized
INFO - 2018-01-22 00:11:22 --> URI Class Initialized
INFO - 2018-01-22 00:11:22 --> Router Class Initialized
INFO - 2018-01-22 00:11:22 --> Output Class Initialized
INFO - 2018-01-22 00:11:22 --> Security Class Initialized
DEBUG - 2018-01-22 00:11:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:11:22 --> Input Class Initialized
INFO - 2018-01-22 00:11:22 --> Language Class Initialized
INFO - 2018-01-22 00:11:22 --> Loader Class Initialized
INFO - 2018-01-22 00:11:22 --> Helper loaded: url_helper
INFO - 2018-01-22 00:11:22 --> Helper loaded: general_helper
INFO - 2018-01-22 00:11:22 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:11:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:11:22 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:11:22 --> Controller Class Initialized
INFO - 2018-01-22 00:11:22 --> Model Class Initialized
ERROR - 2018-01-22 08:11:22 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 08:11:22 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:11:22 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:11:22 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:11:22 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:11:22 --> Final output sent to browser
DEBUG - 2018-01-22 08:11:22 --> Total execution time: 0.0894
INFO - 2018-01-22 00:11:22 --> Config Class Initialized
INFO - 2018-01-22 00:11:22 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:11:22 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:11:22 --> Utf8 Class Initialized
INFO - 2018-01-22 00:11:22 --> URI Class Initialized
INFO - 2018-01-22 00:11:22 --> Router Class Initialized
INFO - 2018-01-22 00:11:22 --> Output Class Initialized
INFO - 2018-01-22 00:11:22 --> Security Class Initialized
DEBUG - 2018-01-22 00:11:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:11:22 --> Input Class Initialized
INFO - 2018-01-22 00:11:22 --> Language Class Initialized
INFO - 2018-01-22 00:11:22 --> Loader Class Initialized
INFO - 2018-01-22 00:11:22 --> Helper loaded: url_helper
INFO - 2018-01-22 00:11:22 --> Helper loaded: general_helper
INFO - 2018-01-22 00:11:22 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:11:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:11:22 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:11:22 --> Controller Class Initialized
INFO - 2018-01-22 00:11:22 --> Model Class Initialized
INFO - 2018-01-22 08:11:22 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:11:22 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:11:22 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:11:22 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:11:22 --> Final output sent to browser
DEBUG - 2018-01-22 08:11:22 --> Total execution time: 0.0973
INFO - 2018-01-22 00:12:03 --> Config Class Initialized
INFO - 2018-01-22 00:12:03 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:12:03 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:12:03 --> Utf8 Class Initialized
INFO - 2018-01-22 00:12:03 --> URI Class Initialized
INFO - 2018-01-22 00:12:03 --> Router Class Initialized
INFO - 2018-01-22 00:12:03 --> Output Class Initialized
INFO - 2018-01-22 00:12:03 --> Security Class Initialized
DEBUG - 2018-01-22 00:12:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:12:03 --> Input Class Initialized
INFO - 2018-01-22 00:12:03 --> Language Class Initialized
INFO - 2018-01-22 00:12:03 --> Loader Class Initialized
INFO - 2018-01-22 00:12:03 --> Helper loaded: url_helper
INFO - 2018-01-22 00:12:03 --> Helper loaded: general_helper
INFO - 2018-01-22 00:12:03 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:12:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:12:03 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:12:03 --> Controller Class Initialized
INFO - 2018-01-22 00:12:03 --> Model Class Initialized
INFO - 2018-01-22 08:12:18 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:12:18 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:16:48 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:16:48 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:16:48 --> Final output sent to browser
DEBUG - 2018-01-22 08:16:48 --> Total execution time: 284.7527
INFO - 2018-01-22 00:18:12 --> Config Class Initialized
INFO - 2018-01-22 00:18:12 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:18:12 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:18:12 --> Utf8 Class Initialized
INFO - 2018-01-22 00:18:12 --> URI Class Initialized
INFO - 2018-01-22 00:18:12 --> Router Class Initialized
INFO - 2018-01-22 00:18:12 --> Output Class Initialized
INFO - 2018-01-22 00:18:12 --> Security Class Initialized
DEBUG - 2018-01-22 00:18:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:18:12 --> Input Class Initialized
INFO - 2018-01-22 00:18:12 --> Language Class Initialized
INFO - 2018-01-22 00:18:12 --> Loader Class Initialized
INFO - 2018-01-22 00:18:12 --> Helper loaded: url_helper
INFO - 2018-01-22 00:18:12 --> Helper loaded: general_helper
INFO - 2018-01-22 00:18:12 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:18:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:18:13 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:18:13 --> Controller Class Initialized
INFO - 2018-01-22 00:18:13 --> Model Class Initialized
INFO - 2018-01-22 00:35:49 --> Config Class Initialized
INFO - 2018-01-22 00:35:49 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:35:49 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:35:49 --> Utf8 Class Initialized
INFO - 2018-01-22 00:35:49 --> URI Class Initialized
INFO - 2018-01-22 00:35:49 --> Router Class Initialized
INFO - 2018-01-22 00:35:49 --> Output Class Initialized
INFO - 2018-01-22 00:35:49 --> Security Class Initialized
DEBUG - 2018-01-22 00:35:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:35:49 --> Input Class Initialized
INFO - 2018-01-22 00:35:49 --> Language Class Initialized
INFO - 2018-01-22 00:35:49 --> Loader Class Initialized
INFO - 2018-01-22 00:35:49 --> Helper loaded: url_helper
INFO - 2018-01-22 00:35:49 --> Helper loaded: general_helper
INFO - 2018-01-22 00:35:49 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:35:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:35:49 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:35:49 --> Controller Class Initialized
INFO - 2018-01-22 00:35:49 --> Model Class Initialized
ERROR - 2018-01-22 08:35:49 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 08:35:49 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:35:49 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:35:49 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:35:49 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:35:49 --> Final output sent to browser
DEBUG - 2018-01-22 08:35:49 --> Total execution time: 0.1209
INFO - 2018-01-22 00:35:50 --> Config Class Initialized
INFO - 2018-01-22 00:35:50 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:35:50 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:35:50 --> Utf8 Class Initialized
INFO - 2018-01-22 00:35:50 --> URI Class Initialized
INFO - 2018-01-22 00:35:50 --> Router Class Initialized
INFO - 2018-01-22 00:35:50 --> Output Class Initialized
INFO - 2018-01-22 00:35:50 --> Security Class Initialized
DEBUG - 2018-01-22 00:35:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:35:50 --> Input Class Initialized
INFO - 2018-01-22 00:35:50 --> Language Class Initialized
INFO - 2018-01-22 00:35:50 --> Loader Class Initialized
INFO - 2018-01-22 00:35:50 --> Helper loaded: url_helper
INFO - 2018-01-22 00:35:50 --> Helper loaded: general_helper
INFO - 2018-01-22 00:35:50 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:35:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:35:50 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:35:50 --> Controller Class Initialized
INFO - 2018-01-22 00:35:50 --> Model Class Initialized
INFO - 2018-01-22 08:35:50 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:35:50 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:35:50 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:35:50 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:35:50 --> Final output sent to browser
DEBUG - 2018-01-22 08:35:50 --> Total execution time: 0.2793
INFO - 2018-01-22 00:35:54 --> Config Class Initialized
INFO - 2018-01-22 00:35:54 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:35:54 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:35:54 --> Utf8 Class Initialized
INFO - 2018-01-22 00:35:54 --> URI Class Initialized
INFO - 2018-01-22 00:35:54 --> Router Class Initialized
INFO - 2018-01-22 00:35:54 --> Output Class Initialized
INFO - 2018-01-22 00:35:54 --> Security Class Initialized
DEBUG - 2018-01-22 00:35:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:35:54 --> Input Class Initialized
INFO - 2018-01-22 00:35:54 --> Language Class Initialized
INFO - 2018-01-22 00:35:54 --> Loader Class Initialized
INFO - 2018-01-22 00:35:54 --> Helper loaded: url_helper
INFO - 2018-01-22 00:35:54 --> Helper loaded: general_helper
INFO - 2018-01-22 00:35:54 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:35:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:35:54 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:35:54 --> Controller Class Initialized
INFO - 2018-01-22 00:35:54 --> Model Class Initialized
INFO - 2018-01-22 08:35:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:35:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:35:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:35:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:35:54 --> Final output sent to browser
DEBUG - 2018-01-22 08:35:54 --> Total execution time: 0.0876
INFO - 2018-01-22 00:36:00 --> Config Class Initialized
INFO - 2018-01-22 00:36:00 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:36:00 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:36:00 --> Utf8 Class Initialized
INFO - 2018-01-22 00:36:00 --> URI Class Initialized
INFO - 2018-01-22 00:36:00 --> Router Class Initialized
INFO - 2018-01-22 00:36:00 --> Output Class Initialized
INFO - 2018-01-22 00:36:00 --> Security Class Initialized
DEBUG - 2018-01-22 00:36:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:36:00 --> Input Class Initialized
INFO - 2018-01-22 00:36:00 --> Language Class Initialized
INFO - 2018-01-22 00:36:00 --> Loader Class Initialized
INFO - 2018-01-22 00:36:00 --> Helper loaded: url_helper
INFO - 2018-01-22 00:36:00 --> Helper loaded: general_helper
INFO - 2018-01-22 00:36:00 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:36:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:36:00 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:36:00 --> Controller Class Initialized
INFO - 2018-01-22 00:36:00 --> Model Class Initialized
ERROR - 2018-01-22 08:36:00 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 08:36:00 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:36:00 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:36:00 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:36:00 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:36:00 --> Final output sent to browser
DEBUG - 2018-01-22 08:36:00 --> Total execution time: 0.0548
INFO - 2018-01-22 00:36:00 --> Config Class Initialized
INFO - 2018-01-22 00:36:00 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:36:00 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:36:00 --> Utf8 Class Initialized
INFO - 2018-01-22 00:36:00 --> URI Class Initialized
INFO - 2018-01-22 00:36:00 --> Router Class Initialized
INFO - 2018-01-22 00:36:00 --> Output Class Initialized
INFO - 2018-01-22 00:36:00 --> Security Class Initialized
DEBUG - 2018-01-22 00:36:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:36:00 --> Input Class Initialized
INFO - 2018-01-22 00:36:00 --> Language Class Initialized
INFO - 2018-01-22 00:36:00 --> Loader Class Initialized
INFO - 2018-01-22 00:36:00 --> Helper loaded: url_helper
INFO - 2018-01-22 00:36:00 --> Helper loaded: general_helper
INFO - 2018-01-22 00:36:00 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:36:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:36:00 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:36:00 --> Controller Class Initialized
INFO - 2018-01-22 00:36:00 --> Model Class Initialized
INFO - 2018-01-22 08:36:00 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:36:00 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:36:00 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:36:00 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:36:00 --> Final output sent to browser
DEBUG - 2018-01-22 08:36:00 --> Total execution time: 0.0742
INFO - 2018-01-22 00:36:03 --> Config Class Initialized
INFO - 2018-01-22 00:36:03 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:36:03 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:36:03 --> Utf8 Class Initialized
INFO - 2018-01-22 00:36:03 --> URI Class Initialized
INFO - 2018-01-22 00:36:03 --> Router Class Initialized
INFO - 2018-01-22 00:36:03 --> Output Class Initialized
INFO - 2018-01-22 00:36:03 --> Security Class Initialized
DEBUG - 2018-01-22 00:36:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:36:03 --> Input Class Initialized
INFO - 2018-01-22 00:36:03 --> Language Class Initialized
INFO - 2018-01-22 00:36:03 --> Loader Class Initialized
INFO - 2018-01-22 00:36:03 --> Helper loaded: url_helper
INFO - 2018-01-22 00:36:03 --> Helper loaded: general_helper
INFO - 2018-01-22 00:36:03 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:36:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:36:03 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:36:03 --> Controller Class Initialized
INFO - 2018-01-22 00:36:03 --> Model Class Initialized
ERROR - 2018-01-22 08:36:03 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 08:36:03 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:36:03 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:36:03 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:36:03 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:36:03 --> Final output sent to browser
DEBUG - 2018-01-22 08:36:03 --> Total execution time: 0.0454
INFO - 2018-01-22 00:36:03 --> Config Class Initialized
INFO - 2018-01-22 00:36:03 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:36:03 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:36:03 --> Utf8 Class Initialized
INFO - 2018-01-22 00:36:03 --> URI Class Initialized
INFO - 2018-01-22 00:36:03 --> Router Class Initialized
INFO - 2018-01-22 00:36:03 --> Output Class Initialized
INFO - 2018-01-22 00:36:03 --> Security Class Initialized
DEBUG - 2018-01-22 00:36:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:36:03 --> Input Class Initialized
INFO - 2018-01-22 00:36:03 --> Language Class Initialized
INFO - 2018-01-22 00:36:03 --> Loader Class Initialized
INFO - 2018-01-22 00:36:03 --> Helper loaded: url_helper
INFO - 2018-01-22 00:36:03 --> Helper loaded: general_helper
INFO - 2018-01-22 00:36:03 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:36:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:36:03 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:36:03 --> Controller Class Initialized
INFO - 2018-01-22 00:36:03 --> Model Class Initialized
INFO - 2018-01-22 08:36:03 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:36:03 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:36:03 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:36:03 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:36:03 --> Final output sent to browser
DEBUG - 2018-01-22 08:36:03 --> Total execution time: 0.0821
INFO - 2018-01-22 00:36:37 --> Config Class Initialized
INFO - 2018-01-22 00:36:37 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:36:37 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:36:37 --> Utf8 Class Initialized
INFO - 2018-01-22 00:36:37 --> URI Class Initialized
INFO - 2018-01-22 00:36:37 --> Router Class Initialized
INFO - 2018-01-22 00:36:37 --> Output Class Initialized
INFO - 2018-01-22 00:36:37 --> Security Class Initialized
DEBUG - 2018-01-22 00:36:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:36:37 --> Input Class Initialized
INFO - 2018-01-22 00:36:37 --> Language Class Initialized
INFO - 2018-01-22 00:36:37 --> Loader Class Initialized
INFO - 2018-01-22 00:36:37 --> Helper loaded: url_helper
INFO - 2018-01-22 00:36:37 --> Helper loaded: general_helper
INFO - 2018-01-22 00:36:37 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:36:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:36:37 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:36:37 --> Controller Class Initialized
INFO - 2018-01-22 00:36:37 --> Model Class Initialized
ERROR - 2018-01-22 08:36:40 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 08:37:00 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:37:00 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:37:33 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:37:33 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:37:33 --> Final output sent to browser
DEBUG - 2018-01-22 08:37:33 --> Total execution time: 55.5321
INFO - 2018-01-22 00:37:33 --> Config Class Initialized
INFO - 2018-01-22 00:37:33 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:37:33 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:37:33 --> Utf8 Class Initialized
INFO - 2018-01-22 00:37:33 --> URI Class Initialized
INFO - 2018-01-22 00:37:33 --> Router Class Initialized
INFO - 2018-01-22 00:37:33 --> Output Class Initialized
INFO - 2018-01-22 00:37:33 --> Security Class Initialized
DEBUG - 2018-01-22 00:37:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:37:33 --> Input Class Initialized
INFO - 2018-01-22 00:37:33 --> Language Class Initialized
INFO - 2018-01-22 00:37:33 --> Loader Class Initialized
INFO - 2018-01-22 00:37:33 --> Helper loaded: url_helper
INFO - 2018-01-22 00:37:33 --> Helper loaded: general_helper
INFO - 2018-01-22 00:37:33 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:37:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:37:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:37:33 --> Controller Class Initialized
INFO - 2018-01-22 00:37:33 --> Model Class Initialized
INFO - 2018-01-22 08:38:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:38:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:40:08 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:40:08 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:40:08 --> Final output sent to browser
DEBUG - 2018-01-22 08:40:08 --> Total execution time: 154.9259
INFO - 2018-01-22 00:40:22 --> Config Class Initialized
INFO - 2018-01-22 00:40:22 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:40:22 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:40:22 --> Utf8 Class Initialized
INFO - 2018-01-22 00:40:22 --> URI Class Initialized
INFO - 2018-01-22 00:40:22 --> Router Class Initialized
INFO - 2018-01-22 00:40:22 --> Output Class Initialized
INFO - 2018-01-22 00:40:22 --> Security Class Initialized
DEBUG - 2018-01-22 00:40:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:40:22 --> Input Class Initialized
INFO - 2018-01-22 00:40:22 --> Language Class Initialized
INFO - 2018-01-22 00:40:22 --> Loader Class Initialized
INFO - 2018-01-22 00:40:22 --> Helper loaded: url_helper
INFO - 2018-01-22 00:40:22 --> Helper loaded: general_helper
INFO - 2018-01-22 00:40:22 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:40:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:40:22 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:40:22 --> Controller Class Initialized
INFO - 2018-01-22 00:40:22 --> Model Class Initialized
INFO - 2018-01-22 08:41:12 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:41:12 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:41:21 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:41:21 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:41:23 --> Final output sent to browser
DEBUG - 2018-01-22 08:41:23 --> Total execution time: 60.5427
INFO - 2018-01-22 00:41:31 --> Config Class Initialized
INFO - 2018-01-22 00:41:31 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:41:31 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:41:31 --> Utf8 Class Initialized
INFO - 2018-01-22 00:41:31 --> URI Class Initialized
INFO - 2018-01-22 00:41:31 --> Router Class Initialized
INFO - 2018-01-22 00:41:31 --> Output Class Initialized
INFO - 2018-01-22 00:41:31 --> Security Class Initialized
DEBUG - 2018-01-22 00:41:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:41:31 --> Input Class Initialized
INFO - 2018-01-22 00:41:31 --> Language Class Initialized
INFO - 2018-01-22 00:41:31 --> Loader Class Initialized
INFO - 2018-01-22 00:41:31 --> Helper loaded: url_helper
INFO - 2018-01-22 00:41:31 --> Helper loaded: general_helper
INFO - 2018-01-22 00:41:31 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:41:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:41:31 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:41:31 --> Controller Class Initialized
INFO - 2018-01-22 00:41:31 --> Model Class Initialized
INFO - 2018-01-22 08:41:31 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:41:31 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:41:31 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:41:31 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_jobschedule_list.php
INFO - 2018-01-22 08:41:31 --> Final output sent to browser
DEBUG - 2018-01-22 08:41:31 --> Total execution time: 0.0874
INFO - 2018-01-22 00:42:24 --> Config Class Initialized
INFO - 2018-01-22 00:42:24 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:42:24 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:42:24 --> Utf8 Class Initialized
INFO - 2018-01-22 00:42:24 --> URI Class Initialized
INFO - 2018-01-22 00:42:24 --> Router Class Initialized
INFO - 2018-01-22 00:42:24 --> Output Class Initialized
INFO - 2018-01-22 00:42:24 --> Security Class Initialized
DEBUG - 2018-01-22 00:42:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:42:24 --> Input Class Initialized
INFO - 2018-01-22 00:42:24 --> Language Class Initialized
INFO - 2018-01-22 00:42:24 --> Loader Class Initialized
INFO - 2018-01-22 00:42:24 --> Helper loaded: url_helper
INFO - 2018-01-22 00:42:24 --> Helper loaded: general_helper
INFO - 2018-01-22 00:42:24 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:42:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:42:24 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:42:24 --> Controller Class Initialized
INFO - 2018-01-22 00:42:24 --> Model Class Initialized
ERROR - 2018-01-22 08:42:33 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 00:46:04 --> Config Class Initialized
INFO - 2018-01-22 00:46:04 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:46:04 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:46:04 --> Utf8 Class Initialized
INFO - 2018-01-22 00:46:04 --> URI Class Initialized
INFO - 2018-01-22 00:46:04 --> Router Class Initialized
INFO - 2018-01-22 00:46:04 --> Output Class Initialized
INFO - 2018-01-22 00:46:04 --> Security Class Initialized
DEBUG - 2018-01-22 00:46:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:46:04 --> Input Class Initialized
INFO - 2018-01-22 00:46:04 --> Language Class Initialized
INFO - 2018-01-22 00:46:04 --> Loader Class Initialized
INFO - 2018-01-22 00:46:04 --> Helper loaded: url_helper
INFO - 2018-01-22 00:46:04 --> Helper loaded: general_helper
INFO - 2018-01-22 00:46:04 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:46:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:46:04 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:46:04 --> Controller Class Initialized
INFO - 2018-01-22 00:46:04 --> Model Class Initialized
ERROR - 2018-01-22 08:46:04 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 08:46:04 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:46:04 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:46:04 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:46:04 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:46:04 --> Final output sent to browser
DEBUG - 2018-01-22 08:46:04 --> Total execution time: 0.0541
INFO - 2018-01-22 00:46:04 --> Config Class Initialized
INFO - 2018-01-22 00:46:04 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:46:04 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:46:04 --> Utf8 Class Initialized
INFO - 2018-01-22 00:46:04 --> URI Class Initialized
INFO - 2018-01-22 00:46:04 --> Router Class Initialized
INFO - 2018-01-22 00:46:04 --> Output Class Initialized
INFO - 2018-01-22 00:46:04 --> Security Class Initialized
DEBUG - 2018-01-22 00:46:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:46:04 --> Input Class Initialized
INFO - 2018-01-22 00:46:04 --> Language Class Initialized
INFO - 2018-01-22 00:46:04 --> Loader Class Initialized
INFO - 2018-01-22 00:46:04 --> Helper loaded: url_helper
INFO - 2018-01-22 00:46:04 --> Helper loaded: general_helper
INFO - 2018-01-22 00:46:05 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:46:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:46:05 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:46:05 --> Controller Class Initialized
INFO - 2018-01-22 00:46:05 --> Model Class Initialized
INFO - 2018-01-22 08:46:05 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:46:05 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:46:05 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:46:05 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:46:05 --> Final output sent to browser
DEBUG - 2018-01-22 08:46:05 --> Total execution time: 0.0781
INFO - 2018-01-22 00:46:10 --> Config Class Initialized
INFO - 2018-01-22 00:46:10 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:46:10 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:46:10 --> Utf8 Class Initialized
INFO - 2018-01-22 00:46:10 --> URI Class Initialized
INFO - 2018-01-22 00:46:10 --> Router Class Initialized
INFO - 2018-01-22 00:46:10 --> Output Class Initialized
INFO - 2018-01-22 00:46:10 --> Security Class Initialized
DEBUG - 2018-01-22 00:46:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:46:10 --> Input Class Initialized
INFO - 2018-01-22 00:46:10 --> Language Class Initialized
INFO - 2018-01-22 00:46:10 --> Loader Class Initialized
INFO - 2018-01-22 00:46:10 --> Helper loaded: url_helper
INFO - 2018-01-22 00:46:10 --> Helper loaded: general_helper
INFO - 2018-01-22 00:46:10 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:46:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:46:10 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:46:10 --> Controller Class Initialized
INFO - 2018-01-22 00:46:10 --> Model Class Initialized
INFO - 2018-01-22 08:46:10 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:46:10 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:46:10 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:46:10 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:46:10 --> Final output sent to browser
DEBUG - 2018-01-22 08:46:10 --> Total execution time: 0.0690
INFO - 2018-01-22 00:46:14 --> Config Class Initialized
INFO - 2018-01-22 00:46:14 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:46:14 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:46:14 --> Utf8 Class Initialized
INFO - 2018-01-22 00:46:14 --> URI Class Initialized
INFO - 2018-01-22 00:46:14 --> Router Class Initialized
INFO - 2018-01-22 00:46:14 --> Output Class Initialized
INFO - 2018-01-22 00:46:14 --> Security Class Initialized
DEBUG - 2018-01-22 00:46:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:46:14 --> Input Class Initialized
INFO - 2018-01-22 00:46:14 --> Language Class Initialized
INFO - 2018-01-22 00:46:14 --> Loader Class Initialized
INFO - 2018-01-22 00:46:14 --> Helper loaded: url_helper
INFO - 2018-01-22 00:46:14 --> Helper loaded: general_helper
INFO - 2018-01-22 00:46:14 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:46:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:46:14 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:46:14 --> Controller Class Initialized
INFO - 2018-01-22 00:46:14 --> Model Class Initialized
INFO - 2018-01-22 08:46:14 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:46:14 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:46:14 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:46:14 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:46:14 --> Final output sent to browser
DEBUG - 2018-01-22 08:46:14 --> Total execution time: 0.0762
INFO - 2018-01-22 00:46:29 --> Config Class Initialized
INFO - 2018-01-22 00:46:29 --> Hooks Class Initialized
DEBUG - 2018-01-22 00:46:29 --> UTF-8 Support Enabled
INFO - 2018-01-22 00:46:29 --> Utf8 Class Initialized
INFO - 2018-01-22 00:46:29 --> URI Class Initialized
INFO - 2018-01-22 00:46:29 --> Router Class Initialized
INFO - 2018-01-22 00:46:29 --> Output Class Initialized
INFO - 2018-01-22 00:46:29 --> Security Class Initialized
DEBUG - 2018-01-22 00:46:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 00:46:29 --> Input Class Initialized
INFO - 2018-01-22 00:46:29 --> Language Class Initialized
INFO - 2018-01-22 00:46:29 --> Loader Class Initialized
INFO - 2018-01-22 00:46:29 --> Helper loaded: url_helper
INFO - 2018-01-22 00:46:29 --> Helper loaded: general_helper
INFO - 2018-01-22 00:46:29 --> Database Driver Class Initialized
DEBUG - 2018-01-22 00:46:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 00:46:29 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 00:46:29 --> Controller Class Initialized
INFO - 2018-01-22 00:46:29 --> Model Class Initialized
INFO - 2018-01-22 08:47:06 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 08:47:06 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 08:48:39 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 08:48:39 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 08:48:39 --> Final output sent to browser
DEBUG - 2018-01-22 08:48:39 --> Total execution time: 130.0035
INFO - 2018-01-22 01:25:53 --> Config Class Initialized
INFO - 2018-01-22 01:25:53 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:25:53 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:25:53 --> Utf8 Class Initialized
INFO - 2018-01-22 01:25:53 --> URI Class Initialized
INFO - 2018-01-22 01:25:53 --> Router Class Initialized
INFO - 2018-01-22 01:25:53 --> Output Class Initialized
INFO - 2018-01-22 01:25:53 --> Security Class Initialized
DEBUG - 2018-01-22 01:25:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:25:53 --> Input Class Initialized
INFO - 2018-01-22 01:25:53 --> Language Class Initialized
INFO - 2018-01-22 01:25:53 --> Loader Class Initialized
INFO - 2018-01-22 01:25:53 --> Helper loaded: url_helper
INFO - 2018-01-22 01:25:53 --> Helper loaded: general_helper
INFO - 2018-01-22 01:25:53 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:25:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:25:53 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:25:53 --> Controller Class Initialized
INFO - 2018-01-22 01:25:53 --> Model Class Initialized
ERROR - 2018-01-22 09:25:53 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:25:53 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:25:53 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:25:53 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:25:53 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:25:53 --> Final output sent to browser
DEBUG - 2018-01-22 09:25:53 --> Total execution time: 0.1357
INFO - 2018-01-22 01:25:56 --> Config Class Initialized
INFO - 2018-01-22 01:25:56 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:25:56 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:25:56 --> Utf8 Class Initialized
INFO - 2018-01-22 01:25:56 --> URI Class Initialized
INFO - 2018-01-22 01:25:56 --> Router Class Initialized
INFO - 2018-01-22 01:25:56 --> Output Class Initialized
INFO - 2018-01-22 01:25:56 --> Security Class Initialized
DEBUG - 2018-01-22 01:25:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:25:56 --> Input Class Initialized
INFO - 2018-01-22 01:25:56 --> Language Class Initialized
INFO - 2018-01-22 01:25:56 --> Loader Class Initialized
INFO - 2018-01-22 01:25:56 --> Helper loaded: url_helper
INFO - 2018-01-22 01:25:56 --> Helper loaded: general_helper
INFO - 2018-01-22 01:25:56 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:25:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:25:56 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:25:56 --> Controller Class Initialized
INFO - 2018-01-22 01:25:56 --> Model Class Initialized
ERROR - 2018-01-22 09:25:56 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:25:56 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:25:56 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:25:56 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:25:56 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:25:56 --> Final output sent to browser
DEBUG - 2018-01-22 09:25:56 --> Total execution time: 0.0690
INFO - 2018-01-22 01:26:00 --> Config Class Initialized
INFO - 2018-01-22 01:26:00 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:26:00 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:26:00 --> Utf8 Class Initialized
INFO - 2018-01-22 01:26:00 --> URI Class Initialized
INFO - 2018-01-22 01:26:00 --> Router Class Initialized
INFO - 2018-01-22 01:26:00 --> Output Class Initialized
INFO - 2018-01-22 01:26:00 --> Security Class Initialized
DEBUG - 2018-01-22 01:26:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:26:00 --> Input Class Initialized
INFO - 2018-01-22 01:26:00 --> Language Class Initialized
INFO - 2018-01-22 01:26:00 --> Loader Class Initialized
INFO - 2018-01-22 01:26:00 --> Helper loaded: url_helper
INFO - 2018-01-22 01:26:00 --> Helper loaded: general_helper
INFO - 2018-01-22 01:26:01 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:26:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:26:01 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:26:01 --> Controller Class Initialized
INFO - 2018-01-22 01:26:01 --> Model Class Initialized
ERROR - 2018-01-22 09:26:01 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:26:01 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:26:01 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:26:01 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:26:01 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:26:01 --> Final output sent to browser
DEBUG - 2018-01-22 09:26:01 --> Total execution time: 0.0468
INFO - 2018-01-22 01:26:04 --> Config Class Initialized
INFO - 2018-01-22 01:26:04 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:26:04 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:26:04 --> Utf8 Class Initialized
INFO - 2018-01-22 01:26:04 --> URI Class Initialized
INFO - 2018-01-22 01:26:04 --> Router Class Initialized
INFO - 2018-01-22 01:26:04 --> Output Class Initialized
INFO - 2018-01-22 01:26:04 --> Security Class Initialized
DEBUG - 2018-01-22 01:26:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:26:04 --> Input Class Initialized
INFO - 2018-01-22 01:26:04 --> Language Class Initialized
INFO - 2018-01-22 01:26:04 --> Loader Class Initialized
INFO - 2018-01-22 01:26:04 --> Helper loaded: url_helper
INFO - 2018-01-22 01:26:04 --> Helper loaded: general_helper
INFO - 2018-01-22 01:26:04 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:26:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:26:04 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:26:04 --> Controller Class Initialized
INFO - 2018-01-22 01:26:04 --> Model Class Initialized
INFO - 2018-01-22 09:26:04 --> Final output sent to browser
DEBUG - 2018-01-22 09:26:04 --> Total execution time: 0.0584
INFO - 2018-01-22 01:26:08 --> Config Class Initialized
INFO - 2018-01-22 01:26:08 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:26:08 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:26:08 --> Utf8 Class Initialized
INFO - 2018-01-22 01:26:08 --> URI Class Initialized
INFO - 2018-01-22 01:26:08 --> Router Class Initialized
INFO - 2018-01-22 01:26:08 --> Output Class Initialized
INFO - 2018-01-22 01:26:08 --> Security Class Initialized
DEBUG - 2018-01-22 01:26:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:26:08 --> Input Class Initialized
INFO - 2018-01-22 01:26:08 --> Language Class Initialized
INFO - 2018-01-22 01:26:08 --> Loader Class Initialized
INFO - 2018-01-22 01:26:08 --> Helper loaded: url_helper
INFO - 2018-01-22 01:26:08 --> Helper loaded: general_helper
INFO - 2018-01-22 01:26:08 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:26:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:26:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:26:08 --> Controller Class Initialized
INFO - 2018-01-22 01:26:08 --> Model Class Initialized
INFO - 2018-01-22 09:26:08 --> Final output sent to browser
DEBUG - 2018-01-22 09:26:08 --> Total execution time: 0.0634
INFO - 2018-01-22 01:26:11 --> Config Class Initialized
INFO - 2018-01-22 01:26:11 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:26:11 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:26:11 --> Utf8 Class Initialized
INFO - 2018-01-22 01:26:11 --> URI Class Initialized
INFO - 2018-01-22 01:26:11 --> Router Class Initialized
INFO - 2018-01-22 01:26:11 --> Output Class Initialized
INFO - 2018-01-22 01:26:11 --> Security Class Initialized
DEBUG - 2018-01-22 01:26:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:26:11 --> Input Class Initialized
INFO - 2018-01-22 01:26:11 --> Language Class Initialized
INFO - 2018-01-22 01:26:11 --> Loader Class Initialized
INFO - 2018-01-22 01:26:11 --> Helper loaded: url_helper
INFO - 2018-01-22 01:26:11 --> Helper loaded: general_helper
INFO - 2018-01-22 01:26:11 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:26:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:26:11 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:26:11 --> Controller Class Initialized
INFO - 2018-01-22 01:26:11 --> Model Class Initialized
INFO - 2018-01-22 09:26:11 --> Final output sent to browser
DEBUG - 2018-01-22 09:26:11 --> Total execution time: 0.0552
INFO - 2018-01-22 01:26:14 --> Config Class Initialized
INFO - 2018-01-22 01:26:14 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:26:14 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:26:14 --> Utf8 Class Initialized
INFO - 2018-01-22 01:26:14 --> URI Class Initialized
INFO - 2018-01-22 01:26:14 --> Router Class Initialized
INFO - 2018-01-22 01:26:14 --> Output Class Initialized
INFO - 2018-01-22 01:26:14 --> Security Class Initialized
DEBUG - 2018-01-22 01:26:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:26:14 --> Input Class Initialized
INFO - 2018-01-22 01:26:14 --> Language Class Initialized
INFO - 2018-01-22 01:26:14 --> Loader Class Initialized
INFO - 2018-01-22 01:26:14 --> Helper loaded: url_helper
INFO - 2018-01-22 01:26:14 --> Helper loaded: general_helper
INFO - 2018-01-22 01:26:14 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:26:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:26:14 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:26:14 --> Controller Class Initialized
INFO - 2018-01-22 01:26:14 --> Model Class Initialized
INFO - 2018-01-22 09:26:14 --> Final output sent to browser
DEBUG - 2018-01-22 09:26:14 --> Total execution time: 0.0606
INFO - 2018-01-22 01:26:28 --> Config Class Initialized
INFO - 2018-01-22 01:26:28 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:26:28 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:26:28 --> Utf8 Class Initialized
INFO - 2018-01-22 01:26:28 --> URI Class Initialized
INFO - 2018-01-22 01:26:29 --> Router Class Initialized
INFO - 2018-01-22 01:26:29 --> Output Class Initialized
INFO - 2018-01-22 01:26:29 --> Security Class Initialized
DEBUG - 2018-01-22 01:26:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:26:29 --> Input Class Initialized
INFO - 2018-01-22 01:26:29 --> Language Class Initialized
INFO - 2018-01-22 01:26:29 --> Loader Class Initialized
INFO - 2018-01-22 01:26:29 --> Helper loaded: url_helper
INFO - 2018-01-22 01:26:29 --> Helper loaded: general_helper
INFO - 2018-01-22 01:26:29 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:26:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:26:29 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:26:29 --> Controller Class Initialized
INFO - 2018-01-22 01:26:29 --> Model Class Initialized
INFO - 2018-01-22 09:27:05 --> Final output sent to browser
DEBUG - 2018-01-22 09:27:05 --> Total execution time: 36.7738
INFO - 2018-01-22 01:31:45 --> Config Class Initialized
INFO - 2018-01-22 01:31:46 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:31:46 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:31:46 --> Utf8 Class Initialized
INFO - 2018-01-22 01:31:46 --> URI Class Initialized
INFO - 2018-01-22 01:31:46 --> Router Class Initialized
INFO - 2018-01-22 01:31:46 --> Output Class Initialized
INFO - 2018-01-22 01:31:46 --> Security Class Initialized
DEBUG - 2018-01-22 01:31:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:31:46 --> Input Class Initialized
INFO - 2018-01-22 01:31:46 --> Language Class Initialized
INFO - 2018-01-22 01:31:46 --> Loader Class Initialized
INFO - 2018-01-22 01:31:46 --> Helper loaded: url_helper
INFO - 2018-01-22 01:31:46 --> Helper loaded: general_helper
INFO - 2018-01-22 01:31:46 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:31:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:31:46 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:31:46 --> Controller Class Initialized
INFO - 2018-01-22 01:31:46 --> Model Class Initialized
ERROR - 2018-01-22 09:31:46 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:31:46 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:31:46 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:31:46 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:31:46 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:31:46 --> Final output sent to browser
DEBUG - 2018-01-22 09:31:46 --> Total execution time: 0.0923
INFO - 2018-01-22 01:31:54 --> Config Class Initialized
INFO - 2018-01-22 01:31:54 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:31:54 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:31:54 --> Utf8 Class Initialized
INFO - 2018-01-22 01:31:54 --> URI Class Initialized
INFO - 2018-01-22 01:31:54 --> Router Class Initialized
INFO - 2018-01-22 01:31:54 --> Output Class Initialized
INFO - 2018-01-22 01:31:54 --> Security Class Initialized
DEBUG - 2018-01-22 01:31:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:31:54 --> Input Class Initialized
INFO - 2018-01-22 01:31:54 --> Language Class Initialized
INFO - 2018-01-22 01:31:54 --> Loader Class Initialized
INFO - 2018-01-22 01:31:54 --> Helper loaded: url_helper
INFO - 2018-01-22 01:31:54 --> Helper loaded: general_helper
INFO - 2018-01-22 01:31:54 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:31:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:31:54 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:31:54 --> Controller Class Initialized
INFO - 2018-01-22 01:31:54 --> Model Class Initialized
INFO - 2018-01-22 09:31:54 --> Final output sent to browser
DEBUG - 2018-01-22 09:31:54 --> Total execution time: 0.0956
INFO - 2018-01-22 01:31:57 --> Config Class Initialized
INFO - 2018-01-22 01:31:57 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:31:57 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:31:57 --> Utf8 Class Initialized
INFO - 2018-01-22 01:31:57 --> URI Class Initialized
INFO - 2018-01-22 01:31:57 --> Router Class Initialized
INFO - 2018-01-22 01:31:57 --> Output Class Initialized
INFO - 2018-01-22 01:31:57 --> Security Class Initialized
DEBUG - 2018-01-22 01:31:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:31:57 --> Input Class Initialized
INFO - 2018-01-22 01:31:57 --> Language Class Initialized
INFO - 2018-01-22 01:31:57 --> Loader Class Initialized
INFO - 2018-01-22 01:31:57 --> Helper loaded: url_helper
INFO - 2018-01-22 01:31:57 --> Helper loaded: general_helper
INFO - 2018-01-22 01:31:57 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:31:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:31:57 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:31:57 --> Controller Class Initialized
INFO - 2018-01-22 01:31:57 --> Model Class Initialized
INFO - 2018-01-22 09:31:57 --> Final output sent to browser
DEBUG - 2018-01-22 09:31:57 --> Total execution time: 0.0609
INFO - 2018-01-22 01:32:00 --> Config Class Initialized
INFO - 2018-01-22 01:32:00 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:32:00 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:32:00 --> Utf8 Class Initialized
INFO - 2018-01-22 01:32:00 --> URI Class Initialized
INFO - 2018-01-22 01:32:00 --> Router Class Initialized
INFO - 2018-01-22 01:32:00 --> Output Class Initialized
INFO - 2018-01-22 01:32:00 --> Security Class Initialized
DEBUG - 2018-01-22 01:32:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:32:00 --> Input Class Initialized
INFO - 2018-01-22 01:32:00 --> Language Class Initialized
INFO - 2018-01-22 01:32:00 --> Loader Class Initialized
INFO - 2018-01-22 01:32:00 --> Helper loaded: url_helper
INFO - 2018-01-22 01:32:00 --> Helper loaded: general_helper
INFO - 2018-01-22 01:32:00 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:32:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:32:00 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:32:00 --> Controller Class Initialized
INFO - 2018-01-22 01:32:00 --> Model Class Initialized
INFO - 2018-01-22 09:32:00 --> Final output sent to browser
DEBUG - 2018-01-22 09:32:00 --> Total execution time: 0.0548
INFO - 2018-01-22 01:32:02 --> Config Class Initialized
INFO - 2018-01-22 01:32:02 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:32:02 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:32:02 --> Utf8 Class Initialized
INFO - 2018-01-22 01:32:02 --> URI Class Initialized
INFO - 2018-01-22 01:32:02 --> Router Class Initialized
INFO - 2018-01-22 01:32:02 --> Output Class Initialized
INFO - 2018-01-22 01:32:02 --> Security Class Initialized
DEBUG - 2018-01-22 01:32:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:32:02 --> Input Class Initialized
INFO - 2018-01-22 01:32:02 --> Language Class Initialized
INFO - 2018-01-22 01:32:02 --> Loader Class Initialized
INFO - 2018-01-22 01:32:02 --> Helper loaded: url_helper
INFO - 2018-01-22 01:32:02 --> Helper loaded: general_helper
INFO - 2018-01-22 01:32:02 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:32:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:32:02 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:32:02 --> Controller Class Initialized
INFO - 2018-01-22 01:32:02 --> Model Class Initialized
INFO - 2018-01-22 09:32:02 --> Final output sent to browser
DEBUG - 2018-01-22 09:32:02 --> Total execution time: 0.0545
INFO - 2018-01-22 01:32:04 --> Config Class Initialized
INFO - 2018-01-22 01:32:04 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:32:04 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:32:04 --> Utf8 Class Initialized
INFO - 2018-01-22 01:32:04 --> URI Class Initialized
INFO - 2018-01-22 01:32:04 --> Router Class Initialized
INFO - 2018-01-22 01:32:04 --> Output Class Initialized
INFO - 2018-01-22 01:32:04 --> Security Class Initialized
DEBUG - 2018-01-22 01:32:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:32:04 --> Input Class Initialized
INFO - 2018-01-22 01:32:04 --> Language Class Initialized
INFO - 2018-01-22 01:32:04 --> Loader Class Initialized
INFO - 2018-01-22 01:32:04 --> Helper loaded: url_helper
INFO - 2018-01-22 01:32:04 --> Helper loaded: general_helper
INFO - 2018-01-22 01:32:04 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:32:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:32:04 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:32:04 --> Controller Class Initialized
INFO - 2018-01-22 01:32:04 --> Model Class Initialized
INFO - 2018-01-22 09:32:04 --> Final output sent to browser
DEBUG - 2018-01-22 09:32:04 --> Total execution time: 0.0484
INFO - 2018-01-22 01:32:08 --> Config Class Initialized
INFO - 2018-01-22 01:32:08 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:32:08 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:32:08 --> Utf8 Class Initialized
INFO - 2018-01-22 01:32:08 --> URI Class Initialized
INFO - 2018-01-22 01:32:08 --> Router Class Initialized
INFO - 2018-01-22 01:32:08 --> Output Class Initialized
INFO - 2018-01-22 01:32:08 --> Security Class Initialized
DEBUG - 2018-01-22 01:32:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:32:08 --> Input Class Initialized
INFO - 2018-01-22 01:32:08 --> Language Class Initialized
INFO - 2018-01-22 01:32:08 --> Loader Class Initialized
INFO - 2018-01-22 01:32:08 --> Helper loaded: url_helper
INFO - 2018-01-22 01:32:08 --> Helper loaded: general_helper
INFO - 2018-01-22 01:32:08 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:32:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:32:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:32:08 --> Controller Class Initialized
INFO - 2018-01-22 01:32:08 --> Model Class Initialized
INFO - 2018-01-22 09:32:08 --> Final output sent to browser
DEBUG - 2018-01-22 09:32:08 --> Total execution time: 0.0504
INFO - 2018-01-22 01:32:10 --> Config Class Initialized
INFO - 2018-01-22 01:32:10 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:32:10 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:32:10 --> Utf8 Class Initialized
INFO - 2018-01-22 01:32:10 --> URI Class Initialized
INFO - 2018-01-22 01:32:10 --> Router Class Initialized
INFO - 2018-01-22 01:32:10 --> Output Class Initialized
INFO - 2018-01-22 01:32:10 --> Security Class Initialized
DEBUG - 2018-01-22 01:32:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:32:10 --> Input Class Initialized
INFO - 2018-01-22 01:32:10 --> Language Class Initialized
INFO - 2018-01-22 01:32:10 --> Loader Class Initialized
INFO - 2018-01-22 01:32:10 --> Helper loaded: url_helper
INFO - 2018-01-22 01:32:10 --> Helper loaded: general_helper
INFO - 2018-01-22 01:32:10 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:32:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:32:10 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:32:10 --> Controller Class Initialized
INFO - 2018-01-22 01:32:10 --> Model Class Initialized
INFO - 2018-01-22 09:32:10 --> Final output sent to browser
DEBUG - 2018-01-22 09:32:10 --> Total execution time: 0.0777
INFO - 2018-01-22 01:32:13 --> Config Class Initialized
INFO - 2018-01-22 01:32:13 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:32:13 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:32:13 --> Utf8 Class Initialized
INFO - 2018-01-22 01:32:13 --> URI Class Initialized
INFO - 2018-01-22 01:32:13 --> Router Class Initialized
INFO - 2018-01-22 01:32:13 --> Output Class Initialized
INFO - 2018-01-22 01:32:13 --> Security Class Initialized
DEBUG - 2018-01-22 01:32:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:32:13 --> Input Class Initialized
INFO - 2018-01-22 01:32:13 --> Language Class Initialized
INFO - 2018-01-22 01:32:13 --> Loader Class Initialized
INFO - 2018-01-22 01:32:13 --> Helper loaded: url_helper
INFO - 2018-01-22 01:32:13 --> Helper loaded: general_helper
INFO - 2018-01-22 01:32:13 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:32:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:32:13 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:32:13 --> Controller Class Initialized
INFO - 2018-01-22 01:32:13 --> Model Class Initialized
INFO - 2018-01-22 09:32:13 --> Final output sent to browser
DEBUG - 2018-01-22 09:32:13 --> Total execution time: 0.0542
INFO - 2018-01-22 01:32:54 --> Config Class Initialized
INFO - 2018-01-22 01:32:54 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:32:54 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:32:54 --> Utf8 Class Initialized
INFO - 2018-01-22 01:32:54 --> URI Class Initialized
INFO - 2018-01-22 01:32:54 --> Router Class Initialized
INFO - 2018-01-22 01:32:54 --> Output Class Initialized
INFO - 2018-01-22 01:32:54 --> Security Class Initialized
DEBUG - 2018-01-22 01:32:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:32:54 --> Input Class Initialized
INFO - 2018-01-22 01:32:54 --> Language Class Initialized
INFO - 2018-01-22 01:32:54 --> Loader Class Initialized
INFO - 2018-01-22 01:32:54 --> Helper loaded: url_helper
INFO - 2018-01-22 01:32:54 --> Helper loaded: general_helper
INFO - 2018-01-22 01:32:54 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:32:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:32:54 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:32:54 --> Controller Class Initialized
INFO - 2018-01-22 01:32:54 --> Model Class Initialized
INFO - 2018-01-22 09:32:54 --> Final output sent to browser
DEBUG - 2018-01-22 09:32:54 --> Total execution time: 0.0552
INFO - 2018-01-22 01:32:56 --> Config Class Initialized
INFO - 2018-01-22 01:32:56 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:32:56 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:32:56 --> Utf8 Class Initialized
INFO - 2018-01-22 01:32:56 --> URI Class Initialized
INFO - 2018-01-22 01:32:56 --> Router Class Initialized
INFO - 2018-01-22 01:32:56 --> Output Class Initialized
INFO - 2018-01-22 01:32:56 --> Security Class Initialized
DEBUG - 2018-01-22 01:32:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:32:56 --> Input Class Initialized
INFO - 2018-01-22 01:32:56 --> Language Class Initialized
INFO - 2018-01-22 01:32:56 --> Loader Class Initialized
INFO - 2018-01-22 01:32:56 --> Helper loaded: url_helper
INFO - 2018-01-22 01:32:56 --> Helper loaded: general_helper
INFO - 2018-01-22 01:32:56 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:32:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:32:56 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:32:56 --> Controller Class Initialized
INFO - 2018-01-22 01:32:56 --> Model Class Initialized
INFO - 2018-01-22 09:32:56 --> Final output sent to browser
DEBUG - 2018-01-22 09:32:56 --> Total execution time: 0.0759
INFO - 2018-01-22 01:32:58 --> Config Class Initialized
INFO - 2018-01-22 01:32:58 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:32:58 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:32:58 --> Utf8 Class Initialized
INFO - 2018-01-22 01:32:59 --> URI Class Initialized
INFO - 2018-01-22 01:32:59 --> Router Class Initialized
INFO - 2018-01-22 01:32:59 --> Output Class Initialized
INFO - 2018-01-22 01:32:59 --> Security Class Initialized
DEBUG - 2018-01-22 01:32:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:32:59 --> Input Class Initialized
INFO - 2018-01-22 01:32:59 --> Language Class Initialized
INFO - 2018-01-22 01:32:59 --> Loader Class Initialized
INFO - 2018-01-22 01:32:59 --> Helper loaded: url_helper
INFO - 2018-01-22 01:32:59 --> Helper loaded: general_helper
INFO - 2018-01-22 01:32:59 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:32:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:32:59 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:32:59 --> Controller Class Initialized
INFO - 2018-01-22 01:32:59 --> Model Class Initialized
INFO - 2018-01-22 09:32:59 --> Final output sent to browser
DEBUG - 2018-01-22 09:32:59 --> Total execution time: 0.0504
INFO - 2018-01-22 01:33:01 --> Config Class Initialized
INFO - 2018-01-22 01:33:01 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:33:01 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:33:01 --> Utf8 Class Initialized
INFO - 2018-01-22 01:33:01 --> URI Class Initialized
INFO - 2018-01-22 01:33:01 --> Router Class Initialized
INFO - 2018-01-22 01:33:01 --> Output Class Initialized
INFO - 2018-01-22 01:33:01 --> Security Class Initialized
DEBUG - 2018-01-22 01:33:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:33:01 --> Input Class Initialized
INFO - 2018-01-22 01:33:01 --> Language Class Initialized
INFO - 2018-01-22 01:33:01 --> Loader Class Initialized
INFO - 2018-01-22 01:33:01 --> Helper loaded: url_helper
INFO - 2018-01-22 01:33:01 --> Helper loaded: general_helper
INFO - 2018-01-22 01:33:01 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:33:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:33:01 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:33:01 --> Controller Class Initialized
INFO - 2018-01-22 01:33:01 --> Model Class Initialized
INFO - 2018-01-22 09:33:01 --> Final output sent to browser
DEBUG - 2018-01-22 09:33:01 --> Total execution time: 0.0513
INFO - 2018-01-22 01:34:21 --> Config Class Initialized
INFO - 2018-01-22 01:34:21 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:34:21 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:34:21 --> Utf8 Class Initialized
INFO - 2018-01-22 01:34:21 --> URI Class Initialized
INFO - 2018-01-22 01:34:21 --> Router Class Initialized
INFO - 2018-01-22 01:34:21 --> Output Class Initialized
INFO - 2018-01-22 01:34:21 --> Security Class Initialized
DEBUG - 2018-01-22 01:34:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:34:21 --> Input Class Initialized
INFO - 2018-01-22 01:34:21 --> Language Class Initialized
INFO - 2018-01-22 01:34:21 --> Loader Class Initialized
INFO - 2018-01-22 01:34:21 --> Helper loaded: url_helper
INFO - 2018-01-22 01:34:21 --> Helper loaded: general_helper
INFO - 2018-01-22 01:34:21 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:34:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:34:21 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:34:21 --> Controller Class Initialized
INFO - 2018-01-22 01:34:21 --> Model Class Initialized
ERROR - 2018-01-22 09:34:21 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:34:21 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:34:21 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:34:21 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:34:21 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:34:21 --> Final output sent to browser
DEBUG - 2018-01-22 09:34:21 --> Total execution time: 0.0493
INFO - 2018-01-22 01:34:24 --> Config Class Initialized
INFO - 2018-01-22 01:34:24 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:34:24 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:34:24 --> Utf8 Class Initialized
INFO - 2018-01-22 01:34:24 --> URI Class Initialized
INFO - 2018-01-22 01:34:24 --> Router Class Initialized
INFO - 2018-01-22 01:34:24 --> Output Class Initialized
INFO - 2018-01-22 01:34:24 --> Security Class Initialized
DEBUG - 2018-01-22 01:34:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:34:24 --> Input Class Initialized
INFO - 2018-01-22 01:34:24 --> Language Class Initialized
INFO - 2018-01-22 01:34:24 --> Loader Class Initialized
INFO - 2018-01-22 01:34:24 --> Helper loaded: url_helper
INFO - 2018-01-22 01:34:24 --> Helper loaded: general_helper
INFO - 2018-01-22 01:34:24 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:34:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:34:24 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:34:24 --> Controller Class Initialized
INFO - 2018-01-22 01:34:24 --> Model Class Initialized
ERROR - 2018-01-22 09:34:24 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:34:24 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:34:24 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:34:24 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:34:24 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:34:24 --> Final output sent to browser
DEBUG - 2018-01-22 09:34:24 --> Total execution time: 0.1170
INFO - 2018-01-22 01:34:27 --> Config Class Initialized
INFO - 2018-01-22 01:34:27 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:34:27 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:34:27 --> Utf8 Class Initialized
INFO - 2018-01-22 01:34:27 --> URI Class Initialized
INFO - 2018-01-22 01:34:27 --> Router Class Initialized
INFO - 2018-01-22 01:34:27 --> Output Class Initialized
INFO - 2018-01-22 01:34:27 --> Security Class Initialized
DEBUG - 2018-01-22 01:34:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:34:27 --> Input Class Initialized
INFO - 2018-01-22 01:34:27 --> Language Class Initialized
INFO - 2018-01-22 01:34:27 --> Loader Class Initialized
INFO - 2018-01-22 01:34:27 --> Helper loaded: url_helper
INFO - 2018-01-22 01:34:27 --> Helper loaded: general_helper
INFO - 2018-01-22 01:34:27 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:34:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:34:27 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:34:27 --> Controller Class Initialized
INFO - 2018-01-22 01:34:27 --> Model Class Initialized
INFO - 2018-01-22 09:34:27 --> Final output sent to browser
DEBUG - 2018-01-22 09:34:27 --> Total execution time: 0.0840
INFO - 2018-01-22 01:34:29 --> Config Class Initialized
INFO - 2018-01-22 01:34:29 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:34:29 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:34:29 --> Utf8 Class Initialized
INFO - 2018-01-22 01:34:29 --> URI Class Initialized
INFO - 2018-01-22 01:34:29 --> Router Class Initialized
INFO - 2018-01-22 01:34:29 --> Output Class Initialized
INFO - 2018-01-22 01:34:29 --> Security Class Initialized
DEBUG - 2018-01-22 01:34:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:34:30 --> Input Class Initialized
INFO - 2018-01-22 01:34:30 --> Language Class Initialized
INFO - 2018-01-22 01:34:30 --> Loader Class Initialized
INFO - 2018-01-22 01:34:30 --> Helper loaded: url_helper
INFO - 2018-01-22 01:34:30 --> Helper loaded: general_helper
INFO - 2018-01-22 01:34:30 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:34:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:34:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:34:30 --> Controller Class Initialized
INFO - 2018-01-22 01:34:30 --> Model Class Initialized
INFO - 2018-01-22 09:34:30 --> Final output sent to browser
DEBUG - 2018-01-22 09:34:30 --> Total execution time: 0.0691
INFO - 2018-01-22 01:34:36 --> Config Class Initialized
INFO - 2018-01-22 01:34:36 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:34:36 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:34:36 --> Utf8 Class Initialized
INFO - 2018-01-22 01:34:36 --> URI Class Initialized
INFO - 2018-01-22 01:34:36 --> Router Class Initialized
INFO - 2018-01-22 01:34:36 --> Output Class Initialized
INFO - 2018-01-22 01:34:36 --> Security Class Initialized
DEBUG - 2018-01-22 01:34:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:34:36 --> Input Class Initialized
INFO - 2018-01-22 01:34:36 --> Language Class Initialized
INFO - 2018-01-22 01:34:36 --> Loader Class Initialized
INFO - 2018-01-22 01:34:36 --> Helper loaded: url_helper
INFO - 2018-01-22 01:34:36 --> Helper loaded: general_helper
INFO - 2018-01-22 01:34:36 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:34:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:34:36 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:34:36 --> Controller Class Initialized
INFO - 2018-01-22 01:34:36 --> Model Class Initialized
INFO - 2018-01-22 09:34:36 --> Final output sent to browser
DEBUG - 2018-01-22 09:34:36 --> Total execution time: 0.0549
INFO - 2018-01-22 01:39:27 --> Config Class Initialized
INFO - 2018-01-22 01:39:27 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:39:27 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:39:27 --> Utf8 Class Initialized
INFO - 2018-01-22 01:39:27 --> URI Class Initialized
INFO - 2018-01-22 01:39:27 --> Router Class Initialized
INFO - 2018-01-22 01:39:27 --> Output Class Initialized
INFO - 2018-01-22 01:39:27 --> Security Class Initialized
DEBUG - 2018-01-22 01:39:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:39:27 --> Input Class Initialized
INFO - 2018-01-22 01:39:27 --> Language Class Initialized
INFO - 2018-01-22 01:39:27 --> Loader Class Initialized
INFO - 2018-01-22 01:39:27 --> Helper loaded: url_helper
INFO - 2018-01-22 01:39:27 --> Helper loaded: general_helper
INFO - 2018-01-22 01:39:27 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:39:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:39:27 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:39:27 --> Controller Class Initialized
INFO - 2018-01-22 01:39:27 --> Model Class Initialized
ERROR - 2018-01-22 09:39:27 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:39:27 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:39:27 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:39:27 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:39:27 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:39:27 --> Final output sent to browser
DEBUG - 2018-01-22 09:39:27 --> Total execution time: 0.0986
INFO - 2018-01-22 01:39:32 --> Config Class Initialized
INFO - 2018-01-22 01:39:32 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:39:32 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:39:32 --> Utf8 Class Initialized
INFO - 2018-01-22 01:39:32 --> URI Class Initialized
INFO - 2018-01-22 01:39:32 --> Router Class Initialized
INFO - 2018-01-22 01:39:32 --> Output Class Initialized
INFO - 2018-01-22 01:39:32 --> Security Class Initialized
DEBUG - 2018-01-22 01:39:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:39:32 --> Input Class Initialized
INFO - 2018-01-22 01:39:32 --> Language Class Initialized
INFO - 2018-01-22 01:39:32 --> Loader Class Initialized
INFO - 2018-01-22 01:39:32 --> Helper loaded: url_helper
INFO - 2018-01-22 01:39:32 --> Helper loaded: general_helper
INFO - 2018-01-22 01:39:32 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:39:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:39:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:39:33 --> Controller Class Initialized
INFO - 2018-01-22 01:39:33 --> Model Class Initialized
INFO - 2018-01-22 09:39:33 --> Final output sent to browser
DEBUG - 2018-01-22 09:39:33 --> Total execution time: 0.0869
INFO - 2018-01-22 01:39:39 --> Config Class Initialized
INFO - 2018-01-22 01:39:39 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:39:39 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:39:39 --> Utf8 Class Initialized
INFO - 2018-01-22 01:39:39 --> URI Class Initialized
INFO - 2018-01-22 01:39:39 --> Router Class Initialized
INFO - 2018-01-22 01:39:39 --> Output Class Initialized
INFO - 2018-01-22 01:39:39 --> Security Class Initialized
DEBUG - 2018-01-22 01:39:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:39:39 --> Input Class Initialized
INFO - 2018-01-22 01:39:39 --> Language Class Initialized
INFO - 2018-01-22 01:39:39 --> Loader Class Initialized
INFO - 2018-01-22 01:39:39 --> Helper loaded: url_helper
INFO - 2018-01-22 01:39:39 --> Helper loaded: general_helper
INFO - 2018-01-22 01:39:39 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:39:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:39:39 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:39:39 --> Controller Class Initialized
INFO - 2018-01-22 01:39:39 --> Model Class Initialized
INFO - 2018-01-22 09:39:39 --> Final output sent to browser
DEBUG - 2018-01-22 09:39:39 --> Total execution time: 0.0799
INFO - 2018-01-22 01:39:46 --> Config Class Initialized
INFO - 2018-01-22 01:39:46 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:39:46 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:39:46 --> Utf8 Class Initialized
INFO - 2018-01-22 01:39:46 --> URI Class Initialized
INFO - 2018-01-22 01:39:46 --> Router Class Initialized
INFO - 2018-01-22 01:39:46 --> Output Class Initialized
INFO - 2018-01-22 01:39:46 --> Security Class Initialized
DEBUG - 2018-01-22 01:39:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:39:46 --> Input Class Initialized
INFO - 2018-01-22 01:39:46 --> Language Class Initialized
INFO - 2018-01-22 01:39:46 --> Loader Class Initialized
INFO - 2018-01-22 01:39:46 --> Helper loaded: url_helper
INFO - 2018-01-22 01:39:46 --> Helper loaded: general_helper
INFO - 2018-01-22 01:39:46 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:39:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:39:46 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:39:46 --> Controller Class Initialized
INFO - 2018-01-22 01:39:46 --> Model Class Initialized
INFO - 2018-01-22 09:39:46 --> Final output sent to browser
DEBUG - 2018-01-22 09:39:46 --> Total execution time: 0.0594
INFO - 2018-01-22 01:40:08 --> Config Class Initialized
INFO - 2018-01-22 01:40:08 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:40:08 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:40:08 --> Utf8 Class Initialized
INFO - 2018-01-22 01:40:08 --> URI Class Initialized
INFO - 2018-01-22 01:40:08 --> Router Class Initialized
INFO - 2018-01-22 01:40:08 --> Output Class Initialized
INFO - 2018-01-22 01:40:08 --> Security Class Initialized
DEBUG - 2018-01-22 01:40:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:40:08 --> Input Class Initialized
INFO - 2018-01-22 01:40:08 --> Language Class Initialized
INFO - 2018-01-22 01:40:08 --> Loader Class Initialized
INFO - 2018-01-22 01:40:08 --> Helper loaded: url_helper
INFO - 2018-01-22 01:40:08 --> Helper loaded: general_helper
INFO - 2018-01-22 01:40:08 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:40:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:40:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:40:08 --> Controller Class Initialized
INFO - 2018-01-22 01:40:08 --> Model Class Initialized
INFO - 2018-01-22 09:40:09 --> Final output sent to browser
DEBUG - 2018-01-22 09:40:09 --> Total execution time: 0.1132
INFO - 2018-01-22 01:40:13 --> Config Class Initialized
INFO - 2018-01-22 01:40:13 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:40:13 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:40:13 --> Utf8 Class Initialized
INFO - 2018-01-22 01:40:13 --> URI Class Initialized
INFO - 2018-01-22 01:40:13 --> Router Class Initialized
INFO - 2018-01-22 01:40:13 --> Output Class Initialized
INFO - 2018-01-22 01:40:13 --> Security Class Initialized
DEBUG - 2018-01-22 01:40:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:40:13 --> Input Class Initialized
INFO - 2018-01-22 01:40:13 --> Language Class Initialized
INFO - 2018-01-22 01:40:13 --> Loader Class Initialized
INFO - 2018-01-22 01:40:13 --> Helper loaded: url_helper
INFO - 2018-01-22 01:40:13 --> Helper loaded: general_helper
INFO - 2018-01-22 01:40:13 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:40:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:40:13 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:40:13 --> Controller Class Initialized
INFO - 2018-01-22 01:40:13 --> Model Class Initialized
INFO - 2018-01-22 09:40:13 --> Final output sent to browser
DEBUG - 2018-01-22 09:40:13 --> Total execution time: 0.0852
INFO - 2018-01-22 01:40:19 --> Config Class Initialized
INFO - 2018-01-22 01:40:19 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:40:19 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:40:19 --> Utf8 Class Initialized
INFO - 2018-01-22 01:40:19 --> URI Class Initialized
INFO - 2018-01-22 01:40:19 --> Router Class Initialized
INFO - 2018-01-22 01:40:19 --> Output Class Initialized
INFO - 2018-01-22 01:40:19 --> Security Class Initialized
DEBUG - 2018-01-22 01:40:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:40:19 --> Input Class Initialized
INFO - 2018-01-22 01:40:19 --> Language Class Initialized
INFO - 2018-01-22 01:40:19 --> Loader Class Initialized
INFO - 2018-01-22 01:40:19 --> Helper loaded: url_helper
INFO - 2018-01-22 01:40:19 --> Helper loaded: general_helper
INFO - 2018-01-22 01:40:19 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:40:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:40:19 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:40:19 --> Controller Class Initialized
INFO - 2018-01-22 01:40:19 --> Model Class Initialized
INFO - 2018-01-22 09:40:19 --> Final output sent to browser
DEBUG - 2018-01-22 09:40:19 --> Total execution time: 0.0681
INFO - 2018-01-22 01:40:21 --> Config Class Initialized
INFO - 2018-01-22 01:40:21 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:40:21 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:40:21 --> Utf8 Class Initialized
INFO - 2018-01-22 01:40:21 --> URI Class Initialized
INFO - 2018-01-22 01:40:21 --> Router Class Initialized
INFO - 2018-01-22 01:40:21 --> Output Class Initialized
INFO - 2018-01-22 01:40:21 --> Security Class Initialized
DEBUG - 2018-01-22 01:40:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:40:21 --> Input Class Initialized
INFO - 2018-01-22 01:40:21 --> Language Class Initialized
INFO - 2018-01-22 01:40:21 --> Loader Class Initialized
INFO - 2018-01-22 01:40:21 --> Helper loaded: url_helper
INFO - 2018-01-22 01:40:21 --> Helper loaded: general_helper
INFO - 2018-01-22 01:40:21 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:40:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:40:21 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:40:21 --> Controller Class Initialized
INFO - 2018-01-22 01:40:21 --> Model Class Initialized
INFO - 2018-01-22 09:40:21 --> Final output sent to browser
DEBUG - 2018-01-22 09:40:21 --> Total execution time: 0.0742
INFO - 2018-01-22 01:40:23 --> Config Class Initialized
INFO - 2018-01-22 01:40:23 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:40:23 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:40:23 --> Utf8 Class Initialized
INFO - 2018-01-22 01:40:23 --> URI Class Initialized
INFO - 2018-01-22 01:40:23 --> Router Class Initialized
INFO - 2018-01-22 01:40:23 --> Output Class Initialized
INFO - 2018-01-22 01:40:23 --> Security Class Initialized
DEBUG - 2018-01-22 01:40:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:40:23 --> Input Class Initialized
INFO - 2018-01-22 01:40:23 --> Language Class Initialized
INFO - 2018-01-22 01:40:23 --> Loader Class Initialized
INFO - 2018-01-22 01:40:23 --> Helper loaded: url_helper
INFO - 2018-01-22 01:40:23 --> Helper loaded: general_helper
INFO - 2018-01-22 01:40:23 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:40:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:40:23 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:40:23 --> Controller Class Initialized
INFO - 2018-01-22 01:40:23 --> Model Class Initialized
INFO - 2018-01-22 09:40:23 --> Final output sent to browser
DEBUG - 2018-01-22 09:40:23 --> Total execution time: 0.1286
INFO - 2018-01-22 01:40:25 --> Config Class Initialized
INFO - 2018-01-22 01:40:25 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:40:25 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:40:25 --> Utf8 Class Initialized
INFO - 2018-01-22 01:40:25 --> URI Class Initialized
INFO - 2018-01-22 01:40:25 --> Router Class Initialized
INFO - 2018-01-22 01:40:25 --> Output Class Initialized
INFO - 2018-01-22 01:40:25 --> Security Class Initialized
DEBUG - 2018-01-22 01:40:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:40:25 --> Input Class Initialized
INFO - 2018-01-22 01:40:25 --> Language Class Initialized
INFO - 2018-01-22 01:40:25 --> Loader Class Initialized
INFO - 2018-01-22 01:40:25 --> Helper loaded: url_helper
INFO - 2018-01-22 01:40:25 --> Helper loaded: general_helper
INFO - 2018-01-22 01:40:25 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:40:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:40:25 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:40:25 --> Controller Class Initialized
INFO - 2018-01-22 01:40:25 --> Model Class Initialized
INFO - 2018-01-22 09:40:25 --> Final output sent to browser
DEBUG - 2018-01-22 09:40:25 --> Total execution time: 0.0638
INFO - 2018-01-22 01:40:27 --> Config Class Initialized
INFO - 2018-01-22 01:40:27 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:40:27 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:40:27 --> Utf8 Class Initialized
INFO - 2018-01-22 01:40:27 --> URI Class Initialized
INFO - 2018-01-22 01:40:27 --> Router Class Initialized
INFO - 2018-01-22 01:40:27 --> Output Class Initialized
INFO - 2018-01-22 01:40:27 --> Security Class Initialized
DEBUG - 2018-01-22 01:40:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:40:27 --> Input Class Initialized
INFO - 2018-01-22 01:40:27 --> Language Class Initialized
INFO - 2018-01-22 01:40:27 --> Loader Class Initialized
INFO - 2018-01-22 01:40:27 --> Helper loaded: url_helper
INFO - 2018-01-22 01:40:27 --> Helper loaded: general_helper
INFO - 2018-01-22 01:40:27 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:40:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:40:27 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:40:27 --> Controller Class Initialized
INFO - 2018-01-22 01:40:27 --> Model Class Initialized
INFO - 2018-01-22 09:40:27 --> Final output sent to browser
DEBUG - 2018-01-22 09:40:27 --> Total execution time: 0.0553
INFO - 2018-01-22 01:40:31 --> Config Class Initialized
INFO - 2018-01-22 01:40:31 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:40:31 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:40:31 --> Utf8 Class Initialized
INFO - 2018-01-22 01:40:31 --> URI Class Initialized
INFO - 2018-01-22 01:40:31 --> Router Class Initialized
INFO - 2018-01-22 01:40:31 --> Output Class Initialized
INFO - 2018-01-22 01:40:31 --> Security Class Initialized
DEBUG - 2018-01-22 01:40:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:40:31 --> Input Class Initialized
INFO - 2018-01-22 01:40:31 --> Language Class Initialized
INFO - 2018-01-22 01:40:31 --> Loader Class Initialized
INFO - 2018-01-22 01:40:31 --> Helper loaded: url_helper
INFO - 2018-01-22 01:40:31 --> Helper loaded: general_helper
INFO - 2018-01-22 01:40:31 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:40:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:40:31 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:40:31 --> Controller Class Initialized
INFO - 2018-01-22 01:40:31 --> Model Class Initialized
INFO - 2018-01-22 09:40:31 --> Final output sent to browser
DEBUG - 2018-01-22 09:40:31 --> Total execution time: 0.0531
INFO - 2018-01-22 01:40:33 --> Config Class Initialized
INFO - 2018-01-22 01:40:33 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:40:33 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:40:33 --> Utf8 Class Initialized
INFO - 2018-01-22 01:40:33 --> URI Class Initialized
INFO - 2018-01-22 01:40:33 --> Router Class Initialized
INFO - 2018-01-22 01:40:33 --> Output Class Initialized
INFO - 2018-01-22 01:40:33 --> Security Class Initialized
DEBUG - 2018-01-22 01:40:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:40:33 --> Input Class Initialized
INFO - 2018-01-22 01:40:33 --> Language Class Initialized
INFO - 2018-01-22 01:40:33 --> Loader Class Initialized
INFO - 2018-01-22 01:40:33 --> Helper loaded: url_helper
INFO - 2018-01-22 01:40:33 --> Helper loaded: general_helper
INFO - 2018-01-22 01:40:33 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:40:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:40:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:40:33 --> Controller Class Initialized
INFO - 2018-01-22 01:40:33 --> Model Class Initialized
INFO - 2018-01-22 09:40:33 --> Final output sent to browser
DEBUG - 2018-01-22 09:40:33 --> Total execution time: 0.0537
INFO - 2018-01-22 01:40:38 --> Config Class Initialized
INFO - 2018-01-22 01:40:38 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:40:38 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:40:38 --> Utf8 Class Initialized
INFO - 2018-01-22 01:40:38 --> URI Class Initialized
INFO - 2018-01-22 01:40:38 --> Router Class Initialized
INFO - 2018-01-22 01:40:38 --> Output Class Initialized
INFO - 2018-01-22 01:40:38 --> Security Class Initialized
DEBUG - 2018-01-22 01:40:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:40:38 --> Input Class Initialized
INFO - 2018-01-22 01:40:38 --> Language Class Initialized
INFO - 2018-01-22 01:40:38 --> Loader Class Initialized
INFO - 2018-01-22 01:40:38 --> Helper loaded: url_helper
INFO - 2018-01-22 01:40:38 --> Helper loaded: general_helper
INFO - 2018-01-22 01:40:38 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:40:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:40:38 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:40:38 --> Controller Class Initialized
INFO - 2018-01-22 01:40:38 --> Model Class Initialized
INFO - 2018-01-22 09:40:38 --> Final output sent to browser
DEBUG - 2018-01-22 09:40:38 --> Total execution time: 0.0545
INFO - 2018-01-22 01:40:44 --> Config Class Initialized
INFO - 2018-01-22 01:40:44 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:40:44 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:40:44 --> Utf8 Class Initialized
INFO - 2018-01-22 01:40:44 --> URI Class Initialized
INFO - 2018-01-22 01:40:44 --> Router Class Initialized
INFO - 2018-01-22 01:40:44 --> Output Class Initialized
INFO - 2018-01-22 01:40:44 --> Security Class Initialized
DEBUG - 2018-01-22 01:40:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:40:44 --> Input Class Initialized
INFO - 2018-01-22 01:40:44 --> Language Class Initialized
INFO - 2018-01-22 01:40:44 --> Loader Class Initialized
INFO - 2018-01-22 01:40:44 --> Helper loaded: url_helper
INFO - 2018-01-22 01:40:44 --> Helper loaded: general_helper
INFO - 2018-01-22 01:40:45 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:40:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:40:45 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:40:45 --> Controller Class Initialized
INFO - 2018-01-22 01:40:45 --> Model Class Initialized
INFO - 2018-01-22 09:40:45 --> Final output sent to browser
DEBUG - 2018-01-22 09:40:45 --> Total execution time: 0.0635
INFO - 2018-01-22 01:40:53 --> Config Class Initialized
INFO - 2018-01-22 01:40:53 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:40:53 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:40:53 --> Utf8 Class Initialized
INFO - 2018-01-22 01:40:53 --> URI Class Initialized
INFO - 2018-01-22 01:40:53 --> Router Class Initialized
INFO - 2018-01-22 01:40:53 --> Output Class Initialized
INFO - 2018-01-22 01:40:53 --> Security Class Initialized
DEBUG - 2018-01-22 01:40:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:40:53 --> Input Class Initialized
INFO - 2018-01-22 01:40:53 --> Language Class Initialized
INFO - 2018-01-22 01:40:53 --> Loader Class Initialized
INFO - 2018-01-22 01:40:53 --> Helper loaded: url_helper
INFO - 2018-01-22 01:40:53 --> Helper loaded: general_helper
INFO - 2018-01-22 01:40:53 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:40:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:40:53 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:40:53 --> Controller Class Initialized
INFO - 2018-01-22 01:40:53 --> Model Class Initialized
INFO - 2018-01-22 09:40:53 --> Final output sent to browser
DEBUG - 2018-01-22 09:40:53 --> Total execution time: 0.0625
INFO - 2018-01-22 01:40:56 --> Config Class Initialized
INFO - 2018-01-22 01:40:56 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:40:56 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:40:56 --> Utf8 Class Initialized
INFO - 2018-01-22 01:40:56 --> URI Class Initialized
INFO - 2018-01-22 01:40:56 --> Router Class Initialized
INFO - 2018-01-22 01:40:56 --> Output Class Initialized
INFO - 2018-01-22 01:40:56 --> Security Class Initialized
DEBUG - 2018-01-22 01:40:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:40:56 --> Input Class Initialized
INFO - 2018-01-22 01:40:56 --> Language Class Initialized
INFO - 2018-01-22 01:40:56 --> Loader Class Initialized
INFO - 2018-01-22 01:40:56 --> Helper loaded: url_helper
INFO - 2018-01-22 01:40:56 --> Helper loaded: general_helper
INFO - 2018-01-22 01:40:56 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:40:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:40:56 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:40:56 --> Controller Class Initialized
INFO - 2018-01-22 01:40:56 --> Model Class Initialized
INFO - 2018-01-22 09:40:56 --> Final output sent to browser
DEBUG - 2018-01-22 09:40:56 --> Total execution time: 0.0707
INFO - 2018-01-22 01:41:04 --> Config Class Initialized
INFO - 2018-01-22 01:41:04 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:41:04 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:41:04 --> Utf8 Class Initialized
INFO - 2018-01-22 01:41:04 --> URI Class Initialized
INFO - 2018-01-22 01:41:04 --> Router Class Initialized
INFO - 2018-01-22 01:41:04 --> Output Class Initialized
INFO - 2018-01-22 01:41:04 --> Security Class Initialized
DEBUG - 2018-01-22 01:41:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:41:04 --> Input Class Initialized
INFO - 2018-01-22 01:41:04 --> Language Class Initialized
INFO - 2018-01-22 01:41:04 --> Loader Class Initialized
INFO - 2018-01-22 01:41:04 --> Helper loaded: url_helper
INFO - 2018-01-22 01:41:04 --> Helper loaded: general_helper
INFO - 2018-01-22 01:41:04 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:41:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:41:04 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:41:04 --> Controller Class Initialized
INFO - 2018-01-22 01:41:04 --> Model Class Initialized
INFO - 2018-01-22 09:41:04 --> Final output sent to browser
DEBUG - 2018-01-22 09:41:04 --> Total execution time: 0.0498
INFO - 2018-01-22 01:41:17 --> Config Class Initialized
INFO - 2018-01-22 01:41:17 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:41:17 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:41:17 --> Utf8 Class Initialized
INFO - 2018-01-22 01:41:17 --> URI Class Initialized
INFO - 2018-01-22 01:41:17 --> Router Class Initialized
INFO - 2018-01-22 01:41:17 --> Output Class Initialized
INFO - 2018-01-22 01:41:17 --> Security Class Initialized
DEBUG - 2018-01-22 01:41:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:41:17 --> Input Class Initialized
INFO - 2018-01-22 01:41:17 --> Language Class Initialized
INFO - 2018-01-22 01:41:17 --> Loader Class Initialized
INFO - 2018-01-22 01:41:17 --> Helper loaded: url_helper
INFO - 2018-01-22 01:41:17 --> Helper loaded: general_helper
INFO - 2018-01-22 01:41:17 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:41:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:41:17 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:41:17 --> Controller Class Initialized
INFO - 2018-01-22 01:41:17 --> Model Class Initialized
INFO - 2018-01-22 09:41:17 --> Final output sent to browser
DEBUG - 2018-01-22 09:41:17 --> Total execution time: 0.1443
INFO - 2018-01-22 01:41:24 --> Config Class Initialized
INFO - 2018-01-22 01:41:24 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:41:24 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:41:24 --> Utf8 Class Initialized
INFO - 2018-01-22 01:41:24 --> URI Class Initialized
INFO - 2018-01-22 01:41:24 --> Router Class Initialized
INFO - 2018-01-22 01:41:24 --> Output Class Initialized
INFO - 2018-01-22 01:41:24 --> Security Class Initialized
DEBUG - 2018-01-22 01:41:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:41:24 --> Input Class Initialized
INFO - 2018-01-22 01:41:24 --> Language Class Initialized
INFO - 2018-01-22 01:41:24 --> Loader Class Initialized
INFO - 2018-01-22 01:41:24 --> Helper loaded: url_helper
INFO - 2018-01-22 01:41:24 --> Helper loaded: general_helper
INFO - 2018-01-22 01:41:24 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:41:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:41:24 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:41:24 --> Controller Class Initialized
INFO - 2018-01-22 01:41:24 --> Model Class Initialized
INFO - 2018-01-22 09:41:24 --> Final output sent to browser
DEBUG - 2018-01-22 09:41:24 --> Total execution time: 0.0784
INFO - 2018-01-22 01:42:35 --> Config Class Initialized
INFO - 2018-01-22 01:42:35 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:42:35 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:42:35 --> Utf8 Class Initialized
INFO - 2018-01-22 01:42:35 --> URI Class Initialized
INFO - 2018-01-22 01:42:35 --> Router Class Initialized
INFO - 2018-01-22 01:42:35 --> Output Class Initialized
INFO - 2018-01-22 01:42:35 --> Security Class Initialized
DEBUG - 2018-01-22 01:42:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:42:35 --> Input Class Initialized
INFO - 2018-01-22 01:42:35 --> Language Class Initialized
INFO - 2018-01-22 01:42:35 --> Loader Class Initialized
INFO - 2018-01-22 01:42:35 --> Helper loaded: url_helper
INFO - 2018-01-22 01:42:35 --> Helper loaded: general_helper
INFO - 2018-01-22 01:42:35 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:42:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:42:35 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:42:35 --> Controller Class Initialized
INFO - 2018-01-22 01:42:35 --> Model Class Initialized
ERROR - 2018-01-22 09:42:35 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:42:35 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:42:35 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:42:35 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:42:35 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:42:35 --> Final output sent to browser
DEBUG - 2018-01-22 09:42:35 --> Total execution time: 0.0763
INFO - 2018-01-22 01:42:39 --> Config Class Initialized
INFO - 2018-01-22 01:42:39 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:42:39 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:42:39 --> Utf8 Class Initialized
INFO - 2018-01-22 01:42:39 --> URI Class Initialized
INFO - 2018-01-22 01:42:39 --> Router Class Initialized
INFO - 2018-01-22 01:42:39 --> Output Class Initialized
INFO - 2018-01-22 01:42:39 --> Security Class Initialized
DEBUG - 2018-01-22 01:42:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:42:40 --> Input Class Initialized
INFO - 2018-01-22 01:42:40 --> Language Class Initialized
INFO - 2018-01-22 01:42:40 --> Loader Class Initialized
INFO - 2018-01-22 01:42:40 --> Helper loaded: url_helper
INFO - 2018-01-22 01:42:40 --> Helper loaded: general_helper
INFO - 2018-01-22 01:42:40 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:42:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:42:40 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:42:40 --> Controller Class Initialized
INFO - 2018-01-22 01:42:40 --> Model Class Initialized
INFO - 2018-01-22 09:42:40 --> Final output sent to browser
DEBUG - 2018-01-22 09:42:40 --> Total execution time: 0.0983
INFO - 2018-01-22 01:42:47 --> Config Class Initialized
INFO - 2018-01-22 01:42:47 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:42:47 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:42:47 --> Utf8 Class Initialized
INFO - 2018-01-22 01:42:47 --> URI Class Initialized
INFO - 2018-01-22 01:42:47 --> Router Class Initialized
INFO - 2018-01-22 01:42:47 --> Output Class Initialized
INFO - 2018-01-22 01:42:47 --> Security Class Initialized
DEBUG - 2018-01-22 01:42:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:42:47 --> Input Class Initialized
INFO - 2018-01-22 01:42:47 --> Language Class Initialized
INFO - 2018-01-22 01:42:47 --> Loader Class Initialized
INFO - 2018-01-22 01:42:47 --> Helper loaded: url_helper
INFO - 2018-01-22 01:42:47 --> Helper loaded: general_helper
INFO - 2018-01-22 01:42:47 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:42:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:42:47 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:42:47 --> Controller Class Initialized
INFO - 2018-01-22 01:42:47 --> Model Class Initialized
INFO - 2018-01-22 09:42:47 --> Final output sent to browser
DEBUG - 2018-01-22 09:42:47 --> Total execution time: 0.0784
INFO - 2018-01-22 01:46:11 --> Config Class Initialized
INFO - 2018-01-22 01:46:11 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:46:11 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:46:11 --> Utf8 Class Initialized
INFO - 2018-01-22 01:46:11 --> URI Class Initialized
INFO - 2018-01-22 01:46:11 --> Router Class Initialized
INFO - 2018-01-22 01:46:11 --> Output Class Initialized
INFO - 2018-01-22 01:46:11 --> Security Class Initialized
DEBUG - 2018-01-22 01:46:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:46:11 --> Input Class Initialized
INFO - 2018-01-22 01:46:11 --> Language Class Initialized
INFO - 2018-01-22 01:46:11 --> Loader Class Initialized
INFO - 2018-01-22 01:46:11 --> Helper loaded: url_helper
INFO - 2018-01-22 01:46:11 --> Helper loaded: general_helper
INFO - 2018-01-22 01:46:11 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:46:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:46:11 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:46:11 --> Controller Class Initialized
INFO - 2018-01-22 01:46:11 --> Model Class Initialized
ERROR - 2018-01-22 09:46:11 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:46:11 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:46:11 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:46:11 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:46:11 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:46:11 --> Final output sent to browser
DEBUG - 2018-01-22 09:46:11 --> Total execution time: 0.0500
INFO - 2018-01-22 01:46:23 --> Config Class Initialized
INFO - 2018-01-22 01:46:23 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:46:23 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:46:23 --> Utf8 Class Initialized
INFO - 2018-01-22 01:46:23 --> URI Class Initialized
INFO - 2018-01-22 01:46:23 --> Router Class Initialized
INFO - 2018-01-22 01:46:23 --> Output Class Initialized
INFO - 2018-01-22 01:46:23 --> Security Class Initialized
DEBUG - 2018-01-22 01:46:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:46:23 --> Input Class Initialized
INFO - 2018-01-22 01:46:23 --> Language Class Initialized
INFO - 2018-01-22 01:46:23 --> Loader Class Initialized
INFO - 2018-01-22 01:46:23 --> Helper loaded: url_helper
INFO - 2018-01-22 01:46:23 --> Helper loaded: general_helper
INFO - 2018-01-22 01:46:23 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:46:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:46:23 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:46:23 --> Controller Class Initialized
INFO - 2018-01-22 01:46:23 --> Model Class Initialized
INFO - 2018-01-22 09:46:23 --> Final output sent to browser
DEBUG - 2018-01-22 09:46:23 --> Total execution time: 0.0644
INFO - 2018-01-22 01:46:32 --> Config Class Initialized
INFO - 2018-01-22 01:46:32 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:46:32 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:46:32 --> Utf8 Class Initialized
INFO - 2018-01-22 01:46:32 --> URI Class Initialized
INFO - 2018-01-22 01:46:32 --> Router Class Initialized
INFO - 2018-01-22 01:46:32 --> Output Class Initialized
INFO - 2018-01-22 01:46:32 --> Security Class Initialized
DEBUG - 2018-01-22 01:46:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:46:32 --> Input Class Initialized
INFO - 2018-01-22 01:46:32 --> Language Class Initialized
INFO - 2018-01-22 01:46:32 --> Loader Class Initialized
INFO - 2018-01-22 01:46:32 --> Helper loaded: url_helper
INFO - 2018-01-22 01:46:32 --> Helper loaded: general_helper
INFO - 2018-01-22 01:46:32 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:46:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:46:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:46:33 --> Controller Class Initialized
INFO - 2018-01-22 01:46:33 --> Model Class Initialized
INFO - 2018-01-22 09:46:33 --> Final output sent to browser
DEBUG - 2018-01-22 09:46:33 --> Total execution time: 0.0590
INFO - 2018-01-22 01:46:37 --> Config Class Initialized
INFO - 2018-01-22 01:46:37 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:46:37 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:46:37 --> Utf8 Class Initialized
INFO - 2018-01-22 01:46:37 --> URI Class Initialized
INFO - 2018-01-22 01:46:37 --> Router Class Initialized
INFO - 2018-01-22 01:46:37 --> Output Class Initialized
INFO - 2018-01-22 01:46:37 --> Security Class Initialized
DEBUG - 2018-01-22 01:46:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:46:37 --> Input Class Initialized
INFO - 2018-01-22 01:46:37 --> Language Class Initialized
INFO - 2018-01-22 01:46:37 --> Loader Class Initialized
INFO - 2018-01-22 01:46:37 --> Helper loaded: url_helper
INFO - 2018-01-22 01:46:37 --> Helper loaded: general_helper
INFO - 2018-01-22 01:46:37 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:46:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:46:37 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:46:37 --> Controller Class Initialized
INFO - 2018-01-22 01:46:37 --> Model Class Initialized
ERROR - 2018-01-22 09:46:37 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:46:37 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:46:37 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:46:37 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:46:37 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:46:37 --> Final output sent to browser
DEBUG - 2018-01-22 09:46:37 --> Total execution time: 0.0481
INFO - 2018-01-22 01:46:48 --> Config Class Initialized
INFO - 2018-01-22 01:46:48 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:46:48 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:46:48 --> Utf8 Class Initialized
INFO - 2018-01-22 01:46:48 --> URI Class Initialized
INFO - 2018-01-22 01:46:48 --> Router Class Initialized
INFO - 2018-01-22 01:46:48 --> Output Class Initialized
INFO - 2018-01-22 01:46:48 --> Security Class Initialized
DEBUG - 2018-01-22 01:46:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:46:48 --> Input Class Initialized
INFO - 2018-01-22 01:46:48 --> Language Class Initialized
INFO - 2018-01-22 01:46:48 --> Loader Class Initialized
INFO - 2018-01-22 01:46:48 --> Helper loaded: url_helper
INFO - 2018-01-22 01:46:48 --> Helper loaded: general_helper
INFO - 2018-01-22 01:46:48 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:46:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:46:48 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:46:48 --> Controller Class Initialized
INFO - 2018-01-22 01:46:48 --> Model Class Initialized
INFO - 2018-01-22 09:46:48 --> Final output sent to browser
DEBUG - 2018-01-22 09:46:48 --> Total execution time: 0.0583
INFO - 2018-01-22 01:47:49 --> Config Class Initialized
INFO - 2018-01-22 01:47:49 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:47:49 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:47:49 --> Utf8 Class Initialized
INFO - 2018-01-22 01:47:49 --> URI Class Initialized
INFO - 2018-01-22 01:47:49 --> Router Class Initialized
INFO - 2018-01-22 01:47:49 --> Output Class Initialized
INFO - 2018-01-22 01:47:49 --> Security Class Initialized
DEBUG - 2018-01-22 01:47:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:47:49 --> Input Class Initialized
INFO - 2018-01-22 01:47:49 --> Language Class Initialized
INFO - 2018-01-22 01:47:49 --> Loader Class Initialized
INFO - 2018-01-22 01:47:49 --> Helper loaded: url_helper
INFO - 2018-01-22 01:47:49 --> Helper loaded: general_helper
INFO - 2018-01-22 01:47:49 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:47:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:47:49 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:47:49 --> Controller Class Initialized
INFO - 2018-01-22 01:47:49 --> Model Class Initialized
ERROR - 2018-01-22 09:47:49 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:47:49 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:47:49 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:47:49 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:47:49 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:47:49 --> Final output sent to browser
DEBUG - 2018-01-22 09:47:49 --> Total execution time: 0.0599
INFO - 2018-01-22 01:47:52 --> Config Class Initialized
INFO - 2018-01-22 01:47:52 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:47:52 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:47:52 --> Utf8 Class Initialized
INFO - 2018-01-22 01:47:52 --> URI Class Initialized
INFO - 2018-01-22 01:47:52 --> Router Class Initialized
INFO - 2018-01-22 01:47:52 --> Output Class Initialized
INFO - 2018-01-22 01:47:52 --> Security Class Initialized
DEBUG - 2018-01-22 01:47:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:47:52 --> Input Class Initialized
INFO - 2018-01-22 01:47:52 --> Language Class Initialized
INFO - 2018-01-22 01:47:52 --> Loader Class Initialized
INFO - 2018-01-22 01:47:52 --> Helper loaded: url_helper
INFO - 2018-01-22 01:47:52 --> Helper loaded: general_helper
INFO - 2018-01-22 01:47:52 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:47:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:47:52 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:47:52 --> Controller Class Initialized
INFO - 2018-01-22 01:47:52 --> Model Class Initialized
ERROR - 2018-01-22 09:47:52 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:47:52 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:47:52 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:47:52 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:47:52 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:47:52 --> Final output sent to browser
DEBUG - 2018-01-22 09:47:52 --> Total execution time: 0.0749
INFO - 2018-01-22 01:47:55 --> Config Class Initialized
INFO - 2018-01-22 01:47:55 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:47:55 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:47:55 --> Utf8 Class Initialized
INFO - 2018-01-22 01:47:55 --> URI Class Initialized
INFO - 2018-01-22 01:47:55 --> Router Class Initialized
INFO - 2018-01-22 01:47:55 --> Output Class Initialized
INFO - 2018-01-22 01:47:55 --> Security Class Initialized
DEBUG - 2018-01-22 01:47:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:47:55 --> Input Class Initialized
INFO - 2018-01-22 01:47:55 --> Language Class Initialized
INFO - 2018-01-22 01:47:55 --> Loader Class Initialized
INFO - 2018-01-22 01:47:55 --> Helper loaded: url_helper
INFO - 2018-01-22 01:47:55 --> Helper loaded: general_helper
INFO - 2018-01-22 01:47:55 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:47:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:47:55 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:47:55 --> Controller Class Initialized
INFO - 2018-01-22 01:47:55 --> Model Class Initialized
INFO - 2018-01-22 09:47:55 --> Final output sent to browser
DEBUG - 2018-01-22 09:47:55 --> Total execution time: 0.0761
INFO - 2018-01-22 01:48:13 --> Config Class Initialized
INFO - 2018-01-22 01:48:13 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:48:13 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:48:13 --> Utf8 Class Initialized
INFO - 2018-01-22 01:48:13 --> URI Class Initialized
INFO - 2018-01-22 01:48:13 --> Router Class Initialized
INFO - 2018-01-22 01:48:13 --> Output Class Initialized
INFO - 2018-01-22 01:48:13 --> Security Class Initialized
DEBUG - 2018-01-22 01:48:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:48:13 --> Input Class Initialized
INFO - 2018-01-22 01:48:13 --> Language Class Initialized
INFO - 2018-01-22 01:48:13 --> Loader Class Initialized
INFO - 2018-01-22 01:48:13 --> Helper loaded: url_helper
INFO - 2018-01-22 01:48:13 --> Helper loaded: general_helper
INFO - 2018-01-22 01:48:13 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:48:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:48:13 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:48:13 --> Controller Class Initialized
INFO - 2018-01-22 01:48:13 --> Model Class Initialized
INFO - 2018-01-22 09:49:29 --> Final output sent to browser
DEBUG - 2018-01-22 09:49:29 --> Total execution time: 76.1476
INFO - 2018-01-22 01:50:11 --> Config Class Initialized
INFO - 2018-01-22 01:50:11 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:50:11 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:50:11 --> Utf8 Class Initialized
INFO - 2018-01-22 01:50:11 --> URI Class Initialized
INFO - 2018-01-22 01:50:11 --> Router Class Initialized
INFO - 2018-01-22 01:50:11 --> Output Class Initialized
INFO - 2018-01-22 01:50:11 --> Security Class Initialized
DEBUG - 2018-01-22 01:50:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:50:11 --> Input Class Initialized
INFO - 2018-01-22 01:50:11 --> Language Class Initialized
INFO - 2018-01-22 01:50:11 --> Loader Class Initialized
INFO - 2018-01-22 01:50:11 --> Helper loaded: url_helper
INFO - 2018-01-22 01:50:11 --> Helper loaded: general_helper
INFO - 2018-01-22 01:50:11 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:50:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:50:11 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:50:11 --> Controller Class Initialized
INFO - 2018-01-22 01:50:11 --> Model Class Initialized
ERROR - 2018-01-22 09:50:11 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:50:11 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:50:11 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:50:11 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:50:11 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:50:11 --> Final output sent to browser
DEBUG - 2018-01-22 09:50:11 --> Total execution time: 0.0683
INFO - 2018-01-22 01:50:16 --> Config Class Initialized
INFO - 2018-01-22 01:50:16 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:50:16 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:50:16 --> Utf8 Class Initialized
INFO - 2018-01-22 01:50:16 --> URI Class Initialized
INFO - 2018-01-22 01:50:16 --> Router Class Initialized
INFO - 2018-01-22 01:50:16 --> Output Class Initialized
INFO - 2018-01-22 01:50:16 --> Security Class Initialized
DEBUG - 2018-01-22 01:50:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:50:16 --> Input Class Initialized
INFO - 2018-01-22 01:50:16 --> Language Class Initialized
INFO - 2018-01-22 01:50:16 --> Loader Class Initialized
INFO - 2018-01-22 01:50:16 --> Helper loaded: url_helper
INFO - 2018-01-22 01:50:16 --> Helper loaded: general_helper
INFO - 2018-01-22 01:50:16 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:50:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:50:16 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:50:16 --> Controller Class Initialized
INFO - 2018-01-22 01:50:16 --> Model Class Initialized
INFO - 2018-01-22 09:50:16 --> Final output sent to browser
DEBUG - 2018-01-22 09:50:16 --> Total execution time: 0.1015
INFO - 2018-01-22 01:50:28 --> Config Class Initialized
INFO - 2018-01-22 01:50:28 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:50:28 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:50:28 --> Utf8 Class Initialized
INFO - 2018-01-22 01:50:28 --> URI Class Initialized
INFO - 2018-01-22 01:50:28 --> Router Class Initialized
INFO - 2018-01-22 01:50:28 --> Output Class Initialized
INFO - 2018-01-22 01:50:28 --> Security Class Initialized
DEBUG - 2018-01-22 01:50:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:50:28 --> Input Class Initialized
INFO - 2018-01-22 01:50:28 --> Language Class Initialized
INFO - 2018-01-22 01:50:28 --> Loader Class Initialized
INFO - 2018-01-22 01:50:28 --> Helper loaded: url_helper
INFO - 2018-01-22 01:50:28 --> Helper loaded: general_helper
INFO - 2018-01-22 01:50:28 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:50:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:50:28 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:50:28 --> Controller Class Initialized
INFO - 2018-01-22 01:50:28 --> Model Class Initialized
INFO - 2018-01-22 09:50:28 --> Final output sent to browser
DEBUG - 2018-01-22 09:50:28 --> Total execution time: 0.0541
INFO - 2018-01-22 01:50:58 --> Config Class Initialized
INFO - 2018-01-22 01:50:58 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:50:58 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:50:58 --> Utf8 Class Initialized
INFO - 2018-01-22 01:50:58 --> URI Class Initialized
INFO - 2018-01-22 01:50:58 --> Router Class Initialized
INFO - 2018-01-22 01:50:58 --> Output Class Initialized
INFO - 2018-01-22 01:50:58 --> Security Class Initialized
DEBUG - 2018-01-22 01:50:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:50:58 --> Input Class Initialized
INFO - 2018-01-22 01:50:58 --> Language Class Initialized
INFO - 2018-01-22 01:50:58 --> Loader Class Initialized
INFO - 2018-01-22 01:50:58 --> Helper loaded: url_helper
INFO - 2018-01-22 01:50:58 --> Helper loaded: general_helper
INFO - 2018-01-22 01:50:58 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:50:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:50:58 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:50:58 --> Controller Class Initialized
INFO - 2018-01-22 01:50:58 --> Model Class Initialized
ERROR - 2018-01-22 09:50:58 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:50:58 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:50:58 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:50:58 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:50:58 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:50:58 --> Final output sent to browser
DEBUG - 2018-01-22 09:50:58 --> Total execution time: 0.0596
INFO - 2018-01-22 01:51:02 --> Config Class Initialized
INFO - 2018-01-22 01:51:02 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:51:02 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:51:02 --> Utf8 Class Initialized
INFO - 2018-01-22 01:51:02 --> URI Class Initialized
INFO - 2018-01-22 01:51:02 --> Router Class Initialized
INFO - 2018-01-22 01:51:02 --> Output Class Initialized
INFO - 2018-01-22 01:51:02 --> Security Class Initialized
DEBUG - 2018-01-22 01:51:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:51:02 --> Input Class Initialized
INFO - 2018-01-22 01:51:02 --> Language Class Initialized
INFO - 2018-01-22 01:51:02 --> Loader Class Initialized
INFO - 2018-01-22 01:51:02 --> Helper loaded: url_helper
INFO - 2018-01-22 01:51:02 --> Helper loaded: general_helper
INFO - 2018-01-22 01:51:02 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:51:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:51:02 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:51:02 --> Controller Class Initialized
INFO - 2018-01-22 01:51:02 --> Model Class Initialized
INFO - 2018-01-22 09:51:02 --> Final output sent to browser
DEBUG - 2018-01-22 09:51:02 --> Total execution time: 0.0902
INFO - 2018-01-22 01:51:07 --> Config Class Initialized
INFO - 2018-01-22 01:51:07 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:51:07 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:51:07 --> Utf8 Class Initialized
INFO - 2018-01-22 01:51:07 --> URI Class Initialized
INFO - 2018-01-22 01:51:07 --> Router Class Initialized
INFO - 2018-01-22 01:51:07 --> Output Class Initialized
INFO - 2018-01-22 01:51:07 --> Security Class Initialized
DEBUG - 2018-01-22 01:51:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:51:07 --> Input Class Initialized
INFO - 2018-01-22 01:51:07 --> Language Class Initialized
INFO - 2018-01-22 01:51:07 --> Loader Class Initialized
INFO - 2018-01-22 01:51:07 --> Helper loaded: url_helper
INFO - 2018-01-22 01:51:07 --> Helper loaded: general_helper
INFO - 2018-01-22 01:51:07 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:51:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:51:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:51:07 --> Controller Class Initialized
INFO - 2018-01-22 01:51:07 --> Model Class Initialized
INFO - 2018-01-22 09:51:07 --> Final output sent to browser
DEBUG - 2018-01-22 09:51:07 --> Total execution time: 0.0538
INFO - 2018-01-22 01:51:14 --> Config Class Initialized
INFO - 2018-01-22 01:51:14 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:51:14 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:51:14 --> Utf8 Class Initialized
INFO - 2018-01-22 01:51:14 --> URI Class Initialized
INFO - 2018-01-22 01:51:14 --> Router Class Initialized
INFO - 2018-01-22 01:51:14 --> Output Class Initialized
INFO - 2018-01-22 01:51:14 --> Security Class Initialized
DEBUG - 2018-01-22 01:51:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:51:14 --> Input Class Initialized
INFO - 2018-01-22 01:51:14 --> Language Class Initialized
INFO - 2018-01-22 01:51:14 --> Loader Class Initialized
INFO - 2018-01-22 01:51:14 --> Helper loaded: url_helper
INFO - 2018-01-22 01:51:14 --> Helper loaded: general_helper
INFO - 2018-01-22 01:51:14 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:51:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:51:14 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:51:14 --> Controller Class Initialized
INFO - 2018-01-22 01:51:14 --> Model Class Initialized
INFO - 2018-01-22 09:51:14 --> Final output sent to browser
DEBUG - 2018-01-22 09:51:14 --> Total execution time: 0.0862
INFO - 2018-01-22 01:51:18 --> Config Class Initialized
INFO - 2018-01-22 01:51:18 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:51:18 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:51:18 --> Utf8 Class Initialized
INFO - 2018-01-22 01:51:18 --> URI Class Initialized
INFO - 2018-01-22 01:51:18 --> Router Class Initialized
INFO - 2018-01-22 01:51:18 --> Output Class Initialized
INFO - 2018-01-22 01:51:18 --> Security Class Initialized
DEBUG - 2018-01-22 01:51:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:51:18 --> Input Class Initialized
INFO - 2018-01-22 01:51:18 --> Language Class Initialized
INFO - 2018-01-22 01:51:18 --> Loader Class Initialized
INFO - 2018-01-22 01:51:18 --> Helper loaded: url_helper
INFO - 2018-01-22 01:51:18 --> Helper loaded: general_helper
INFO - 2018-01-22 01:51:18 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:51:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:51:18 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:51:18 --> Controller Class Initialized
INFO - 2018-01-22 01:51:18 --> Model Class Initialized
INFO - 2018-01-22 09:51:18 --> Final output sent to browser
DEBUG - 2018-01-22 09:51:18 --> Total execution time: 0.0469
INFO - 2018-01-22 01:51:30 --> Config Class Initialized
INFO - 2018-01-22 01:51:30 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:51:30 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:51:30 --> Utf8 Class Initialized
INFO - 2018-01-22 01:51:30 --> URI Class Initialized
INFO - 2018-01-22 01:51:30 --> Router Class Initialized
INFO - 2018-01-22 01:51:30 --> Output Class Initialized
INFO - 2018-01-22 01:51:30 --> Security Class Initialized
DEBUG - 2018-01-22 01:51:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:51:30 --> Input Class Initialized
INFO - 2018-01-22 01:51:30 --> Language Class Initialized
INFO - 2018-01-22 01:51:30 --> Loader Class Initialized
INFO - 2018-01-22 01:51:30 --> Helper loaded: url_helper
INFO - 2018-01-22 01:51:30 --> Helper loaded: general_helper
INFO - 2018-01-22 01:51:30 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:51:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:51:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:51:30 --> Controller Class Initialized
INFO - 2018-01-22 01:51:30 --> Model Class Initialized
INFO - 2018-01-22 09:51:30 --> Final output sent to browser
DEBUG - 2018-01-22 09:51:30 --> Total execution time: 0.1095
INFO - 2018-01-22 01:53:30 --> Config Class Initialized
INFO - 2018-01-22 01:53:30 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:53:30 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:53:30 --> Utf8 Class Initialized
INFO - 2018-01-22 01:53:30 --> URI Class Initialized
INFO - 2018-01-22 01:53:30 --> Router Class Initialized
INFO - 2018-01-22 01:53:30 --> Output Class Initialized
INFO - 2018-01-22 01:53:30 --> Security Class Initialized
DEBUG - 2018-01-22 01:53:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:53:30 --> Input Class Initialized
INFO - 2018-01-22 01:53:30 --> Language Class Initialized
INFO - 2018-01-22 01:53:30 --> Loader Class Initialized
INFO - 2018-01-22 01:53:30 --> Helper loaded: url_helper
INFO - 2018-01-22 01:53:30 --> Helper loaded: general_helper
INFO - 2018-01-22 01:53:30 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:53:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:53:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:53:30 --> Controller Class Initialized
INFO - 2018-01-22 01:53:30 --> Model Class Initialized
ERROR - 2018-01-22 09:53:30 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:53:30 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:53:30 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:53:30 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:53:30 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:53:30 --> Final output sent to browser
DEBUG - 2018-01-22 09:53:30 --> Total execution time: 0.1149
INFO - 2018-01-22 01:53:36 --> Config Class Initialized
INFO - 2018-01-22 01:53:36 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:53:36 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:53:36 --> Utf8 Class Initialized
INFO - 2018-01-22 01:53:36 --> URI Class Initialized
INFO - 2018-01-22 01:53:36 --> Router Class Initialized
INFO - 2018-01-22 01:53:36 --> Output Class Initialized
INFO - 2018-01-22 01:53:36 --> Security Class Initialized
DEBUG - 2018-01-22 01:53:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:53:36 --> Input Class Initialized
INFO - 2018-01-22 01:53:36 --> Language Class Initialized
INFO - 2018-01-22 01:53:36 --> Loader Class Initialized
INFO - 2018-01-22 01:53:36 --> Helper loaded: url_helper
INFO - 2018-01-22 01:53:36 --> Helper loaded: general_helper
INFO - 2018-01-22 01:53:36 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:53:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:53:36 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:53:36 --> Controller Class Initialized
INFO - 2018-01-22 01:53:36 --> Model Class Initialized
INFO - 2018-01-22 09:53:36 --> Final output sent to browser
DEBUG - 2018-01-22 09:53:36 --> Total execution time: 0.1129
INFO - 2018-01-22 01:53:42 --> Config Class Initialized
INFO - 2018-01-22 01:53:42 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:53:42 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:53:42 --> Utf8 Class Initialized
INFO - 2018-01-22 01:53:42 --> URI Class Initialized
INFO - 2018-01-22 01:53:42 --> Router Class Initialized
INFO - 2018-01-22 01:53:42 --> Output Class Initialized
INFO - 2018-01-22 01:53:42 --> Security Class Initialized
DEBUG - 2018-01-22 01:53:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:53:42 --> Input Class Initialized
INFO - 2018-01-22 01:53:42 --> Language Class Initialized
INFO - 2018-01-22 01:53:42 --> Loader Class Initialized
INFO - 2018-01-22 01:53:42 --> Helper loaded: url_helper
INFO - 2018-01-22 01:53:42 --> Helper loaded: general_helper
INFO - 2018-01-22 01:53:42 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:53:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:53:42 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:53:42 --> Controller Class Initialized
INFO - 2018-01-22 01:53:42 --> Model Class Initialized
INFO - 2018-01-22 09:53:42 --> Final output sent to browser
DEBUG - 2018-01-22 09:53:42 --> Total execution time: 0.0594
INFO - 2018-01-22 01:54:28 --> Config Class Initialized
INFO - 2018-01-22 01:54:28 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:54:28 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:54:28 --> Utf8 Class Initialized
INFO - 2018-01-22 01:54:28 --> URI Class Initialized
INFO - 2018-01-22 01:54:28 --> Router Class Initialized
INFO - 2018-01-22 01:54:28 --> Output Class Initialized
INFO - 2018-01-22 01:54:28 --> Security Class Initialized
DEBUG - 2018-01-22 01:54:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:54:28 --> Input Class Initialized
INFO - 2018-01-22 01:54:28 --> Language Class Initialized
INFO - 2018-01-22 01:54:28 --> Loader Class Initialized
INFO - 2018-01-22 01:54:28 --> Helper loaded: url_helper
INFO - 2018-01-22 01:54:28 --> Helper loaded: general_helper
INFO - 2018-01-22 01:54:28 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:54:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:54:28 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:54:28 --> Controller Class Initialized
INFO - 2018-01-22 01:54:28 --> Model Class Initialized
ERROR - 2018-01-22 09:54:28 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:54:28 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:54:28 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:54:28 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:54:28 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:54:28 --> Final output sent to browser
DEBUG - 2018-01-22 09:54:28 --> Total execution time: 0.0537
INFO - 2018-01-22 01:54:32 --> Config Class Initialized
INFO - 2018-01-22 01:54:32 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:54:32 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:54:32 --> Utf8 Class Initialized
INFO - 2018-01-22 01:54:32 --> URI Class Initialized
INFO - 2018-01-22 01:54:32 --> Router Class Initialized
INFO - 2018-01-22 01:54:32 --> Output Class Initialized
INFO - 2018-01-22 01:54:32 --> Security Class Initialized
DEBUG - 2018-01-22 01:54:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:54:32 --> Input Class Initialized
INFO - 2018-01-22 01:54:32 --> Language Class Initialized
INFO - 2018-01-22 01:54:32 --> Loader Class Initialized
INFO - 2018-01-22 01:54:32 --> Helper loaded: url_helper
INFO - 2018-01-22 01:54:32 --> Helper loaded: general_helper
INFO - 2018-01-22 01:54:32 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:54:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:54:32 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:54:32 --> Controller Class Initialized
INFO - 2018-01-22 01:54:32 --> Model Class Initialized
INFO - 2018-01-22 09:54:32 --> Final output sent to browser
DEBUG - 2018-01-22 09:54:32 --> Total execution time: 0.1289
INFO - 2018-01-22 01:54:37 --> Config Class Initialized
INFO - 2018-01-22 01:54:37 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:54:37 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:54:37 --> Utf8 Class Initialized
INFO - 2018-01-22 01:54:37 --> URI Class Initialized
INFO - 2018-01-22 01:54:37 --> Router Class Initialized
INFO - 2018-01-22 01:54:37 --> Output Class Initialized
INFO - 2018-01-22 01:54:37 --> Security Class Initialized
DEBUG - 2018-01-22 01:54:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:54:37 --> Input Class Initialized
INFO - 2018-01-22 01:54:37 --> Language Class Initialized
INFO - 2018-01-22 01:54:37 --> Loader Class Initialized
INFO - 2018-01-22 01:54:37 --> Helper loaded: url_helper
INFO - 2018-01-22 01:54:37 --> Helper loaded: general_helper
INFO - 2018-01-22 01:54:37 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:54:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:54:37 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:54:37 --> Controller Class Initialized
INFO - 2018-01-22 01:54:37 --> Model Class Initialized
INFO - 2018-01-22 09:54:37 --> Final output sent to browser
DEBUG - 2018-01-22 09:54:37 --> Total execution time: 0.0780
INFO - 2018-01-22 01:54:47 --> Config Class Initialized
INFO - 2018-01-22 01:54:47 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:54:47 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:54:47 --> Utf8 Class Initialized
INFO - 2018-01-22 01:54:47 --> URI Class Initialized
INFO - 2018-01-22 01:54:47 --> Router Class Initialized
INFO - 2018-01-22 01:54:47 --> Output Class Initialized
INFO - 2018-01-22 01:54:47 --> Security Class Initialized
DEBUG - 2018-01-22 01:54:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:54:47 --> Input Class Initialized
INFO - 2018-01-22 01:54:47 --> Language Class Initialized
INFO - 2018-01-22 01:54:47 --> Loader Class Initialized
INFO - 2018-01-22 01:54:47 --> Helper loaded: url_helper
INFO - 2018-01-22 01:54:47 --> Helper loaded: general_helper
INFO - 2018-01-22 01:54:47 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:54:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:54:47 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:54:47 --> Controller Class Initialized
INFO - 2018-01-22 01:54:47 --> Model Class Initialized
INFO - 2018-01-22 09:54:47 --> Final output sent to browser
DEBUG - 2018-01-22 09:54:47 --> Total execution time: 0.0814
INFO - 2018-01-22 01:56:36 --> Config Class Initialized
INFO - 2018-01-22 01:56:36 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:56:36 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:56:36 --> Utf8 Class Initialized
INFO - 2018-01-22 01:56:36 --> URI Class Initialized
INFO - 2018-01-22 01:56:36 --> Router Class Initialized
INFO - 2018-01-22 01:56:36 --> Output Class Initialized
INFO - 2018-01-22 01:56:36 --> Security Class Initialized
DEBUG - 2018-01-22 01:56:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:56:36 --> Input Class Initialized
INFO - 2018-01-22 01:56:36 --> Language Class Initialized
INFO - 2018-01-22 01:56:36 --> Loader Class Initialized
INFO - 2018-01-22 01:56:36 --> Helper loaded: url_helper
INFO - 2018-01-22 01:56:36 --> Helper loaded: general_helper
INFO - 2018-01-22 01:56:36 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:56:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:56:36 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:56:36 --> Controller Class Initialized
INFO - 2018-01-22 01:56:36 --> Model Class Initialized
ERROR - 2018-01-22 09:56:36 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:56:36 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:56:36 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:56:36 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:56:36 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:56:36 --> Final output sent to browser
DEBUG - 2018-01-22 09:56:36 --> Total execution time: 0.1235
INFO - 2018-01-22 01:56:54 --> Config Class Initialized
INFO - 2018-01-22 01:56:54 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:56:54 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:56:54 --> Utf8 Class Initialized
INFO - 2018-01-22 01:56:54 --> URI Class Initialized
INFO - 2018-01-22 01:56:54 --> Router Class Initialized
INFO - 2018-01-22 01:56:54 --> Output Class Initialized
INFO - 2018-01-22 01:56:54 --> Security Class Initialized
DEBUG - 2018-01-22 01:56:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:56:54 --> Input Class Initialized
INFO - 2018-01-22 01:56:54 --> Language Class Initialized
INFO - 2018-01-22 01:56:54 --> Loader Class Initialized
INFO - 2018-01-22 01:56:54 --> Helper loaded: url_helper
INFO - 2018-01-22 01:56:54 --> Helper loaded: general_helper
INFO - 2018-01-22 01:56:54 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:56:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:56:54 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:56:54 --> Controller Class Initialized
INFO - 2018-01-22 01:56:54 --> Model Class Initialized
ERROR - 2018-01-22 09:56:54 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:56:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:56:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:56:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:56:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:56:54 --> Final output sent to browser
DEBUG - 2018-01-22 09:56:54 --> Total execution time: 0.0929
INFO - 2018-01-22 01:57:20 --> Config Class Initialized
INFO - 2018-01-22 01:57:20 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:57:20 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:57:20 --> Utf8 Class Initialized
INFO - 2018-01-22 01:57:20 --> URI Class Initialized
INFO - 2018-01-22 01:57:20 --> Router Class Initialized
INFO - 2018-01-22 01:57:20 --> Output Class Initialized
INFO - 2018-01-22 01:57:20 --> Security Class Initialized
DEBUG - 2018-01-22 01:57:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:57:20 --> Input Class Initialized
INFO - 2018-01-22 01:57:20 --> Language Class Initialized
INFO - 2018-01-22 01:57:20 --> Loader Class Initialized
INFO - 2018-01-22 01:57:20 --> Helper loaded: url_helper
INFO - 2018-01-22 01:57:20 --> Helper loaded: general_helper
INFO - 2018-01-22 01:57:20 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:57:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:57:20 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:57:20 --> Controller Class Initialized
INFO - 2018-01-22 01:57:20 --> Model Class Initialized
ERROR - 2018-01-22 09:57:20 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 09:57:20 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 09:57:20 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 09:57:20 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 09:57:20 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 09:57:20 --> Final output sent to browser
DEBUG - 2018-01-22 09:57:20 --> Total execution time: 0.0795
INFO - 2018-01-22 01:57:25 --> Config Class Initialized
INFO - 2018-01-22 01:57:25 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:57:25 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:57:25 --> Utf8 Class Initialized
INFO - 2018-01-22 01:57:25 --> URI Class Initialized
INFO - 2018-01-22 01:57:25 --> Router Class Initialized
INFO - 2018-01-22 01:57:25 --> Output Class Initialized
INFO - 2018-01-22 01:57:25 --> Security Class Initialized
DEBUG - 2018-01-22 01:57:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:57:25 --> Input Class Initialized
INFO - 2018-01-22 01:57:25 --> Language Class Initialized
INFO - 2018-01-22 01:57:25 --> Loader Class Initialized
INFO - 2018-01-22 01:57:25 --> Helper loaded: url_helper
INFO - 2018-01-22 01:57:25 --> Helper loaded: general_helper
INFO - 2018-01-22 01:57:25 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:57:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:57:25 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:57:25 --> Controller Class Initialized
INFO - 2018-01-22 01:57:25 --> Model Class Initialized
INFO - 2018-01-22 09:57:25 --> Final output sent to browser
DEBUG - 2018-01-22 09:57:25 --> Total execution time: 0.0545
INFO - 2018-01-22 01:57:34 --> Config Class Initialized
INFO - 2018-01-22 01:57:34 --> Hooks Class Initialized
DEBUG - 2018-01-22 01:57:34 --> UTF-8 Support Enabled
INFO - 2018-01-22 01:57:34 --> Utf8 Class Initialized
INFO - 2018-01-22 01:57:34 --> URI Class Initialized
INFO - 2018-01-22 01:57:34 --> Router Class Initialized
INFO - 2018-01-22 01:57:34 --> Output Class Initialized
INFO - 2018-01-22 01:57:34 --> Security Class Initialized
DEBUG - 2018-01-22 01:57:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 01:57:34 --> Input Class Initialized
INFO - 2018-01-22 01:57:34 --> Language Class Initialized
INFO - 2018-01-22 01:57:34 --> Loader Class Initialized
INFO - 2018-01-22 01:57:34 --> Helper loaded: url_helper
INFO - 2018-01-22 01:57:34 --> Helper loaded: general_helper
INFO - 2018-01-22 01:57:34 --> Database Driver Class Initialized
DEBUG - 2018-01-22 01:57:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 01:57:34 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 01:57:34 --> Controller Class Initialized
INFO - 2018-01-22 01:57:34 --> Model Class Initialized
INFO - 2018-01-22 09:57:34 --> Final output sent to browser
DEBUG - 2018-01-22 09:57:34 --> Total execution time: 0.0608
INFO - 2018-01-22 02:00:37 --> Config Class Initialized
INFO - 2018-01-22 02:00:37 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:00:37 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:00:37 --> Utf8 Class Initialized
INFO - 2018-01-22 02:00:37 --> URI Class Initialized
INFO - 2018-01-22 02:00:37 --> Router Class Initialized
INFO - 2018-01-22 02:00:37 --> Output Class Initialized
INFO - 2018-01-22 02:00:37 --> Security Class Initialized
DEBUG - 2018-01-22 02:00:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:00:37 --> Input Class Initialized
INFO - 2018-01-22 02:00:37 --> Language Class Initialized
INFO - 2018-01-22 02:00:37 --> Loader Class Initialized
INFO - 2018-01-22 02:00:37 --> Helper loaded: url_helper
INFO - 2018-01-22 02:00:37 --> Helper loaded: general_helper
INFO - 2018-01-22 02:00:37 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:00:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:00:37 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:00:37 --> Controller Class Initialized
INFO - 2018-01-22 02:00:37 --> Model Class Initialized
ERROR - 2018-01-22 10:00:37 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:00:37 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:00:37 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:00:37 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:00:37 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:00:37 --> Final output sent to browser
DEBUG - 2018-01-22 10:00:37 --> Total execution time: 0.1200
INFO - 2018-01-22 02:00:42 --> Config Class Initialized
INFO - 2018-01-22 02:00:42 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:00:42 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:00:42 --> Utf8 Class Initialized
INFO - 2018-01-22 02:00:42 --> URI Class Initialized
INFO - 2018-01-22 02:00:42 --> Router Class Initialized
INFO - 2018-01-22 02:00:42 --> Output Class Initialized
INFO - 2018-01-22 02:00:42 --> Security Class Initialized
DEBUG - 2018-01-22 02:00:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:00:42 --> Input Class Initialized
INFO - 2018-01-22 02:00:42 --> Language Class Initialized
INFO - 2018-01-22 02:00:42 --> Loader Class Initialized
INFO - 2018-01-22 02:00:42 --> Helper loaded: url_helper
INFO - 2018-01-22 02:00:42 --> Helper loaded: general_helper
INFO - 2018-01-22 02:00:42 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:00:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:00:42 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:00:42 --> Controller Class Initialized
INFO - 2018-01-22 02:00:42 --> Model Class Initialized
INFO - 2018-01-22 10:00:42 --> Final output sent to browser
DEBUG - 2018-01-22 10:00:42 --> Total execution time: 0.0919
INFO - 2018-01-22 02:02:09 --> Config Class Initialized
INFO - 2018-01-22 02:02:09 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:02:09 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:02:09 --> Utf8 Class Initialized
INFO - 2018-01-22 02:02:09 --> URI Class Initialized
INFO - 2018-01-22 02:02:09 --> Router Class Initialized
INFO - 2018-01-22 02:02:09 --> Output Class Initialized
INFO - 2018-01-22 02:02:09 --> Security Class Initialized
DEBUG - 2018-01-22 02:02:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:02:09 --> Input Class Initialized
INFO - 2018-01-22 02:02:09 --> Language Class Initialized
INFO - 2018-01-22 02:02:09 --> Loader Class Initialized
INFO - 2018-01-22 02:02:09 --> Helper loaded: url_helper
INFO - 2018-01-22 02:02:09 --> Helper loaded: general_helper
INFO - 2018-01-22 02:02:09 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:02:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:02:09 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:02:09 --> Controller Class Initialized
INFO - 2018-01-22 02:02:09 --> Model Class Initialized
ERROR - 2018-01-22 10:02:09 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:02:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:02:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:02:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:02:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:02:09 --> Final output sent to browser
DEBUG - 2018-01-22 10:02:09 --> Total execution time: 0.0489
INFO - 2018-01-22 02:03:02 --> Config Class Initialized
INFO - 2018-01-22 02:03:02 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:03:02 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:03:02 --> Utf8 Class Initialized
INFO - 2018-01-22 02:03:02 --> URI Class Initialized
INFO - 2018-01-22 02:03:02 --> Router Class Initialized
INFO - 2018-01-22 02:03:02 --> Output Class Initialized
INFO - 2018-01-22 02:03:02 --> Security Class Initialized
DEBUG - 2018-01-22 02:03:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:03:02 --> Input Class Initialized
INFO - 2018-01-22 02:03:02 --> Language Class Initialized
INFO - 2018-01-22 02:03:02 --> Loader Class Initialized
INFO - 2018-01-22 02:03:02 --> Helper loaded: url_helper
INFO - 2018-01-22 02:03:02 --> Helper loaded: general_helper
INFO - 2018-01-22 02:03:02 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:03:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:03:02 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:03:02 --> Controller Class Initialized
INFO - 2018-01-22 02:03:02 --> Model Class Initialized
ERROR - 2018-01-22 10:03:02 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:03:02 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:03:02 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:03:02 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:03:02 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:03:02 --> Final output sent to browser
DEBUG - 2018-01-22 10:03:02 --> Total execution time: 0.0534
INFO - 2018-01-22 02:18:09 --> Config Class Initialized
INFO - 2018-01-22 02:18:09 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:18:09 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:18:09 --> Utf8 Class Initialized
INFO - 2018-01-22 02:18:09 --> URI Class Initialized
INFO - 2018-01-22 02:18:09 --> Router Class Initialized
INFO - 2018-01-22 02:18:09 --> Output Class Initialized
INFO - 2018-01-22 02:18:09 --> Security Class Initialized
DEBUG - 2018-01-22 02:18:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:18:09 --> Input Class Initialized
INFO - 2018-01-22 02:18:09 --> Language Class Initialized
INFO - 2018-01-22 02:18:09 --> Loader Class Initialized
INFO - 2018-01-22 02:18:09 --> Helper loaded: url_helper
INFO - 2018-01-22 02:18:09 --> Helper loaded: general_helper
INFO - 2018-01-22 02:18:09 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:18:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:18:09 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:18:09 --> Controller Class Initialized
INFO - 2018-01-22 02:18:09 --> Model Class Initialized
ERROR - 2018-01-22 10:18:09 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:18:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:18:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:18:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:18:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:18:09 --> Final output sent to browser
DEBUG - 2018-01-22 10:18:09 --> Total execution time: 0.1488
INFO - 2018-01-22 02:18:12 --> Config Class Initialized
INFO - 2018-01-22 02:18:12 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:18:12 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:18:12 --> Utf8 Class Initialized
INFO - 2018-01-22 02:18:12 --> URI Class Initialized
INFO - 2018-01-22 02:18:12 --> Router Class Initialized
INFO - 2018-01-22 02:18:12 --> Output Class Initialized
INFO - 2018-01-22 02:18:12 --> Security Class Initialized
DEBUG - 2018-01-22 02:18:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:18:12 --> Input Class Initialized
INFO - 2018-01-22 02:18:12 --> Language Class Initialized
INFO - 2018-01-22 02:18:12 --> Loader Class Initialized
INFO - 2018-01-22 02:18:12 --> Helper loaded: url_helper
INFO - 2018-01-22 02:18:12 --> Helper loaded: general_helper
INFO - 2018-01-22 02:18:12 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:18:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:18:12 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:18:12 --> Controller Class Initialized
INFO - 2018-01-22 02:18:12 --> Model Class Initialized
INFO - 2018-01-22 10:18:12 --> Final output sent to browser
DEBUG - 2018-01-22 10:18:12 --> Total execution time: 0.0578
INFO - 2018-01-22 02:18:44 --> Config Class Initialized
INFO - 2018-01-22 02:18:44 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:18:44 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:18:44 --> Utf8 Class Initialized
INFO - 2018-01-22 02:18:44 --> URI Class Initialized
INFO - 2018-01-22 02:18:44 --> Router Class Initialized
INFO - 2018-01-22 02:18:44 --> Output Class Initialized
INFO - 2018-01-22 02:18:44 --> Security Class Initialized
DEBUG - 2018-01-22 02:18:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:18:44 --> Input Class Initialized
INFO - 2018-01-22 02:18:44 --> Language Class Initialized
INFO - 2018-01-22 02:18:44 --> Loader Class Initialized
INFO - 2018-01-22 02:18:44 --> Helper loaded: url_helper
INFO - 2018-01-22 02:18:44 --> Helper loaded: general_helper
INFO - 2018-01-22 02:18:44 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:18:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:18:44 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:18:44 --> Controller Class Initialized
INFO - 2018-01-22 02:18:44 --> Model Class Initialized
ERROR - 2018-01-22 10:18:44 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:18:44 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:18:44 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:18:44 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:18:44 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:18:44 --> Final output sent to browser
DEBUG - 2018-01-22 10:18:44 --> Total execution time: 0.0551
INFO - 2018-01-22 02:18:51 --> Config Class Initialized
INFO - 2018-01-22 02:18:51 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:18:51 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:18:51 --> Utf8 Class Initialized
INFO - 2018-01-22 02:18:51 --> URI Class Initialized
INFO - 2018-01-22 02:18:51 --> Router Class Initialized
INFO - 2018-01-22 02:18:51 --> Output Class Initialized
INFO - 2018-01-22 02:18:51 --> Security Class Initialized
DEBUG - 2018-01-22 02:18:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:18:51 --> Input Class Initialized
INFO - 2018-01-22 02:18:51 --> Language Class Initialized
INFO - 2018-01-22 02:18:51 --> Loader Class Initialized
INFO - 2018-01-22 02:18:51 --> Helper loaded: url_helper
INFO - 2018-01-22 02:18:51 --> Helper loaded: general_helper
INFO - 2018-01-22 02:18:51 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:18:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:18:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:18:51 --> Controller Class Initialized
INFO - 2018-01-22 02:18:51 --> Model Class Initialized
INFO - 2018-01-22 10:18:51 --> Final output sent to browser
DEBUG - 2018-01-22 10:18:51 --> Total execution time: 0.0645
INFO - 2018-01-22 02:19:01 --> Config Class Initialized
INFO - 2018-01-22 02:19:01 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:19:01 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:19:01 --> Utf8 Class Initialized
INFO - 2018-01-22 02:19:01 --> URI Class Initialized
INFO - 2018-01-22 02:19:01 --> Router Class Initialized
INFO - 2018-01-22 02:19:01 --> Output Class Initialized
INFO - 2018-01-22 02:19:01 --> Security Class Initialized
DEBUG - 2018-01-22 02:19:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:19:01 --> Input Class Initialized
INFO - 2018-01-22 02:19:01 --> Language Class Initialized
INFO - 2018-01-22 02:19:01 --> Loader Class Initialized
INFO - 2018-01-22 02:19:01 --> Helper loaded: url_helper
INFO - 2018-01-22 02:19:01 --> Helper loaded: general_helper
INFO - 2018-01-22 02:19:01 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:19:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:19:01 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:19:01 --> Controller Class Initialized
INFO - 2018-01-22 02:19:01 --> Model Class Initialized
INFO - 2018-01-22 10:19:01 --> Final output sent to browser
DEBUG - 2018-01-22 10:19:01 --> Total execution time: 0.0773
INFO - 2018-01-22 02:19:16 --> Config Class Initialized
INFO - 2018-01-22 02:19:16 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:19:16 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:19:16 --> Utf8 Class Initialized
INFO - 2018-01-22 02:19:16 --> URI Class Initialized
INFO - 2018-01-22 02:19:16 --> Router Class Initialized
INFO - 2018-01-22 02:19:16 --> Output Class Initialized
INFO - 2018-01-22 02:19:16 --> Security Class Initialized
DEBUG - 2018-01-22 02:19:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:19:16 --> Input Class Initialized
INFO - 2018-01-22 02:19:16 --> Language Class Initialized
INFO - 2018-01-22 02:19:16 --> Loader Class Initialized
INFO - 2018-01-22 02:19:16 --> Helper loaded: url_helper
INFO - 2018-01-22 02:19:16 --> Helper loaded: general_helper
INFO - 2018-01-22 02:19:16 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:19:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:19:16 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:19:16 --> Controller Class Initialized
INFO - 2018-01-22 02:19:16 --> Model Class Initialized
INFO - 2018-01-22 10:19:16 --> Final output sent to browser
DEBUG - 2018-01-22 10:19:16 --> Total execution time: 0.0951
INFO - 2018-01-22 02:19:35 --> Config Class Initialized
INFO - 2018-01-22 02:19:35 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:19:35 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:19:35 --> Utf8 Class Initialized
INFO - 2018-01-22 02:19:35 --> URI Class Initialized
INFO - 2018-01-22 02:19:35 --> Router Class Initialized
INFO - 2018-01-22 02:19:35 --> Output Class Initialized
INFO - 2018-01-22 02:19:35 --> Security Class Initialized
DEBUG - 2018-01-22 02:19:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:19:35 --> Input Class Initialized
INFO - 2018-01-22 02:19:35 --> Language Class Initialized
INFO - 2018-01-22 02:19:35 --> Loader Class Initialized
INFO - 2018-01-22 02:19:35 --> Helper loaded: url_helper
INFO - 2018-01-22 02:19:35 --> Helper loaded: general_helper
INFO - 2018-01-22 02:19:35 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:19:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:19:35 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:19:35 --> Controller Class Initialized
INFO - 2018-01-22 02:19:35 --> Model Class Initialized
INFO - 2018-01-22 10:19:35 --> Final output sent to browser
DEBUG - 2018-01-22 10:19:35 --> Total execution time: 0.0550
INFO - 2018-01-22 02:20:14 --> Config Class Initialized
INFO - 2018-01-22 02:20:14 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:20:14 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:20:14 --> Utf8 Class Initialized
INFO - 2018-01-22 02:20:14 --> URI Class Initialized
INFO - 2018-01-22 02:20:14 --> Router Class Initialized
INFO - 2018-01-22 02:20:14 --> Output Class Initialized
INFO - 2018-01-22 02:20:14 --> Security Class Initialized
DEBUG - 2018-01-22 02:20:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:20:14 --> Input Class Initialized
INFO - 2018-01-22 02:20:14 --> Language Class Initialized
INFO - 2018-01-22 02:20:14 --> Loader Class Initialized
INFO - 2018-01-22 02:20:14 --> Helper loaded: url_helper
INFO - 2018-01-22 02:20:14 --> Helper loaded: general_helper
INFO - 2018-01-22 02:20:14 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:20:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:20:14 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:20:14 --> Controller Class Initialized
INFO - 2018-01-22 02:20:14 --> Model Class Initialized
ERROR - 2018-01-22 10:20:14 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:20:14 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:20:14 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:20:14 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:20:14 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:20:14 --> Final output sent to browser
DEBUG - 2018-01-22 10:20:14 --> Total execution time: 0.0777
INFO - 2018-01-22 02:20:17 --> Config Class Initialized
INFO - 2018-01-22 02:20:17 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:20:17 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:20:17 --> Utf8 Class Initialized
INFO - 2018-01-22 02:20:17 --> URI Class Initialized
INFO - 2018-01-22 02:20:17 --> Router Class Initialized
INFO - 2018-01-22 02:20:17 --> Output Class Initialized
INFO - 2018-01-22 02:20:17 --> Security Class Initialized
DEBUG - 2018-01-22 02:20:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:20:17 --> Input Class Initialized
INFO - 2018-01-22 02:20:17 --> Language Class Initialized
INFO - 2018-01-22 02:20:17 --> Loader Class Initialized
INFO - 2018-01-22 02:20:17 --> Helper loaded: url_helper
INFO - 2018-01-22 02:20:17 --> Helper loaded: general_helper
INFO - 2018-01-22 02:20:17 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:20:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:20:17 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:20:17 --> Controller Class Initialized
INFO - 2018-01-22 02:20:17 --> Model Class Initialized
ERROR - 2018-01-22 10:20:17 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:20:17 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:20:17 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:20:17 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:20:17 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:20:17 --> Final output sent to browser
DEBUG - 2018-01-22 10:20:17 --> Total execution time: 0.0522
INFO - 2018-01-22 02:20:19 --> Config Class Initialized
INFO - 2018-01-22 02:20:19 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:20:19 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:20:19 --> Utf8 Class Initialized
INFO - 2018-01-22 02:20:19 --> URI Class Initialized
INFO - 2018-01-22 02:20:19 --> Router Class Initialized
INFO - 2018-01-22 02:20:20 --> Output Class Initialized
INFO - 2018-01-22 02:20:20 --> Security Class Initialized
DEBUG - 2018-01-22 02:20:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:20:20 --> Input Class Initialized
INFO - 2018-01-22 02:20:20 --> Language Class Initialized
INFO - 2018-01-22 02:20:20 --> Loader Class Initialized
INFO - 2018-01-22 02:20:20 --> Helper loaded: url_helper
INFO - 2018-01-22 02:20:20 --> Helper loaded: general_helper
INFO - 2018-01-22 02:20:20 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:20:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:20:20 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:20:20 --> Controller Class Initialized
INFO - 2018-01-22 02:20:20 --> Model Class Initialized
INFO - 2018-01-22 10:20:20 --> Final output sent to browser
DEBUG - 2018-01-22 10:20:20 --> Total execution time: 0.0922
INFO - 2018-01-22 02:20:42 --> Config Class Initialized
INFO - 2018-01-22 02:20:42 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:20:42 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:20:42 --> Utf8 Class Initialized
INFO - 2018-01-22 02:20:42 --> URI Class Initialized
INFO - 2018-01-22 02:20:42 --> Router Class Initialized
INFO - 2018-01-22 02:20:42 --> Output Class Initialized
INFO - 2018-01-22 02:20:42 --> Security Class Initialized
DEBUG - 2018-01-22 02:20:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:20:42 --> Input Class Initialized
INFO - 2018-01-22 02:20:42 --> Language Class Initialized
INFO - 2018-01-22 02:20:42 --> Loader Class Initialized
INFO - 2018-01-22 02:20:42 --> Helper loaded: url_helper
INFO - 2018-01-22 02:20:42 --> Helper loaded: general_helper
INFO - 2018-01-22 02:20:42 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:20:42 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:20:42 --> Controller Class Initialized
INFO - 2018-01-22 02:20:42 --> Model Class Initialized
ERROR - 2018-01-22 10:20:45 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:20:49 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:20:49 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:20:56 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:20:56 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:20:56 --> Final output sent to browser
DEBUG - 2018-01-22 10:20:56 --> Total execution time: 14.3258
INFO - 2018-01-22 02:21:01 --> Config Class Initialized
INFO - 2018-01-22 02:21:01 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:21:01 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:21:01 --> Utf8 Class Initialized
INFO - 2018-01-22 02:21:01 --> URI Class Initialized
INFO - 2018-01-22 02:21:01 --> Router Class Initialized
INFO - 2018-01-22 02:21:01 --> Output Class Initialized
INFO - 2018-01-22 02:21:01 --> Security Class Initialized
DEBUG - 2018-01-22 02:21:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:21:01 --> Input Class Initialized
INFO - 2018-01-22 02:21:01 --> Language Class Initialized
INFO - 2018-01-22 02:21:01 --> Loader Class Initialized
INFO - 2018-01-22 02:21:01 --> Helper loaded: url_helper
INFO - 2018-01-22 02:21:01 --> Helper loaded: general_helper
INFO - 2018-01-22 02:21:01 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:21:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:21:01 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:21:01 --> Controller Class Initialized
INFO - 2018-01-22 02:21:01 --> Model Class Initialized
INFO - 2018-01-22 02:22:49 --> Config Class Initialized
INFO - 2018-01-22 02:22:49 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:22:49 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:22:49 --> Utf8 Class Initialized
INFO - 2018-01-22 02:22:49 --> URI Class Initialized
INFO - 2018-01-22 02:22:49 --> Router Class Initialized
INFO - 2018-01-22 02:22:49 --> Output Class Initialized
INFO - 2018-01-22 02:22:49 --> Security Class Initialized
DEBUG - 2018-01-22 02:22:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:22:49 --> Input Class Initialized
INFO - 2018-01-22 02:22:49 --> Language Class Initialized
INFO - 2018-01-22 02:22:49 --> Loader Class Initialized
INFO - 2018-01-22 02:22:49 --> Helper loaded: url_helper
INFO - 2018-01-22 02:22:49 --> Helper loaded: general_helper
INFO - 2018-01-22 02:22:49 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:22:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:22:52 --> Config Class Initialized
INFO - 2018-01-22 02:22:52 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:22:52 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:22:52 --> Utf8 Class Initialized
INFO - 2018-01-22 02:22:52 --> URI Class Initialized
INFO - 2018-01-22 02:22:52 --> Router Class Initialized
INFO - 2018-01-22 02:22:52 --> Output Class Initialized
INFO - 2018-01-22 02:22:52 --> Security Class Initialized
DEBUG - 2018-01-22 02:22:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:22:52 --> Input Class Initialized
INFO - 2018-01-22 02:22:52 --> Language Class Initialized
INFO - 2018-01-22 02:22:52 --> Loader Class Initialized
INFO - 2018-01-22 02:22:52 --> Helper loaded: url_helper
INFO - 2018-01-22 02:22:52 --> Helper loaded: general_helper
INFO - 2018-01-22 02:22:52 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:22:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 10:22:57 --> Final output sent to browser
DEBUG - 2018-01-22 10:22:57 --> Total execution time: 116.0718
INFO - 2018-01-22 02:22:57 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:22:57 --> Controller Class Initialized
INFO - 2018-01-22 02:22:57 --> Model Class Initialized
ERROR - 2018-01-22 10:22:57 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:22:57 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:22:57 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:22:57 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:22:57 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 02:22:57 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:22:57 --> Controller Class Initialized
INFO - 2018-01-22 02:22:57 --> Model Class Initialized
ERROR - 2018-01-22 10:22:57 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:22:57 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:22:57 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:22:57 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:22:57 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:22:57 --> Final output sent to browser
DEBUG - 2018-01-22 10:22:57 --> Total execution time: 4.3899
INFO - 2018-01-22 02:23:04 --> Config Class Initialized
INFO - 2018-01-22 02:23:04 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:23:04 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:23:04 --> Utf8 Class Initialized
INFO - 2018-01-22 02:23:04 --> URI Class Initialized
INFO - 2018-01-22 02:23:04 --> Router Class Initialized
INFO - 2018-01-22 02:23:04 --> Output Class Initialized
INFO - 2018-01-22 02:23:04 --> Security Class Initialized
DEBUG - 2018-01-22 02:23:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:23:04 --> Input Class Initialized
INFO - 2018-01-22 02:23:04 --> Language Class Initialized
INFO - 2018-01-22 02:23:04 --> Loader Class Initialized
INFO - 2018-01-22 02:23:04 --> Helper loaded: url_helper
INFO - 2018-01-22 02:23:04 --> Helper loaded: general_helper
INFO - 2018-01-22 02:23:04 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:23:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:23:04 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:23:04 --> Controller Class Initialized
INFO - 2018-01-22 02:23:04 --> Model Class Initialized
ERROR - 2018-01-22 10:23:04 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:23:04 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:23:04 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:23:04 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:23:04 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:23:04 --> Final output sent to browser
DEBUG - 2018-01-22 10:23:04 --> Total execution time: 0.0482
INFO - 2018-01-22 02:23:07 --> Config Class Initialized
INFO - 2018-01-22 02:23:07 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:23:07 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:23:07 --> Utf8 Class Initialized
INFO - 2018-01-22 02:23:07 --> URI Class Initialized
INFO - 2018-01-22 02:23:07 --> Router Class Initialized
INFO - 2018-01-22 02:23:07 --> Output Class Initialized
INFO - 2018-01-22 02:23:07 --> Security Class Initialized
DEBUG - 2018-01-22 02:23:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:23:07 --> Input Class Initialized
INFO - 2018-01-22 02:23:07 --> Language Class Initialized
INFO - 2018-01-22 02:23:07 --> Loader Class Initialized
INFO - 2018-01-22 02:23:07 --> Helper loaded: url_helper
INFO - 2018-01-22 02:23:07 --> Helper loaded: general_helper
INFO - 2018-01-22 02:23:07 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:23:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:23:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:23:07 --> Controller Class Initialized
INFO - 2018-01-22 02:23:07 --> Model Class Initialized
INFO - 2018-01-22 10:23:07 --> Final output sent to browser
DEBUG - 2018-01-22 10:23:07 --> Total execution time: 0.0679
INFO - 2018-01-22 02:23:18 --> Config Class Initialized
INFO - 2018-01-22 02:23:18 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:23:18 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:23:18 --> Utf8 Class Initialized
INFO - 2018-01-22 02:23:18 --> URI Class Initialized
INFO - 2018-01-22 02:23:18 --> Router Class Initialized
INFO - 2018-01-22 02:23:18 --> Output Class Initialized
INFO - 2018-01-22 02:23:18 --> Security Class Initialized
DEBUG - 2018-01-22 02:23:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:23:18 --> Input Class Initialized
INFO - 2018-01-22 02:23:18 --> Language Class Initialized
INFO - 2018-01-22 02:23:18 --> Loader Class Initialized
INFO - 2018-01-22 02:23:18 --> Helper loaded: url_helper
INFO - 2018-01-22 02:23:18 --> Helper loaded: general_helper
INFO - 2018-01-22 02:23:18 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:23:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:23:18 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:23:18 --> Controller Class Initialized
INFO - 2018-01-22 02:23:18 --> Model Class Initialized
ERROR - 2018-01-22 10:23:18 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:23:18 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:23:18 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:23:18 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:23:18 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:23:18 --> Final output sent to browser
DEBUG - 2018-01-22 10:23:18 --> Total execution time: 0.0512
INFO - 2018-01-22 02:23:54 --> Config Class Initialized
INFO - 2018-01-22 02:23:54 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:23:54 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:23:54 --> Utf8 Class Initialized
INFO - 2018-01-22 02:23:54 --> URI Class Initialized
INFO - 2018-01-22 02:23:54 --> Router Class Initialized
INFO - 2018-01-22 02:23:54 --> Output Class Initialized
INFO - 2018-01-22 02:23:54 --> Security Class Initialized
DEBUG - 2018-01-22 02:23:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:23:54 --> Input Class Initialized
INFO - 2018-01-22 02:23:54 --> Language Class Initialized
INFO - 2018-01-22 02:23:54 --> Loader Class Initialized
INFO - 2018-01-22 02:23:54 --> Helper loaded: url_helper
INFO - 2018-01-22 02:23:54 --> Helper loaded: general_helper
INFO - 2018-01-22 02:23:54 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:23:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:23:54 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:23:54 --> Controller Class Initialized
INFO - 2018-01-22 02:23:54 --> Model Class Initialized
ERROR - 2018-01-22 10:23:54 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:23:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:23:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:23:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:23:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:23:54 --> Final output sent to browser
DEBUG - 2018-01-22 10:23:54 --> Total execution time: 0.0589
INFO - 2018-01-22 02:23:57 --> Config Class Initialized
INFO - 2018-01-22 02:23:57 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:23:57 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:23:57 --> Utf8 Class Initialized
INFO - 2018-01-22 02:23:57 --> URI Class Initialized
INFO - 2018-01-22 02:23:57 --> Router Class Initialized
INFO - 2018-01-22 02:23:57 --> Output Class Initialized
INFO - 2018-01-22 02:23:57 --> Security Class Initialized
DEBUG - 2018-01-22 02:23:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:23:57 --> Input Class Initialized
INFO - 2018-01-22 02:23:57 --> Language Class Initialized
INFO - 2018-01-22 02:23:57 --> Loader Class Initialized
INFO - 2018-01-22 02:23:57 --> Helper loaded: url_helper
INFO - 2018-01-22 02:23:57 --> Helper loaded: general_helper
INFO - 2018-01-22 02:23:57 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:23:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:23:57 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:23:57 --> Controller Class Initialized
INFO - 2018-01-22 02:23:57 --> Model Class Initialized
INFO - 2018-01-22 10:23:57 --> Final output sent to browser
DEBUG - 2018-01-22 10:23:57 --> Total execution time: 0.1015
INFO - 2018-01-22 02:24:03 --> Config Class Initialized
INFO - 2018-01-22 02:24:03 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:24:03 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:24:03 --> Utf8 Class Initialized
INFO - 2018-01-22 02:24:03 --> URI Class Initialized
INFO - 2018-01-22 02:24:03 --> Router Class Initialized
INFO - 2018-01-22 02:24:03 --> Output Class Initialized
INFO - 2018-01-22 02:24:03 --> Security Class Initialized
DEBUG - 2018-01-22 02:24:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:24:03 --> Input Class Initialized
INFO - 2018-01-22 02:24:03 --> Language Class Initialized
INFO - 2018-01-22 02:24:03 --> Loader Class Initialized
INFO - 2018-01-22 02:24:03 --> Helper loaded: url_helper
INFO - 2018-01-22 02:24:03 --> Helper loaded: general_helper
INFO - 2018-01-22 02:24:03 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:24:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:24:03 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:24:03 --> Controller Class Initialized
INFO - 2018-01-22 02:24:03 --> Model Class Initialized
INFO - 2018-01-22 10:24:03 --> Final output sent to browser
DEBUG - 2018-01-22 10:24:03 --> Total execution time: 0.0500
INFO - 2018-01-22 02:24:16 --> Config Class Initialized
INFO - 2018-01-22 02:24:16 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:24:16 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:24:16 --> Utf8 Class Initialized
INFO - 2018-01-22 02:24:16 --> URI Class Initialized
INFO - 2018-01-22 02:24:16 --> Router Class Initialized
INFO - 2018-01-22 02:24:16 --> Output Class Initialized
INFO - 2018-01-22 02:24:16 --> Security Class Initialized
DEBUG - 2018-01-22 02:24:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:24:16 --> Input Class Initialized
INFO - 2018-01-22 02:24:16 --> Language Class Initialized
INFO - 2018-01-22 02:24:16 --> Loader Class Initialized
INFO - 2018-01-22 02:24:16 --> Helper loaded: url_helper
INFO - 2018-01-22 02:24:16 --> Helper loaded: general_helper
INFO - 2018-01-22 02:24:16 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:24:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:24:16 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:24:16 --> Controller Class Initialized
INFO - 2018-01-22 02:24:16 --> Model Class Initialized
INFO - 2018-01-22 10:24:16 --> Final output sent to browser
DEBUG - 2018-01-22 10:24:16 --> Total execution time: 0.0713
INFO - 2018-01-22 02:24:48 --> Config Class Initialized
INFO - 2018-01-22 02:24:48 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:24:48 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:24:48 --> Utf8 Class Initialized
INFO - 2018-01-22 02:24:48 --> URI Class Initialized
INFO - 2018-01-22 02:24:48 --> Router Class Initialized
INFO - 2018-01-22 02:24:48 --> Output Class Initialized
INFO - 2018-01-22 02:24:48 --> Security Class Initialized
DEBUG - 2018-01-22 02:24:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:24:48 --> Input Class Initialized
INFO - 2018-01-22 02:24:48 --> Language Class Initialized
INFO - 2018-01-22 02:24:48 --> Loader Class Initialized
INFO - 2018-01-22 02:24:48 --> Helper loaded: url_helper
INFO - 2018-01-22 02:24:48 --> Helper loaded: general_helper
INFO - 2018-01-22 02:24:48 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:24:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:24:48 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:24:48 --> Controller Class Initialized
INFO - 2018-01-22 02:24:48 --> Model Class Initialized
INFO - 2018-01-22 10:24:48 --> Final output sent to browser
DEBUG - 2018-01-22 10:24:48 --> Total execution time: 0.0645
INFO - 2018-01-22 02:24:52 --> Config Class Initialized
INFO - 2018-01-22 02:24:52 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:24:52 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:24:52 --> Utf8 Class Initialized
INFO - 2018-01-22 02:24:52 --> URI Class Initialized
INFO - 2018-01-22 02:24:52 --> Router Class Initialized
INFO - 2018-01-22 02:24:52 --> Output Class Initialized
INFO - 2018-01-22 02:24:52 --> Security Class Initialized
DEBUG - 2018-01-22 02:24:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:24:52 --> Input Class Initialized
INFO - 2018-01-22 02:24:52 --> Language Class Initialized
INFO - 2018-01-22 02:24:52 --> Loader Class Initialized
INFO - 2018-01-22 02:24:52 --> Helper loaded: url_helper
INFO - 2018-01-22 02:24:52 --> Helper loaded: general_helper
INFO - 2018-01-22 02:24:52 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:24:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:24:52 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:24:52 --> Controller Class Initialized
INFO - 2018-01-22 02:24:52 --> Model Class Initialized
INFO - 2018-01-22 10:24:52 --> Final output sent to browser
DEBUG - 2018-01-22 10:24:52 --> Total execution time: 0.0781
INFO - 2018-01-22 02:25:05 --> Config Class Initialized
INFO - 2018-01-22 02:25:05 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:25:05 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:25:05 --> Utf8 Class Initialized
INFO - 2018-01-22 02:25:05 --> URI Class Initialized
INFO - 2018-01-22 02:25:05 --> Router Class Initialized
INFO - 2018-01-22 02:25:05 --> Output Class Initialized
INFO - 2018-01-22 02:25:05 --> Security Class Initialized
DEBUG - 2018-01-22 02:25:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:25:05 --> Input Class Initialized
INFO - 2018-01-22 02:25:05 --> Language Class Initialized
INFO - 2018-01-22 02:25:05 --> Loader Class Initialized
INFO - 2018-01-22 02:25:05 --> Helper loaded: url_helper
INFO - 2018-01-22 02:25:05 --> Helper loaded: general_helper
INFO - 2018-01-22 02:25:05 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:25:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:25:05 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:25:05 --> Controller Class Initialized
INFO - 2018-01-22 02:25:05 --> Model Class Initialized
INFO - 2018-01-22 10:25:05 --> Final output sent to browser
DEBUG - 2018-01-22 10:25:05 --> Total execution time: 0.0702
INFO - 2018-01-22 02:25:15 --> Config Class Initialized
INFO - 2018-01-22 02:25:15 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:25:15 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:25:15 --> Utf8 Class Initialized
INFO - 2018-01-22 02:25:15 --> URI Class Initialized
INFO - 2018-01-22 02:25:15 --> Router Class Initialized
INFO - 2018-01-22 02:25:15 --> Output Class Initialized
INFO - 2018-01-22 02:25:15 --> Security Class Initialized
DEBUG - 2018-01-22 02:25:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:25:15 --> Input Class Initialized
INFO - 2018-01-22 02:25:15 --> Language Class Initialized
INFO - 2018-01-22 02:25:15 --> Loader Class Initialized
INFO - 2018-01-22 02:25:15 --> Helper loaded: url_helper
INFO - 2018-01-22 02:25:15 --> Helper loaded: general_helper
INFO - 2018-01-22 02:25:15 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:25:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:25:15 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:25:15 --> Controller Class Initialized
INFO - 2018-01-22 02:25:15 --> Model Class Initialized
INFO - 2018-01-22 10:25:15 --> Final output sent to browser
DEBUG - 2018-01-22 10:25:15 --> Total execution time: 0.0646
INFO - 2018-01-22 02:25:22 --> Config Class Initialized
INFO - 2018-01-22 02:25:22 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:25:22 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:25:22 --> Utf8 Class Initialized
INFO - 2018-01-22 02:25:22 --> URI Class Initialized
INFO - 2018-01-22 02:25:22 --> Router Class Initialized
INFO - 2018-01-22 02:25:22 --> Output Class Initialized
INFO - 2018-01-22 02:25:22 --> Security Class Initialized
DEBUG - 2018-01-22 02:25:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:25:22 --> Input Class Initialized
INFO - 2018-01-22 02:25:22 --> Language Class Initialized
INFO - 2018-01-22 02:25:22 --> Loader Class Initialized
INFO - 2018-01-22 02:25:22 --> Helper loaded: url_helper
INFO - 2018-01-22 02:25:22 --> Helper loaded: general_helper
INFO - 2018-01-22 02:25:22 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:25:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:25:22 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:25:22 --> Controller Class Initialized
INFO - 2018-01-22 02:25:22 --> Model Class Initialized
INFO - 2018-01-22 10:25:22 --> Final output sent to browser
DEBUG - 2018-01-22 10:25:22 --> Total execution time: 0.0776
INFO - 2018-01-22 02:25:31 --> Config Class Initialized
INFO - 2018-01-22 02:25:31 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:25:31 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:25:31 --> Utf8 Class Initialized
INFO - 2018-01-22 02:25:31 --> URI Class Initialized
INFO - 2018-01-22 02:25:31 --> Router Class Initialized
INFO - 2018-01-22 02:25:31 --> Output Class Initialized
INFO - 2018-01-22 02:25:31 --> Security Class Initialized
DEBUG - 2018-01-22 02:25:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:25:31 --> Input Class Initialized
INFO - 2018-01-22 02:25:31 --> Language Class Initialized
INFO - 2018-01-22 02:25:31 --> Loader Class Initialized
INFO - 2018-01-22 02:25:31 --> Helper loaded: url_helper
INFO - 2018-01-22 02:25:31 --> Helper loaded: general_helper
INFO - 2018-01-22 02:25:31 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:25:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:25:31 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:25:31 --> Controller Class Initialized
INFO - 2018-01-22 02:25:31 --> Model Class Initialized
INFO - 2018-01-22 10:25:32 --> Final output sent to browser
DEBUG - 2018-01-22 10:25:32 --> Total execution time: 0.1044
INFO - 2018-01-22 02:27:06 --> Config Class Initialized
INFO - 2018-01-22 02:27:06 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:27:06 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:27:06 --> Utf8 Class Initialized
INFO - 2018-01-22 02:27:06 --> URI Class Initialized
INFO - 2018-01-22 02:27:06 --> Router Class Initialized
INFO - 2018-01-22 02:27:06 --> Output Class Initialized
INFO - 2018-01-22 02:27:06 --> Security Class Initialized
DEBUG - 2018-01-22 02:27:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:27:06 --> Input Class Initialized
INFO - 2018-01-22 02:27:06 --> Language Class Initialized
INFO - 2018-01-22 02:27:06 --> Loader Class Initialized
INFO - 2018-01-22 02:27:06 --> Helper loaded: url_helper
INFO - 2018-01-22 02:27:06 --> Helper loaded: general_helper
INFO - 2018-01-22 02:27:06 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:27:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:27:06 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:27:06 --> Controller Class Initialized
INFO - 2018-01-22 02:27:06 --> Model Class Initialized
ERROR - 2018-01-22 10:27:06 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:27:06 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:27:06 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:27:06 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:27:06 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:27:06 --> Final output sent to browser
DEBUG - 2018-01-22 10:27:06 --> Total execution time: 0.0570
INFO - 2018-01-22 02:27:09 --> Config Class Initialized
INFO - 2018-01-22 02:27:09 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:27:09 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:27:09 --> Utf8 Class Initialized
INFO - 2018-01-22 02:27:09 --> URI Class Initialized
INFO - 2018-01-22 02:27:09 --> Router Class Initialized
INFO - 2018-01-22 02:27:09 --> Output Class Initialized
INFO - 2018-01-22 02:27:09 --> Security Class Initialized
DEBUG - 2018-01-22 02:27:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:27:09 --> Input Class Initialized
INFO - 2018-01-22 02:27:09 --> Language Class Initialized
INFO - 2018-01-22 02:27:09 --> Loader Class Initialized
INFO - 2018-01-22 02:27:09 --> Helper loaded: url_helper
INFO - 2018-01-22 02:27:09 --> Helper loaded: general_helper
INFO - 2018-01-22 02:27:09 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:27:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:27:09 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:27:09 --> Controller Class Initialized
INFO - 2018-01-22 02:27:09 --> Model Class Initialized
INFO - 2018-01-22 10:27:09 --> Final output sent to browser
DEBUG - 2018-01-22 10:27:09 --> Total execution time: 0.0642
INFO - 2018-01-22 02:27:26 --> Config Class Initialized
INFO - 2018-01-22 02:27:26 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:27:26 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:27:26 --> Utf8 Class Initialized
INFO - 2018-01-22 02:27:26 --> URI Class Initialized
INFO - 2018-01-22 02:27:26 --> Router Class Initialized
INFO - 2018-01-22 02:27:26 --> Output Class Initialized
INFO - 2018-01-22 02:27:26 --> Security Class Initialized
DEBUG - 2018-01-22 02:27:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:27:26 --> Input Class Initialized
INFO - 2018-01-22 02:27:26 --> Language Class Initialized
INFO - 2018-01-22 02:27:26 --> Loader Class Initialized
INFO - 2018-01-22 02:27:26 --> Helper loaded: url_helper
INFO - 2018-01-22 02:27:26 --> Helper loaded: general_helper
INFO - 2018-01-22 02:27:26 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:27:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:27:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:27:26 --> Controller Class Initialized
INFO - 2018-01-22 02:27:26 --> Model Class Initialized
INFO - 2018-01-22 10:27:35 --> Final output sent to browser
DEBUG - 2018-01-22 10:27:35 --> Total execution time: 8.7877
INFO - 2018-01-22 02:30:16 --> Config Class Initialized
INFO - 2018-01-22 02:30:16 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:30:16 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:30:16 --> Utf8 Class Initialized
INFO - 2018-01-22 02:30:16 --> URI Class Initialized
INFO - 2018-01-22 02:30:16 --> Router Class Initialized
INFO - 2018-01-22 02:30:16 --> Output Class Initialized
INFO - 2018-01-22 02:30:16 --> Security Class Initialized
DEBUG - 2018-01-22 02:30:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:30:16 --> Input Class Initialized
INFO - 2018-01-22 02:30:16 --> Language Class Initialized
INFO - 2018-01-22 02:30:16 --> Loader Class Initialized
INFO - 2018-01-22 02:30:16 --> Helper loaded: url_helper
INFO - 2018-01-22 02:30:16 --> Helper loaded: general_helper
INFO - 2018-01-22 02:30:16 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:30:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:30:16 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:30:16 --> Controller Class Initialized
INFO - 2018-01-22 02:30:16 --> Model Class Initialized
ERROR - 2018-01-22 10:30:16 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:30:16 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:30:16 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:30:16 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:30:16 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:30:16 --> Final output sent to browser
DEBUG - 2018-01-22 10:30:16 --> Total execution time: 0.0540
INFO - 2018-01-22 02:30:22 --> Config Class Initialized
INFO - 2018-01-22 02:30:22 --> Config Class Initialized
INFO - 2018-01-22 02:30:22 --> Hooks Class Initialized
INFO - 2018-01-22 02:30:22 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:30:22 --> UTF-8 Support Enabled
DEBUG - 2018-01-22 02:30:22 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:30:22 --> Utf8 Class Initialized
INFO - 2018-01-22 02:30:22 --> Utf8 Class Initialized
INFO - 2018-01-22 02:30:22 --> URI Class Initialized
INFO - 2018-01-22 02:30:22 --> URI Class Initialized
INFO - 2018-01-22 02:30:22 --> Router Class Initialized
INFO - 2018-01-22 02:30:22 --> Router Class Initialized
INFO - 2018-01-22 02:30:22 --> Output Class Initialized
INFO - 2018-01-22 02:30:22 --> Output Class Initialized
INFO - 2018-01-22 02:30:22 --> Security Class Initialized
INFO - 2018-01-22 02:30:22 --> Security Class Initialized
DEBUG - 2018-01-22 02:30:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-01-22 02:30:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:30:22 --> Input Class Initialized
INFO - 2018-01-22 02:30:22 --> Input Class Initialized
INFO - 2018-01-22 02:30:22 --> Language Class Initialized
INFO - 2018-01-22 02:30:22 --> Language Class Initialized
INFO - 2018-01-22 02:30:22 --> Loader Class Initialized
INFO - 2018-01-22 02:30:22 --> Loader Class Initialized
INFO - 2018-01-22 02:30:22 --> Helper loaded: url_helper
INFO - 2018-01-22 02:30:22 --> Helper loaded: general_helper
INFO - 2018-01-22 02:30:22 --> Helper loaded: url_helper
INFO - 2018-01-22 02:30:22 --> Helper loaded: general_helper
INFO - 2018-01-22 02:30:22 --> Database Driver Class Initialized
INFO - 2018-01-22 02:30:22 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:30:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:30:22 --> Session: Class initialized using 'files' driver.
DEBUG - 2018-01-22 02:30:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:30:22 --> Controller Class Initialized
INFO - 2018-01-22 02:30:22 --> Model Class Initialized
INFO - 2018-01-22 10:30:22 --> Final output sent to browser
DEBUG - 2018-01-22 10:30:22 --> Total execution time: 0.0562
INFO - 2018-01-22 02:30:22 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:30:22 --> Controller Class Initialized
INFO - 2018-01-22 02:30:22 --> Model Class Initialized
INFO - 2018-01-22 10:30:22 --> Final output sent to browser
DEBUG - 2018-01-22 10:30:22 --> Total execution time: 0.0854
INFO - 2018-01-22 02:30:30 --> Config Class Initialized
INFO - 2018-01-22 02:30:30 --> Config Class Initialized
INFO - 2018-01-22 02:30:30 --> Hooks Class Initialized
INFO - 2018-01-22 02:30:30 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:30:30 --> UTF-8 Support Enabled
DEBUG - 2018-01-22 02:30:30 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:30:30 --> Utf8 Class Initialized
INFO - 2018-01-22 02:30:30 --> Utf8 Class Initialized
INFO - 2018-01-22 02:30:30 --> URI Class Initialized
INFO - 2018-01-22 02:30:30 --> URI Class Initialized
INFO - 2018-01-22 02:30:30 --> Router Class Initialized
INFO - 2018-01-22 02:30:30 --> Router Class Initialized
INFO - 2018-01-22 02:30:30 --> Output Class Initialized
INFO - 2018-01-22 02:30:30 --> Output Class Initialized
INFO - 2018-01-22 02:30:30 --> Security Class Initialized
INFO - 2018-01-22 02:30:30 --> Security Class Initialized
DEBUG - 2018-01-22 02:30:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:30:30 --> Input Class Initialized
DEBUG - 2018-01-22 02:30:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:30:30 --> Input Class Initialized
INFO - 2018-01-22 02:30:30 --> Language Class Initialized
INFO - 2018-01-22 02:30:30 --> Language Class Initialized
INFO - 2018-01-22 02:30:30 --> Loader Class Initialized
INFO - 2018-01-22 02:30:30 --> Loader Class Initialized
INFO - 2018-01-22 02:30:30 --> Helper loaded: url_helper
INFO - 2018-01-22 02:30:30 --> Helper loaded: general_helper
INFO - 2018-01-22 02:30:30 --> Helper loaded: url_helper
INFO - 2018-01-22 02:30:30 --> Helper loaded: general_helper
INFO - 2018-01-22 02:30:30 --> Database Driver Class Initialized
INFO - 2018-01-22 02:30:30 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:30:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-01-22 02:30:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:30:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:30:30 --> Controller Class Initialized
INFO - 2018-01-22 02:30:30 --> Model Class Initialized
INFO - 2018-01-22 10:30:30 --> Final output sent to browser
DEBUG - 2018-01-22 10:30:30 --> Total execution time: 0.0797
INFO - 2018-01-22 02:30:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:30:30 --> Controller Class Initialized
INFO - 2018-01-22 02:30:30 --> Model Class Initialized
INFO - 2018-01-22 10:30:30 --> Final output sent to browser
DEBUG - 2018-01-22 10:30:30 --> Total execution time: 0.1098
INFO - 2018-01-22 02:30:33 --> Config Class Initialized
INFO - 2018-01-22 02:30:33 --> Hooks Class Initialized
INFO - 2018-01-22 02:30:33 --> Config Class Initialized
DEBUG - 2018-01-22 02:30:33 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:30:33 --> Hooks Class Initialized
INFO - 2018-01-22 02:30:33 --> Utf8 Class Initialized
INFO - 2018-01-22 02:30:33 --> URI Class Initialized
DEBUG - 2018-01-22 02:30:33 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:30:33 --> Utf8 Class Initialized
INFO - 2018-01-22 02:30:33 --> Router Class Initialized
INFO - 2018-01-22 02:30:33 --> URI Class Initialized
INFO - 2018-01-22 02:30:33 --> Output Class Initialized
INFO - 2018-01-22 02:30:33 --> Router Class Initialized
INFO - 2018-01-22 02:30:33 --> Security Class Initialized
INFO - 2018-01-22 02:30:33 --> Output Class Initialized
DEBUG - 2018-01-22 02:30:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:30:33 --> Input Class Initialized
INFO - 2018-01-22 02:30:33 --> Security Class Initialized
INFO - 2018-01-22 02:30:33 --> Language Class Initialized
DEBUG - 2018-01-22 02:30:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:30:33 --> Input Class Initialized
INFO - 2018-01-22 02:30:33 --> Loader Class Initialized
INFO - 2018-01-22 02:30:33 --> Language Class Initialized
INFO - 2018-01-22 02:30:33 --> Helper loaded: url_helper
INFO - 2018-01-22 02:30:33 --> Helper loaded: general_helper
INFO - 2018-01-22 02:30:33 --> Loader Class Initialized
INFO - 2018-01-22 02:30:33 --> Helper loaded: url_helper
INFO - 2018-01-22 02:30:33 --> Helper loaded: general_helper
INFO - 2018-01-22 02:30:33 --> Database Driver Class Initialized
INFO - 2018-01-22 02:30:33 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:30:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:30:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:30:33 --> Controller Class Initialized
DEBUG - 2018-01-22 02:30:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:30:33 --> Model Class Initialized
INFO - 2018-01-22 10:30:33 --> Final output sent to browser
DEBUG - 2018-01-22 10:30:33 --> Total execution time: 0.0564
INFO - 2018-01-22 02:30:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:30:33 --> Controller Class Initialized
INFO - 2018-01-22 02:30:33 --> Model Class Initialized
INFO - 2018-01-22 10:30:33 --> Final output sent to browser
DEBUG - 2018-01-22 10:30:33 --> Total execution time: 0.0761
INFO - 2018-01-22 02:30:41 --> Config Class Initialized
INFO - 2018-01-22 02:30:41 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:30:41 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:30:41 --> Utf8 Class Initialized
INFO - 2018-01-22 02:30:41 --> URI Class Initialized
INFO - 2018-01-22 02:30:41 --> Router Class Initialized
INFO - 2018-01-22 02:30:41 --> Output Class Initialized
INFO - 2018-01-22 02:30:41 --> Security Class Initialized
DEBUG - 2018-01-22 02:30:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:30:41 --> Input Class Initialized
INFO - 2018-01-22 02:30:41 --> Language Class Initialized
INFO - 2018-01-22 02:30:41 --> Loader Class Initialized
INFO - 2018-01-22 02:30:41 --> Helper loaded: url_helper
INFO - 2018-01-22 02:30:41 --> Helper loaded: general_helper
INFO - 2018-01-22 02:30:41 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:30:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:30:41 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:30:41 --> Controller Class Initialized
INFO - 2018-01-22 02:30:41 --> Model Class Initialized
ERROR - 2018-01-22 10:30:43 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:30:46 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:30:46 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:30:46 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:30:46 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:30:46 --> Final output sent to browser
DEBUG - 2018-01-22 10:30:46 --> Total execution time: 5.5423
INFO - 2018-01-22 02:30:53 --> Config Class Initialized
INFO - 2018-01-22 02:30:53 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:30:53 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:30:53 --> Utf8 Class Initialized
INFO - 2018-01-22 02:30:53 --> URI Class Initialized
INFO - 2018-01-22 02:30:53 --> Router Class Initialized
INFO - 2018-01-22 02:30:53 --> Output Class Initialized
INFO - 2018-01-22 02:30:53 --> Security Class Initialized
DEBUG - 2018-01-22 02:30:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:30:53 --> Input Class Initialized
INFO - 2018-01-22 02:30:53 --> Language Class Initialized
INFO - 2018-01-22 02:30:53 --> Loader Class Initialized
INFO - 2018-01-22 02:30:53 --> Helper loaded: url_helper
INFO - 2018-01-22 02:30:53 --> Helper loaded: general_helper
INFO - 2018-01-22 02:30:53 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:30:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:30:53 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:30:53 --> Controller Class Initialized
INFO - 2018-01-22 02:30:53 --> Model Class Initialized
ERROR - 2018-01-22 10:30:55 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:31:01 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:31:01 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:31:01 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:31:01 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:31:01 --> Final output sent to browser
DEBUG - 2018-01-22 10:31:01 --> Total execution time: 7.9381
INFO - 2018-01-22 02:31:05 --> Config Class Initialized
INFO - 2018-01-22 02:31:05 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:31:05 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:31:05 --> Utf8 Class Initialized
INFO - 2018-01-22 02:31:05 --> URI Class Initialized
INFO - 2018-01-22 02:31:05 --> Router Class Initialized
INFO - 2018-01-22 02:31:05 --> Output Class Initialized
INFO - 2018-01-22 02:31:05 --> Security Class Initialized
DEBUG - 2018-01-22 02:31:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:31:05 --> Input Class Initialized
INFO - 2018-01-22 02:31:05 --> Language Class Initialized
INFO - 2018-01-22 02:31:05 --> Loader Class Initialized
INFO - 2018-01-22 02:31:05 --> Helper loaded: url_helper
INFO - 2018-01-22 02:31:05 --> Helper loaded: general_helper
INFO - 2018-01-22 02:31:05 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:31:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:31:05 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:31:05 --> Controller Class Initialized
INFO - 2018-01-22 02:31:05 --> Model Class Initialized
INFO - 2018-01-22 10:31:25 --> Final output sent to browser
DEBUG - 2018-01-22 10:31:25 --> Total execution time: 19.5314
INFO - 2018-01-22 02:31:39 --> Config Class Initialized
INFO - 2018-01-22 02:31:39 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:31:39 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:31:39 --> Utf8 Class Initialized
INFO - 2018-01-22 02:31:39 --> URI Class Initialized
INFO - 2018-01-22 02:31:39 --> Router Class Initialized
INFO - 2018-01-22 02:31:39 --> Output Class Initialized
INFO - 2018-01-22 02:31:39 --> Security Class Initialized
DEBUG - 2018-01-22 02:31:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:31:39 --> Input Class Initialized
INFO - 2018-01-22 02:31:39 --> Language Class Initialized
INFO - 2018-01-22 02:31:39 --> Loader Class Initialized
INFO - 2018-01-22 02:31:39 --> Helper loaded: url_helper
INFO - 2018-01-22 02:31:39 --> Helper loaded: general_helper
INFO - 2018-01-22 02:31:39 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:31:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:31:39 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:31:39 --> Controller Class Initialized
INFO - 2018-01-22 02:31:39 --> Model Class Initialized
INFO - 2018-01-22 10:32:37 --> Final output sent to browser
DEBUG - 2018-01-22 10:32:37 --> Total execution time: 57.8071
INFO - 2018-01-22 02:32:47 --> Config Class Initialized
INFO - 2018-01-22 02:32:47 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:32:47 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:32:47 --> Utf8 Class Initialized
INFO - 2018-01-22 02:32:47 --> URI Class Initialized
INFO - 2018-01-22 02:32:47 --> Router Class Initialized
INFO - 2018-01-22 02:32:47 --> Output Class Initialized
INFO - 2018-01-22 02:32:47 --> Security Class Initialized
DEBUG - 2018-01-22 02:32:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:32:47 --> Input Class Initialized
INFO - 2018-01-22 02:32:47 --> Language Class Initialized
INFO - 2018-01-22 02:32:47 --> Loader Class Initialized
INFO - 2018-01-22 02:32:47 --> Helper loaded: url_helper
INFO - 2018-01-22 02:32:47 --> Helper loaded: general_helper
INFO - 2018-01-22 02:32:47 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:32:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:32:47 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:32:47 --> Controller Class Initialized
INFO - 2018-01-22 02:32:47 --> Model Class Initialized
INFO - 2018-01-22 10:33:07 --> Final output sent to browser
DEBUG - 2018-01-22 10:33:07 --> Total execution time: 19.2836
INFO - 2018-01-22 02:33:07 --> Config Class Initialized
INFO - 2018-01-22 02:33:07 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:33:07 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:33:07 --> Utf8 Class Initialized
INFO - 2018-01-22 02:33:07 --> URI Class Initialized
INFO - 2018-01-22 02:33:07 --> Router Class Initialized
INFO - 2018-01-22 02:33:07 --> Output Class Initialized
INFO - 2018-01-22 02:33:07 --> Security Class Initialized
DEBUG - 2018-01-22 02:33:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:33:07 --> Input Class Initialized
INFO - 2018-01-22 02:33:07 --> Language Class Initialized
INFO - 2018-01-22 02:33:07 --> Loader Class Initialized
INFO - 2018-01-22 02:33:07 --> Helper loaded: url_helper
INFO - 2018-01-22 02:33:07 --> Helper loaded: general_helper
INFO - 2018-01-22 02:33:07 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:33:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:33:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:33:07 --> Controller Class Initialized
INFO - 2018-01-22 02:33:07 --> Model Class Initialized
INFO - 2018-01-22 10:34:24 --> Final output sent to browser
DEBUG - 2018-01-22 10:34:24 --> Total execution time: 77.3089
INFO - 2018-01-22 02:39:13 --> Config Class Initialized
INFO - 2018-01-22 02:39:13 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:39:13 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:39:13 --> Utf8 Class Initialized
INFO - 2018-01-22 02:39:13 --> URI Class Initialized
INFO - 2018-01-22 02:39:13 --> Router Class Initialized
INFO - 2018-01-22 02:39:13 --> Output Class Initialized
INFO - 2018-01-22 02:39:13 --> Security Class Initialized
DEBUG - 2018-01-22 02:39:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:39:13 --> Input Class Initialized
INFO - 2018-01-22 02:39:13 --> Language Class Initialized
INFO - 2018-01-22 02:39:13 --> Loader Class Initialized
INFO - 2018-01-22 02:39:13 --> Helper loaded: url_helper
INFO - 2018-01-22 02:39:13 --> Helper loaded: general_helper
INFO - 2018-01-22 02:39:13 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:39:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:39:13 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:39:13 --> Controller Class Initialized
INFO - 2018-01-22 02:39:13 --> Model Class Initialized
ERROR - 2018-01-22 10:39:13 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:39:13 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:39:13 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:39:13 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:39:13 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:39:13 --> Final output sent to browser
DEBUG - 2018-01-22 10:39:13 --> Total execution time: 0.1274
INFO - 2018-01-22 02:39:17 --> Config Class Initialized
INFO - 2018-01-22 02:39:17 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:39:17 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:39:17 --> Utf8 Class Initialized
INFO - 2018-01-22 02:39:17 --> URI Class Initialized
INFO - 2018-01-22 02:39:17 --> Router Class Initialized
INFO - 2018-01-22 02:39:17 --> Config Class Initialized
INFO - 2018-01-22 02:39:17 --> Hooks Class Initialized
INFO - 2018-01-22 02:39:17 --> Output Class Initialized
INFO - 2018-01-22 02:39:17 --> Security Class Initialized
DEBUG - 2018-01-22 02:39:17 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:39:17 --> Utf8 Class Initialized
DEBUG - 2018-01-22 02:39:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:39:17 --> Input Class Initialized
INFO - 2018-01-22 02:39:17 --> URI Class Initialized
INFO - 2018-01-22 02:39:17 --> Language Class Initialized
INFO - 2018-01-22 02:39:17 --> Router Class Initialized
INFO - 2018-01-22 02:39:17 --> Loader Class Initialized
INFO - 2018-01-22 02:39:17 --> Helper loaded: url_helper
INFO - 2018-01-22 02:39:17 --> Output Class Initialized
INFO - 2018-01-22 02:39:17 --> Helper loaded: general_helper
INFO - 2018-01-22 02:39:17 --> Security Class Initialized
DEBUG - 2018-01-22 02:39:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:39:17 --> Input Class Initialized
INFO - 2018-01-22 02:39:17 --> Language Class Initialized
INFO - 2018-01-22 02:39:17 --> Loader Class Initialized
INFO - 2018-01-22 02:39:17 --> Database Driver Class Initialized
INFO - 2018-01-22 02:39:17 --> Helper loaded: url_helper
DEBUG - 2018-01-22 02:39:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:39:17 --> Helper loaded: general_helper
INFO - 2018-01-22 02:39:17 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:39:17 --> Controller Class Initialized
INFO - 2018-01-22 02:39:17 --> Model Class Initialized
INFO - 2018-01-22 02:39:17 --> Database Driver Class Initialized
INFO - 2018-01-22 10:39:17 --> Final output sent to browser
DEBUG - 2018-01-22 10:39:17 --> Total execution time: 0.1534
DEBUG - 2018-01-22 02:39:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:39:17 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:39:17 --> Controller Class Initialized
INFO - 2018-01-22 02:39:17 --> Model Class Initialized
INFO - 2018-01-22 10:39:17 --> Final output sent to browser
DEBUG - 2018-01-22 10:39:17 --> Total execution time: 0.1658
INFO - 2018-01-22 02:39:30 --> Config Class Initialized
INFO - 2018-01-22 02:39:30 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:39:30 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:39:30 --> Utf8 Class Initialized
INFO - 2018-01-22 02:39:30 --> URI Class Initialized
INFO - 2018-01-22 02:39:30 --> Router Class Initialized
INFO - 2018-01-22 02:39:30 --> Output Class Initialized
INFO - 2018-01-22 02:39:30 --> Security Class Initialized
DEBUG - 2018-01-22 02:39:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:39:30 --> Input Class Initialized
INFO - 2018-01-22 02:39:30 --> Language Class Initialized
INFO - 2018-01-22 02:39:30 --> Loader Class Initialized
INFO - 2018-01-22 02:39:30 --> Helper loaded: url_helper
INFO - 2018-01-22 02:39:30 --> Helper loaded: general_helper
INFO - 2018-01-22 02:39:30 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:39:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:39:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:39:30 --> Controller Class Initialized
INFO - 2018-01-22 02:39:30 --> Model Class Initialized
INFO - 2018-01-22 10:39:33 --> Final output sent to browser
DEBUG - 2018-01-22 10:39:33 --> Total execution time: 2.4737
INFO - 2018-01-22 02:39:33 --> Config Class Initialized
INFO - 2018-01-22 02:39:33 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:39:33 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:39:33 --> Utf8 Class Initialized
INFO - 2018-01-22 02:39:33 --> URI Class Initialized
INFO - 2018-01-22 02:39:33 --> Router Class Initialized
INFO - 2018-01-22 02:39:33 --> Output Class Initialized
INFO - 2018-01-22 02:39:33 --> Security Class Initialized
DEBUG - 2018-01-22 02:39:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:39:33 --> Input Class Initialized
INFO - 2018-01-22 02:39:33 --> Language Class Initialized
INFO - 2018-01-22 02:39:33 --> Loader Class Initialized
INFO - 2018-01-22 02:39:33 --> Helper loaded: url_helper
INFO - 2018-01-22 02:39:33 --> Helper loaded: general_helper
INFO - 2018-01-22 02:39:33 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:39:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:39:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:39:33 --> Controller Class Initialized
INFO - 2018-01-22 02:39:33 --> Model Class Initialized
INFO - 2018-01-22 10:39:41 --> Final output sent to browser
DEBUG - 2018-01-22 10:39:41 --> Total execution time: 7.7522
INFO - 2018-01-22 02:39:58 --> Config Class Initialized
INFO - 2018-01-22 02:39:58 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:39:58 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:39:58 --> Utf8 Class Initialized
INFO - 2018-01-22 02:39:58 --> URI Class Initialized
INFO - 2018-01-22 02:39:58 --> Router Class Initialized
INFO - 2018-01-22 02:39:58 --> Output Class Initialized
INFO - 2018-01-22 02:39:58 --> Security Class Initialized
DEBUG - 2018-01-22 02:39:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:39:58 --> Input Class Initialized
INFO - 2018-01-22 02:39:58 --> Language Class Initialized
INFO - 2018-01-22 02:39:58 --> Loader Class Initialized
INFO - 2018-01-22 02:39:58 --> Helper loaded: url_helper
INFO - 2018-01-22 02:39:58 --> Helper loaded: general_helper
INFO - 2018-01-22 02:39:58 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:39:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:39:58 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:39:58 --> Controller Class Initialized
INFO - 2018-01-22 02:39:58 --> Model Class Initialized
INFO - 2018-01-22 10:40:13 --> Final output sent to browser
DEBUG - 2018-01-22 10:40:13 --> Total execution time: 15.6568
INFO - 2018-01-22 02:40:13 --> Config Class Initialized
INFO - 2018-01-22 02:40:13 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:40:13 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:40:13 --> Utf8 Class Initialized
INFO - 2018-01-22 02:40:13 --> URI Class Initialized
INFO - 2018-01-22 02:40:13 --> Router Class Initialized
INFO - 2018-01-22 02:40:13 --> Output Class Initialized
INFO - 2018-01-22 02:40:13 --> Security Class Initialized
DEBUG - 2018-01-22 02:40:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:40:13 --> Input Class Initialized
INFO - 2018-01-22 02:40:13 --> Language Class Initialized
INFO - 2018-01-22 02:40:14 --> Loader Class Initialized
INFO - 2018-01-22 02:40:14 --> Helper loaded: url_helper
INFO - 2018-01-22 02:40:14 --> Helper loaded: general_helper
INFO - 2018-01-22 02:40:14 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:40:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:40:14 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:40:14 --> Controller Class Initialized
INFO - 2018-01-22 02:40:14 --> Model Class Initialized
INFO - 2018-01-22 10:41:53 --> Final output sent to browser
DEBUG - 2018-01-22 10:41:53 --> Total execution time: 99.7933
INFO - 2018-01-22 02:42:02 --> Config Class Initialized
INFO - 2018-01-22 02:42:02 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:42:02 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:42:02 --> Utf8 Class Initialized
INFO - 2018-01-22 02:42:02 --> URI Class Initialized
INFO - 2018-01-22 02:42:02 --> Router Class Initialized
INFO - 2018-01-22 02:42:02 --> Output Class Initialized
INFO - 2018-01-22 02:42:02 --> Security Class Initialized
DEBUG - 2018-01-22 02:42:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:42:02 --> Input Class Initialized
INFO - 2018-01-22 02:42:02 --> Language Class Initialized
INFO - 2018-01-22 02:42:02 --> Loader Class Initialized
INFO - 2018-01-22 02:42:02 --> Helper loaded: url_helper
INFO - 2018-01-22 02:42:02 --> Helper loaded: general_helper
INFO - 2018-01-22 02:42:02 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:42:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:42:02 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:42:02 --> Controller Class Initialized
INFO - 2018-01-22 02:42:02 --> Model Class Initialized
ERROR - 2018-01-22 10:42:02 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:42:02 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:42:02 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:42:02 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:42:02 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:42:02 --> Final output sent to browser
DEBUG - 2018-01-22 10:42:02 --> Total execution time: 0.1091
INFO - 2018-01-22 02:42:05 --> Config Class Initialized
INFO - 2018-01-22 02:42:05 --> Hooks Class Initialized
INFO - 2018-01-22 02:42:05 --> Config Class Initialized
INFO - 2018-01-22 02:42:05 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:42:05 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:42:05 --> Utf8 Class Initialized
DEBUG - 2018-01-22 02:42:05 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:42:05 --> Utf8 Class Initialized
INFO - 2018-01-22 02:42:05 --> URI Class Initialized
INFO - 2018-01-22 02:42:05 --> URI Class Initialized
INFO - 2018-01-22 02:42:05 --> Router Class Initialized
INFO - 2018-01-22 02:42:05 --> Router Class Initialized
INFO - 2018-01-22 02:42:05 --> Output Class Initialized
INFO - 2018-01-22 02:42:05 --> Output Class Initialized
INFO - 2018-01-22 02:42:05 --> Security Class Initialized
INFO - 2018-01-22 02:42:05 --> Security Class Initialized
DEBUG - 2018-01-22 02:42:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:42:05 --> Input Class Initialized
INFO - 2018-01-22 02:42:05 --> Language Class Initialized
DEBUG - 2018-01-22 02:42:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:42:05 --> Input Class Initialized
INFO - 2018-01-22 02:42:05 --> Language Class Initialized
INFO - 2018-01-22 02:42:05 --> Loader Class Initialized
INFO - 2018-01-22 02:42:05 --> Helper loaded: url_helper
INFO - 2018-01-22 02:42:05 --> Loader Class Initialized
INFO - 2018-01-22 02:42:05 --> Helper loaded: general_helper
INFO - 2018-01-22 02:42:05 --> Helper loaded: url_helper
INFO - 2018-01-22 02:42:05 --> Helper loaded: general_helper
INFO - 2018-01-22 02:42:05 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:42:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:42:05 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:42:05 --> Controller Class Initialized
INFO - 2018-01-22 02:42:05 --> Model Class Initialized
INFO - 2018-01-22 02:42:05 --> Database Driver Class Initialized
INFO - 2018-01-22 10:42:05 --> Final output sent to browser
DEBUG - 2018-01-22 10:42:05 --> Total execution time: 0.0715
DEBUG - 2018-01-22 02:42:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:42:05 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:42:05 --> Controller Class Initialized
INFO - 2018-01-22 02:42:05 --> Model Class Initialized
INFO - 2018-01-22 10:42:05 --> Final output sent to browser
DEBUG - 2018-01-22 10:42:05 --> Total execution time: 0.1099
INFO - 2018-01-22 02:42:08 --> Config Class Initialized
INFO - 2018-01-22 02:42:08 --> Config Class Initialized
INFO - 2018-01-22 02:42:08 --> Hooks Class Initialized
INFO - 2018-01-22 02:42:08 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:42:08 --> UTF-8 Support Enabled
DEBUG - 2018-01-22 02:42:08 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:42:08 --> Utf8 Class Initialized
INFO - 2018-01-22 02:42:08 --> Utf8 Class Initialized
INFO - 2018-01-22 02:42:08 --> URI Class Initialized
INFO - 2018-01-22 02:42:08 --> URI Class Initialized
INFO - 2018-01-22 02:42:08 --> Router Class Initialized
INFO - 2018-01-22 02:42:08 --> Router Class Initialized
INFO - 2018-01-22 02:42:08 --> Output Class Initialized
INFO - 2018-01-22 02:42:08 --> Output Class Initialized
INFO - 2018-01-22 02:42:08 --> Security Class Initialized
INFO - 2018-01-22 02:42:08 --> Security Class Initialized
DEBUG - 2018-01-22 02:42:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:42:08 --> Input Class Initialized
INFO - 2018-01-22 02:42:08 --> Language Class Initialized
DEBUG - 2018-01-22 02:42:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:42:08 --> Input Class Initialized
INFO - 2018-01-22 02:42:08 --> Language Class Initialized
INFO - 2018-01-22 02:42:08 --> Loader Class Initialized
INFO - 2018-01-22 02:42:08 --> Helper loaded: url_helper
INFO - 2018-01-22 02:42:08 --> Loader Class Initialized
INFO - 2018-01-22 02:42:08 --> Helper loaded: general_helper
INFO - 2018-01-22 02:42:08 --> Helper loaded: url_helper
INFO - 2018-01-22 02:42:08 --> Helper loaded: general_helper
INFO - 2018-01-22 02:42:08 --> Database Driver Class Initialized
INFO - 2018-01-22 02:42:08 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:42:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-01-22 02:42:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:42:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:42:08 --> Controller Class Initialized
INFO - 2018-01-22 02:42:08 --> Model Class Initialized
INFO - 2018-01-22 10:42:08 --> Final output sent to browser
DEBUG - 2018-01-22 10:42:08 --> Total execution time: 0.0894
INFO - 2018-01-22 02:42:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:42:08 --> Controller Class Initialized
INFO - 2018-01-22 02:42:08 --> Model Class Initialized
INFO - 2018-01-22 10:42:08 --> Final output sent to browser
DEBUG - 2018-01-22 10:42:08 --> Total execution time: 0.1137
INFO - 2018-01-22 02:43:04 --> Config Class Initialized
INFO - 2018-01-22 02:43:04 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:43:04 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:43:04 --> Utf8 Class Initialized
INFO - 2018-01-22 02:43:04 --> URI Class Initialized
INFO - 2018-01-22 02:43:04 --> Router Class Initialized
INFO - 2018-01-22 02:43:04 --> Output Class Initialized
INFO - 2018-01-22 02:43:04 --> Security Class Initialized
DEBUG - 2018-01-22 02:43:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:43:04 --> Input Class Initialized
INFO - 2018-01-22 02:43:04 --> Language Class Initialized
INFO - 2018-01-22 02:43:04 --> Loader Class Initialized
INFO - 2018-01-22 02:43:04 --> Helper loaded: url_helper
INFO - 2018-01-22 02:43:04 --> Helper loaded: general_helper
INFO - 2018-01-22 02:43:04 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:43:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:43:04 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:43:04 --> Controller Class Initialized
INFO - 2018-01-22 02:43:04 --> Model Class Initialized
ERROR - 2018-01-22 10:43:04 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:43:04 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:43:04 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:43:04 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:43:04 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:43:04 --> Final output sent to browser
DEBUG - 2018-01-22 10:43:04 --> Total execution time: 0.0511
INFO - 2018-01-22 02:43:07 --> Config Class Initialized
INFO - 2018-01-22 02:43:07 --> Config Class Initialized
INFO - 2018-01-22 02:43:07 --> Hooks Class Initialized
INFO - 2018-01-22 02:43:07 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:43:07 --> UTF-8 Support Enabled
DEBUG - 2018-01-22 02:43:07 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:43:07 --> Utf8 Class Initialized
INFO - 2018-01-22 02:43:07 --> Utf8 Class Initialized
INFO - 2018-01-22 02:43:07 --> URI Class Initialized
INFO - 2018-01-22 02:43:07 --> URI Class Initialized
INFO - 2018-01-22 02:43:07 --> Router Class Initialized
INFO - 2018-01-22 02:43:07 --> Router Class Initialized
INFO - 2018-01-22 02:43:07 --> Output Class Initialized
INFO - 2018-01-22 02:43:07 --> Output Class Initialized
INFO - 2018-01-22 02:43:07 --> Security Class Initialized
INFO - 2018-01-22 02:43:07 --> Security Class Initialized
DEBUG - 2018-01-22 02:43:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:43:07 --> Input Class Initialized
DEBUG - 2018-01-22 02:43:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:43:07 --> Input Class Initialized
INFO - 2018-01-22 02:43:07 --> Language Class Initialized
INFO - 2018-01-22 02:43:07 --> Language Class Initialized
INFO - 2018-01-22 02:43:07 --> Loader Class Initialized
INFO - 2018-01-22 02:43:07 --> Helper loaded: url_helper
INFO - 2018-01-22 02:43:07 --> Loader Class Initialized
INFO - 2018-01-22 02:43:07 --> Helper loaded: general_helper
INFO - 2018-01-22 02:43:07 --> Helper loaded: url_helper
INFO - 2018-01-22 02:43:07 --> Helper loaded: general_helper
INFO - 2018-01-22 02:43:07 --> Database Driver Class Initialized
INFO - 2018-01-22 02:43:07 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:43:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:43:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:43:07 --> Controller Class Initialized
DEBUG - 2018-01-22 02:43:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:43:07 --> Model Class Initialized
INFO - 2018-01-22 10:43:07 --> Final output sent to browser
DEBUG - 2018-01-22 10:43:07 --> Total execution time: 0.0697
INFO - 2018-01-22 02:43:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:43:07 --> Controller Class Initialized
INFO - 2018-01-22 02:43:07 --> Model Class Initialized
INFO - 2018-01-22 10:43:07 --> Final output sent to browser
DEBUG - 2018-01-22 10:43:07 --> Total execution time: 0.0995
INFO - 2018-01-22 02:43:12 --> Config Class Initialized
INFO - 2018-01-22 02:43:12 --> Hooks Class Initialized
INFO - 2018-01-22 02:43:12 --> Config Class Initialized
INFO - 2018-01-22 02:43:12 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:43:12 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:43:12 --> Utf8 Class Initialized
DEBUG - 2018-01-22 02:43:12 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:43:12 --> Utf8 Class Initialized
INFO - 2018-01-22 02:43:12 --> URI Class Initialized
INFO - 2018-01-22 02:43:12 --> URI Class Initialized
INFO - 2018-01-22 02:43:12 --> Router Class Initialized
INFO - 2018-01-22 02:43:12 --> Router Class Initialized
INFO - 2018-01-22 02:43:12 --> Output Class Initialized
INFO - 2018-01-22 02:43:12 --> Output Class Initialized
INFO - 2018-01-22 02:43:12 --> Security Class Initialized
DEBUG - 2018-01-22 02:43:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:43:12 --> Security Class Initialized
INFO - 2018-01-22 02:43:12 --> Input Class Initialized
INFO - 2018-01-22 02:43:12 --> Language Class Initialized
DEBUG - 2018-01-22 02:43:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:43:12 --> Input Class Initialized
INFO - 2018-01-22 02:43:12 --> Language Class Initialized
INFO - 2018-01-22 02:43:12 --> Loader Class Initialized
INFO - 2018-01-22 02:43:12 --> Helper loaded: url_helper
INFO - 2018-01-22 02:43:12 --> Loader Class Initialized
INFO - 2018-01-22 02:43:12 --> Helper loaded: general_helper
INFO - 2018-01-22 02:43:12 --> Helper loaded: url_helper
INFO - 2018-01-22 02:43:12 --> Helper loaded: general_helper
INFO - 2018-01-22 02:43:12 --> Database Driver Class Initialized
INFO - 2018-01-22 02:43:12 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:43:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:43:12 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:43:12 --> Controller Class Initialized
DEBUG - 2018-01-22 02:43:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:43:12 --> Model Class Initialized
INFO - 2018-01-22 10:43:12 --> Final output sent to browser
DEBUG - 2018-01-22 10:43:12 --> Total execution time: 0.0525
INFO - 2018-01-22 02:43:12 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:43:12 --> Controller Class Initialized
INFO - 2018-01-22 02:43:12 --> Model Class Initialized
INFO - 2018-01-22 10:43:12 --> Final output sent to browser
DEBUG - 2018-01-22 10:43:12 --> Total execution time: 0.0794
INFO - 2018-01-22 02:43:20 --> Config Class Initialized
INFO - 2018-01-22 02:43:20 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:43:20 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:43:20 --> Utf8 Class Initialized
INFO - 2018-01-22 02:43:20 --> URI Class Initialized
INFO - 2018-01-22 02:43:20 --> Router Class Initialized
INFO - 2018-01-22 02:43:20 --> Config Class Initialized
INFO - 2018-01-22 02:43:20 --> Hooks Class Initialized
INFO - 2018-01-22 02:43:20 --> Output Class Initialized
INFO - 2018-01-22 02:43:20 --> Security Class Initialized
DEBUG - 2018-01-22 02:43:20 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:43:20 --> Utf8 Class Initialized
DEBUG - 2018-01-22 02:43:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:43:20 --> Input Class Initialized
INFO - 2018-01-22 02:43:20 --> Language Class Initialized
INFO - 2018-01-22 02:43:20 --> URI Class Initialized
INFO - 2018-01-22 02:43:20 --> Loader Class Initialized
INFO - 2018-01-22 02:43:20 --> Router Class Initialized
INFO - 2018-01-22 02:43:20 --> Helper loaded: url_helper
INFO - 2018-01-22 02:43:20 --> Helper loaded: general_helper
INFO - 2018-01-22 02:43:20 --> Output Class Initialized
INFO - 2018-01-22 02:43:20 --> Security Class Initialized
DEBUG - 2018-01-22 02:43:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:43:20 --> Input Class Initialized
INFO - 2018-01-22 02:43:20 --> Language Class Initialized
INFO - 2018-01-22 02:43:20 --> Database Driver Class Initialized
INFO - 2018-01-22 02:43:20 --> Loader Class Initialized
DEBUG - 2018-01-22 02:43:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:43:20 --> Helper loaded: url_helper
INFO - 2018-01-22 02:43:20 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:43:20 --> Helper loaded: general_helper
INFO - 2018-01-22 02:43:20 --> Controller Class Initialized
INFO - 2018-01-22 02:43:20 --> Model Class Initialized
INFO - 2018-01-22 10:43:20 --> Final output sent to browser
DEBUG - 2018-01-22 10:43:20 --> Total execution time: 0.0727
INFO - 2018-01-22 02:43:20 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:43:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:43:20 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:43:20 --> Controller Class Initialized
INFO - 2018-01-22 02:43:20 --> Model Class Initialized
INFO - 2018-01-22 10:43:20 --> Final output sent to browser
DEBUG - 2018-01-22 10:43:20 --> Total execution time: 0.1021
INFO - 2018-01-22 02:43:47 --> Config Class Initialized
INFO - 2018-01-22 02:43:47 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:43:47 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:43:47 --> Utf8 Class Initialized
INFO - 2018-01-22 02:43:47 --> URI Class Initialized
INFO - 2018-01-22 02:43:47 --> Router Class Initialized
INFO - 2018-01-22 02:43:47 --> Output Class Initialized
INFO - 2018-01-22 02:43:47 --> Security Class Initialized
DEBUG - 2018-01-22 02:43:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:43:47 --> Input Class Initialized
INFO - 2018-01-22 02:43:47 --> Language Class Initialized
INFO - 2018-01-22 02:43:47 --> Loader Class Initialized
INFO - 2018-01-22 02:43:47 --> Helper loaded: url_helper
INFO - 2018-01-22 02:43:47 --> Helper loaded: general_helper
INFO - 2018-01-22 02:43:47 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:43:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:43:47 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:43:47 --> Controller Class Initialized
INFO - 2018-01-22 02:43:47 --> Model Class Initialized
ERROR - 2018-01-22 10:43:47 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:43:47 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:43:47 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:43:47 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:43:47 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:43:47 --> Final output sent to browser
DEBUG - 2018-01-22 10:43:47 --> Total execution time: 0.0722
INFO - 2018-01-22 02:43:51 --> Config Class Initialized
INFO - 2018-01-22 02:43:51 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:43:51 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:43:51 --> Utf8 Class Initialized
INFO - 2018-01-22 02:43:51 --> URI Class Initialized
INFO - 2018-01-22 02:43:51 --> Router Class Initialized
INFO - 2018-01-22 02:43:51 --> Config Class Initialized
INFO - 2018-01-22 02:43:51 --> Hooks Class Initialized
INFO - 2018-01-22 02:43:51 --> Output Class Initialized
INFO - 2018-01-22 02:43:51 --> Security Class Initialized
DEBUG - 2018-01-22 02:43:51 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:43:51 --> Utf8 Class Initialized
DEBUG - 2018-01-22 02:43:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:43:51 --> Input Class Initialized
INFO - 2018-01-22 02:43:51 --> Language Class Initialized
INFO - 2018-01-22 02:43:51 --> URI Class Initialized
INFO - 2018-01-22 02:43:51 --> Loader Class Initialized
INFO - 2018-01-22 02:43:51 --> Router Class Initialized
INFO - 2018-01-22 02:43:51 --> Helper loaded: url_helper
INFO - 2018-01-22 02:43:51 --> Helper loaded: general_helper
INFO - 2018-01-22 02:43:51 --> Output Class Initialized
INFO - 2018-01-22 02:43:51 --> Security Class Initialized
DEBUG - 2018-01-22 02:43:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:43:51 --> Input Class Initialized
INFO - 2018-01-22 02:43:51 --> Language Class Initialized
INFO - 2018-01-22 02:43:51 --> Database Driver Class Initialized
INFO - 2018-01-22 02:43:51 --> Loader Class Initialized
INFO - 2018-01-22 02:43:51 --> Helper loaded: url_helper
DEBUG - 2018-01-22 02:43:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:43:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:43:51 --> Helper loaded: general_helper
INFO - 2018-01-22 02:43:51 --> Controller Class Initialized
INFO - 2018-01-22 02:43:51 --> Model Class Initialized
INFO - 2018-01-22 10:43:51 --> Final output sent to browser
DEBUG - 2018-01-22 10:43:51 --> Total execution time: 0.0736
INFO - 2018-01-22 02:43:51 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:43:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:43:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:43:51 --> Controller Class Initialized
INFO - 2018-01-22 02:43:51 --> Model Class Initialized
INFO - 2018-01-22 10:43:51 --> Final output sent to browser
DEBUG - 2018-01-22 10:43:51 --> Total execution time: 0.1153
INFO - 2018-01-22 02:44:27 --> Config Class Initialized
INFO - 2018-01-22 02:44:27 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:44:27 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:44:27 --> Utf8 Class Initialized
INFO - 2018-01-22 02:44:27 --> URI Class Initialized
INFO - 2018-01-22 02:44:27 --> Router Class Initialized
INFO - 2018-01-22 02:44:27 --> Output Class Initialized
INFO - 2018-01-22 02:44:27 --> Security Class Initialized
DEBUG - 2018-01-22 02:44:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:44:27 --> Input Class Initialized
INFO - 2018-01-22 02:44:27 --> Language Class Initialized
INFO - 2018-01-22 02:44:27 --> Loader Class Initialized
INFO - 2018-01-22 02:44:27 --> Helper loaded: url_helper
INFO - 2018-01-22 02:44:27 --> Helper loaded: general_helper
INFO - 2018-01-22 02:44:27 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:44:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:44:27 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:44:27 --> Controller Class Initialized
INFO - 2018-01-22 02:44:27 --> Model Class Initialized
ERROR - 2018-01-22 10:44:27 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:44:27 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:44:27 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:44:27 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:44:27 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:44:27 --> Final output sent to browser
DEBUG - 2018-01-22 10:44:27 --> Total execution time: 0.0483
INFO - 2018-01-22 02:44:30 --> Config Class Initialized
INFO - 2018-01-22 02:44:30 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:44:30 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:44:30 --> Utf8 Class Initialized
INFO - 2018-01-22 02:44:30 --> Config Class Initialized
INFO - 2018-01-22 02:44:30 --> Hooks Class Initialized
INFO - 2018-01-22 02:44:30 --> URI Class Initialized
INFO - 2018-01-22 02:44:30 --> Router Class Initialized
DEBUG - 2018-01-22 02:44:30 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:44:30 --> Utf8 Class Initialized
INFO - 2018-01-22 02:44:30 --> Output Class Initialized
INFO - 2018-01-22 02:44:30 --> URI Class Initialized
INFO - 2018-01-22 02:44:30 --> Security Class Initialized
INFO - 2018-01-22 02:44:30 --> Router Class Initialized
DEBUG - 2018-01-22 02:44:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:44:30 --> Input Class Initialized
INFO - 2018-01-22 02:44:30 --> Output Class Initialized
INFO - 2018-01-22 02:44:30 --> Language Class Initialized
INFO - 2018-01-22 02:44:30 --> Security Class Initialized
DEBUG - 2018-01-22 02:44:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:44:30 --> Loader Class Initialized
INFO - 2018-01-22 02:44:30 --> Input Class Initialized
INFO - 2018-01-22 02:44:30 --> Language Class Initialized
INFO - 2018-01-22 02:44:30 --> Helper loaded: url_helper
INFO - 2018-01-22 02:44:30 --> Helper loaded: general_helper
INFO - 2018-01-22 02:44:30 --> Loader Class Initialized
INFO - 2018-01-22 02:44:30 --> Helper loaded: url_helper
INFO - 2018-01-22 02:44:30 --> Helper loaded: general_helper
INFO - 2018-01-22 02:44:30 --> Database Driver Class Initialized
INFO - 2018-01-22 02:44:30 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:44:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:44:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:44:30 --> Controller Class Initialized
INFO - 2018-01-22 02:44:30 --> Model Class Initialized
DEBUG - 2018-01-22 02:44:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 10:44:30 --> Final output sent to browser
DEBUG - 2018-01-22 10:44:30 --> Total execution time: 0.0537
INFO - 2018-01-22 02:44:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:44:30 --> Controller Class Initialized
INFO - 2018-01-22 02:44:30 --> Model Class Initialized
INFO - 2018-01-22 10:44:30 --> Final output sent to browser
DEBUG - 2018-01-22 10:44:30 --> Total execution time: 0.0687
INFO - 2018-01-22 02:44:40 --> Config Class Initialized
INFO - 2018-01-22 02:44:40 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:44:40 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:44:40 --> Utf8 Class Initialized
INFO - 2018-01-22 02:44:40 --> URI Class Initialized
INFO - 2018-01-22 02:44:40 --> Router Class Initialized
INFO - 2018-01-22 02:44:40 --> Config Class Initialized
INFO - 2018-01-22 02:44:40 --> Output Class Initialized
INFO - 2018-01-22 02:44:40 --> Hooks Class Initialized
INFO - 2018-01-22 02:44:40 --> Security Class Initialized
DEBUG - 2018-01-22 02:44:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-01-22 02:44:40 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:44:40 --> Input Class Initialized
INFO - 2018-01-22 02:44:40 --> Utf8 Class Initialized
INFO - 2018-01-22 02:44:40 --> Language Class Initialized
INFO - 2018-01-22 02:44:40 --> URI Class Initialized
INFO - 2018-01-22 02:44:40 --> Router Class Initialized
INFO - 2018-01-22 02:44:40 --> Loader Class Initialized
INFO - 2018-01-22 02:44:40 --> Helper loaded: url_helper
INFO - 2018-01-22 02:44:40 --> Output Class Initialized
INFO - 2018-01-22 02:44:40 --> Helper loaded: general_helper
INFO - 2018-01-22 02:44:40 --> Security Class Initialized
DEBUG - 2018-01-22 02:44:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:44:40 --> Input Class Initialized
INFO - 2018-01-22 02:44:40 --> Language Class Initialized
INFO - 2018-01-22 02:44:40 --> Database Driver Class Initialized
INFO - 2018-01-22 02:44:40 --> Loader Class Initialized
INFO - 2018-01-22 02:44:40 --> Helper loaded: url_helper
INFO - 2018-01-22 02:44:40 --> Helper loaded: general_helper
DEBUG - 2018-01-22 02:44:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:44:40 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:44:40 --> Controller Class Initialized
INFO - 2018-01-22 02:44:40 --> Model Class Initialized
INFO - 2018-01-22 10:44:40 --> Final output sent to browser
DEBUG - 2018-01-22 10:44:40 --> Total execution time: 0.0813
INFO - 2018-01-22 02:44:40 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:44:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:44:40 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:44:40 --> Controller Class Initialized
INFO - 2018-01-22 02:44:40 --> Model Class Initialized
INFO - 2018-01-22 10:44:40 --> Final output sent to browser
DEBUG - 2018-01-22 10:44:40 --> Total execution time: 0.1009
INFO - 2018-01-22 02:44:53 --> Config Class Initialized
INFO - 2018-01-22 02:44:53 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:44:53 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:44:53 --> Utf8 Class Initialized
INFO - 2018-01-22 02:44:53 --> URI Class Initialized
INFO - 2018-01-22 02:44:53 --> Router Class Initialized
INFO - 2018-01-22 02:44:53 --> Output Class Initialized
INFO - 2018-01-22 02:44:53 --> Security Class Initialized
DEBUG - 2018-01-22 02:44:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:44:53 --> Input Class Initialized
INFO - 2018-01-22 02:44:53 --> Language Class Initialized
INFO - 2018-01-22 02:44:53 --> Loader Class Initialized
INFO - 2018-01-22 02:44:53 --> Helper loaded: url_helper
INFO - 2018-01-22 02:44:53 --> Helper loaded: general_helper
INFO - 2018-01-22 02:44:53 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:44:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:44:53 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:44:53 --> Controller Class Initialized
INFO - 2018-01-22 02:44:53 --> Model Class Initialized
INFO - 2018-01-22 10:45:01 --> Final output sent to browser
DEBUG - 2018-01-22 10:45:01 --> Total execution time: 8.3171
INFO - 2018-01-22 02:45:01 --> Config Class Initialized
INFO - 2018-01-22 02:45:01 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:45:01 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:45:01 --> Utf8 Class Initialized
INFO - 2018-01-22 02:45:01 --> URI Class Initialized
INFO - 2018-01-22 02:45:01 --> Router Class Initialized
INFO - 2018-01-22 02:45:01 --> Output Class Initialized
INFO - 2018-01-22 02:45:01 --> Security Class Initialized
DEBUG - 2018-01-22 02:45:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:45:01 --> Input Class Initialized
INFO - 2018-01-22 02:45:01 --> Language Class Initialized
INFO - 2018-01-22 02:45:01 --> Loader Class Initialized
INFO - 2018-01-22 02:45:01 --> Helper loaded: url_helper
INFO - 2018-01-22 02:45:01 --> Helper loaded: general_helper
INFO - 2018-01-22 02:45:01 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:45:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:45:01 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:45:01 --> Controller Class Initialized
INFO - 2018-01-22 02:45:01 --> Model Class Initialized
INFO - 2018-01-22 02:47:38 --> Config Class Initialized
INFO - 2018-01-22 02:47:38 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:47:38 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:47:38 --> Utf8 Class Initialized
INFO - 2018-01-22 02:47:38 --> URI Class Initialized
INFO - 2018-01-22 02:47:38 --> Router Class Initialized
INFO - 2018-01-22 02:47:38 --> Output Class Initialized
INFO - 2018-01-22 02:47:38 --> Security Class Initialized
DEBUG - 2018-01-22 02:47:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:47:38 --> Input Class Initialized
INFO - 2018-01-22 02:47:38 --> Language Class Initialized
INFO - 2018-01-22 02:47:38 --> Loader Class Initialized
INFO - 2018-01-22 02:47:38 --> Helper loaded: url_helper
INFO - 2018-01-22 02:47:38 --> Helper loaded: general_helper
INFO - 2018-01-22 02:47:38 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:47:38 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:47:38 --> Controller Class Initialized
INFO - 2018-01-22 02:47:38 --> Model Class Initialized
ERROR - 2018-01-22 10:47:38 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:47:38 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:47:38 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:47:38 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:47:38 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:47:38 --> Final output sent to browser
DEBUG - 2018-01-22 10:47:38 --> Total execution time: 0.0906
INFO - 2018-01-22 02:47:41 --> Config Class Initialized
INFO - 2018-01-22 02:47:41 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:47:41 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:47:41 --> Utf8 Class Initialized
INFO - 2018-01-22 02:47:41 --> URI Class Initialized
INFO - 2018-01-22 02:47:41 --> Router Class Initialized
INFO - 2018-01-22 02:47:41 --> Output Class Initialized
INFO - 2018-01-22 02:47:41 --> Security Class Initialized
DEBUG - 2018-01-22 02:47:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:47:41 --> Input Class Initialized
INFO - 2018-01-22 02:47:41 --> Language Class Initialized
INFO - 2018-01-22 02:47:41 --> Loader Class Initialized
INFO - 2018-01-22 02:47:41 --> Helper loaded: url_helper
INFO - 2018-01-22 02:47:41 --> Helper loaded: general_helper
INFO - 2018-01-22 02:47:41 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:47:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:47:41 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:47:41 --> Controller Class Initialized
INFO - 2018-01-22 02:47:41 --> Model Class Initialized
ERROR - 2018-01-22 10:47:41 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:47:41 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:47:41 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:47:41 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:47:41 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:47:41 --> Final output sent to browser
DEBUG - 2018-01-22 10:47:41 --> Total execution time: 0.0850
INFO - 2018-01-22 02:47:43 --> Config Class Initialized
INFO - 2018-01-22 02:47:43 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:47:43 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:47:43 --> Utf8 Class Initialized
INFO - 2018-01-22 02:47:43 --> Config Class Initialized
INFO - 2018-01-22 02:47:43 --> Hooks Class Initialized
INFO - 2018-01-22 02:47:43 --> URI Class Initialized
DEBUG - 2018-01-22 02:47:43 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:47:43 --> Router Class Initialized
INFO - 2018-01-22 02:47:43 --> Utf8 Class Initialized
INFO - 2018-01-22 02:47:43 --> URI Class Initialized
INFO - 2018-01-22 02:47:43 --> Output Class Initialized
INFO - 2018-01-22 02:47:43 --> Router Class Initialized
INFO - 2018-01-22 02:47:43 --> Security Class Initialized
INFO - 2018-01-22 02:47:43 --> Output Class Initialized
DEBUG - 2018-01-22 02:47:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:47:43 --> Input Class Initialized
INFO - 2018-01-22 02:47:43 --> Security Class Initialized
INFO - 2018-01-22 02:47:43 --> Language Class Initialized
DEBUG - 2018-01-22 02:47:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:47:43 --> Input Class Initialized
INFO - 2018-01-22 02:47:43 --> Loader Class Initialized
INFO - 2018-01-22 02:47:43 --> Language Class Initialized
INFO - 2018-01-22 02:47:43 --> Helper loaded: url_helper
INFO - 2018-01-22 02:47:43 --> Helper loaded: general_helper
INFO - 2018-01-22 02:47:43 --> Loader Class Initialized
INFO - 2018-01-22 02:47:43 --> Helper loaded: url_helper
INFO - 2018-01-22 02:47:43 --> Helper loaded: general_helper
INFO - 2018-01-22 02:47:43 --> Database Driver Class Initialized
INFO - 2018-01-22 02:47:43 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:47:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:47:44 --> Session: Class initialized using 'files' driver.
DEBUG - 2018-01-22 02:47:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:47:44 --> Controller Class Initialized
INFO - 2018-01-22 02:47:44 --> Model Class Initialized
INFO - 2018-01-22 10:47:44 --> Final output sent to browser
DEBUG - 2018-01-22 10:47:44 --> Total execution time: 0.0792
INFO - 2018-01-22 02:47:44 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:47:44 --> Controller Class Initialized
INFO - 2018-01-22 02:47:44 --> Model Class Initialized
INFO - 2018-01-22 10:47:44 --> Final output sent to browser
DEBUG - 2018-01-22 10:47:44 --> Total execution time: 0.1018
INFO - 2018-01-22 02:48:28 --> Config Class Initialized
INFO - 2018-01-22 02:48:28 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:48:28 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:48:28 --> Utf8 Class Initialized
INFO - 2018-01-22 02:48:28 --> URI Class Initialized
INFO - 2018-01-22 02:48:28 --> Router Class Initialized
INFO - 2018-01-22 02:48:28 --> Output Class Initialized
INFO - 2018-01-22 02:48:28 --> Security Class Initialized
DEBUG - 2018-01-22 02:48:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:48:28 --> Input Class Initialized
INFO - 2018-01-22 02:48:28 --> Language Class Initialized
INFO - 2018-01-22 02:48:28 --> Loader Class Initialized
INFO - 2018-01-22 02:48:28 --> Helper loaded: url_helper
INFO - 2018-01-22 02:48:28 --> Helper loaded: general_helper
INFO - 2018-01-22 02:48:28 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:48:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:48:28 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:48:28 --> Controller Class Initialized
INFO - 2018-01-22 02:48:28 --> Model Class Initialized
ERROR - 2018-01-22 10:48:31 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:48:37 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:48:37 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:48:37 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:48:37 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:48:37 --> Final output sent to browser
DEBUG - 2018-01-22 10:48:37 --> Total execution time: 8.3135
INFO - 2018-01-22 02:48:44 --> Config Class Initialized
INFO - 2018-01-22 02:48:44 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:48:44 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:48:44 --> Utf8 Class Initialized
INFO - 2018-01-22 02:48:44 --> URI Class Initialized
INFO - 2018-01-22 02:48:44 --> Router Class Initialized
INFO - 2018-01-22 02:48:44 --> Output Class Initialized
INFO - 2018-01-22 02:48:44 --> Security Class Initialized
DEBUG - 2018-01-22 02:48:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:48:44 --> Input Class Initialized
INFO - 2018-01-22 02:48:44 --> Language Class Initialized
INFO - 2018-01-22 02:48:44 --> Loader Class Initialized
INFO - 2018-01-22 02:48:44 --> Helper loaded: url_helper
INFO - 2018-01-22 02:48:44 --> Helper loaded: general_helper
INFO - 2018-01-22 02:48:44 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:48:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:48:44 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:48:44 --> Controller Class Initialized
INFO - 2018-01-22 02:48:44 --> Model Class Initialized
INFO - 2018-01-22 10:48:52 --> Final output sent to browser
DEBUG - 2018-01-22 10:48:52 --> Total execution time: 8.7296
INFO - 2018-01-22 02:48:53 --> Config Class Initialized
INFO - 2018-01-22 02:48:53 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:48:53 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:48:53 --> Utf8 Class Initialized
INFO - 2018-01-22 02:48:53 --> URI Class Initialized
INFO - 2018-01-22 02:48:53 --> Router Class Initialized
INFO - 2018-01-22 02:48:53 --> Output Class Initialized
INFO - 2018-01-22 02:48:53 --> Security Class Initialized
DEBUG - 2018-01-22 02:48:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:48:53 --> Input Class Initialized
INFO - 2018-01-22 02:48:53 --> Language Class Initialized
INFO - 2018-01-22 02:48:53 --> Loader Class Initialized
INFO - 2018-01-22 02:48:53 --> Helper loaded: url_helper
INFO - 2018-01-22 02:48:53 --> Helper loaded: general_helper
INFO - 2018-01-22 02:48:53 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:48:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:48:53 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:48:53 --> Controller Class Initialized
INFO - 2018-01-22 02:48:53 --> Model Class Initialized
INFO - 2018-01-22 02:49:54 --> Config Class Initialized
INFO - 2018-01-22 02:49:54 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:49:54 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:49:54 --> Utf8 Class Initialized
INFO - 2018-01-22 02:49:54 --> URI Class Initialized
INFO - 2018-01-22 02:49:54 --> Router Class Initialized
INFO - 2018-01-22 02:49:54 --> Output Class Initialized
INFO - 2018-01-22 02:49:54 --> Security Class Initialized
DEBUG - 2018-01-22 02:49:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:49:54 --> Input Class Initialized
INFO - 2018-01-22 02:49:54 --> Language Class Initialized
INFO - 2018-01-22 02:49:54 --> Loader Class Initialized
INFO - 2018-01-22 02:49:54 --> Helper loaded: url_helper
INFO - 2018-01-22 02:49:54 --> Helper loaded: general_helper
INFO - 2018-01-22 02:49:54 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:49:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:49:54 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:49:54 --> Controller Class Initialized
INFO - 2018-01-22 02:49:54 --> Model Class Initialized
ERROR - 2018-01-22 10:49:54 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:49:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:49:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:49:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:49:54 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:49:54 --> Final output sent to browser
DEBUG - 2018-01-22 10:49:54 --> Total execution time: 0.1061
INFO - 2018-01-22 02:50:04 --> Config Class Initialized
INFO - 2018-01-22 02:50:04 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:50:04 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:50:04 --> Utf8 Class Initialized
INFO - 2018-01-22 02:50:04 --> URI Class Initialized
INFO - 2018-01-22 02:50:04 --> Router Class Initialized
INFO - 2018-01-22 02:50:04 --> Output Class Initialized
INFO - 2018-01-22 02:50:04 --> Security Class Initialized
DEBUG - 2018-01-22 02:50:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:50:04 --> Input Class Initialized
INFO - 2018-01-22 02:50:04 --> Language Class Initialized
INFO - 2018-01-22 02:50:04 --> Loader Class Initialized
INFO - 2018-01-22 02:50:04 --> Helper loaded: url_helper
INFO - 2018-01-22 02:50:04 --> Helper loaded: general_helper
INFO - 2018-01-22 02:50:04 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:50:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:50:04 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:50:04 --> Controller Class Initialized
INFO - 2018-01-22 02:50:04 --> Model Class Initialized
ERROR - 2018-01-22 10:50:06 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:50:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:50:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:50:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:50:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:50:09 --> Final output sent to browser
DEBUG - 2018-01-22 10:50:09 --> Total execution time: 4.2893
INFO - 2018-01-22 02:50:14 --> Config Class Initialized
INFO - 2018-01-22 02:50:14 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:50:14 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:50:14 --> Utf8 Class Initialized
INFO - 2018-01-22 02:50:14 --> URI Class Initialized
INFO - 2018-01-22 02:50:14 --> Router Class Initialized
INFO - 2018-01-22 02:50:14 --> Output Class Initialized
INFO - 2018-01-22 02:50:14 --> Security Class Initialized
DEBUG - 2018-01-22 02:50:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:50:14 --> Input Class Initialized
INFO - 2018-01-22 02:50:14 --> Language Class Initialized
INFO - 2018-01-22 02:50:14 --> Loader Class Initialized
INFO - 2018-01-22 02:50:14 --> Helper loaded: url_helper
INFO - 2018-01-22 02:50:14 --> Helper loaded: general_helper
INFO - 2018-01-22 02:50:14 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:50:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:50:14 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:50:14 --> Controller Class Initialized
INFO - 2018-01-22 02:50:14 --> Model Class Initialized
INFO - 2018-01-22 10:50:45 --> Final output sent to browser
DEBUG - 2018-01-22 10:50:45 --> Total execution time: 31.4469
INFO - 2018-01-22 02:50:45 --> Config Class Initialized
INFO - 2018-01-22 02:50:45 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:50:45 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:50:45 --> Utf8 Class Initialized
INFO - 2018-01-22 02:50:45 --> URI Class Initialized
INFO - 2018-01-22 02:50:45 --> Router Class Initialized
INFO - 2018-01-22 02:50:45 --> Output Class Initialized
INFO - 2018-01-22 02:50:45 --> Security Class Initialized
DEBUG - 2018-01-22 02:50:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:50:45 --> Input Class Initialized
INFO - 2018-01-22 02:50:45 --> Language Class Initialized
INFO - 2018-01-22 02:50:45 --> Loader Class Initialized
INFO - 2018-01-22 02:50:45 --> Helper loaded: url_helper
INFO - 2018-01-22 02:50:45 --> Helper loaded: general_helper
INFO - 2018-01-22 02:50:45 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:50:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:50:45 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:50:45 --> Controller Class Initialized
INFO - 2018-01-22 02:50:45 --> Model Class Initialized
INFO - 2018-01-22 10:50:48 --> Final output sent to browser
DEBUG - 2018-01-22 10:50:48 --> Total execution time: 3.0240
INFO - 2018-01-22 02:54:23 --> Config Class Initialized
INFO - 2018-01-22 02:54:23 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:54:23 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:54:23 --> Utf8 Class Initialized
INFO - 2018-01-22 02:54:23 --> URI Class Initialized
INFO - 2018-01-22 02:54:23 --> Router Class Initialized
INFO - 2018-01-22 02:54:23 --> Output Class Initialized
INFO - 2018-01-22 02:54:23 --> Security Class Initialized
DEBUG - 2018-01-22 02:54:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:54:23 --> Input Class Initialized
INFO - 2018-01-22 02:54:23 --> Language Class Initialized
INFO - 2018-01-22 02:54:23 --> Loader Class Initialized
INFO - 2018-01-22 02:54:23 --> Helper loaded: url_helper
INFO - 2018-01-22 02:54:23 --> Helper loaded: general_helper
INFO - 2018-01-22 02:54:23 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:54:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:54:23 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:54:23 --> Controller Class Initialized
INFO - 2018-01-22 02:54:23 --> Model Class Initialized
ERROR - 2018-01-22 10:54:23 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:54:23 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:54:23 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:54:23 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:54:23 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:54:23 --> Final output sent to browser
DEBUG - 2018-01-22 10:54:23 --> Total execution time: 0.0717
INFO - 2018-01-22 02:54:25 --> Config Class Initialized
INFO - 2018-01-22 02:54:25 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:54:25 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:54:25 --> Utf8 Class Initialized
INFO - 2018-01-22 02:54:25 --> URI Class Initialized
INFO - 2018-01-22 02:54:25 --> Router Class Initialized
INFO - 2018-01-22 02:54:25 --> Output Class Initialized
INFO - 2018-01-22 02:54:25 --> Security Class Initialized
DEBUG - 2018-01-22 02:54:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:54:25 --> Input Class Initialized
INFO - 2018-01-22 02:54:25 --> Language Class Initialized
INFO - 2018-01-22 02:54:25 --> Loader Class Initialized
INFO - 2018-01-22 02:54:25 --> Helper loaded: url_helper
INFO - 2018-01-22 02:54:25 --> Helper loaded: general_helper
INFO - 2018-01-22 02:54:25 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:54:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:54:25 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:54:25 --> Controller Class Initialized
INFO - 2018-01-22 02:54:25 --> Model Class Initialized
ERROR - 2018-01-22 10:54:25 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:54:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:54:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:54:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:54:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:54:25 --> Final output sent to browser
DEBUG - 2018-01-22 10:54:25 --> Total execution time: 0.0488
INFO - 2018-01-22 02:56:27 --> Config Class Initialized
INFO - 2018-01-22 02:56:27 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:56:27 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:56:27 --> Utf8 Class Initialized
INFO - 2018-01-22 02:56:27 --> URI Class Initialized
INFO - 2018-01-22 02:56:27 --> Router Class Initialized
INFO - 2018-01-22 02:56:27 --> Output Class Initialized
INFO - 2018-01-22 02:56:27 --> Security Class Initialized
DEBUG - 2018-01-22 02:56:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:56:27 --> Input Class Initialized
INFO - 2018-01-22 02:56:27 --> Language Class Initialized
INFO - 2018-01-22 02:56:27 --> Loader Class Initialized
INFO - 2018-01-22 02:56:27 --> Helper loaded: url_helper
INFO - 2018-01-22 02:56:27 --> Helper loaded: general_helper
INFO - 2018-01-22 02:56:27 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:56:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:56:27 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:56:27 --> Controller Class Initialized
INFO - 2018-01-22 02:56:27 --> Model Class Initialized
ERROR - 2018-01-22 10:56:27 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:56:27 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:56:27 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:56:27 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:56:27 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:56:27 --> Final output sent to browser
DEBUG - 2018-01-22 10:56:27 --> Total execution time: 0.0511
INFO - 2018-01-22 02:56:30 --> Config Class Initialized
INFO - 2018-01-22 02:56:30 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:56:30 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:56:30 --> Utf8 Class Initialized
INFO - 2018-01-22 02:56:30 --> URI Class Initialized
INFO - 2018-01-22 02:56:30 --> Router Class Initialized
INFO - 2018-01-22 02:56:30 --> Output Class Initialized
INFO - 2018-01-22 02:56:30 --> Security Class Initialized
DEBUG - 2018-01-22 02:56:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:56:30 --> Input Class Initialized
INFO - 2018-01-22 02:56:30 --> Language Class Initialized
INFO - 2018-01-22 02:56:30 --> Loader Class Initialized
INFO - 2018-01-22 02:56:30 --> Helper loaded: url_helper
INFO - 2018-01-22 02:56:30 --> Helper loaded: general_helper
INFO - 2018-01-22 02:56:30 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:56:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:56:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:56:30 --> Controller Class Initialized
INFO - 2018-01-22 02:56:30 --> Model Class Initialized
ERROR - 2018-01-22 10:56:30 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:56:30 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:56:30 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:56:30 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:56:30 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:56:30 --> Final output sent to browser
DEBUG - 2018-01-22 10:56:30 --> Total execution time: 0.1709
INFO - 2018-01-22 02:57:52 --> Config Class Initialized
INFO - 2018-01-22 02:57:52 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:57:52 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:57:52 --> Utf8 Class Initialized
INFO - 2018-01-22 02:57:52 --> URI Class Initialized
INFO - 2018-01-22 02:57:52 --> Router Class Initialized
INFO - 2018-01-22 02:57:52 --> Output Class Initialized
INFO - 2018-01-22 02:57:52 --> Security Class Initialized
DEBUG - 2018-01-22 02:57:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:57:52 --> Input Class Initialized
INFO - 2018-01-22 02:57:52 --> Language Class Initialized
INFO - 2018-01-22 02:57:52 --> Loader Class Initialized
INFO - 2018-01-22 02:57:52 --> Helper loaded: url_helper
INFO - 2018-01-22 02:57:52 --> Helper loaded: general_helper
INFO - 2018-01-22 02:57:52 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:57:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:57:52 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:57:52 --> Controller Class Initialized
INFO - 2018-01-22 02:57:52 --> Model Class Initialized
ERROR - 2018-01-22 10:57:52 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:57:52 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:57:52 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:57:52 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:57:52 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:57:52 --> Final output sent to browser
DEBUG - 2018-01-22 10:57:52 --> Total execution time: 0.0602
INFO - 2018-01-22 02:59:21 --> Config Class Initialized
INFO - 2018-01-22 02:59:21 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:59:21 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:59:21 --> Utf8 Class Initialized
INFO - 2018-01-22 02:59:21 --> URI Class Initialized
INFO - 2018-01-22 02:59:21 --> Router Class Initialized
INFO - 2018-01-22 02:59:21 --> Output Class Initialized
INFO - 2018-01-22 02:59:21 --> Security Class Initialized
DEBUG - 2018-01-22 02:59:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:59:21 --> Input Class Initialized
INFO - 2018-01-22 02:59:21 --> Language Class Initialized
INFO - 2018-01-22 02:59:21 --> Loader Class Initialized
INFO - 2018-01-22 02:59:21 --> Helper loaded: url_helper
INFO - 2018-01-22 02:59:21 --> Helper loaded: general_helper
INFO - 2018-01-22 02:59:21 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:59:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:59:21 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:59:21 --> Controller Class Initialized
INFO - 2018-01-22 02:59:21 --> Model Class Initialized
ERROR - 2018-01-22 10:59:21 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:59:21 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:59:21 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:59:21 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:59:21 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:59:21 --> Final output sent to browser
DEBUG - 2018-01-22 10:59:21 --> Total execution time: 0.0789
INFO - 2018-01-22 02:59:23 --> Config Class Initialized
INFO - 2018-01-22 02:59:23 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:59:23 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:59:23 --> Utf8 Class Initialized
INFO - 2018-01-22 02:59:23 --> URI Class Initialized
INFO - 2018-01-22 02:59:23 --> Router Class Initialized
INFO - 2018-01-22 02:59:23 --> Output Class Initialized
INFO - 2018-01-22 02:59:23 --> Security Class Initialized
DEBUG - 2018-01-22 02:59:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:59:23 --> Input Class Initialized
INFO - 2018-01-22 02:59:23 --> Language Class Initialized
INFO - 2018-01-22 02:59:23 --> Loader Class Initialized
INFO - 2018-01-22 02:59:23 --> Helper loaded: url_helper
INFO - 2018-01-22 02:59:23 --> Helper loaded: general_helper
INFO - 2018-01-22 02:59:23 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:59:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:59:23 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:59:23 --> Controller Class Initialized
INFO - 2018-01-22 02:59:23 --> Model Class Initialized
ERROR - 2018-01-22 10:59:23 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:59:23 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:59:23 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:59:23 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:59:23 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:59:23 --> Final output sent to browser
DEBUG - 2018-01-22 10:59:23 --> Total execution time: 0.0713
INFO - 2018-01-22 02:59:24 --> Config Class Initialized
INFO - 2018-01-22 02:59:24 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:59:24 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:59:24 --> Utf8 Class Initialized
INFO - 2018-01-22 02:59:24 --> URI Class Initialized
INFO - 2018-01-22 02:59:24 --> Router Class Initialized
INFO - 2018-01-22 02:59:24 --> Output Class Initialized
INFO - 2018-01-22 02:59:24 --> Security Class Initialized
DEBUG - 2018-01-22 02:59:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:59:24 --> Input Class Initialized
INFO - 2018-01-22 02:59:24 --> Language Class Initialized
INFO - 2018-01-22 02:59:24 --> Loader Class Initialized
INFO - 2018-01-22 02:59:24 --> Helper loaded: url_helper
INFO - 2018-01-22 02:59:24 --> Helper loaded: general_helper
INFO - 2018-01-22 02:59:24 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:59:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:59:24 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:59:24 --> Controller Class Initialized
INFO - 2018-01-22 02:59:24 --> Model Class Initialized
ERROR - 2018-01-22 10:59:24 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:59:24 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:59:24 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:59:24 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:59:24 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:59:24 --> Final output sent to browser
DEBUG - 2018-01-22 10:59:24 --> Total execution time: 0.0580
INFO - 2018-01-22 02:59:25 --> Config Class Initialized
INFO - 2018-01-22 02:59:25 --> Hooks Class Initialized
DEBUG - 2018-01-22 02:59:25 --> UTF-8 Support Enabled
INFO - 2018-01-22 02:59:25 --> Utf8 Class Initialized
INFO - 2018-01-22 02:59:25 --> URI Class Initialized
INFO - 2018-01-22 02:59:25 --> Router Class Initialized
INFO - 2018-01-22 02:59:25 --> Output Class Initialized
INFO - 2018-01-22 02:59:25 --> Security Class Initialized
DEBUG - 2018-01-22 02:59:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 02:59:25 --> Input Class Initialized
INFO - 2018-01-22 02:59:25 --> Language Class Initialized
INFO - 2018-01-22 02:59:25 --> Loader Class Initialized
INFO - 2018-01-22 02:59:25 --> Helper loaded: url_helper
INFO - 2018-01-22 02:59:25 --> Helper loaded: general_helper
INFO - 2018-01-22 02:59:25 --> Database Driver Class Initialized
DEBUG - 2018-01-22 02:59:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 02:59:25 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 02:59:25 --> Controller Class Initialized
INFO - 2018-01-22 02:59:25 --> Model Class Initialized
ERROR - 2018-01-22 10:59:25 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 10:59:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 10:59:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 10:59:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 10:59:25 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 10:59:25 --> Final output sent to browser
DEBUG - 2018-01-22 10:59:25 --> Total execution time: 0.1064
INFO - 2018-01-22 03:01:23 --> Config Class Initialized
INFO - 2018-01-22 03:01:23 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:01:23 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:01:23 --> Utf8 Class Initialized
INFO - 2018-01-22 03:01:23 --> URI Class Initialized
INFO - 2018-01-22 03:01:23 --> Router Class Initialized
INFO - 2018-01-22 03:01:23 --> Output Class Initialized
INFO - 2018-01-22 03:01:23 --> Security Class Initialized
DEBUG - 2018-01-22 03:01:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:01:23 --> Input Class Initialized
INFO - 2018-01-22 03:01:23 --> Language Class Initialized
INFO - 2018-01-22 03:01:23 --> Loader Class Initialized
INFO - 2018-01-22 03:01:23 --> Helper loaded: url_helper
INFO - 2018-01-22 03:01:23 --> Helper loaded: general_helper
INFO - 2018-01-22 03:01:23 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:01:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:01:23 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:01:23 --> Controller Class Initialized
INFO - 2018-01-22 03:01:23 --> Model Class Initialized
ERROR - 2018-01-22 11:01:23 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 11:01:23 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 11:01:23 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 11:01:23 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 11:01:23 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 11:01:23 --> Final output sent to browser
DEBUG - 2018-01-22 11:01:23 --> Total execution time: 0.0977
INFO - 2018-01-22 03:01:26 --> Config Class Initialized
INFO - 2018-01-22 03:01:26 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:01:26 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:01:26 --> Utf8 Class Initialized
INFO - 2018-01-22 03:01:26 --> URI Class Initialized
INFO - 2018-01-22 03:01:26 --> Router Class Initialized
INFO - 2018-01-22 03:01:26 --> Config Class Initialized
INFO - 2018-01-22 03:01:26 --> Hooks Class Initialized
INFO - 2018-01-22 03:01:26 --> Output Class Initialized
INFO - 2018-01-22 03:01:26 --> Security Class Initialized
DEBUG - 2018-01-22 03:01:26 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:01:26 --> Utf8 Class Initialized
DEBUG - 2018-01-22 03:01:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:01:26 --> Input Class Initialized
INFO - 2018-01-22 03:01:26 --> Language Class Initialized
INFO - 2018-01-22 03:01:26 --> URI Class Initialized
INFO - 2018-01-22 03:01:26 --> Router Class Initialized
INFO - 2018-01-22 03:01:26 --> Loader Class Initialized
INFO - 2018-01-22 03:01:26 --> Helper loaded: url_helper
INFO - 2018-01-22 03:01:26 --> Output Class Initialized
INFO - 2018-01-22 03:01:26 --> Helper loaded: general_helper
INFO - 2018-01-22 03:01:26 --> Security Class Initialized
DEBUG - 2018-01-22 03:01:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:01:26 --> Input Class Initialized
INFO - 2018-01-22 03:01:26 --> Language Class Initialized
INFO - 2018-01-22 03:01:26 --> Database Driver Class Initialized
INFO - 2018-01-22 03:01:26 --> Loader Class Initialized
DEBUG - 2018-01-22 03:01:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:01:26 --> Helper loaded: url_helper
INFO - 2018-01-22 03:01:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:01:26 --> Helper loaded: general_helper
INFO - 2018-01-22 03:01:26 --> Controller Class Initialized
INFO - 2018-01-22 03:01:26 --> Model Class Initialized
INFO - 2018-01-22 11:01:26 --> Final output sent to browser
DEBUG - 2018-01-22 11:01:26 --> Total execution time: 0.1264
INFO - 2018-01-22 03:01:26 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:01:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:01:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:01:26 --> Controller Class Initialized
INFO - 2018-01-22 03:01:26 --> Model Class Initialized
INFO - 2018-01-22 11:01:26 --> Final output sent to browser
DEBUG - 2018-01-22 11:01:26 --> Total execution time: 0.1425
INFO - 2018-01-22 03:01:56 --> Config Class Initialized
INFO - 2018-01-22 03:01:56 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:01:56 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:01:56 --> Utf8 Class Initialized
INFO - 2018-01-22 03:01:56 --> URI Class Initialized
INFO - 2018-01-22 03:01:56 --> Router Class Initialized
INFO - 2018-01-22 03:01:56 --> Output Class Initialized
INFO - 2018-01-22 03:01:56 --> Security Class Initialized
DEBUG - 2018-01-22 03:01:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:01:56 --> Input Class Initialized
INFO - 2018-01-22 03:01:56 --> Language Class Initialized
INFO - 2018-01-22 03:01:56 --> Loader Class Initialized
INFO - 2018-01-22 03:01:56 --> Helper loaded: url_helper
INFO - 2018-01-22 03:01:56 --> Helper loaded: general_helper
INFO - 2018-01-22 03:01:56 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:01:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:01:56 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:01:56 --> Controller Class Initialized
INFO - 2018-01-22 03:01:56 --> Model Class Initialized
ERROR - 2018-01-22 11:01:56 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 11:01:56 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 11:01:56 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 11:01:56 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 11:01:56 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 11:01:56 --> Final output sent to browser
DEBUG - 2018-01-22 11:01:56 --> Total execution time: 0.0493
INFO - 2018-01-22 03:01:59 --> Config Class Initialized
INFO - 2018-01-22 03:01:59 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:01:59 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:01:59 --> Utf8 Class Initialized
INFO - 2018-01-22 03:01:59 --> Config Class Initialized
INFO - 2018-01-22 03:01:59 --> Hooks Class Initialized
INFO - 2018-01-22 03:01:59 --> URI Class Initialized
INFO - 2018-01-22 03:01:59 --> Router Class Initialized
DEBUG - 2018-01-22 03:01:59 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:01:59 --> Utf8 Class Initialized
INFO - 2018-01-22 03:01:59 --> Output Class Initialized
INFO - 2018-01-22 03:01:59 --> URI Class Initialized
INFO - 2018-01-22 03:01:59 --> Router Class Initialized
INFO - 2018-01-22 03:01:59 --> Security Class Initialized
DEBUG - 2018-01-22 03:01:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:01:59 --> Input Class Initialized
INFO - 2018-01-22 03:01:59 --> Output Class Initialized
INFO - 2018-01-22 03:01:59 --> Language Class Initialized
INFO - 2018-01-22 03:01:59 --> Security Class Initialized
INFO - 2018-01-22 03:01:59 --> Loader Class Initialized
DEBUG - 2018-01-22 03:01:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:01:59 --> Helper loaded: url_helper
INFO - 2018-01-22 03:01:59 --> Input Class Initialized
INFO - 2018-01-22 03:01:59 --> Helper loaded: general_helper
INFO - 2018-01-22 03:01:59 --> Language Class Initialized
INFO - 2018-01-22 03:01:59 --> Loader Class Initialized
INFO - 2018-01-22 03:01:59 --> Helper loaded: url_helper
INFO - 2018-01-22 03:01:59 --> Helper loaded: general_helper
INFO - 2018-01-22 03:01:59 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:01:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:02:00 --> Database Driver Class Initialized
INFO - 2018-01-22 03:02:00 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:02:00 --> Controller Class Initialized
DEBUG - 2018-01-22 03:02:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:02:00 --> Model Class Initialized
INFO - 2018-01-22 11:02:00 --> Final output sent to browser
DEBUG - 2018-01-22 11:02:00 --> Total execution time: 0.1209
INFO - 2018-01-22 03:02:00 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:02:00 --> Controller Class Initialized
INFO - 2018-01-22 03:02:00 --> Model Class Initialized
INFO - 2018-01-22 11:02:00 --> Final output sent to browser
DEBUG - 2018-01-22 11:02:00 --> Total execution time: 0.1493
INFO - 2018-01-22 03:02:46 --> Config Class Initialized
INFO - 2018-01-22 03:02:46 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:02:46 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:02:46 --> Utf8 Class Initialized
INFO - 2018-01-22 03:02:46 --> URI Class Initialized
INFO - 2018-01-22 03:02:46 --> Router Class Initialized
INFO - 2018-01-22 03:02:46 --> Output Class Initialized
INFO - 2018-01-22 03:02:46 --> Security Class Initialized
DEBUG - 2018-01-22 03:02:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:02:46 --> Input Class Initialized
INFO - 2018-01-22 03:02:46 --> Language Class Initialized
INFO - 2018-01-22 03:02:46 --> Loader Class Initialized
INFO - 2018-01-22 03:02:46 --> Helper loaded: url_helper
INFO - 2018-01-22 03:02:46 --> Helper loaded: general_helper
INFO - 2018-01-22 03:02:46 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:02:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:02:46 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:02:46 --> Controller Class Initialized
INFO - 2018-01-22 03:02:46 --> Model Class Initialized
ERROR - 2018-01-22 11:02:48 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 11:02:51 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 11:02:51 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 11:02:51 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 11:02:51 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 11:02:51 --> Final output sent to browser
DEBUG - 2018-01-22 11:02:51 --> Total execution time: 4.7505
INFO - 2018-01-22 03:02:55 --> Config Class Initialized
INFO - 2018-01-22 03:02:55 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:02:55 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:02:55 --> Utf8 Class Initialized
INFO - 2018-01-22 03:02:55 --> URI Class Initialized
INFO - 2018-01-22 03:02:55 --> Router Class Initialized
INFO - 2018-01-22 03:02:55 --> Output Class Initialized
INFO - 2018-01-22 03:02:55 --> Security Class Initialized
DEBUG - 2018-01-22 03:02:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:02:55 --> Input Class Initialized
INFO - 2018-01-22 03:02:55 --> Language Class Initialized
INFO - 2018-01-22 03:02:55 --> Loader Class Initialized
INFO - 2018-01-22 03:02:55 --> Helper loaded: url_helper
INFO - 2018-01-22 03:02:55 --> Helper loaded: general_helper
INFO - 2018-01-22 03:02:55 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:02:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:02:55 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:02:55 --> Controller Class Initialized
INFO - 2018-01-22 03:02:55 --> Model Class Initialized
INFO - 2018-01-22 11:03:01 --> Final output sent to browser
DEBUG - 2018-01-22 11:03:01 --> Total execution time: 5.6510
INFO - 2018-01-22 03:03:01 --> Config Class Initialized
INFO - 2018-01-22 03:03:01 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:03:01 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:03:01 --> Utf8 Class Initialized
INFO - 2018-01-22 03:03:01 --> URI Class Initialized
INFO - 2018-01-22 03:03:01 --> Router Class Initialized
INFO - 2018-01-22 03:03:01 --> Output Class Initialized
INFO - 2018-01-22 03:03:01 --> Security Class Initialized
DEBUG - 2018-01-22 03:03:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:03:01 --> Input Class Initialized
INFO - 2018-01-22 03:03:01 --> Language Class Initialized
INFO - 2018-01-22 03:03:01 --> Loader Class Initialized
INFO - 2018-01-22 03:03:01 --> Helper loaded: url_helper
INFO - 2018-01-22 03:03:01 --> Helper loaded: general_helper
INFO - 2018-01-22 03:03:01 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:03:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:03:01 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:03:01 --> Controller Class Initialized
INFO - 2018-01-22 03:03:01 --> Model Class Initialized
INFO - 2018-01-22 11:04:19 --> Final output sent to browser
DEBUG - 2018-01-22 11:04:19 --> Total execution time: 78.1151
INFO - 2018-01-22 03:04:31 --> Config Class Initialized
INFO - 2018-01-22 03:04:31 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:04:31 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:04:31 --> Utf8 Class Initialized
INFO - 2018-01-22 03:04:31 --> URI Class Initialized
INFO - 2018-01-22 03:04:31 --> Router Class Initialized
INFO - 2018-01-22 03:04:31 --> Output Class Initialized
INFO - 2018-01-22 03:04:31 --> Security Class Initialized
DEBUG - 2018-01-22 03:04:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:04:31 --> Input Class Initialized
INFO - 2018-01-22 03:04:31 --> Language Class Initialized
INFO - 2018-01-22 03:04:31 --> Loader Class Initialized
INFO - 2018-01-22 03:04:31 --> Helper loaded: url_helper
INFO - 2018-01-22 03:04:31 --> Helper loaded: general_helper
INFO - 2018-01-22 03:04:31 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:04:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:04:31 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:04:31 --> Controller Class Initialized
INFO - 2018-01-22 03:04:31 --> Model Class Initialized
ERROR - 2018-01-22 11:04:33 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 11:04:40 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 11:04:40 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 11:04:40 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 11:04:40 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 11:04:40 --> Final output sent to browser
DEBUG - 2018-01-22 11:04:40 --> Total execution time: 9.7608
INFO - 2018-01-22 03:04:45 --> Config Class Initialized
INFO - 2018-01-22 03:04:45 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:04:45 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:04:45 --> Utf8 Class Initialized
INFO - 2018-01-22 03:04:45 --> URI Class Initialized
INFO - 2018-01-22 03:04:45 --> Router Class Initialized
INFO - 2018-01-22 03:04:45 --> Output Class Initialized
INFO - 2018-01-22 03:04:45 --> Security Class Initialized
DEBUG - 2018-01-22 03:04:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:04:45 --> Input Class Initialized
INFO - 2018-01-22 03:04:45 --> Language Class Initialized
INFO - 2018-01-22 03:04:45 --> Loader Class Initialized
INFO - 2018-01-22 03:04:45 --> Helper loaded: url_helper
INFO - 2018-01-22 03:04:45 --> Helper loaded: general_helper
INFO - 2018-01-22 03:04:45 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:04:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:04:45 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:04:45 --> Controller Class Initialized
INFO - 2018-01-22 03:04:45 --> Model Class Initialized
INFO - 2018-01-22 11:04:51 --> Final output sent to browser
DEBUG - 2018-01-22 11:04:51 --> Total execution time: 6.0403
INFO - 2018-01-22 03:04:51 --> Config Class Initialized
INFO - 2018-01-22 03:04:51 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:04:51 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:04:51 --> Utf8 Class Initialized
INFO - 2018-01-22 03:04:51 --> URI Class Initialized
INFO - 2018-01-22 03:04:51 --> Router Class Initialized
INFO - 2018-01-22 03:04:51 --> Output Class Initialized
INFO - 2018-01-22 03:04:51 --> Security Class Initialized
DEBUG - 2018-01-22 03:04:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:04:51 --> Input Class Initialized
INFO - 2018-01-22 03:04:51 --> Language Class Initialized
INFO - 2018-01-22 03:04:51 --> Loader Class Initialized
INFO - 2018-01-22 03:04:51 --> Helper loaded: url_helper
INFO - 2018-01-22 03:04:51 --> Helper loaded: general_helper
INFO - 2018-01-22 03:04:51 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:04:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:04:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:04:51 --> Controller Class Initialized
INFO - 2018-01-22 03:04:51 --> Model Class Initialized
INFO - 2018-01-22 11:04:57 --> Final output sent to browser
DEBUG - 2018-01-22 11:04:57 --> Total execution time: 5.8544
INFO - 2018-01-22 03:09:29 --> Config Class Initialized
INFO - 2018-01-22 03:09:29 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:09:29 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:09:29 --> Utf8 Class Initialized
INFO - 2018-01-22 03:09:29 --> URI Class Initialized
INFO - 2018-01-22 03:09:29 --> Router Class Initialized
INFO - 2018-01-22 03:09:29 --> Output Class Initialized
INFO - 2018-01-22 03:09:29 --> Security Class Initialized
DEBUG - 2018-01-22 03:09:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:09:29 --> Input Class Initialized
INFO - 2018-01-22 03:09:29 --> Language Class Initialized
INFO - 2018-01-22 03:09:29 --> Loader Class Initialized
INFO - 2018-01-22 03:09:29 --> Helper loaded: url_helper
INFO - 2018-01-22 03:09:29 --> Helper loaded: general_helper
INFO - 2018-01-22 03:09:29 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:09:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:09:29 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:09:29 --> Controller Class Initialized
INFO - 2018-01-22 03:09:29 --> Model Class Initialized
ERROR - 2018-01-22 11:09:29 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 11:09:29 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 11:09:29 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 11:09:29 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 11:09:29 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 11:09:29 --> Final output sent to browser
DEBUG - 2018-01-22 11:09:29 --> Total execution time: 0.1313
INFO - 2018-01-22 03:09:33 --> Config Class Initialized
INFO - 2018-01-22 03:09:33 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:09:33 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:09:33 --> Utf8 Class Initialized
INFO - 2018-01-22 03:09:33 --> URI Class Initialized
INFO - 2018-01-22 03:09:33 --> Router Class Initialized
INFO - 2018-01-22 03:09:33 --> Output Class Initialized
INFO - 2018-01-22 03:09:33 --> Security Class Initialized
DEBUG - 2018-01-22 03:09:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:09:33 --> Input Class Initialized
INFO - 2018-01-22 03:09:33 --> Language Class Initialized
INFO - 2018-01-22 03:09:33 --> Loader Class Initialized
INFO - 2018-01-22 03:09:33 --> Helper loaded: url_helper
INFO - 2018-01-22 03:09:33 --> Helper loaded: general_helper
INFO - 2018-01-22 03:09:33 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:09:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:09:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:09:33 --> Controller Class Initialized
INFO - 2018-01-22 03:09:33 --> Model Class Initialized
INFO - 2018-01-22 11:09:33 --> Final output sent to browser
DEBUG - 2018-01-22 11:09:33 --> Total execution time: 0.1106
INFO - 2018-01-22 03:09:35 --> Config Class Initialized
INFO - 2018-01-22 03:09:35 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:09:35 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:09:35 --> Utf8 Class Initialized
INFO - 2018-01-22 03:09:35 --> URI Class Initialized
INFO - 2018-01-22 03:09:35 --> Router Class Initialized
INFO - 2018-01-22 03:09:35 --> Output Class Initialized
INFO - 2018-01-22 03:09:35 --> Security Class Initialized
DEBUG - 2018-01-22 03:09:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:09:35 --> Input Class Initialized
INFO - 2018-01-22 03:09:35 --> Language Class Initialized
INFO - 2018-01-22 03:09:35 --> Loader Class Initialized
INFO - 2018-01-22 03:09:35 --> Helper loaded: url_helper
INFO - 2018-01-22 03:09:35 --> Helper loaded: general_helper
INFO - 2018-01-22 03:09:35 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:09:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:09:35 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:09:35 --> Controller Class Initialized
INFO - 2018-01-22 03:09:35 --> Model Class Initialized
INFO - 2018-01-22 11:09:35 --> Final output sent to browser
DEBUG - 2018-01-22 11:09:35 --> Total execution time: 0.0618
INFO - 2018-01-22 03:10:11 --> Config Class Initialized
INFO - 2018-01-22 03:10:11 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:10:11 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:10:11 --> Utf8 Class Initialized
INFO - 2018-01-22 03:10:11 --> URI Class Initialized
INFO - 2018-01-22 03:10:11 --> Router Class Initialized
INFO - 2018-01-22 03:10:11 --> Output Class Initialized
INFO - 2018-01-22 03:10:11 --> Security Class Initialized
DEBUG - 2018-01-22 03:10:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:10:11 --> Input Class Initialized
INFO - 2018-01-22 03:10:11 --> Language Class Initialized
INFO - 2018-01-22 03:10:11 --> Loader Class Initialized
INFO - 2018-01-22 03:10:11 --> Helper loaded: url_helper
INFO - 2018-01-22 03:10:11 --> Helper loaded: general_helper
INFO - 2018-01-22 03:10:11 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:10:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:10:11 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:10:11 --> Controller Class Initialized
INFO - 2018-01-22 03:10:11 --> Model Class Initialized
ERROR - 2018-01-22 11:10:11 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 11:10:11 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 11:10:11 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 11:10:11 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 11:10:11 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 11:10:11 --> Final output sent to browser
DEBUG - 2018-01-22 11:10:11 --> Total execution time: 0.0747
INFO - 2018-01-22 03:10:14 --> Config Class Initialized
INFO - 2018-01-22 03:10:14 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:10:14 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:10:14 --> Utf8 Class Initialized
INFO - 2018-01-22 03:10:14 --> URI Class Initialized
INFO - 2018-01-22 03:10:14 --> Router Class Initialized
INFO - 2018-01-22 03:10:14 --> Output Class Initialized
INFO - 2018-01-22 03:10:14 --> Security Class Initialized
DEBUG - 2018-01-22 03:10:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:10:14 --> Input Class Initialized
INFO - 2018-01-22 03:10:14 --> Language Class Initialized
INFO - 2018-01-22 03:10:14 --> Loader Class Initialized
INFO - 2018-01-22 03:10:14 --> Helper loaded: url_helper
INFO - 2018-01-22 03:10:14 --> Helper loaded: general_helper
INFO - 2018-01-22 03:10:14 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:10:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:10:14 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:10:14 --> Controller Class Initialized
INFO - 2018-01-22 03:10:14 --> Model Class Initialized
INFO - 2018-01-22 11:10:14 --> Final output sent to browser
DEBUG - 2018-01-22 11:10:14 --> Total execution time: 0.0925
INFO - 2018-01-22 03:10:19 --> Config Class Initialized
INFO - 2018-01-22 03:10:19 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:10:19 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:10:19 --> Utf8 Class Initialized
INFO - 2018-01-22 03:10:19 --> URI Class Initialized
INFO - 2018-01-22 03:10:19 --> Router Class Initialized
INFO - 2018-01-22 03:10:19 --> Output Class Initialized
INFO - 2018-01-22 03:10:19 --> Security Class Initialized
DEBUG - 2018-01-22 03:10:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:10:19 --> Input Class Initialized
INFO - 2018-01-22 03:10:19 --> Language Class Initialized
INFO - 2018-01-22 03:10:19 --> Loader Class Initialized
INFO - 2018-01-22 03:10:19 --> Helper loaded: url_helper
INFO - 2018-01-22 03:10:19 --> Helper loaded: general_helper
INFO - 2018-01-22 03:10:19 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:10:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:10:19 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:10:19 --> Controller Class Initialized
INFO - 2018-01-22 03:10:19 --> Model Class Initialized
INFO - 2018-01-22 11:10:19 --> Final output sent to browser
DEBUG - 2018-01-22 11:10:19 --> Total execution time: 0.0626
INFO - 2018-01-22 03:11:09 --> Config Class Initialized
INFO - 2018-01-22 03:11:09 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:11:09 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:11:09 --> Utf8 Class Initialized
INFO - 2018-01-22 03:11:09 --> URI Class Initialized
INFO - 2018-01-22 03:11:09 --> Router Class Initialized
INFO - 2018-01-22 03:11:09 --> Output Class Initialized
INFO - 2018-01-22 03:11:09 --> Security Class Initialized
DEBUG - 2018-01-22 03:11:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:11:09 --> Input Class Initialized
INFO - 2018-01-22 03:11:09 --> Language Class Initialized
INFO - 2018-01-22 03:11:09 --> Loader Class Initialized
INFO - 2018-01-22 03:11:09 --> Helper loaded: url_helper
INFO - 2018-01-22 03:11:09 --> Helper loaded: general_helper
INFO - 2018-01-22 03:11:09 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:11:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:11:09 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:11:09 --> Controller Class Initialized
INFO - 2018-01-22 03:11:09 --> Model Class Initialized
ERROR - 2018-01-22 11:11:09 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 11:11:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 11:11:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 11:11:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 11:11:09 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 11:11:09 --> Final output sent to browser
DEBUG - 2018-01-22 11:11:09 --> Total execution time: 0.0552
INFO - 2018-01-22 03:11:12 --> Config Class Initialized
INFO - 2018-01-22 03:11:12 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:11:12 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:11:12 --> Utf8 Class Initialized
INFO - 2018-01-22 03:11:12 --> URI Class Initialized
INFO - 2018-01-22 03:11:12 --> Router Class Initialized
INFO - 2018-01-22 03:11:12 --> Output Class Initialized
INFO - 2018-01-22 03:11:12 --> Security Class Initialized
DEBUG - 2018-01-22 03:11:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:11:12 --> Input Class Initialized
INFO - 2018-01-22 03:11:12 --> Language Class Initialized
INFO - 2018-01-22 03:11:12 --> Loader Class Initialized
INFO - 2018-01-22 03:11:12 --> Helper loaded: url_helper
INFO - 2018-01-22 03:11:12 --> Helper loaded: general_helper
INFO - 2018-01-22 03:11:12 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:11:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:11:12 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:11:12 --> Controller Class Initialized
INFO - 2018-01-22 03:11:12 --> Model Class Initialized
INFO - 2018-01-22 11:11:12 --> Final output sent to browser
DEBUG - 2018-01-22 11:11:12 --> Total execution time: 0.0799
INFO - 2018-01-22 03:11:15 --> Config Class Initialized
INFO - 2018-01-22 03:11:15 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:11:15 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:11:15 --> Utf8 Class Initialized
INFO - 2018-01-22 03:11:15 --> URI Class Initialized
INFO - 2018-01-22 03:11:15 --> Router Class Initialized
INFO - 2018-01-22 03:11:15 --> Output Class Initialized
INFO - 2018-01-22 03:11:15 --> Security Class Initialized
DEBUG - 2018-01-22 03:11:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:11:15 --> Input Class Initialized
INFO - 2018-01-22 03:11:15 --> Language Class Initialized
INFO - 2018-01-22 03:11:15 --> Loader Class Initialized
INFO - 2018-01-22 03:11:15 --> Helper loaded: url_helper
INFO - 2018-01-22 03:11:15 --> Helper loaded: general_helper
INFO - 2018-01-22 03:11:15 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:11:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:11:15 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:11:15 --> Controller Class Initialized
INFO - 2018-01-22 03:11:15 --> Model Class Initialized
INFO - 2018-01-22 11:11:15 --> Final output sent to browser
DEBUG - 2018-01-22 11:11:15 --> Total execution time: 0.0668
INFO - 2018-01-22 03:11:17 --> Config Class Initialized
INFO - 2018-01-22 03:11:17 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:11:17 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:11:17 --> Utf8 Class Initialized
INFO - 2018-01-22 03:11:17 --> URI Class Initialized
INFO - 2018-01-22 03:11:17 --> Router Class Initialized
INFO - 2018-01-22 03:11:17 --> Output Class Initialized
INFO - 2018-01-22 03:11:17 --> Security Class Initialized
DEBUG - 2018-01-22 03:11:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:11:17 --> Input Class Initialized
INFO - 2018-01-22 03:11:17 --> Language Class Initialized
INFO - 2018-01-22 03:11:17 --> Loader Class Initialized
INFO - 2018-01-22 03:11:17 --> Helper loaded: url_helper
INFO - 2018-01-22 03:11:17 --> Helper loaded: general_helper
INFO - 2018-01-22 03:11:17 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:11:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:11:17 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:11:17 --> Controller Class Initialized
INFO - 2018-01-22 03:11:17 --> Model Class Initialized
INFO - 2018-01-22 11:11:17 --> Final output sent to browser
DEBUG - 2018-01-22 11:11:17 --> Total execution time: 0.0630
INFO - 2018-01-22 03:11:32 --> Config Class Initialized
INFO - 2018-01-22 03:11:32 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:11:32 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:11:32 --> Utf8 Class Initialized
INFO - 2018-01-22 03:11:32 --> URI Class Initialized
INFO - 2018-01-22 03:11:32 --> Router Class Initialized
INFO - 2018-01-22 03:11:32 --> Output Class Initialized
INFO - 2018-01-22 03:11:32 --> Security Class Initialized
DEBUG - 2018-01-22 03:11:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:11:32 --> Input Class Initialized
INFO - 2018-01-22 03:11:32 --> Language Class Initialized
INFO - 2018-01-22 03:11:32 --> Loader Class Initialized
INFO - 2018-01-22 03:11:32 --> Helper loaded: url_helper
INFO - 2018-01-22 03:11:32 --> Helper loaded: general_helper
INFO - 2018-01-22 03:11:32 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:11:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:11:32 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:11:32 --> Controller Class Initialized
INFO - 2018-01-22 03:11:32 --> Model Class Initialized
INFO - 2018-01-22 11:11:32 --> Final output sent to browser
DEBUG - 2018-01-22 11:11:32 --> Total execution time: 0.0651
INFO - 2018-01-22 03:11:40 --> Config Class Initialized
INFO - 2018-01-22 03:11:40 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:11:40 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:11:40 --> Utf8 Class Initialized
INFO - 2018-01-22 03:11:40 --> URI Class Initialized
INFO - 2018-01-22 03:11:40 --> Router Class Initialized
INFO - 2018-01-22 03:11:40 --> Output Class Initialized
INFO - 2018-01-22 03:11:40 --> Security Class Initialized
DEBUG - 2018-01-22 03:11:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:11:40 --> Input Class Initialized
INFO - 2018-01-22 03:11:40 --> Language Class Initialized
INFO - 2018-01-22 03:11:40 --> Loader Class Initialized
INFO - 2018-01-22 03:11:40 --> Helper loaded: url_helper
INFO - 2018-01-22 03:11:40 --> Helper loaded: general_helper
INFO - 2018-01-22 03:11:40 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:11:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:11:40 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:11:40 --> Controller Class Initialized
INFO - 2018-01-22 03:11:40 --> Model Class Initialized
INFO - 2018-01-22 11:11:40 --> Final output sent to browser
DEBUG - 2018-01-22 11:11:40 --> Total execution time: 0.0777
INFO - 2018-01-22 03:11:43 --> Config Class Initialized
INFO - 2018-01-22 03:11:43 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:11:43 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:11:43 --> Utf8 Class Initialized
INFO - 2018-01-22 03:11:43 --> URI Class Initialized
INFO - 2018-01-22 03:11:43 --> Router Class Initialized
INFO - 2018-01-22 03:11:43 --> Output Class Initialized
INFO - 2018-01-22 03:11:43 --> Security Class Initialized
DEBUG - 2018-01-22 03:11:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:11:43 --> Input Class Initialized
INFO - 2018-01-22 03:11:43 --> Language Class Initialized
INFO - 2018-01-22 03:11:43 --> Loader Class Initialized
INFO - 2018-01-22 03:11:43 --> Helper loaded: url_helper
INFO - 2018-01-22 03:11:43 --> Helper loaded: general_helper
INFO - 2018-01-22 03:11:43 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:11:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:11:43 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:11:43 --> Controller Class Initialized
INFO - 2018-01-22 03:11:43 --> Model Class Initialized
INFO - 2018-01-22 11:11:43 --> Final output sent to browser
DEBUG - 2018-01-22 11:11:43 --> Total execution time: 0.0471
INFO - 2018-01-22 03:12:34 --> Config Class Initialized
INFO - 2018-01-22 03:12:34 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:12:34 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:12:34 --> Utf8 Class Initialized
INFO - 2018-01-22 03:12:34 --> URI Class Initialized
INFO - 2018-01-22 03:12:34 --> Router Class Initialized
INFO - 2018-01-22 03:12:34 --> Output Class Initialized
INFO - 2018-01-22 03:12:34 --> Security Class Initialized
DEBUG - 2018-01-22 03:12:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:12:34 --> Input Class Initialized
INFO - 2018-01-22 03:12:34 --> Language Class Initialized
INFO - 2018-01-22 03:12:34 --> Loader Class Initialized
INFO - 2018-01-22 03:12:34 --> Helper loaded: url_helper
INFO - 2018-01-22 03:12:34 --> Helper loaded: general_helper
INFO - 2018-01-22 03:12:34 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:12:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:12:34 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:12:34 --> Controller Class Initialized
INFO - 2018-01-22 03:12:34 --> Model Class Initialized
ERROR - 2018-01-22 11:12:36 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 11:12:39 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 11:12:39 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 11:12:39 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 11:12:39 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 11:12:39 --> Final output sent to browser
DEBUG - 2018-01-22 11:12:39 --> Total execution time: 4.5975
INFO - 2018-01-22 03:12:43 --> Config Class Initialized
INFO - 2018-01-22 03:12:43 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:12:43 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:12:43 --> Utf8 Class Initialized
INFO - 2018-01-22 03:12:43 --> URI Class Initialized
INFO - 2018-01-22 03:12:43 --> Router Class Initialized
INFO - 2018-01-22 03:12:43 --> Output Class Initialized
INFO - 2018-01-22 03:12:43 --> Security Class Initialized
DEBUG - 2018-01-22 03:12:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:12:43 --> Input Class Initialized
INFO - 2018-01-22 03:12:43 --> Language Class Initialized
INFO - 2018-01-22 03:12:43 --> Loader Class Initialized
INFO - 2018-01-22 03:12:43 --> Helper loaded: url_helper
INFO - 2018-01-22 03:12:43 --> Helper loaded: general_helper
INFO - 2018-01-22 03:12:43 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:12:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:12:43 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:12:43 --> Controller Class Initialized
INFO - 2018-01-22 03:12:43 --> Model Class Initialized
INFO - 2018-01-22 11:12:53 --> Final output sent to browser
DEBUG - 2018-01-22 11:12:53 --> Total execution time: 9.6322
INFO - 2018-01-22 03:12:53 --> Config Class Initialized
INFO - 2018-01-22 03:12:53 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:12:53 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:12:53 --> Utf8 Class Initialized
INFO - 2018-01-22 03:12:53 --> URI Class Initialized
INFO - 2018-01-22 03:12:53 --> Router Class Initialized
INFO - 2018-01-22 03:12:53 --> Output Class Initialized
INFO - 2018-01-22 03:12:53 --> Security Class Initialized
DEBUG - 2018-01-22 03:12:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:12:53 --> Input Class Initialized
INFO - 2018-01-22 03:12:53 --> Language Class Initialized
INFO - 2018-01-22 03:12:53 --> Loader Class Initialized
INFO - 2018-01-22 03:12:53 --> Helper loaded: url_helper
INFO - 2018-01-22 03:12:53 --> Helper loaded: general_helper
INFO - 2018-01-22 03:12:53 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:12:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:12:53 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:12:53 --> Controller Class Initialized
INFO - 2018-01-22 03:12:53 --> Model Class Initialized
INFO - 2018-01-22 03:15:03 --> Config Class Initialized
INFO - 2018-01-22 03:15:03 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:03 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:03 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:03 --> URI Class Initialized
INFO - 2018-01-22 03:15:03 --> Router Class Initialized
INFO - 2018-01-22 03:15:03 --> Output Class Initialized
INFO - 2018-01-22 03:15:03 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:03 --> Input Class Initialized
INFO - 2018-01-22 03:15:03 --> Language Class Initialized
INFO - 2018-01-22 03:15:03 --> Loader Class Initialized
INFO - 2018-01-22 03:15:03 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:03 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:03 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:03 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:03 --> Controller Class Initialized
INFO - 2018-01-22 03:15:03 --> Model Class Initialized
INFO - 2018-01-22 11:15:08 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:08 --> Total execution time: 5.0317
INFO - 2018-01-22 03:15:14 --> Config Class Initialized
INFO - 2018-01-22 03:15:14 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:14 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:14 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:14 --> URI Class Initialized
INFO - 2018-01-22 03:15:14 --> Router Class Initialized
INFO - 2018-01-22 03:15:14 --> Output Class Initialized
INFO - 2018-01-22 03:15:14 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:14 --> Input Class Initialized
INFO - 2018-01-22 03:15:14 --> Language Class Initialized
INFO - 2018-01-22 03:15:14 --> Loader Class Initialized
INFO - 2018-01-22 03:15:14 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:14 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:14 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:14 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:14 --> Controller Class Initialized
INFO - 2018-01-22 03:15:14 --> Model Class Initialized
ERROR - 2018-01-22 11:15:14 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 11:15:14 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 11:15:14 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 11:15:14 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 11:15:14 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 11:15:14 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:14 --> Total execution time: 0.0645
INFO - 2018-01-22 03:15:17 --> Config Class Initialized
INFO - 2018-01-22 03:15:17 --> Hooks Class Initialized
INFO - 2018-01-22 03:15:17 --> Config Class Initialized
DEBUG - 2018-01-22 03:15:17 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:17 --> Hooks Class Initialized
INFO - 2018-01-22 03:15:17 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:17 --> URI Class Initialized
DEBUG - 2018-01-22 03:15:17 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:17 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:17 --> Router Class Initialized
INFO - 2018-01-22 03:15:17 --> URI Class Initialized
INFO - 2018-01-22 03:15:17 --> Output Class Initialized
INFO - 2018-01-22 03:15:17 --> Router Class Initialized
INFO - 2018-01-22 03:15:17 --> Security Class Initialized
INFO - 2018-01-22 03:15:17 --> Output Class Initialized
DEBUG - 2018-01-22 03:15:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:17 --> Input Class Initialized
INFO - 2018-01-22 03:15:17 --> Security Class Initialized
INFO - 2018-01-22 03:15:17 --> Language Class Initialized
DEBUG - 2018-01-22 03:15:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:17 --> Input Class Initialized
INFO - 2018-01-22 03:15:17 --> Loader Class Initialized
INFO - 2018-01-22 03:15:17 --> Language Class Initialized
INFO - 2018-01-22 03:15:17 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:17 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:17 --> Loader Class Initialized
INFO - 2018-01-22 03:15:17 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:17 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:17 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:17 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:17 --> Database Driver Class Initialized
INFO - 2018-01-22 03:15:17 --> Controller Class Initialized
INFO - 2018-01-22 03:15:17 --> Model Class Initialized
DEBUG - 2018-01-22 03:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 11:15:17 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:17 --> Total execution time: 0.0593
INFO - 2018-01-22 03:15:17 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:17 --> Controller Class Initialized
INFO - 2018-01-22 03:15:17 --> Model Class Initialized
INFO - 2018-01-22 11:15:17 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:17 --> Total execution time: 0.0712
INFO - 2018-01-22 03:15:17 --> Config Class Initialized
INFO - 2018-01-22 03:15:17 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:17 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:17 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:17 --> URI Class Initialized
INFO - 2018-01-22 03:15:17 --> Router Class Initialized
INFO - 2018-01-22 03:15:17 --> Output Class Initialized
INFO - 2018-01-22 03:15:17 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:17 --> Input Class Initialized
INFO - 2018-01-22 03:15:17 --> Language Class Initialized
INFO - 2018-01-22 03:15:17 --> Loader Class Initialized
INFO - 2018-01-22 03:15:17 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:17 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:17 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:17 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:17 --> Controller Class Initialized
INFO - 2018-01-22 03:15:17 --> Model Class Initialized
INFO - 2018-01-22 11:15:17 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:17 --> Total execution time: 0.0502
INFO - 2018-01-22 03:15:20 --> Config Class Initialized
INFO - 2018-01-22 03:15:20 --> Hooks Class Initialized
INFO - 2018-01-22 03:15:20 --> Config Class Initialized
INFO - 2018-01-22 03:15:20 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:20 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:20 --> Utf8 Class Initialized
DEBUG - 2018-01-22 03:15:20 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:20 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:20 --> URI Class Initialized
INFO - 2018-01-22 03:15:20 --> URI Class Initialized
INFO - 2018-01-22 03:15:20 --> Router Class Initialized
INFO - 2018-01-22 03:15:20 --> Router Class Initialized
INFO - 2018-01-22 03:15:20 --> Output Class Initialized
INFO - 2018-01-22 03:15:20 --> Output Class Initialized
INFO - 2018-01-22 03:15:20 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:20 --> Security Class Initialized
INFO - 2018-01-22 03:15:20 --> Input Class Initialized
INFO - 2018-01-22 03:15:20 --> Language Class Initialized
DEBUG - 2018-01-22 03:15:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:20 --> Input Class Initialized
INFO - 2018-01-22 03:15:20 --> Language Class Initialized
INFO - 2018-01-22 03:15:20 --> Loader Class Initialized
INFO - 2018-01-22 03:15:20 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:20 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:20 --> Loader Class Initialized
INFO - 2018-01-22 03:15:20 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:20 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:20 --> Database Driver Class Initialized
INFO - 2018-01-22 03:15:20 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:20 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:20 --> Controller Class Initialized
DEBUG - 2018-01-22 03:15:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:20 --> Model Class Initialized
INFO - 2018-01-22 11:15:20 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:20 --> Total execution time: 0.0760
INFO - 2018-01-22 03:15:20 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:20 --> Controller Class Initialized
INFO - 2018-01-22 03:15:20 --> Model Class Initialized
INFO - 2018-01-22 11:15:20 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:20 --> Total execution time: 0.1130
INFO - 2018-01-22 03:15:20 --> Config Class Initialized
INFO - 2018-01-22 03:15:20 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:20 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:20 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:20 --> URI Class Initialized
INFO - 2018-01-22 03:15:20 --> Router Class Initialized
INFO - 2018-01-22 03:15:20 --> Output Class Initialized
INFO - 2018-01-22 03:15:20 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:20 --> Input Class Initialized
INFO - 2018-01-22 03:15:20 --> Language Class Initialized
INFO - 2018-01-22 03:15:20 --> Loader Class Initialized
INFO - 2018-01-22 03:15:20 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:20 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:20 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:20 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:20 --> Controller Class Initialized
INFO - 2018-01-22 03:15:20 --> Model Class Initialized
INFO - 2018-01-22 11:15:20 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:20 --> Total execution time: 0.0748
INFO - 2018-01-22 03:15:23 --> Config Class Initialized
INFO - 2018-01-22 03:15:23 --> Hooks Class Initialized
INFO - 2018-01-22 03:15:23 --> Config Class Initialized
INFO - 2018-01-22 03:15:23 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:23 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:23 --> Utf8 Class Initialized
DEBUG - 2018-01-22 03:15:23 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:23 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:23 --> URI Class Initialized
INFO - 2018-01-22 03:15:23 --> URI Class Initialized
INFO - 2018-01-22 03:15:23 --> Router Class Initialized
INFO - 2018-01-22 03:15:23 --> Router Class Initialized
INFO - 2018-01-22 03:15:23 --> Output Class Initialized
INFO - 2018-01-22 03:15:23 --> Output Class Initialized
INFO - 2018-01-22 03:15:23 --> Security Class Initialized
INFO - 2018-01-22 03:15:23 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:23 --> Input Class Initialized
DEBUG - 2018-01-22 03:15:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:23 --> Input Class Initialized
INFO - 2018-01-22 03:15:23 --> Language Class Initialized
INFO - 2018-01-22 03:15:23 --> Language Class Initialized
INFO - 2018-01-22 03:15:23 --> Loader Class Initialized
INFO - 2018-01-22 03:15:23 --> Loader Class Initialized
INFO - 2018-01-22 03:15:23 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:23 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:23 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:23 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:23 --> Database Driver Class Initialized
INFO - 2018-01-22 03:15:23 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-01-22 03:15:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:23 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:23 --> Controller Class Initialized
INFO - 2018-01-22 03:15:23 --> Model Class Initialized
INFO - 2018-01-22 11:15:23 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:23 --> Total execution time: 0.0549
INFO - 2018-01-22 03:15:23 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:23 --> Controller Class Initialized
INFO - 2018-01-22 03:15:23 --> Model Class Initialized
INFO - 2018-01-22 11:15:23 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:23 --> Total execution time: 0.0896
INFO - 2018-01-22 03:15:23 --> Config Class Initialized
INFO - 2018-01-22 03:15:23 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:23 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:23 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:23 --> URI Class Initialized
INFO - 2018-01-22 03:15:23 --> Router Class Initialized
INFO - 2018-01-22 03:15:23 --> Output Class Initialized
INFO - 2018-01-22 03:15:23 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:23 --> Input Class Initialized
INFO - 2018-01-22 03:15:23 --> Language Class Initialized
INFO - 2018-01-22 03:15:23 --> Loader Class Initialized
INFO - 2018-01-22 03:15:23 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:23 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:23 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:23 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:23 --> Controller Class Initialized
INFO - 2018-01-22 03:15:23 --> Model Class Initialized
INFO - 2018-01-22 11:15:23 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:23 --> Total execution time: 0.0664
INFO - 2018-01-22 03:15:26 --> Config Class Initialized
INFO - 2018-01-22 03:15:26 --> Config Class Initialized
INFO - 2018-01-22 03:15:26 --> Hooks Class Initialized
INFO - 2018-01-22 03:15:26 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:26 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:26 --> Utf8 Class Initialized
DEBUG - 2018-01-22 03:15:26 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:26 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:26 --> URI Class Initialized
INFO - 2018-01-22 03:15:26 --> URI Class Initialized
INFO - 2018-01-22 03:15:26 --> Router Class Initialized
INFO - 2018-01-22 03:15:26 --> Router Class Initialized
INFO - 2018-01-22 03:15:26 --> Output Class Initialized
INFO - 2018-01-22 03:15:26 --> Output Class Initialized
INFO - 2018-01-22 03:15:26 --> Security Class Initialized
INFO - 2018-01-22 03:15:26 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:26 --> Input Class Initialized
INFO - 2018-01-22 03:15:26 --> Language Class Initialized
DEBUG - 2018-01-22 03:15:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:26 --> Input Class Initialized
INFO - 2018-01-22 03:15:26 --> Language Class Initialized
INFO - 2018-01-22 03:15:26 --> Loader Class Initialized
INFO - 2018-01-22 03:15:26 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:26 --> Loader Class Initialized
INFO - 2018-01-22 03:15:26 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:26 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:26 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:26 --> Database Driver Class Initialized
INFO - 2018-01-22 03:15:26 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:26 --> Controller Class Initialized
DEBUG - 2018-01-22 03:15:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:26 --> Model Class Initialized
INFO - 2018-01-22 11:15:26 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:26 --> Total execution time: 0.0504
INFO - 2018-01-22 03:15:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:26 --> Controller Class Initialized
INFO - 2018-01-22 03:15:26 --> Model Class Initialized
INFO - 2018-01-22 11:15:26 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:26 --> Total execution time: 0.0755
INFO - 2018-01-22 03:15:26 --> Config Class Initialized
INFO - 2018-01-22 03:15:26 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:26 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:26 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:26 --> URI Class Initialized
INFO - 2018-01-22 03:15:26 --> Router Class Initialized
INFO - 2018-01-22 03:15:26 --> Output Class Initialized
INFO - 2018-01-22 03:15:26 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:26 --> Input Class Initialized
INFO - 2018-01-22 03:15:26 --> Language Class Initialized
INFO - 2018-01-22 03:15:26 --> Loader Class Initialized
INFO - 2018-01-22 03:15:26 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:26 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:26 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:26 --> Controller Class Initialized
INFO - 2018-01-22 03:15:26 --> Model Class Initialized
INFO - 2018-01-22 11:15:26 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:26 --> Total execution time: 0.0565
INFO - 2018-01-22 03:15:29 --> Config Class Initialized
INFO - 2018-01-22 03:15:29 --> Config Class Initialized
INFO - 2018-01-22 03:15:29 --> Hooks Class Initialized
INFO - 2018-01-22 03:15:29 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:29 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:29 --> Utf8 Class Initialized
DEBUG - 2018-01-22 03:15:29 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:29 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:29 --> URI Class Initialized
INFO - 2018-01-22 03:15:29 --> URI Class Initialized
INFO - 2018-01-22 03:15:29 --> Router Class Initialized
INFO - 2018-01-22 03:15:29 --> Router Class Initialized
INFO - 2018-01-22 03:15:29 --> Output Class Initialized
INFO - 2018-01-22 03:15:29 --> Output Class Initialized
INFO - 2018-01-22 03:15:29 --> Security Class Initialized
INFO - 2018-01-22 03:15:29 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:29 --> Input Class Initialized
DEBUG - 2018-01-22 03:15:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:29 --> Language Class Initialized
INFO - 2018-01-22 03:15:29 --> Input Class Initialized
INFO - 2018-01-22 03:15:29 --> Language Class Initialized
INFO - 2018-01-22 03:15:29 --> Loader Class Initialized
INFO - 2018-01-22 03:15:29 --> Loader Class Initialized
INFO - 2018-01-22 03:15:29 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:29 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:29 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:29 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:29 --> Database Driver Class Initialized
INFO - 2018-01-22 03:15:29 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:29 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:29 --> Controller Class Initialized
DEBUG - 2018-01-22 03:15:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:29 --> Model Class Initialized
INFO - 2018-01-22 11:15:29 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:29 --> Total execution time: 0.0540
INFO - 2018-01-22 03:15:29 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:29 --> Controller Class Initialized
INFO - 2018-01-22 03:15:29 --> Model Class Initialized
INFO - 2018-01-22 11:15:29 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:29 --> Total execution time: 0.0938
INFO - 2018-01-22 03:15:29 --> Config Class Initialized
INFO - 2018-01-22 03:15:29 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:29 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:29 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:29 --> URI Class Initialized
INFO - 2018-01-22 03:15:29 --> Router Class Initialized
INFO - 2018-01-22 03:15:29 --> Output Class Initialized
INFO - 2018-01-22 03:15:29 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:29 --> Input Class Initialized
INFO - 2018-01-22 03:15:29 --> Language Class Initialized
INFO - 2018-01-22 03:15:29 --> Loader Class Initialized
INFO - 2018-01-22 03:15:29 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:29 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:29 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:29 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:29 --> Controller Class Initialized
INFO - 2018-01-22 03:15:29 --> Model Class Initialized
INFO - 2018-01-22 11:15:29 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:29 --> Total execution time: 0.0670
INFO - 2018-01-22 03:15:32 --> Config Class Initialized
INFO - 2018-01-22 03:15:32 --> Config Class Initialized
INFO - 2018-01-22 03:15:32 --> Hooks Class Initialized
INFO - 2018-01-22 03:15:32 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:32 --> UTF-8 Support Enabled
DEBUG - 2018-01-22 03:15:32 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:32 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:32 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:32 --> URI Class Initialized
INFO - 2018-01-22 03:15:32 --> URI Class Initialized
INFO - 2018-01-22 03:15:32 --> Router Class Initialized
INFO - 2018-01-22 03:15:32 --> Router Class Initialized
INFO - 2018-01-22 03:15:32 --> Output Class Initialized
INFO - 2018-01-22 03:15:32 --> Output Class Initialized
INFO - 2018-01-22 03:15:32 --> Security Class Initialized
INFO - 2018-01-22 03:15:32 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:32 --> Input Class Initialized
DEBUG - 2018-01-22 03:15:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:32 --> Input Class Initialized
INFO - 2018-01-22 03:15:32 --> Language Class Initialized
INFO - 2018-01-22 03:15:32 --> Language Class Initialized
INFO - 2018-01-22 03:15:32 --> Loader Class Initialized
INFO - 2018-01-22 03:15:32 --> Loader Class Initialized
INFO - 2018-01-22 03:15:32 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:32 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:32 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:32 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:32 --> Database Driver Class Initialized
INFO - 2018-01-22 03:15:32 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-01-22 03:15:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:32 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:32 --> Controller Class Initialized
INFO - 2018-01-22 03:15:32 --> Model Class Initialized
INFO - 2018-01-22 11:15:32 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:32 --> Total execution time: 0.0711
INFO - 2018-01-22 03:15:32 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:32 --> Controller Class Initialized
INFO - 2018-01-22 03:15:32 --> Model Class Initialized
INFO - 2018-01-22 11:15:32 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:32 --> Total execution time: 0.1009
INFO - 2018-01-22 03:15:32 --> Config Class Initialized
INFO - 2018-01-22 03:15:32 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:32 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:32 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:32 --> URI Class Initialized
INFO - 2018-01-22 03:15:32 --> Router Class Initialized
INFO - 2018-01-22 03:15:32 --> Output Class Initialized
INFO - 2018-01-22 03:15:32 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:32 --> Input Class Initialized
INFO - 2018-01-22 03:15:32 --> Language Class Initialized
INFO - 2018-01-22 03:15:32 --> Loader Class Initialized
INFO - 2018-01-22 03:15:32 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:32 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:32 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:32 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:32 --> Controller Class Initialized
INFO - 2018-01-22 03:15:32 --> Model Class Initialized
INFO - 2018-01-22 11:15:32 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:32 --> Total execution time: 0.0645
INFO - 2018-01-22 03:15:34 --> Config Class Initialized
INFO - 2018-01-22 03:15:34 --> Hooks Class Initialized
INFO - 2018-01-22 03:15:34 --> Config Class Initialized
INFO - 2018-01-22 03:15:34 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:34 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:34 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:34 --> URI Class Initialized
DEBUG - 2018-01-22 03:15:34 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:34 --> Router Class Initialized
INFO - 2018-01-22 03:15:34 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:34 --> URI Class Initialized
INFO - 2018-01-22 03:15:34 --> Output Class Initialized
INFO - 2018-01-22 03:15:34 --> Router Class Initialized
INFO - 2018-01-22 03:15:34 --> Security Class Initialized
INFO - 2018-01-22 03:15:34 --> Output Class Initialized
DEBUG - 2018-01-22 03:15:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:34 --> Input Class Initialized
INFO - 2018-01-22 03:15:34 --> Security Class Initialized
INFO - 2018-01-22 03:15:34 --> Language Class Initialized
DEBUG - 2018-01-22 03:15:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:34 --> Input Class Initialized
INFO - 2018-01-22 03:15:34 --> Loader Class Initialized
INFO - 2018-01-22 03:15:34 --> Language Class Initialized
INFO - 2018-01-22 03:15:34 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:34 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:34 --> Loader Class Initialized
INFO - 2018-01-22 03:15:34 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:34 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:34 --> Database Driver Class Initialized
INFO - 2018-01-22 03:15:34 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:34 --> Session: Class initialized using 'files' driver.
DEBUG - 2018-01-22 03:15:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:34 --> Controller Class Initialized
INFO - 2018-01-22 03:15:34 --> Model Class Initialized
INFO - 2018-01-22 11:15:34 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:34 --> Total execution time: 0.0748
INFO - 2018-01-22 03:15:34 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:34 --> Controller Class Initialized
INFO - 2018-01-22 03:15:34 --> Model Class Initialized
INFO - 2018-01-22 11:15:34 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:34 --> Total execution time: 0.1015
INFO - 2018-01-22 03:15:34 --> Config Class Initialized
INFO - 2018-01-22 03:15:34 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:34 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:34 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:34 --> URI Class Initialized
INFO - 2018-01-22 03:15:34 --> Router Class Initialized
INFO - 2018-01-22 03:15:34 --> Output Class Initialized
INFO - 2018-01-22 03:15:34 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:34 --> Input Class Initialized
INFO - 2018-01-22 03:15:34 --> Language Class Initialized
INFO - 2018-01-22 03:15:34 --> Loader Class Initialized
INFO - 2018-01-22 03:15:34 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:34 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:34 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:34 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:34 --> Controller Class Initialized
INFO - 2018-01-22 03:15:34 --> Model Class Initialized
INFO - 2018-01-22 11:15:34 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:34 --> Total execution time: 0.0613
INFO - 2018-01-22 03:15:36 --> Config Class Initialized
INFO - 2018-01-22 03:15:36 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:36 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:36 --> Config Class Initialized
INFO - 2018-01-22 03:15:36 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:36 --> Hooks Class Initialized
INFO - 2018-01-22 03:15:36 --> URI Class Initialized
DEBUG - 2018-01-22 03:15:36 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:36 --> Router Class Initialized
INFO - 2018-01-22 03:15:36 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:36 --> URI Class Initialized
INFO - 2018-01-22 03:15:36 --> Output Class Initialized
INFO - 2018-01-22 03:15:36 --> Router Class Initialized
INFO - 2018-01-22 03:15:36 --> Security Class Initialized
INFO - 2018-01-22 03:15:36 --> Output Class Initialized
DEBUG - 2018-01-22 03:15:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:36 --> Input Class Initialized
INFO - 2018-01-22 03:15:36 --> Security Class Initialized
INFO - 2018-01-22 03:15:36 --> Language Class Initialized
DEBUG - 2018-01-22 03:15:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:36 --> Input Class Initialized
INFO - 2018-01-22 03:15:36 --> Loader Class Initialized
INFO - 2018-01-22 03:15:36 --> Language Class Initialized
INFO - 2018-01-22 03:15:36 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:36 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:36 --> Loader Class Initialized
INFO - 2018-01-22 03:15:36 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:36 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:36 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:36 --> Database Driver Class Initialized
INFO - 2018-01-22 03:15:36 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:36 --> Controller Class Initialized
INFO - 2018-01-22 03:15:36 --> Model Class Initialized
DEBUG - 2018-01-22 03:15:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 11:15:36 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:36 --> Total execution time: 0.0490
INFO - 2018-01-22 03:15:36 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:36 --> Controller Class Initialized
INFO - 2018-01-22 03:15:36 --> Model Class Initialized
INFO - 2018-01-22 11:15:36 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:36 --> Total execution time: 0.0736
INFO - 2018-01-22 03:15:36 --> Config Class Initialized
INFO - 2018-01-22 03:15:36 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:36 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:36 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:36 --> URI Class Initialized
INFO - 2018-01-22 03:15:36 --> Router Class Initialized
INFO - 2018-01-22 03:15:36 --> Output Class Initialized
INFO - 2018-01-22 03:15:36 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:36 --> Input Class Initialized
INFO - 2018-01-22 03:15:36 --> Language Class Initialized
INFO - 2018-01-22 03:15:36 --> Loader Class Initialized
INFO - 2018-01-22 03:15:36 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:36 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:36 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:36 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:36 --> Controller Class Initialized
INFO - 2018-01-22 03:15:36 --> Model Class Initialized
INFO - 2018-01-22 11:15:36 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:36 --> Total execution time: 0.0646
INFO - 2018-01-22 03:15:38 --> Config Class Initialized
INFO - 2018-01-22 03:15:38 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:38 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:38 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:38 --> Config Class Initialized
INFO - 2018-01-22 03:15:38 --> Hooks Class Initialized
INFO - 2018-01-22 03:15:38 --> URI Class Initialized
DEBUG - 2018-01-22 03:15:38 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:38 --> Router Class Initialized
INFO - 2018-01-22 03:15:38 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:38 --> URI Class Initialized
INFO - 2018-01-22 03:15:38 --> Output Class Initialized
INFO - 2018-01-22 03:15:38 --> Router Class Initialized
INFO - 2018-01-22 03:15:38 --> Security Class Initialized
INFO - 2018-01-22 03:15:38 --> Output Class Initialized
DEBUG - 2018-01-22 03:15:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:38 --> Input Class Initialized
INFO - 2018-01-22 03:15:38 --> Security Class Initialized
INFO - 2018-01-22 03:15:38 --> Language Class Initialized
DEBUG - 2018-01-22 03:15:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:38 --> Input Class Initialized
INFO - 2018-01-22 03:15:38 --> Loader Class Initialized
INFO - 2018-01-22 03:15:38 --> Language Class Initialized
INFO - 2018-01-22 03:15:38 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:38 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:38 --> Loader Class Initialized
INFO - 2018-01-22 03:15:38 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:38 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:38 --> Database Driver Class Initialized
INFO - 2018-01-22 03:15:38 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:38 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:38 --> Controller Class Initialized
DEBUG - 2018-01-22 03:15:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:38 --> Model Class Initialized
INFO - 2018-01-22 11:15:38 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:38 --> Total execution time: 0.0599
INFO - 2018-01-22 03:15:38 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:38 --> Controller Class Initialized
INFO - 2018-01-22 03:15:38 --> Model Class Initialized
INFO - 2018-01-22 11:15:38 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:38 --> Total execution time: 0.0858
INFO - 2018-01-22 03:15:38 --> Config Class Initialized
INFO - 2018-01-22 03:15:38 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:38 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:38 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:38 --> URI Class Initialized
INFO - 2018-01-22 03:15:38 --> Router Class Initialized
INFO - 2018-01-22 03:15:38 --> Output Class Initialized
INFO - 2018-01-22 03:15:38 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:38 --> Input Class Initialized
INFO - 2018-01-22 03:15:38 --> Language Class Initialized
INFO - 2018-01-22 03:15:38 --> Loader Class Initialized
INFO - 2018-01-22 03:15:38 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:38 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:38 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:38 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:38 --> Controller Class Initialized
INFO - 2018-01-22 03:15:38 --> Model Class Initialized
INFO - 2018-01-22 11:15:38 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:38 --> Total execution time: 0.0697
INFO - 2018-01-22 03:15:41 --> Config Class Initialized
INFO - 2018-01-22 03:15:41 --> Hooks Class Initialized
INFO - 2018-01-22 03:15:41 --> Config Class Initialized
DEBUG - 2018-01-22 03:15:41 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:41 --> Hooks Class Initialized
INFO - 2018-01-22 03:15:41 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:41 --> URI Class Initialized
DEBUG - 2018-01-22 03:15:41 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:41 --> Router Class Initialized
INFO - 2018-01-22 03:15:41 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:41 --> URI Class Initialized
INFO - 2018-01-22 03:15:41 --> Output Class Initialized
INFO - 2018-01-22 03:15:41 --> Router Class Initialized
INFO - 2018-01-22 03:15:41 --> Security Class Initialized
INFO - 2018-01-22 03:15:41 --> Output Class Initialized
DEBUG - 2018-01-22 03:15:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:41 --> Input Class Initialized
INFO - 2018-01-22 03:15:41 --> Language Class Initialized
INFO - 2018-01-22 03:15:41 --> Security Class Initialized
INFO - 2018-01-22 03:15:41 --> Loader Class Initialized
DEBUG - 2018-01-22 03:15:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:41 --> Input Class Initialized
INFO - 2018-01-22 03:15:41 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:41 --> Language Class Initialized
INFO - 2018-01-22 03:15:41 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:41 --> Loader Class Initialized
INFO - 2018-01-22 03:15:41 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:41 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:41 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:41 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:41 --> Controller Class Initialized
INFO - 2018-01-22 03:15:41 --> Database Driver Class Initialized
INFO - 2018-01-22 03:15:41 --> Model Class Initialized
DEBUG - 2018-01-22 03:15:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 11:15:41 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:41 --> Total execution time: 0.0512
INFO - 2018-01-22 03:15:41 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:41 --> Controller Class Initialized
INFO - 2018-01-22 03:15:41 --> Model Class Initialized
INFO - 2018-01-22 11:15:41 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:41 --> Total execution time: 0.0796
INFO - 2018-01-22 03:15:41 --> Config Class Initialized
INFO - 2018-01-22 03:15:41 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:41 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:41 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:41 --> URI Class Initialized
INFO - 2018-01-22 03:15:41 --> Router Class Initialized
INFO - 2018-01-22 03:15:41 --> Output Class Initialized
INFO - 2018-01-22 03:15:41 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:41 --> Input Class Initialized
INFO - 2018-01-22 03:15:41 --> Language Class Initialized
INFO - 2018-01-22 03:15:41 --> Loader Class Initialized
INFO - 2018-01-22 03:15:41 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:41 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:41 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:41 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:41 --> Controller Class Initialized
INFO - 2018-01-22 03:15:41 --> Model Class Initialized
INFO - 2018-01-22 11:15:41 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:41 --> Total execution time: 0.0608
INFO - 2018-01-22 03:15:43 --> Config Class Initialized
INFO - 2018-01-22 03:15:43 --> Config Class Initialized
INFO - 2018-01-22 03:15:43 --> Hooks Class Initialized
INFO - 2018-01-22 03:15:43 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:43 --> UTF-8 Support Enabled
DEBUG - 2018-01-22 03:15:43 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:43 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:43 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:43 --> URI Class Initialized
INFO - 2018-01-22 03:15:43 --> URI Class Initialized
INFO - 2018-01-22 03:15:43 --> Router Class Initialized
INFO - 2018-01-22 03:15:43 --> Router Class Initialized
INFO - 2018-01-22 03:15:43 --> Output Class Initialized
INFO - 2018-01-22 03:15:43 --> Output Class Initialized
INFO - 2018-01-22 03:15:43 --> Security Class Initialized
INFO - 2018-01-22 03:15:43 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:43 --> Input Class Initialized
INFO - 2018-01-22 03:15:43 --> Language Class Initialized
DEBUG - 2018-01-22 03:15:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:43 --> Input Class Initialized
INFO - 2018-01-22 03:15:43 --> Language Class Initialized
INFO - 2018-01-22 03:15:43 --> Loader Class Initialized
INFO - 2018-01-22 03:15:43 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:43 --> Loader Class Initialized
INFO - 2018-01-22 03:15:43 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:43 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:43 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:43 --> Database Driver Class Initialized
INFO - 2018-01-22 03:15:43 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:43 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:43 --> Controller Class Initialized
DEBUG - 2018-01-22 03:15:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:43 --> Model Class Initialized
INFO - 2018-01-22 11:15:43 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:43 --> Total execution time: 0.0501
INFO - 2018-01-22 03:15:43 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:43 --> Controller Class Initialized
INFO - 2018-01-22 03:15:43 --> Model Class Initialized
INFO - 2018-01-22 11:15:43 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:43 --> Total execution time: 0.0845
INFO - 2018-01-22 03:15:43 --> Config Class Initialized
INFO - 2018-01-22 03:15:43 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:15:43 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:15:43 --> Utf8 Class Initialized
INFO - 2018-01-22 03:15:43 --> URI Class Initialized
INFO - 2018-01-22 03:15:43 --> Router Class Initialized
INFO - 2018-01-22 03:15:43 --> Output Class Initialized
INFO - 2018-01-22 03:15:43 --> Security Class Initialized
DEBUG - 2018-01-22 03:15:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:15:43 --> Input Class Initialized
INFO - 2018-01-22 03:15:43 --> Language Class Initialized
INFO - 2018-01-22 03:15:43 --> Loader Class Initialized
INFO - 2018-01-22 03:15:43 --> Helper loaded: url_helper
INFO - 2018-01-22 03:15:43 --> Helper loaded: general_helper
INFO - 2018-01-22 03:15:43 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:15:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:15:43 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:15:43 --> Controller Class Initialized
INFO - 2018-01-22 03:15:43 --> Model Class Initialized
INFO - 2018-01-22 11:15:43 --> Final output sent to browser
DEBUG - 2018-01-22 11:15:43 --> Total execution time: 0.0540
INFO - 2018-01-22 03:16:01 --> Config Class Initialized
INFO - 2018-01-22 03:16:01 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:16:01 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:16:01 --> Utf8 Class Initialized
INFO - 2018-01-22 03:16:01 --> URI Class Initialized
INFO - 2018-01-22 03:16:01 --> Router Class Initialized
INFO - 2018-01-22 03:16:01 --> Output Class Initialized
INFO - 2018-01-22 03:16:01 --> Security Class Initialized
DEBUG - 2018-01-22 03:16:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:16:01 --> Input Class Initialized
INFO - 2018-01-22 03:16:01 --> Language Class Initialized
INFO - 2018-01-22 03:16:01 --> Loader Class Initialized
INFO - 2018-01-22 03:16:01 --> Helper loaded: url_helper
INFO - 2018-01-22 03:16:01 --> Helper loaded: general_helper
INFO - 2018-01-22 03:16:01 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:16:01 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:16:01 --> Controller Class Initialized
INFO - 2018-01-22 03:16:01 --> Model Class Initialized
ERROR - 2018-01-22 11:16:01 --> Severity: Warning --> Missing argument 1 for M_jobschedule::job_list(), called in /Applications/MAMP/htdocs/inventory/application/controllers/Jobschedule.php on line 25 and defined /Applications/MAMP/htdocs/inventory/application/models/M_jobschedule.php 84
INFO - 2018-01-22 11:16:01 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_head.php
INFO - 2018-01-22 11:16:01 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_header.php
INFO - 2018-01-22 11:16:01 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_footer_script.php
INFO - 2018-01-22 11:16:01 --> File loaded: /Applications/MAMP/htdocs/inventory/application/views/v_add_jobschedule.php
INFO - 2018-01-22 11:16:01 --> Final output sent to browser
DEBUG - 2018-01-22 11:16:01 --> Total execution time: 0.0558
INFO - 2018-01-22 03:16:11 --> Config Class Initialized
INFO - 2018-01-22 03:16:11 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:16:11 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:16:11 --> Utf8 Class Initialized
INFO - 2018-01-22 03:16:11 --> Config Class Initialized
INFO - 2018-01-22 03:16:11 --> Hooks Class Initialized
INFO - 2018-01-22 03:16:11 --> URI Class Initialized
INFO - 2018-01-22 03:16:11 --> Router Class Initialized
DEBUG - 2018-01-22 03:16:11 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:16:11 --> Utf8 Class Initialized
INFO - 2018-01-22 03:16:11 --> Output Class Initialized
INFO - 2018-01-22 03:16:11 --> URI Class Initialized
INFO - 2018-01-22 03:16:11 --> Security Class Initialized
INFO - 2018-01-22 03:16:11 --> Router Class Initialized
DEBUG - 2018-01-22 03:16:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:16:11 --> Input Class Initialized
INFO - 2018-01-22 03:16:11 --> Output Class Initialized
INFO - 2018-01-22 03:16:11 --> Language Class Initialized
INFO - 2018-01-22 03:16:11 --> Security Class Initialized
DEBUG - 2018-01-22 03:16:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:16:11 --> Input Class Initialized
INFO - 2018-01-22 03:16:11 --> Loader Class Initialized
INFO - 2018-01-22 03:16:11 --> Language Class Initialized
INFO - 2018-01-22 03:16:11 --> Helper loaded: url_helper
INFO - 2018-01-22 03:16:11 --> Helper loaded: general_helper
INFO - 2018-01-22 03:16:11 --> Loader Class Initialized
INFO - 2018-01-22 03:16:11 --> Helper loaded: url_helper
INFO - 2018-01-22 03:16:11 --> Helper loaded: general_helper
INFO - 2018-01-22 03:16:11 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:16:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:16:11 --> Database Driver Class Initialized
INFO - 2018-01-22 03:16:11 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:16:11 --> Controller Class Initialized
INFO - 2018-01-22 03:16:11 --> Model Class Initialized
INFO - 2018-01-22 11:16:11 --> Final output sent to browser
DEBUG - 2018-01-22 03:16:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-01-22 11:16:11 --> Total execution time: 0.0502
INFO - 2018-01-22 03:16:12 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:16:12 --> Controller Class Initialized
INFO - 2018-01-22 03:16:12 --> Model Class Initialized
INFO - 2018-01-22 11:16:12 --> Final output sent to browser
DEBUG - 2018-01-22 11:16:12 --> Total execution time: 0.0658
INFO - 2018-01-22 03:16:12 --> Config Class Initialized
INFO - 2018-01-22 03:16:12 --> Hooks Class Initialized
DEBUG - 2018-01-22 03:16:12 --> UTF-8 Support Enabled
INFO - 2018-01-22 03:16:12 --> Utf8 Class Initialized
INFO - 2018-01-22 03:16:12 --> URI Class Initialized
INFO - 2018-01-22 03:16:12 --> Router Class Initialized
INFO - 2018-01-22 03:16:12 --> Output Class Initialized
INFO - 2018-01-22 03:16:12 --> Security Class Initialized
DEBUG - 2018-01-22 03:16:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-01-22 03:16:12 --> Input Class Initialized
INFO - 2018-01-22 03:16:12 --> Language Class Initialized
INFO - 2018-01-22 03:16:12 --> Loader Class Initialized
INFO - 2018-01-22 03:16:12 --> Helper loaded: url_helper
INFO - 2018-01-22 03:16:12 --> Helper loaded: general_helper
INFO - 2018-01-22 03:16:12 --> Database Driver Class Initialized
DEBUG - 2018-01-22 03:16:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-01-22 03:16:12 --> Session: Class initialized using 'files' driver.
INFO - 2018-01-22 03:16:12 --> Controller Class Initialized
INFO - 2018-01-22 03:16:12 --> Model Class Initialized
INFO - 2018-01-22 11:16:12 --> Final output sent to browser
DEBUG - 2018-01-22 11:16:12 --> Total execution time: 0.0539
