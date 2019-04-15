<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/AcheteurDAO.class.php');
	require_once('class/dto/Acheteur.class.php');
	require_once('class/mysql/AcheteurMySqlDAO.class.php');
	require_once('class/mysql/ext/AcheteurMySqlExtDAO.class.php');
	require_once('class/dao/AchtFrnDAO.class.php');
	require_once('class/dto/AchtFrn.class.php');
	require_once('class/mysql/AchtFrnMySqlDAO.class.php');
	require_once('class/mysql/ext/AchtFrnMySqlExtDAO.class.php');
	require_once('class/dao/AdminDAO.class.php');
	require_once('class/dto/Admin.class.php');
	require_once('class/mysql/AdminMySqlDAO.class.php');
	require_once('class/mysql/ext/AdminMySqlExtDAO.class.php');
	require_once('class/dao/AdminAdminDAO.class.php');
	require_once('class/dto/AdminAdmin.class.php');
	require_once('class/mysql/AdminAdminMySqlDAO.class.php');
	require_once('class/mysql/ext/AdminAdminMySqlExtDAO.class.php');
	require_once('class/dao/AdminFaDAO.class.php');
	require_once('class/dto/AdminFa.class.php');
	require_once('class/mysql/AdminFaMySqlDAO.class.php');
	require_once('class/mysql/ext/AdminFaMySqlExtDAO.class.php');
	require_once('class/dao/EvalamontDAO.class.php');
	require_once('class/dto/Evalamont.class.php');
	require_once('class/mysql/EvalamontMySqlDAO.class.php');
	require_once('class/mysql/ext/EvalamontMySqlExtDAO.class.php');
	require_once('class/dao/EvalavalDAO.class.php');
	require_once('class/dto/Evalaval.class.php');
	require_once('class/mysql/EvalavalMySqlDAO.class.php');
	require_once('class/mysql/ext/EvalavalMySqlExtDAO.class.php');
	require_once('class/dao/FamilleachatDAO.class.php');
	require_once('class/dto/Familleachat.class.php');
	require_once('class/mysql/FamilleachatMySqlDAO.class.php');
	require_once('class/mysql/ext/FamilleachatMySqlExtDAO.class.php');
	require_once('class/dao/FournisseurDAO.class.php');
	require_once('class/dto/Fournisseur.class.php');
	require_once('class/mysql/FournisseurMySqlDAO.class.php');
	require_once('class/mysql/ext/FournisseurMySqlExtDAO.class.php');
	require_once('class/dao/HistoriquerfiDAO.class.php');
	require_once('class/dto/Historiquerfi.class.php');
	require_once('class/mysql/HistoriquerfiMySqlDAO.class.php');
	require_once('class/mysql/ext/HistoriquerfiMySqlExtDAO.class.php');
	require_once('class/dao/ReclamationDAO.class.php');
	require_once('class/dto/Reclamation.class.php');
	require_once('class/mysql/ReclamationMySqlDAO.class.php');
	require_once('class/mysql/ext/ReclamationMySqlExtDAO.class.php');
	require_once('class/dao/RfiDAO.class.php');
	require_once('class/dto/Rfi.class.php');
	require_once('class/mysql/RfiMySqlDAO.class.php');
	require_once('class/mysql/ext/RfiMySqlExtDAO.class.php');
	require_once('class/dao/WebmasterDAO.class.php');
	require_once('class/dto/Webmaster.class.php');
	require_once('class/mysql/WebmasterMySqlDAO.class.php');
	require_once('class/mysql/ext/WebmasterMySqlExtDAO.class.php');
	require_once('class/dao/WmAchtDAO.class.php');
	require_once('class/dto/WmAcht.class.php');
	require_once('class/mysql/WmAchtMySqlDAO.class.php');
	require_once('class/mysql/ext/WmAchtMySqlExtDAO.class.php');

?>