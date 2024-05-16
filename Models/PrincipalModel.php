<?php
class PrincipalModel extends Query
{

    public function __construct()
    {
        parent::__construct();
    }
    public function getProducto($id_producto)
    {
        $sql = "SELECT p.*, c.categoria FROM productos p INNER JOIN categorias c ON p.id_categoria = c.id where p.id = $id_producto";
        return $this->select($sql);
    }
    //paginacion
    public function getProductos($desde, $porPagina)
    {
        $sql = "SELECT * FROM productos LIMIT $desde, $porPagina";
        return $this->selectAll($sql);
    }
    //optener total productos
    public function getTotalProductos()
    {
        $sql = "SELECT COUNT(*) AS total FROM productos";
        return $this->select($sql);
    }
    //productos relacionados con la categoria
    public function getProductosCat($id_categoria, $desde, $porPagina)
    {
        $sql = "SELECT * FROM productos WHERE id_categoria = $id_categoria LIMIT $desde,$porPagina";
        return $this->selectALL($sql);
    }
    //optener total productos relacionados con la categoria
    public function getTotalProductosCat($id_categoria)
    {
        $sql = "SELECT COUNT(*) AS total FROM productos where id_categoria = $id_categoria";
        return $this->select($sql);
    }
    //oductos relacionados aleatorios
    public function getAleatorios($id_categoria, $id_producto)
    {
        $sql = "SELECT * FROM productos WHERE id_categoria = $id_categoria AND id != $id_producto ORDER BY RAND() LIMIT 20";
        return $this->selectALL($sql);
    }
    //obtener productos a partir de la lista de deseo
}
