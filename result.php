<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$p_name = $_POST['name'];
$p_email = $_POST['email'];
$p_463013 = $_POST['463013'];
$p_538248 = $_POST['538248'];
$p_mobile_phone = $_POST['mobile_phone'];
$p_462931 = $_POST['462931'];
$p_336777 = $_POST['336777'];
$p_462932 = $_POST['462932'];
$p_462933 = $_POST['462933'];
$p_142466 = $_POST['142466'];
$p_uf = $_POST['uf'];
$p_city_id = $_POST['city_id'];
$p_566823 = $_POST['566823'];
$p_1011638 = $_POST['1011638'];
$p_366549 = $_POST['366549'];
$p_576779 = $_POST['576779'];
$p_475629 = $_POST['475629'];

$p_475637 = intval($_POST['475637']);
$p_475639 = intval($_POST['475639']);
$p_475641 = intval($_POST['475641']);
$p_475642 = intval($_POST['475642']);
$p_475644 = intval($_POST['475644']);
$p_475646 = intval($_POST['475646']);
$p_475647 = intval($_POST['475647']);
$p_475648 = intval($_POST['475648']);
$p_475651 = intval($_POST['475651']);
$p_475653 = intval($_POST['475653']);

$result_r = (($p_475637 + $p_475639 + $p_475641 + $p_475642 + $p_475644 + $p_475646 + $p_475647 + $p_475648 + $p_475651 + $p_475653) / 30) * 100;

$p_476151 = intval($_POST['476151']);
$p_476154 = intval($_POST['476154']);
$p_476156 = intval($_POST['476156']);
$p_476157 = intval($_POST['476157']);
$p_476159 = intval($_POST['476159']);
$p_476160 = intval($_POST['476160']);
$p_476162 = intval($_POST['476162']);
$p_476169 = intval($_POST['476169']);
$p_476170 = intval($_POST['476170']);
$p_476172 = intval($_POST['476172']);

$result_i = (($p_476151 + $p_476154 + $p_476156 + $p_476157 + $p_476159 + $p_476160 + $p_476162 + $p_476169 + $p_476170 + $p_476172) / 30) * 100;

$p_476187 = intval($_POST['476187']);
$p_476189 = intval($_POST['476189']);
$p_476192 = intval($_POST['476192']);
$p_476194 = intval($_POST['476194']);
$p_476195 = intval($_POST['476195']);
$p_476198 = intval($_POST['476198']);
$p_476200 = intval($_POST['476200']);
$p_476202 = intval($_POST['476202']);
$p_476203 = intval($_POST['476203']);
$p_476204 = intval($_POST['476204']);

$result_a = (($p_476187 + $p_476189 + $p_476192 + $p_476194 + $p_476195 + $p_476198 + $p_476200 + $p_476202 + $p_476203 + $p_476204) / 30) * 100;

$p_476206 = intval($_POST['476206']);
$p_476208 = intval($_POST['476208']);
$p_476211 = intval($_POST['476211']);
$p_476212 = intval($_POST['476212']);
$p_476215 = intval($_POST['476215']);
$p_476216 = intval($_POST['476216']);
$p_476219 = intval($_POST['476219']);
$p_476220 = intval($_POST['476220']);
$p_476224 = intval($_POST['476224']);
$p_476225 = intval($_POST['476225']);

$result_s =  (($p_476206 + $p_476208 + $p_476211 + $p_476212 + $p_476215 + $p_476216 + $p_476219 + $p_476220 + $p_476224 + $p_476225) / 30) * 100;

$p_476229 =  intval($_POST['476229']);
$p_476233 =  intval($_POST['476233']);
$p_476234 =  intval($_POST['476234']);
$p_476237 =  intval($_POST['476237']);
$p_476239 =  intval($_POST['476239']);
$p_476240 =  intval($_POST['476240']);
$p_476241 =  intval($_POST['476241']);
$p_476242 =  intval($_POST['476242']);
$p_476243 =  intval($_POST['476243']);
$p_476246 =  intval($_POST['476246']);

