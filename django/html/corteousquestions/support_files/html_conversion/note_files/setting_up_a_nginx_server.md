58<br>
"<br>
   I'm trying out the Nginx web server instead of Apache because<br>
   I've been hearing a lot about how much easier it is to<br>
   configure, and that it's faster etc, etc. I can now say with<br>
   authority, that is not easier to configure, it's harder, but<br>
   it's a good harder, because makes you have more control about<br>
   what you're setting up. So, I'll leave here the server block<br>
   (Nginx version of Virtual Hosts), I made in 28/01/21, for a<br>
   a blog called 'Dazed and Confused':<br>
   &nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;<br>
   server {<br>
          # Notice that, unlike Apache, you can't have the same<br>
          # port for IPV4 and IPV6. So you'll have to comment it<br>
          # out.<br>
          listen 443 ssl;<br>
          # listen [::]: 443 ssl;<br>
  <br>
          root /var/www/constantconstipation.club/html/public/;<br>
          # Nginx serves what is described in the index files it<br>
          # finds on the pages. <br>
          index index.html index.htm index.nginx&nsbp;debian.html;<br>
  <br>
          server_name constantconstipation.club www.constantconstipation.club;<br>
  <br>
          location / {<br>
                  try_files $uri $uri/ =404;<br>
          }<br>
          # Nginx wasn't finding the blog folder content, nor it's<br>
          # css structure. So I inserted the 'try_files', and it<br>
          # worked. The line's meaning is this:<br>
          # 'Checks the existence of files in the specified order<br>
          # and uses the first found file for request processing;<br>
          # the processing is performed in the current context.<br>
          # [...]<br>
          # If none of the files were found, an internal redirect<br>
          # to the uri specified in the last parameter is made.'<br>
          location /blogs/ {<br>
                  try_files $uri $uri/ =404;<br>
          }<br>
  <br>
          # This is what is requested for ssl connection. Mind you,<br>
          # this configuration is being used because, I already had<br>
          # the certbot certificate and needed to change it from an<br>
          # Apache server to Nginx. Probably if you download a<br>
          # certbot version for Nginx, it will do all this<br>
          # configuration for you. But if it doesn't, you can<br>
          # copy/paste from the third row onward and it will run.<br>
          # NOTE: in the last field, 'XSS&nsbp;Protection', I had to change<br>
          # the double quotes that were to apostrophes, or mysql would<br>
          # respond with an error. If you have any problems, just put<br>
          # double quotes in it.<br>
          ssl_certificate     /etc/letsencrypt/live/constantconstipation.club/fullchain.pem;<br>
          ssl_certificate_key /etc/letsencrypt/live/constantconstipation.club/privkey.pem;<br>
          ssl_protocols TLSv1.2;<br>
          ssl_prefer_server_ciphers on;<br>
          ssl_ciphers ECDHE&nsbp;RSA&nsbp;AES256&nsbp;GCM&nsbp;SHA512:DHE&nsbp;RSA&nsbp;AES256&nsbp;GCM&nsbp;SHA512:ECDHE&nsbp;RSA&nsbp;AES256&nsbp;GCM&nsbp;SHA384:DHE&nsbp;RSA&nsbp;AES256&nsbp;GCM&nsbp;SHA384:ECDHE&nsbp;RSA&nsbp;AES256&nsbp;SHA384;<br>
          ssl_ecdh_curve secp384r1; # Requires nginx >= 1.1.0<br>
          ssl_session_timeout  10m;<br>
          ssl_session_cache shared:SSL:10m;<br>
          ssl_session_tickets off; # Requires nginx >= 1.5.9<br>
          ssl_stapling on; # Requires nginx >= 1.3.7<br>
          ssl_stapling_verify on; # Requires nginx => 1.3.7<br>
          resolver 8.8.8.8 8.8.4.4 valid=300s;<br>
          resolver_timeout 5s;<br>
          add_header X&nsbp;Frame&nsbp;Options DENY;<br>
          add_header X&nsbp;Content&nsbp;Type&nsbp;Options nosniff;<br>
          add_header X&nsbp;XSS&nsbp;Protection '1; mode=block';<br>
   }<br>
   &nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;<br>
   The whole process: https://do.co/3t7zmIr<br>
   "