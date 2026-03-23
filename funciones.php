<?php

        echo (); //Esta funcion muestra texto en pantalla.

        isset(); //Esta funcion verifica si una variable esta definida o no, devuelve true o false.

        empty(""); //Esta funcion verifica si una variable esta vacia o no, devuelve true o false.

        var_dump(5); //Muestra el tipo y valor de una variable.

        strlen("Hola"); //Esta funcion cuenta los caracteres de una cadena, incluyendo espacios, devuelve un entero.

        strpos("",""); //Esta funcion busca texto dentro de otro, devuelve la posicion de la primera ocurrencia o false si no se encuentra.

        str_replace("Dias","Tardes", "Buenos Dias"); //Esta funcion reemplaza texto dentro de una cadena, devuelve la cadena modificada.

        count(["elemento1", "elemento2"]); //Cuenta los elementos de un array, devuelve un entero.

        date("Y-m-d"); //Esta funcion devuelve la fecha actual en el formato especificado, ya sea dia, mes, año o el el formato deseado.

        password_hash("1234", PASSWORD_DEFAULT); //Esta funcion crea un hash de una contraseña utilizando un algoritmo de encriptacion, devuelve el hash generado.

        password_verify("1234", $hash); //Esta funcion verifica si una contraseña coincide con un hash, devuelve true o false.

        filter_var("user@example.com", FILTER_VALIDATE_EMAIL); //Esta funcion sirve para va;idar datos, en este caso valida si el correo es correcto, devuelve el valor filtrado o false si no es valido.

        header("Location: http://www.example.com"); //Esta funcion redirige a otra pagina.

        session_start(); //Esta funcion inicia una nueva sesion o reanuda una sesion existente, devuelve true si la sesion se inicio correctamente o false si no se pudo iniciar.

        json_encode(["nombre" => "Juan"]); //Esta funcion convierte un array o un objeto en una cadena JSON, devuelve la cadena JSON resultante.
        //JSON significa JavaScript Object Notation. Es un formato de texto que se usa para guardar y enviar datos.

        json_decode('{"nombre": "Juan"}', true); //Esta funcion convierte una cadena JSON en un array o un objeto, devuelve el array o el objeto resultante.

        include"archivo.php"; //Esta funcion incluye y evalua el archivo especificado, devuelve true si el archivo se incluyo correctamente o false si no se pudo incluir.

        array_push($array, "nuevo elemento"); //Esta funcion agrega uno o mas elementos al final de un array, devuelve el nuevo numero de elementos en el array.

        strtolower("HOLA"); //Esta funcion convierte una cadena a minusculas, devuelve la cadena modificada.    

        strtoupper("hola"); //Esta funcion convierte una cadena a mayusculas, devuelve la cadena modificada.

        implode("-", ["a","b","c"]); //Esta funcion une los elementos de un array en una cadena, devuelve la cadena resultante, "a-b-c".
