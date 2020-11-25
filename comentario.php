<?php

class Comentarios
{
    private $con;

    function __construct($con)
    {
        $this->con = $con;
    }


    public function getComentarios()
    {
        $query = "SELECT comentario,fecha,producto,estado FROM comentarios";
        return $this->con->query($query);
    }


    public function saveComentario($datos = array())
    {
        $sql = "INSERT INTO comentarios (email,comentario,ip,fecha,estado,producto )
    VALUES('" . $datos['email'] . "','" . $datos['message'] . "','" . $_SERVER['REMOTE_ADDR'] . "',now(),FALSE,'sf')";
        if ($this->con->exec($sql) > 0) {
            return 'Comentario agregado';
        } else {
            return ' error vuelva prontos';
        }
    }
}
