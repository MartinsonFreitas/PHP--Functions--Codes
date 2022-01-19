<?php

    //declara a função
    function list_files($dir)
    {
        // verifica se a é um diretório
        if(is_dir($dir))
        {

            //abre o diretorio
            if($handle = opendir($dir))
            {

                // percorre os registros do diretorio
                while(($file = readdir($handle)) !== false)
                {

                    if($file != "." && $file != ".." && $file != "Thumbs.db")
                    {
                        //monta um link com o nome do arquivo
                        echo '<a target="_blank" href="'.$dir.$file.'">'.$file.'</a><br>'."n";
                    }
                }
                closedir($handle);
            }
        }
    }


    $root = 'C:';

    list_files($root);

?>