#!/bin/sh
echo "Putting site into maintenance mode."
drush vset maintenance_mode 1

echo "Attempting to create backup with Backup and Migrate."
drush bam-backup

echo "Making copies of .htaccess and robots.txt"
cp .htaccess .htacess.temp
cp robots.txt robots.txt.tmp

echo "Updating Drupal Core"
drush -y pm-update drupal
echo "Restoring original .htaccess and robots.txt files."
cp .htacess.temp .htaccess
cp robots.txt.tmp robots.txt

echo "Removing copies of .htaccess and robots.txt."
rm .htacess.temp
rm robots.txt.tmp

echo "Clearing all caches"
drush cc all

echo "Running Drupal cron"
drush cron

echo "Taking site out of maintenance mode."
drush vset maintenance_mode 0
