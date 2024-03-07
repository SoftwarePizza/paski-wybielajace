<?php exit; ?> 

OrderId 41722
===========================
Tpay order parameters
===========================
2022-12-04 03:03:36
ip: 185.219.143.230
Array
(
    [amount] => 180.00
    [crc] => bb91ffa8d97ab4be8a6e3354757ed83e
    [description] => Zamówienie MMBATCXVA. Klient Test Test
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123372&id_module=140&id_order=41722&key=4a54d0ea881c3fbf64167c42bd8b4569&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41722
    [email] => propidren@yahoo.com
    [name] => Test Test
    [phone] => 500600700
    [address] => dfsfsdsfd 23
    [city] => Starogard
    [zip] => 83-200
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 108
)



OrderId 41723
===========================
Tpay order parameters
===========================
2022-12-04 03:11:22
ip: 185.219.143.239
Array
(
    [amount] => 24.98
    [crc] => 921da103b1b2d347138308919a8e4a7c
    [description] => Zamówienie WYPURXQAP. Klient Test Test
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123373&id_module=140&id_order=41723&key=4a54d0ea881c3fbf64167c42bd8b4569&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41723
    [email] => propidren@yahoo.com
    [name] => Test Test
    [phone] => 500600700
    [address] => dfsfsdsfd 23
    [city] => Starogard
    [zip] => 83-200
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
)



OrderId 41724
===========================
Tpay order parameters
===========================
2022-12-04 10:51:59
ip: 178.235.178.41
Array
(
    [amount] => 127.98
    [crc] => b761f555ed753fe72f0e481a83004593
    [description] => Zamówienie YSFKUDSBB. Klient Konrad Szlachowski
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123378&id_module=140&id_order=41724&key=f7ea2537c3d4b06dd1e6200ddfb3df4b&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41724
    [email] => kondziu9@onet.eu
    [name] => Konrad Szlachowski
    [phone] => 793163792
    [address] => Kopalniana 7/43
    [city] => Starachowice
    [zip] => 27-200
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2022-12-04 10:51:59
ip: 178.235.178.41
Array
(
    [amount] => 127.98
    [crc] => b761f555ed753fe72f0e481a83004593
    [description] => Zamówienie YSFKUDSBB. Klient Konrad Szlachowski
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123378&id_module=140&id_order=41724&key=f7ea2537c3d4b06dd1e6200ddfb3df4b&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41724
    [email] => kondziu9@onet.eu
    [name] => Konrad Szlachowski
    [phone] => 793163792
    [address] => Kopalniana 7/43
    [city] => Starachowice
    [zip] => 27-200
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 8f22d961ff4cbee131156fb1e5662420
    [id] => 55382
)



===========================
Transaction create response
===========================
2022-12-04 10:52:00
ip: 178.235.178.41
Array
(
    [result] => 1
    [title] => TR-1CEN-7NGTPAX
    [amount] => 127.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-7NGTPAX&uid=01GKE8SDHFECWR4JB7BC5Y2RQ6
)



===========================
Blik request params
===========================
2022-12-04 10:52:00
ip: 178.235.178.41
Array
(
    [title] => TR-1CEN-7NGTPAX
    [code] => 568765
)



===========================
Blik response
===========================
2022-12-04 10:52:00
ip: 178.235.178.41
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2022-12-04 10:52:10
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NGTPAX
    [tr_date] => 2022-12-04 10:52:07
    [tr_crc] => b761f555ed753fe72f0e481a83004593
    [tr_amount] => 127.98
    [tr_paid] => 127.98
    [tr_desc] => Zamówienie YSFKUDSBB. Klient Konrad Szlachowski
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => kondziu9@onet.eu
    [test_mode] => 0
    [md5sum] => 3369c81c324ea18cf04c876bf50ed40d
)



Check MD5: 1
===========================
Basic payment notification
===========================
2022-12-04 10:53:12
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NGTPAX
    [tr_date] => 2022-12-04 10:52:07
    [tr_crc] => b761f555ed753fe72f0e481a83004593
    [tr_amount] => 127.98
    [tr_paid] => 127.98
    [tr_desc] => Zamówienie YSFKUDSBB. Klient Konrad Szlachowski
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => kondziu9@onet.eu
    [test_mode] => 0
    [md5sum] => 3369c81c324ea18cf04c876bf50ed40d
)



