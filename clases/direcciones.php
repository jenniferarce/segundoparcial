<?php  
require_once('AccesoDatos.php');

class direcciones
{
	public $id;
	public $domicilio;

	public static function TraerTodos()
	{
		$objetoAcceso = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('CALL TraerTodos()');
		$consulta->execute();
		return $consulta->fetchAll(PDO::FETCH_CLASS, 'direcciones');
	}
	public static function TraerUno($id)
  	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerUno(:id)");
		$consulta->bindValue(':id',$id, PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->fetchObject("direcciones");
	}
	public function Guardar()
	{
		$objetoAcceso = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('CALL Guardar(:domicilio)');
		$consulta->bindValue(':domicilio', $this->domicilio, PDO::PARAM_INT);
		$consulta->execute();
	}
	public function Borrar()
  	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		$consulta =$objetoAccesoDato->RetornarConsulta("CALL Borrar(:id)");
		$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
		$consulta->execute();
	}
}
?>