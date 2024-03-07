<?php exit; ?> 

OrderId 42193
===========================
Tpay order parameters
===========================
2023-01-06 11:05:00
ip: 2a02:a317:6241:5000:9451:445d:ccc9:44e0
Array
(
    [amount] => 164.98
    [crc] => 4be73def70f93244f1c09bb487cf01b2
    [description] => Zamówienie SZVJNPWYF. Klient Aneta Kleban
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124712&id_module=140&id_order=42193&key=4466ed0f6fe6bab7740e772913a36958&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42193
    [email] => akleban@wp.pl
    [name] => Aneta Kleban
    [phone] => 506011208
    [address] => Salon Fryzjerski Klaudyna Ul. Seledynowa95
    [city] => Szczecin
    [zip] => 70-781
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 108
)



OrderId 42194
===========================
Tpay order parameters
===========================
2023-01-06 11:05:39
ip: 2a02:a31c:362:9980:d169:88bf:10ec:f950
Array
(
    [amount] => 142.30
    [crc] => 76531dfed9f634ceed66c3febedae159
    [description] => Zamówienie KYJWPRVYI. Klient Katarzyna Przybylska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124713&id_module=140&id_order=42194&key=1697d18dcbf0ae01e95d156f9138b8d9&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42194
    [email] => przybylska2@gmail.com
    [name] => Katarzyna Przybylska
    [phone] => 503711507
    [address] => Nowoursynowska 162/5
    [city] => Warszawa
    [zip] => 02-776
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-01-06 11:05:39
ip: 2a02:a31c:362:9980:d169:88bf:10ec:f950
Array
(
    [amount] => 142.30
    [crc] => 76531dfed9f634ceed66c3febedae159
    [description] => Zamówienie KYJWPRVYI. Klient Katarzyna Przybylska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124713&id_module=140&id_order=42194&key=1697d18dcbf0ae01e95d156f9138b8d9&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42194
    [email] => przybylska2@gmail.com
    [name] => Katarzyna Przybylska
    [phone] => 503711507
    [address] => Nowoursynowska 162/5
    [city] => Warszawa
    [zip] => 02-776
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 6fd9dab9f4c8ca73f139717518d26c27
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-01-06 11:05:40
ip: 2a02:a31c:362:9980:d169:88bf:10ec:f950
Array
(
    [result] => 1
    [title] => TR-1CEN-7Z76ZGX
    [amount] => 142.3
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-7Z76ZGX&uid=01GP38P5K5H2163Z821P70K1VP
)



===========================
Blik request params
===========================
2023-01-06 11:05:40
ip: 2a02:a31c:362:9980:d169:88bf:10ec:f950
Array
(
    [title] => TR-1CEN-7Z76ZGX
    [code] => 576731
)



===========================
Blik response
===========================
2023-01-06 11:05:41
ip: 2a02:a31c:362:9980:d169:88bf:10ec:f950
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-01-06 11:05:48
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7Z76ZGX
    [tr_date] => 2023-01-06 11:05:45
    [tr_crc] => 76531dfed9f634ceed66c3febedae159
    [tr_amount] => 142.30
    [tr_paid] => 142.30
    [tr_desc] => Zamówienie KYJWPRVYI. Klient Katarzyna Przybylska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => przybylska2@gmail.com
    [test_mode] => 0
    [md5sum] => 4c13a4b8548ef1c1df6746adfcebe719
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-01-06 11:06:50
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7Z76ZGX
    [tr_date] => 2023-01-06 11:05:45
    [tr_crc] => 76531dfed9f634ceed66c3febedae159
    [tr_amount] => 142.30
    [tr_paid] => 142.30
    [tr_desc] => Zamówienie KYJWPRVYI. Klient Katarzyna Przybylska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => przybylska2@gmail.com
    [test_mode] => 0
    [md5sum] => 4c13a4b8548ef1c1df6746adfcebe719
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-01-06 11:07:24
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7Z76VVX
    [tr_date] => 2023-01-06 11:07:21
    [tr_crc] => 4be73def70f93244f1c09bb487cf01b2
    [tr_amount] => 164.98
    [tr_paid] => 164.98
    [tr_desc] => Zamówienie SZVJNPWYF. Klient Aneta Kleban
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => akleban@wp.pl
    [test_mode] => 0
    [md5sum] => 8d73d00c5a13873bde164343d8c3e1c4
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-01-06 11:08:25
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7Z76VVX
    [tr_date] => 2023-01-06 11:07:21
    [tr_crc] => 4be73def70f93244f1c09bb487cf01b2
    [tr_amount] => 164.98
    [tr_paid] => 164.98
    [tr_desc] => Zamówienie SZVJNPWYF. Klient Aneta Kleban
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => akleban@wp.pl
    [test_mode] => 0
    [md5sum] => 8d73d00c5a13873bde164343d8c3e1c4
)



Check MD5: 1
OrderId 42195
===========================
Tpay order parameters
===========================
2023-01-06 11:24:38
ip: 2a02:a31b:438:f000:17c:702e:ba89:b918
Array
(
    [amount] => 142.30
    [crc] => 13f10ef7b44485d87434f39b35a17067
    [description] => Zamówienie OTRGRCADH. Klient Joanna Dąbrowska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124715&id_module=140&id_order=42195&key=c1c90411dc7cfbbdcb108e9dfdb6923a&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42195
    [email] => asiad1995@gmail.com
    [name] => Joanna Dąbrowska
    [phone] => 646735405
    [address] => Bujaka 16a/52
    [city] => Krakow
    [zip] => 30-611
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-01-06 11:24:38
ip: 2a02:a31b:438:f000:17c:702e:ba89:b918
Array
(
    [amount] => 142.30
    [crc] => 13f10ef7b44485d87434f39b35a17067
    [description] => Zamówienie OTRGRCADH. Klient Joanna Dąbrowska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124715&id_module=140&id_order=42195&key=c1c90411dc7cfbbdcb108e9dfdb6923a&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42195
    [email] => asiad1995@gmail.com
    [name] => Joanna Dąbrowska
    [phone] => 646735405
    [address] => Bujaka 16a/52
    [city] => Krakow
    [zip] => 30-611
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 80848f1d8ef3b6406c051a22b0c06790
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-01-06 11:24:39
ip: 2a02:a31b:438:f000:17c:702e:ba89:b918
Array
(
    [result] => 1
    [title] => TR-1CEN-7Z7AC5X
    [amount] => 142.3
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-7Z7AC5X&uid=01GP39RXS6XD9970N5HKPRBHS4
)



===========================
Blik request params
===========================
2023-01-06 11:24:39
ip: 2a02:a31b:438:f000:17c:702e:ba89:b918
Array
(
    [title] => TR-1CEN-7Z7AC5X
    [code] => 460017
)



===========================
Blik response
===========================
2023-01-06 11:24:40
ip: 2a02:a31b:438:f000:17c:702e:ba89:b918
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-01-06 11:25:06
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7Z7AC5X
    [tr_date] => 2023-01-06 11:25:03
    [tr_crc] => 13f10ef7b44485d87434f39b35a17067
    [tr_amount] => 142.30
    [tr_paid] => 142.30
    [tr_desc] => Zamówienie OTRGRCADH. Klient Joanna Dąbrowska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => asiad1995@gmail.com
    [test_mode] => 0
    [md5sum] => 8a63e1e0c3b215d4f7b44e86b6098cef
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-01-06 11:26:08
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7Z7AC5X
    [tr_date] => 2023-01-06 11:25:03
    [tr_crc] => 13f10ef7b44485d87434f39b35a17067
    [tr_amount] => 142.30
    [tr_paid] => 142.30
    [tr_desc] => Zamówienie OTRGRCADH. Klient Joanna Dąbrowska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => asiad1995@gmail.com
    [test_mode] => 0
    [md5sum] => 8a63e1e0c3b215d4f7b44e86b6098cef
)



Check MD5: 1
OrderId 42196
===========================
Tpay order parameters
===========================
2023-01-06 15:09:46
ip: 212.160.160.35
Array
(
    [amount] => 142.30
    [crc] => 20ede6e028f3418e4dd528a20ccdecae
    [description] => Zamówienie AIUSFGRCT. Klient Karolina Kupiec
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124218&id_module=140&id_order=42196&key=66c392a45d9ecdbac0f3ca0b950bca21&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42196
    [email] => karokup@interia.pl
    [name] => Karolina Kupiec
    [phone] => 603116496
    [address] => Zwierzyniecka 67/11
    [city] => Tarnobrzeg
    [zip] => 39-400
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-01-06 15:09:46
ip: 212.160.160.35
Array
(
    [amount] => 142.30
    [crc] => 20ede6e028f3418e4dd528a20ccdecae
    [description] => Zamówienie AIUSFGRCT. Klient Karolina Kupiec
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124218&id_module=140&id_order=42196&key=66c392a45d9ecdbac0f3ca0b950bca21&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42196
    [email] => karokup@interia.pl
    [name] => Karolina Kupiec
    [phone] => 603116496
    [address] => Zwierzyniecka 67/11
    [city] => Tarnobrzeg
    [zip] => 39-400
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => e505b58f0cbabd344c2dfe813995afaf
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-01-06 15:09:47
ip: 212.160.160.35
Array
(
    [result] => 1
    [title] => TR-1CEN-7Z8U5FX
    [amount] => 142.3
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-7Z8U5FX&uid=01GP3PN4ZNZP3TEXDQZA4XBAMA
)



===========================
Blik request params
===========================
2023-01-06 15:09:47
ip: 212.160.160.35
Array
(
    [title] => TR-1CEN-7Z8U5FX
    [code] => 118493
)



===========================
Blik response
===========================
2023-01-06 15:09:47
ip: 212.160.160.35
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-01-06 15:10:03
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7Z8U5FX
    [tr_date] => 2023-01-06 15:10:01
    [tr_crc] => 20ede6e028f3418e4dd528a20ccdecae
    [tr_amount] => 142.30
    [tr_paid] => 142.30
    [tr_desc] => Zamówienie AIUSFGRCT. Klient Karolina Kupiec
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => karokup@interia.pl
    [test_mode] => 0
    [md5sum] => ff13a2c3a1e85bef823d305ee2586e11
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-01-06 15:11:04
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7Z8U5FX
    [tr_date] => 2023-01-06 15:10:01
    [tr_crc] => 20ede6e028f3418e4dd528a20ccdecae
    [tr_amount] => 142.30
    [tr_paid] => 142.30
    [tr_desc] => Zamówienie AIUSFGRCT. Klient Karolina Kupiec
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => karokup@interia.pl
    [test_mode] => 0
    [md5sum] => ff13a2c3a1e85bef823d305ee2586e11
)



Check MD5: 1
OrderId 42197
===========================
Tpay order parameters
===========================
2023-01-06 17:10:45
ip: 91.123.181.249
Array
(
    [amount] => 142.30
    [crc] => 63ee2b9d41dd669f5ccdc5ca1b39c643
    [description] => Zamówienie IDKDGCLAF. Klient Ewelina Przanowska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124725&id_module=140&id_order=42197&key=2d665e7a897f2a9e27bf8b50a83aa15f&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42197
    [email] => ewelina.przanowska@gmail.com
    [name] => Ewelina Przanowska
    [phone] => 518909835
    [address] => Rzeplin 100
    [city] => Skała
    [zip] => 32-046
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-01-06 17:10:45
ip: 91.123.181.249
Array
(
    [amount] => 142.30
    [crc] => 63ee2b9d41dd669f5ccdc5ca1b39c643
    [description] => Zamówienie IDKDGCLAF. Klient Ewelina Przanowska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124725&id_module=140&id_order=42197&key=2d665e7a897f2a9e27bf8b50a83aa15f&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42197
    [email] => ewelina.przanowska@gmail.com
    [name] => Ewelina Przanowska
    [phone] => 518909835
    [address] => Rzeplin 100
    [city] => Skała
    [zip] => 32-046
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => a99f248c88019bfe19c36df21b72e555
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-01-06 17:10:46
ip: 91.123.181.249
Array
(
    [result] => 1
    [title] => TR-1CEN-7Z9MJLX
    [amount] => 142.3
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-7Z9MJLX&uid=01GP3XJNN8KXDDFHFV4Q4CK151
)



===========================
Blik request params
===========================
2023-01-06 17:10:46
ip: 91.123.181.249
Array
(
    [title] => TR-1CEN-7Z9MJLX
    [code] => 683287
)



===========================
Blik response
===========================
2023-01-06 17:10:46
ip: 91.123.181.249
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-01-06 17:10:56
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7Z9MJLX
    [tr_date] => 2023-01-06 17:10:54
    [tr_crc] => 63ee2b9d41dd669f5ccdc5ca1b39c643
    [tr_amount] => 142.30
    [tr_paid] => 142.30
    [tr_desc] => Zamówienie IDKDGCLAF. Klient Ewelina Przanowska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => ewelina.przanowska@gmail.com
    [test_mode] => 0
    [md5sum] => a7dda7cee82a938a34a671ad999a5264
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-01-06 17:11:57
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7Z9MJLX
    [tr_date] => 2023-01-06 17:10:54
    [tr_crc] => 63ee2b9d41dd669f5ccdc5ca1b39c643
    [tr_amount] => 142.30
    [tr_paid] => 142.30
    [tr_desc] => Zamówienie IDKDGCLAF. Klient Ewelina Przanowska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => ewelina.przanowska@gmail.com
    [test_mode] => 0
    [md5sum] => a7dda7cee82a938a34a671ad999a5264
)



Check MD5: 1
OrderId 42198
===========================
Tpay order parameters
===========================
2023-01-06 18:13:42
ip: 87.205.229.205
Array
(
    [amount] => 247.30
    [crc] => cfb746694d7dd53c3be54a06ac5e5e89
    [description] => Zamówienie SRTXZUZPJ. Klient Magdalena Malik
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124505&id_module=140&id_order=42198&key=08d2b8e44e98684fcb8818351d6dda36&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42198
    [email] => magda67891@gmail.com
    [name] => Magdalena Malik
    [phone] => 786991915
    [address] => Dąbrowskiego 51/92
    [city] => Tychy
    [zip] => 43-100
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-01-06 18:13:42
ip: 87.205.229.205
Array
(
    [amount] => 247.30
    [crc] => cfb746694d7dd53c3be54a06ac5e5e89
    [description] => Zamówienie SRTXZUZPJ. Klient Magdalena Malik
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124505&id_module=140&id_order=42198&key=08d2b8e44e98684fcb8818351d6dda36&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42198
    [email] => magda67891@gmail.com
    [name] => Magdalena Malik
    [phone] => 786991915
    [address] => Dąbrowskiego 51/92
    [city] => Tychy
    [zip] => 43-100
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => c27c45d8ffbc4e2d120a73569ba2382d
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-01-06 18:13:42
ip: 87.205.229.205
Array
(
    [result] => 1
    [title] => TR-1CEN-7ZA50CX
    [amount] => 247.3
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-7ZA50CX&uid=01GP415XVFRT10N7XVNNNA10X7
)



===========================
Blik request params
===========================
2023-01-06 18:13:42
ip: 87.205.229.205
Array
(
    [title] => TR-1CEN-7ZA50CX
    [code] => 830994
)



===========================
Blik response
===========================
2023-01-06 18:13:43
ip: 87.205.229.205
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-01-06 18:13:54
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7ZA50CX
    [tr_date] => 2023-01-06 18:13:51
    [tr_crc] => cfb746694d7dd53c3be54a06ac5e5e89
    [tr_amount] => 247.30
    [tr_paid] => 247.30
    [tr_desc] => Zamówienie SRTXZUZPJ. Klient Magdalena Malik
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => magda67891@gmail.com
    [test_mode] => 0
    [md5sum] => dcdde44f7ccefecf4d92c403020b2d10
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-01-06 18:14:55
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7ZA50CX
    [tr_date] => 2023-01-06 18:13:51
    [tr_crc] => cfb746694d7dd53c3be54a06ac5e5e89
    [tr_amount] => 247.30
    [tr_paid] => 247.30
    [tr_desc] => Zamówienie SRTXZUZPJ. Klient Magdalena Malik
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => magda67891@gmail.com
    [test_mode] => 0
    [md5sum] => dcdde44f7ccefecf4d92c403020b2d10
)



Check MD5: 1
OrderId 42199
===========================
Tpay order parameters
===========================
2023-01-06 21:57:15
ip: 5.173.204.7
Array
(
    [amount] => 778.16
    [crc] => d95fa4b931e59e21e34af381a8d87d91
    [description] => Zamówienie LYSNPMTPQ. Klient Joanna Kowalska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124737&id_module=140&id_order=42199&key=ae6176c39fe6561c7a650589cb9239ba&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42199
    [email] => joanna.kowalska.warszawa.wawa@gmail.com
    [name] => Joanna Kowalska
    [phone] => 721886740
    [address] => Cybernetyki 7c/19
    [city] => Warszawa
    [zip] => 02-677
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 108
)



===========================
Basic payment notification
===========================
2023-01-06 21:57:58
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7ZBKM3X
    [tr_date] => 2023-01-06 21:57:56
    [tr_crc] => d95fa4b931e59e21e34af381a8d87d91
    [tr_amount] => 778.16
    [tr_paid] => 778.16
    [tr_desc] => Zamówienie LYSNPMTPQ. Klient Joanna Kowalska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => joanna.kowalska.warszawa.wawa@gmail.com
    [test_mode] => 0
    [md5sum] => b7f24234313e930053275f840c921834
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-01-06 21:59:00
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7ZBKM3X
    [tr_date] => 2023-01-06 21:57:56
    [tr_crc] => d95fa4b931e59e21e34af381a8d87d91
    [tr_amount] => 778.16
    [tr_paid] => 778.16
    [tr_desc] => Zamówienie LYSNPMTPQ. Klient Joanna Kowalska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => joanna.kowalska.warszawa.wawa@gmail.com
    [test_mode] => 0
    [md5sum] => b7f24234313e930053275f840c921834
)



Check MD5: 1
OrderId 42200
===========================
Tpay order parameters
===========================
2023-01-06 22:07:42
ip: 31.0.91.185
Array
(
    [amount] => 141.46
    [crc] => 875603a9dca7dab58943c3f383559c76
    [description] => Zamówienie JDWPSRMGD. Klient Marta Kuczek
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124738&id_module=140&id_order=42200&key=5e3c7f5cef5c7d25ffb046351252ed0c&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42200
    [email] => marta1k@interia.pl
    [name] => Marta Kuczek
    [phone] => 661063621
    [address] => Marii Skłodowskiej Curie 67a 
    [city] => Toruń
    [zip] => 87-100
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-01-06 22:07:42
ip: 31.0.91.185
Array
(
    [amount] => 141.46
    [crc] => 875603a9dca7dab58943c3f383559c76
    [description] => Zamówienie JDWPSRMGD. Klient Marta Kuczek
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124738&id_module=140&id_order=42200&key=5e3c7f5cef5c7d25ffb046351252ed0c&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42200
    [email] => marta1k@interia.pl
    [name] => Marta Kuczek
    [phone] => 661063621
    [address] => Marii Skłodowskiej Curie 67a 
    [city] => Toruń
    [zip] => 87-100
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 4cea8f9a47ff3d59df9098e5af9ec3f0
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-01-06 22:07:43
ip: 31.0.91.185
Array
(
    [result] => 1
    [title] => TR-1CEN-7ZBMEYX
    [amount] => 141.46
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-7ZBMEYX&uid=01GP4EJDM7RDSMDG3CS3VGDES2
)



===========================
Blik request params
===========================
2023-01-06 22:07:43
ip: 31.0.91.185
Array
(
    [title] => TR-1CEN-7ZBMEYX
    [code] => 549740
)



===========================
Blik response
===========================
2023-01-06 22:07:44
ip: 31.0.91.185
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-01-06 22:07:56
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7ZBMEYX
    [tr_date] => 2023-01-06 22:07:53
    [tr_crc] => 875603a9dca7dab58943c3f383559c76
    [tr_amount] => 141.46
    [tr_paid] => 141.46
    [tr_desc] => Zamówienie JDWPSRMGD. Klient Marta Kuczek
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => marta1k@interia.pl
    [test_mode] => 0
    [md5sum] => 6fa404ccfeb54203f2e17027df55f110
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-01-06 22:08:58
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7ZBMEYX
    [tr_date] => 2023-01-06 22:07:53
    [tr_crc] => 875603a9dca7dab58943c3f383559c76
    [tr_amount] => 141.46
    [tr_paid] => 141.46
    [tr_desc] => Zamówienie JDWPSRMGD. Klient Marta Kuczek
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => marta1k@interia.pl
    [test_mode] => 0
    [md5sum] => 6fa404ccfeb54203f2e17027df55f110
)



Check MD5: 1
OrderId 42201
===========================
Tpay order parameters
===========================
2023-01-06 22:11:02
ip: 83.23.8.254
Array
(
    [amount] => 247.30
    [crc] => 833e0364fd3f14d69bcf82ddaa78c3c1
    [description] => Zamówienie FMQLLLSPN. Klient Joanna Domańska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124739&id_module=140&id_order=42201&key=2904c5dcd071fb33b8ee12996f1a9338&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42201
    [email] => jo.domanska@gmail.com
    [name] => Joanna Domańska
    [phone] => 532013926
    [address] => Słowackiego 5a/1
    [city] => Bydgoszcz
    [zip] => 85-008
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 114
)



===========================
Basic payment notification
===========================
2023-01-06 22:12:28
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7ZBN1MX
    [tr_date] => 2023-01-06 22:12:25
    [tr_crc] => 833e0364fd3f14d69bcf82ddaa78c3c1
    [tr_amount] => 247.30
    [tr_paid] => 247.30
    [tr_desc] => Zamówienie FMQLLLSPN. Klient Joanna Domańska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => jo.domanska@gmail.com
    [test_mode] => 0
    [md5sum] => abc9e83fee67506b1381d18da2aadab3
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-01-06 22:13:29
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7ZBN1MX
    [tr_date] => 2023-01-06 22:12:25
    [tr_crc] => 833e0364fd3f14d69bcf82ddaa78c3c1
    [tr_amount] => 247.30
    [tr_paid] => 247.30
    [tr_desc] => Zamówienie FMQLLLSPN. Klient Joanna Domańska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => jo.domanska@gmail.com
    [test_mode] => 0
    [md5sum] => abc9e83fee67506b1381d18da2aadab3
)



Check MD5: 1