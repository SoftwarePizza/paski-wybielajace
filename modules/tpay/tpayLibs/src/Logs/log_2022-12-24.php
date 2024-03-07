<?php exit; ?> 

OrderId 42012
===========================
Tpay order parameters
===========================
2022-12-24 09:08:06
ip: 2a01:114f:440a:c100:d007:7d28:c43b:a159
Array
(
    [amount] => 57.00
    [crc] => 6e5bb41ceb14267ab6be1c6bb407893d
    [description] => Zamówienie FFXPPFKKG. Klient Klaudyna Matys
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=123759&id_module=140&id_order=42012&key=8a55efe8bc3fc629043aa62ca94c9508&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42012
    [email] => klaudynabogurska.matys@gmail.com
    [name] => Klaudyna Matys
    [phone] => 503030641
    [address] => Kaczmarka 21
    [city] => Komorniki
    [zip] => 62-052
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 160
)



OrderId 42013
===========================
Tpay order parameters
===========================
2022-12-24 16:26:12
ip: 80.49.161.103
Array
(
    [amount] => 142.30
    [crc] => a41ac451fad8be42fed2ed06296f73d5
    [description] => Zamówienie KAIUBXKTW. Klient Jarosław Miśkiewicz
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124135&id_module=140&id_order=42013&key=2801b42e1e9336f06f7fa00f1ede33f2&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42013
    [email] => jmiskiewicz@poczta.onet.pl
    [name] => Jarosław Miśkiewicz
    [phone] => 889189239
    [address] => Przelotowa 12
    [city] => Dąbrowa Górnicza
    [zip] => 42-523
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2022-12-24 16:26:12
ip: 80.49.161.103
Array
(
    [amount] => 142.30
    [crc] => a41ac451fad8be42fed2ed06296f73d5
    [description] => Zamówienie KAIUBXKTW. Klient Jarosław Miśkiewicz
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=124135&id_module=140&id_order=42013&key=2801b42e1e9336f06f7fa00f1ede33f2&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=42013
    [email] => jmiskiewicz@poczta.onet.pl
    [name] => Jarosław Miśkiewicz
    [phone] => 889189239
    [address] => Przelotowa 12
    [city] => Dąbrowa Górnicza
    [zip] => 42-523
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 440798bf4be894f2b86917df4d749f24
    [id] => 55382
)



===========================
Transaction create response
===========================
2022-12-24 16:26:13
ip: 80.49.161.103
Array
(
    [result] => 1
    [title] => TR-1CEN-7VEDPVX
    [amount] => 142.3
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-7VEDPVX&uid=01GN2BVRAFY575VY9BGKVKS8VQ
)



===========================
Blik request params
===========================
2022-12-24 16:26:13
ip: 80.49.161.103
Array
(
    [title] => TR-1CEN-7VEDPVX
    [code] => 346473
)



===========================
Blik response
===========================
2022-12-24 16:26:13
ip: 80.49.161.103
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2022-12-24 16:26:24
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7VEDPVX
    [tr_date] => 2022-12-24 16:26:22
    [tr_crc] => a41ac451fad8be42fed2ed06296f73d5
    [tr_amount] => 142.30
    [tr_paid] => 142.30
    [tr_desc] => Zamówienie KAIUBXKTW. Klient Jarosław Miśkiewicz
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => jmiskiewicz@poczta.onet.pl
    [test_mode] => 0
    [md5sum] => 2cce657b7972cfb5df863847de1079c1
)



Check MD5: 1
===========================
Basic payment notification
===========================
2022-12-24 16:27:25
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-7VEDPVX
    [tr_date] => 2022-12-24 16:26:22
    [tr_crc] => a41ac451fad8be42fed2ed06296f73d5
    [tr_amount] => 142.30
    [tr_paid] => 142.30
    [tr_desc] => Zamówienie KAIUBXKTW. Klient Jarosław Miśkiewicz
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => jmiskiewicz@poczta.onet.pl
    [test_mode] => 0
    [md5sum] => 2cce657b7972cfb5df863847de1079c1
)



Check MD5: 1