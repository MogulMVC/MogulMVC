#!/bin/bash

$css_root="/mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ CSS"
$icons_root="/mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ Icons"
$js_root="/mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ JS"
$mvc_root="/mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ MVC/Framework"

#CSS
cd $css_root
./make
rm $mvc_root/framework/lib/css/core/M*
cp $css_root/bin/* $mvc_root/framework/lib/css/core/

#Icons
cd $icons_root
./make
rm $mvc_root/framework/img/icon/*
cp $icons_rootimg/* $mvc_root/framework/img/icon/
#rm $mvc_root/framework/lib/css/core/MIcons*
cp $icons_rootbin/* $mvc_root/framework/lib/css/core/

#JS
cd $js_root
./make
rm $mvc_root/framework/lib/js/core/M*
cp $js_rootbin/* $mvc_root/framework/lib/js/core/