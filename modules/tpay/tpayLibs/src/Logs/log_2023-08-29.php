<?php exit; ?> 

OrderId 47514
===========================
Tpay order parameters
===========================
2023-08-29 00:16:36
ip: 31.61.162.20
Array
(
    [amount] => 200.73
    [crc] => b9cdb46f94415d855d204ec6c0e5cf8a
    [description] => Zamówienie TWXILYWTQ. Klient Jakub Kawiecki
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=137633&id_module=140&id_order=47514&key=fd97a1be86ea552d8b58752c86a50ead&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47514
    [email] => kawa7613617@gmail.com
    [name] => Jakub Kawiecki
    [phone] => 510848967
    [address] => Rudno Jeziorowe 28
    [city] => Krzynowłoga Mała
    [zip] => 06-316
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 00:16:36
ip: 31.61.162.20
Array
(
    [amount] => 200.73
    [crc] => b9cdb46f94415d855d204ec6c0e5cf8a
    [description] => Zamówienie TWXILYWTQ. Klient Jakub Kawiecki
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=137633&id_module=140&id_order=47514&key=fd97a1be86ea552d8b58752c86a50ead&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47514
    [email] => kawa7613617@gmail.com
    [name] => Jakub Kawiecki
    [phone] => 510848967
    [address] => Rudno Jeziorowe 28
    [city] => Krzynowłoga Mała
    [zip] => 06-316
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 204af97174fcb88b638823e1f88b656a
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 00:16:37
ip: 31.61.162.20
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZL33PX
    [amount] => 200.73
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZL33PX&uid=01H8Z3GRSYXRFRFVEJSQGQQ78F
)



===========================
Blik request params
===========================
2023-08-29 00:16:37
ip: 31.61.162.20
Array
(
    [title] => TR-1CEN-9ZL33PX
    [code] => 761330
)



===========================
TException
===========================
2023-08-29 00:17:07
ip: 31.61.162.20
Unexpected response from tpay server 0 in file /home/aylonxx/paski-wybielajace/modules/tpay/tpayLibs/src/_class_tpay/Curl/Curl.php line: 198

#0 /home/aylonxx/paski-wybielajace/modules/tpay/tpayLibs/src/_class_tpay/Curl/Curl.php(182): tpayLibs\src\_class_tpay\Curl\Curl->getResponseCode(0)
#1 /home/aylonxx/paski-wybielajace/modules/tpay/tpayLibs/src/_class_tpay/Curl/Curl.php(149): tpayLibs\src\_class_tpay\Curl\Curl->checkResponse()
#2 /home/aylonxx/paski-wybielajace/modules/tpay/tpayLibs/src/_class_tpay/Utilities/ObjectsHelper.php(88): tpayLibs\src\_class_tpay\Curl\Curl->doRequest()
#3 /home/aylonxx/paski-wybielajace/modules/tpay/tpayLibs/src/_class_tpay/TransactionApi.php(90): tpayLibs\src\_class_tpay\Utilities\ObjectsHelper->requests('https://secure....', Array)
#4 /home/aylonxx/paski-wybielajace/modules/tpay/tpayLibs/src/_class_tpay/PaymentBlik.php(91): tpayLibs\src\_class_tpay\TransactionApi->requests('https://secure....', Array)
#5 /home/aylonxx/paski-wybielajace/modules/tpay/tpayLibs/src/_class_tpay/PaymentBlik.php(61): tpayLibs\src\_class_tpay\PaymentBlik->blik('TR-1CEN-9ZL33PX', '761330')
#6 /home/aylonxx/paski-wybielajace/modules/tpay/tpayLibs/src/_class_tpay/PaymentBlik.php(26): tpayLibs\src\_class_tpay\PaymentBlik->handleBlik(Object(tpayLibs\src\_class_tpay\Validators\PaymentTypes\PaymentTypeT6Standard), Array)
#7 /home/aylonxx/paski-wybielajace/modules/tpay/controllers/front/payment.php(270): tpayLibs\src\_class_tpay\PaymentBlik->handleBlikPayment(Array)
#8 /home/aylonxx/paski-wybielajace/modules/tpay/controllers/front/payment.php(106): TpayPaymentModuleFrontController->processBlikPayment()
#9 /home/aylonxx/paski-wybielajace/modules/tpay/controllers/front/payment.php(71): TpayPaymentModuleFrontController->processPayment(Object(Cart), Object(Customer), 200.73, 0)
#10 /home/aylonxx/paski-wybielajace/classes/controller/Controller.php(306): TpayPaymentModuleFrontController->initContent()
#11 /home/aylonxx/paski-wybielajace/classes/Dispatcher.php(518): ControllerCore->run()
#12 /home/aylonxx/paski-wybielajace/index.php(29): DispatcherCore->dispatch()
#13 {main}


OrderId 47515
===========================
Tpay order parameters
===========================
2023-08-29 00:18:33
ip: 31.61.162.20
Array
(
    [amount] => 207.71
    [crc] => 1e3ac0f16253e42f493acf48c9e47b0e
    [description] => Zamówienie CSHZNGMYS. Klient Jakub Kawiecki
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=137997&id_module=140&id_order=47515&key=fd97a1be86ea552d8b58752c86a50ead&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47515
    [email] => kawa7613617@gmail.com
    [name] => Jakub Kawiecki
    [phone] => 510848967
    [address] => Rudno Jeziorowe 28
    [city] => Krzynowłoga Mała
    [zip] => 06-316
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 00:18:33
ip: 31.61.162.20
Array
(
    [amount] => 207.71
    [crc] => 1e3ac0f16253e42f493acf48c9e47b0e
    [description] => Zamówienie CSHZNGMYS. Klient Jakub Kawiecki
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=137997&id_module=140&id_order=47515&key=fd97a1be86ea552d8b58752c86a50ead&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47515
    [email] => kawa7613617@gmail.com
    [name] => Jakub Kawiecki
    [phone] => 510848967
    [address] => Rudno Jeziorowe 28
    [city] => Krzynowłoga Mała
    [zip] => 06-316
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => d8b5da031de1a6236a16756fe02f91f4
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 00:18:34
ip: 31.61.162.20
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZL388X
    [amount] => 207.71
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZL388X&uid=01H8Z3MANKSFYRCJF3CMZK4WX2
)



===========================
Blik request params
===========================
2023-08-29 00:18:34
ip: 31.61.162.20
Array
(
    [title] => TR-1CEN-9ZL388X
    [code] => 315564
)



===========================
Blik response
===========================
2023-08-29 00:18:34
ip: 31.61.162.20
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 00:18:45
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZL388X
    [tr_date] => 2023-08-29 00:18:44
    [tr_crc] => 1e3ac0f16253e42f493acf48c9e47b0e
    [tr_amount] => 207.71
    [tr_paid] => 207.71
    [tr_desc] => Zamówienie CSHZNGMYS. Klient Jakub Kawiecki
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => kawa7613617@gmail.com
    [test_mode] => 0
    [md5sum] => 03de2eee68975e69d78a5cbe68e9475f
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 00:19:46
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZL388X
    [tr_date] => 2023-08-29 00:18:44
    [tr_crc] => 1e3ac0f16253e42f493acf48c9e47b0e
    [tr_amount] => 207.71
    [tr_paid] => 207.71
    [tr_desc] => Zamówienie CSHZNGMYS. Klient Jakub Kawiecki
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => kawa7613617@gmail.com
    [test_mode] => 0
    [md5sum] => 03de2eee68975e69d78a5cbe68e9475f
)



Check MD5: 1
OrderId 47516
===========================
Tpay order parameters
===========================
2023-08-29 01:01:51
ip: 2a02:a317:2246:8280:888f:bed5:35f3:a3b6
Array
(
    [amount] => 135.28
    [crc] => 83466c3490e544f0070ed6491db6113a
    [description] => Zamówienie LSJZYTJUB. Klient Justyna Sielawa
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=137999&id_module=140&id_order=47516&key=e998ffa57e71bcf51caf2e553a0ca93b&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47516
    [email] => justyna.sielawa@gmail.com
    [name] => Justyna Sielawa
    [phone] => 510316789
    [address] => Krochmalna 3/1113
    [city] => Warszawa
    [zip] => 00-864
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 01:01:51
ip: 2a02:a317:2246:8280:888f:bed5:35f3:a3b6
Array
(
    [amount] => 135.28
    [crc] => 83466c3490e544f0070ed6491db6113a
    [description] => Zamówienie LSJZYTJUB. Klient Justyna Sielawa
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=137999&id_module=140&id_order=47516&key=e998ffa57e71bcf51caf2e553a0ca93b&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47516
    [email] => justyna.sielawa@gmail.com
    [name] => Justyna Sielawa
    [phone] => 510316789
    [address] => Krochmalna 3/1113
    [city] => Warszawa
    [zip] => 00-864
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 2de82d353ca80169af49ac98533c0c1e
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 01:01:52
ip: 2a02:a317:2246:8280:888f:bed5:35f3:a3b6
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZL571X
    [amount] => 135.28
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZL571X&uid=01H8Z63M3GFAPVJ729967HJ90X
)



===========================
Blik request params
===========================
2023-08-29 01:01:52
ip: 2a02:a317:2246:8280:888f:bed5:35f3:a3b6
Array
(
    [title] => TR-1CEN-9ZL571X
    [code] => 672430
)



===========================
Blik response
===========================
2023-08-29 01:01:53
ip: 2a02:a317:2246:8280:888f:bed5:35f3:a3b6
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 01:02:23
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZL571X
    [tr_date] => 2023-08-29 01:02:21
    [tr_crc] => 83466c3490e544f0070ed6491db6113a
    [tr_amount] => 135.28
    [tr_paid] => 135.28
    [tr_desc] => Zamówienie LSJZYTJUB. Klient Justyna Sielawa
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => justyna.sielawa@gmail.com
    [test_mode] => 0
    [md5sum] => 70beae6416dadba7dd11eee81c3b3126
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 01:03:25
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZL571X
    [tr_date] => 2023-08-29 01:02:21
    [tr_crc] => 83466c3490e544f0070ed6491db6113a
    [tr_amount] => 135.28
    [tr_paid] => 135.28
    [tr_desc] => Zamówienie LSJZYTJUB. Klient Justyna Sielawa
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => justyna.sielawa@gmail.com
    [test_mode] => 0
    [md5sum] => 70beae6416dadba7dd11eee81c3b3126
)



Check MD5: 1
OrderId 47517
===========================
Tpay order parameters
===========================
2023-08-29 08:35:07
ip: 85.232.238.55
Array
(
    [amount] => 306.97
    [crc] => f8d8b92f44f1ee866f4621e202230602
    [description] => Zamówienie OXLNBHOVR. Klient Monika Nowińska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138007&id_module=140&id_order=47517&key=a2cbb2f5541be3d7ca11aea6acf84ffa&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47517
    [email] => monika.nowinska91@wp.pl
    [name] => Monika Nowińska
    [phone] => +48536914472
    [address] => Chemików 1b Piętro 2
    [city] => Oświęcim
    [zip] => 32-600
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 08:35:07
ip: 85.232.238.55
Array
(
    [amount] => 306.97
    [crc] => f8d8b92f44f1ee866f4621e202230602
    [description] => Zamówienie OXLNBHOVR. Klient Monika Nowińska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138007&id_module=140&id_order=47517&key=a2cbb2f5541be3d7ca11aea6acf84ffa&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47517
    [email] => monika.nowinska91@wp.pl
    [name] => Monika Nowińska
    [phone] => +48536914472
    [address] => Chemików 1b Piętro 2
    [city] => Oświęcim
    [zip] => 32-600
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 5e646b7071b2cd21ce181b8781450e5a
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 08:35:08
ip: 85.232.238.55
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZMAVKX
    [amount] => 306.97
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZMAVKX&uid=01H9001JQS05C3038DP6KGW17E
)



===========================
Blik request params
===========================
2023-08-29 08:35:08
ip: 85.232.238.55
Array
(
    [title] => TR-1CEN-9ZMAVKX
    [code] => 940102
)



===========================
Blik response
===========================
2023-08-29 08:35:09
ip: 85.232.238.55
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 08:35:19
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZMAVKX
    [tr_date] => 2023-08-29 08:35:18
    [tr_crc] => f8d8b92f44f1ee866f4621e202230602
    [tr_amount] => 306.97
    [tr_paid] => 306.97
    [tr_desc] => Zamówienie OXLNBHOVR. Klient Monika Nowińska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => monika.nowinska91@wp.pl
    [test_mode] => 0
    [md5sum] => b446e57ab3a3ec112cf0e6622a70f6f2
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 08:36:21
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZMAVKX
    [tr_date] => 2023-08-29 08:35:18
    [tr_crc] => f8d8b92f44f1ee866f4621e202230602
    [tr_amount] => 306.97
    [tr_paid] => 306.97
    [tr_desc] => Zamówienie OXLNBHOVR. Klient Monika Nowińska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => monika.nowinska91@wp.pl
    [test_mode] => 0
    [md5sum] => b446e57ab3a3ec112cf0e6622a70f6f2
)



Check MD5: 1
OrderId 47519
===========================
Tpay order parameters
===========================
2023-08-29 09:26:57
ip: 91.215.237.210
Array
(
    [amount] => 155.98
    [crc] => 05ba41d3adcde6dfed02e4c9fe95bc85
    [description] => Zamówienie DPFPEZIHD. Klient Dariusz Małysz
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138010&id_module=140&id_order=47519&key=6020e20bf24fc4ca26caba5a04294394&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47519
    [email] => darek061983@gmail.com
    [name] => Dariusz Małysz
    [phone] => 668859002
    [address] => Św . Floriana 16
    [city] => Bestwinka
    [zip] => 43-512
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 09:26:57
ip: 91.215.237.210
Array
(
    [amount] => 155.98
    [crc] => 05ba41d3adcde6dfed02e4c9fe95bc85
    [description] => Zamówienie DPFPEZIHD. Klient Dariusz Małysz
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138010&id_module=140&id_order=47519&key=6020e20bf24fc4ca26caba5a04294394&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47519
    [email] => darek061983@gmail.com
    [name] => Dariusz Małysz
    [phone] => 668859002
    [address] => Św . Floriana 16
    [city] => Bestwinka
    [zip] => 43-512
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 20d3b7ce32b199dd4813708b7410e419
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 09:26:58
ip: 91.215.237.210
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZMMV6X
    [amount] => 155.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZMMV6X&uid=01H9030FVBMPXY8HJKVXHWNHN2
)



===========================
Blik request params
===========================
2023-08-29 09:26:58
ip: 91.215.237.210
Array
(
    [title] => TR-1CEN-9ZMMV6X
    [code] => 147884
)



===========================
Blik response
===========================
2023-08-29 09:26:59
ip: 91.215.237.210
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 09:27:22
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZMMV6X
    [tr_date] => 2023-08-29 09:27:18
    [tr_crc] => 05ba41d3adcde6dfed02e4c9fe95bc85
    [tr_amount] => 155.98
    [tr_paid] => 155.98
    [tr_desc] => Zamówienie DPFPEZIHD. Klient Dariusz Małysz
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => darek061983@gmail.com
    [test_mode] => 0
    [md5sum] => 82b4bfedc2599e09a4bd75e79e6cf626
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 09:28:24
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZMMV6X
    [tr_date] => 2023-08-29 09:27:18
    [tr_crc] => 05ba41d3adcde6dfed02e4c9fe95bc85
    [tr_amount] => 155.98
    [tr_paid] => 155.98
    [tr_desc] => Zamówienie DPFPEZIHD. Klient Dariusz Małysz
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => darek061983@gmail.com
    [test_mode] => 0
    [md5sum] => 82b4bfedc2599e09a4bd75e79e6cf626
)



Check MD5: 1
OrderId 47520
===========================
Tpay order parameters
===========================
2023-08-29 10:16:46
ip: 37.248.220.0
Array
(
    [amount] => 170.98
    [crc] => 70d301ff42d3fbb8e06c0ef59062dbe8
    [description] => Zamówienie UESPQTGQA. Klient Zuzanna Nowik
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138015&id_module=140&id_order=47520&key=ff477695fe3109456cb014457021606d&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47520
    [email] => zuzanna.nowik@wp.pl
    [name] => Zuzanna Nowik
    [phone] => 785232334
    [address] => Leśna 53
    [city] => Przeźmierowo
    [zip] => 62-081
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 10:16:46
ip: 37.248.220.0
Array
(
    [amount] => 170.98
    [crc] => 70d301ff42d3fbb8e06c0ef59062dbe8
    [description] => Zamówienie UESPQTGQA. Klient Zuzanna Nowik
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138015&id_module=140&id_order=47520&key=ff477695fe3109456cb014457021606d&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47520
    [email] => zuzanna.nowik@wp.pl
    [name] => Zuzanna Nowik
    [phone] => 785232334
    [address] => Leśna 53
    [city] => Przeźmierowo
    [zip] => 62-081
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 9684ebf9e3064726ffe117f506aae8fd
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 10:16:47
ip: 37.248.220.0
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZN1CJX
    [amount] => 170.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZN1CJX&uid=01H905VP3J2AV9C58C1ACGNFNT
)



===========================
Blik request params
===========================
2023-08-29 10:16:47
ip: 37.248.220.0
Array
(
    [title] => TR-1CEN-9ZN1CJX
    [code] => 650330
)



===========================
Blik response
===========================
2023-08-29 10:16:47
ip: 37.248.220.0
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 10:17:07
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZN1CJX
    [tr_date] => 2023-08-29 10:17:05
    [tr_crc] => 70d301ff42d3fbb8e06c0ef59062dbe8
    [tr_amount] => 170.98
    [tr_paid] => 170.98
    [tr_desc] => Zamówienie UESPQTGQA. Klient Zuzanna Nowik
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => zuzanna.nowik@wp.pl
    [test_mode] => 0
    [md5sum] => 9c47a2d6169dc5125e80160c2cf01912
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 10:18:08
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZN1CJX
    [tr_date] => 2023-08-29 10:17:05
    [tr_crc] => 70d301ff42d3fbb8e06c0ef59062dbe8
    [tr_amount] => 170.98
    [tr_paid] => 170.98
    [tr_desc] => Zamówienie UESPQTGQA. Klient Zuzanna Nowik
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => zuzanna.nowik@wp.pl
    [test_mode] => 0
    [md5sum] => 9c47a2d6169dc5125e80160c2cf01912
)



Check MD5: 1
OrderId 47522
===========================
Tpay order parameters
===========================
2023-08-29 11:15:12
ip: 212.33.78.152
Array
(
    [amount] => 170.98
    [crc] => f61d735ce786405478be545bdfe04c66
    [description] => Zamówienie ZNMQKBEPG. Klient Malgorzata Trypuza
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138018&id_module=140&id_order=47522&key=2201ae37227c1b8dc5e6fd6c0d35be77&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47522
    [email] => mtrypuza@interia.pl
    [name] => Malgorzata Trypuza
    [phone] => 692526454
    [address] => Leszczynowa 44/33
    [city] => Bialystok
    [zip] => 15-811
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 11:15:12
ip: 212.33.78.152
Array
(
    [amount] => 170.98
    [crc] => f61d735ce786405478be545bdfe04c66
    [description] => Zamówienie ZNMQKBEPG. Klient Malgorzata Trypuza
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138018&id_module=140&id_order=47522&key=2201ae37227c1b8dc5e6fd6c0d35be77&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47522
    [email] => mtrypuza@interia.pl
    [name] => Malgorzata Trypuza
    [phone] => 692526454
    [address] => Leszczynowa 44/33
    [city] => Bialystok
    [zip] => 15-811
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => a3d808c061c0b23789a3884bdcf1215a
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 11:15:13
ip: 212.33.78.152
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZNG7BX
    [amount] => 170.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZNG7BX&uid=01H9096P6MTVDBEQJPJYDTW38X
)



===========================
Blik request params
===========================
2023-08-29 11:15:13
ip: 212.33.78.152
Array
(
    [title] => TR-1CEN-9ZNG7BX
    [code] => 685024
)



===========================
Blik response
===========================
2023-08-29 11:15:14
ip: 212.33.78.152
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 11:15:42
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZNG7BX
    [tr_date] => 2023-08-29 11:15:38
    [tr_crc] => f61d735ce786405478be545bdfe04c66
    [tr_amount] => 170.98
    [tr_paid] => 170.98
    [tr_desc] => Zamówienie ZNMQKBEPG. Klient Malgorzata Trypuza
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => mtrypuza@interia.pl
    [test_mode] => 0
    [md5sum] => 058b3d16c1669abe6e36d4f74f03b86f
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 11:16:42
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZNG7BX
    [tr_date] => 2023-08-29 11:15:38
    [tr_crc] => f61d735ce786405478be545bdfe04c66
    [tr_amount] => 170.98
    [tr_paid] => 170.98
    [tr_desc] => Zamówienie ZNMQKBEPG. Klient Malgorzata Trypuza
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => mtrypuza@interia.pl
    [test_mode] => 0
    [md5sum] => 058b3d16c1669abe6e36d4f74f03b86f
)



Check MD5: 1
OrderId 47523
===========================
Tpay order parameters
===========================
2023-08-29 11:19:33
ip: 37.248.215.130
Array
(
    [amount] => 183.73
    [crc] => 8011a972cf58a7a968609cfbce42d6f7
    [description] => Zamówienie KUPJXIVEA. Klient Mariola Redestowicz
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=127903&id_module=140&id_order=47523&key=46b4968345ecdd929928fad1d9c54415&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47523
    [email] => redestowiczmariola@yahoo.com
    [name] => Mariola Redestowicz
    [phone] => 695834364
    [address] => Jana Sebastiana Bacha 22 /811
    [city] => Warszawa
    [zip] => 02-743
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
)



===========================
Basic payment notification
===========================
2023-08-29 11:21:36
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZNHE4X
    [tr_date] => 2023-08-29 11:21:34
    [tr_crc] => 8011a972cf58a7a968609cfbce42d6f7
    [tr_amount] => 183.73
    [tr_paid] => 183.73
    [tr_desc] => Zamówienie KUPJXIVEA. Klient Mariola Redestowicz
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => redestowiczmariola@yahoo.com
    [test_mode] => 0
    [md5sum] => c8719bf3e6c7a06450c70310f0ecb894
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 11:22:37
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZNHE4X
    [tr_date] => 2023-08-29 11:21:34
    [tr_crc] => 8011a972cf58a7a968609cfbce42d6f7
    [tr_amount] => 183.73
    [tr_paid] => 183.73
    [tr_desc] => Zamówienie KUPJXIVEA. Klient Mariola Redestowicz
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => redestowiczmariola@yahoo.com
    [test_mode] => 0
    [md5sum] => c8719bf3e6c7a06450c70310f0ecb894
)



