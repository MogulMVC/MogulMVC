#!/bin/bash

#CSS
cd /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ CSS/
./make
rm /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ MVC/Framework/front/framework/css/core/M*
cp /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ CSS/bin/* /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ MVC/Framework/front/framework/css/core/

#Icons
cd /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ Icons/
./make
rm /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ MVC/Framework/front/framework/img/icon/*
cp /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ Icons/img/* /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ MVC/Framework/front/framework/img/icon/
#rm /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ MVC/Framework/framework/lib/css/core/MIcons*
cp /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ Icons/bin/* /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ MVC/Framework/front/framework/css/core/

#JS
cd /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ JS/
./make
rm /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ MVC/Framework/front/framework/js/core/M*
cp /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ JS/bin/* /mnt/documents-smb/Alan\'s\ Server/Projects/Software/Web/Mogul\ Frameworks/Mogul\ MVC/Framework/front/framework/js/core/