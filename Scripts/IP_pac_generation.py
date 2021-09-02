#!/usr/bin/env python

#define the path where to create and store the pac file
f=open('/var/www/html/IPaddress.pac','w')

#get the network information of the PI
import socket

#get the IP address of PI by pinging Google DNS
#print(commands.getoutput('hostname -I'))
def get_ip_address():
 ip_address = '';
 s = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)
 s.connect(("8.8.8.8",80))
 ip_address = s.getsockname()[0]
 s.close()
 return ip_address
output=get_ip_address()
test=get_ip_address();

#generate and stores the .pac file having IP address (output) of the PI at predefined place
#define the domain names you want only pass through Proxyserver
#pac file set to use the PI as a proxy for .sjp domains
f.write('''var FindProxyForURL = function(init, profiles) {
    return function(url, host) {
        "use strict";
        var result = init, scheme = url.substr(0, url.indexOf(":"));
        do {
            result = profiles[result];
            if (typeof result === "function") result = result(url, host, scheme);
        } while (typeof result !== "string" || result.charCodeAt(0) === 43);
        return result;
    };
}("+auto switch", {
    "+auto switch": function(url, host, scheme) {
        "use strict";
        if (/(?:^|\.)ipdream-yume\.sjp$/.test(host)) return "+proxy";
        if (/^internal\.example\.com$/.test(host)) return "DIRECT";
        if (/(?:^|\.)sjp$/.test(host)) return "+proxy";
        if (/(?:^|\.)sjp$/.test(host)) return "+proxy";
        return "DIRECT";
    },
    "+proxy": function(url, host, scheme) {
        "use strict";
        if (/^127\.0\.0\.1$/.test(host) || /^::1$/.test(host) || /^localhost$/.test(host)) return "DIRECT";
        switch (scheme) {
          case "http":
            return "PROXY ''' + output + ''':3128";

          case "https":
            return "HTTPS '''+ output +''':3128";

        case "ftp":
            return "SOCKS5 '''+ output +''':3128; SOCKS'''+ output +''':3128";

          default:
            return "PROXY '''+ output +''':3128";
        }
    }
});''')

f.close()