Check MD5: 1
OrderId 41725
===========================
Tpay order parameters
===========================
2022-12-04 11:43:00
ip: 109.243.137.163
Array
(
    [amount] => 363.05
    [crc] => 4d67826800caf68985f5e22e82b74dd8
    [description] => Zamówienie AWTEYZFZH. Klient Marzena Pierzchała
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123382&id_module=140&id_order=41725&key=ee6e9cdf8648af9e146fbf160282f68d&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41725
    [email] => marzenapierzchalaa@wp.pl
    [name] => Marzena Pierzchała
    [phone] => 889285756
    [address] => Witosa 1
    [city] => Biały Dunajec
    [zip] => 34-425
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 115
)



===========================
Basic payment notification
===========================
2022-12-04 11:43:49
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NH6T7X
    [tr_date] => 2022-12-04 11:43:47
    [tr_crc] => 4d67826800caf68985f5e22e82b74dd8
    [tr_amount] => 363.05
    [tr_paid] => 363.05
    [tr_desc] => Zamówienie AWTEYZFZH. Klient Marzena Pierzchała
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => marzenapierzchalaa@wp.pl
    [test_mode] => 0
    [md5sum] => 0fa6929e882f9dd574ce749f71ac0825
)



Check MD5: 1
===========================
Basic payment notification
===========================
2022-12-04 11:44:50
ip: 46.29.19.106
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NH6T7X
    [tr_date] => 2022-12-04 11:43:47
    [tr_crc] => 4d67826800caf68985f5e22e82b74dd8
    [tr_amount] => 363.05
    [tr_paid] => 363.05
    [tr_desc] => Zamówienie AWTEYZFZH. Klient Marzena Pierzchała
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => marzenapierzchalaa@wp.pl
    [test_mode] => 0
    [md5sum] => 0fa6929e882f9dd574ce749f71ac0825
)



Check MD5: 1
OrderId 41726
===========================
Tpay order parameters
===========================
2022-12-04 12:50:12
ip: 31.0.81.106
Array
(
    [amount] => 290.98
    [crc] => d3762860ba0902639b47863c8060b208
    [description] => Zamówienie GUWJPYBWO. Klient Karolina Juszczak
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123385&id_module=140&id_order=41726&key=b809422fcbac9a0217a6b92fc48c319b&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41726
    [email] => anilora8@gmail.com
    [name] => Karolina Juszczak
    [phone] => 721697322
    [address] => 16 -
    [city] => Halinówka
    [zip] => 24-204
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2022-12-04 12:50:12
ip: 31.0.81.106
Array
(
    [amount] => 290.98
    [crc] => d3762860ba0902639b47863c8060b208
    [description] => Zamówienie GUWJPYBWO. Klient Karolina Juszczak
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123385&id_module=140&id_order=41726&key=b809422fcbac9a0217a6b92fc48c319b&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41726
    [email] => anilora8@gmail.com
    [name] => Karolina Juszczak
    [phone] => 721697322
    [address] => 16 -
    [city] => Halinówka
    [zip] => 24-204
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => bee8e31a919bae7ae347bc3060ee0646
    [id] => 55382
)



===========================
Transaction create response
===========================
2022-12-04 12:50:13
ip: 31.0.81.106
Array
(
    [result] => 1
    [title] => TR-1CEN-7NHRSPX
    [amount] => 290.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-7NHRSPX&uid=01GKEFHW8WDPSP0SHXWA39MHTP
)



===========================
Blik request params
===========================
2022-12-04 12:50:13
ip: 31.0.81.106
Array
(
    [title] => TR-1CEN-7NHRSPX
    [code] => 100331
)



===========================
Blik response
===========================
2022-12-04 12:50:14
ip: 31.0.81.106
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2022-12-04 12:50:30
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NHRSPX
    [tr_date] => 2022-12-04 12:50:27
    [tr_crc] => d3762860ba0902639b47863c8060b208
    [tr_amount] => 290.98
    [tr_paid] => 290.98
    [tr_desc] => Zamówienie GUWJPYBWO. Klient Karolina Juszczak
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => anilora8@gmail.com
    [test_mode] => 0
    [md5sum] => 4599eb59665f118a43ea6deac7814146
)



