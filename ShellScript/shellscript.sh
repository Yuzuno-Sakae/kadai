#!/bin/sh

hour=`date "+%H"`

# 午前
if [ $hour -lt "12" ]; then
  ls -la > list.txt
# 午後
elif [ $hour -ge "12" ]; then
  date '+%Y年%m月%d日%H時%M分'

fi
