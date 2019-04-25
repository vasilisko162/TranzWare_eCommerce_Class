

# TranzWare eCommerce Class
Compassplus: TranzWare eCommerce

## Информация
* version: 0.0.5
* date: 25.04.2019

### Подключение

* Подключение класса
```php
include('class/eCommerce.class');
```
* Подключение конфигурационного файла
```php
include('config/config.php');
```
* Вызов класса **eCommerce**
```php
$exec = new eCommerce($config);
```

### Настройка конфигурационного файла
За основу конфигурационного файла можно взять файл `config.example.php`.

|переменная|значение|
| --- | ----- |
|url| адрес для выполнения запроса|
|merchantid| ID мерчанта (торговца)|
|area| Где выполняется скрипт, в боевой или тестовой среде. Значения: development / production. По умолчанию: development|
|logShow| Показывать логи. TRUE / FALSE ,|
|logCurl| Как показывать логи Curl. standart / full. По умолчанию: standart|
|data| Формат возврата данных. json / text. По умолчанию: json|
|curl_referer| Страница, откуда идет запрос|
|curl_Ssl| Использовать сертификат при отправке запроса. TRUE / FALSE |
|dirCert| Ссылка до сертификата|


### Операции


#### Создание заказа на покупку (Purchase)
Вызов:
```php
$result = $exec->exec_GetOrderStatus($array);
```
|переменная|значение|пример|
| --- | ----- | ----- |
|amount| Сумма в формате|517.42|
|currency|Валюта|810|
|description|Описание заказа|Покупка телефона|
|approveurl|Адрес возврата с платежной страницу в случае удачного платежа|https://my.site?staus=approve|
|cancelurl|Адрес возврата с платежной страницу в случае отмена платежа|https://my.site?staus=cancel|
|declineurl|Адрес возврата с платежной страницу в случае неудачного платежа|https://my.site?staus=decline|

Ответ:
```json
{
  "status":"accept",
  "data":{
    "URL":"https://bank.site/index.jsp",
    "OrderID":"123",
    "SessionID":"456",
    "urlFull":"https://bank.site/index.jsp?OrderID=123&SessionID=456"
  },
  "operation":"CreateOrder",
  "log":"some log"
}
```

#### Создание заказа на покупку квази-наличных (QuasiCash)
Вызов:
```php
$result = $exec->exec_QuasiCash($array);
```
|переменная|значение|пример|
| --- | ----- | ----- |
|amount| Сумма в формате|517.42|
|currency|Валюта|810|
|description|Описание заказа|Покупка телефона|
|approveurl|Адрес возврата с платежной страницу в случае удачного платежа|https://my.site?staus=approve|
|cancelurl|Адрес возврата с платежной страницу в случае отмена платежа|https://my.site?staus=cancel|
|declineurl|Адрес возврата с платежной страницу в случае неудачного платежа|https://my.site?staus=decline|
|OrigAmount| |может быть пустым|
|OrigCurrency| |может быть пустым|

Ответ:
```json
{
  "status":"accept",
  "data":{
    "URL":"https://bank.site/index.jsp",
    "OrderID":"123",
    "SessionID":"456",
    "urlFull":"https://bank.site/index.jsp?OrderID=123&SessionID=456"
  },
  "operation":"CreateOrder",
  "log":"some log"
}
```


#### Получение статуса заказа (GetOrderStatus)
Вызов:
```php
$result = $exec->exec_GetOrderStatus($array);
```
|переменная|значение|пример|
| --- | ----- | ----- |
|OrderID|ID заказа, полученный от Банка|123|
|SessionID|ID сессии, полученный от Банка|456|


Ответ:
```json
{
  "status":"accept",
  "data":{
    "OrderID":"176",
    "OrderStatus":"EXPIRED"
  },
  "operation":"GetOrderStatus",
  "log":"some log"
}
```