Check MD5: 1
===========================
Basic payment notification
===========================
2022-12-04 12:51:31
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NHRSPX
    [tr_date] => 2022-12-04 12:50:27
    [tr_crc] => d3762860ba0902639b47863c8060b208
    [tr_amount] => 290.98
    [tr_paid] => 290.98
    [tr_desc] => Zamówienie GUWJPYBWO. Klient Karolina Juszczak
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => anilora8@gmail.com
    [test_mode] => 0
    [md5sum] => 4599eb59665f118a43ea6deac7814146
)



Check MD5: 1
OrderId 41727
===========================
Tpay order parameters
===========================
2022-12-04 13:53:15
ip: 213.108.159.2
Array
(
    [amount] => 247.98
    [crc] => 337ff0238f31519e0804b8a619f5c77d
    [description] => Zamówienie LXNJSCBSF. Klient Anna Urcus
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123389&id_module=140&id_order=41727&key=10c6fbafb3036dd287e1dea2b8f73ed1&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41727
    [email] => aurcus@o2.pl
    [name] => Anna Urcus
    [phone] => 513000160
    [address] => Armii Krajowej 15a
    [city] => Łomianki 
    [zip] => 05-092
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 102
)



===========================
Basic payment notification
===========================
2022-12-04 13:54:00
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NJBN4X
    [tr_date] => 2022-12-04 13:53:56
    [tr_crc] => 337ff0238f31519e0804b8a619f5c77d
    [tr_amount] => 247.98
    [tr_paid] => 247.98
    [tr_desc] => Zamówienie LXNJSCBSF. Klient Anna Urcus
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => aurcus@o2.pl
    [test_mode] => 0
    [md5sum] => 373e81992bbe4717c374e3450abf086d
)



Check MD5: 1
===========================
Basic payment notification
===========================
2022-12-04 13:55:01
ip: 46.29.19.106
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NJBN4X
    [tr_date] => 2022-12-04 13:53:56
    [tr_crc] => 337ff0238f31519e0804b8a619f5c77d
    [tr_amount] => 247.98
    [tr_paid] => 247.98
    [tr_desc] => Zamówienie LXNJSCBSF. Klient Anna Urcus
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => aurcus@o2.pl
    [test_mode] => 0
    [md5sum] => 373e81992bbe4717c374e3450abf086d
)



Check MD5: 1
OrderId 41728
===========================
Tpay order parameters
===========================
2022-12-04 15:06:37
ip: 2a02:a317:e437:7e80:5146:2fc6:ced1:debd
Array
(
    [amount] => 290.98
    [crc] => 8af9f00f4eb70c99cb6928eb2027ad98
    [description] => Zamówienie IMUOORGNJ. Klient Marcin Matyja
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123390&id_module=140&id_order=41728&key=46e2e856a19e65e529b1b5515b7eb1f6&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41728
    [email] => marcinmatyjacomp@gmail.com
    [name] => Marcin Matyja
    [phone] => 727675497
    [address] => Vasco Da Gamy 18b/16
    [city] => Wrocław
    [zip] => 51-505
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2022-12-04 15:06:37
ip: 2a02:a317:e437:7e80:5146:2fc6:ced1:debd
Array
(
    [amount] => 290.98
    [crc] => 8af9f00f4eb70c99cb6928eb2027ad98
    [description] => Zamówienie IMUOORGNJ. Klient Marcin Matyja
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123390&id_module=140&id_order=41728&key=46e2e856a19e65e529b1b5515b7eb1f6&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41728
    [email] => marcinmatyjacomp@gmail.com
    [name] => Marcin Matyja
    [phone] => 727675497
    [address] => Vasco Da Gamy 18b/16
    [city] => Wrocław
    [zip] => 51-505
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 31b5a6950b43cd670035b5ed8e680457
    [id] => 55382
)



===========================
Transaction create response
===========================
2022-12-04 15:06:38
ip: 2a02:a317:e437:7e80:5146:2fc6:ced1:debd
Array
(
    [result] => 1
    [title] => TR-1CEN-7NK4FUX
    [amount] => 290.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-7NK4FUX&uid=01GKEQBNJP33P140ZN9FCD7JKD
)



===========================
Blik request params
===========================
2022-12-04 15:06:38
ip: 2a02:a317:e437:7e80:5146:2fc6:ced1:debd
Array
(
    [title] => TR-1CEN-7NK4FUX
    [code] => 457756
)



===========================
Blik response
===========================
2022-12-04 15:06:39
ip: 2a02:a317:e437:7e80:5146:2fc6:ced1:debd
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2022-12-04 15:06:47
ip: 46.29.19.106
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NK4FUX
    [tr_date] => 2022-12-04 15:06:46
    [tr_crc] => 8af9f00f4eb70c99cb6928eb2027ad98
    [tr_amount] => 290.98
    [tr_paid] => 290.98
    [tr_desc] => Zamówienie IMUOORGNJ. Klient Marcin Matyja
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => marcinmatyjacomp@gmail.com
    [test_mode] => 0
    [md5sum] => d891ea87fcc3f24d5639195878c6ef7a
)



