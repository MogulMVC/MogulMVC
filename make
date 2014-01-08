#!/bin/bash

mkdir temp

git clone https://github.com/MogulMVC/MogulCSS.git temp/css

git clone https://github.com/MogulMVC/MogulIcons.git temp/icons

git clone https://github.com/MogulMVC/MogulJS.git temp/js

rm frontend/framework/css/core/M*
mv temp/css/bin/M* frontend/framework/css/core/

rm frontend/framework/img/icon/*
mv temp/icons/bin/M* frontend/framework/css/core/
mv temp/icons/img/* frontend/framework/img/icon/

rm frontend/framework/js/core/M*
mv temp/js/bin/M* frontend/framework/js/core/

rm -rf temp

tar cfvz versions/1.0.0.tar.gz backend/ frontend/ .bowerrc .htaccess bower.json composer.json