Check MD5: 1
OrderId 47524
===========================
Tpay order parameters
===========================
2023-08-29 12:23:04
ip: 2a00:f41:c1c:6e28:4cbb:cc63:670:de06
Array
(
    [amount] => 42.65
    [crc] => 6b8e0c8ff2030698fe127d7284d0325c
    [description] => Zamówienie AKTPWAORK. Klient Dominika Sobecka
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138024&id_module=140&id_order=47524&key=6af4df13c66fecd4825365d2cd0746dd&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47524
    [email] => dominika.sobeckaa@gmail.com
    [name] => Dominika Sobecka
    [phone] => 694217475
    [address] => Grupy Ak Krybar 1/1
    [city] => Warszawa
    [zip] => 00-712
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 12:23:04
ip: 2a00:f41:c1c:6e28:4cbb:cc63:670:de06
Array
(
    [amount] => 42.65
    [crc] => 6b8e0c8ff2030698fe127d7284d0325c
    [description] => Zamówienie AKTPWAORK. Klient Dominika Sobecka
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138024&id_module=140&id_order=47524&key=6af4df13c66fecd4825365d2cd0746dd&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47524
    [email] => dominika.sobeckaa@gmail.com
    [name] => Dominika Sobecka
    [phone] => 694217475
    [address] => Grupy Ak Krybar 1/1
    [city] => Warszawa
    [zip] => 00-712
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => fb8290212e501193968cf4e7e39cbb46
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 12:23:05
ip: 2a00:f41:c1c:6e28:4cbb:cc63:670:de06
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZP33TX
    [amount] => 42.65
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZP33TX&uid=01H90D2YW4A201KPG2S6YH5EAN
)



===========================
Blik request params
===========================
2023-08-29 12:23:05
ip: 2a00:f41:c1c:6e28:4cbb:cc63:670:de06
Array
(
    [title] => TR-1CEN-9ZP33TX
    [code] => 682148
)



===========================
Blik response
===========================
2023-08-29 12:23:06
ip: 2a00:f41:c1c:6e28:4cbb:cc63:670:de06
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 12:23:18
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZP33TX
    [tr_date] => 2023-08-29 12:23:15
    [tr_crc] => 6b8e0c8ff2030698fe127d7284d0325c
    [tr_amount] => 42.65
    [tr_paid] => 42.65
    [tr_desc] => Zamówienie AKTPWAORK. Klient Dominika Sobecka
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => dominika.sobeckaa@gmail.com
    [test_mode] => 0
    [md5sum] => ac993546bce9fd7118e5b59074c1fac4
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 12:24:18
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZP33TX
    [tr_date] => 2023-08-29 12:23:15
    [tr_crc] => 6b8e0c8ff2030698fe127d7284d0325c
    [tr_amount] => 42.65
    [tr_paid] => 42.65
    [tr_desc] => Zamówienie AKTPWAORK. Klient Dominika Sobecka
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => dominika.sobeckaa@gmail.com
    [test_mode] => 0
    [md5sum] => ac993546bce9fd7118e5b59074c1fac4
)



