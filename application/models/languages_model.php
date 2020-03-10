<?php

/**
 * @author Marvin Kagiso
 * @since 20:32 2020/03/09
 */



/**
 * Manipulates the DB tbl_languages table.
 */
class Languages_model extends CI_Model {
    /**
     * Gets the languages using a cursor.
     * 
     * @param int The offset
     * @param int The limit
     * @return array
     */
    public function getLanuguages($offset, $limit) {
        return $this->db
                    ->order_by('name', 'ASC')
                    ->get('tbl_languages', $limit, $offset)
                    ->result();
    }

    /**
     * Gets all the languages.
     * @return array
     */
    public function getAllLanguages() {
        return $this->getLanuguages(NULL, NULL);
    }
}