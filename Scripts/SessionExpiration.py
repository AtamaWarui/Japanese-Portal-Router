import os, time, sys

path = r"/var/www/html/Homepage/"

now = time.time()

for f in os.listdir(path):

 f = os.path.join(path, f)
 if os.stat(f).st_mtime < now - 3600:

  if os.path.isfile(f) and f.endswith(".dat"):

   os.remove(os.path.join(path, f))