Check MD5: 1
===========================
Basic payment notification
===========================
2022-12-04 15:07:48
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NK4FUX
    [tr_date] => 2022-12-04 15:06:46
    [tr_crc] => 8af9f00f4eb70c99cb6928eb2027ad98
    [tr_amount] => 290.98
    [tr_paid] => 290.98
    [tr_desc] => Zamówienie IMUOORGNJ. Klient Marcin Matyja
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => marcinmatyjacomp@gmail.com
    [test_mode] => 0
    [md5sum] => d891ea87fcc3f24d5639195878c6ef7a
)



Check MD5: 1
OrderId 41729
===========================
Tpay order parameters
===========================
2022-12-04 16:55:55
ip: 2a00:f41:1820:e473:d81:278a:c137:5249
Array
(
    [amount] => 157.98
    [crc] => d5727d6d1b585cd6fb0e039aa32250b8
    [description] => Zamówienie GGIBZCVCJ. Klient Weronika Pac
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123392&id_module=140&id_order=41729&key=a497d90c263bc2e1f30063009694b1cd&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41729
    [email] => weronika.pac@gmail.com
    [name] => Weronika Pac
    [phone] => 506870312
    [address] => Cieszyńska 16
    [city] => Kraków 
    [zip] => 30-015
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2022-12-04 16:55:55
ip: 2a00:f41:1820:e473:d81:278a:c137:5249
Array
(
    [amount] => 157.98
    [crc] => d5727d6d1b585cd6fb0e039aa32250b8
    [description] => Zamówienie GGIBZCVCJ. Klient Weronika Pac
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123392&id_module=140&id_order=41729&key=a497d90c263bc2e1f30063009694b1cd&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41729
    [email] => weronika.pac@gmail.com
    [name] => Weronika Pac
    [phone] => 506870312
    [address] => Cieszyńska 16
    [city] => Kraków 
    [zip] => 30-015
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => c8fa6584f1b09cf966b6dcd10c6ad6a6
    [id] => 55382
)



===========================
Transaction create response
===========================
2022-12-04 16:55:56
ip: 2a00:f41:1820:e473:d81:278a:c137:5249
Array
(
    [result] => 1
    [title] => TR-1CEN-7NLEUYX
    [amount] => 157.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-7NLEUYX&uid=01GKEXKT6VC7GZQAQ5Z2R1VP77
)



===========================
Blik request params
===========================
2022-12-04 16:55:56
ip: 2a00:f41:1820:e473:d81:278a:c137:5249
Array
(
    [title] => TR-1CEN-7NLEUYX
    [code] => 878816
)



===========================
Blik response
===========================
2022-12-04 16:55:57
ip: 2a00:f41:1820:e473:d81:278a:c137:5249
Array
(
    [result] => 1
)



OrderId 41730
===========================
Tpay order parameters
===========================
2022-12-04 17:44:13
ip: 2a02:a312:c841:3300:54e:877c:3dc5:ced4
Array
(
    [amount] => 154.98
    [crc] => ec4306fed0e46ea1d8cd17aea2f698f6
    [description] => Zamówienie QMQDRFPKB. Klient Marta Kucharska - Gizińska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123395&id_module=140&id_order=41730&key=984e3429bce97d7a9a75799de7d01130&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41730
    [email] => mrtkucharska22@gmail.com
    [name] => Marta Kucharska - Gizińska
    [phone] => 538153172
    [address] => Al. Jana Pawła Ii 1g/65
    [city] => Gdańsk 
    [zip] => 80-462
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2022-12-04 17:44:13
ip: 2a02:a312:c841:3300:54e:877c:3dc5:ced4
Array
(
    [amount] => 154.98
    [crc] => ec4306fed0e46ea1d8cd17aea2f698f6
    [description] => Zamówienie QMQDRFPKB. Klient Marta Kucharska - Gizińska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123395&id_module=140&id_order=41730&key=984e3429bce97d7a9a75799de7d01130&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41730
    [email] => mrtkucharska22@gmail.com
    [name] => Marta Kucharska - Gizińska
    [phone] => 538153172
    [address] => Al. Jana Pawła Ii 1g/65
    [city] => Gdańsk 
    [zip] => 80-462
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 858120a2a1f5b411bd1c21415168f53d
    [id] => 55382
)



===========================
Transaction create response
===========================
2022-12-04 17:44:14
ip: 2a02:a312:c841:3300:54e:877c:3dc5:ced4
Array
(
    [result] => 1
    [title] => TR-1CEN-7NLTPCX
    [amount] => 154.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-7NLTPCX&uid=01GKF0C7YP5Z7KW40CNWYYF83G
)



===========================
Blik request params
===========================
2022-12-04 17:44:14
ip: 2a02:a312:c841:3300:54e:877c:3dc5:ced4
Array
(
    [title] => TR-1CEN-7NLTPCX
    [code] => 206001
)



===========================
Blik response
===========================
2022-12-04 17:44:16
ip: 2a02:a312:c841:3300:54e:877c:3dc5:ced4
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2022-12-04 17:44:25
ip: 46.29.19.106
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NLTPCX
    [tr_date] => 2022-12-04 17:44:23
    [tr_crc] => ec4306fed0e46ea1d8cd17aea2f698f6
    [tr_amount] => 154.98
    [tr_paid] => 154.98
    [tr_desc] => Zamówienie QMQDRFPKB. Klient Marta Kucharska - Gizińska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => mrtkucharska22@gmail.com
    [test_mode] => 0
    [md5sum] => 224070d2d3967072413aa2faea214c77
)



Check MD5: 1
===========================
Basic payment notification
===========================
2022-12-04 17:45:27
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NLTPCX
    [tr_date] => 2022-12-04 17:44:23
    [tr_crc] => ec4306fed0e46ea1d8cd17aea2f698f6
    [tr_amount] => 154.98
    [tr_paid] => 154.98
    [tr_desc] => Zamówienie QMQDRFPKB. Klient Marta Kucharska - Gizińska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => mrtkucharska22@gmail.com
    [test_mode] => 0
    [md5sum] => 224070d2d3967072413aa2faea214c77
)