Check MD5: 1
OrderId 47525
===========================
Tpay order parameters
===========================
2023-08-29 13:26:32
ip: 2a02:a311:c03e:e080:3079:c334:3353:b71b
Array
(
    [amount] => 141.23
    [crc] => d0fd556b813b6a1c4d9da2dba82bab08
    [description] => Zamówienie ZSNWBKYOJ. Klient Milena Bedra
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138026&id_module=140&id_order=47525&key=50f1b72532fc62eddcae5c525a3df05d&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47525
    [email] => milenabedra1@gmail.com
    [name] => Milena Bedra
    [phone] => 516263592
    [address] => Tadeusza Rejtana 10/28
    [city] => Bydgoszcz
    [zip] => 85-032
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 13:26:32
ip: 2a02:a311:c03e:e080:3079:c334:3353:b71b
Array
(
    [amount] => 141.23
    [crc] => d0fd556b813b6a1c4d9da2dba82bab08
    [description] => Zamówienie ZSNWBKYOJ. Klient Milena Bedra
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138026&id_module=140&id_order=47525&key=50f1b72532fc62eddcae5c525a3df05d&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47525
    [email] => milenabedra1@gmail.com
    [name] => Milena Bedra
    [phone] => 516263592
    [address] => Tadeusza Rejtana 10/28
    [city] => Bydgoszcz
    [zip] => 85-032
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 90e8b98ec821d9d40c28cbc1313f297f
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 13:26:33
ip: 2a02:a311:c03e:e080:3079:c334:3353:b71b
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZPM1GX
    [amount] => 141.23
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZPM1GX&uid=01H90GQ5CASDVWFXWWFR9197ZR
)



===========================
Blik request params
===========================
2023-08-29 13:26:33
ip: 2a02:a311:c03e:e080:3079:c334:3353:b71b
Array
(
    [title] => TR-1CEN-9ZPM1GX
    [code] => 870545
)



===========================
Blik response
===========================
2023-08-29 13:26:33
ip: 2a02:a311:c03e:e080:3079:c334:3353:b71b
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 13:26:59
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZPM1GX
    [tr_date] => 2023-08-29 13:26:57
    [tr_crc] => d0fd556b813b6a1c4d9da2dba82bab08
    [tr_amount] => 141.23
    [tr_paid] => 141.23
    [tr_desc] => Zamówienie ZSNWBKYOJ. Klient Milena Bedra
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => milenabedra1@gmail.com
    [test_mode] => 0
    [md5sum] => cc6ccdd2a501552f41aa88621fd9c4a0
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 13:28:01
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZPM1GX
    [tr_date] => 2023-08-29 13:26:57
    [tr_crc] => d0fd556b813b6a1c4d9da2dba82bab08
    [tr_amount] => 141.23
    [tr_paid] => 141.23
    [tr_desc] => Zamówienie ZSNWBKYOJ. Klient Milena Bedra
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => milenabedra1@gmail.com
    [test_mode] => 0
    [md5sum] => cc6ccdd2a501552f41aa88621fd9c4a0
)



