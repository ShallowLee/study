#COOKIES和SESSION

##$cookies
>是记录在客户端浏览器的一段数据，在每次发送请求的时候，$cookies都会跟着请求发送到服务端。

php设置cookies

`setcookie(cookies名称, cookies值, 过期时间);`

php读取cookies

`$_COOKIE[cookies名称]`

##$_session
>记录在服务器端的一段数据，在每次session_start()的时候，可以获取或修改$_SESSION的值

