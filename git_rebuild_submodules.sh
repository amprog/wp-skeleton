#!/bin/sh

set -e

git config -f .gitmodules --get-regexp '^submodule\..*\.path$' |
    while read path_key path
    do
        if [ -e .git/modules/$path ] ; then
            echo "Module $path already registered"
        else
            rm -rf $path
            url_key=$(echo $path_key | sed 's/\.path/.url/')
            url=$(git config -f .gitmodules --get "$url_key")
            echo "path: $path ; url_key $url_key ; url $url ; path_key $path_key"
            git submodule add $url $path
        fi
    done
