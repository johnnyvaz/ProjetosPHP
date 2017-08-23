#!/bin/bash
#Faça um algoritmo que receba a nota de 20 alunos, e depois mostre a
#quantidade de alunos aprovados e a quantidade de alunos reprovados
ap=0
rep=0
cont=0
i=0
while [ $i -lt 5 ]
do
#echo "Digite o nome do Aluno"; read $nome
echo "Digite a nota" ; read $nota
echo "teste" $nota
if [ $nota -gt 6 ]
then
    echo "Aluno Aprovado"
    ap=$(($ap+1))
    echo "aprovados= " $ap
else
    echo "Aluno reprovado"
    rep=$(($rep+1))
    echo "reprovados= " $rep
fi
cont=$((i+1))
done
