#!/bin/bash

git fetch
git merge origin/dev --no-edit
chown :devs . -R
chmod 774 . -R