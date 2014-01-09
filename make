#!/bin/bash

mkdir temp

git clone https://github.com/MogulMVC/MogulCSS.git temp/css

git clone https://github.com/MogulMVC/MogulJS.git temp/js

rm frontend/framework/css/core/M*
mv temp/css/bin/M* frontend/framework/css/core/

rm frontend/framework/js/core/M*
mv temp/js/bin/M* frontend/framework/js/core/

rm -rf temp
