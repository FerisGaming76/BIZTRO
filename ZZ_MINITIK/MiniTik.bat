Taskkill /IM php.exe /F
for /f "tokens=14" %%a in ('ipconfig ^| findstr IPv4') do set _IPaddr=%%a
echo IP pc: %_IPaddr%
IF "%_IPaddr%"=="" (
start /min php.exe -S 127.0.0.1:8080 -t minitik
start http://127.0.0.1:8080
) ELSE (
start /min php.exe -S %_IPaddr%:80 -t minitik
start http://%_IPaddr%:80
)
exit