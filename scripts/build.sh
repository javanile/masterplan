#!/bin/bash

[[ -d vendor ]] && mv vendor vendor.tmp
[[ -f composer.lock ]] && mv composer.lock composer.lock.tmp

composer install --no-ansi --no-dev --no-interaction \
                 --no-progress --no-scripts --optimize-autoloader

box build

[[ -d vendor.tmp ]] && mv vendor.tmp vendor
[[ -f composer.lock.tmp ]] && mv composer.lock.tmp composer.lock
