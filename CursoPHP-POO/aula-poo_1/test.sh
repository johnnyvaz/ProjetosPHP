#!/bin/bash
nota=4
if [ $nota -gt 6 ]
then
    echo "Aluno Aprovado"
    ap=$(($ap+1))
    echo "aprovados= " $ap
else
    echo "Aluno reprovado"
    rep=$(($rep+1))
    echo "aprovados= " $rep
fi
