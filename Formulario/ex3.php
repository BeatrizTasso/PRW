<?php
    $estado = $_GET['estado'];
    //NORDESTE
    switch ($estado)
    {
        case "Maranhão";
            echo "Capital: São Luís";
            break;
        case "Piauí";
            echo "Capital: Teresina";
            break;
        case "Ceará";
            echo "Capital: Fortaleza";
            break;
        case "Rio Grande do Norte";
            echo "Capital: Natal";
            break;
        case "Paraíba";
            echo "Capital: João Pessoa";
            break;
        case "Pernambuco";
            echo "Capital: Recife";
            break;
        case "Alagoas";
            echo "Capital: Maceió";
            break;
        case "Sergipe";
            echo "Capital: Aracaju";
            break;
        case "Bahia";
            echo "Capital: Salvador";
            break;
    //SUDESTE
        case "São Paulo";
            echo "Capital: São Paulo";
            break;
        case "Espírito Santo";
            echo "Capital: Vitória";
            break;
        case "Minas Gerais";
            echo "Capital: Belo Horizonte";
            break;
        case "Rio de Janeiro";
            echo "Capital: Rio de Janeiro";
            break;
    //SUL
        case "Paraná";
            echo "Capital: Curitiba";
            break;
        case "Santa Catarina";
            echo "Capital: Florianópolis";
            break;
        case "Rio Grande do Sul";
            echo "Capital: Porto Alegre";
            break;
    //CENTRO-OESTE
        case "Distrito Federal";
            echo "Capital: Brasília";
            break;
        case "Goiás";
            echo "Capital: Goiânia";
            break;
        case "Mato Grosso";
            echo "Capital: Cuiaba";
            break;
        case "Mato Grosso do Sul";
            echo "Capital: Campo Grande";
            break;
    //NORTE
        case "Acre";
            echo "Capital: Rio Branco";
            break;
        case "Amazonas";
            echo "Capital: Manaus";
            break;
        case "Roraima";
            echo "Capital: Boa Vista";
            break;
        case "Rondônia";
            echo "Capital: Porto Velho";
            break;
        case "Pará";
            echo "Capital: Belém";
            break;
        case "Amapá";
            echo "Capital: Macapá";
            break;
        case "Tocantins";
            echo "Capital: Palmas";
            break;
    }
?>