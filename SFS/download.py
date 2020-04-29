import requests
import shutil
import os
import time

shutil.rmtree("/var/www/html/SFS/Download")
os.mkdir("/var/www/html/SFS/Download")
m =int(time.strftime('%m'))
d =int(time.strftime('%d'))

shutil.copy("/var/www/html/SSN/ROOT/SSN.root",time.strftime('/var/www/html/SSN/Download/SFS_'+str(m)+'-'+str(d)+'-'+'%Y.root'))

shutil.copy("/var/www/html/SFS/ROOT/SFS.root",time.strftime('/var/www/html/SFS/Download/SFS_'+str(m)+'-'+str(d)+'-'+'%Y.root'))
