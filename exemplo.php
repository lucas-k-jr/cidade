<?php

    include("pais.php");

    $cidade1 = "Araraquara";
    $cidade2 = "São Carlos";
    $cidade3 = "Uberaba";
    $cidade4 = "Curitiba";
    $cidade5 = "Nova York";

    $estado1 = "São Paulo";
    $sigla1 = "SP";
    $estado2 = "Minas Gerais";
    $sigla2 = "MG";
    $estado3 = "Paraná";
    $sigla3 = "PR";
    $estado4 = "Washinton";
    $sigla4 = "WS";


    $pais1 = "Brasil";
    $pais1 = "BR";
    $pais1 = "Estados Unidos";
    $pais1 = "EUA";

    $pais[0] = new Pais($pais2, $siglaPais2);
    $pais[0]->adicionar_estado($estado4, $sigla4);
    $pais[0]->estados[0]->adicionar_cidade($cidade5);

    foreach($pais as $i=>$p)
    {
        echo "País: ".$p->get_nome()."(".$p->get_sigla()." ) <hr />";

        foreach($p->estados as $j=>$e)
        {
            echo "Estados: ".$e->get_nome(). "(".$e->get_sigla().") <br />";            
            foreach($e->cidades as $k=>$c)
            {
                echo " - ".$c->get_nome()."<br />";            
            }
            echo "<hr />";
            echo "<hr />";
        }
        echo "<hr />";
        echo "<hr />";
    }

?>
