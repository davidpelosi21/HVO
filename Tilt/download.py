import requests
import shutil
import os
import time

shutil.rmtree("/var/www/html/Tilt/Download")
os.mkdir("/var/www/html/Tilt/Download")

m =int(time.strftime('%m'))
d =int(time.strftime('%d'))

shutil.copy("/var/www/html/Tilt/ROOT/TILT.root",time.strftime('/var/www/html/Tilt/Download/Tilt_'+str(m)+'-'+str(d)+'-'+'%Y.root'))