Check MD5: 1
OrderId 47529
===========================
Tpay order parameters
===========================
2023-08-29 15:49:09
ip: 188.146.114.156
Array
(
    [amount] => 162.48
    [crc] => cdf35642daf4bd941fbba6c7d650f428
    [description] => Zamówienie MGHPJQVCN. Klient Marika Głowacka
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138031&id_module=140&id_order=47529&key=a4ebba2f0d2eccef0398fa0e88eb2ba4&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47529
    [email] => marikaglowacka00@gmail.com
    [name] => Marika Głowacka
    [phone] => 606202863
    [address] => Nowa 50
    [city] => Jarosty
    [zip] => 97-310
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 15:49:09
ip: 188.146.114.156
Array
(
    [amount] => 162.48
    [crc] => cdf35642daf4bd941fbba6c7d650f428
    [description] => Zamówienie MGHPJQVCN. Klient Marika Głowacka
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138031&id_module=140&id_order=47529&key=a4ebba2f0d2eccef0398fa0e88eb2ba4&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47529
    [email] => marikaglowacka00@gmail.com
    [name] => Marika Głowacka
    [phone] => 606202863
    [address] => Nowa 50
    [city] => Jarosty
    [zip] => 97-310
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 5f77df1e394026e8524b927ce63fd5c4
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 15:49:09
ip: 188.146.114.156
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZS0VZX
    [amount] => 162.48
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZS0VZX&uid=01H90RW9JZY3F0PJDBE1N9NVEX
)



===========================
Blik request params
===========================
2023-08-29 15:49:09
ip: 188.146.114.156
Array
(
    [title] => TR-1CEN-9ZS0VZX
    [code] => 361392
)



===========================
Blik response
===========================
2023-08-29 15:49:10
ip: 188.146.114.156
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 15:49:30
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZS0VZX
    [tr_date] => 2023-08-29 15:49:27
    [tr_crc] => cdf35642daf4bd941fbba6c7d650f428
    [tr_amount] => 162.48
    [tr_paid] => 162.48
    [tr_desc] => Zamówienie MGHPJQVCN. Klient Marika Głowacka
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => marikaglowacka00@gmail.com
    [test_mode] => 0
    [md5sum] => d8e182484a58b65fdf5950de4033c7e7
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 15:50:32
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZS0VZX
    [tr_date] => 2023-08-29 15:49:27
    [tr_crc] => cdf35642daf4bd941fbba6c7d650f428
    [tr_amount] => 162.48
    [tr_paid] => 162.48
    [tr_desc] => Zamówienie MGHPJQVCN. Klient Marika Głowacka
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => marikaglowacka00@gmail.com
    [test_mode] => 0
    [md5sum] => d8e182484a58b65fdf5950de4033c7e7
)



Check MD5: 1
OrderId 47530
===========================
Tpay order parameters
===========================
2023-08-29 16:23:49
ip: 188.146.114.97
Array
(
    [amount] => 200.73
    [crc] => 7472e86dc4535ae1222f68e55d2b701d
    [description] => Zamówienie RIKDIFHYO. Klient Aleksandra Borowska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138032&id_module=140&id_order=47530&key=4c3b57383e99a7284e6f818074160f8c&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47530
    [email] => doaboro@gmail.com
    [name] => Aleksandra Borowska
    [phone] => +48509797444
    [address] => Ekologiczna 8/12
    [city] => Warszawa
    [zip] => 02-798
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
)



===========================
Basic payment notification
===========================
2023-08-29 16:24:16
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZSCG2X
    [tr_date] => 2023-08-29 16:24:14
    [tr_crc] => 7472e86dc4535ae1222f68e55d2b701d
    [tr_amount] => 200.73
    [tr_paid] => 200.73
    [tr_desc] => Zamówienie RIKDIFHYO. Klient Aleksandra Borowska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => doaboro@gmail.com
    [test_mode] => 0
    [md5sum] => 5779e0e40f5f9f62f88bf05601a46c13
)



Check MD5: 1
OrderId 47531
===========================
Tpay order parameters
===========================
2023-08-29 16:24:51
ip: 2a02:a312:c742:7f00:39b1:d1e8:2bb5:8b43
Array
(
    [amount] => 388.94
    [crc] => 1c049654eef36386cd2b655044212074
    [description] => Zamówienie SHHOFRWMJ. Klient Marta Karbowska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138034&id_module=140&id_order=47531&key=78e8feb4caab8ae7f4ad7067446acf26&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47531
    [email] => karbowana.marta@gmail.com
    [name] => Marta Karbowska
    [phone] => 5151719810
    [address] => Batorego 35a/2
    [city] => Gdańsk
    [zip] => 80-251
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 16:24:51
ip: 2a02:a312:c742:7f00:39b1:d1e8:2bb5:8b43
Array
(
    [amount] => 388.94
    [crc] => 1c049654eef36386cd2b655044212074
    [description] => Zamówienie SHHOFRWMJ. Klient Marta Karbowska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138034&id_module=140&id_order=47531&key=78e8feb4caab8ae7f4ad7067446acf26&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47531
    [email] => karbowana.marta@gmail.com
    [name] => Marta Karbowska
    [phone] => 5151719810
    [address] => Batorego 35a/2
    [city] => Gdańsk
    [zip] => 80-251
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 164769213b4fedd7b93fb72d097bc04a
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 16:24:52
ip: 2a02:a312:c742:7f00:39b1:d1e8:2bb5:8b43
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZSCSEX
    [amount] => 388.94
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZSCSEX&uid=01H90TXP1MXJRX0GRF1TG6HJEE
)



===========================
Blik request params
===========================
2023-08-29 16:24:52
ip: 2a02:a312:c742:7f00:39b1:d1e8:2bb5:8b43
Array
(
    [title] => TR-1CEN-9ZSCSEX
    [code] => 810146
)



===========================
Blik response
===========================
2023-08-29 16:24:53
ip: 2a02:a312:c742:7f00:39b1:d1e8:2bb5:8b43
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 16:25:10
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZSCSEX
    [tr_date] => 2023-08-29 16:25:07
    [tr_crc] => 1c049654eef36386cd2b655044212074
    [tr_amount] => 388.94
    [tr_paid] => 388.94
    [tr_desc] => Zamówienie SHHOFRWMJ. Klient Marta Karbowska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => karbowana.marta@gmail.com
    [test_mode] => 0
    [md5sum] => 8b92ee1580afbf59b842552675f5765b
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 16:25:17
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZSCG2X
    [tr_date] => 2023-08-29 16:24:14
    [tr_crc] => 7472e86dc4535ae1222f68e55d2b701d
    [tr_amount] => 200.73
    [tr_paid] => 200.73
    [tr_desc] => Zamówienie RIKDIFHYO. Klient Aleksandra Borowska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => doaboro@gmail.com
    [test_mode] => 0
    [md5sum] => 5779e0e40f5f9f62f88bf05601a46c13
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 16:26:12
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZSCSEX
    [tr_date] => 2023-08-29 16:25:07
    [tr_crc] => 1c049654eef36386cd2b655044212074
    [tr_amount] => 388.94
    [tr_paid] => 388.94
    [tr_desc] => Zamówienie SHHOFRWMJ. Klient Marta Karbowska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => karbowana.marta@gmail.com
    [test_mode] => 0
    [md5sum] => 8b92ee1580afbf59b842552675f5765b
)



Check MD5: 1
OrderId 47532
===========================
Tpay order parameters
===========================
2023-08-29 16:49:54
ip: 91.150.188.240
Array
(
    [amount] => 265.98
    [crc] => bf3a1192536e74f625bc778cf8c7d8e9
    [description] => Zamówienie HVSQFQXCD. Klient Grzegorz Grzesik
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=137387&id_module=140&id_order=47532&key=2f5d1aca2ffc41f469cfd5910237d603&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47532
    [email] => grzegorzgrzesik1999@gmail.com
    [name] => Grzegorz Grzesik
    [phone] => +48883090499
    [address] => Kalinowa 60
    [city] => Rzeszów
    [zip] => 35-213
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 16:49:54
ip: 91.150.188.240
Array
(
    [amount] => 265.98
    [crc] => bf3a1192536e74f625bc778cf8c7d8e9
    [description] => Zamówienie HVSQFQXCD. Klient Grzegorz Grzesik
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=137387&id_module=140&id_order=47532&key=2f5d1aca2ffc41f469cfd5910237d603&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47532
    [email] => grzegorzgrzesik1999@gmail.com
    [name] => Grzegorz Grzesik
    [phone] => +48883090499
    [address] => Kalinowa 60
    [city] => Rzeszów
    [zip] => 35-213
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 95883e1b01dffc132ff7ace778131de8
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 16:49:55
ip: 91.150.188.240
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZSMDKX
    [amount] => 265.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZSMDKX&uid=01H90WBJ16CNF9WQB8W8EDMV4V
)



===========================
Blik request params
===========================
2023-08-29 16:49:55
ip: 91.150.188.240
Array
(
    [title] => TR-1CEN-9ZSMDKX
    [code] => 243285
)



===========================
Blik response
===========================
2023-08-29 16:49:56
ip: 91.150.188.240
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 16:50:12
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZSMDKX
    [tr_date] => 2023-08-29 16:50:09
    [tr_crc] => bf3a1192536e74f625bc778cf8c7d8e9
    [tr_amount] => 265.98
    [tr_paid] => 265.98
    [tr_desc] => Zamówienie HVSQFQXCD. Klient Grzegorz Grzesik
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => grzegorzgrzesik1999@gmail.com
    [test_mode] => 0
    [md5sum] => 2d1b30fa0a681b444f1e51f125ecae8f
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 16:51:14
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZSMDKX
    [tr_date] => 2023-08-29 16:50:09
    [tr_crc] => bf3a1192536e74f625bc778cf8c7d8e9
    [tr_amount] => 265.98
    [tr_paid] => 265.98
    [tr_desc] => Zamówienie HVSQFQXCD. Klient Grzegorz Grzesik
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => grzegorzgrzesik1999@gmail.com
    [test_mode] => 0
    [md5sum] => 2d1b30fa0a681b444f1e51f125ecae8f
)



