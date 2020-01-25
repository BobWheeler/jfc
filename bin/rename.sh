#!/bin/bash

if [ $# -ne 1 ]; then echo usage $0 filename; exit 0; fi

if grep -iq 'twenty[ _-]\?sixteen' $1 ; then
    echo changing file $1
    gsed -e 's/twenty[ _-]\?sixteen/jfc/g' -e  's/Twenty[ _-]\?Sixteen/JFC/g' "$1" > "$1.new"
    mv "$1.new" "$1"
fi

