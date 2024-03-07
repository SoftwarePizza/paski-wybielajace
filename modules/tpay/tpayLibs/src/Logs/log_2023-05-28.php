<?php exit; ?> 

OrderId 45198
===========================
Tpay order parameters
===========================
2023-05-28 07:19:59
ip: 2a02:a310:e13b:7f80:ac87:b5ce:77a2:d8d0
Array
(
    [amount] => 149.73
    [crc] => 98edd978bfdd8df4bd285f491ed4ef4f
    [description] => Zamówienie KEHMFRFUY. Klient Valeriia Novikova
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132665&id_module=140&id_order=45198&key=9d313bce2cb6e07352442e4b5ef1678f&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45198
    [email] => vn454444@icloud.com
    [name] => Valeriia Novikova
    [phone] => +380972077177
    [address] => Pory 53, M. 7
    [city] => Warszawa 
    [zip] => 02-757
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 102
)



OrderId 45201
===========================
Tpay order parameters
===========================
2023-05-28 09:15:01
ip: 2a02:a310:c120:2a80:4007:808d:e622:ecd3
Array
(
    [amount] => 170.98
    [crc] => 15f09f603083bdb095e4ce72718dfd2b
    [description] => Zamówienie ETTBPUHVY. Klient Tomasz Rychwalski
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132672&id_module=140&id_order=45201&key=6e33dd02fcf72df659ab050de7986f0c&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45201
    [email] => sylwia.kusznierczuk@gmail.com
    [name] => Tomasz Rychwalski
    [phone] => 664054373
    [address] => Tadeusza Rejtana 17 (tengent Sp. Z O.o.)
    [city] => Warszawa
    [zip] => 02-516
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-05-28 09:15:01
ip: 2a02:a310:c120:2a80:4007:808d:e622:ecd3
Array
(
    [amount] => 170.98
    [crc] => 15f09f603083bdb095e4ce72718dfd2b
    [description] => Zamówienie ETTBPUHVY. Klient Tomasz Rychwalski
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132672&id_module=140&id_order=45201&key=6e33dd02fcf72df659ab050de7986f0c&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45201
    [email] => sylwia.kusznierczuk@gmail.com
    [name] => Tomasz Rychwalski
    [phone] => 664054373
    [address] => Tadeusza Rejtana 17 (tengent Sp. Z O.o.)
    [city] => Warszawa
    [zip] => 02-516
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => d8fe9a1b1e44d0209fb8e196ad232e73
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-05-28 09:15:02
ip: 2a02:a310:c120:2a80:4007:808d:e622:ecd3
Array
(
    [result] => 1
    [title] => TR-1CEN-970UVYX
    [amount] => 170.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-970UVYX&uid=01H1GKBSH0YFS9HBE7TEEBS79J
)



===========================
Blik request params
===========================
2023-05-28 09:15:02
ip: 2a02:a310:c120:2a80:4007:808d:e622:ecd3
Array
(
    [title] => TR-1CEN-970UVYX
    [code] => 619540
)



===========================
Blik response
===========================
2023-05-28 09:15:03
ip: 2a02:a310:c120:2a80:4007:808d:e622:ecd3
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-05-28 09:15:20
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-970UVYX
    [tr_date] => 2023-05-28 09:15:13
    [tr_crc] => 15f09f603083bdb095e4ce72718dfd2b
    [tr_amount] => 170.98
    [tr_paid] => 170.98
    [tr_desc] => Zamówienie ETTBPUHVY. Klient Tomasz Rychwalski
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => sylwia.kusznierczuk@gmail.com
    [test_mode] => 0
    [md5sum] => 93e7f9164a7fcb34cd0cf18cdc816420
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 09:16:22
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-970UVYX
    [tr_date] => 2023-05-28 09:15:13
    [tr_crc] => 15f09f603083bdb095e4ce72718dfd2b
    [tr_amount] => 170.98
    [tr_paid] => 170.98
    [tr_desc] => Zamówienie ETTBPUHVY. Klient Tomasz Rychwalski
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => sylwia.kusznierczuk@gmail.com
    [test_mode] => 0
    [md5sum] => 93e7f9164a7fcb34cd0cf18cdc816420
)



Check MD5: 1
OrderId 45202
===========================
Tpay order parameters
===========================
2023-05-28 09:51:35
ip: 2a02:a314:8545:1800:18f8:50cf:20b3:eefb
Array
(
    [amount] => 187.98
    [crc] => 4e0f6e836ddb7f866a2c3005b831ce8b
    [description] => Zamówienie DHYUSIGBM. Klient Kamil Rozmus
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132673&id_module=140&id_order=45202&key=ba46102a72032e2d6e3f62db8e6710a2&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45202
    [email] => vemon97@gmail.com
    [name] => Kamil Rozmus
    [phone] => 796055849
    [address] => Francuska, 90/44
    [city] => Katowice
    [zip] => 40-506
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-05-28 09:51:35
ip: 2a02:a314:8545:1800:18f8:50cf:20b3:eefb
Array
(
    [amount] => 187.98
    [crc] => 4e0f6e836ddb7f866a2c3005b831ce8b
    [description] => Zamówienie DHYUSIGBM. Klient Kamil Rozmus
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132673&id_module=140&id_order=45202&key=ba46102a72032e2d6e3f62db8e6710a2&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45202
    [email] => vemon97@gmail.com
    [name] => Kamil Rozmus
    [phone] => 796055849
    [address] => Francuska, 90/44
    [city] => Katowice
    [zip] => 40-506
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 36e1ce73de0eda1869c0c79df892bd91
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-05-28 09:51:35
ip: 2a02:a314:8545:1800:18f8:50cf:20b3:eefb
Array
(
    [result] => 1
    [title] => TR-1CEN-9711PEX
    [amount] => 187.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-9711PEX&uid=01H1GNEQDZZ2T0H6GSFTVNN28X
)



===========================
Blik request params
===========================
2023-05-28 09:51:35
ip: 2a02:a314:8545:1800:18f8:50cf:20b3:eefb
Array
(
    [title] => TR-1CEN-9711PEX
    [code] => 639780
)



===========================
Blik response
===========================
2023-05-28 09:51:36
ip: 2a02:a314:8545:1800:18f8:50cf:20b3:eefb
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-05-28 09:51:54
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9711PEX
    [tr_date] => 2023-05-28 09:51:50
    [tr_crc] => 4e0f6e836ddb7f866a2c3005b831ce8b
    [tr_amount] => 187.98
    [tr_paid] => 187.98
    [tr_desc] => Zamówienie DHYUSIGBM. Klient Kamil Rozmus
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => vemon97@gmail.com
    [test_mode] => 0
    [md5sum] => 6cbdb18d0a14aa51cb1c095196d518df
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 09:52:56
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9711PEX
    [tr_date] => 2023-05-28 09:51:50
    [tr_crc] => 4e0f6e836ddb7f866a2c3005b831ce8b
    [tr_amount] => 187.98
    [tr_paid] => 187.98
    [tr_desc] => Zamówienie DHYUSIGBM. Klient Kamil Rozmus
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => vemon97@gmail.com
    [test_mode] => 0
    [md5sum] => 6cbdb18d0a14aa51cb1c095196d518df
)



Check MD5: 1
OrderId 45203
===========================
Tpay order parameters
===========================
2023-05-28 11:02:34
ip: 89.68.147.51
Array
(
    [amount] => 167.58
    [crc] => ce05f0cbffea48cc9f15d7f915516bdb
    [description] => Zamówienie JXUJILQBR. Klient Hubert Handzlik
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132676&id_module=140&id_order=45203&key=ce0f9666cf6a90ffdb63124400a39003&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45203
    [email] => hubert.handzlik@wp.pl
    [name] => Hubert Handzlik
    [phone] => 530745939
    [address] => Bohaterów Warszawy 4 (ls Athletic)
    [city] => Pruszków
    [zip] => 05-800
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-05-28 11:02:34
ip: 89.68.147.51
Array
(
    [amount] => 167.58
    [crc] => ce05f0cbffea48cc9f15d7f915516bdb
    [description] => Zamówienie JXUJILQBR. Klient Hubert Handzlik
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132676&id_module=140&id_order=45203&key=ce0f9666cf6a90ffdb63124400a39003&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45203
    [email] => hubert.handzlik@wp.pl
    [name] => Hubert Handzlik
    [phone] => 530745939
    [address] => Bohaterów Warszawy 4 (ls Athletic)
    [city] => Pruszków
    [zip] => 05-800
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => a546549547c21eb339a7efb0cfb4bd78
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-05-28 11:02:35
ip: 89.68.147.51
Array
(
    [result] => 1
    [title] => TR-1CEN-971G6VX
    [amount] => 167.58
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-971G6VX&uid=01H1GSGQ6JY63PJC131G3PYYTB
)



===========================
Blik request params
===========================
2023-05-28 11:02:35
ip: 89.68.147.51
Array
(
    [title] => TR-1CEN-971G6VX
    [code] => 357859
)



===========================
Blik response
===========================
2023-05-28 11:02:36
ip: 89.68.147.51
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-05-28 11:02:47
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-971G6VX
    [tr_date] => 2023-05-28 11:02:45
    [tr_crc] => ce05f0cbffea48cc9f15d7f915516bdb
    [tr_amount] => 167.58
    [tr_paid] => 167.58
    [tr_desc] => Zamówienie JXUJILQBR. Klient Hubert Handzlik
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => hubert.handzlik@wp.pl
    [test_mode] => 0
    [md5sum] => 3c16de234e239fbb74be340bf9c29aeb
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 11:03:49
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-971G6VX
    [tr_date] => 2023-05-28 11:02:45
    [tr_crc] => ce05f0cbffea48cc9f15d7f915516bdb
    [tr_amount] => 167.58
    [tr_paid] => 167.58
    [tr_desc] => Zamówienie JXUJILQBR. Klient Hubert Handzlik
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => hubert.handzlik@wp.pl
    [test_mode] => 0
    [md5sum] => 3c16de234e239fbb74be340bf9c29aeb
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 11:47:42
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-96U6FLX
    [tr_date] => 2023-05-28 11:47:39
    [tr_crc] => d110c4b4b461874493dc74b2fc047087
    [tr_amount] => 356.00
    [tr_paid] => 356.00
    [tr_desc] => Zamówienie JDLTJBQCO. Klient Grazyna Dabrowska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => graza.dabrowska@gmail.com
    [test_mode] => 0
    [md5sum] => bdf3e95696e4dfeffc7d4332f5bfc39a
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 11:48:44
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-96U6FLX
    [tr_date] => 2023-05-28 11:47:39
    [tr_crc] => d110c4b4b461874493dc74b2fc047087
    [tr_amount] => 356.00
    [tr_paid] => 356.00
    [tr_desc] => Zamówienie JDLTJBQCO. Klient Grazyna Dabrowska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => graza.dabrowska@gmail.com
    [test_mode] => 0
    [md5sum] => bdf3e95696e4dfeffc7d4332f5bfc39a
)



Check MD5: 1
OrderId 45204
===========================
Tpay order parameters
===========================
2023-05-28 11:55:15
ip: 91.193.208.188
Array
(
    [amount] => 167.58
    [crc] => 4c6f40ef0a0a2202b3027b88ff35e076
    [description] => Zamówienie YBZKSEDVO. Klient Martyna Kowalik
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132680&id_module=140&id_order=45204&key=3732db687eb8caea81633b331b94df9a&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45204
    [email] => martyna_kot@o2.pl
    [name] => Martyna Kowalik
    [phone] => 880879770
    [address] => Juliusza Słowackiego 32/4 
    [city] => Gliwice
    [zip] => 44-100
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 160
)



===========================
Basic payment notification
===========================
2023-05-28 11:57:09
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-971VKNX
    [tr_date] => 2023-05-28 11:57:08
    [tr_crc] => 4c6f40ef0a0a2202b3027b88ff35e076
    [tr_amount] => 167.58
    [tr_paid] => 167.58
    [tr_desc] => Zamówienie YBZKSEDVO. Klient Martyna Kowalik
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => martyna_kot@o2.pl
    [test_mode] => 0
    [md5sum] => 3c747e8d4e4216247eb20d13c6c32fc7
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 11:58:11
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-971VKNX
    [tr_date] => 2023-05-28 11:57:08
    [tr_crc] => 4c6f40ef0a0a2202b3027b88ff35e076
    [tr_amount] => 167.58
    [tr_paid] => 167.58
    [tr_desc] => Zamówienie YBZKSEDVO. Klient Martyna Kowalik
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => martyna_kot@o2.pl
    [test_mode] => 0
    [md5sum] => 3c747e8d4e4216247eb20d13c6c32fc7
)



Check MD5: 1
OrderId 45205
===========================
Tpay order parameters
===========================
2023-05-28 13:32:55
ip: 77.255.24.76
Array
(
    [amount] => 217.98
    [crc] => 3af0c4404aa6a7be2ba66bb2b33bc391
    [description] => Zamówienie PSAWHXLHZ. Klient Adam Choroszy
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132683&id_module=140&id_order=45205&key=99334bb42bc0e3907146bee68d629712&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45205
    [email] => adam_choroszy@wp.pl
    [name] => Adam Choroszy
    [phone] => 698488009
    [address] => Białowieska 105/16
    [city] => Wrocław
    [zip] => 54-234
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-05-28 13:32:55
ip: 77.255.24.76
Array
(
    [amount] => 217.98
    [crc] => 3af0c4404aa6a7be2ba66bb2b33bc391
    [description] => Zamówienie PSAWHXLHZ. Klient Adam Choroszy
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132683&id_module=140&id_order=45205&key=99334bb42bc0e3907146bee68d629712&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45205
    [email] => adam_choroszy@wp.pl
    [name] => Adam Choroszy
    [phone] => 698488009
    [address] => Białowieska 105/16
    [city] => Wrocław
    [zip] => 54-234
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 8fbd2cf0c7c0a76b78bb4e2d4462f519
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-05-28 13:32:56
ip: 77.255.24.76
Array
(
    [result] => 1
    [title] => TR-1CEN-972N9JX
    [amount] => 217.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-972N9JX&uid=01H1H240DRP5WH2PDN69SHC196
)



===========================
Blik request params
===========================
2023-05-28 13:32:56
ip: 77.255.24.76
Array
(
    [title] => TR-1CEN-972N9JX
    [code] => 580248
)



===========================
Blik response
===========================
2023-05-28 13:32:56
ip: 77.255.24.76
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-05-28 13:33:10
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-972N9JX
    [tr_date] => 2023-05-28 13:33:07
    [tr_crc] => 3af0c4404aa6a7be2ba66bb2b33bc391
    [tr_amount] => 217.98
    [tr_paid] => 217.98
    [tr_desc] => Zamówienie PSAWHXLHZ. Klient Adam Choroszy
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => adam_choroszy@wp.pl
    [test_mode] => 0
    [md5sum] => 6003952c95ffd6acd832d58916c846ae
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 13:34:11
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-972N9JX
    [tr_date] => 2023-05-28 13:33:07
    [tr_crc] => 3af0c4404aa6a7be2ba66bb2b33bc391
    [tr_amount] => 217.98
    [tr_paid] => 217.98
    [tr_desc] => Zamówienie PSAWHXLHZ. Klient Adam Choroszy
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => adam_choroszy@wp.pl
    [test_mode] => 0
    [md5sum] => 6003952c95ffd6acd832d58916c846ae
)



Check MD5: 1
OrderId 45206
===========================
Tpay order parameters
===========================
2023-05-28 13:48:09
ip: 83.21.22.193
Array
(
    [amount] => 167.58
    [crc] => 29d76728985a6af4107c7a857a123e13
    [description] => Zamówienie YWQVHTSZG. Klient Nina Jeż
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132685&id_module=140&id_order=45206&key=cfa5d8619785c4a3cb404ca783da1b5b&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45206
    [email] => ninaszymura@gmail.com
    [name] => Nina Jeż
    [phone] => 781283637
    [address] => Krośnieńska 2
    [city] => Nowy Zagór 
    [zip] => 66-600
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-05-28 13:48:09
ip: 83.21.22.193
Array
(
    [amount] => 167.58
    [crc] => 29d76728985a6af4107c7a857a123e13
    [description] => Zamówienie YWQVHTSZG. Klient Nina Jeż
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132685&id_module=140&id_order=45206&key=cfa5d8619785c4a3cb404ca783da1b5b&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45206
    [email] => ninaszymura@gmail.com
    [name] => Nina Jeż
    [phone] => 781283637
    [address] => Krośnieńska 2
    [city] => Nowy Zagór 
    [zip] => 66-600
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 05bc524fd51db9fb377348eb57c97772
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-05-28 13:48:09
ip: 83.21.22.193
Array
(
    [result] => 1
    [title] => TR-1CEN-972TB0X
    [amount] => 167.58
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-972TB0X&uid=01H1H2ZWMQBZPHZRN6HPFPR64E
)



===========================
Blik request params
===========================
2023-05-28 13:48:09
ip: 83.21.22.193
Array
(
    [title] => TR-1CEN-972TB0X
    [code] => 916523
)



===========================
Blik response
===========================
2023-05-28 13:48:10
ip: 83.21.22.193
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-05-28 13:48:24
ip: 46.29.19.106
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-972TB0X
    [tr_date] => 2023-05-28 13:48:21
    [tr_crc] => 29d76728985a6af4107c7a857a123e13
    [tr_amount] => 167.58
    [tr_paid] => 167.58
    [tr_desc] => Zamówienie YWQVHTSZG. Klient Nina Jeż
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => ninaszymura@gmail.com
    [test_mode] => 0
    [md5sum] => cc7371511d67cf639ee65529d9192d59
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 13:49:25
ip: 46.29.19.106
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-972TB0X
    [tr_date] => 2023-05-28 13:48:21
    [tr_crc] => 29d76728985a6af4107c7a857a123e13
    [tr_amount] => 167.58
    [tr_paid] => 167.58
    [tr_desc] => Zamówienie YWQVHTSZG. Klient Nina Jeż
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => ninaszymura@gmail.com
    [test_mode] => 0
    [md5sum] => cc7371511d67cf639ee65529d9192d59
)



Check MD5: 1
OrderId 45207
===========================
Tpay order parameters
===========================
2023-05-28 17:36:37
ip: 31.182.228.66
Array
(
    [amount] => 187.98
    [crc] => 7d6e9375e2ffe5e08365c39ee41fd541
    [description] => Zamówienie KANGWKMOR. Klient Jarosław Rogala
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132692&id_module=140&id_order=45207&key=1cf7bc100838d53bf46b2519b2076c15&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45207
    [email] => majka_1222@wp.pl
    [name] => Jarosław Rogala
    [phone] => 665922312
    [address] => Żeromskiego 11/14a
    [city] => Łódź
    [zip] => 90-711
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-05-28 17:36:37
ip: 31.182.228.66
Array
(
    [amount] => 187.98
    [crc] => 7d6e9375e2ffe5e08365c39ee41fd541
    [description] => Zamówienie KANGWKMOR. Klient Jarosław Rogala
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132692&id_module=140&id_order=45207&key=1cf7bc100838d53bf46b2519b2076c15&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45207
    [email] => majka_1222@wp.pl
    [name] => Jarosław Rogala
    [phone] => 665922312
    [address] => Żeromskiego 11/14a
    [city] => Łódź
    [zip] => 90-711
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 59aa9b6724052104c8ccca3a8e93eb76
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-05-28 17:36:37
ip: 31.182.228.66
Array
(
    [result] => 1
    [title] => TR-1CEN-974V0KX
    [amount] => 187.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-974V0KX&uid=01H1HG27AMMYZE7YEVRKB5RX45
)



===========================
Blik request params
===========================
2023-05-28 17:36:37
ip: 31.182.228.66
Array
(
    [title] => TR-1CEN-974V0KX
    [code] => 396191
)



===========================
Blik response
===========================
2023-05-28 17:36:38
ip: 31.182.228.66
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-05-28 17:36:46
ip: 46.29.19.106
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-974V0KX
    [tr_date] => 2023-05-28 17:36:43
    [tr_crc] => 7d6e9375e2ffe5e08365c39ee41fd541
    [tr_amount] => 187.98
    [tr_paid] => 187.98
    [tr_desc] => Zamówienie KANGWKMOR. Klient Jarosław Rogala
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => majka_1222@wp.pl
    [test_mode] => 0
    [md5sum] => f9c47fccab52652a035946560f2d1c2e
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 17:37:48
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-974V0KX
    [tr_date] => 2023-05-28 17:36:43
    [tr_crc] => 7d6e9375e2ffe5e08365c39ee41fd541
    [tr_amount] => 187.98
    [tr_paid] => 187.98
    [tr_desc] => Zamówienie KANGWKMOR. Klient Jarosław Rogala
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => majka_1222@wp.pl
    [test_mode] => 0
    [md5sum] => f9c47fccab52652a035946560f2d1c2e
)



Check MD5: 1
OrderId 45209
===========================
Tpay order parameters
===========================
2023-05-28 18:50:42
ip: 89.65.10.204
Array
(
    [amount] => 167.58
    [crc] => 8df31176c1b339a8fc10aebd7e8879fd
    [description] => Zamówienie HBVVYJDAK. Klient Olga Kozłowska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132698&id_module=140&id_order=45209&key=c34abca635d10a6032a11ac5b290df2e&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45209
    [email] => okozlow95@gmail.com
    [name] => Olga Kozłowska
    [phone] => 506623077
    [address] => Miedziana 12/9
    [city] => Szczecin
    [zip] => 71-636
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-05-28 18:50:42
ip: 89.65.10.204
Array
(
    [amount] => 167.58
    [crc] => 8df31176c1b339a8fc10aebd7e8879fd
    [description] => Zamówienie HBVVYJDAK. Klient Olga Kozłowska
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132698&id_module=140&id_order=45209&key=c34abca635d10a6032a11ac5b290df2e&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45209
    [email] => okozlow95@gmail.com
    [name] => Olga Kozłowska
    [phone] => 506623077
    [address] => Miedziana 12/9
    [city] => Szczecin
    [zip] => 71-636
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 4a3ce3e1e2738c2e03a55540b2acda62
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-05-28 18:50:42
ip: 89.65.10.204
Array
(
    [result] => 1
    [title] => TR-1CEN-975G8LX
    [amount] => 167.58
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-975G8LX&uid=01H1HM9WCTWR3D4E2ZY7DXNDJP
)



===========================
Blik request params
===========================
2023-05-28 18:50:42
ip: 89.65.10.204
Array
(
    [title] => TR-1CEN-975G8LX
    [code] => 620700
)



===========================
Blik response
===========================
2023-05-28 18:50:43
ip: 89.65.10.204
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-05-28 18:50:52
ip: 46.29.19.106
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-975G8LX
    [tr_date] => 2023-05-28 18:50:50
    [tr_crc] => 8df31176c1b339a8fc10aebd7e8879fd
    [tr_amount] => 167.58
    [tr_paid] => 167.58
    [tr_desc] => Zamówienie HBVVYJDAK. Klient Olga Kozłowska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => okozlow95@gmail.com
    [test_mode] => 0
    [md5sum] => 96ba456b234b8ca2d175092db4bc1bed
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 18:51:53
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-975G8LX
    [tr_date] => 2023-05-28 18:50:50
    [tr_crc] => 8df31176c1b339a8fc10aebd7e8879fd
    [tr_amount] => 167.58
    [tr_paid] => 167.58
    [tr_desc] => Zamówienie HBVVYJDAK. Klient Olga Kozłowska
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => okozlow95@gmail.com
    [test_mode] => 0
    [md5sum] => 96ba456b234b8ca2d175092db4bc1bed
)



Check MD5: 1
OrderId 45211
===========================
Tpay order parameters
===========================
2023-05-28 19:34:53
ip: 188.146.115.127
Array
(
    [amount] => 170.98
    [crc] => 3cca3b3f6799c54c27a38ae0ccf49218
    [description] => Zamówienie AFJQGLIXJ. Klient Aneta Stasiak
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132700&id_module=140&id_order=45211&key=e1f2c0558a454baf54330ead22aa9791&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45211
    [email] => anetastasiak93@gmail.com
    [name] => Aneta Stasiak
    [phone] => 603832842
    [address] => Załusin 38
    [city] => Bedlno
    [zip] => 99-311
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 108
)



===========================
Basic payment notification
===========================
2023-05-28 19:37:30
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-975UWHX
    [tr_date] => 2023-05-28 19:37:27
    [tr_crc] => 3cca3b3f6799c54c27a38ae0ccf49218
    [tr_amount] => 170.98
    [tr_paid] => 170.98
    [tr_desc] => Zamówienie AFJQGLIXJ. Klient Aneta Stasiak
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => anetastasiak93@gmail.com
    [test_mode] => 0
    [md5sum] => d57cb3735a4c6671270fda8c21556228
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 19:38:32
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-975UWHX
    [tr_date] => 2023-05-28 19:37:27
    [tr_crc] => 3cca3b3f6799c54c27a38ae0ccf49218
    [tr_amount] => 170.98
    [tr_paid] => 170.98
    [tr_desc] => Zamówienie AFJQGLIXJ. Klient Aneta Stasiak
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => anetastasiak93@gmail.com
    [test_mode] => 0
    [md5sum] => d57cb3735a4c6671270fda8c21556228
)



Check MD5: 1
OrderId 45212
===========================
Tpay order parameters
===========================
2023-05-28 19:57:39
ip: 80.54.39.66
Array
(
    [amount] => 167.58
    [crc] => bd9f01898de7b8b2ef05086d460bc682
    [description] => Zamówienie KEXXTIKZG. Klient Paweł Krasa
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132702&id_module=140&id_order=45212&key=772b9f2e3d75acb0ebb09e24bc6ee412&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45212
    [email] => pawel.krasa@yahoo.com
    [name] => Paweł Krasa
    [phone] => 530893892
    [address] => Powstanców Warszawy 77/34
    [city] => Lubartów
    [zip] => 21-100
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 110
)



===========================
Basic payment notification
===========================
2023-05-28 19:58:14
ip: 46.29.19.106
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9761R1X
    [tr_date] => 2023-05-28 19:58:11
    [tr_crc] => bd9f01898de7b8b2ef05086d460bc682
    [tr_amount] => 167.58
    [tr_paid] => 167.58
    [tr_desc] => Zamówienie KEXXTIKZG. Klient Paweł Krasa
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => pawel.krasa@yahoo.com
    [test_mode] => 0
    [md5sum] => bf28f4c64c55f4e0db9a440e974c4403
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 19:59:15
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-9761R1X
    [tr_date] => 2023-05-28 19:58:11
    [tr_crc] => bd9f01898de7b8b2ef05086d460bc682
    [tr_amount] => 167.58
    [tr_paid] => 167.58
    [tr_desc] => Zamówienie KEXXTIKZG. Klient Paweł Krasa
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => pawel.krasa@yahoo.com
    [test_mode] => 0
    [md5sum] => bf28f4c64c55f4e0db9a440e974c4403
)



Check MD5: 1
OrderId 45213
===========================
Tpay order parameters
===========================
2023-05-28 20:44:29
ip: 89.151.42.86
Array
(
    [amount] => 167.58
    [crc] => df84f716bde6e03b49f7f08d08dd4548
    [description] => Zamówienie XAIXTQAPG. Klient Maciej Janczak
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132706&id_module=140&id_order=45213&key=7625e334aba35a980fe772ac1f169295&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45213
    [email] => maciek.janczak@gmail.com
    [name] => Maciej Janczak
    [phone] => 794295591
    [address] => Kwiska 39/9
    [city] => Wrocław
    [zip] => 54-210
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-05-28 20:44:29
ip: 89.151.42.86
Array
(
    [amount] => 167.58
    [crc] => df84f716bde6e03b49f7f08d08dd4548
    [description] => Zamówienie XAIXTQAPG. Klient Maciej Janczak
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132706&id_module=140&id_order=45213&key=7625e334aba35a980fe772ac1f169295&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45213
    [email] => maciek.janczak@gmail.com
    [name] => Maciej Janczak
    [phone] => 794295591
    [address] => Kwiska 39/9
    [city] => Wrocław
    [zip] => 54-210
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => 79e8521f7d5551ccb001e8fa2e2cb8af
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-05-28 20:44:30
ip: 89.151.42.86
Array
(
    [result] => 1
    [title] => TR-1CEN-976D1PX
    [amount] => 167.58
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-976D1PX&uid=01H1HTT831FMMWH09NK54NNNP8
)



===========================
Blik request params
===========================
2023-05-28 20:44:30
ip: 89.151.42.86
Array
(
    [title] => TR-1CEN-976D1PX
    [code] => 875232
)



===========================
Blik response
===========================
2023-05-28 20:44:31
ip: 89.151.42.86
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-05-28 20:44:40
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-976D1PX
    [tr_date] => 2023-05-28 20:44:37
    [tr_crc] => df84f716bde6e03b49f7f08d08dd4548
    [tr_amount] => 167.58
    [tr_paid] => 167.58
    [tr_desc] => Zamówienie XAIXTQAPG. Klient Maciej Janczak
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => maciek.janczak@gmail.com
    [test_mode] => 0
    [md5sum] => 935d3a5eb6bfaa2b18a36c68b54922e8
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 20:45:41
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-976D1PX
    [tr_date] => 2023-05-28 20:44:37
    [tr_crc] => df84f716bde6e03b49f7f08d08dd4548
    [tr_amount] => 167.58
    [tr_paid] => 167.58
    [tr_desc] => Zamówienie XAIXTQAPG. Klient Maciej Janczak
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => maciek.janczak@gmail.com
    [test_mode] => 0
    [md5sum] => 935d3a5eb6bfaa2b18a36c68b54922e8
)



Check MD5: 1
OrderId 45214
===========================
Tpay order parameters
===========================
2023-05-28 21:01:20
ip: 46.205.136.66
Array
(
    [amount] => 162.48
    [crc] => 2420fc11eb52706bd3c804eb40818920
    [description] => Zamówienie SGHYMPACN. Klient Alicja Kaczmarczyk
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132707&id_module=140&id_order=45214&key=10c0d530a537a83e6ad48f3cf95e7789&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45214
    [email] => alinka1231@wp.pl
    [name] => Alicja Kaczmarczyk
    [phone] => 504776500
    [address] => Kościuszki 10/7
    [city] => Pasym
    [zip] => 12-130
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 132
)



===========================
Basic payment notification
===========================
2023-05-28 21:03:50
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-976GWMX
    [tr_date] => 2023-05-28 21:03:47
    [tr_crc] => 2420fc11eb52706bd3c804eb40818920
    [tr_amount] => 162.48
    [tr_paid] => 162.48
    [tr_desc] => Zamówienie SGHYMPACN. Klient Alicja Kaczmarczyk
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => alinka1231@wp.pl
    [test_mode] => 0
    [md5sum] => 28959eb9f5cf261c775f2bc6cefce9a6
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 21:04:52
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-976GWMX
    [tr_date] => 2023-05-28 21:03:47
    [tr_crc] => 2420fc11eb52706bd3c804eb40818920
    [tr_amount] => 162.48
    [tr_paid] => 162.48
    [tr_desc] => Zamówienie SGHYMPACN. Klient Alicja Kaczmarczyk
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => alinka1231@wp.pl
    [test_mode] => 0
    [md5sum] => 28959eb9f5cf261c775f2bc6cefce9a6
)



Check MD5: 1
OrderId 45215
===========================
Tpay order parameters
===========================
2023-05-28 21:31:04
ip: 5.173.129.16
Array
(
    [amount] => 187.98
    [crc] => 5dbc4d61b6a9c62a26af6eee7193c7d1
    [description] => Zamówienie DATPTTKAU. Klient Michał Nabereżny
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132708&id_module=140&id_order=45215&key=21c00e8a6924e75914bc3788e55e2966&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45215
    [email] => Michal.e93@interia.pl
    [name] => Michał Nabereżny
    [phone] => 884390972
    [address] => Wiejska 28
    [city] => Korsze
    [zip] => 11-430
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-05-28 21:31:04
ip: 5.173.129.16
Array
(
    [amount] => 187.98
    [crc] => 5dbc4d61b6a9c62a26af6eee7193c7d1
    [description] => Zamówienie DATPTTKAU. Klient Michał Nabereżny
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132708&id_module=140&id_order=45215&key=21c00e8a6924e75914bc3788e55e2966&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45215
    [email] => Michal.e93@interia.pl
    [name] => Michał Nabereżny
    [phone] => 884390972
    [address] => Wiejska 28
    [city] => Korsze
    [zip] => 11-430
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => be0b2d425830209206fd388e407b6edb
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-05-28 21:31:05
ip: 5.173.129.16
Array
(
    [result] => 1
    [title] => TR-1CEN-976PTRX
    [amount] => 187.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-976PTRX&uid=01H1HXFGXXKHHG87QF1ZGFZHAG
)



===========================
Blik request params
===========================
2023-05-28 21:31:05
ip: 5.173.129.16
Array
(
    [title] => TR-1CEN-976PTRX
    [code] => 708506
)



===========================
Blik response
===========================
2023-05-28 21:31:06
ip: 5.173.129.16
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-05-28 21:33:50
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-976PTRX
    [tr_date] => 2023-05-28 21:33:47
    [tr_crc] => 5dbc4d61b6a9c62a26af6eee7193c7d1
    [tr_amount] => 187.98
    [tr_paid] => 187.98
    [tr_desc] => Zamówienie DATPTTKAU. Klient Michał Nabereżny
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => Michal.e93@interia.pl
    [test_mode] => 0
    [md5sum] => 76913affc0663804f688f393b5f2039c
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 21:34:51
ip: 46.248.167.59
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-976PTRX
    [tr_date] => 2023-05-28 21:33:47
    [tr_crc] => 5dbc4d61b6a9c62a26af6eee7193c7d1
    [tr_amount] => 187.98
    [tr_paid] => 187.98
    [tr_desc] => Zamówienie DATPTTKAU. Klient Michał Nabereżny
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => Michal.e93@interia.pl
    [test_mode] => 0
    [md5sum] => 76913affc0663804f688f393b5f2039c
)



Check MD5: 1
OrderId 45216
===========================
Tpay order parameters
===========================
2023-05-28 22:47:38
ip: 46.205.214.162
Array
(
    [amount] => 167.58
    [crc] => 8205016036afa52ecfbe65fe320a48a7
    [description] => Zamówienie MEJLMHSPD. Klient Jagna Skorupka
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132714&id_module=140&id_order=45216&key=1c4c07e6f51dea41d777c7901d85cf44&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45216
    [email] => jagnaskorupka2@gmail.com
    [name] => Jagna Skorupka
    [phone] => 693648930
    [address] => Grunwaldzka 45
    [city] => Krobia
    [zip] => 63-840
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-05-28 22:47:38
ip: 46.205.214.162
Array
(
    [amount] => 167.58
    [crc] => 8205016036afa52ecfbe65fe320a48a7
    [description] => Zamówienie MEJLMHSPD. Klient Jagna Skorupka
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132714&id_module=140&id_order=45216&key=1c4c07e6f51dea41d777c7901d85cf44&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45216
    [email] => jagnaskorupka2@gmail.com
    [name] => Jagna Skorupka
    [phone] => 693648930
    [address] => Grunwaldzka 45
    [city] => Krobia
    [zip] => 63-840
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => e837fc664312fed49613e3701f7e6971
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-05-28 22:47:38
ip: 46.205.214.162
Array
(
    [result] => 1
    [title] => TR-1CEN-977657X
    [amount] => 167.58
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-977657X&uid=01H1J1VPZEKTV43EA7NP4YJYQW
)



===========================
Blik request params
===========================
2023-05-28 22:47:38
ip: 46.205.214.162
Array
(
    [title] => TR-1CEN-977657X
    [code] => 803084
)



===========================
Blik response
===========================
2023-05-28 22:47:39
ip: 46.205.214.162
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-05-28 22:48:03
ip: 46.29.19.106
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-977657X
    [tr_date] => 2023-05-28 22:47:59
    [tr_crc] => 8205016036afa52ecfbe65fe320a48a7
    [tr_amount] => 167.58
    [tr_paid] => 167.58
    [tr_desc] => Zamówienie MEJLMHSPD. Klient Jagna Skorupka
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => jagnaskorupka2@gmail.com
    [test_mode] => 0
    [md5sum] => e7e3e76bb35960a01204266953316b35
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 22:49:05
ip: 148.251.96.163
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-977657X
    [tr_date] => 2023-05-28 22:47:59
    [tr_crc] => 8205016036afa52ecfbe65fe320a48a7
    [tr_amount] => 167.58
    [tr_paid] => 167.58
    [tr_desc] => Zamówienie MEJLMHSPD. Klient Jagna Skorupka
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => jagnaskorupka2@gmail.com
    [test_mode] => 0
    [md5sum] => e7e3e76bb35960a01204266953316b35
)



Check MD5: 1
OrderId 45217
===========================
Tpay order parameters
===========================
2023-05-28 23:33:31
ip: 95.155.83.170
Array
(
    [amount] => 187.98
    [crc] => 5bf6dc667d42b6c9d395b12d1eb2481c
    [description] => Zamówienie ANHJOYNSQ. Klient Konrad Wilusz
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132716&id_module=140&id_order=45217&key=935fdc7b49d6238de5f5e8b642b02165&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45217
    [email] => kondziu456@gmail.com
    [name] => Konrad Wilusz
    [phone] => 535099833
    [address] => Ceglarska 23/20
    [city] => Kraków
    [zip] => 30-362
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
)



===========================
Transaction create request params
===========================
2023-05-28 23:33:31
ip: 95.155.83.170
Array
(
    [amount] => 187.98
    [crc] => 5bf6dc667d42b6c9d395b12d1eb2481c
    [description] => Zamówienie ANHJOYNSQ. Klient Konrad Wilusz
    [return_url] => https://paski-wybielajace.pl/index.php?controller=order-confirmation&id_cart=132716&id_module=140&id_order=45217&key=935fdc7b49d6238de5f5e8b642b02165&status=success
    [return_error_url] => https://paski-wybielajace.pl/module/tpay/order-error?orderId=45217
    [email] => kondziu456@gmail.com
    [name] => Konrad Wilusz
    [phone] => 535099833
    [address] => Ceglarska 23/20
    [city] => Kraków
    [zip] => 30-362
    [result_url] => https://paski-wybielajace.pl/module/tpay/confirmation?type=basic
    [module] => prestashop 1.7.7.1
    [accept_tos] => 1
    [result_email] => sklep@paski-wybielajace.pl
    [group] => 150
    [md5sum] => e7090259897dba1d08f708b42b9cf690
    [id] => 55382
)



===========================
Transaction create response
===========================
2023-05-28 23:33:32
ip: 95.155.83.170
Array
(
    [result] => 1
    [title] => TR-1CEN-977BU1X
    [amount] => 187.98
    [online] => 1
    [url] => https://secure.tpay.com/?gtitle=TR-1CEN-977BU1X&uid=01H1J4FR4X27CWQ4RP9J0S60HE
)



===========================
Blik request params
===========================
2023-05-28 23:33:32
ip: 95.155.83.170
Array
(
    [title] => TR-1CEN-977BU1X
    [code] => 852845
)



===========================
Blik response
===========================
2023-05-28 23:33:33
ip: 95.155.83.170
Array
(
    [result] => 1
)



===========================
Basic payment notification
===========================
2023-05-28 23:33:43
ip: 46.29.19.106
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-977BU1X
    [tr_date] => 2023-05-28 23:33:41
    [tr_crc] => 5bf6dc667d42b6c9d395b12d1eb2481c
    [tr_amount] => 187.98
    [tr_paid] => 187.98
    [tr_desc] => Zamówienie ANHJOYNSQ. Klient Konrad Wilusz
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => kondziu456@gmail.com
    [test_mode] => 0
    [md5sum] => 82c1492bc913227245e9c45b36242abd
)



Check MD5: 1
===========================
Basic payment notification
===========================
2023-05-28 23:34:45
ip: 178.32.201.77
POST params: 
Array
(
    [id] => 55382
    [tr_id] => TR-1CEN-977BU1X
    [tr_date] => 2023-05-28 23:33:41
    [tr_crc] => 5bf6dc667d42b6c9d395b12d1eb2481c
    [tr_amount] => 187.98
    [tr_paid] => 187.98
    [tr_desc] => Zamówienie ANHJOYNSQ. Klient Konrad Wilusz
    [tr_status] => TRUE
    [tr_error] => none
    [tr_email] => kondziu456@gmail.com
    [test_mode] => 0
    [md5sum] => 82c1492bc913227245e9c45b36242abd
)



Check MD5: 1