$result_e =  (($p_476229 + $p_476233 + $p_476234 + $p_476237 + $p_476239 + $p_476240 + $p_476241 + $p_476242 + $p_476243 + $p_476246) / 30) * 100;

$p_476317 =  intval($_POST['476317']);
$p_476320 =  intval($_POST['476320']);
$p_476327 =  intval($_POST['476327']);
$p_476332 =  intval($_POST['476332']);
$p_476338 =  intval($_POST['476338']);
$p_476346 =  intval($_POST['476346']);
$p_476354 =  intval($_POST['476354']);
$p_476356 =  intval($_POST['476356']);
$p_476361 =  intval($_POST['476361']);
$p_476363 =  intval($_POST['476363']);

$result_c = (($p_476317 + $p_476320 + $p_476327 + $p_476332 + $p_476338 + $p_476346 + $p_476354 + $p_476356 + $p_476361 + $p_476363) / 30) * 100;

$p_captcha = $_POST['captcha'];

$sql = "INSERT INTO riasec (`nome`, `email`, `463013`, `538248`, `mobile_phone`, `462931`, `336777`, `462932`, `462933`, `142466`, `uf`, `city_id`, `566823`, `1011638`, `366549`, `576779`, `475629`, `475637`, `475639`, `475641`, `475642`, `475644`, `475646`, `475647`, `475648`, `475651`, `475653`, `476151`, `476154`, `476156`, `476157`, `476159`, `476160`, `476162`, `476169`, `476170`, `476172`, `476187`, `476189`, `476192`, `476194`, `476195`, `476198`, `476200`, `476202`, `476203`, `476204`, `476206`, `476208`, `476211`, `476212`, `476215`, `476216`, `476219`, `476220`, `476224`, `476225`, `476229`, `476233`, `476234`, `476237`, `476239`, `476240`, `476241`, `476242`, `476243`, `476246`, `476317`, `476320`, `476327`, `476332`, `476338`, `476346`, `476354`, `476356`, `476361`, `476363`, `result_r`, `result_i`, `result_a`, `result_s`, `result_e`, `result_c`)
VALUES ('$p_name', '$p_email', '$p_463013', '$p_538248', '$p_mobile_phone', '$p_462931', '$p_336777', '$p_462932', '$p_462933', '$p_142466', '$p_uf', '$p_city_id', '$p_566823', '$p_1011638', '$p_366549', '$p_576779', '$p_475629', '$p_475637', '$p_475639', '$p_475641', '$p_475642', '$p_475644', '$p_475646', '$p_475647', '$p_475648', '$p_475651', '$p_475653', '$p_476151', '$p_476154', '$p_476156', '$p_476157', '$p_476159', '$p_476160', '$p_476162', '$p_476169', '$p_476170', '$p_476172', '$p_476187', '$p_476189', '$p_476192', '$p_476194', '$p_476195', '$p_476198', '$p_476200', '$p_476202', '$p_476203', '$p_476204', '$p_476206', '$p_476208', '$p_476211', '$p_476212', '$p_476215', '$p_476216', '$p_476219', '$p_476220', '$p_476224', '$p_476225', '$p_476229', '$p_476233', '$p_476234', '$p_476237', '$p_476239', '$p_476240', '$p_476241', '$p_476242', '$p_476243', '$p_476246', '$p_476317', '$p_476320', '$p_476327', '$p_476332', '$p_476338', '$p_476346', '$p_476354', '$p_476356', '$p_476361', '$p_476363', '$result_r', '$result_i', '$result_a', '$result_s', '$result_e', '$result_c')";


