<?php

namespace Classes;

class ClassLayout
{
  public static function setHeadDefault($title)
  {
    $html = "<!DOCTYPE html>\n";
    $html .= "<html lang='pt-br'>\n";
    $html .= "<head>\n";
    $html .= "<meta charset='UTF-8'>\n";
    $html .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
    $html .= "<meta name='format-detection' content='telephone=no'>\n";
    $html .= "<title>$title</title>\n";
    //  Favicon 
    //  CSS 
    $html  .= "<link  href='" . DIRPAGE . "lib/CSS/sideBarStyles.css" . "'>\n";
    $html  .= "<script src='https://code.jquery.com/jquery-3.6.4.min.js'></script>";
    $html .= "</head>\n";
    $html .= "<body class='aloBrasil'>\n";
    echo $html;
  }
  public static function setHeadBootstrap($title)
  {
    $html = "<!DOCTYPE html>\n";
    $html .= "<html lang='pt-br'>\n";
    $html .= "<head>\n";
    $html .= "<meta charset='UTF-8'>\n";
    $html .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
    $html .= "<meta name='format-detection' content='telephone=no'>\n";

    $html .= "<title>$title</title>\n";
    $html .= "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>\n";
    $html .= "<link href='" . DIRPAGE ."/views/headerStyles.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>\n";

    //  Favicon 
    //  CSS

    $html .= "</head>\n";
    $html .= "<body>\n";
    echo $html;
  }

