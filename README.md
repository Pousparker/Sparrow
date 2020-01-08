# Sparrow
It's a teacher and student commenting blog
# Preview
![alt text](http://s7.picofile.com/file/8384287526/localhost_Public_html_host_public_home_index_3_.png "home page")
# Specifications
* Two levels of access(teacher&student)
- Create profile, Edit profile
+ Send photo with caption
* Delete,update post
- Send commnet
+ etc ...
# Useit
First install Composer and update for projects
```
#!/bin/sh

EXPECTED_SIGNATURE="$(wget -q -O - https://composer.github.io/installer.sig)"
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
ACTUAL_SIGNATURE="$(php -r "echo hash_file('sha384', 'composer-setup.php');")"

if [ "$EXPECTED_SIGNATURE" != "$ACTUAL_SIGNATURE" ]
then
    >&2 echo 'ERROR: Invalid installer signature'
    rm composer-setup.php
    exit 1
fi

php composer-setup.php --quiet
RESULT=$?
rm composer-setup.php
exit $RESULT
```