if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        body{
            background-color: #F25D23;
            font-family: Roboto, sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: normal;
        }
        table,tr,td{
            background-color: white;
            border: 1px solid black;
            border-collapse: collapse;
        }
        td{
            padding: 8px;
        }

        table{
            overflow: hidden;
            border-radius: 8px;
        }

    </style>
</head>

<body>
<table style="width:100%">
    <tr>
        <td>Realistico</td>
        <td>As pessoas com esse perfil de personalidade são práticas e gostam de agir.
            São vistas como ajustadas e simples. São persistentes, sensatas e na maioria
            das vezes sinceras, diretas ao modo de se relacionar. Gostam de dizer o que
            pensam, sem muitos rodeios. Sentem apreço por todas as coisas.</td>
        <td><?php echo round($result_r, 2)?>%</td>
    </tr>
    <tr>
        <td>Investigativo</td>
        <td>As pessoas desse tipo, gostam de observar e entender tudo o que está ao
            seu redor, buscando explicações para o modo como as coisas acontecem.
            São pessoas muito críticas e independentes em suas ideias. Em geral, são
            metódicas, bem organizadas, racionais e reservadas em alguns casos. Suas
            emoções são mais contidas. Gostam de adquirir conhecimento e se
            alimentam do saber, mostrando muita curiosidade para observar,
            experimentar, estimar resultados, elaborar teorias e modelos.</td>
        <td><?php echo round($result_i, 2)?>%</td>
    </tr>
    <tr>
        <td>Artístico</td>
        <td>Gostam de executar as atividades artística, e não somente de apreciá las
            Não gostam de rotina nem de atividades controladas Preferem realizar
            tarefas nas quais possam mostrar seus talentos criativos e expressivos
            Compreender e expressar as emoções é fundamental São pessoas originais
            e inovadoras, expressivas, que gostam de chamar a atenção São também
            muito emotivas e intuitivas Podem ser impulsivos, pois gostam de
            novidades, espontaneidade e principalmente de liberdade</td>
        <td><?php echo round($result_a, 2)?>%</td>
    </tr>
    <tr>
        <td>Social</td>
        <td>Gostam e buscam interações com os outros, seja para ajudar, informar,
            treinar, desenvolver, curar, esclarecer, ensinar, ouvir ou cuidar. Mostram
            bastante interesse pelo bem estar dos outros, pelo trabalho social,
            humanitário e religioso, e pela boa e justa organização da sociedade. São
            pessoas atenciosas, compreensivas com os problemas dos outros,
            simpáticas e colaborativas. Gostam de se dedicar ao outro e também se
            mostram dominantes. São pessoas em geral responsáveis, idealistas, gentis
            e de fácil relacionamento.</td>
        <td><?php echo round($result_s, 2)?>%</td>
    </tr>
    <tr>
        <td>Empreendedor</td>
        <td>Os empreendedores gostam de manipular, coordenar e supervisionar as
            atividades dos outros, seja para alcançar seus próprios objetivos, seja para
            atingir as metas da empresa onde trabalham, ou ainda para conseguir
            resultados produtivos e obter lucro. São pessoas ativas, que gostam de
            aventuras, riscos e dos bons prazeres da vida material. Estão sempre
            buscando novidades e se mostram autoconfiantes. Geralmente são
            otimistas, sociáveis, líderes, competitivos.</td>
        <td><?php echo round($result_e, 2)?>%</td>
    </tr>
    <tr>
        <td>Convencional</td>
        <td>Apreciam o trabalho concreto, bem organizado, rotineiro e com regras
            claras. Não gostam de muita proximidade e intimidade, nem sentem muita
            necessidade de contato afetivo, especialmente no trabalho, preferindo ás
            vezes o isolamento. Mostram preferência por atividades de manipulação de
            dados e fatos, como organização de arquivos e registros. Também gostam
            de lidar com números e organização, sempre de acordo com planos pré
            estabelecidos.</td>
        <td><?php echo round($result_c, 2)?>%</td>
    </tr>
</table>
</body>

</html>





