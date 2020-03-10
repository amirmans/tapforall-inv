<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-08 09:36:52 --> Severity: Warning --> Error while sending QUERY packet. PID=1825 /Applications/MAMP/htdocs/sis_dev/inventory/system/database/drivers/mysqli/mysqli_driver.php 306
ERROR - 2020-03-08 09:36:52 --> Query error: MySQL server has gone away - Invalid query: SELECT `j`.*, `p`.`product_name`
FROM `job_shipping_schedule` as `j`
LEFT JOIN `job_product` as `jp` ON `jp`.`job_product_id` = `j`.`job_product_id`
LEFT JOIN `product` as `p` ON `p`.`product_id` = `jp`.`product_id`
WHERE `p`.`archived` =0
AND `jp`.`archived` =0
AND `j`.`archived` =0
ORDER BY `j`.`job_shipping_schedule_id` DESC
ERROR - 2020-03-08 09:36:52 --> Severity: error --> Exception: Call to a member function result_array() on boolean /Applications/MAMP/htdocs/sis_dev/inventory/application/models/M_jobschedule.php 28
INFO - 2020-03-08 01:36:58 --> Config Class Initialized
INFO - 2020-03-08 01:36:58 --> Hooks Class Initialized
DEBUG - 2020-03-08 01:36:58 --> UTF-8 Support Enabled
INFO - 2020-03-08 01:36:58 --> Utf8 Class Initialized
INFO - 2020-03-08 01:36:58 --> URI Class Initialized
INFO - 2020-03-08 01:36:58 --> Router Class Initialized
INFO - 2020-03-08 01:36:58 --> Output Class Initialized
INFO - 2020-03-08 01:36:58 --> Security Class Initialized
DEBUG - 2020-03-08 01:36:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 01:36:58 --> Input Class Initialized
INFO - 2020-03-08 01:36:58 --> Language Class Initialized
INFO - 2020-03-08 01:36:58 --> Loader Class Initialized
INFO - 2020-03-08 01:36:58 --> Helper loaded: url_helper
INFO - 2020-03-08 01:36:58 --> Helper loaded: general_helper
INFO - 2020-03-08 01:36:58 --> Database Driver Class Initialized
DEBUG - 2020-03-08 01:36:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 01:36:58 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 01:36:58 --> Controller Class Initialized
INFO - 2020-03-08 01:37:00 --> Model Class Initialized
INFO - 2020-03-08 09:37:01 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 09:37:01 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 09:37:01 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 09:37:01 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_jobschedule_list.php
INFO - 2020-03-08 01:37:03 --> Config Class Initialized
INFO - 2020-03-08 01:37:03 --> Hooks Class Initialized
DEBUG - 2020-03-08 01:37:03 --> UTF-8 Support Enabled
INFO - 2020-03-08 01:37:03 --> Utf8 Class Initialized
INFO - 2020-03-08 01:37:03 --> URI Class Initialized
INFO - 2020-03-08 01:37:03 --> Router Class Initialized
INFO - 2020-03-08 01:37:03 --> Output Class Initialized
INFO - 2020-03-08 01:37:03 --> Security Class Initialized
DEBUG - 2020-03-08 01:37:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 01:37:03 --> Input Class Initialized
INFO - 2020-03-08 01:37:03 --> Language Class Initialized
INFO - 2020-03-08 01:37:03 --> Loader Class Initialized
INFO - 2020-03-08 01:37:03 --> Helper loaded: url_helper
INFO - 2020-03-08 01:37:03 --> Helper loaded: general_helper
INFO - 2020-03-08 01:37:03 --> Database Driver Class Initialized
DEBUG - 2020-03-08 01:37:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 01:37:03 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 01:37:03 --> Controller Class Initialized
INFO - 2020-03-08 01:37:11 --> Model Class Initialized
INFO - 2020-03-08 09:37:15 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 09:37:15 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 09:37:15 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 09:37:15 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_jobschedule_list.php
INFO - 2020-03-08 01:37:22 --> Config Class Initialized
INFO - 2020-03-08 01:37:22 --> Hooks Class Initialized
DEBUG - 2020-03-08 01:37:22 --> UTF-8 Support Enabled
INFO - 2020-03-08 01:37:22 --> Utf8 Class Initialized
INFO - 2020-03-08 01:37:22 --> URI Class Initialized
INFO - 2020-03-08 01:37:22 --> Router Class Initialized
INFO - 2020-03-08 01:37:22 --> Output Class Initialized
INFO - 2020-03-08 01:37:22 --> Security Class Initialized
DEBUG - 2020-03-08 01:37:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 01:37:22 --> Input Class Initialized
INFO - 2020-03-08 01:37:22 --> Language Class Initialized
INFO - 2020-03-08 01:37:22 --> Loader Class Initialized
INFO - 2020-03-08 01:37:22 --> Helper loaded: url_helper
INFO - 2020-03-08 01:37:22 --> Helper loaded: general_helper
INFO - 2020-03-08 01:37:22 --> Database Driver Class Initialized
DEBUG - 2020-03-08 01:37:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 01:37:22 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 01:37:22 --> Controller Class Initialized
INFO - 2020-03-08 01:37:30 --> Model Class Initialized
INFO - 2020-03-08 09:37:32 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 09:37:32 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 09:37:32 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 09:37:32 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_jobschedule_list.php
INFO - 2020-03-08 01:37:35 --> Config Class Initialized
INFO - 2020-03-08 01:37:35 --> Hooks Class Initialized
DEBUG - 2020-03-08 01:37:35 --> UTF-8 Support Enabled
INFO - 2020-03-08 01:37:35 --> Utf8 Class Initialized
INFO - 2020-03-08 01:37:35 --> URI Class Initialized
INFO - 2020-03-08 01:37:35 --> Router Class Initialized
INFO - 2020-03-08 01:37:35 --> Output Class Initialized
INFO - 2020-03-08 01:37:35 --> Security Class Initialized
DEBUG - 2020-03-08 01:37:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 01:37:35 --> Input Class Initialized
INFO - 2020-03-08 01:37:35 --> Language Class Initialized
INFO - 2020-03-08 01:37:35 --> Loader Class Initialized
INFO - 2020-03-08 01:37:35 --> Helper loaded: url_helper
INFO - 2020-03-08 01:37:35 --> Helper loaded: general_helper
INFO - 2020-03-08 01:37:35 --> Database Driver Class Initialized
DEBUG - 2020-03-08 01:37:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 01:37:35 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 01:37:35 --> Controller Class Initialized
INFO - 2020-03-08 01:37:35 --> Model Class Initialized
INFO - 2020-03-08 09:37:36 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 09:37:36 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 09:37:36 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 09:37:36 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_jobschedule_list.php
INFO - 2020-03-08 01:38:09 --> Config Class Initialized
INFO - 2020-03-08 01:38:09 --> Hooks Class Initialized
DEBUG - 2020-03-08 01:38:09 --> UTF-8 Support Enabled
INFO - 2020-03-08 01:38:09 --> Utf8 Class Initialized
INFO - 2020-03-08 01:38:09 --> URI Class Initialized
DEBUG - 2020-03-08 01:38:09 --> No URI present. Default controller set.
INFO - 2020-03-08 01:38:09 --> Router Class Initialized
INFO - 2020-03-08 01:38:09 --> Output Class Initialized
INFO - 2020-03-08 01:38:09 --> Security Class Initialized
DEBUG - 2020-03-08 01:38:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 01:38:09 --> Input Class Initialized
INFO - 2020-03-08 01:38:09 --> Language Class Initialized
INFO - 2020-03-08 01:38:09 --> Loader Class Initialized
INFO - 2020-03-08 01:38:09 --> Helper loaded: url_helper
INFO - 2020-03-08 01:38:09 --> Helper loaded: general_helper
INFO - 2020-03-08 01:38:09 --> Database Driver Class Initialized
DEBUG - 2020-03-08 01:38:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 01:38:09 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 01:38:09 --> Controller Class Initialized
INFO - 2020-03-08 01:38:09 --> Model Class Initialized
INFO - 2020-03-08 09:38:09 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 09:38:09 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 09:38:09 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer.php
INFO - 2020-03-08 09:38:09 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 09:38:09 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_customer_list.php
INFO - 2020-03-08 09:38:09 --> Final output sent to browser
DEBUG - 2020-03-08 09:38:09 --> Total execution time: 0.1091
INFO - 2020-03-08 01:38:11 --> Config Class Initialized
INFO - 2020-03-08 01:38:11 --> Hooks Class Initialized
DEBUG - 2020-03-08 01:38:11 --> UTF-8 Support Enabled
INFO - 2020-03-08 01:38:11 --> Utf8 Class Initialized
INFO - 2020-03-08 01:38:11 --> URI Class Initialized
INFO - 2020-03-08 01:38:11 --> Router Class Initialized
INFO - 2020-03-08 01:38:11 --> Output Class Initialized
INFO - 2020-03-08 01:38:11 --> Security Class Initialized
DEBUG - 2020-03-08 01:38:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 01:38:11 --> Input Class Initialized
INFO - 2020-03-08 01:38:11 --> Language Class Initialized
INFO - 2020-03-08 01:38:11 --> Loader Class Initialized
INFO - 2020-03-08 01:38:11 --> Helper loaded: url_helper
INFO - 2020-03-08 01:38:11 --> Helper loaded: general_helper
INFO - 2020-03-08 01:38:11 --> Database Driver Class Initialized
DEBUG - 2020-03-08 01:38:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 01:38:11 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 01:38:11 --> Controller Class Initialized
INFO - 2020-03-08 01:38:11 --> Model Class Initialized
INFO - 2020-03-08 09:38:11 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 09:38:11 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 09:38:11 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 09:38:11 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_jobschedule_list.php
INFO - 2020-03-08 09:38:11 --> Final output sent to browser
DEBUG - 2020-03-08 09:38:11 --> Total execution time: 0.1131
INFO - 2020-03-08 01:38:59 --> Config Class Initialized
INFO - 2020-03-08 01:38:59 --> Hooks Class Initialized
DEBUG - 2020-03-08 01:38:59 --> UTF-8 Support Enabled
INFO - 2020-03-08 01:38:59 --> Utf8 Class Initialized
INFO - 2020-03-08 01:38:59 --> URI Class Initialized
INFO - 2020-03-08 01:38:59 --> Router Class Initialized
INFO - 2020-03-08 01:38:59 --> Output Class Initialized
INFO - 2020-03-08 01:38:59 --> Security Class Initialized
DEBUG - 2020-03-08 01:38:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 01:38:59 --> Input Class Initialized
INFO - 2020-03-08 01:38:59 --> Language Class Initialized
INFO - 2020-03-08 01:38:59 --> Loader Class Initialized
INFO - 2020-03-08 01:38:59 --> Helper loaded: url_helper
INFO - 2020-03-08 01:38:59 --> Helper loaded: general_helper
INFO - 2020-03-08 01:38:59 --> Database Driver Class Initialized
DEBUG - 2020-03-08 01:38:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 01:38:59 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 01:38:59 --> Controller Class Initialized
INFO - 2020-03-08 01:39:02 --> Model Class Initialized
INFO - 2020-03-08 01:42:58 --> Config Class Initialized
INFO - 2020-03-08 01:42:58 --> Hooks Class Initialized
DEBUG - 2020-03-08 01:42:58 --> UTF-8 Support Enabled
INFO - 2020-03-08 01:42:58 --> Utf8 Class Initialized
INFO - 2020-03-08 01:42:58 --> URI Class Initialized
INFO - 2020-03-08 01:42:58 --> Router Class Initialized
INFO - 2020-03-08 01:42:58 --> Output Class Initialized
INFO - 2020-03-08 01:42:58 --> Security Class Initialized
DEBUG - 2020-03-08 01:42:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 01:42:58 --> Input Class Initialized
INFO - 2020-03-08 01:42:58 --> Language Class Initialized
INFO - 2020-03-08 01:42:58 --> Loader Class Initialized
INFO - 2020-03-08 01:42:58 --> Helper loaded: url_helper
INFO - 2020-03-08 01:42:58 --> Helper loaded: general_helper
INFO - 2020-03-08 01:42:58 --> Database Driver Class Initialized
DEBUG - 2020-03-08 01:42:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 01:42:58 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 01:42:58 --> Controller Class Initialized
INFO - 2020-03-08 01:42:59 --> Model Class Initialized
INFO - 2020-03-08 09:47:20 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 09:47:20 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 09:47:20 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 09:47:20 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_add_jobschedule.php
INFO - 2020-03-08 09:47:20 --> Final output sent to browser
DEBUG - 2020-03-08 09:47:20 --> Total execution time: 261.4486
INFO - 2020-03-08 01:51:03 --> Config Class Initialized
INFO - 2020-03-08 01:51:03 --> Hooks Class Initialized
DEBUG - 2020-03-08 01:51:03 --> UTF-8 Support Enabled
INFO - 2020-03-08 01:51:03 --> Utf8 Class Initialized
INFO - 2020-03-08 01:51:03 --> URI Class Initialized
INFO - 2020-03-08 01:51:03 --> Router Class Initialized
INFO - 2020-03-08 01:51:03 --> Output Class Initialized
INFO - 2020-03-08 01:51:03 --> Security Class Initialized
DEBUG - 2020-03-08 01:51:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 01:51:03 --> Input Class Initialized
INFO - 2020-03-08 01:51:03 --> Language Class Initialized
INFO - 2020-03-08 01:51:03 --> Loader Class Initialized
INFO - 2020-03-08 01:51:03 --> Helper loaded: url_helper
INFO - 2020-03-08 01:51:03 --> Helper loaded: general_helper
INFO - 2020-03-08 01:51:03 --> Database Driver Class Initialized
DEBUG - 2020-03-08 01:51:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 01:51:03 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 01:51:03 --> Controller Class Initialized
INFO - 2020-03-08 01:51:03 --> Model Class Initialized
INFO - 2020-03-08 09:51:03 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 09:51:03 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 09:51:03 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 09:51:03 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_jobproduct_list.php
INFO - 2020-03-08 09:51:03 --> Final output sent to browser
DEBUG - 2020-03-08 09:51:03 --> Total execution time: 0.1784
INFO - 2020-03-08 01:51:12 --> Config Class Initialized
INFO - 2020-03-08 01:51:12 --> Hooks Class Initialized
DEBUG - 2020-03-08 01:51:12 --> UTF-8 Support Enabled
INFO - 2020-03-08 01:51:12 --> Utf8 Class Initialized
INFO - 2020-03-08 01:51:12 --> URI Class Initialized
INFO - 2020-03-08 01:51:12 --> Router Class Initialized
INFO - 2020-03-08 01:51:12 --> Output Class Initialized
INFO - 2020-03-08 01:51:12 --> Security Class Initialized
DEBUG - 2020-03-08 01:51:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 01:51:12 --> Input Class Initialized
INFO - 2020-03-08 01:51:12 --> Language Class Initialized
INFO - 2020-03-08 01:51:13 --> Loader Class Initialized
INFO - 2020-03-08 01:51:13 --> Helper loaded: url_helper
INFO - 2020-03-08 01:51:13 --> Helper loaded: general_helper
INFO - 2020-03-08 01:51:13 --> Database Driver Class Initialized
DEBUG - 2020-03-08 01:51:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 01:51:13 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 01:51:13 --> Controller Class Initialized
INFO - 2020-03-08 01:51:13 --> Model Class Initialized
INFO - 2020-03-08 09:51:13 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 09:51:13 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 09:51:13 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 09:51:13 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_add_jobproduct.php
INFO - 2020-03-08 09:51:13 --> Final output sent to browser
DEBUG - 2020-03-08 09:51:13 --> Total execution time: 0.1236
INFO - 2020-03-08 01:51:13 --> Config Class Initialized
INFO - 2020-03-08 01:51:13 --> Hooks Class Initialized
DEBUG - 2020-03-08 01:51:13 --> UTF-8 Support Enabled
INFO - 2020-03-08 01:51:13 --> Utf8 Class Initialized
INFO - 2020-03-08 01:51:13 --> URI Class Initialized
INFO - 2020-03-08 01:51:13 --> Router Class Initialized
INFO - 2020-03-08 01:51:13 --> Output Class Initialized
INFO - 2020-03-08 01:51:13 --> Security Class Initialized
DEBUG - 2020-03-08 01:51:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 01:51:13 --> Input Class Initialized
INFO - 2020-03-08 01:51:13 --> Language Class Initialized
INFO - 2020-03-08 01:51:13 --> Loader Class Initialized
INFO - 2020-03-08 01:51:13 --> Helper loaded: url_helper
INFO - 2020-03-08 01:51:13 --> Helper loaded: general_helper
INFO - 2020-03-08 01:51:13 --> Database Driver Class Initialized
DEBUG - 2020-03-08 01:51:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 01:51:13 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 01:51:13 --> Controller Class Initialized
INFO - 2020-03-08 01:51:13 --> Model Class Initialized
INFO - 2020-03-08 09:51:13 --> Final output sent to browser
DEBUG - 2020-03-08 09:51:13 --> Total execution time: 0.4884
INFO - 2020-03-08 16:11:39 --> Config Class Initialized
INFO - 2020-03-08 16:11:39 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:11:39 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:11:39 --> Utf8 Class Initialized
INFO - 2020-03-08 16:11:39 --> URI Class Initialized
INFO - 2020-03-08 16:11:39 --> Router Class Initialized
INFO - 2020-03-08 16:11:39 --> Output Class Initialized
INFO - 2020-03-08 16:11:39 --> Security Class Initialized
DEBUG - 2020-03-08 16:11:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:11:39 --> Input Class Initialized
INFO - 2020-03-08 16:11:39 --> Language Class Initialized
INFO - 2020-03-08 16:11:39 --> Loader Class Initialized
INFO - 2020-03-08 16:11:39 --> Helper loaded: url_helper
INFO - 2020-03-08 16:11:39 --> Helper loaded: general_helper
INFO - 2020-03-08 16:11:39 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:11:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:11:39 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:11:39 --> Controller Class Initialized
INFO - 2020-03-08 16:11:39 --> Model Class Initialized
INFO - 2020-03-08 23:11:39 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 23:11:39 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 23:11:39 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 23:11:39 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_jobproduct_list.php
INFO - 2020-03-08 23:11:39 --> Final output sent to browser
DEBUG - 2020-03-08 23:11:39 --> Total execution time: 0.2794
INFO - 2020-03-08 16:11:42 --> Config Class Initialized
INFO - 2020-03-08 16:11:42 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:11:42 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:11:42 --> Utf8 Class Initialized
INFO - 2020-03-08 16:11:42 --> URI Class Initialized
INFO - 2020-03-08 16:11:42 --> Router Class Initialized
INFO - 2020-03-08 16:11:42 --> Output Class Initialized
INFO - 2020-03-08 16:11:42 --> Security Class Initialized
DEBUG - 2020-03-08 16:11:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:11:42 --> Input Class Initialized
INFO - 2020-03-08 16:11:42 --> Language Class Initialized
INFO - 2020-03-08 16:11:42 --> Loader Class Initialized
INFO - 2020-03-08 16:11:42 --> Helper loaded: url_helper
INFO - 2020-03-08 16:11:42 --> Helper loaded: general_helper
INFO - 2020-03-08 16:11:42 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:11:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:11:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:11:42 --> Controller Class Initialized
INFO - 2020-03-08 16:11:42 --> Model Class Initialized
INFO - 2020-03-08 23:11:42 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 23:11:42 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 23:11:42 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 23:11:42 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_add_jobproduct.php
INFO - 2020-03-08 23:11:42 --> Final output sent to browser
DEBUG - 2020-03-08 23:11:42 --> Total execution time: 0.1256
INFO - 2020-03-08 16:11:42 --> Config Class Initialized
INFO - 2020-03-08 16:11:42 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:11:42 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:11:42 --> Utf8 Class Initialized
INFO - 2020-03-08 16:11:42 --> URI Class Initialized
INFO - 2020-03-08 16:11:42 --> Router Class Initialized
INFO - 2020-03-08 16:11:42 --> Output Class Initialized
INFO - 2020-03-08 16:11:42 --> Security Class Initialized
DEBUG - 2020-03-08 16:11:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:11:42 --> Input Class Initialized
INFO - 2020-03-08 16:11:42 --> Language Class Initialized
INFO - 2020-03-08 16:11:42 --> Loader Class Initialized
INFO - 2020-03-08 16:11:42 --> Helper loaded: url_helper
INFO - 2020-03-08 16:11:42 --> Helper loaded: general_helper
INFO - 2020-03-08 16:11:42 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:11:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:11:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:11:42 --> Controller Class Initialized
INFO - 2020-03-08 16:11:42 --> Model Class Initialized
INFO - 2020-03-08 23:11:42 --> Final output sent to browser
DEBUG - 2020-03-08 23:11:42 --> Total execution time: 0.1173
INFO - 2020-03-08 16:12:33 --> Config Class Initialized
INFO - 2020-03-08 16:12:33 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:12:33 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:12:33 --> Utf8 Class Initialized
INFO - 2020-03-08 16:12:33 --> URI Class Initialized
INFO - 2020-03-08 16:12:33 --> Router Class Initialized
INFO - 2020-03-08 16:12:33 --> Output Class Initialized
INFO - 2020-03-08 16:12:33 --> Security Class Initialized
DEBUG - 2020-03-08 16:12:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:12:33 --> Input Class Initialized
INFO - 2020-03-08 16:12:33 --> Language Class Initialized
INFO - 2020-03-08 16:12:33 --> Loader Class Initialized
INFO - 2020-03-08 16:12:33 --> Helper loaded: url_helper
INFO - 2020-03-08 16:12:33 --> Helper loaded: general_helper
INFO - 2020-03-08 16:12:33 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:12:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:12:33 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:12:33 --> Controller Class Initialized
INFO - 2020-03-08 16:12:33 --> Model Class Initialized
INFO - 2020-03-08 23:12:33 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 23:12:33 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 23:12:33 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 23:12:33 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_add_jobproduct.php
INFO - 2020-03-08 23:12:33 --> Final output sent to browser
DEBUG - 2020-03-08 23:12:33 --> Total execution time: 0.0671
INFO - 2020-03-08 16:12:33 --> Config Class Initialized
INFO - 2020-03-08 16:12:33 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:12:33 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:12:33 --> Utf8 Class Initialized
INFO - 2020-03-08 16:12:33 --> URI Class Initialized
INFO - 2020-03-08 16:12:33 --> Router Class Initialized
INFO - 2020-03-08 16:12:33 --> Output Class Initialized
INFO - 2020-03-08 16:12:33 --> Security Class Initialized
DEBUG - 2020-03-08 16:12:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:12:33 --> Input Class Initialized
INFO - 2020-03-08 16:12:33 --> Language Class Initialized
INFO - 2020-03-08 16:12:34 --> Loader Class Initialized
INFO - 2020-03-08 16:12:34 --> Helper loaded: url_helper
INFO - 2020-03-08 16:12:34 --> Helper loaded: general_helper
INFO - 2020-03-08 16:12:34 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:12:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:12:34 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:12:34 --> Controller Class Initialized
INFO - 2020-03-08 16:12:34 --> Model Class Initialized
INFO - 2020-03-08 23:12:34 --> Final output sent to browser
DEBUG - 2020-03-08 23:12:34 --> Total execution time: 0.1283
INFO - 2020-03-08 16:12:42 --> Config Class Initialized
INFO - 2020-03-08 16:12:42 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:12:42 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:12:42 --> Utf8 Class Initialized
INFO - 2020-03-08 16:12:42 --> URI Class Initialized
INFO - 2020-03-08 16:12:42 --> Router Class Initialized
INFO - 2020-03-08 16:12:42 --> Output Class Initialized
INFO - 2020-03-08 16:12:42 --> Security Class Initialized
DEBUG - 2020-03-08 16:12:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:12:42 --> Input Class Initialized
INFO - 2020-03-08 16:12:42 --> Language Class Initialized
INFO - 2020-03-08 16:12:42 --> Loader Class Initialized
INFO - 2020-03-08 16:12:42 --> Helper loaded: url_helper
INFO - 2020-03-08 16:12:42 --> Helper loaded: general_helper
INFO - 2020-03-08 16:12:42 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:12:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:12:42 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:12:42 --> Controller Class Initialized
INFO - 2020-03-08 16:12:42 --> Model Class Initialized
INFO - 2020-03-08 23:12:42 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 23:12:42 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 23:12:42 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 23:12:42 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_job_list.php
INFO - 2020-03-08 23:12:42 --> Final output sent to browser
DEBUG - 2020-03-08 23:12:42 --> Total execution time: 0.1144
INFO - 2020-03-08 16:12:54 --> Config Class Initialized
INFO - 2020-03-08 16:12:54 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:12:54 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:12:54 --> Utf8 Class Initialized
INFO - 2020-03-08 16:12:54 --> URI Class Initialized
INFO - 2020-03-08 16:12:54 --> Router Class Initialized
INFO - 2020-03-08 16:12:54 --> Output Class Initialized
INFO - 2020-03-08 16:12:54 --> Security Class Initialized
DEBUG - 2020-03-08 16:12:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:12:54 --> Input Class Initialized
INFO - 2020-03-08 16:12:54 --> Language Class Initialized
INFO - 2020-03-08 16:12:54 --> Loader Class Initialized
INFO - 2020-03-08 16:12:54 --> Helper loaded: url_helper
INFO - 2020-03-08 16:12:54 --> Helper loaded: general_helper
INFO - 2020-03-08 16:12:54 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:12:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:12:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:12:54 --> Controller Class Initialized
INFO - 2020-03-08 16:12:54 --> Model Class Initialized
INFO - 2020-03-08 23:12:54 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 23:12:54 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 23:12:54 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 23:12:54 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_job_list.php
INFO - 2020-03-08 23:12:54 --> Final output sent to browser
DEBUG - 2020-03-08 23:12:54 --> Total execution time: 0.0844
INFO - 2020-03-08 16:13:03 --> Config Class Initialized
INFO - 2020-03-08 16:13:03 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:13:03 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:13:03 --> Utf8 Class Initialized
INFO - 2020-03-08 16:13:03 --> URI Class Initialized
INFO - 2020-03-08 16:13:03 --> Router Class Initialized
INFO - 2020-03-08 16:13:03 --> Output Class Initialized
INFO - 2020-03-08 16:13:03 --> Security Class Initialized
DEBUG - 2020-03-08 16:13:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:13:03 --> Input Class Initialized
INFO - 2020-03-08 16:13:03 --> Language Class Initialized
INFO - 2020-03-08 16:13:03 --> Loader Class Initialized
INFO - 2020-03-08 16:13:03 --> Helper loaded: url_helper
INFO - 2020-03-08 16:13:03 --> Helper loaded: general_helper
INFO - 2020-03-08 16:13:03 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:13:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:13:03 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:13:03 --> Controller Class Initialized
INFO - 2020-03-08 16:13:03 --> Model Class Initialized
INFO - 2020-03-08 23:13:03 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 23:13:03 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 23:13:03 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 23:13:03 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_add_job.php
INFO - 2020-03-08 23:13:03 --> Final output sent to browser
DEBUG - 2020-03-08 23:13:03 --> Total execution time: 0.0607
INFO - 2020-03-08 16:13:09 --> Config Class Initialized
INFO - 2020-03-08 16:13:09 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:13:09 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:13:09 --> Utf8 Class Initialized
INFO - 2020-03-08 16:13:09 --> URI Class Initialized
INFO - 2020-03-08 16:13:09 --> Router Class Initialized
INFO - 2020-03-08 16:13:09 --> Output Class Initialized
INFO - 2020-03-08 16:13:09 --> Security Class Initialized
DEBUG - 2020-03-08 16:13:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:13:09 --> Input Class Initialized
INFO - 2020-03-08 16:13:09 --> Language Class Initialized
INFO - 2020-03-08 16:13:09 --> Loader Class Initialized
INFO - 2020-03-08 16:13:09 --> Helper loaded: url_helper
INFO - 2020-03-08 16:13:09 --> Helper loaded: general_helper
INFO - 2020-03-08 16:13:09 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:13:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:13:09 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:13:09 --> Controller Class Initialized
INFO - 2020-03-08 16:13:09 --> Model Class Initialized
INFO - 2020-03-08 23:13:09 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 23:13:09 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 23:13:09 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 23:13:09 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_jobproduct_list.php
INFO - 2020-03-08 23:13:09 --> Final output sent to browser
DEBUG - 2020-03-08 23:13:09 --> Total execution time: 0.0702
INFO - 2020-03-08 16:13:11 --> Config Class Initialized
INFO - 2020-03-08 16:13:11 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:13:11 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:13:11 --> Utf8 Class Initialized
INFO - 2020-03-08 16:13:11 --> URI Class Initialized
INFO - 2020-03-08 16:13:11 --> Router Class Initialized
INFO - 2020-03-08 16:13:11 --> Output Class Initialized
INFO - 2020-03-08 16:13:11 --> Security Class Initialized
DEBUG - 2020-03-08 16:13:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:13:11 --> Input Class Initialized
INFO - 2020-03-08 16:13:11 --> Language Class Initialized
INFO - 2020-03-08 16:13:11 --> Loader Class Initialized
INFO - 2020-03-08 16:13:11 --> Helper loaded: url_helper
INFO - 2020-03-08 16:13:11 --> Helper loaded: general_helper
INFO - 2020-03-08 16:13:11 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:13:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:13:11 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:13:11 --> Controller Class Initialized
INFO - 2020-03-08 16:13:11 --> Model Class Initialized
INFO - 2020-03-08 23:13:11 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 23:13:11 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 23:13:11 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 23:13:11 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_jobproduct_list.php
INFO - 2020-03-08 23:13:11 --> Final output sent to browser
DEBUG - 2020-03-08 23:13:11 --> Total execution time: 0.0735
INFO - 2020-03-08 16:13:14 --> Config Class Initialized
INFO - 2020-03-08 16:13:14 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:13:14 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:13:14 --> Utf8 Class Initialized
INFO - 2020-03-08 16:13:14 --> URI Class Initialized
INFO - 2020-03-08 16:13:14 --> Router Class Initialized
INFO - 2020-03-08 16:13:14 --> Output Class Initialized
INFO - 2020-03-08 16:13:14 --> Security Class Initialized
DEBUG - 2020-03-08 16:13:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:13:14 --> Input Class Initialized
INFO - 2020-03-08 16:13:14 --> Language Class Initialized
INFO - 2020-03-08 16:13:14 --> Loader Class Initialized
INFO - 2020-03-08 16:13:14 --> Helper loaded: url_helper
INFO - 2020-03-08 16:13:14 --> Helper loaded: general_helper
INFO - 2020-03-08 16:13:14 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:13:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:13:14 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:13:14 --> Controller Class Initialized
INFO - 2020-03-08 16:13:14 --> Model Class Initialized
INFO - 2020-03-08 23:13:14 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 23:13:14 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 23:13:14 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 23:13:14 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_jobproduct_list.php
INFO - 2020-03-08 23:13:14 --> Final output sent to browser
DEBUG - 2020-03-08 23:13:14 --> Total execution time: 0.0516
INFO - 2020-03-08 16:13:15 --> Config Class Initialized
INFO - 2020-03-08 16:13:15 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:13:16 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:13:16 --> Utf8 Class Initialized
INFO - 2020-03-08 16:13:16 --> URI Class Initialized
INFO - 2020-03-08 16:13:16 --> Router Class Initialized
INFO - 2020-03-08 16:13:16 --> Output Class Initialized
INFO - 2020-03-08 16:13:16 --> Security Class Initialized
DEBUG - 2020-03-08 16:13:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:13:16 --> Input Class Initialized
INFO - 2020-03-08 16:13:16 --> Language Class Initialized
INFO - 2020-03-08 16:13:16 --> Loader Class Initialized
INFO - 2020-03-08 16:13:16 --> Helper loaded: url_helper
INFO - 2020-03-08 16:13:16 --> Helper loaded: general_helper
INFO - 2020-03-08 16:13:16 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:13:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:13:16 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:13:16 --> Controller Class Initialized
INFO - 2020-03-08 16:13:16 --> Model Class Initialized
INFO - 2020-03-08 23:13:16 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 23:13:16 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 23:13:16 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 23:13:16 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_add_jobproduct.php
INFO - 2020-03-08 23:13:16 --> Final output sent to browser
DEBUG - 2020-03-08 23:13:16 --> Total execution time: 0.0559
INFO - 2020-03-08 16:13:16 --> Config Class Initialized
INFO - 2020-03-08 16:13:16 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:13:16 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:13:16 --> Utf8 Class Initialized
INFO - 2020-03-08 16:13:16 --> URI Class Initialized
INFO - 2020-03-08 16:13:16 --> Router Class Initialized
INFO - 2020-03-08 16:13:16 --> Output Class Initialized
INFO - 2020-03-08 16:13:16 --> Security Class Initialized
DEBUG - 2020-03-08 16:13:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:13:16 --> Input Class Initialized
INFO - 2020-03-08 16:13:16 --> Language Class Initialized
INFO - 2020-03-08 16:13:16 --> Loader Class Initialized
INFO - 2020-03-08 16:13:16 --> Helper loaded: url_helper
INFO - 2020-03-08 16:13:16 --> Helper loaded: general_helper
INFO - 2020-03-08 16:13:16 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:13:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:13:16 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:13:16 --> Controller Class Initialized
INFO - 2020-03-08 16:13:16 --> Model Class Initialized
INFO - 2020-03-08 23:13:16 --> Final output sent to browser
DEBUG - 2020-03-08 23:13:16 --> Total execution time: 0.1053
INFO - 2020-03-08 16:13:50 --> Config Class Initialized
INFO - 2020-03-08 16:13:50 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:13:50 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:13:50 --> Utf8 Class Initialized
INFO - 2020-03-08 16:13:50 --> URI Class Initialized
INFO - 2020-03-08 16:13:50 --> Router Class Initialized
INFO - 2020-03-08 16:13:50 --> Output Class Initialized
INFO - 2020-03-08 16:13:50 --> Security Class Initialized
DEBUG - 2020-03-08 16:13:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:13:50 --> Input Class Initialized
INFO - 2020-03-08 16:13:50 --> Language Class Initialized
INFO - 2020-03-08 16:13:50 --> Loader Class Initialized
INFO - 2020-03-08 16:13:50 --> Helper loaded: url_helper
INFO - 2020-03-08 16:13:50 --> Helper loaded: general_helper
INFO - 2020-03-08 16:13:50 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:13:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:13:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:13:50 --> Controller Class Initialized
INFO - 2020-03-08 16:13:50 --> Model Class Initialized
INFO - 2020-03-08 23:13:50 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 23:13:50 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 23:13:50 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 23:13:50 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_add_jobproduct.php
INFO - 2020-03-08 23:13:50 --> Final output sent to browser
DEBUG - 2020-03-08 23:13:50 --> Total execution time: 0.0506
INFO - 2020-03-08 16:13:50 --> Config Class Initialized
INFO - 2020-03-08 16:13:50 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:13:50 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:13:50 --> Utf8 Class Initialized
INFO - 2020-03-08 16:13:50 --> URI Class Initialized
INFO - 2020-03-08 16:13:50 --> Router Class Initialized
INFO - 2020-03-08 16:13:50 --> Output Class Initialized
INFO - 2020-03-08 16:13:50 --> Security Class Initialized
DEBUG - 2020-03-08 16:13:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:13:50 --> Input Class Initialized
INFO - 2020-03-08 16:13:50 --> Language Class Initialized
INFO - 2020-03-08 16:13:50 --> Loader Class Initialized
INFO - 2020-03-08 16:13:50 --> Helper loaded: url_helper
INFO - 2020-03-08 16:13:50 --> Helper loaded: general_helper
INFO - 2020-03-08 16:13:50 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:13:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:13:50 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:13:50 --> Controller Class Initialized
INFO - 2020-03-08 16:13:50 --> Model Class Initialized
INFO - 2020-03-08 23:13:50 --> Final output sent to browser
DEBUG - 2020-03-08 23:13:50 --> Total execution time: 0.1166
INFO - 2020-03-08 16:13:54 --> Config Class Initialized
INFO - 2020-03-08 16:13:54 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:13:54 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:13:54 --> Utf8 Class Initialized
INFO - 2020-03-08 16:13:54 --> URI Class Initialized
INFO - 2020-03-08 16:13:54 --> Router Class Initialized
INFO - 2020-03-08 16:13:54 --> Output Class Initialized
INFO - 2020-03-08 16:13:54 --> Security Class Initialized
DEBUG - 2020-03-08 16:13:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:13:54 --> Input Class Initialized
INFO - 2020-03-08 16:13:54 --> Language Class Initialized
INFO - 2020-03-08 16:13:54 --> Loader Class Initialized
INFO - 2020-03-08 16:13:54 --> Helper loaded: url_helper
INFO - 2020-03-08 16:13:54 --> Helper loaded: general_helper
INFO - 2020-03-08 16:13:54 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:13:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:13:54 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:13:54 --> Controller Class Initialized
INFO - 2020-03-08 16:13:54 --> Model Class Initialized
INFO - 2020-03-08 23:13:54 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 23:13:54 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 23:13:54 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 23:13:54 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_jobproduct_list.php
INFO - 2020-03-08 23:13:54 --> Final output sent to browser
DEBUG - 2020-03-08 23:13:54 --> Total execution time: 0.0677
INFO - 2020-03-08 16:13:55 --> Config Class Initialized
INFO - 2020-03-08 16:13:55 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:13:55 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:13:55 --> Utf8 Class Initialized
INFO - 2020-03-08 16:13:55 --> URI Class Initialized
INFO - 2020-03-08 16:13:55 --> Router Class Initialized
INFO - 2020-03-08 16:13:55 --> Output Class Initialized
INFO - 2020-03-08 16:13:55 --> Security Class Initialized
DEBUG - 2020-03-08 16:13:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:13:55 --> Input Class Initialized
INFO - 2020-03-08 16:13:55 --> Language Class Initialized
INFO - 2020-03-08 16:13:55 --> Loader Class Initialized
INFO - 2020-03-08 16:13:55 --> Helper loaded: url_helper
INFO - 2020-03-08 16:13:55 --> Helper loaded: general_helper
INFO - 2020-03-08 16:13:55 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:13:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:13:55 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:13:55 --> Controller Class Initialized
INFO - 2020-03-08 16:13:55 --> Model Class Initialized
INFO - 2020-03-08 23:13:55 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 23:13:55 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 23:13:55 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 23:13:55 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_jobproduct_list.php
INFO - 2020-03-08 23:13:55 --> Final output sent to browser
DEBUG - 2020-03-08 23:13:55 --> Total execution time: 0.0711
INFO - 2020-03-08 16:19:25 --> Config Class Initialized
INFO - 2020-03-08 16:19:25 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:19:25 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:19:25 --> Utf8 Class Initialized
INFO - 2020-03-08 16:19:25 --> URI Class Initialized
DEBUG - 2020-03-08 16:19:25 --> No URI present. Default controller set.
INFO - 2020-03-08 16:19:25 --> Router Class Initialized
INFO - 2020-03-08 16:19:25 --> Output Class Initialized
INFO - 2020-03-08 16:19:25 --> Security Class Initialized
DEBUG - 2020-03-08 16:19:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:19:25 --> Input Class Initialized
INFO - 2020-03-08 16:19:25 --> Language Class Initialized
INFO - 2020-03-08 16:19:25 --> Loader Class Initialized
INFO - 2020-03-08 16:19:25 --> Helper loaded: url_helper
INFO - 2020-03-08 16:19:25 --> Helper loaded: general_helper
INFO - 2020-03-08 16:19:25 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:19:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:19:25 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:19:25 --> Controller Class Initialized
INFO - 2020-03-08 16:19:25 --> Model Class Initialized
INFO - 2020-03-08 23:19:25 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 23:19:25 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 23:19:25 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer.php
INFO - 2020-03-08 23:19:26 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 23:19:26 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_customer_list.php
INFO - 2020-03-08 23:19:26 --> Final output sent to browser
DEBUG - 2020-03-08 23:19:26 --> Total execution time: 0.0952
INFO - 2020-03-08 16:19:35 --> Config Class Initialized
INFO - 2020-03-08 16:19:35 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:19:35 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:19:35 --> Utf8 Class Initialized
INFO - 2020-03-08 16:19:35 --> URI Class Initialized
INFO - 2020-03-08 16:19:35 --> Router Class Initialized
INFO - 2020-03-08 16:19:35 --> Output Class Initialized
INFO - 2020-03-08 16:19:35 --> Security Class Initialized
DEBUG - 2020-03-08 16:19:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:19:35 --> Input Class Initialized
INFO - 2020-03-08 16:19:35 --> Language Class Initialized
INFO - 2020-03-08 16:19:35 --> Loader Class Initialized
INFO - 2020-03-08 16:19:35 --> Helper loaded: url_helper
INFO - 2020-03-08 16:19:35 --> Helper loaded: general_helper
INFO - 2020-03-08 16:19:36 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:19:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:19:36 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:19:36 --> Controller Class Initialized
INFO - 2020-03-08 16:19:36 --> Model Class Initialized
INFO - 2020-03-08 23:19:36 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 23:19:36 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 23:19:36 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 23:19:36 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_jobproduct_list.php
INFO - 2020-03-08 23:19:36 --> Final output sent to browser
DEBUG - 2020-03-08 23:19:36 --> Total execution time: 0.5243
INFO - 2020-03-08 16:19:47 --> Config Class Initialized
INFO - 2020-03-08 16:19:47 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:19:47 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:19:47 --> Utf8 Class Initialized
INFO - 2020-03-08 16:19:47 --> URI Class Initialized
INFO - 2020-03-08 16:19:47 --> Router Class Initialized
INFO - 2020-03-08 16:19:47 --> Output Class Initialized
INFO - 2020-03-08 16:19:47 --> Security Class Initialized
DEBUG - 2020-03-08 16:19:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:19:47 --> Input Class Initialized
INFO - 2020-03-08 16:19:47 --> Language Class Initialized
INFO - 2020-03-08 16:19:47 --> Loader Class Initialized
INFO - 2020-03-08 16:19:47 --> Helper loaded: url_helper
INFO - 2020-03-08 16:19:47 --> Helper loaded: general_helper
INFO - 2020-03-08 16:19:47 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:19:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:19:47 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:19:47 --> Controller Class Initialized
INFO - 2020-03-08 16:19:47 --> Model Class Initialized
INFO - 2020-03-08 16:21:15 --> Config Class Initialized
INFO - 2020-03-08 16:21:15 --> Hooks Class Initialized
DEBUG - 2020-03-08 16:21:15 --> UTF-8 Support Enabled
INFO - 2020-03-08 16:21:15 --> Utf8 Class Initialized
INFO - 2020-03-08 16:21:15 --> URI Class Initialized
INFO - 2020-03-08 16:21:15 --> Router Class Initialized
INFO - 2020-03-08 16:21:15 --> Output Class Initialized
INFO - 2020-03-08 16:21:15 --> Security Class Initialized
DEBUG - 2020-03-08 16:21:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2020-03-08 16:21:15 --> Input Class Initialized
INFO - 2020-03-08 16:21:15 --> Language Class Initialized
INFO - 2020-03-08 16:21:15 --> Loader Class Initialized
INFO - 2020-03-08 16:21:15 --> Helper loaded: url_helper
INFO - 2020-03-08 16:21:15 --> Helper loaded: general_helper
INFO - 2020-03-08 16:21:15 --> Database Driver Class Initialized
DEBUG - 2020-03-08 16:21:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2020-03-08 16:21:15 --> Session: Class initialized using 'files' driver.
INFO - 2020-03-08 16:21:15 --> Controller Class Initialized
INFO - 2020-03-08 16:21:15 --> Model Class Initialized
INFO - 2020-03-08 23:21:16 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_head.php
INFO - 2020-03-08 23:21:16 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_header.php
INFO - 2020-03-08 23:21:16 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_footer_script.php
INFO - 2020-03-08 23:21:16 --> File loaded: /Applications/MAMP/htdocs/sis_dev/inventory/application/views/v_add_jobproduct.php
INFO - 2020-03-08 23:21:16 --> Final output sent to browser
DEBUG - 2020-03-08 23:21:16 --> Total execution time: 0.8305
