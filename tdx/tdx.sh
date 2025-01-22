#!/bin/sh

sed -i "s|\${DOMAIN}|$DOMAIN|g" /go/.tdx_db/config.json
sed -i "s|\${SERVER}|$SERVER|g" /go/.tdx_db/config.json

exec /go/bin/tdx/tdx "$@"