Check MD5: 1
===========================
Basic payment notification
===========================
2022-12-04 18:12:41
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NLEUYX
    [tr_date] => 2022-12-04 18:12:39
    [tr_crc] => d5727d6d1b585cd6fb0e039aa32250b8
    [tr_amount] => 157.98
    [tr_paid] => 157.98
    [tr_desc] => Zamówienie GGIBZCVCJ. Klient Weronika Pac
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => weronika.pac@gmail.com
    [test_mode] => 0
    [md5sum] => db307ea65ceb023c11dbc32992b00c1d
)



Check MD5: 1
===========================
Basic payment notification
===========================
2022-12-04 18:13:42
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NLEUYX
    [tr_date] => 2022-12-04 18:12:39
    [tr_crc] => d5727d6d1b585cd6fb0e039aa32250b8
    [tr_amount] => 157.98
    [tr_paid] => 157.98
    [tr_desc] => Zamówienie GGIBZCVCJ. Klient Weronika Pac
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => weronika.pac@gmail.com
    [test_mode] => 0
    [md5sum] => db307ea65ceb023c11dbc32992b00c1d
)



Check MD5: 1
OrderId 41731
===========================
Tpay order parameters
===========================
2022-12-04 19:05:50
ip: 2a01:110f:4a09:8200:6955:74b:c418:49ea
Array
(
    [amount] => 417.99
    [crc] => a910f2d16e61d4d76b4a1c1e85483931
    [description] => Zamówienie ULKZGHPFI. Klient Paul Gleeson
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123402&id_module=140&id_order=41731&key=d08a04f9a584bc124e32c086bcf536f8&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41731
    [email] => paulandkasia@yahoo.id
    [name] => Paul Gleeson
    [phone] => 502184108
    [address] => Wolodyjowskiego 66
    [city] => Warszawa
    [zip] => 02-724
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2022-12-04 19:05:50
ip: 2a01:110f:4a09:8200:6955:74b:c418:49ea
Array
(
    [amount] => 417.99
    [crc] => a910f2d16e61d4d76b4a1c1e85483931
    [description] => Zamówienie ULKZGHPFI. Klient Paul Gleeson
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123402&id_module=140&id_order=41731&key=d08a04f9a584bc124e32c086bcf536f8&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41731
    [email] => paulandkasia@yahoo.id
    [name] => Paul Gleeson
    [phone] => 502184108
    [address] => Wolodyjowskiego 66
    [city] => Warszawa
    [zip] => 02-724
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => e3554371eeaf4447e259de79cdc05d9b
    [id] => 55382
)



===========================
Transaction create response
===========================
2022-12-04 19:05:51
ip: 2a01:110f:4a09:8200:6955:74b:c418:49ea
Array
(
    [result] => 1
    [title] => TR-1CEN-7NMGSEX
    [amount] => 417.99
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-7NMGSEX&uid=01GKF51P17PPH7CMVS9VVZJ4Q7
)



===========================
Blik request params
===========================
2022-12-04 19:05:51
ip: 2a01:110f:4a09:8200:6955:74b:c418:49ea
Array
(
    [title] => TR-1CEN-7NMGSEX
    [code] => 657518
)



===========================
Blik response
===========================
2022-12-04 19:05:51
ip: 2a01:110f:4a09:8200:6955:74b:c418:49ea
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2022-12-04 19:06:12
ip: 46.29.19.106
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NMGSEX
    [tr_date] => 2022-12-04 19:06:10
    [tr_crc] => a910f2d16e61d4d76b4a1c1e85483931
    [tr_amount] => 417.99
    [tr_paid] => 417.99
    [tr_desc] => Zamówienie ULKZGHPFI. Klient Paul Gleeson
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => paulandkasia@yahoo.id
    [test_mode] => 0
    [md5sum] => 50d0e02d2dac68fb57ba3157b6084f4c
)



