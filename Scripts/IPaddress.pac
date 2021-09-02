var FindProxyForURL = function(init, profiles) {
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
            return "PROXY 192.168.0.103:3128";

          case "https":
            return "HTTPS 192.168.0.103:3128";

        case "ftp":
            return "SOCKS5 192.168.0.103:3128; SOCKS192.168.0.103:3128";

          default:
            return "PROXY 192.168.0.103:3128";
        }
    }
});