101<br>
<br>
 """<br>
 To add an app, do the following:<br>
 &nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;<br>
 vi /etc/ufw/applications.d/nginx.ini<br>
 Place this inside file<br>
<br>
 [Nginx HTTP]<br>
 title=Web Server <br>
 description=Enable NGINX HTTP traffic<br>
 ports=80/tcp<br>
<br>
 [Nginx HTTPS] \<br>
 title=Web Server (HTTPS) \<br>
 description=Enable NGINX HTTPS traffic<br>
 ports=443/tcp<br>
<br>
 [Nginx Full]<br>
 title=Web Server (HTTP,HTTPS)<br>
 description=Enable NGINX HTTP and HTTPS traffic<br>
 ports=80,443/tcp<br>
 &nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;<br>
 """