Check MD5: 1
OrderId 47533
===========================
Tpay order parameters
===========================
2023-08-29 17:05:59
ip: 2a00:f41:1cf2:b53c:7125:26f7:442:abc6
Array
(
    [amount] => 24.98
    [crc] => 05121b18ec543e37d75c4fdf3d230384
    [description] => Zamówienie IUTBYHURD. Klient Maja Rowicka
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138040&id_module=140&id_order=47533&key=b6be648749231f724cd14e581587e843&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47533
    [email] => rutkowskamarta363@gmail.com
    [name] => Maja Rowicka
    [phone] => 513360567
    [address] => Szeroka 6a
    [city] => Tłuszcz
    [zip] => 05-240
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 17:05:59
ip: 2a00:f41:1cf2:b53c:7125:26f7:442:abc6
Array
(
    [amount] => 24.98
    [crc] => 05121b18ec543e37d75c4fdf3d230384
    [description] => Zamówienie IUTBYHURD. Klient Maja Rowicka
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138040&id_module=140&id_order=47533&key=b6be648749231f724cd14e581587e843&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47533
    [email] => rutkowskamarta363@gmail.com
    [name] => Maja Rowicka
    [phone] => 513360567
    [address] => Szeroka 6a
    [city] => Tłuszcz
    [zip] => 05-240
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => f911b21caf9a9de389315cfd2e4326f8
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 17:06:00
ip: 2a00:f41:1cf2:b53c:7125:26f7:442:abc6
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZSUEJX
    [amount] => 24.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZSUEJX&uid=01H90X90M4YAN2RAK03T6W8ZZB
)



===========================
Blik request params
===========================
2023-08-29 17:06:00
ip: 2a00:f41:1cf2:b53c:7125:26f7:442:abc6
Array
(
    [title] => TR-1CEN-9ZSUEJX
    [code] => 233709
)



===========================
Blik response
===========================
2023-08-29 17:06:01
ip: 2a00:f41:1cf2:b53c:7125:26f7:442:abc6
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 17:06:17
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZSUEJX
    [tr_date] => 2023-08-29 17:06:15
    [tr_crc] => 05121b18ec543e37d75c4fdf3d230384
    [tr_amount] => 24.98
    [tr_paid] => 24.98
    [tr_desc] => Zamówienie IUTBYHURD. Klient Maja Rowicka
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => rutkowskamarta363@gmail.com
    [test_mode] => 0
    [md5sum] => a58ba068cdb6fd40595cdc02a838f18a
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 17:07:19
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZSUEJX
    [tr_date] => 2023-08-29 17:06:15
    [tr_crc] => 05121b18ec543e37d75c4fdf3d230384
    [tr_amount] => 24.98
    [tr_paid] => 24.98
    [tr_desc] => Zamówienie IUTBYHURD. Klient Maja Rowicka
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => rutkowskamarta363@gmail.com
    [test_mode] => 0
    [md5sum] => a58ba068cdb6fd40595cdc02a838f18a
)



Check MD5: 1
OrderId 47534
===========================
Tpay order parameters
===========================
2023-08-29 17:16:51
ip: 2a01:110f:4106:2800:a93a:6a1b:a696:471
Array
(
    [amount] => 142.26
    [crc] => a6fd18fb626abaa5c5f2231a1444fc37
    [description] => Zamówienie AOYQYWAWJ. Klient Marianna Laudy
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138037&id_module=140&id_order=47534&key=562fdbd28a0e34aab0677dc59239e437&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47534
    [email] => chocimrum123@gmail.com
    [name] => Marianna Laudy
    [phone] => 730380580
    [address] => Rumiana 92/4
    [city] => Warszawa
    [zip] => 02-956
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 17:16:51
ip: 2a01:110f:4106:2800:a93a:6a1b:a696:471
Array
(
    [amount] => 142.26
    [crc] => a6fd18fb626abaa5c5f2231a1444fc37
    [description] => Zamówienie AOYQYWAWJ. Klient Marianna Laudy
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138037&id_module=140&id_order=47534&key=562fdbd28a0e34aab0677dc59239e437&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47534
    [email] => chocimrum123@gmail.com
    [name] => Marianna Laudy
    [phone] => 730380580
    [address] => Rumiana 92/4
    [city] => Warszawa
    [zip] => 02-956
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 27fa0cf0d123fbfb05d364e4fc2342bb
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 17:16:52
ip: 2a01:110f:4106:2800:a93a:6a1b:a696:471
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZT03AX
    [amount] => 142.26
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZT03AX&uid=01H90XWWF3SCAPGMT25N9E0YS2
)



===========================
Blik request params
===========================
2023-08-29 17:16:52
ip: 2a01:110f:4106:2800:a93a:6a1b:a696:471
Array
(
    [title] => TR-1CEN-9ZT03AX
    [code] => 415803
)



===========================
Blik response
===========================
2023-08-29 17:16:52
ip: 2a01:110f:4106:2800:a93a:6a1b:a696:471
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 17:17:12
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZT03AX
    [tr_date] => 2023-08-29 17:17:10
    [tr_crc] => a6fd18fb626abaa5c5f2231a1444fc37
    [tr_amount] => 142.26
    [tr_paid] => 142.26
    [tr_desc] => Zamówienie AOYQYWAWJ. Klient Marianna Laudy
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => chocimrum123@gmail.com
    [test_mode] => 0
    [md5sum] => 27853c804606a9e644f4b271be1a28b5
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 17:18:13
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZT03AX
    [tr_date] => 2023-08-29 17:17:10
    [tr_crc] => a6fd18fb626abaa5c5f2231a1444fc37
    [tr_amount] => 142.26
    [tr_paid] => 142.26
    [tr_desc] => Zamówienie AOYQYWAWJ. Klient Marianna Laudy
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => chocimrum123@gmail.com
    [test_mode] => 0
    [md5sum] => 27853c804606a9e644f4b271be1a28b5
)



Check MD5: 1
OrderId 47535
===========================
Tpay order parameters
===========================
2023-08-29 17:25:21
ip: 91.223.64.23
Array
(
    [amount] => 183.73
    [crc] => 5b2f32c51149792409a56dca87b20e25
    [description] => Zamówienie MWSKJXGGJ. Klient Joanna Brachman
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138042&id_module=140&id_order=47535&key=0d4c125bc99f3011885a896686599f2f&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47535
    [email] => brachman.joanna@gmail.com
    [name] => Joanna Brachman
    [phone] => 791029194
    [address] => Aleksandra Zelwerowicza 11e/1
    [city] => Rzeszów 
    [zip] => 35-601
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 17:25:21
ip: 91.223.64.23
Array
(
    [amount] => 183.73
    [crc] => 5b2f32c51149792409a56dca87b20e25
    [description] => Zamówienie MWSKJXGGJ. Klient Joanna Brachman
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138042&id_module=140&id_order=47535&key=0d4c125bc99f3011885a896686599f2f&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47535
    [email] => brachman.joanna@gmail.com
    [name] => Joanna Brachman
    [phone] => 791029194
    [address] => Aleksandra Zelwerowicza 11e/1
    [city] => Rzeszów 
    [zip] => 35-601
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => c7922a70bd7be5bc6bc1abd61562ec7b
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 17:25:21
ip: 91.223.64.23
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZT2YTX
    [amount] => 183.73
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZT2YTX&uid=01H90YCEAY55Q5MP8RT58HY5G5
)



===========================
Blik request params
===========================
2023-08-29 17:25:21
ip: 91.223.64.23
Array
(
    [title] => TR-1CEN-9ZT2YTX
    [code] => 231759
)



===========================
Blik response
===========================
2023-08-29 17:25:22
ip: 91.223.64.23
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 17:25:32
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZT2YTX
    [tr_date] => 2023-08-29 17:25:28
    [tr_crc] => 5b2f32c51149792409a56dca87b20e25
    [tr_amount] => 183.73
    [tr_paid] => 183.73
    [tr_desc] => Zamówienie MWSKJXGGJ. Klient Joanna Brachman
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => brachman.joanna@gmail.com
    [test_mode] => 0
    [md5sum] => cf4c34275d17bd506d7f0bdd23c0fcab
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 17:26:33
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZT2YTX
    [tr_date] => 2023-08-29 17:25:28
    [tr_crc] => 5b2f32c51149792409a56dca87b20e25
    [tr_amount] => 183.73
    [tr_paid] => 183.73
    [tr_desc] => Zamówienie MWSKJXGGJ. Klient Joanna Brachman
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => brachman.joanna@gmail.com
    [test_mode] => 0
    [md5sum] => cf4c34275d17bd506d7f0bdd23c0fcab
)



