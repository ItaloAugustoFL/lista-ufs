<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Sintética de UFs</title>
    </head>

<body>
    <?php 
    //Criação do Array puro sem dados
  $ufs = [
    'Acre' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Alagoas' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Amapá' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Amazonas' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Bahia' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Ceará' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Distrito Federal' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Espírito Santo' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Goiás' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Maranhão' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Mato Grosso' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Mato Grosso do Sul' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Minas Gerais' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Pará' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Paraíba' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Paraná' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Pernambuco' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Piauí' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Rio de Janeiro' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Rio Grande do Norte' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Rio Grande do Sul' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Rondônia' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Roraima' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Santa Catarina' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'São Paulo' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Sergipe' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ],
    'Tocantis' => [
        'Bandeira' =>'',
        'Unidade Federativa' => '',
        'Abreviação' => '',
        'Sede do Governo' => '',
        'Área' => '',
        'População' => '',
        'Densidade' => '',
        'PIB (2015)' => '',
        '(% total) (2015)' => '',
        'PIB per capita (R$) (2015)' => '',
        'IDH (2010)' => '',
        'Alfabetização (2016)' => '',
        'Mortalidade Infantil (2016)' => '',
        'Expectativa de Vida (2016)' => ''
    ]
];