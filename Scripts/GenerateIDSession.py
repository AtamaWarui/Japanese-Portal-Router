#!/usr/bin/env python
import random
d = 0
#random.sample(range(500, 510), 9)
#print(random.randint(1,101))
d = str(random.randint(1,101))
#Open a text file and append a random ID to it
print d
with open('/var/www/html/Scripts/out.log', 'a') as f:
    f.write(d)
    # some work
    #s = 'OK.'
    #f.write(s)
    #f.write('\n')

# some other work
#with open('out.log', 'a') as f:
    #f.write('done\n')