Check MD5: 1
===========================
Basic payment notification
===========================
2022-12-04 19:07:14
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NMGSEX
    [tr_date] => 2022-12-04 19:06:10
    [tr_crc] => a910f2d16e61d4d76b4a1c1e85483931
    [tr_amount] => 417.99
    [tr_paid] => 417.99
    [tr_desc] => Zamówienie ULKZGHPFI. Klient Paul Gleeson
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => paulandkasia@yahoo.id
    [test_mode] => 0
    [md5sum] => 50d0e02d2dac68fb57ba3157b6084f4c
)



Check MD5: 1
OrderId 41732
===========================
Tpay order parameters
===========================
2022-12-04 19:18:16
ip: 95.215.79.124
Array
(
    [amount] => 164.98
    [crc] => ebb04a441dcc69ccbff8ca11aa780092
    [description] => Zamówienie BTESGRAUO. Klient Grzegorz Nogas
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123403&id_module=140&id_order=41732&key=6df53b1a5911b59b9f0b78e9e8d4ea45&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41732
    [email] => nogasgrzegorz@gmail.com
    [name] => Grzegorz Nogas
    [phone] => 780086478
    [address] => Barlickiego 67/18
    [city] => Będzin 
    [zip] => 42-506
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2022-12-04 19:18:16
ip: 95.215.79.124
Array
(
    [amount] => 164.98
    [crc] => ebb04a441dcc69ccbff8ca11aa780092
    [description] => Zamówienie BTESGRAUO. Klient Grzegorz Nogas
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123403&id_module=140&id_order=41732&key=6df53b1a5911b59b9f0b78e9e8d4ea45&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41732
    [email] => nogasgrzegorz@gmail.com
    [name] => Grzegorz Nogas
    [phone] => 780086478
    [address] => Barlickiego 67/18
    [city] => Będzin 
    [zip] => 42-506
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => be2f4ac1e8f0a9ee47934033bb203dd2
    [id] => 55382
)



===========================
Transaction create response
===========================
2022-12-04 19:18:17
ip: 95.215.79.124
Array
(
    [result] => 1
    [title] => TR-1CEN-7NML6HX
    [amount] => 164.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-7NML6HX&uid=01GKF5REE90H5FZYV39YNNDT46
)



===========================
Blik request params
===========================
2022-12-04 19:18:17
ip: 95.215.79.124
Array
(
    [title] => TR-1CEN-7NML6HX
    [code] => 900693
)



===========================
Blik response
===========================
2022-12-04 19:18:17
ip: 95.215.79.124
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2022-12-04 19:18:29
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NML6HX
    [tr_date] => 2022-12-04 19:18:28
    [tr_crc] => ebb04a441dcc69ccbff8ca11aa780092
    [tr_amount] => 164.98
    [tr_paid] => 164.98
    [tr_desc] => Zamówienie BTESGRAUO. Klient Grzegorz Nogas
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => nogasgrzegorz@gmail.com
    [test_mode] => 0
    [md5sum] => e8a31c2fb453320399a5564cc87f366b
)



