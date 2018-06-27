Example Magneto Store
=====================

Setup instructions
------------------
1.  Copy the `auth.json.backup` to `auth.json` and fill it with your Magneto public and private keys
2.  Start all the Docker containers by running the command `docker-compose up`
3.  Enter the container running Magento by running `./magento-bash`
4.  When inside the container run the pre-install script `preinstall`, you might have to run `composer install`
5.  Open `localhost` in your browser and click `Agree and Setup Magento`
6.  The `Step 1: Readiness Check` should succeed, click `Next`
7.  In `Step 2: Add a Database`, set the database server host to `database`, username and password both to `root`, click next
8.  In `Step 3: Web Configuration`, set the Magento Admin address to `admin` by trimming the suffix, click next
9.  You can leave fields `Step 4: Customize Your Store` as it is and click next
10. In `Step 5: Create Admin Account` fill the fields for the new admin, click next
11. On reaching `Step 6: Install` click `Install Now`
