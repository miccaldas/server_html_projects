701<br>
<br>
 To guarantee that the installation of Vim comes<br>
 with clipboard and python3 support, do this:<br>
 &nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;<br>
 1 &nsbp; Install gtk4.<br>
    1.1 &nsbp; Ubuntu: libgtk&nsbp;4&nsbp;dev<br>
    1.2 &nsbp; Arch: gtk4<br>
 2 &nsbp; Configure with the following flags:<br>
    ./configure &nsbp;&nsbp;with&nsbp;features=huge \<br>
            &nsbp;&nsbp;enable&nsbp;multibyte \<br>
            &nsbp;&nsbp;enable&nsbp;python3interp=yes \<br>
            &nsbp;&nsbp;with&nsbp;python3&nsbp;config&nsbp;dir=/usr/bin/python3&nsbp;config \<br>
            &nsbp;&nsbp;enable&nsbp;gui=gtk4 \<br>
            &nsbp;&nsbp;enable&nsbp;cscope \<br>
            &nsbp;&nsbp;enable&nsbp;fail&nsbp;if&nsbp;missing \<br>
            &nsbp;&nsbp;prefix=/usr<br>
 &nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;