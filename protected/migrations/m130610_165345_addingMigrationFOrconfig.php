<?php

class m130610_165345_addingMigrationFOrconfig extends CDbMigration {

    public function up() {
        $table = "conf_misc";


        $columns = array(
            "title" => "Date Format",
            "param" => "dateformat",
            "value" => "y/m/d",
            "field_type" => "dropDown",
            "create_time" => date("Y-m-d h:m:s"),
            "create_user_id" => "1",
            "update_time" => date("Y-m-d h:m:s"),
            "update_user_id" => "1",
        );

        $this->insert($table, $columns);

        $columns = array(
            "title" => "Smtp Email",
            "param" => "smtp",
            "value" => "y/m/d",
            "field_type" => "dropDown",
            "create_time" => date("Y-m-d h:m:s"),
            "create_user_id" => "1",
            "update_time" => date("Y-m-d h:m:s"),
            "update_user_id" => "1",
        );

        $this->insert($table, $columns);
    }

    public function down() {
        $table = "conf_misc";


        $this->delete($table, "param='dateformat' ");

        $this->delete($table, "param='smtp' ");
    }

}