Check MD5: 1
OrderId 47536
===========================
Tpay order parameters
===========================
2023-08-29 17:39:48
ip: 5.173.24.54
Array
(
    [amount] => 162.48
    [crc] => 9373415f7a8cc62d6c584a3e8294a78e
    [description] => Zamówienie RYPQVVGGB. Klient Adrianna Lisicka
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138043&id_module=140&id_order=47536&key=331b4082cc48203b1041b77a17bbffd7&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47536
    [email] => lisicka.adrianna@gmail.com
    [name] => Adrianna Lisicka
    [phone] => 694900353
    [address] => Jana Pawła Ii 41a M 62
    [city] => Płock
    [zip] => 09-402
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
)



===========================
Tpay renew order parameters
===========================
2023-08-29 17:42:17
ip: 5.173.24.54
Array
(
    [amount] => 162.48
    [crc] => 9373415f7a8cc62d6c584a3e8294a78e
    [description] => Zamówienie nr 47536. Klient Adrianna Lisicka
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138043&id_module=140&id_order=47536&key=331b4082cc48203b1041b77a17bbffd7&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47536
    [email] => lisicka.adrianna@gmail.com
    [name] => Adrianna Lisicka
    [phone] => 694900353
    [address] => Jana Pawła Ii 41a M 62
    [city] => Płock
    [zip] => 09-402
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
)



===========================
Tpay renew order parameters
===========================
2023-08-29 17:42:17
ip: 5.173.24.54
Array
(
    [amount] => 162.48
    [crc] => 9373415f7a8cc62d6c584a3e8294a78e
    [description] => Zamówienie nr 47536. Klient Adrianna Lisicka
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138043&id_module=140&id_order=47536&key=331b4082cc48203b1041b77a17bbffd7&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47536
    [email] => lisicka.adrianna@gmail.com
    [name] => Adrianna Lisicka
    [phone] => 694900353
    [address] => Jana Pawła Ii 41a M 62
    [city] => Płock
    [zip] => 09-402
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
)



===========================
Tpay renew order parameters
===========================
2023-08-29 18:06:06
ip: 5.173.24.54
Array
(
    [amount] => 162.48
    [crc] => 9373415f7a8cc62d6c584a3e8294a78e
    [description] => Zamówienie nr 47536. Klient Adrianna Lisicka
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138043&id_module=140&id_order=47536&key=331b4082cc48203b1041b77a17bbffd7&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47536
    [email] => lisicka.adrianna@gmail.com
    [name] => Adrianna Lisicka
    [phone] => 694900353
    [address] => Jana Pawła Ii 41a M 62
    [city] => Płock
    [zip] => 09-402
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
)



===========================
Tpay renew order parameters
===========================
2023-08-29 18:06:07
ip: 5.173.24.54
Array
(
    [amount] => 162.48
    [crc] => 9373415f7a8cc62d6c584a3e8294a78e
    [description] => Zamówienie nr 47536. Klient Adrianna Lisicka
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138043&id_module=140&id_order=47536&key=331b4082cc48203b1041b77a17bbffd7&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47536
    [email] => lisicka.adrianna@gmail.com
    [name] => Adrianna Lisicka
    [phone] => 694900353
    [address] => Jana Pawła Ii 41a M 62
    [city] => Płock
    [zip] => 09-402
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
)



===========================
Basic payment notification
===========================
2023-08-29 18:06:42
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZTGDYX
    [tr_date] => 2023-08-29 18:06:39
    [tr_crc] => 9373415f7a8cc62d6c584a3e8294a78e
    [tr_amount] => 162.48
    [tr_paid] => 162.48
    [tr_desc] => Zamówienie nr 47536. Klient Adrianna Lisicka
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => lisicka.adrianna@gmail.com
    [test_mode] => 0
    [md5sum] => 52f68cc9c2abf4bb4e3a4e7bbe83fe11
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 18:07:42
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZTGDYX
    [tr_date] => 2023-08-29 18:06:39
    [tr_crc] => 9373415f7a8cc62d6c584a3e8294a78e
    [tr_amount] => 162.48
    [tr_paid] => 162.48
    [tr_desc] => Zamówienie nr 47536. Klient Adrianna Lisicka
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => lisicka.adrianna@gmail.com
    [test_mode] => 0
    [md5sum] => 52f68cc9c2abf4bb4e3a4e7bbe83fe11
)



Check MD5: 1
OrderId 47538
===========================
Tpay order parameters
===========================
2023-08-29 19:36:00
ip: 178.235.178.129
Array
(
    [amount] => 117.45
    [crc] => 6d77b6ea1e072cbd99f46d03443e3f1f
    [description] => Zamówienie CLUHPHUBY. Klient Sylwia Filipowicz
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=137945&id_module=140&id_order=47538&key=dffb57e09f1796520427664431fd3db1&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47538
    [email] => sylwiafilipowicz86@gmail.com
    [name] => Sylwia Filipowicz
    [phone] => 508702547
    [address] => Sidorska 1/40
    [city] => Biała Podlaska 
    [zip] => 21-500
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 19:36:00
ip: 178.235.178.129
Array
(
    [amount] => 117.45
    [crc] => 6d77b6ea1e072cbd99f46d03443e3f1f
    [description] => Zamówienie CLUHPHUBY. Klient Sylwia Filipowicz
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=137945&id_module=140&id_order=47538&key=dffb57e09f1796520427664431fd3db1&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47538
    [email] => sylwiafilipowicz86@gmail.com
    [name] => Sylwia Filipowicz
    [phone] => 508702547
    [address] => Sidorska 1/40
    [city] => Biała Podlaska 
    [zip] => 21-500
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => b6cd7a402c0eef362b138e93a13d0255
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 19:36:01
ip: 178.235.178.129
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZUCJLX
    [amount] => 117.45
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZUCJLX&uid=01H915VP9EN691S6DS42CT0NBJ
)



===========================
Blik request params
===========================
2023-08-29 19:36:01
ip: 178.235.178.129
Array
(
    [title] => TR-1CEN-9ZUCJLX
    [code] => 734070
)



===========================
Blik response
===========================
2023-08-29 19:36:02
ip: 178.235.178.129
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 19:36:16
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZUCJLX
    [tr_date] => 2023-08-29 19:36:13
    [tr_crc] => 6d77b6ea1e072cbd99f46d03443e3f1f
    [tr_amount] => 117.45
    [tr_paid] => 117.45
    [tr_desc] => Zamówienie CLUHPHUBY. Klient Sylwia Filipowicz
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => sylwiafilipowicz86@gmail.com
    [test_mode] => 0
    [md5sum] => 7477f5a0b523c9af43d5c9327210deaf
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 19:37:17
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZUCJLX
    [tr_date] => 2023-08-29 19:36:13
    [tr_crc] => 6d77b6ea1e072cbd99f46d03443e3f1f
    [tr_amount] => 117.45
    [tr_paid] => 117.45
    [tr_desc] => Zamówienie CLUHPHUBY. Klient Sylwia Filipowicz
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => sylwiafilipowicz86@gmail.com
    [test_mode] => 0
    [md5sum] => 7477f5a0b523c9af43d5c9327210deaf
)



Check MD5: 1
OrderId 47539
===========================
Tpay order parameters
===========================
2023-08-29 20:09:43
ip: 185.252.182.159
Array
(
    [amount] => 285.73
    [crc] => 83997f9aa62f325bf292084c417bb361
    [description] => Zamówienie FAJAKKFOG. Klient Andżelika Majewska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=137559&id_module=140&id_order=47539&key=286a744ed27c4be1e249c698022bfd3d&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47539
    [email] => amajevvska@gmail.com
    [name] => Andżelika Majewska
    [phone] => 570548447
    [address] => Cieszyna, 93
    [city] => Cieszyna
    [zip] => 38-125
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 20:09:43
ip: 185.252.182.159
Array
(
    [amount] => 285.73
    [crc] => 83997f9aa62f325bf292084c417bb361
    [description] => Zamówienie FAJAKKFOG. Klient Andżelika Majewska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=137559&id_module=140&id_order=47539&key=286a744ed27c4be1e249c698022bfd3d&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47539
    [email] => amajevvska@gmail.com
    [name] => Andżelika Majewska
    [phone] => 570548447
    [address] => Cieszyna, 93
    [city] => Cieszyna
    [zip] => 38-125
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 22f30cda430503708a0a11d094255c0c
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 20:09:44
ip: 185.252.182.159
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZUNCKX
    [amount] => 285.73
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZUNCKX&uid=01H917SDHT68K4QW88HY2ATJ39
)



===========================
Blik request params
===========================
2023-08-29 20:09:44
ip: 185.252.182.159
Array
(
    [title] => TR-1CEN-9ZUNCKX
    [code] => 120663
)



===========================
Blik response
===========================
2023-08-29 20:09:45
ip: 185.252.182.159
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 20:10:13
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZUNCKX
    [tr_date] => 2023-08-29 20:10:10
    [tr_crc] => 83997f9aa62f325bf292084c417bb361
    [tr_amount] => 285.73
    [tr_paid] => 285.73
    [tr_desc] => Zamówienie FAJAKKFOG. Klient Andżelika Majewska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => amajevvska@gmail.com
    [test_mode] => 0
    [md5sum] => 5ed7ddefa025a3b98bdd8ddaae751ee0
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 20:11:13
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZUNCKX
    [tr_date] => 2023-08-29 20:10:10
    [tr_crc] => 83997f9aa62f325bf292084c417bb361
    [tr_amount] => 285.73
    [tr_paid] => 285.73
    [tr_desc] => Zamówienie FAJAKKFOG. Klient Andżelika Majewska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => amajevvska@gmail.com
    [test_mode] => 0
    [md5sum] => 5ed7ddefa025a3b98bdd8ddaae751ee0
)



