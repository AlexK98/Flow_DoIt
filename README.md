# Toko.Doit

## About
This is ludicrously simple ToDo application based on Neos/Flow framework.

## Installation
```bash
composer require toko/doit
```

## First steps
- Make sure "Flow" framework is setup properly.

- Update migrations by executing
```bash
flow doctrine:migrationgenerate
```
and
```bash
flow doctrine:migrate
```
- Add the following to global **Configuration\Settings.yaml**:
```yaml
Neos:
  Flow:
    mvc:
      routes:
        'Toko.Doit': TRUE
```

- Access Toko.Doit package by visiting: http://your_site/doit