  public static function setHeaderComponente($farmaciaNome = "farmacia", $urlImg = "null", $qtnMensagem)
  {

    $head  = "<header id='a'>\n\n";
    $head .= "<div class='content_header'>\n";
    $head .= "<div class='header-bg cao' id='cao'>\n";
    $head .= "<div class='nomeFarmacia' style='color: #ffff;'>\n";
    $head .= "<h1 style='padding-left:10px;'>" . $farmaciaNome . " </h1>\n";
    $head .= "</div>\n";
    $head .= "<div style='color: white;'>\n";
    $head .= " <a id='linkMain' href='" . DIRPAGE . "views/home.php" . "'>\n";
    $head .= "     <h1><span style='color: #84f284;'>Markting</span> pharma</h1>\n";
    $head .= " </a>\n";
    $head .= " </div>\n";
    $head .=  " <div class='formHeader'>\n";

    $head .= " <form class='formInput' onsubmit=doSearch()>\n";
    $head .= "<div id='suggestions'>\n";
    $head .= "<ul id='suggestion-list'></ul>\n";
    $head .= "</div>";
    $head .= " <div class='inputText'>\n";
    $head .= " <input type='text' id='search' placeholder='Pesquisar'>\n";
    
    
    $head .= " <button class='btn-search'>\n";
    $head .= "  <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='black' class='bi bi-search img-search' viewBox='0 0 16 16'>
                          <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z' />\n";
    $head .= "  </svg>\n";
    $head .= " </button>\n";
    $head .= " </div>\n";
    $head .= "</form>\n";
    $head .= "<div class='bellImg' id='bell' style='cursor: pointer;'>\n";
    $head .= " <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='white' class='bi bi-bell-fill' viewBox='0 0 16 16'>
                     <path d='M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z' />\n";
    if ($qtnMensagem != 0 ) {
      $head .=  "</svg><span class='notificacao'>".$qtnMensagem."</span>\n";
    }
    
    $head .= " </div>\n";
    $head .=  " <div>\n";
    $head .= "<button class='btnList' onclick='openNav()' style='margin-left:20px;'>\n";
    $head .=  "<svg xmlns='http://www.w3.org/2000/svg' width='34' height='34' fill='white' class='bi bi-list' viewBox='0 0 16 16'>
        <path fill-rule='evenodd' d='M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5'/>
      </svg>\n";
    $head .= "</button>\n";
    $head .=  " </div>\n";
    $head .=  " </div>\n";
    $head .=  " <div id='mySideBarHeader' class='sidebar'>\n";
    $head .=  "  <div class='headerSidebar'>\n";
    $head .=  " <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>\n";
    $head .=  " </div>\n";
    $head .=  " <div class='contentSidebar'>\n";
    $head .=  "  <a href='/views/CadastroMedico.php'>Cadastrar Médicos</a>\n";
    $head .=  "   <a href='/views/medicoFiltro.php'>Encontre Médico</a>\n";
    $head .=  "  <a href='/views/ultimosServicos.php'>Ultimos Serviços</a>\n";
    $head .=  "  <a href='/views/tabelaCliente.php'>Tabelas de Clientes</a>\n";
    $head .=  "   <a href='/views/suporte.php'>Suporte</a>\n";
    $head .=  "  <a id='sobreMenuHamb' href='/views/sobre.php'>Sobre</a>\n";
    $head .=  "  <a  href='/views/manual.php'>Como Funciona</a>\n";
    $head .=  "   <a href='/views/configuracaoFarmacia.php'>Configurações</a>\n";
    $head .=  "   <a href='/' id='LogOut'>Sair</a>\n";
    $head .=  "</div>\n";
    $head .=  " </div>\n";


    $head .=  "</div>\n";
    $head .=  " </div>\n";
    $head .=  "</header>\n";
    echo $head;
  }
  public static function setSideComponente()
  {

    $side = "<section class='sideBar-bg'>\n";
    $side .= "   <div class='childSidebar-bg'>\n";
    $side .= "  <div class='teste sd'>\n";
    $side .= "    <div class='Cadastro testi' data-menu>\n";
    $side .= "    <a href='' class='addSeta'>\n";
    $side .= "<svg xmlns='http://www.w3.org/2000/svg' width='28' height='28' fill='currentColor' class='bi bi-person-fill-add' viewBox='0 0 16 16'>
        <path d='M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0'/>
        <path d='M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4'/>
      </svg>\n";
    $side .= "   </a>\n";
    $side .= " <p>Cadastros</p>\n";
    $side .= " </div>\n";
    $side .= "  </div>\n";

    $side .= "   <div class='testeDown sd'>\n";
    $side .= "  <div class='Servicos' id='linkServico' data-menu>\n";
    $side .= "  <a href='/views/cadastroServico.php'>\n";
    $side .= "<svg xmlns='http://www.w3.org/2000/svg' width='28' height='28' fill='white' class='bi bi-heart-pulse' viewBox='0 0 16 16'>
        <path d='m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01zM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5Z'/>
        <path d='M10.464 3.314a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162z'/>
      </svg>\n";
    $side .= "  </a>\n";
    $side .= "  <p>Serviços</p>\n";
    $side .= " </div>\n";
    $side .= "  </div>\n";

    $side .= " <div class='testeDown sd'>\n";
    $side .= "  <div class='Consultorio' id='linkConsultorio' data-menu>\n";
    $side .= " <a href='/views/consultorio.php'>\n";
    $side .=   "<svg xmlns='http://www.w3.org/2000/svg' width='28' height='28' fill='currentColor' class='bi bi-clipboard-pulse' viewBox='0 0 16 16'>
                <path fill-rule='evenodd' d='M10 1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zm-5 0A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5zm-2 0h1v1H3a1 1 0 0 0-1 1V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V3.5a1 1 0 0 0-1-1h-1v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2m6.979 3.856a.5.5 0 0 0-.968.04L7.92 10.49l-.94-3.135a.5.5 0 0 0-.895-.133L4.232 10H3.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 .416-.223l1.41-2.115 1.195 3.982a.5.5 0 0 0 .968-.04L9.58 7.51l.94 3.135A.5.5 0 0 0 11 11h1.5a.5.5 0 0 0 0-1h-1.128z'/>
              </svg>\n";
    $side .= "  </a>\n";
    $side .= "  <p>Consultorio</p>\n";
    $side .= "  </div>\n";
    $side .= " </div>\n";

    $side .= "  <div class='sd'>\n";
    $side .= "  <div class='Marketing' data-menu>\n";
    $side .= " <a href=''>\n";
    $side .= "<svg xmlns='http://www.w3.org/2000/svg' width='28' height='28' fill='currentColor' class='bi bi-megaphone' viewBox='0 0 16 16'>
  <path d='M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z'/>
</svg>\n";
    $side .= "  </a>\n";
    $side .= "  <p>Marketing</p>\n";
    $side .= " </div>\n";
    $side .= " </div>\n";
    $side .= " </div>\n";
    $side .= " <div class='settings sd' id='linklembrete'>\n";
    $side .= "  <div class='lastPad' data-menu>\n";
    $side .= "  <a href='/views/lembrete.php'>\n";
    $side .=  "<svg xmlns='http://www.w3.org/2000/svg' width='28' height='28' fill='currentColor' class='bi bi-calendar-heart' viewBox='0 0 16 16'>
    <path fill-rule='evenodd' d='M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM1 14V4h14v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1m7-6.507c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132'/>
  </svg>\n";
    $side .= "  </a>\n";
    $side .= "  <p>Lembretes</p>\n";
    $side .= "  </div>\n";
    $side .= "  </div>\n";
    $side .= "  </section>\n";

    $side .= " <section>\n";
    $side .= " <div class='sideBar-info'>\n";
    $side .= " <div class='boxCadastro' id='linkCLiente'>\n";
    $side .= "  <p>\n";
    $side .= "    <a href='/views/cadastroCliente.php'>Clientes</a>\n";
    $side .= " </p>\n";
    $side .= "  </div>\n";
    $side .= "  <div class='boxCadastro'>\n";
    $side .= "  <div id='LinkEvento'>\n";
    $side .= "      <p><a href='/views/cadastroEvento.php'>Eventos <br> Agenda</a></p>\n";
    $side .= "   </div>\n";
    $side .= "  </div>\n";
    $side .= " </div>\n";
    $side .= " </section>\n";



    $side .= "  <section>\n";
    $side .= "  <div class='sideBar-infoMarketing'>\n";
    $side .= " <div class='boxMarketing'>\n";
    $side .= "     <p><a href='/views/marketingFiltros.php'>Mensagem<br>Livre</a></p>\n";
    $side .= " </div>\n";
    $side .= " <div class='boxMarketing'>\n";
    $side .= "     <p><a href='/views/marketingSms.php'>Pre-Mensagens</a></p>\n";
    $side .= " </div>\n";
    $side .= " </div>\n";
    $side .= "  </section>\n";
    echo $side;
  }
  public static function setFooter()
  {
    $html = " <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL' crossorigin='anonymous'></script>\n";
    $html .= "<script src='" . DIRPAGE . "/lib/JS/pesquisa.js" . "'></script>\n";
    $html .= "<script src='" . DIRPAGE . "/lib/JS/header.js" . "'></script>\n";
    $html .= "\n";
    $html .= "</body>\n";
    $html .= "</html>";
    echo $html;
  }
}