Check MD5: 1
OrderId 47540
===========================
Tpay order parameters
===========================
2023-08-29 20:36:27
ip: 128.127.95.239
Array
(
    [amount] => 161.65
    [crc] => 4a13aa4915691e0afd83f44ced849a47
    [description] => Zamówienie OSZEKWVDR. Klient Katarzyna Nowak
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138053&id_module=140&id_order=47540&key=6439ca94914883124ff2840ff7fe710b&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47540
    [email] => kasi_k@wp.pl
    [name] => Katarzyna Nowak
    [phone] => 793781208
    [address] => Chopina 63
    [city] => Gorzów Wielkopolski
    [zip] => 66-400
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 20:36:27
ip: 128.127.95.239
Array
(
    [amount] => 161.65
    [crc] => 4a13aa4915691e0afd83f44ced849a47
    [description] => Zamówienie OSZEKWVDR. Klient Katarzyna Nowak
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138053&id_module=140&id_order=47540&key=6439ca94914883124ff2840ff7fe710b&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47540
    [email] => kasi_k@wp.pl
    [name] => Katarzyna Nowak
    [phone] => 793781208
    [address] => Chopina 63
    [city] => Gorzów Wielkopolski
    [zip] => 66-400
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 97a6e66c670d288edf79ca082ce1eb4d
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 20:36:28
ip: 128.127.95.239
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZUYDTX
    [amount] => 161.65
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZUYDTX&uid=01H919AC4M789Y7D100FQZTFNA
)



===========================
Blik request params
===========================
2023-08-29 20:36:28
ip: 128.127.95.239
Array
(
    [title] => TR-1CEN-9ZUYDTX
    [code] => 579208
)



===========================
Blik response
===========================
2023-08-29 20:36:29
ip: 128.127.95.239
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 20:36:42
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZUYDTX
    [tr_date] => 2023-08-29 20:36:40
    [tr_crc] => 4a13aa4915691e0afd83f44ced849a47
    [tr_amount] => 161.65
    [tr_paid] => 161.65
    [tr_desc] => Zamówienie OSZEKWVDR. Klient Katarzyna Nowak
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => kasi_k@wp.pl
    [test_mode] => 0
    [md5sum] => e678e5186f492a0fffca8f6e7cfc1673
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 20:37:44
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZUYDTX
    [tr_date] => 2023-08-29 20:36:40
    [tr_crc] => 4a13aa4915691e0afd83f44ced849a47
    [tr_amount] => 161.65
    [tr_paid] => 161.65
    [tr_desc] => Zamówienie OSZEKWVDR. Klient Katarzyna Nowak
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => kasi_k@wp.pl
    [test_mode] => 0
    [md5sum] => e678e5186f492a0fffca8f6e7cfc1673
)



Check MD5: 1
OrderId 47541
===========================
Tpay order parameters
===========================
2023-08-29 20:45:29
ip: 31.0.127.61
Array
(
    [amount] => 183.73
    [crc] => c3d4de850c11c9d1e8019aeaa7bcfa48
    [description] => Zamówienie MCKSMTKZU. Klient Dobrusia Janiak
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138055&id_module=140&id_order=47541&key=f23af0aeb0e75da369c3cfe13ae91ca3&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47541
    [email] => dobruniajaniak@wp.pl
    [name] => Dobrusia Janiak
    [phone] => 501020984
    [address] => Ul. Maksymiliana Kolbego 11
    [city] => Sulejówek
    [zip] => 05-070
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 20:45:29
ip: 31.0.127.61
Array
(
    [amount] => 183.73
    [crc] => c3d4de850c11c9d1e8019aeaa7bcfa48
    [description] => Zamówienie MCKSMTKZU. Klient Dobrusia Janiak
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138055&id_module=140&id_order=47541&key=f23af0aeb0e75da369c3cfe13ae91ca3&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47541
    [email] => dobruniajaniak@wp.pl
    [name] => Dobrusia Janiak
    [phone] => 501020984
    [address] => Ul. Maksymiliana Kolbego 11
    [city] => Sulejówek
    [zip] => 05-070
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => a82ee9d0fcf6104a484dd12970e943e1
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 20:45:29
ip: 31.0.127.61
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZV14KX
    [amount] => 183.73
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZV14KX&uid=01H919TWVMS1S16FZZQ5BW187K
)



===========================
Blik request params
===========================
2023-08-29 20:45:29
ip: 31.0.127.61
Array
(
    [title] => TR-1CEN-9ZV14KX
    [code] => 469046
)



===========================
Blik response
===========================
2023-08-29 20:45:30
ip: 31.0.127.61
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 20:45:37
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZV14KX
    [tr_date] => 2023-08-29 20:45:35
    [tr_crc] => c3d4de850c11c9d1e8019aeaa7bcfa48
    [tr_amount] => 183.73
    [tr_paid] => 183.73
    [tr_desc] => Zamówienie MCKSMTKZU. Klient Dobrusia Janiak
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => dobruniajaniak@wp.pl
    [test_mode] => 0
    [md5sum] => 2abd7d74e1f048136361b5c16aed6ce2
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 20:46:39
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZV14KX
    [tr_date] => 2023-08-29 20:45:35
    [tr_crc] => c3d4de850c11c9d1e8019aeaa7bcfa48
    [tr_amount] => 183.73
    [tr_paid] => 183.73
    [tr_desc] => Zamówienie MCKSMTKZU. Klient Dobrusia Janiak
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => dobruniajaniak@wp.pl
    [test_mode] => 0
    [md5sum] => 2abd7d74e1f048136361b5c16aed6ce2
)



Check MD5: 1
OrderId 47544
===========================
Tpay order parameters
===========================
2023-08-29 21:45:19
ip: 176.109.128.29
Array
(
    [amount] => 195.63
    [crc] => 6579306914ded6f29d114f8817a57dbc
    [description] => Zamówienie HIEBWPVIQ. Klient Natalia Szulc
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138054&id_module=140&id_order=47544&key=184a8f1bcaa9d550d53ed65b693c79c7&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47544
    [email] => natalka12340@wp.pl
    [name] => Natalia Szulc
    [phone] => 512443262
    [address] => Regiel 14b
    [city] => Ełk
    [zip] => 19-300
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 21:45:19
ip: 176.109.128.29
Array
(
    [amount] => 195.63
    [crc] => 6579306914ded6f29d114f8817a57dbc
    [description] => Zamówienie HIEBWPVIQ. Klient Natalia Szulc
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138054&id_module=140&id_order=47544&key=184a8f1bcaa9d550d53ed65b693c79c7&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47544
    [email] => natalka12340@wp.pl
    [name] => Natalia Szulc
    [phone] => 512443262
    [address] => Regiel 14b
    [city] => Ełk
    [zip] => 19-300
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 1e37f2d3a06969249f7aa6cc8567e1bf
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 21:45:20
ip: 176.109.128.29
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZVG2RX
    [amount] => 195.63
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZVG2RX&uid=01H91D8F7FEZ7Y4V26FB61CDYX
)



===========================
Blik request params
===========================
2023-08-29 21:45:20
ip: 176.109.128.29
Array
(
    [title] => TR-1CEN-9ZVG2RX
    [code] => 639682
)



===========================
Blik response
===========================
2023-08-29 21:45:21
ip: 176.109.128.29
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 21:45:37
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZVG2RX
    [tr_date] => 2023-08-29 21:45:35
    [tr_crc] => 6579306914ded6f29d114f8817a57dbc
    [tr_amount] => 195.63
    [tr_paid] => 195.63
    [tr_desc] => Zamówienie HIEBWPVIQ. Klient Natalia Szulc
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => natalka12340@wp.pl
    [test_mode] => 0
    [md5sum] => 2ac12039eb75d4af7cd3afa69ae8ae15
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 21:46:38
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZVG2RX
    [tr_date] => 2023-08-29 21:45:35
    [tr_crc] => 6579306914ded6f29d114f8817a57dbc
    [tr_amount] => 195.63
    [tr_paid] => 195.63
    [tr_desc] => Zamówienie HIEBWPVIQ. Klient Natalia Szulc
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => natalka12340@wp.pl
    [test_mode] => 0
    [md5sum] => 2ac12039eb75d4af7cd3afa69ae8ae15
)



