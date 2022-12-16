<?php

// esta pagina se for exibida antes da erro (pk ela nao cria uma session, so apresentas)
session_start();
echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();