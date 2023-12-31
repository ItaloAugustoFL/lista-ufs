<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Sintética de UFs</title>
    <!-- Estilo da tabela -->
    <style>
    table {
        border-collapse: collapse;
        text-align: center;
    }

    /* tr {
        border-left: 1px solid #000;
    } */
    </style>
</head>

<body>
    <?php
  $ufs = [
    'Acre' => [
        'Bandeira' =>'https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg',
        'Unidade Federativa' => 'Acre',
        'Abreviação' => 'AC',
        'Sede do Governo' => 'Rio Branco',
        'Área' => '164 122,2',
        'População' => '795145',
        'Densidade' => '4,30',
        'PIB (2015)' => '13622000',
        '(% total) (2015)' => '0,2',
        'PIB per capita (R$) (2015)' => '16 953,46',
        'IDH (2010)' => '0,663',
        'Alfabetização (2016)' => '86,9%',
        'Mortalidade Infantil (2016)' => '17,0‰',
        'Expectativa de Vida (2016)' => '73,9 anos'
    ], 
    'Alagoas' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg',
        'Unidade Federativa' => 'Alagoas',
        'Abreviação' => 'AL',
        'Sede do Governo' => 'Maceió',
        'Área' => '27 767,7',
        'População' => '3327551',
        'Densidade' => '108,61',
        'PIB (2015)' => '46364000',
        '(% total) (2015)' => '0,8',
        'PIB per capita (R$) (2015)' => '13 877,53',
        'IDH (2010)' => '0,631',
        'Alfabetização (2016)' => '80,6%',
        'Mortalidade Infantil (2016)' => '19,5‰',
        'Expectativa de Vida (2016)' => '71,6 anos'
    ],
    'Amapá' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg',
        'Unidade Federativa' => 'Amapá',
        'Abreviação' => 'AP',
        'Sede do Governo' => 'Macapá',
        'Área' => '142 814,6',
        'População' => '756500',
        'Densidade' => '4,16',
        'PIB (2015)' => '13861000',
        '(% total) (2015)' => '0,2',
        'PIB per capita (R$) (2015)' => '18 079,54',
        'IDH (2010)' => '0,708',
        'Alfabetização (2016)' => '95%',
        'Mortalidade Infantil (2016)' => '23,2‰',
        'Expectativa de Vida (2016)' => '73,9 anos'
    ],
    'Amazonas' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg',
        'Unidade Federativa' => 'Amazonas',
        'Abreviação' => 'AM',
        'Sede do Governo' => 'Manaus',
        'Área' => '1 570 745,7',
        'População' => '3893763',
        'Densidade' => '2,05',
        'PIB (2015)' => '86560000',
        '(% total) (2015)' => '1,4',
        'PIB per capita (R$) (2015)' => '21 978,95',
        'IDH (2010)' => '0,674',
        'Alfabetização (2016)' => '93,1%',
        'Mortalidade Infantil (2016)' => '18,2‰',
        'Expectativa de Vida (2016)' => '71,9 anos'
    ],
    'Bahia' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg',
        'Unidade Federativa' => 'Bahia',
        'Abreviação' => 'BA',
        'Sede do Governo' => 'Salvador',
        'Área' => '564 692,7',
        'População' => '15150143',
        'Densidade' => '24,46',
        'PIB (2015)' => '245025000',
        '(% total) (2015)' => '4,1',
        'PIB per capita (R$) (2015)' => '16 115,89',
        'IDH (2010)' => '0,660',
        'Alfabetização (2016)' => '87%',
        'Mortalidade Infantil (2016)' => '17,3‰',
        'Expectativa de Vida (2016)' => '73,5 anos'
    ],
    'Ceará' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Cear%C3%A1.svg',
        'Unidade Federativa' => 'Ceará',
        'Abreviação' => 'CE',
        'Sede do Governo' => 'Fortaleza',
        'Área' => '148 825,6',
        'População' => '8867448',
        'Densidade' => '54,40',
        'PIB (2015)' => '130621000',
        '(% total) (2015)' => '2,2',
        'PIB per capita (R$) (2015)' => '14 669,14',
        'IDH (2010)' => '0,682',
        'Alfabetização (2016)' => '84,8%',
        'Mortalidade Infantil (2016)' => '14,4‰',
        'Expectativa de Vida (2016)' => '73,8 anos'
    ],
    'Distrito Federal' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg',
        'Unidade Federativa' => 'Distrito Federal',
        'Abreviação' => 'DF',
        'Sede do Governo' => 'Brasília',
        'Área' => '5 822,1',
        'População' => '2867869',
        'Densidade' => '400,73',
        'PIB (2015)' => '215613000',
        '(% total) (2015)' => '3,6',
        'PIB per capita (R$) (2015)' => '73 971,05',
        'IDH (2010)' => '0,824',
        'Alfabetização (2016)' => '97,4%',
        'Mortalidade Infantil (2016)' => '10,5‰',
        'Expectativa de Vida (2016)' => '78,1 anos'
    ],
    'Espírito Santo' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Esp%C3%ADrito_Santo.svg',
        'Unidade Federativa' => 'Espírito Santo',
        'Abreviação' => 'ES',
        'Sede do Governo' => 'Vitória',
        'Área' => '46 077,5',
        'População' => '3894899',
        'Densidade' => '73,97',
        'PIB (2015)' => '120363000',
        '(% total) (2015)' => '2',
        'PIB per capita (R$) (2015)' => '30 627,45',
        'IDH (2010)' => '0,740',
        'Alfabetização (2016)' => '93,8%',
        'Mortalidade Infantil (2016)' => '8,8‰',
        'Expectativa de Vida (2016)' => '78,2 anos'
    ],
    'Goiás' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goi%C3%A1s.svg',
        'Unidade Federativa' => 'Goiás',
        'Abreviação' => 'GO',
        'Sede do Governo' => 'Goiânia',
        'Área' => '340 086,7',
        'População' => '6551322',
        'Densidade' => '16,52',
        'PIB (2015)' => '173632000',
        '(% total) (2015)' => '2,9',
        'PIB per capita (R$) (2015)' => '26 265,32',
        'IDH (2010)' => '0,735',
        'Alfabetização (2016)' => '93,5%',
        'Mortalidade Infantil (2016)' => '14,9‰',
        'Expectativa de Vida (2016)' => '74,2 anos'
    ],
    'Maranhão' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranh%C3%A3o.svg',
        'Unidade Federativa' => 'Maranhão',
        'Abreviação' => 'MA',
        'Sede do Governo' => 'São Luís',
        'Área' => '331 983,3',
        'População' => '6861924',
        'Densidade' => '18,38',
        'PIB (2015)' => '78475000',
        '(% total) (2015)' => '1,3',
        'PIB per capita (R$) (2015)' => '11 366,23',
        'IDH (2010)' => '0,639',
        'Alfabetização (2016)' => '83,3%',
        'Mortalidade Infantil (2016)' => '21,3‰',
        'Expectativa de Vida (2016)' => '70,6 anos'
    ],
    'Mato Grosso' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg',
        'Unidade Federativa' => 'Mato Grosso',
        'Abreviação' => 'MT',
        'Sede do Governo' => 'Cuiabá',
        'Área' => '903 357,9',
        'População' => '3236578',
        'Densidade' => '3,10',
        'PIB (2015)' => '107418000',
        '(% total) (2015)' => '1,8',
        'PIB per capita (R$) (2015)' => '32 894,96',
        'IDH (2010)' => '0,725',
        'Alfabetização (2016)' => '93,5%',
        'Mortalidade Infantil (2016)' => '16,9‰',
        'Expectativa de Vida (2016)' => '74,2 anos'
    ],
    'Mato Grosso do Sul' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg',
        'Unidade Federativa' => 'Mato Grosso do Sul',
        'Abreviação' => 'MS',
        'Sede do Governo' => 'Campo Grande',
        'Área' => '357 125,0',
        'População' => '2630098',
        'Densidade' => '6,34',
        'PIB (2015)' => '83082000',
        '(% total) (2015)' => '1,4',
        'PIB per capita (R$) (2015)' => '31 337,22',
        'IDH (2010)' => '0,729',
        'Alfabetização (2016)' => '93,7%',
        'Mortalidade Infantil (2016)' => '14,0‰',
        'Expectativa de Vida (2016)' => '75,5 anos'
    ],
    'Minas Gerais' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg',
        'Unidade Federativa' => 'Minas Gerais',
        'Abreviação' => 'MG',
        'Sede do Governo' => 'Belo Horizonte',
        'Área' => '586 528,3',
        'População' => '20777672',
        'Densidade' => '32,79',
        'PIB (2015)' => '519326000',
        '(% total) (2015)' => '8,7',
        'PIB per capita (R$) (2015)' => '24 884,94',
        'IDH (2010)' => '0,731',
        'Alfabetização (2016)' => '93,8%',
        'Mortalidade Infantil (2016)' => '10,9‰',
        'Expectativa de Vida (2016)' => '77,2 anoss'
    ],
    'Pará' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Par%C3%A1.svg',
        'Unidade Federativa' => 'Pará',
        'Abreviação' => 'PA',
        'Sede do Governo' => 'Belém',
        'Área' => '1 247 689,5',
        'População' => '8101180',
        'Densidade' => '5,58',
        'PIB (2015)' => '130883000',
        '(% total) (2015)' => '2,2',
        'PIB per capita (R$) (2015)' => '16 009,98',
        'IDH (2010)' => '0,646',
        'Alfabetização (2016)' => '90,7%',
        'Mortalidade Infantil (2016)' => '16,6‰',
        'Expectativa de Vida (2016)' => '72,1 anos'
    ],
    'Paraíba' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Para%C3%ADba.svg',
        'Unidade Federativa' => 'Paraíba',
        'Abreviação' => 'PB',
        'Sede do Governo' => 'João Pessoa',
        'Área' => '56 439,8',
        'População' => '3950359',
        'Densidade' => '63,71',
        'PIB (2015)' => '56140000',
        '(% total) (2015)' => '0,9',
        'PIB per capita (R$) (2015)' => '14 133,32',
        'IDH (2010)' => '0,658',
        'Alfabetização (2016)' => '83,7%',
        'Mortalidade Infantil (2016)' => '16,1‰',
        'Expectativa de Vida (2016)' => '73,2 anos'
    ],
    'Paraná' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paran%C3%A1.svg',
        'Unidade Federativa' => 'Paraná',
        'Abreviação' => 'PR',
        'Sede do Governo' => 'Curitiba',
        'Área' => '199 314,9',
        'População' => '11112062',
        'Densidade' => '51,48',
        'PIB (2015)' => '376960000',
        '(% total) (2015)' => '6,3',
        'PIB per capita (R$) (2015)' => '33 768,62',
        'IDH (2010)' => '0,749',
        'Alfabetização (2016)' => '95,5%',
        'Mortalidade Infantil (2016)' => '9,3‰',
        'Expectativa de Vida (2016)' => '77,1 anos'
    ],
    'Pernambuco' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg',
        'Unidade Federativa' => 'Pernambuco',
        'Abreviação' => 'PE',
        'Sede do Governo' => 'Recife',
        'Área' => '98 311,6',
        'População' => '9297861',
        'Densidade' => '85,58',
        'PIB (2015)' => '156955000',
        '(% total) (2015)' => '2,6',
        'PIB per capita (R$) (2015)' => '16 795,34',
        'IDH (2010)' => '0,673',
        'Alfabetização (2016)' => '87,2%',
        'Mortalidade Infantil (2016)' => '12,7‰',
        'Expectativa de Vida (2016)' => '73,9 anos'
    ],
    'Piauí' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piau%C3%AD.svg',
        'Unidade Federativa' => 'Piauí',
        'Abreviação' => 'PI',
        'Sede do Governo' => 'Teresina',
        'Área' => '251 529,2',
        'População' => '3198185',
        'Densidade' => '11,95',
        'PIB (2015)' => '39148000',
        '(% total) (2015)' => '0,7',
        'PIB per capita (R$) (2015)' => '12 218,51',
        'IDH (2010)' => '0,646',
        'Alfabetização (2016)' => '82,8%',
        'Mortalidade Infantil (2016)' => '19,1‰',
        'Expectativa de Vida (2016)' => '71,1 anos'
    ],
    'Rio de Janeiro' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg',
        'Unidade Federativa' => 'Rio de Janeiro',
        'Abreviação' => 'RJ',
        'Sede do Governo' => 'Rio de Janeiro',
        'Área' => '43 696,1',
        'População' => '16497395',
        'Densidade' => '352,05',
        'PIB (2015)' => '659137000',
        '(% total) (2015)' => '11',
        'PIB per capita (R$) (2015)' => '39 826,95',
        'IDH (2010)' => '0,761',
        'Alfabetização (2016)' => '97,3%',
        'Mortalidade Infantil (2016)' => '11,5‰',
        'Expectativa de Vida (2016)' => '76,2 anos'
    ],
    'Rio Grande do Norte' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg',
        'Unidade Federativa' => 'Rio Grande do Norte',
        'Abreviação' => 'RN',
        'Sede do Governo' => 'Natal',
        'Área' => '52 796,8',
        'População' => '3419550',
        'Densidade' => '56,88',
        'PIB (2015)' => '57250000',
        '(% total) (2015)' => '1',
        'PIB per capita (R$) (2015)' => '16 631,86',
        'IDH (2010)' => '0,684',
        'Alfabetização (2016)' => '85,3%',
        'Mortalidade Infantil (2016)' => '14,7‰',
        'Expectativa de Vida (2016)' => '75,7 anos'
    ],
    'Rio Grande do Sul' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg',
        'Unidade Federativa' => 'Rio Grande do Sul',
        'Abreviação' => 'RS',
        'Sede do Governo' => 'Porto Alegre',
        'Área' => '281 748,5',
        'População' => '11228091',
        'Densidade' => '38,49',
        'PIB (2015)' => '381 985 000	',
        '(% total) (2015)' => '6,4',
        'PIB per capita (R$) (2015)' => '33 960,36',
        'IDH (2010)' => '0,746',
        'Alfabetização (2016)' => '96,8%',
        'Mortalidade Infantil (2016)' => '9,6‰',
        'Expectativa de Vida (2016)' => '77,8 anos'
    ],
    'Rondônia' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rond%C3%B4nia.svg',
        'Unidade Federativa' => 'Rondônia',
        'Abreviação' => 'RO',
        'Sede do Governo' => 'Porto Velho',
        'Área' => '237 590,7',
        'População' => '1755015',
        'Densidade' => '6,46',
        'PIB (2015)' => '36563000',
        '(% total) (2015)' => '0,6',
        'PIB per capita (R$) (2015)' => '20 677,95',
        'IDH (2010)' => '0,690',
        'Alfabetização (2016)' => '93,3%',
        'Mortalidade Infantil (2016)' => '20,0‰',
        'Expectativa de Vida (2016)' => '71,3 anos'
    ],
    'Roraima' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg',
        'Unidade Federativa' => 'Roraima',
        'Abreviação' => 'RR',
        'Sede do Governo' => 'Boa Vista',
        'Área' => '224 299,0',
        'População' => '500826',
        'Densidade' => '1,74',
        'PIB (2015)' => '10354000',
        '(% total) (2015)' => '0,2',
        'PIB per capita (R$) (2015)' => '20 476,71',
        'IDH (2010)' => '0,707',
        'Alfabetização (2016)' => '93,4%',
        'Mortalidade Infantil (2016)' => '17,2‰',
        'Expectativa de Vida (2016)' => '71,5 anos'
    ],
    'Santa Catarina' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg',
        'Unidade Federativa' => 'Santa Catarina',
        'Abreviação' => 'SC',
        'Sede do Governo' => 'Florianópolis',
        'Área' => '95 736,2',
        'População' => '6734568',
        'Densidade' => '61,53',
        'PIB (2015)' => '249073000',
        '(% total) (2015)' => '4,2',
        'PIB per capita (R$) (2015)' => '36 525,28',
        'IDH (2010)' => '0,774',
        'Alfabetização (2016)' => '97,2%',
        'Mortalidade Infantil (2016)' => '9,2‰',
        'Expectativa de Vida (2016)' => '79,1 anos'
    ],
    'São Paulo' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_S%C3%A3o_Paulo.svg',
        'Unidade Federativa' => 'São Paulo',
        'Abreviação' => 'SP',
        'Sede do Governo' => 'São Paulo',
        'Área' => '248 209,4',
        'População' => '44169350',
        'Densidade' => '162,93',
        'PIB (2015)' => '1939890000',
        '(% total) (2015)' => '32,4',
        'PIB per capita (R$) (2015)' => '43 694,68',
        'IDH (2010)' => '0,783',
        'Alfabetização (2016)' => '97,2%',
        'Mortalidade Infantil (2016)' => '9,9‰',
        'Expectativa de Vida (2016)' => '78, anos'
    ],
    'Sergipe' => [
        'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg',
        'Unidade Federativa' => 'Sergipe',
        'Abreviação' => 'SE',
        'Sede do Governo' => 'Aracaju',
        'Área' => '21 910,4',
        'População' => '2227294',
        'Densidade' => '89,81',
        'PIB (2015)' => '38554000',
        '(% total) (2015)' => '0,6',
        'PIB per capita (R$) (2015)' => '17 189,28',
        'IDH (2010)' => '0,665',
        'Alfabetização (2016)' => '85,3%',
        'Mortalidade Infantil (2016)' => '16,2‰',
        'Expectativa de Vida (2016)' => '72,7 anos'
    ],
    'Tocantins' => [
      'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/f/ff/Bandeira_do_Tocantins.svg',
      'Unidade Federativa' => 'Tocantins',
      'Abreviação' => 'TO',
      'Sede do Governo' => 'Palmas',
      'Área' => '277 620,9',
      'População' => '1502759',
      'Densidade' => '4,70',
      'PIB (2015)' => '28930000',
      '(% total) (2015)' => '0,5',
      'PIB per capita (R$) (2015)' => '19 094,16',
      'IDH (2010)' => '0,699',
      'Alfabetização (2016)' => '89.6%',
      'Mortalidade Infantil (2016)' => '15,8‰',
      'Expectativa de Vida (2016)' => '73,4 anos'
    ]
];
//Criação da Tabela
echo '<table border="1">';
echo '<tr>
        <th>Bandeira</th>
        <th>Unidade Federativa</th>
        <th>Abreviação</th>
        <th>Sede de Governo</th>
        <th>Área (km²)</th>
        <th>População (2014)</th>
        <th>Densidade (2005)</th>
        <th>PIB (2015)</th>
        <th>(% total) (2015)</th>
        <th>PIB per capita (R$) (2015)</th>
        <th>IDH (2010)</th>
        <th>Alfabetização (2016)</th>
        <th>Mortalidade Infantil (2016)</th>
        <th>Expectativa de Vida (2016)</th>
    </tr>';
    
    //Crição do foreach para aplicar a tabela com inserção da âncora na foto dos Estados brasileiros
    foreach ($ufs as $i => $codigo) 
    {
        echo '<tr>';
        echo '<td><a href="' . $codigo['Bandeira'] . '"><img src="' . $codigo['Bandeira'] . '" alt="' . 
        $codigo['Unidade Federativa'] . '" width="50" height="35"></a></td>';
        echo '<td>' . $codigo['Unidade Federativa'] . '</td>';
        echo '<td>' . $codigo['Abreviação'] . '</td>';
        echo '<td>' . $codigo['Sede do Governo'] . '</td>';
        echo '<td>' . $codigo['Área'] . '</td>';
        echo '<td>' . $codigo['População'] . '</td>';
        echo '<td>' . $codigo['Densidade'] . '</td>';
        echo '<td>' . $codigo['PIB (2015)'] . '</td>';
        echo '<td>' . $codigo['(% total) (2015)'] . '</td>';
        echo '<td>' . $codigo['PIB per capita (R$) (2015)'] . '</td>';
        echo '<td>' . $codigo['IDH (2010)'] . '</td>';
        echo '<td>' . $codigo['Alfabetização (2016)'] . '</td>';
        echo '<td>' . $codigo['Mortalidade Infantil (2016)'] . '</td>';
        echo '<td>' . $codigo['Expectativa de Vida (2016)'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>

</html>