Check MD5: 1
OrderId 47545
===========================
Tpay order parameters
===========================
2023-08-29 22:56:01
ip: 31.0.78.242
Array
(
    [amount] => 141.23
    [crc] => 5bb76b253502c323d0a842228aa974b0
    [description] => Zamówienie FLECDWLFL. Klient Katarzyna Hoffmann
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138006&id_module=140&id_order=47545&key=a170d91fd5d93fa34e85a92b88a6b937&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47545
    [email] => hoffmann.k@o2.pl
    [name] => Katarzyna Hoffmann
    [phone] => 697712900
    [address] => Wawelska 15/11
    [city] => Gdańsk
    [zip] => 80-034
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 22:56:01
ip: 31.0.78.242
Array
(
    [amount] => 141.23
    [crc] => 5bb76b253502c323d0a842228aa974b0
    [description] => Zamówienie FLECDWLFL. Klient Katarzyna Hoffmann
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138006&id_module=140&id_order=47545&key=a170d91fd5d93fa34e85a92b88a6b937&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47545
    [email] => hoffmann.k@o2.pl
    [name] => Katarzyna Hoffmann
    [phone] => 697712900
    [address] => Wawelska 15/11
    [city] => Gdańsk
    [zip] => 80-034
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 1cade66a6c9f8eee438ce21f301cf9c3
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 22:56:02
ip: 31.0.78.242
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZVWFCX
    [amount] => 141.23
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZVWFCX&uid=01H91H9XK8E315G627D590BCSK
)



===========================
Blik request params
===========================
2023-08-29 22:56:02
ip: 31.0.78.242
Array
(
    [title] => TR-1CEN-9ZVWFCX
    [code] => 402130
)



===========================
Blik response
===========================
2023-08-29 22:56:02
ip: 31.0.78.242
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 22:56:34
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZVWFCX
    [tr_date] => 2023-08-29 22:56:31
    [tr_crc] => 5bb76b253502c323d0a842228aa974b0
    [tr_amount] => 141.23
    [tr_paid] => 141.23
    [tr_desc] => Zamówienie FLECDWLFL. Klient Katarzyna Hoffmann
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => hoffmann.k@o2.pl
    [test_mode] => 0
    [md5sum] => 2b3937a695799febdeb49b8a18d79115
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 22:57:35
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZVWFCX
    [tr_date] => 2023-08-29 22:56:31
    [tr_crc] => 5bb76b253502c323d0a842228aa974b0
    [tr_amount] => 141.23
    [tr_paid] => 141.23
    [tr_desc] => Zamówienie FLECDWLFL. Klient Katarzyna Hoffmann
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => hoffmann.k@o2.pl
    [test_mode] => 0
    [md5sum] => 2b3937a695799febdeb49b8a18d79115
)



Check MD5: 1
OrderId 47546
===========================
Tpay order parameters
===========================
2023-08-29 23:22:50
ip: 37.30.125.137
Array
(
    [amount] => 292.98
    [crc] => bc3f30c0704fb03241f93ee3c35b88cb
    [description] => Zamówienie KGMVXQIXI. Klient Beata Sternal
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138066&id_module=140&id_order=47546&key=81a0566f93420319f24425119a0975ac&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47546
    [email] => beata-solar@wp.pl
    [name] => Beata Sternal
    [phone] => 604550379
    [address] => Al.niepodległości 18/2
    [city] => Zielona Góra
    [zip] => 65-048
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 23:22:51
ip: 37.30.125.137
Array
(
    [amount] => 292.98
    [crc] => bc3f30c0704fb03241f93ee3c35b88cb
    [description] => Zamówienie KGMVXQIXI. Klient Beata Sternal
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138066&id_module=140&id_order=47546&key=81a0566f93420319f24425119a0975ac&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47546
    [email] => beata-solar@wp.pl
    [name] => Beata Sternal
    [phone] => 604550379
    [address] => Al.niepodległości 18/2
    [city] => Zielona Góra
    [zip] => 65-048
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => ab3e40d29b7e7052c3cc005b698da722
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 23:22:51
ip: 37.30.125.137
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZW13SX
    [amount] => 292.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZW13SX&uid=01H91JV1KCB00DRCDANRSEHC9C
)



===========================
Blik request params
===========================
2023-08-29 23:22:51
ip: 37.30.125.137
Array
(
    [title] => TR-1CEN-9ZW13SX
    [code] => 736947
)



===========================
Blik response
===========================
2023-08-29 23:22:52
ip: 37.30.125.137
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 23:23:18
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZW13SX
    [tr_date] => 2023-08-29 23:23:14
    [tr_crc] => bc3f30c0704fb03241f93ee3c35b88cb
    [tr_amount] => 292.98
    [tr_paid] => 292.98
    [tr_desc] => Zamówienie KGMVXQIXI. Klient Beata Sternal
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => beata-solar@wp.pl
    [test_mode] => 0
    [md5sum] => ac3cfa7c8eeded7dbbf4601535de094c
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 23:24:20
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZW13SX
    [tr_date] => 2023-08-29 23:23:14
    [tr_crc] => bc3f30c0704fb03241f93ee3c35b88cb
    [tr_amount] => 292.98
    [tr_paid] => 292.98
    [tr_desc] => Zamówienie KGMVXQIXI. Klient Beata Sternal
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => beata-solar@wp.pl
    [test_mode] => 0
    [md5sum] => ac3cfa7c8eeded7dbbf4601535de094c
)



Check MD5: 1
OrderId 47547
===========================
Tpay order parameters
===========================
2023-08-29 23:45:24
ip: 2a02:a310:8341:9380:d110:60c3:af9a:2f5d
Array
(
    [amount] => 141.23
    [crc] => 079c3681c865e365eb88f2fc1a00a1af
    [description] => Zamówienie MMRGKQSQQ. Klient Sylwia Derlatka
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138068&id_module=140&id_order=47547&key=ef0a2a28f42f44708a5f041806138dc0&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47547
    [email] => sylwia.derlatka@onet.pl
    [name] => Sylwia Derlatka
    [phone] => 726117371
    [address] => Jagiellońska 52/4
    [city] => Warszawa 
    [zip] => 03-463
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-08-29 23:45:24
ip: 2a02:a310:8341:9380:d110:60c3:af9a:2f5d
Array
(
    [amount] => 141.23
    [crc] => 079c3681c865e365eb88f2fc1a00a1af
    [description] => Zamówienie MMRGKQSQQ. Klient Sylwia Derlatka
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138068&id_module=140&id_order=47547&key=ef0a2a28f42f44708a5f041806138dc0&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47547
    [email] => sylwia.derlatka@onet.pl
    [name] => Sylwia Derlatka
    [phone] => 726117371
    [address] => Jagiellońska 52/4
    [city] => Warszawa 
    [zip] => 03-463
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 7c37ac80536a4bab5f7f3f5322365327
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-08-29 23:45:24
ip: 2a02:a310:8341:9380:d110:60c3:af9a:2f5d
Array
(
    [result] => 1
    [title] => TR-1CEN-9ZW3DYX
    [amount] => 141.23
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9ZW3DYX&uid=01H91M4AZGQWWKR1BK39ZWP06X
)



===========================
Blik request params
===========================
2023-08-29 23:45:24
ip: 2a02:a310:8341:9380:d110:60c3:af9a:2f5d
Array
(
    [title] => TR-1CEN-9ZW3DYX
    [code] => 901922
)



===========================
Blik response
===========================
2023-08-29 23:45:25
ip: 2a02:a310:8341:9380:d110:60c3:af9a:2f5d
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-08-29 23:45:41
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZW3DYX
    [tr_date] => 2023-08-29 23:45:39
    [tr_crc] => 079c3681c865e365eb88f2fc1a00a1af
    [tr_amount] => 141.23
    [tr_paid] => 141.23
    [tr_desc] => Zamówienie MMRGKQSQQ. Klient Sylwia Derlatka
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => sylwia.derlatka@onet.pl
    [test_mode] => 0
    [md5sum] => ca91f3157794620b848f0e38ee25e9e0
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 23:46:42
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZW3DYX
    [tr_date] => 2023-08-29 23:45:39
    [tr_crc] => 079c3681c865e365eb88f2fc1a00a1af
    [tr_amount] => 141.23
    [tr_paid] => 141.23
    [tr_desc] => Zamówienie MMRGKQSQQ. Klient Sylwia Derlatka
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => sylwia.derlatka@onet.pl
    [test_mode] => 0
    [md5sum] => ca91f3157794620b848f0e38ee25e9e0
)



Check MD5: 1
OrderId 47548
===========================
Tpay order parameters
===========================
2023-08-29 23:47:06
ip: 87.64.187.199
Array
(
    [amount] => 200.73
    [crc] => d25c44cd3a5a293dcdd23906030522b4
    [description] => Zamówienie LGXVPFRUL. Klient Ewa Dlugolecka
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=138069&id_module=140&id_order=47548&key=03247b495adf60ebddcfd1da548efee0&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=47548
    [email] => ewajaszczuk1@wp.pl
    [name] => Ewa Dlugolecka
    [phone] => 856560089
    [address] => Wyromiejki8
    [city] => Siemiatycze
    [zip] => 17-300
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 135
)



===========================
Basic payment notification
===========================
2023-08-29 23:53:50
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZW3L0X
    [tr_date] => 2023-08-29 23:53:48
    [tr_crc] => d25c44cd3a5a293dcdd23906030522b4
    [tr_amount] => 200.73
    [tr_paid] => 200.73
    [tr_desc] => Zamówienie LGXVPFRUL. Klient Ewa Dlugolecka
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => ewajaszczuk1@wp.pl
    [test_mode] => 0
    [md5sum] => eec2b7e6ecaac60390011d83d754b36c
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-08-29 23:54:51
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9ZW3L0X
    [tr_date] => 2023-08-29 23:53:48
    [tr_crc] => d25c44cd3a5a293dcdd23906030522b4
    [tr_amount] => 200.73
    [tr_paid] => 200.73
    [tr_desc] => Zamówienie LGXVPFRUL. Klient Ewa Dlugolecka
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => ewajaszczuk1@wp.pl
    [test_mode] => 0
    [md5sum] => eec2b7e6ecaac60390011d83d754b36c
)



Check MD5: 1