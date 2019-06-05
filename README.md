# Toko.Doit

## About
This is ludicrously simple ToDo application based on Neos/Flow framework.

## Installation
composer require toko/doit

## First steps
- Make sure "Flow" framework is setup properly.
- Update migrations by executing "php flow doctrine:update".
- Copy "Routes.yaml" to root "Configuration" folder.

- Package routing is configured for access from the ROOT of your host/site, 
  so make sure no other installed package is configured to use same routes,
  otherwise reconfigure routing to your taste.
