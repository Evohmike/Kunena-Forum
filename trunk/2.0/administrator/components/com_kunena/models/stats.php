<?php
/**
 * @version		$Id: categories.php 4163 2011-01-07 10:45:09Z mahagr $
 * Kunena Component
 * @package Kunena
 *
 * @Copyright (C) 2008 - 2010 Kunena Team All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 */
defined ( '_JEXEC' ) or die ();

jimport ( 'joomla.application.component.model' );

/**
 * Stats Model for Kunena
 *
 * @package		Kunena
 * @subpackage	com_kunena
 * @since		1.6
 */
class KunenaModelStats extends JModel {
	protected function _getStatsClass() {
		require_once(KUNENA_PATH_LIB.'/kunena.stats.class.php');
		$kunena_stats = CKunenaStats::getInstance();

		return $kunena_stats;
	}

	public function getStatsDatas() {
		$statsclass = $this->_getStatsClass();

		return $statsclass;
	}
}