# Sagg.in Current Problems and Recent fixes

### Curent Problems
1. Users can spam reload on ~/projects/project2/project2.php
  1a. This is because of the script has no way to know if the server is already up
2. People can't stop the server without being op
**Solution**
Use https://github.com/xPaw/PHP-Minecraft-Query to ping the server. Have a loop that ends if noone is online and will kill the server with the quit server method in ~/projects/project2/lib/startserver.php

