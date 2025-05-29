# TYPO3 CMS Base Distribution

###### mkdir my_project && cd my_project

###### ddev config --php-version 8.4 --docroot public --project-type typo3

###### ddev start

###### ddev composer create "typo3/cms-base-distribution:^13"

ddev exec ./vendor/bin/typo3 setup \
  --admin-user-password=password \
  --create-site=https://sitename.ddev.site/ \
  --project-name=PROJECTNAME \
  --server-type=other \
  --driver=mysqli \
  --username=db \
  --password=mypassword \
  --dbname=db \
  --host=db \
  --port=3306 \
  --force \
  --admin-username=admin \
  --admin-email=example@email.com

###### ddev start

###### ddev describe

###### cd packages
###### mkdir package_name && cd package_name
###### composer init

{
	Package name (<vendor>/<name>) [aaaa/aaaa_package]:
	Description []:
	Author [your name <your email>, n to skip]: 
	Minimum Stability []: 
	Package Type (e.g. library, project, metapackage, composer-plugin) []: typo3-cms-extension
	License []: 
	Define your dependencies.
	Would you like to define your dependencies (require) interactively [yes]? 
	Search for a package: 
	Would you like to define your dev dependencies (require-dev) interactively [yes]? 
	Search for a package: 
	Add PSR-4 autoload mapping? Maps namespace "vendor\PackageName" to the entered relative path. [src/, n to skip]: Classes/
}

###### composer dump-autoload       (to ensure PHP can find and load classes correctly &  Registers new PSR-4 namespaces you defined)

###### composer config repositories.package_name path packages/package_name

###### composer require vendor/package_name:"@dev"

###### ddev exec ./vendor/bin/typo3 cache:flush


## License

GPL-2.0 or later
