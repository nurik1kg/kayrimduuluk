<?php

use yii\db\Migration;

class m161025_011844_child extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%child}}', [
            'id' => $this->primaryKey(),
            'nameKg' => $this->string()->notNull(),
            'nameRu' => $this->string()->notNull(),
            'nameEn' => $this->string()->notNull(),
            'birthday' => $this->date()->notNull(),
            'capacityKg' => $this->text(),
            'capacityRu' => $this->text(),
            'capacityEn' => $this->text(),
            'interestKg' => $this->text(),
            'interestRu' => $this->text(),
            'interestEn' => $this->text(),
            'futureKg' => $this->text(),
            'futureRu' => $this->text(),
            'futureEn' => $this->text(),
            'sex' => $this->integer()->notNull(),
            'help' => $this->boolean()->notNull(),
            'concernerid' => $this->integer()->defaultValue(0),
            'created_at' => $this->integer()->notNull(),
            'photo1'=>$this->string(),
            'photo2'=>$this->string(),
            'photo3'=>$this->string(),
            'photo4'=>$this->string(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%child}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
