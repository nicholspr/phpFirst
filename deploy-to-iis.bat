@echo off
echo Deploying PHP website to IIS...
robocopy "c:\DATA\GIT\PythonFirst\phpFirst" "C:\inetpub\wwwroot\phpFirst" *.php *.css *.html *.js *.md /s /e /xd .git .vscode
echo.
echo ✅ Deployment complete!
echo 🌐 Visit: http://localhost/phpFirst/
pause