Check MD5: 1
===========================
Basic payment notification
===========================
2022-12-04 19:19:30
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NML6HX
    [tr_date] => 2022-12-04 19:18:28
    [tr_crc] => ebb04a441dcc69ccbff8ca11aa780092
    [tr_amount] => 164.98
    [tr_paid] => 164.98
    [tr_desc] => Zamówienie BTESGRAUO. Klient Grzegorz Nogas
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => nogasgrzegorz@gmail.com
    [test_mode] => 0
    [md5sum] => e8a31c2fb453320399a5564cc87f366b
)



Check MD5: 1
OrderId 41733
===========================
Tpay order parameters
===========================
2022-12-04 20:58:09
ip: 80.238.119.39
Array
(
    [amount] => 143.78
    [crc] => 0988ef531a8997fa818514f16d9d719d
    [description] => Zamówienie HTSJIFPEK. Klient Anna Giżowska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123409&id_module=140&id_order=41733&key=937a888d5f4d483692df67c31999c8e6&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41733
    [email] => a.dragun@op.pl
    [name] => Anna Giżowska
    [phone] => 600039124
    [address] => Ul. Świderska 113/17
    [city] => Warszawa
    [zip] => 03-128
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
)



===========================
Basic payment notification
===========================
2022-12-04 20:58:52
ip: 46.29.19.106
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NNFATX
    [tr_date] => 2022-12-04 20:58:49
    [tr_crc] => 0988ef531a8997fa818514f16d9d719d
    [tr_amount] => 143.78
    [tr_paid] => 143.78
    [tr_desc] => Zamówienie HTSJIFPEK. Klient Anna Giżowska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => a.dragun@op.pl
    [test_mode] => 0
    [md5sum] => 47f2334e031721264da934ad0ea436f1
)



Check MD5: 1
===========================
Basic payment notification
===========================
2022-12-04 20:59:53
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NNFATX
    [tr_date] => 2022-12-04 20:58:49
    [tr_crc] => 0988ef531a8997fa818514f16d9d719d
    [tr_amount] => 143.78
    [tr_paid] => 143.78
    [tr_desc] => Zamówienie HTSJIFPEK. Klient Anna Giżowska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => a.dragun@op.pl
    [test_mode] => 0
    [md5sum] => 47f2334e031721264da934ad0ea436f1
)



Check MD5: 1
OrderId 41734
===========================
Tpay order parameters
===========================
2022-12-04 21:22:18
ip: 46.204.32.85
Array
(
    [amount] => 148.22
    [crc] => 4985f14a89b00659bdb792b12085695a
    [description] => Zamówienie SUNNAISXW. Klient Ewa Kwiatkowska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123410&id_module=140&id_order=41734&key=4e5afb7ef7315f2a4375ec0899534782&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41734
    [email] => javika85@wp.pl
    [name] => Ewa Kwiatkowska
    [phone] => 888417217
    [address] => Winnica 37/1
    [city] => Toruń
    [zip] => 87-100
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 110
)



