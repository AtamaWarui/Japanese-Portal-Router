# PortalRouter-Japanese.github.io
An example of portal router in Japanese with a secured structure <br />
After following the exact instructions on Debian OS "Raspberry pi"
You can access it to the portal two ways - by physically connecting to the Portal using an Ethernet cable or over WiFi.
Once you are connected to the Portal please type either the suggested IP address or it's domain name in your favorite web browser (Chrome, Safari, FireFox, Internet Explorer, etc.).


ID : id <br />
PWD : password <br />


Portal structure <br />
1- Modifying the default Apache *DocumentRoot* directory in Debian OS to one of the main directories. <br />
2- Creating a session id at the authentication that we store it in a cookie which expires after a certain time almost ~ 30 minutes, after a successful authentication we stored it again in a text file and we use it afterward for verification to aceess the other php pages. <br />
3- ID and password stored in the hash format to secure more the credentials. <br />
4- Using different functions such as implode function to pass the arguments between the php files. <br />



![alt text](https://github.com/MoonJanah/PortalExample-Japanese.github.io/blob/main/WebPortal-Japanese-Example-1.png?raw=true)
