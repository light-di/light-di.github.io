<?php
namespace Opencart\Application\Model\Setting;
class Extension extends \Opencart\System\Engine\Model {
	public function getExtensions() {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "extension`");

		return $query->rows;
	}

	public function getExtensionsByType($type) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "extension` WHERE `type` = '" . $this->db->escape($type) . "'");

		return $query->rows;
	}

	public function getExtensionByCode($code) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "extension` WHERE `code` = '" . $this->db->escape($code) . "'");

		return $query->row;
	}
}