===========================
Basic payment notification
===========================
2022-12-04 21:24:24
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NNM6NX
    [tr_date] => 2022-12-04 21:24:21
    [tr_crc] => 4985f14a89b00659bdb792b12085695a
    [tr_amount] => 148.22
    [tr_paid] => 148.22
    [tr_desc] => Zamówienie SUNNAISXW. Klient Ewa Kwiatkowska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => javika85@wp.pl
    [test_mode] => 0
    [md5sum] => af43faa9955ba5d082176b79312cfaaf
)



Check MD5: 1
===========================
Basic payment notification
===========================
2022-12-04 21:25:25
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NNM6NX
    [tr_date] => 2022-12-04 21:24:21
    [tr_crc] => 4985f14a89b00659bdb792b12085695a
    [tr_amount] => 148.22
    [tr_paid] => 148.22
    [tr_desc] => Zamówienie SUNNAISXW. Klient Ewa Kwiatkowska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => javika85@wp.pl
    [test_mode] => 0
    [md5sum] => af43faa9955ba5d082176b79312cfaaf
)



Check MD5: 1
OrderId 41735
===========================
Tpay order parameters
===========================
2022-12-04 22:48:07
ip: 188.146.204.184
Array
(
    [amount] => 164.98
    [crc] => 8283a81fcc2e2526be7de27916f47fce
    [description] => Zamówienie VMXJTLGJI. Klient Natalia Kiełbik
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123414&id_module=140&id_order=41735&key=5c9fdbc0b2f4c14226a19d701d9fd4c7&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41735
    [email] => nataliekielbik@gmail.com
    [name] => Natalia Kiełbik
    [phone] => 536733811
    [address] => Aleja Pokoju 5/7
    [city] => Sieradz
    [zip] => 98-200
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2022-12-04 22:48:07
ip: 188.146.204.184
Array
(
    [amount] => 164.98
    [crc] => 8283a81fcc2e2526be7de27916f47fce
    [description] => Zamówienie VMXJTLGJI. Klient Natalia Kiełbik
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123414&id_module=140&id_order=41735&key=5c9fdbc0b2f4c14226a19d701d9fd4c7&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=41735
    [email] => nataliekielbik@gmail.com
    [name] => Natalia Kiełbik
    [phone] => 536733811
    [address] => Aleja Pokoju 5/7
    [city] => Sieradz
    [zip] => 98-200
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 8bfc75b8a8fbc36130954b40068e1bb0
    [id] => 55382
)



===========================
Transaction create response
===========================
2022-12-04 22:48:08
ip: 188.146.204.184
Array
(
    [result] => 1
    [title] => TR-1CEN-7NP6H7X
    [amount] => 164.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-7NP6H7X&uid=01GKFHRPAR0YGKKADPZ8RK49BM
)



===========================
Blik request params
===========================
2022-12-04 22:48:08
ip: 188.146.204.184
Array
(
    [title] => TR-1CEN-7NP6H7X
    [code] => 817116
)



===========================
Blik response
===========================
2022-12-04 22:48:08
ip: 188.146.204.184
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2022-12-04 22:48:18
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NP6H7X
    [tr_date] => 2022-12-04 22:48:14
    [tr_crc] => 8283a81fcc2e2526be7de27916f47fce
    [tr_amount] => 164.98
    [tr_paid] => 164.98
    [tr_desc] => Zamówienie VMXJTLGJI. Klient Natalia Kiełbik
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => nataliekielbik@gmail.com
    [test_mode] => 0
    [md5sum] => 186756664fc05ae8afcb18065519af54
)



Check MD5: 1
===========================
Basic payment notification
===========================
2022-12-04 22:49:18
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7NP6H7X
    [tr_date] => 2022-12-04 22:48:14
    [tr_crc] => 8283a81fcc2e2526be7de27916f47fce
    [tr_amount] => 164.98
    [tr_paid] => 164.98
    [tr_desc] => Zamówienie VMXJTLGJI. Klient Natalia Kiełbik
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => nataliekielbik@gmail.com
    [test_mode] => 0
    [md5sum] => 186756664fc05ae8afcb18065519af54
)



Check MD5: 1