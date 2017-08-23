#!/bin/bash
#echo "Digite um valor"; read $valor
a=0
b=1
for i in {10..0}
do 
c=$(($a+$b))
a=$b
b=$c
echo $a
done

