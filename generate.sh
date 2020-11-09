#!/bin/bash

DIR=$(readlink -f $(dirname "${BASH_SOURCE[0]}"))

cd "${DIR}"
staticjinja build
jekyll build
jekyll serve
