#!/bin/bash
LOCKDIR="/srv/FIICode/gitlock"

if mkdir $LOCKDIR
then
    echo "Acquired lock"
    
    cd /srv/FIICode/
    git fetch
    git merge origin/dev --no-edit
    chown :devs . -R --quiet
    chmod 774 . -R --quiet

    if rmdir $LOCKDIR
    then
        echo "Removed lock"
    else
        echo "Could not remove lock dir" >&2
    fi
fi

