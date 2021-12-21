5<br>
<br>
Append date to a file name:<br>
echo 'export now=$(date +"%m_%d_%Y")' >> /home/mic/.zshenv<br>
source /home/mic/.zshenv<br>
touch ~/log&nsbp;$now.log<br>
