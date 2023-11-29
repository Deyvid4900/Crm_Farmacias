<?php
namespace Traits;

trait TraitParseUrl{

    # Criar um array com a URL digitada pelo usuário
    public static function parseUrl($par = null)
    {
        // Verifica se 'url' está definido em $_GET e se não está vazio
        if (isset($_GET['url']) && !empty($_GET['url'])) {
            $url = explode("/", rtrim($_GET['url'], FILTER_SANITIZE_URL));
            return ($par === null) ? $url : ($url[$par] ?? null);
        } else {
            $url[0]='/';  // Ou qualquer valor padrão que você deseje retornar quando 'url' não estiver definido
            return $url; 
        }
    }
}
