import json
import urllib.request
url = "http://127.0.0.1:812/HelpPage.php"
x = urllib.request.urlopen(url)
raw_data = x.read()
encoding = x.info().get_content_charset('utf8')  # JSON default
print(raw_data)   #this is data in string format
data = json.loads(raw_data.decode(encoding))
print(data)   #this would be your json data

